<script setup>
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3';

import backgroundTopUrl from "@/../img/top-calculator-form/background-top.png";
import backgroundPeoplesUrl from "@/../img/top-calculator-form/background-peoples.png";
import backgroundCircleUrl from "@/../img/top-calculator-form/background-circle.png";

import PrimaryButton from '@/Components/PrimaryButton.vue';

const form = reactive({
    name: null,
    birthday: null,
    gender: '',
});

</script>

<template>
    <div class="page" id="top-calculator-form" :style="{ 'background-image': `url(${backgroundTopUrl})` }">
        <div class="calculator-form">
            <div class="title">DARMOWY KALKULATOR MATRYCY LOSU ONLINE</div>
            <div class="description">Tutaj możesz całkowicie za darmo wyliczyć swoją matryce losu na podstawie
                twojej daty urodzenia. Ten kalkulator jest darmowy, natomiast jeżeli będziesz chciał się
                dowiedzieć czegoś więcej (wszystkie interpretacje każdego arkanu TWOJEJ indywidualnej Matrycy w
                formacie PDF) przejdź do naszych taryfów.</div>
            <div class="offset"><input placeholder="IMIE" class="calc-btn input gt2bt" type="text"></div>
            <div class="offset"><input placeholder="DATA URODZENIA" class="calc-btn input gt2bt" type="date"></div>
            <div class="offset"><button class="calc-btn button o2b">WYLICZ</button></div>
            <div class="offset"><button class="calc-btn button o2b">WYLICZ</button></div>
            <!-- <div class="offset"><button class="calc-btn button b2o">WYLICZ</button></div> -->
            <!-- <div class="offset"><button class="calc-btn button g2o">WYLICZ</button></div> -->
            <!-- <div class="offset"><button class="calc-btn button w2g">WYLICZ</button></div> -->
            <!-- <div class="offset"><button class="calc-btn button bt2b">WYLICZ</button></div> -->
            <!-- <div class="offset"><button class="calc-btn button gt2b">WYLICZ</button></div> -->
            <!-- <div class="offset"><button class="calc-btn button gt2o">WYLICZ</button></div> -->
        </div>
        <div class="bottoms">
            <div class="peoples" :style="{ 'background-image': `url(${backgroundPeoplesUrl})` }"></div>
            <div class="right-circle" :style="{ 'background-image': `url(${backgroundCircleUrl})` }"></div>
        </div>
    </div>
</template>

<style scoped>
.offset {
    margin-top: 10px;
}
.calc-btn {
    font-weight: bold;
    width: 100%;
    font-size: 20px;
}

#top-calculator-form {
    background-repeat: no-repeat;
    background-position-y: -2px;
    position: relative;
}

.calculator-form {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 500px;
    transform: translate(-50%, -50%);
    z-index: 2;
}

.calculator-form .title {
    font-size: 19px;
    font-weight: bold;
    text-align: justify;
}

.calculator-form .title::after {
    content: "";
    display: inline-block;
    width: 100%;
}

.calculator-form .description {
    font-size: 14px;
    text-align: justify;
}

.calculator-form .description::after {
    content: "";
    display: inline-block;
    width: 100%;
}

.bottoms {
    position: absolute;
    bottom: 0px;
    left: 0px;
    width: 100%;
    height: calc(100% - 200px);
    display: flex;
}

.bottoms .peoples {
    width: 100%;
    background-repeat: no-repeat;
    background-position: left bottom;
}

.bottoms .right-circle {
    width: 100%;
    background-repeat: no-repeat;
    background-position: right top;
    background-size: contain;
}
</style>
