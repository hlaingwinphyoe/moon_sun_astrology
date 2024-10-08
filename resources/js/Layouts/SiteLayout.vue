<template>
    <main>
        <Header />

        <slot />
    </main>
</template>

<script>
import Header from "@/Pages/Site/Header.vue";
export default {
    components: {
        Header,
    },
};
</script>

<style></style>
