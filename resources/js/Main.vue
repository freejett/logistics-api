<template>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <router-link to="/" class="navbar-brand" href="#">Brand LTD</router-link>
<!--                <div class="collapse navbar-collapse">-->
<!--                    <div class="navbar-nav">-->
<!--                        <router-link exact-active-class="active" to="/" class="nav-item nav-link">Главная</router-link>-->
<!--                    </div>-->
<!--                </div>-->

            </div>
        </nav>
        <div class="container mt-5">
            <router-view></router-view>
        </div>
    </main>
</template>

<script>
// export default {
//     name: "Application"
// }
export default {}
</script>

<style scoped>

</style>
