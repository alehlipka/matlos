<script setup>
import { reactive } from 'vue';

import upUrl from "@/../img/accordion/up.png";
import downUrl from "@/../img/accordion/down.png";
import lockUrl from "@/../img/accordion/lock.png";

defineProps({
  isBlocked: { type: Boolean, required: false, default: false },
  isDark: { type: Boolean, required: false, default: false },
  title: { type: String, required: true },
  description: { type: String, required: false, default: "" }
});

const trigger = reactive({ show: false });

function triggered() {
    trigger.show = !trigger.show;
}
</script>

<template>
    <div class="accordion">
        <div class="item" :class="{open: trigger.show, dark: isDark}">
            <div class="header">
                <div class="title">{{ title }}</div>
                <div class="trigger">
                    <span v-if="isBlocked">
                        <img :src="lockUrl" alt="blocked">
                    </span>
                    <span v-else @click="triggered">
                        <img v-if="!trigger.show" :src="downUrl" alt="down">
                        <img v-else :src="upUrl" alt="up">
                    </span>
                </div>
            </div>
            <div v-if="trigger.show && !isBlocked" class="content">
                {{ description }}
            </div>
        </div>
    </div>
</template>

<style scoped>
.accordion {
    width: 80%;
}

.header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #f4f4f4;
    border-radius: 30px;
    font-size: 16px;
    font-weight: bold;
    padding: 16px 20px;
    color: #190326;
}

.dark .header {
    background: #eaeaea;
}

.open .header {
    border-radius: 28px 28px 0 0;
}

.content {
    background: #f4f4f4;
    border-radius: 28px;
    font-size: 18px;
    padding: 20px 30px;
}

.dark .content {
    background: #eaeaea;
}

.open .content {
    border-radius: 0 0 28px 28px;
}

.trigger {
    cursor: pointer;
}</style>
