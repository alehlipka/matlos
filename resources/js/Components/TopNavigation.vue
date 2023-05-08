<script setup>
import { Link } from '@inertiajs/vue3'
import { reactive, onMounted, onBeforeUnmount } from 'vue';

import logoLightUrl from "@/../img/top-navigation/logo-light.png";
import logoDarkUrl from "@/../img/top-navigation/logo-dark.png";

const props = defineProps({
  dynamic: { type: Boolean, required: false, default: true },
});

const logo = reactive({ url: logoDarkUrl, filled: true });

const debounce = (callback, wait) => {
    let timeoutId = null;
    return (...args) => {
        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => {
            callback.apply(null, args);
        }, wait);
    };
};

const handleScroll = debounce((event) => {
    let scrolled = window.scrollY > 50;
    logo.url = scrolled ? logoDarkUrl : logoLightUrl;
    logo.filled = scrolled;
}, 10);

onMounted(() => {
    if (props.dynamic) {
        handleScroll();
        window.addEventListener('scroll', handleScroll);
    }
});

onBeforeUnmount(() => {
    if (props.dynamic) {
        window.removeEventListener('scroll', handleScroll);
    }
});

</script>

<template>
    <div class="navigation" :class="{sticky: !props.dynamic}">
        <div class="logo">
            <img :src="logo.url">
        </div>
        <div class="links">
            <div class="group" :class="{fill: logo.filled}">
                <a class="link main" href="/">GŁÓWNA</a>
                <a class="link about" href="/#about-matrix">O MATRYCY</a>
                <a class="link buy" href="/#buy">KUPIC</a>
            </div>
            <Link class="link profile button o2b" href="/account">KONTO</Link>
        </div>
    </div>
</template>

<style scoped>
.navigation {
    width: 1300px;
    position: fixed;
    background-color: transparent;
    display: flex;
    margin-top: 45px;
    z-index: 10;
}
.navigation.sticky {
    position: sticky;
}

.navigation .logo {
    margin-left: 40px;
}

.navigation .links {
    font-size: 14px;
    text-align: right;
    height: 60px;
    position: absolute;
    right: 0;
    display: flex;
    align-items: center;
}

.navigation .link {
    text-decoration: none;
    color: #ffffff;
    font-weight: bold;
    /* padding-top: 5px; */
}

.navigation .link.profile {
    padding: 5px 24px;
    margin-right: 0px;
}

.navigation .group {
    margin-right: 100px;
    padding: 30px 100px;
    border-radius: 70px;
    font-size: 12px;
}

.navigation .group.fill {
    animation: fadeIn 500ms;
}

@keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

.navigation .group .link.main {
    color: black;
    font-weight: normal;
    margin-right: 100px;
}

.navigation .group .link.about {
    margin-right: 100px;
}

.navigation .group .link.buy {
    /* margin-right: 180px; */
}

.navigation .group.fill {
    background-color: #391162;
    color: #ffffff;
    font-weight: bold;
}

.navigation .group.fill .link.main {
    color: white;
    font-weight: bold;
    margin-right: 100px;
}

.navigation .group.fill .link.about {
    /* margin-right: 100px; */
}

.navigation .group.fill .link.buy {
    /* margin-right: 180px; */
}
</style>
