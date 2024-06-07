<template>
    <div class="container-fluid">
        <section class="sectionLogIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 py-4">
                        <div class="text-center mb-4">
                            <a href="/">
                                <img src="../assets/SignInPage/Flock Logo-2.svg" alt="" class="logo" href="/">
                            </a>
                        </div>
                        <form @submit.prevent="login" class="bg-light p-4 rounded shadow-sm form">
                            <img src="../assets/SignInPage/quick-sign-up.png" alt="" class="imgSignIn py-2">
                            <h2 class="mb-3">Empieza a usar Flock</h2>
                            <p>Introduce tu datos para continuar</p>
                            <div class="mb-3">
                                <input v-model="email" class="form-control"
                                    :class="{ 'border-success': submitted && emailExists, 'border-danger': submitted && !emailExists && email }"
                                    type="email" name="email" placeholder="Enter your email id">

                                <input v-model="password" class="form-control" type="password" name="password"
                                    placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn botn btn-block">Iniciar sesión</button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="#">Contactar con el servicio de asistencia</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    props: ['user'],
    data() {
        return {
            email: '',
            password: '',
            emailExists: false,
            submitted: false
        };
    },
    methods: {
        async login() {
            this.submitted = true;

            // Validación de entrada
            if (!this.email || !this.password) {
                alert('Por favor, rellena todos los campos.');
                return;
            }

            console.log('Email:', this.email);

            try {
                const response = await fetch('http://localhost:8000/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        email: this.email,
                        password: this.password,
                    }),
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();

                if (data.success) {
                    this.emailExists = true;
                    localStorage.setItem('user', JSON.stringify(data.user));
                    this.$router.push({ name: 'Chat', params: { user: data.user } });
                } else {
                    this.emailExists = false;
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Hubo un error al iniciar sesión. Por favor, inténtalo de nuevo.');
            }
        }
    }
};


</script>

<style scoped>
.container-fluid {
    background-color: #f2f2f2;
    flex-direction: column;
    height: 100vh;
}

.logo {
    width: 25%;
}

.imgSignIn {
    display: block;
    margin-left: auto;
    margin-right: auto;
    height: 150px;
    margin-bottom: 30px;
}


.botn {
    background-color: #0abe51;
    color: #ffffff;
}

.botn:hover {
    background-color: #0abe51;
    color: #ffffff;
}

a {
    color: #888888;
    text-decoration: underline;
    font-size: 13px;
    margin-top: 20px;
}

input:focus {
    border-color: #0abe51;
    outline: none;
    box-shadow: 0 0 5px #0abe51;
}

.form p {
    color: #888888;
}

.border-success {
    border-color: #28a745 !important;
    /* Green */
}

.border-danger {
    border-color: #dc3545 !important;
    /* Red */
}
</style>