<script setup>
import { reactive } from 'vue';
import { Link, router } from '@inertiajs/vue3';

const form = reactive({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});

function submitForm() {
    // router.post('/contact/save', form);
}
</script>

<template>
    <div class="page">
        <div class="page-box">
            <div class="box-title">OPŁATA ZAMÓWIENIA</div>
            <div class="subtitle">
                W celu dokonania zakupu podaj dane do założenia konta osobistego.<br>
                Jesteś już zarejestrowany na naszej stronie? Zaloguj się na swoje
                <Link class="link-profile" href="/account">konto</Link>.
            </div>
            <div class="box-description">
                <div class="left">
                    <div class="info">
                        <p style="margin-bottom: 8px;">KUPUJESZ PAKIET:</p>
                        <p style="margin-bottom: 6px;">«Wszytko dla siebie»</p>
                        <p>Kwota 19,99 zł brutto</p>
                    </div>
                </div>
                <div class="center">
                    <div class="form">
                        <p>
                            <input v-model="form.name" placeholder="IMIE" class="name input gt2bt"
                                :class="{ error: $page.props.errors.name }" type="text">
                        </p>
                        <p>
                            <input v-model="form.email" placeholder="EMAIL" class="name input gt2bt"
                                :class="{ error: $page.props.errors.email }" type="email">
                        </p>
                        <p>
                            <input v-model="form.password" placeholder="HASŁO" class="name input gt2bt"
                                :class="{ error: $page.props.errors.password }" type="password">
                        </p>
                        <p>
                            <input v-model="form.password_confirmation" placeholder="POWTÓRZ HASŁO" class="name input gt2bt"
                                :class="{ error: $page.props.errors.password_confirmation }" type="password">
                        </p>
                        <p>
                            <button @click="submitForm" class="submit button b2o">OPŁACIĆ</button>
                        </p>
                    </div>
                </div>
                <div class="right"></div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.subtitle {
    font-size: 18px;
    margin: 0 0 30px 0;
    line-height: 24px;
}

.link-profile {
    text-decoration: none;
    color: #f15a24;
}

.box-description {
    display: flex;
    flex-grow: 1 2 1;
}

.info {
    background: #d5d5d5;
    color: #ffffff;
    border-radius: 15px;
    padding: 20px 15px;
    display: inline-block;
    font-size: 16px;
}

button,
a {
    width: calc(100% + 42px);
}

.submit {
    font-weight: bold;
}

.form p {
    margin-bottom: 15px;
}

.input {
    width: 100%;
    padding: 10px 20px;
}

.left {
    width: 20%;
}

.center {
    width: 60%;
}

.right {
    width: 20%;
}
</style>
