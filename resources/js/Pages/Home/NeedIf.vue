<script setup>
import need_if_1 from "@/../img/need-if/1.png";
import need_if_2 from "@/../img/need-if/2.png";
import need_if_3 from "@/../img/need-if/3.png";
import need_if_4 from "@/../img/need-if/4.png";
import need_if_5 from "@/../img/need-if/5.png";
import need_if_6 from "@/../img/need-if/6.png";
import need_if_7 from "@/../img/need-if/7.png";
import need_if_8 from "@/../img/need-if/8.png";
</script>

<template>
    <div class="page">
        <div class="page-box">
            <div class="box-title">POTRZEBUJESZ MATRYCY JEŚLI:</div>
            <div class="box-description holder">
                <div class="image-box">
                    <div class="img"><img :src="need_if_1"></div>
                    <div class="text">Chciałbyś zacząć nową karierę</div>
                </div>

                <div class="image-box">
                    <div class="img"><img :src="need_if_2"></div>
                    <div class="text">Chcesz uwolnić swój potencjał</div>
                </div>

                <div class="image-box">
                    <div class="img"><img :src="need_if_3"></div>
                    <div class="text">Uważasz że zasługujesz lepsze życie</div>
                </div>

                <div class="image-box">
                    <div class="img"><img :src="need_if_4"></div>
                    <div class="text">Poszukujesz swojego celu</div>
                </div>

                <div class="image-box">
                    <div class="img"><img :src="need_if_5"></div>
                    <div class="text">Zapomniałeś jak się cieszyć życiem</div>
                </div>

                <div class="image-box">
                    <div class="img"><img :src="need_if_6"></div>
                    <div class="text">Chcesz odkryć swoje talenty</div>
                </div>

                <div class="image-box">
                    <div class="img"><img :src="need_if_7"></div>
                    <div class="text">Brakuje pomysłów jak zrealizować marzenia</div>
                </div>

                <div class="image-box">
                    <div class="img"><img :src="need_if_8"></div>
                    <div class="text">Brakuje tobie pewności siebie</div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.holder {
    display: flex;
    flex-wrap: wrap;
    align-items: baseline;
    justify-content: center;
}

.image-box {
    flex: 1 0 21%;
    margin: 10px 10px 50px 10px;
    text-align: center;
}
</style>
