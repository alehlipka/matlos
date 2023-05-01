<script setup>
import backgroundUrl from "@/../img/social/main.png";
</script>

<template>
    <div class="page">
        <div class="page-box">
            <div class="box-description" id="social-background" :style="{ 'background-image': `url(${backgroundUrl})` }">
                <div class="inside">
                    <div class="inside-title">Obserwuj nas w social media<br>żeby być na bieżąco z naszymi promocjami i nowościami</div>
                    <div>
                        <div></div>
                        <div></div>
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

.inside {
    border: 2px dotted salmon;

    height: 50%;
    width: 1000px;
}

.inside-title {
    font-weight: bold;
    font-size: 32px;
}

.page {
    display: flex;
}

.page-box {
    min-height: 100%;
    width: 100%;
}

.box-description {
    border: 2px dotted green;
}
</style>
