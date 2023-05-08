<script setup>
import { Head } from '@inertiajs/vue3';
import TopNavigation from "@/Components/TopNavigation.vue";
import TopCalculatorForm from "@/Pages/Parts/TopCalculatorForm.vue";
import MatrixMap from "@/Pages/Parts/MatrixMap.vue";
import MatrixDemoResult from "@/Pages/Parts/MatrixDemoResult.vue";
import AboutMatrix from "@/Pages/Parts/AboutMatrix.vue";
import NeedIf from "@/Pages/Parts/NeedIf.vue";
import WhatSay from "@/Pages/Parts/WhatSay.vue";
import Price from "@/Pages/Parts/Price.vue";
import Social from "@/Pages/Parts/Social.vue";
import TwoWays from "@/Pages/Parts/TwoWays.vue";
import Footer from "@/Pages/Parts/Footer.vue";

const windowHeight = window.innerHeight + "px";
const windowWidth = Math.min(1300, window.innerWidth) + "px";
</script>

<template>
    <Head title="Główna" />

    <div class="container">
        <div class="content">
            <TopNavigation />

            <TopCalculatorForm />
            <MatrixMap v-if="$page.props.calculated" />
            <MatrixDemoResult v-if="$page.props.calculated" />
            <AboutMatrix />
            <NeedIf />
            <WhatSay />
            <Price />
            <Social />
            <TwoWays />

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
