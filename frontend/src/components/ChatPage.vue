<template>
    <div class="container-fluid">
        <div class="row py-2">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">{{ user ? user.name + ' ' + user.apellido1 + ' ' + user.apellido2 : '' }}
                            </h5>
                            <div class="dropdown">
                                <button class="btn btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-gear-fill"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#" @click="signOut">Sign Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control" placeholder="Start a chat (Ctrl + K)">
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
                                    <div class="d-flex justify-content-end">
                                        <i class="bi bi-chat-left"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Contenedor desplazable para los mensajes -->
                                    <div style="overflow-y: auto; max-height: 240px; " ref="messagesContainer">
                                        <div v-for="(message, index) in messages" :key="index">
                                            <strong>{{ message.userName }}</strong>
                                            <p>{{ message.data }} <small style="float: right;">{{
                                                formatDate(message.date) }}</small></p>
                                            <!-- Este bloque solo se muestra si newMessageText tiene contenido -->
                                            <div v-if="message.text && message.text.trim() !== ''">
                                                <strong>{{ message.user }}</strong>
                                                <p>{{ message.text }} <small style="float: right;">{{
                                                        formatDate(message.date) }}</small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Sección fija para enviar mensaje -->
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
        this.loadMessages();
    },
    methods: {
        loadMessages() {
            fetch('http://localhost:8000/Message', { // Asegúrate de que esta URL sea correcta
                method: 'GET'
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    this.messages = data; // Asume que `data` es un array de mensajes
                    this.$nextTick(() => {
                    this.scrollToBottom();
                });
                })
                .catch(error => {
                    console.error("Hubo un error al cargar los mensajes:", error);
                });
        },
        sendMessage() {
            if (this.currentMessage.trim() !== '') {
                // Preparar los datos a enviar
                const messageData = {
                    message: this.currentMessage,
                    user_id: this.user.idUsers // Asegúrate de que el objeto user tenga un campo id
                };

                // Enviar los datos al servidor mediante una solicitud POST usando fetch
                fetch('http://localhost:8000/rMessage', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(messageData),
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`HTTP error! status: ${response.status}`);
                        }
                        return response.json();
                    })
                    .then(() => { // Aquí se quitó `data` ya que no se utiliza
                        const now = new Date();
                        // Formatear la fecha y hora
                        const formattedDate = now.getFullYear() + '-' +
                            ('0' + (now.getMonth() + 1)).slice(-2) + '-' +
                            ('0' + now.getDate()).slice(-2) + ' ' +
                            ('0' + now.getHours()).slice(-2) + ':' +
                            ('0' + now.getMinutes()).slice(-2) + ':' +
                            ('0' + now.getSeconds()).slice(-2);
                        // Aquí puedes agregar el mensaje a `messages` si quieres mostrarlo inmediatamente
                        this.messages.push({
                            user: this.user.name,
                            text: this.currentMessage,
                            date: formattedDate
                        });
                        this.currentMessage = '';
                        this.loadMessages();
                    })
                    .catch(error => {
                        console.error("Hubo un error al enviar el mensaje:", error);
                    });
            }
        },
        scrollToBottom() {
            const container = this.$refs.messagesContainer;
            if (container) {
                container.lastElementChild.scrollIntoView({ behavior: "smooth" });
            }
        },
        signOut() {
            // Remove user data from localStorage
            localStorage.removeItem('user');

            // Redirect to /signIn
            this.$router.push('/sign-in');
        },
        formatDate(dateString) {
            const date = new Date(dateString);
            return date.toLocaleDateString();
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