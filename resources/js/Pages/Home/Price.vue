<script setup>

</script>

<template>
    <div class="page" id="buy">
        <div class="page-box">
            <div class="box-description holder">
                <div class="price-block">
                    <div class="price-title">Dla dwojga</div>
                    <div class="price-description">
                        Przy zakupie otrzymasz:<br>
                        2 pełne indywidualne odczyty Matrycy Losu ze wszystkimi znaczeniami każdego arkanu<br>
                        interpretacja seksualności według twoich energii<br>
                        świadomość duchowa<br>
                        według twoich arkanów i energii
                    </div>
                    <div class="price-brutto">59,99 zł brutto</div>
                    <div class="price-rabat">Po rabacie:</div>
                    <div class="price">
                        <div class="price-value">29.99</div>
                        <div class="price-currency">
                            <div class="price-currency-value">zł</div>
                            <div class="price-currency-brutto">brutto</div>
                        </div>
                    </div>
                    <div class="price-buy"></div>
                </div>

                <div class="price-block top">
                    <div class="price-title">Wszystko dla siebie</div>
                    <div class="price-description">
                        Przy zakupie otrzymasz:<br>
                        spersonalizowaną analizę twojej Matrycy Losu ze wszystkimi interpretacjami twoich
                        arkanów<br>
                        indywidualna analiza karty zdrowia „Czakr”<br>
                        przewodnik po latach twojego życia od 18 do 80 lat
                    </div>
                    <div class="price-brutto">39,99 zł brutto</div>
                    <div class="price-rabat">Po rabacie:</div>
                    <div class="price">
                        <div class="price-value">19.99</div>
                        <div class="price-currency">
                            <div class="price-currency-value">zł</div>
                            <div class="price-currency-brutto">brutto</div>
                        </div>
                    </div>
                    <div class="price-buy"></div>
                </div>

                <div class="price-block">
                    <div class="price-title">Dla rodziny</div>
                    <div class="price-description">
                        Przy zakupie otrzymasz:<br>
                        4 spersonalizowane odczyty Matrycy Losu z pełną interpretacja twoich arkanów<br>
                        analiza programów rodowych<br>
                        dostęp do konta użytkownika z historią zamówień<br>
                    </div>
                    <div class="price-brutto">99,99 zł brutto</div>
                    <div class="price-rabat">Po rabacie:</div>
                    <div class="price">
                        <div class="price-value">49.99</div>
                        <div class="price-currency">
                            <div class="price-currency-value">zł</div>
                            <div class="price-currency-brutto">brutto</div>
                        </div>
                    </div>
                    <div class="price-buy"></div>
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

.price-block {
    margin: 10px 10px 50px 10px;
    background-color: #E5E5E5;
    border-radius: 30px;
    padding: 20px;
    font-weight: bold;
    color: #ffffff;
    width: 220px;
}

.price-block.top {
    background: linear-gradient(to right, orange 40%, red);
}

.price-block .price-title {
    font-size: 24px;
}

.price-block .price-description {}

.price-block .price-brutto {
    font-size: 14px;
    text-align: right;
}

.price-block .price-rabat {
    font-size: 45px;
}

.price-block .price .price-value {}

.price-block .price .price-currency {}

.price-block .price-currency .price-currency-value {}

.price-block .price-currency .price-currency-brutto {}

.price-block .price-buy {}
</style>
