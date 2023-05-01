<script setup>
import { reactive } from 'vue';
import { router } from '@inertiajs/vue3';

const form = reactive({
    name: null,
    email: null,
    text: null,
});

function submitForm() {
    router.post('/contact-save', form);
}
</script>

<template>
    <div class="page">
        <div class="page-box">
            <div class="box-title">KONTAKT</div>
            <div class="box-description">
                <div class="form">
                    <p style="font-size: 18px;">Aby do nas napisać, wypełnij poniższy formularz. </p>
                    <p>
                        <input v-model="form.name" placeholder="IMIE" class="name input gt2bt"
                            :class="{ error: $page.props.errors.name }" type="text">
                    </p>
                    <p>
                        <input v-model="form.email" placeholder="MAIL" class="name input gt2bt"
                            :class="{ error: $page.props.errors.email }" type="email">
                    </p>
                    <p>
                        <textarea v-model="form.name" placeholder="Wiadomość" class="name input gt2bt"
                            :class="{ error: $page.props.errors.name }" cols="30" rows="10"></textarea>
                    </p>
                    <p>
                        <button class="submit button b2o">Wysłać</button>
                    </p>
                </div>
            </div>

            <div class="box-description">
                <div class="form">
                    <p style="font-size: 18px; text-align: center;">
                        Dziękujemy za skorzystanie z naszego formularza kontaktowego! Twoja
                        wiadomość została pomyślnie wysłana i nasz zespół postara się odpowiedzieć jak najszybciej.
                        Odpowiedź powinna dotrzeć na podany adres e-mail w ciągu 1-3 dni roboczych.
                    </p>
                    <p>
                        <a href="/" style="text-align: center;" class="button o2b">Wróć na główną stronę</a>
                    </p>
                </div>
            </div>  
        </div>
    </div>
</template>

<style scoped>
.box-description {
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.form {
    width: 60%;
}

p {
    margin-top: 20px;
}

textarea {
    border-radius: 20px;
}

button, a {
    width: calc(100% + 42px);
}

.input {
    width: 100%;
    padding: 10px 20px;
}
</style>
