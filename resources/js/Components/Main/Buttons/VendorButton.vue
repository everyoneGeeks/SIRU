<script>
export default {
    props: {
        icon: {
            type: String,
            required: false
        }
    }
}
</script>

<template>
    <button type="button"
             class="btn mt-2 bg-white
                    text-slate-400
                    hover:bg-slate-100 mx-2
                    hover:text-blue-400
                    col-span-2
                    md:col-span-1"
    >
        <slot></slot>
        <font-awesome-icon
            class="mx-2 text-blue-500"
            v-if="icon"
            :icon="icon"
        />
    </button>
</template>
