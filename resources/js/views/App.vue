<template>
    <div>
        <h1>Prueba de ingreso a ConceptHaus</h1>

        <p>
            <router-link :to="{ name: 'home' }">Alumnos</router-link> |
            <router-link :to="{ name: 'calificaciones' }">Calificaciones</router-link>
        </p>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {}
</script>