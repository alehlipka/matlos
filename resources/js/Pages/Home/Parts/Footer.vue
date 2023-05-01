<script setup>
import smallIconUrl from "@/../img/footer/logo-small.png";
import iconUrl from "@/../img/footer/logo.png";
import backgroundUrl from "@/../img/footer/background.png";
import tiktokUrl from "@/../img/footer/tiktok.png";
import instagramUrl from "@/../img/footer/instagram.png";
import facebookUrl from "@/../img/footer/facebook.png";
</script>

<template>
    <div id="footer" :style="{ 'background-image': `url(${backgroundUrl})` }">
        <div class="footer">
            <div class="footainer left">
                <div style="margin-right: 20px;">
                    <p><img :src="iconUrl"></p>
                    <p style="margin: 10px 0;"><a class="link" href="/">matrycalosu.pl</a></p>
                    <p>
                        <a href="#"><img :src="tiktokUrl"></a>
                        <a href="#"><img style="margin: 0 2px;" :src="instagramUrl"></a>
                        <a href="#"><img :src="facebookUrl"></a>
                    </p>
                </div>
                <div class="left-links">
                    <a class="l-link" href="#">FAQ</a>
                    <a class="l-link" href="#">Kontakt</a>
                    <a class="l-link" href="#">Regulamin</a>
                    <a class="l-link" href="#">Polityka prywatności</a>
                </div>
            </div>
            <div class="footainer right">
                <a class="l-link button o2b calc" href="#">Wylicz Matryce</a>
                <a class="l-link" href="#">Kalkulator</a>
                <a class="l-link" href="#">O metodzie</a>
                <a class="l-link" href="#">Wybierz pakiet</a>
                <a class="l-link" href="#">Czym jest Matryca Losu?</a>
            </div>
        </div>
        <p class="copyright">
            <img :src="smallIconUrl">
            2023
            <a href="/">matrycalosu.pl</a>
        </p>
    </div>
</template>

<style scoped>
#footer {
    background-repeat: no-repeat;
    background-position-x: center;
    background-position-y: bottom;
    background-size: contain;
    min-height: 320px;
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
}

.footer {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    margin: 0 90px 50px 90px;
}

.footainer.left {
    display: flex;
}

.footainer.right {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: space-between;
    align-self: flex-start;
}

.footainer .right a {
    display: block;
}

.left-links {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: space-between;
    padding: 5px 0 10px;
}

.link {
    text-decoration: none;
    font-weight: bold;
    color: #ffffff;
    font-size: 20px;
}

.l-link {
    text-decoration: none;
    color: #ffffff;
    font-size: 20px;
}

.right .l-link {
    color: #000000;
    margin-bottom: 10px;
}

.calc {
    color: #ffffff !important;
    font-weight: bold;
    font-size: 16px;
    padding: 10px 40px;
}

.copyright {
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    bottom: 15px;
    width: 100%;
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
