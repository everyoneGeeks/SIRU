<template>
    <div class="page-dir col-span-2 md:col-span-1 px-8 py-24 mt-1 md:mt-20">
        <header class="text-center">
            <h1 class="text-2xl font-bold">{{ $t('admin.fogot-password.header') }}</h1>
            <p class="text-slate-400">{{ $t('admin.fogot-password.desc') }}</p>
        </header>

        <form @submit.prevent="forget" class="mt-2 px-5 md:px-15 w-2/2 md:w-2/3 m-auto">
            <div class="text-center bg-red-100 py-2" v-if="form.errors.message">
                <span class="invalid">
                    {{ form.errors.message }}
                </span>
            </div>

            <div>
                <label :class="{'invalid': !validation.email}" for="email">{{ $t('admin.fogot-password.email') }}</label>
                <input @input="$helper.activateValidation('email', validation)" v-model="form.email" class="form-control email w-full" type="email" id="email">
                <span class="invalid" v-if="form.errors.email">
                    {{ form.errors.email }}
                </span>
            </div>

            <div class="mt-8 flex justify-center">
                <button :disabled="form.processing" class="btn btn-primary mx-2">{{ $t('admin.fogot-password.submit') }}</button>
                <Link :href="route('admin.login')" class="btn bg-white text-black mx-2 hover:text-slate-100">{{ $t('admin.fogot-password.cancel') }}</Link>
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
            }),
            validation: {
                email: true,
            }
        }
    },
    methods: {
        forget() {
            if(this.validate()) {
                this.form.post(route('admin.password.forget'), {
                    preserveScroll: true
                })
            }
        },
        validate() {
            if(this.form.email == '') this.validation.email = false

            return this.validation.email
        },
    }
}
</script>
