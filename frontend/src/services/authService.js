import api from "../api/axios";

const authService = {
    // async csrf() {
    //     return await api.get('/sanctum/csrf-cookie');
    // },

    async login(credentials) {
        // await this.csrf();

        return await api.post('/login', credentials);
    },

    async register(data) {
        // await this.csrf();

        return await api.post('/register', data);
    },

    async logout() {
        return await api.post('/logout');
    },

    async getUser() {
        return await api.get('/api/user');
    },

    async verify(){
        return await api.post('/api/verify'); 
    }
};

export default authService;