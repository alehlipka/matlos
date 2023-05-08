<script setup>
import { Head } from '@inertiajs/vue3';
import TopNavigation from "@/Components/TopNavigation.vue";
import Registration from "@/Pages/Payment/Registration.vue";
import Success from "@/Pages/Payment/Success.vue";
import Error from "@/Pages/Payment/Error.vue";
import PaymentData from "@/Pages/Payment/PaymentData.vue";
import Footer from "@/Components/Footer.vue";

const windowHeight = window.innerHeight + "px";
const windowWidth = Math.min(1300, window.innerWidth) + "px";
</script>

<template>
    <Head title="Zamówienie" />

    <div class="container">
        <div class="content">
            <TopNavigation :dynamic="false" />
            <Registration />
            <Success />
            <Error />
            <PaymentData />
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
    padding: 50px 0 0 40px;
}

.page-box .box-title {
    font-weight: bold;
    font-size: 50px;
    text-align: left;
    margin: 0 0 20px 0;
}

.page-box .box-description {
    font-size: 20px;
}
</style>
