<template>
    <div class="wpapper" id="wrapper">
        <header-component/>
        <!-- <dashboard/> -->
        <!-- <form-activation/> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        
    </div>
</template>
<script>
import HeaderComponent from './Header/HeaderComponent.vue'
import Dashboard from './Main/Dashboard/Dashboard.vue'
import FormActivation from './Forms/FormActivation.vue'

export default {
    name: 'App',
    components: {
        HeaderComponent, Dashboard, FormActivation
    },
    setup() {

    }
}
</script>

<style>
    #wrapper {
        width: 100%;
        height: auto;
/*        background: #f4f4f4;*/
    }
</style>
