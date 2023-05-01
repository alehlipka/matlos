<script setup>
import iconUrl from "@/../img/footer/logo-small.png";
</script>

<template>
    <div id="footer" class="footer">
    </div>
    <p class="copyright">
        <img :src="iconUrl">
        2023
        <a href="#footer">matrycalosu.pl</a>
    </p>
</template>

<style scoped>
.copyright {
    font-weight: bold;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.copyright img {
    margin-right: 10px;
}

.copyright a {
    text-decoration: none;
    color: #000000;
    margin-left: 10px;
}
</style>
