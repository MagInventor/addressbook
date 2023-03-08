<template>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top text-bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Address</a>
                <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarCollapse" 
                    aria-controls="navbarCollapse" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation"
                    @click="toggleMenu"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Features</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-white">About</a></li>
                    </ul>
                  
                    <form class="d-flex" role="search">
                        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="text-end mb-4 mt-4 mb-md-0 mt-md-0 ms-2">
                        <button type="button" class="btn btn-outline-info me-2">Login</button>
                        <button type="button" class="btn btn-outline-light">Sign-up</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>

<script>
    export default {
        name: 'HeaderComponent',
        components: {
            
        },
        methods: {
            toggleMenu() {
                document.getElementById('navbarCollapse').classList.toggle('show')
            }
            // redirectToAboutPage() {
            //     window.location.href = '/about'
            // }
        }
    }
</script>
<style>
    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .form-control-dark {
        border-color: var(--bs-gray);
    }

    .form-control-dark:focus {
        border-color: #fff;
        box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
    }
</style>
