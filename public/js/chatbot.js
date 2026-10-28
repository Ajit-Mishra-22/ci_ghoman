document.addEventListener("DOMContentLoaded", () => {
    const widget = document.querySelector(".lella-chat");
    if (!widget) return;

    const panel = widget.querySelector(".lella-panel");
    const launcher = widget.querySelector(".lella-launcher");
    const closeButton = widget.querySelector(".lella-close");
    const form = widget.querySelector(".lella-form");
    const input = widget.querySelector("#lellaInput");
    const sendButton = widget.querySelector(".lella-send");
    const messages = widget.querySelector(".lella-messages");
    const endpoint = widget.dataset.endpoint;
    const visitorKey = "ghoman_chat_visitor_id";

    function createVisitorId() {
        const bytes = new Uint8Array(16);
        window.crypto.getRandomValues(bytes);
        bytes[6] = (bytes[6] & 0x0f) | 0x40;
        bytes[8] = (bytes[8] & 0x3f) | 0x80;
        const hex = [...bytes].map((byte) => byte.toString(16).padStart(2, "0")).join("");
        return `${hex.slice(0, 8)}-${hex.slice(8, 12)}-${hex.slice(12, 16)}-${hex.slice(16, 20)}-${hex.slice(20)}`;
    }

    let visitorId;
    try {
        visitorId = localStorage.getItem(visitorKey);
        if (!visitorId) {
            visitorId = createVisitorId();
            localStorage.setItem(visitorKey, visitorId);
        }
    } catch (error) {
        visitorId = createVisitorId();
    }

    function setOpen(open) {
        panel.hidden = !open;
        panel.setAttribute("aria-hidden", String(!open));
        launcher.setAttribute("aria-expanded", String(open));
        widget.classList.toggle("panel-open", open);
        if (open) input.focus();
        else launcher.focus();
    }

    function addMessage(text, sender, isError = false) {
        widget.classList.add("has-messages");
        const bubble = document.createElement("div");
        bubble.className = `lella-message lella-message-${sender}${isError ? " lella-message-error" : ""}`;
        bubble.textContent = text;
        messages.appendChild(bubble);
        messages.scrollTop = messages.scrollHeight;
        return bubble;
    }

    async function sendMessage(text) {
        const message = text.trim();
        if (!message || sendButton.disabled) return;

        addMessage(message, "user");
        input.value = "";
        sendButton.disabled = true;
        const pending = addMessage("One moment…", "bot");

        try {
            const response = await fetch(endpoint, {
                method: "POST",
                headers: { "Content-Type": "application/json", "Accept": "application/json" },
                body: JSON.stringify({ visitor_id: visitorId, message })
            });
            let data;
            try {
                data = await response.json();
            } catch (error) {
                if (!response.ok) throw new Error("Chat is temporarily unavailable. Please email hello@ghoman.ca for help.");
                throw new Error("I couldn't read the response. Please try again.");
            }
            if (!response.ok) throw new Error(data.error || "Your message could not be sent.");
            pending.textContent = data.reply;
            messages.scrollTop = messages.scrollHeight;
        } catch (error) {
            pending.textContent = error instanceof TypeError
                ? "I couldn't connect just now. Please try again or email hello@ghoman.ca."
                : error.message;
            pending.classList.add("lella-message-error");
            console.error("Chatbot request failed.", error);
        } finally {
            sendButton.disabled = false;
            input.focus();
        }
    }

    launcher.addEventListener("click", () => setOpen(true));
    closeButton.addEventListener("click", () => setOpen(false));
    form.addEventListener("submit", (event) => {
        event.preventDefault();
        sendMessage(input.value);
    });
    widget.querySelectorAll(".lella-suggestions button").forEach((button) => {
        button.addEventListener("click", () => sendMessage(button.dataset.message));
    });
    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape" && !panel.hidden) setOpen(false);
    });
});
