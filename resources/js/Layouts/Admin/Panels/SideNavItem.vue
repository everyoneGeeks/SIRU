<template>
    <div class="text-sm text-white text-slate-300 p-3 transition-all">
        <div @click="openNav" class="flex justify-between hover:text-slate-100 cursor-pointer">
            <p>
                <font-awesome-icon :icon="icon"></font-awesome-icon>
                <span class="px-2">
                    <slot></slot>
                </span>
            </p>
            <p>
                <font-awesome-icon icon="fa-angle-up" v-if="opened"></font-awesome-icon>
                <font-awesome-icon icon="fa-angle-down" v-else></font-awesome-icon>
            </p>
        </div>

        <p v-if="opened" class="text-sm mt-1 px-5">
            <ul>
                <li
                    class="p-1"
                    v-for="subNav in subNavs"
                    :key="subNav.text"
                >
                    <Link
                        :href="subNav.url"
                        class="w-full"
                    >
                        {{ $t(subNav.text) }}
                    </Link>
                </li>
            </ul>
        </p>
    </div>
</template>

<script>
export default {
    props: {
        icon: String,
        subNavs: Array
    },
    data() {
        return {
            opened: false
        }
    },
    methods: {
        openNav() {
            this.opened = !this.opened
        }
    }
}
</script>
