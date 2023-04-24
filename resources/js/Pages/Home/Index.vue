<script setup>
import { Head } from '@inertiajs/vue3';
import TopNavigation from "@/Components/TopNavigation.vue";
import TopCalculatorForm from "@/Pages/Home/TopCalculatorForm.vue";
import AboutMatrix from "@/Pages/Home/AboutMatrix.vue";
import NeedIf from "@/Pages/Home/NeedIf.vue";

const windowHeight = window.innerHeight + "px";
const windowWidth = Math.min(1300, window.innerWidth) + "px";
</script>

<template>
    <Head title="Home" />

    <div class="container">
        <div class="content">
            <TopNavigation />
            <TopCalculatorForm />
            <AboutMatrix />
            <NeedIf />
        </div>
    </div>
</template>

<style>
.page {
    min-height: 700px;
    height: v-bind(windowHeight);
}

.container {
    display: flex;
    justify-content: center;
}

.container .content {
    flex: 0 1 v-bind(windowWidth);
}

.page-box {
    padding: 140px 0 20px 40px;
}

.page-box .box-title {
    font-weight: bold;
    font-size: 50px;
    text-align: center;
    margin-bottom: 20px;
}

.page-box .box-description {
    font-size: 20px;
}
</style>
