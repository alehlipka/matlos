<script setup>
import point_1 from "@/../img/what-say/point_1.png";
</script>

<template>
    <div class="page">
        <div class="page-box">
            <div class="box-title">O CZYM OPOWIE MATRYCA LOSU</div>
            <div class="box-description">
                <div class="point-container">
                    <div class="point-container-title">Finanse</div>
                    <div class="point-container-description">
                        <img class="point one" :src="point_1">
                        Co blokuje Twoje finanse, co najlepiej
                        zrobić, aby osiągnąć finansowy sukces i dobrobyt, na jakie zawody zwrócić uwagę, jak
                        odblokować swój potencjał finansowy.
                    </div>
                </div>

                <div class="point-container">
                    <div class="point-container-title">Prognoza na lata</div>
                    <div class="point-container-description">
                        <img class="point two" :src="point_1">
                        Osobista prognoza energetyczna na lata
                        Twojego życia. Jaka energia będzie Ci towarzyszyć, co Cię czeka i na co zwrócić uwagę w
                        danym okresie życia.
                    </div>
                </div>

                <div class="point-container">
                    <div class="point-container-title">Zdrowie</div>
                    <div class="point-container-description">
                        <img class="point three" :src="point_1">
                        Mapa zdrowia z opisem każdej czakry i
                        rozszyfrowaniem energii na czakrach. Czym są problemy zdrowotne i jak ich można uniknąć.
                    </div>
                </div>

                <div class="point-container">
                    <div class="point-container-title">Relacje i miłość</div>
                    <div class="point-container-description">
                        <img class="point four" :src="point_1">
                        Zadania pary, mocne i słabe strony Waszej
                        pary, seksualność, jak stworzyć harmonijny związek, a także potencjał finansowy pary.
                    </div>
                </div>

                <div class="point-container">
                    <div class="point-container-title">Zadania i długi karmiczne</div>
                    <div class="point-container-description">
                        <img class="point five" :src="point_1">
                        Karmiczne ogony z poprzedniego życia, które
                        należy rozwiązać i zadania duszy w obecnym wcieleniu. Rozwiązując je, pozytywne zmiany
                        natychmiast rozpoczną się w Twoim życiu.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.point-container {
    display: flex;
    flex-direction: column;
    margin-bottom: 45px;
}

.point.one {
    animation: rotation 1800ms infinite linear;
}
.point.two {
    animation: rotation 4000ms infinite linear;
}
.point.three {
    animation: rotation 2400ms infinite linear;
}
.point.four {
    animation: rotation 2000ms infinite linear;
}
.point.five {
    animation: rotation 3000ms infinite linear;
}

.point-container .point-container-title {
    font-weight: bold;
    font-size: 24px;
    margin-bottom: 15px;
}

.point-container .point-container-description {
    display: flex;
    align-items: center;
}

.point-container .point-container-description img {
    margin-right: 20px;
}

@keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}
</style>
