<script setup>
import badUrl from "@/../img/two-ways/bad.png";
import goodUrl from "@/../img/two-ways/good.png";
</script>

<template>
    <div class="page" id="two-ways">
        <div class="page-box">
            <div class="box-description">
                <div class="ways-title">Masz 2 ścieżki:</div>
                <div class="masks">
                    <div class="side">
                        <img :src="badUrl">
                        <p>Zostawić wszystko tak jak jest, nic nie zmieniać, nie starać się ulepszyć swoje życie.</p>
                    </div>
                    <div class="side">
                        <img :src="goodUrl">
                        <p>Zdobyć pełną wiedzę o swojej Matryce Losu, poznać jak można kierować energiami, poszerzyć wiedzę
                            o tym jak się zrealizować i żyć w przyjemności!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.page {
    display: flex;
}

.page-box {
    min-height: 100%;
    width: 100%;
}

.ways-title {
    font-weight: bold;
    font-size: 46px;
    margin-bottom: 20px;
}

.box-description {
    height: 100%;
    display: flex;
    flex-direction: column;
}

.masks {
    width: 100%;
    display: flex;
    justify-content: center;
}

.side {
    width: 370px;
}

.side p {
    font-weight: bold;
    font-size: 24px;
    margin-top: 20px;
}
</style>
