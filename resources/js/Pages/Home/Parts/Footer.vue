<script setup>
import smallIconUrl from "@/../img/footer/logo-small.png";
import backgroundUrl from "@/../img/footer/background.png";
</script>

<template>
    <div id="footer" :style="{ 'background-image': `url(${backgroundUrl})` }">
        <div class="footer">
            <div class="footainer">asd</div>
            <div class="footainer">dsa</div>
        </div>
        <p class="copyright">
            <img :src="smallIconUrl">
            2023
            <a href="#footer">matrycalosu.pl</a>
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

.footainer {
    /* width: 100%; */
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
