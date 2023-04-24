<template>
    <button class="primary">
        <slot />
    </button>
</template>

<style scoped>
.primary {
    background: linear-gradient(to right, orange 40%, red);
    padding: 5px 24px;
    border-radius: 200px;
    border: none;
    text-decoration: none;
    color: #ffffff;
    font-weight: bold;
}
</style>
