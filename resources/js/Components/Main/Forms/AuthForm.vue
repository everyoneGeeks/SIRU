<template>
    <form @submit.prevent="$emit('submit')" class="mt-2 w-2/2 md:w-2/3 m-auto">
        <slot></slot>
    </form>
</template>
