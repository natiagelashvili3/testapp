<template>
    <div>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal"></h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <router-link to="/" class="p-2 text-dark">Home</router-link>
                <router-link to="/about" class="p-2 text-dark">About</router-link>
                <router-link to="/blogs" class="p-2 text-dark">Blogs</router-link>
            </nav>
            <a class="btn btn-outline-primary" href="#">Sign up</a>
        </div>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: "app"
    }
</script>

<style scoped>

</style>
