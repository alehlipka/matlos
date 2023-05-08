<script setup>
import price1 from "@/../img/price/price_1.png";
import price2 from "@/../img/price/price_2.png";
import price3 from "@/../img/price/price_3.png";
</script>

<template>
    <div class="page" id="buy">
        <div class="page-box">
            <div class="box-description holder">
                <a href="/payment"><img :src="price1"></a>
                <a href="/payment"><img style="margin: 0 20px;" :src="price2"></a>
                <a href="/payment"><img :src="price3"></a>
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
</style>
