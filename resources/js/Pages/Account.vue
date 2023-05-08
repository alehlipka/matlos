<script setup>
import { Head } from '@inertiajs/vue3';
import TopNavigation from "@/Components/TopNavigation.vue";
import Footer from "@/Components/Footer.vue";

const windowHeight = window.innerHeight + "px";
const windowWidth = Math.min(1300, window.innerWidth) + "px";
</script>

<template>
    <Head title="Konto" />

    <div class="container">
        <div class="content">
            <TopNavigation :dynamic="false" />
            <Footer />
        </div>
    </div>
</template>

<style>
.page {
    min-height: v-bind(windowHeight);
}

.container {
    display: flex;
    justify-content: center;
}

.container .content {
    flex: 0 1 v-bind(windowWidth);
}

.page-box {
    padding: 50px 0;
}

.page-box .box-title {
    font-weight: bold;
    font-size: 50px;
    text-align: left;
    margin: 0 0 50px 40px;
}

.page-box .box-description {
    font-size: 20px;
}
</style>
