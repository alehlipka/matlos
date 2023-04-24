<script setup>
import { Head } from '@inertiajs/vue3';
import TopNavigation from "@/Components/TopNavigation.vue";
import TopCalculatorForm from "@/Pages/Home/TopCalculatorForm.vue";
import AboutMatrix from "@/Pages/Home/AboutMatrix.vue";

const windowHeight = window.innerHeight + "px";
</script>

<template>
    <Head title="Home" />

    <div class="container">
        <div class="content">
            <TopNavigation />
            <TopCalculatorForm />
            <AboutMatrix />
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
    flex: 0 1 1300px;
}
</style>
