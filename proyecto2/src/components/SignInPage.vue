<template>
    <div class="container-fluid">
        <section class="sectionLogIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="text-center mb-4">
                            <a href="/">
                                <img src="../assets/SignInPage/Flock Logo-2.svg" alt="" class="logo" href="/">
                            </a>
                        </div>
                        <form @submit.prevent="login" class="bg-light p-4 rounded shadow-sm form">
                            <img src="../assets/SignInPage/quick-sign-up.png" alt="" class="imgSignIn py-2">
                            <h2 class="mb-3">Empieza a usar Flock</h2>
                            <p>Introduce tu dirección de correo electrónico para continuar</p>
                            <div class="mb-3">
                                <input v-model="email" class="form-control" type="email" name="email"
                                    placeholder="Enter your email id">
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
    data() {
        return {
            email: '',
            password: ''
        };
    },
    methods: {
        login() {
            // Aquí puedes manejar la lógica de inicio de sesión, por ejemplo, enviar una solicitud al servidor
            console.log('Email:', this.email);
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

.logo{
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

a{
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

.form p{
    color: #888888;
}


</style>