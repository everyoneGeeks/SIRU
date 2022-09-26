<template>
    <div class="flex justify-between" >
        <AuthenticatedNavbar />

        <div class="bg-gray-100 w-6/6 lg:w-5/6 w-full">
            <TopNavbar />

            <div class="px-10 py-5">
                <header>
                    <h1 class="text-xl font-bold">{{ page }}</h1>
                    <p class="text-xs text-slate-400">{{ path }} - {{ page }}</p>
                </header>
                <div class="bg-white rounded px-10 py-5 mt-4">
                    <slot></slot>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AuthenticatedNavbar from '../../Layouts/Authenticated.vue'
import TopNavbar from '../../Layouts/TopNavbar.vue'

export default {
    props: {
        page: {
            type: String,
            required: true
        },
        path: {
            type: String,
            required: true
        },
    },
    components: {
        AuthenticatedNavbar,
        TopNavbar
    }
}
</script>
