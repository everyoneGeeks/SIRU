<template>
    <div class="page-dir col-span-2 md:col-span-1 px-8 py-24 mt-1 md:mt-20">
        <header class="text-center">
            <h1 class="text-2xl font-bold">{{ $t('admin.reset-password-2.header') }}</h1>
            <p class="text-slate-400">{{ $t('admin.reset-password-2.desc') }}</p>
        </header>

        <form @submit.prevent="forget" class="mt-2 px-5 md:px-15 w-2/2 md:w-2/3 m-auto">
            <div class="text-center bg-red-100 py-2" v-if="form.errors.message">
                <span class="invalid">
                    {{ form.errors.message }}
                </span>
            </div>

            <div>
                <label :class="{'invalid': !validation.new_password}" for="new_password">{{ $t('admin.reset-password-2.password') }}</label>
                <input @input="$helper.activateValidation('new_password', validation)" v-model="form.new_password" class="form-control password w-full" type="password" id="new_password">
                <span class="invalid" v-if="form.errors.new_password">
                    {{ form.errors.new_password }}
                </span>
            </div>

            <div>
                <label :class="{'invalid': !validation.new_password_confirmation}" for="password-confirm">{{ $t('admin.reset-password-2.password_confirmation') }}</label>
                <input @input="$helper.activateValidation('new_password_confirmation', validation)" v-model="form.new_password_confirmation" class="form-control password w-full" type="password" id="password-confirm">
                <span class="invalid" v-if="form.errors.new_password_confirmation">
                    {{ form.errors.new_password_confirmation }}
                </span>
            </div>

            <div class="mt-8 flex justify-center">
                <button :disabled="form.processing" class="btn btn-primary mx-2">{{ $t('admin.reset-password-2.submit') }}</button>
                <Link :href="route('admin.login')" class="btn bg-white text-black mx-2 hover:text-slate-100">{{ $t('admin.reset-password-2.cancel') }}</Link>
            </div>
        </form>
    </div>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'

export default {
    computed: {
        code() {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get('code');
        }
    },
    data() {
        return {
            form: useForm({
                new_password: '',
                new_password_confirmation: '',
            }),
            validation: {
                new_password: true,
                new_password_confirmation: true,
            }
        }
    },
    methods: {
        forget() {
            if(this.validate()) {
                this.form.post(route('admin.password.reset', this.code), {
                    preserveScroll: true,
                    onFinish: () => this.form.reset('new_password','new_password_confirmation')
                })
            }
        },
        validate() {
            if(this.form.new_password == '') this.validation.new_password = false

            if(this.form.new_password_confirmation == '') this.validation.new_password_confirmation = false

            return this.validation.new_password &&
                   this.validation.new_password_confirmation

        }
    }
}
</script>
