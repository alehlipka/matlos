<script setup>
import matrixUrl from "@/../img/matrix-map/matrix-center.png";
import dotsOneUrl from "@/../img/matrix-map/dots-one.png";
import dotsTwoOneUrl from "@/../img/matrix-map/dots-two-one.png";
import dotsThreeUrl from "@/../img/matrix-map/dots-three.png";
</script>

<template>
    <div class="page" id="matrix-map">
        <div class="page-box">
            <div class="box-title">ANASTASIYA 19.11.1997</div>
            <div class="box-description">
                <div class="left">
                    <div class="line">
                        <div class="color"></div>
                        <div class="title">Nazwa czakry</div>
                        <div class="values">
                            <div class="value">Fizyka</div>
                            <div class="value">Energia</div>
                            <div class="value">Emocja</div>
                        </div>
                    </div>

                    <div class="line">
                        <div class="color" style="background: #a35ab0;"></div>
                        <div class="title">SAHASRARA</div>
                        <div class="values">
                            <div class="value"></div>
                            <div class="value"></div>
                            <div class="value"></div>
                        </div>
                    </div>

                    <div class="line">
                        <div class="color" style="background: #7e80f8;"></div>
                        <div class="title">AJNA</div>
                        <div class="values">
                            <div class="value"></div>
                            <div class="value"></div>
                            <div class="value"></div>
                        </div>
                    </div>

                    <div class="line">
                        <div class="color" style="background: #57d5e6;"></div>
                        <div class="title">WISZUDHA</div>
                        <div class="values">
                            <div class="value"></div>
                            <div class="value"></div>
                            <div class="value"></div>
                        </div>
                    </div>

                    <div class="line">
                        <div class="color" style="background: #b0e378;"></div>
                        <div class="title">ANAHATA</div>
                        <div class="values">
                            <div class="value"></div>
                            <div class="value"></div>
                            <div class="value"></div>
                        </div>
                    </div>

                    <div class="line">
                        <div class="color" style="background: #f4f060;"></div>
                        <div class="title">MANIPURA</div>
                        <div class="values">
                            <div class="value"></div>
                            <div class="value"></div>
                            <div class="value"></div>
                        </div>
                    </div>

                    <div class="line">
                        <div class="color" style="background: #f9bd49;"></div>
                        <div class="title">SWADHISTHANA</div>
                        <div class="values">
                            <div class="value"></div>
                            <div class="value"></div>
                            <div class="value"></div>
                        </div>
                    </div>

                    <div class="line">
                        <div class="color" style="background: #f45b55;"></div>
                        <div class="title">MULADHARA</div>
                        <div class="values">
                            <div class="value"></div>
                            <div class="value"></div>
                            <div class="value"></div>
                        </div>
                    </div>

                    <div class="line">
                        <div class="color"></div>
                        <div class="title" style="font-size: 14px;">Ogólny układ systemów</div>
                        <div class="values">
                            <div class="value"></div>
                            <div class="value"></div>
                            <div class="value"></div>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <img :src="matrixUrl">
                    <p><a class="button b2o" style="margin-top: 80px;" href="#">POBIERZ MATRYCE</a></p>
                </div>
                <div class="right">
                    <div class="line">
                        <div class="title right" style="font-size: 14px;">Programy rodu w linii męskiej</div>
                        <div class="values right">
                            <div class="value right">
                                <img :src="dotsThreeUrl">
                            </div>
                        </div>
                    </div>

                    <div class="line">
                        <div class="title right" style="font-size: 14px;">Programy rodu w linii żeńskiej</div>
                        <div class="values right">
                            <div class="value right">
                                <img :src="dotsThreeUrl">
                            </div>
                        </div>
                    </div>

                    <div class="line">
                        <div class="title right" style="font-size: 14px;">Los osobisty</div>
                        <div class="values right">
                            <div class="value right">
                                <img :src="dotsTwoOneUrl">
                            </div>
                        </div>
                    </div>

                    <div class="line">
                        <div class="title right" style="font-size: 14px;">Los społeczny</div>
                        <div class="values right">
                            <div class="value right">
                                <img :src="dotsTwoOneUrl">
                            </div>
                        </div>
                    </div>

                    <div class="line">
                        <div class="title right" style="font-size: 14px;">Los duchowy</div>
                        <div class="values right">
                            <div class="value right">
                                <img :src="dotsTwoOneUrl">
                            </div>
                        </div>
                    </div>

                    <div class="line">
                        <div class="title right" style="font-size: 14px;">Podsumowanie</div>
                        <div class="values right">
                            <div class="value right">
                                <img :src="dotsOneUrl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.center {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
}

.line {
    display: flex;
    width: 400px;
}

.color {
    width: 30px;
    height: 60px;
    background: #d5d5d5;
    border-radius: 50px;
}

.title {
    background: #eaeaea;
    border-radius: 15px 0 0 15px;
    display: flex;
    align-items: center;
    padding: 0 20px;
    font-size: 16px;
    width: 150px;
}

.title.right {
    border-radius: 15px;
    background: #f4f4f4;
    width: 100%;
    height: 90px;
}

.values {
    background: #eaeaea;
    border-radius: 0 15px 15px 0;
    display: flex;
}

.values.right {
    background: transparent;
    height: 90px;
}

.value {
    font-size: 12px;
    background: #f5f5f5;
    border-radius: 15px;
    width: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.value.right {
    background: #eaeaea;
    width: 100px;
}

.page-box {
    /* border: 1px dotted red; */
}

.box-description {
    display: flex;
    justify-content: space-between;
}

.box-title {
    color: #cbcbcb;
    font-size: 24px !important;
    font-weight: normal !important;
    margin-bottom: 20px !important;
}
</style>
