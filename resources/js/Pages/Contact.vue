<script setup>
import { Head } from '@inertiajs/vue3';
import TopNavigation from "@/Components/TopNavigation.vue";
import Contact from "@/Pages/Parts/Contact.vue";
import Footer from "@/Pages/Parts/Footer.vue";

const windowHeight = window.innerHeight + "px";
const windowWidth = Math.min(1300, window.innerWidth) + "px";
</script>

<template>
    <Head title="KONTAKT" />

    <div class="container">
        <div class="content">
            <TopNavigation :dynamic="false" />
            <Contact />
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
    padding: 150px 0 20px 40px;
}

.page-box .box-title {
    font-weight: bold;
    font-size: 50px;
    text-align: center;
    margin-bottom: 50px;
}

.page-box .box-description {
    font-size: 20px;
}
</style>
