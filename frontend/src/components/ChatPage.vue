<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">{{ user ? user.name : '' }}</h5>
                            <i class="bi bi-gear-fill"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control" placeholder="Establece un estado...">
                        <div class="mt-3">
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-chat-left"></i> Start a chat (Ctrl + K)
                            </button>
                        </div>
                    </div>
                    <div class="card-header">
                        <h5 class="mb-0">Chats anclados</h5>
                    </div>
                    <div class="card-body">
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="bi bi-chat-left"></i> Biron A (me)
                        </a>
                    </div>
                    <div class="card-header">
                        <h5 class="mb-0">Abrir chats</h5>
                    </div>
                    <div class="card-body">
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="bi bi-chat-left"></i> Equipo Central - Me : hola
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="bi bi-megaphone"></i> Anuncios
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="bi bi-robot"></i> Flock Bot - Your Flock PRO trial en...
                        </a>
                    </div>
                    <div class="card-header">
                        <h5 class="mb-0">Chats recientes</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Equipo Central</h5>
                            <i class="bi bi-question-circle-fill"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <i class="bi bi-person-fill"></i>
                                <span class="mx-2">1</span>
                                <span>+ Añadir</span>
                            </div>
                            <div>
                                Este canal te permite conectarte con todos los miembros del equipo. Úsalo para
                                compartir
                                información, novedades, o para
                                divertirte con tus compañeros de trabajo.
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-outline-primary">
                                <i class="bi bi-check2-circle"></i> Add a to-do
                            </button>
                            <button class="btn btn-outline-secondary mx-2">
                                <i class="bi bi-alarm"></i> Set a reminder
                            </button>
                            <button class="btn btn-outline-success">
                                <i class="bi bi-grid-1x2-fill"></i> Connect an app
                            </button>
                        </div>
                        <div class="col-md-12 p-3">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Biron Aguilar Rodriguez</h5>
                                        <i class="bi bi-chat-left"></i>
                                    </div>
                                </div>
                                <div class="card-body" style="overflow-y: auto; max-height: 290px;">
                                    <div v-for="(message, index) in messages" :key="index">
                                        <strong>{{ message.user }}:</strong>
                                        <p>{{ message.text }}</p>
                                    </div>
                                    <div class="mt-3">
                                        <input type="text" class="form-control"
                                            placeholder="Enviar mensaje a Equipo Central" v-model="currentMessage"
                                            @keydown.enter="sendMessage">
                                    </div>
                                    <div class="mt-2 d-flex justify-content-between">
                                        <div>
                                            <button class="btn "><i class="bi bi-plus"></i></button>
                                            <button class="btn "><i class="bi bi-type-bold"></i></button>
                                            <button class="btn "><i class="bi bi-type-italic"></i></button>
                                            <button class="btn "><i class="bi bi-type-underline"></i></button>
                                            <button class="btn "><i class="bi bi-type-strikethrough"></i></button>
                                            <button class="btn "><i class="bi bi-paint-bucket"></i></button>
                                            <button class="btn "><i class="bi bi-link-45deg"></i></button>
                                        </div>
                                        <div>
                                            <button class="btn">Aa</button>
                                            <button class="btn"><i class="bi bi-emoji-smile"></i></button>
                                            <button class="btn"><i class="bi bi-paperclip"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            user: null,
            messages: [],
            currentMessage: ''
        }
    },
    mounted() {
        this.user = this.$route.params.user;
        if (!this.user) {
            this.user = JSON.parse(localStorage.getItem('user'));
        }
        console.log(this.user);
    },
    methods: {
        sendMessage() {
            if (this.currentMessage.trim() !== '') {
                this.messages.push({
                    user: 'User 1',
                    text: this.currentMessage
                });
                this.currentMessage = '';
            }
        }
    }
    // ...
}
</script>

<style scoped>
.col-md-4 .card {
    background-color: #eeeeee;
}
</style>