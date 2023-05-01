<script setup>
import backgroundUrl from "@/../img/social/main.png";
import instagramUrl from "@/../img/social/instagram.png";
import tiktokUrl from "@/../img/social/tiktok.png";
</script>

<template>
    <div class="page" id="social">
        <div class="page-box">
            <div class="box-description" id="social-background" :style="{ 'background-image': `url(${backgroundUrl})` }">
                <div class="inside">
                    <div class="inside-title">Obserwuj nas w social media<br>żeby być na bieżąco z naszymi promocjami i
                        nowościami</div>
                    <div class="social-container">
                        <div>
                            <div class="subscribe-title">Subskrybuj nas:</div>
                            <div class="social-buttons">
                                <a class="contact button social" href="#">
                                    <img :src="tiktokUrl">
                                    Nasz<br>TikTok</a>
                                <a class="contact button social" href="#">
                                    <img :src="instagramUrl">
                                    Nasz<br>Instagram</a>
                            </div>
                        </div>
                        <div>
                            <a class="contact button b2o" href="#">Skontaktuj sie z nami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
#social-background {
    background-repeat: no-repeat;
    background-position-y: center;
    position: relative;
    height: 100%;

    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.social-buttons {
    display: flex;
}

.inside {
    height: 40%;
    width: 1000px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.inside-title {
    font-weight: bold;
    font-size: 32px;
}

.social-container {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
}

.subscribe-title {
    font-weight: bold;
    margin-bottom: 16px;
}

.contact {
    font-size: 16px;
    padding: 8px 20px;
    font-weight: bold;
    display: flex;
    align-items: center;
}

.contact.social {
    padding: 8px 20px 8px 10px;
    margin-right: 20px;
}
.contact.social img {
    margin-right: 10px;
}

.page {
    display: flex;
}

.page-box {
    min-height: 100%;
    width: 100%;
}
</style>
