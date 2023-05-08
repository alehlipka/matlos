<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="page">
        <div class="page-box">
            <div class="box-title">ZAMÓWIENIE OPŁACONE</div>
            <div class="subtitle">
                <p><strong>Gratulacje!</strong> Dokonałeś pomyślnego zakupu Matrycy Losu (Wszystko dla siebie).</p>
                <p>Aby skorzystać z Matrycy, prosimy o zalogowanie się na swoje <Link class="link-profile" href="/account">konto</Link>.</p>

                <p><strong>Oto krótka instrukcja postępowania:</strong></p>
                <p>1. Zaloguj się na swoje konto, używając adresu e-mail i hasła podanego podczas zakupu.</p>
                <p>2. Kliknij na ikonę "Sprawdź Matrycę".</p>
                <p>3. Wprowadź swoje dane do kalkulatora.</p>
                <p>4. Poczekaj, aż kalkulator zakończy obliczenia.</p>
                <p>5. Na dole strony będziesz mógł pobrać swoją indywidualną analizę na podstawie daty urodzenia w formacie PDF, zawierający opis wyników.</p>
                <p>W razie jakichkolwiek problemów, prosimy o kontakt z nami za pomocą formularza na stronie.</p>
                <p>Jesteśmy do Twojej dyspozycji, aby pomóc i odpowiedzieć na wszelkie pytania.</p>
            </div>
        </div>
    </div>
</template>

<style scoped>
.link-profile {
    text-decoration: none;
    color: #f15a24;
}

.subtitle {
    font-size: 18px;
    margin: 0 0 30px 0;
    line-height: 24px;
}
</style>
