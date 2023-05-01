<script setup>
import Accordion from '@/Components/Accordion/Accordion.vue';
</script>

<template>
    <div class="page" id="matrix-result">
        <div class="page-box">
            <div class="box-description">
                <Accordion title="CECHY OSOBOWE" description="sfgksdkfgksdfhgkskdfjghsdfkjgh" />
                <Accordion title="TALENTY" :is-blocked="true" :isDark="true" />
                <Accordion title="PRZEZNACZENIA" :is-blocked="true" />
                <Accordion title="LINIA SEKSUALNOŚCI" :is-blocked="true" :isDark="true" />
                <Accordion title="MIŁOŚĆ" :is-blocked="true" />
                <Accordion title="BALANCE MIĘDZY MIŁOŚCIĄ A FINANSAMI" :is-blocked="true" :isDark="true" />
                <Accordion title="FINANSE" :is-blocked="true" />
                <Accordion title="OGON KARMICZNY" :is-blocked="true" :isDark="true" />
                <Accordion title="RODOWE PROGRAMY" :is-blocked="true" />
                <Accordion title="MARZENIA" description="sfgksdkfgksdfhgkskdfjghsdfkjgh" :isDark="true" />
                <Accordion title="CZAKRY" :is-blocked="true" />
                <Accordion title="LATA" :is-blocked="true" :isDark="true" />
                <Accordion title="REKOMENDACJE" description="sfgksdkfgksdfhgkskdfjghsdfkjgh" />

                <div><a class="button b2o" style="margin-top: 20px;" href="#buy">KUP PEŁNY DOSTĘP</a></div>
                <div style="font-size: 14px; margin-top: 20px; text-align: center;">
                    Kupując PEŁNY DOSTĘP uzyskasz personalny odczyt w postaci elektronicznej (PDF)
                    <br>
                    ze wszystkimi znaczeniami TWOJEJ osobistej Matrycy Losu.
                </div>
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
