<script setup>
import Accordion from '@/Components/Accordion/Accordion.vue';
</script>

<template>
    <div class="page" id="matrix-result">
        <div class="page-box">
            <div class="box-description">
                <Accordion title="CECHY OSOBOWE" description="sfgksdkfgksdfhgkskdfjghsdfkjgh" />
                <Accordion title="CECHY OSOBOWE" :is-blocked="true" />
            </div>
        </div>
    </div>
</template>

<style scoped>
.box-description {
    display: flex;
    flex-direction: column;
    align-items: center;
}
</style>
