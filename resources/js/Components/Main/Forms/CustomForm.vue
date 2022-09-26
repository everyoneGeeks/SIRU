<template>
    <form @submit.prevent="$emit('submit')" class="w-full md:w-96">
        <slot></slot>
    </form>
</template>
