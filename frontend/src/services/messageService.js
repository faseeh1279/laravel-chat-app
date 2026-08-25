import api from "../api/axios";

const messageService = {

    async getMessages() {
        return await api.get("/api/messages");
    },

    async sendMessage(message) {
        return await api.post("/api/messages", {
            message,
        });
    },

};

export default messageService;