<script setup>
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3';

import backgroundTopUrl from "@/../img/top-calculator-form/background-top.png";
import backgroundPeoplesUrl from "@/../img/top-calculator-form/background-peoples.png";
import backgroundCircleUrl from "@/../img/top-calculator-form/background-circle.png";

const form = reactive({
    name: null,
    birthday: null,
    gender: 'female',
});

function setGender(gender) {
    form.gender = gender;
}

function submitCalculator() {
    router.post('/contact/save', form);
}

</script>

<template>
    <div class="page" id="top-calculator-form" :style="{ 'background-image': `url(${backgroundTopUrl})` }">
        <div class="calculator-form">
            <div class="title">DARMOWY KALKULATOR MATRYCY LOSU ONLINE</div>
            <div class="description">Tutaj możesz całkowicie za darmo wyliczyć swoją matryce losu na podstawie
                twojej daty urodzenia. Ten kalkulator jest darmowy, natomiast jeżeli będziesz chciał się
                dowiedzieć czegoś więcej (wszystkie interpretacje każdego arkanu TWOJEJ indywidualnej Matrycy w
                formacie PDF) przejdź do naszych taryfów.</div>
            <div class="offset">
                <input v-model="form.name" placeholder="IMIE" class="name input gt2bt" :class="{error: $page.props.errors.name}" type="text">
            </div>
            <div class="offset">
                <input v-model="form.birthday" placeholder="DATA URODZENIA" class="birthday input gt2bt" :class="{error: $page.props.errors.birthday}" type="date">
            </div>
            <div class="offset" style="display: flex; justify-content: space-between;">
                <button @click="setGender('female')" class="gender radio"
                    :class="{ active: form.gender == 'female' }">KOBIETA</button>
                <button @click="setGender('male')" class="gender radio"
                    :class="{ active: form.gender == 'male' }">MEZCZYZNA</button>
            </div>
            <div class="offset">
                <button @click="submitCalculator" class="submit button o2b">WYLICZ</button>
            </div>
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

.name,
.birthday {
    padding: 14px;
    width: calc(100% - 32px);
}

.gender {
    width: 49%;
}

.submit {
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
    width: 550px;
    transform: translate(-50%, -50%);
    z-index: 2;
}

.calculator-form .title {
    font-size: 23px;
    font-weight: bold;
    text-align: justify;
}

.calculator-form .title::after {
    content: "";
    display: inline-block;
    width: 100%;
}

.calculator-form .description {
    font-size: 16px;
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
