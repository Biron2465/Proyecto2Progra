<template>
  <div>
    <nav v-if="showNavAndFooter" id="navbar" class="navbar navbar-expand-lg">
      <div class="container-fluid" id="ContainerNav">
        <div class="logo-container">
          <a class="navbar-brand mx-5" href="/">
            <img :src="logo2" alt="Logo" class="logo1">
          </a>
        </div>
        <div class="nav-options">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item mx-2 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="whyFlockDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  WHY FLOCK?
                </a>
                <ul class="dropdown-menu" aria-labelledby="whyFlockDropdown">
                  <li><router-link class="dropdown-item" to="/testimonials"
                      style="color: black;">Testimonials</router-link></li>
                </ul>
              </li>
              <li class="nav-item mx-2 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="featuresDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  FEATURES
                </a>
                <ul class="dropdown-menu" aria-labelledby="featuresDropdown ">
                  <li><router-link class="dropdown-item" to="/admin-controls" style="color: black;">Admin
                      Controls</router-link></li>
                </ul>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">ENTERPRISE</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link" href="#">PRICING</a>
              </li>
              <li class="nav-item mx-2 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="learnmoreDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  LEARN MORE
                </a>
                <ul class="dropdown-menu" aria-labelledby="learnmoreDropdown">
                  <li><router-link class="dropdown-item" to="/microsoft-teams" style="color: black;">Microsoft
                      Teams</router-link></li>
                </ul>
              </li>
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn btn-outline-light" href="/sign-in">SIGN IN</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <router-view />
    <section v-if="showNavAndFooter" class="section16 py-5 text-center">
      <div class="container">
        <div class="row">
          <!-- Footer content -->
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import Logo1 from '@/assets/App/Flock Logo-2.svg';
import Logo2 from '@/assets/App/Flock-Logo - Color - Inverted.svg';

export default {
  name: 'App',
  data() {
    return {
      logo1: Logo1,
      logo2: Logo2
    };
  },
  computed: {
    showNavAndFooter() {
      return this.$route.path !== '/sign-in';
    }
  },
  mounted() {
    window.addEventListener('scroll', this.handleScroll);
  },
  beforeUnmount() {
    window.removeEventListener('scroll', this.handleScroll);
  },
  methods: {
    handleScroll() {
      var nav = document.getElementById('navbar');
      var navItems = nav.querySelectorAll('ul li a, ul li select, ul li button');
      var navImage = nav.querySelector('img');
      var content = document.getElementById('ContainerNav');
      var button = document.querySelector('.btn');
      var options = document.querySelectorAll('.dropdown-item');
      if (window.pageYOffset > 0) {
        content.style.marginTop = '0';
        nav.style.backgroundColor = 'white';
        button.style.borderColor = 'black';
        navItems.forEach(function (item) {
          item.style.color = '#585858';
        });
        navImage.src = this.logo1;
        navImage.style.height = '30px';
      } else {
        content.style.marginTop = '20px';
        nav.style.backgroundColor = '#171729';
        button.style.borderColor = 'white';
        navItems.forEach(function (item) {
          item.style.color = 'white';
        });
        options.forEach(function (item) { // Aquí agregamos un bucle para cambiar el color de todos los elementos .dropdown-item
          item.style.color = 'black';
        });
        navImage.src = this.logo2;
        navImage.style.height = '40px';
      }
    }
  }
}
</script>

<style scoped>
#navbar {
  background: #171729;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
}

#navbar .container-fluid {
  margin-top: 20px;
  display: flex;
  justify-content: space-between;
}

#navbar .nav-options {
  margin-right: 40px;
}

#navbar .logo1 {
  height: 40px;
}

#navbar ul li a {
  color: #ffff;
  text-decoration: none;
  align-items: center;
}

.nav-link.btn {
  border: 1px solid white;
}

.nav-link.btn,
.nav-link.btn:hover {
  border: 1px solid white;
  background-color: transparent;
  color: white;
}

.section16 {
  background-color: #0c0e1a;
  padding: 0;
  margin: 0;
}

.section16 .list-unstyled {
  color: white;
  text-align: start;
}

.section16 .list-unstyled a {
  color: #a3a19f;
  text-decoration: none;
}

.section16 .list-unstyled a:hover {
  color: #0abe51;
  text-decoration: none;
}

.section16 .list-unstyled .icons a:hover {
  color: #007bff;
}

.section16 .list-unstyled .end-align {
  text-align: end;
}
</style>
