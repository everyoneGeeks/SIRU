<template>
    <div class="page-dir px-8 py-14 md:py-24" >
        <header class="text-center">
            <h1 class="text-2xl font-bold">{{ $t('admin.login.header') }}</h1>
            <p class="text-slate-400">{{ $t('admin.login.desc') }}</p>
        </header>

        <hr class="mt-8">

        <form @submit.prevent="login" class="mt-2 w-2/2 md:w-2/3 m-auto">
            <div class="text-center bg-red-100 py-2" v-if="form.errors.message">
                <span class="invalid">
                    {{ form.errors.message }}
                </span>
            </div>

            <div>
                <label :class="{'invalid': !validation.email}" for="email">{{ $t('admin.login.email') }}</label>
                <input @input="$helper.activateValidation('email', validation)" v-model.trim="form.email" class="form-control w-full" type="text" id="email">
                <span class="invalid" v-if="form.errors.email">
                    {{ form.errors.email }}
                </span>
            </div>

            <div>
                <label :class="{'invalid': !validation.password}" for="password">{{ $t('admin.login.password') }}</label>
                <input @input="$helper.activateValidation('password', validation)" v-model="form.password" class="form-control w-full" type="password" id="password">
                <span class="invalid" v-if="form.errors.password">
                    {{ form.errors.password }}
                </span>
            </div>

            <div class="mt-2">
                <p>
                    <Link :href="route('admin.password.request')" class="text-blue-500" to="" >{{ $t('admin.login.forgot-password') }}</Link>
                </p>
            </div>

            <div class="mt-2">
                <button :disabled="form.processing" class="btn btn-primary w-full">{{ $t('admin.login.btn') }}</button>
            </div>
        </form>
    </div>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'

export default {
    data() {
        return {
            form: useForm({
                email: '',
                password: '',
            }),
            validation: {
                email: true,
                password: true
            }
        }
    },
    methods: {
        login() {
            if(this.validateLogin()) {
                this.form.post(route('admin.login'), {
                    onFinish: () => this.form.reset('password')
                })
            }
        },
        validateLogin() {
            if(this.form.email == '') this.validation.email = false

            if(this.form.password == '') this.validation.password = false

            return this.validation.email &&
                   this.validation.password
        },
    }
}
</script>
