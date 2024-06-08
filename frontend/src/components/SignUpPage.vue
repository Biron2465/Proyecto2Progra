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
                        <form @submit.prevent="signUp" class="bg-light p-4 rounded shadow-sm form">
                            <div class="mb-3">
                                <input v-model="name" class="form-control mb-3" type="text" name="name"
                                    placeholder="Introduzca su nombre">
                                <input v-model="apellido1" class="form-control mb-3" type="text" name="apellido1"
                                    placeholder="Introduzca su primer apellido">
                                <input v-model="apellido2" class="form-control mb-3" type="text" name="apellido2"
                                    placeholder="Introduzca su segundo apellido">
                                <input v-model="email" class="form-control mb-3"
                                    :class="{ 'border-success': submitted && emailExists, 'border-danger': submitted && !emailExists && email }"
                                    type="email" name="email" placeholder="Introduzca su correo Electrónico">
                                <input v-model="password" class="form-control mb-3" type="password" name="password"
                                    placeholder="Introduzca su contraseña">
                                <input v-model="confirmPassword" class="form-control mb-3" type="password"
                                    name="confirmPassword" placeholder="Confirme su contraseña">
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-6 ">
                                        <button type="submit" class="btn botn btn-block">Registrarse</button>
                                    </div>
                                    <div class="col-6 text-end py-2">
                                        <a href="/sign-in">Iniciar Sesión</a>
                                    </div>
                                </div>
                            </div>
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
    data() {
        return {
            email: '',
            password: '',
            confirmPassword: '', 
            emailExists: false,
            submitted: false
        };
    },
    methods: {
        async signUp() {
            this.submitted = true;


            if (this.password !== this.confirmPassword) {
                alert('Las contraseñas no coinciden.');
                return;
            }
            // Validación de entrada
            if (!this.email || !this.password || !this.name || !this.apellido1 || !this.apellido2) {
                alert('Por favor, rellena todos los campos.');
                return;
            }

            console.log('Registrando con el email:', this.email);

            try {
                const response = await fetch('http://localhost:8000/register', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        email: this.email,
                        password: this.password,
                        name: this.name,
                        apellido1: this.apellido1,
                        apellido2: this.apellido2,
                    }),
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();

                if (data.success) {
                    this.$router.push('/sign-in');
                    alert('Registro exitoso. Bienvenido a Flock.');
                } else {
                    alert('El registro falló. Por favor, inténtalo de nuevo.');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Hubo un error al registrar. Por favor, inténtalo de nuevo.');
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

form {
    background-color: white;
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


.col-6 a {
    color: #0abe51;
    text-decoration: none;
    font-size: 16px;
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