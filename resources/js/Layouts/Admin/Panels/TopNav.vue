<template>
    <div class="navbar bg-base-100">
        <div class="flex-1">
            <!-- <a class="btn btn-ghost normal-case text-xl">daisyUI</a> -->
        </div>
        <div class="flex-none">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="https://placeimg.com/80/80/people" />
                    </div>
                </label>
                <ul
                    tabindex="0"
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52"
                >
                    <li>
                        <Link :href="route('admin.profile')" class="justify-between">
                            {{ $t('admin.profile.title') }}
                            <span class="badge">-</span>
                        </Link>
                    </li>
                    <li>
                        <Link :href="route('admin.settings')">{{ $t('admin.settings.title') }}</Link>
                    </li>
                    <li><a @click="logout">{{ $t('admin.logout') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3';
export default {
    data() {
        return {
            form: useForm()
        }
    },
    methods: {
        logout() {
            this.form.post(route('admin.logout'))
        }
    }
};
</script>

<style scoped>
html[dir=rtl] .dropdown-end .dropdown-content {
    left: 0px;
    right: unset;
}
html[dir=ltr] .dropdown-end .dropdown-content {
    left: unset;
    right: 0px;
}
</style>
