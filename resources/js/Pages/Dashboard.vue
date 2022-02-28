<template>
    <h1>{{ dashboard }}</h1>
</template>

<script>
export default {
    el: "#app",
    name: "Dashboard",
    props: ["title"],

    data() {
        return {
            dashboard: "Dashboard",
        };
    },

    mounted() {
        this.dashboard = this.title;

        alert(this.dashboard);
    },
};
</script>

<style></style>
