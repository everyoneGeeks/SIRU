<template>
    <Head :title="$t('admin.settings.title')" />

    <admin-dashboard-body
        :page="$t('admin.settings.title')"
        :path="$t('admin.Home')"
    >
        <CustomForm @submit="changePassword">
            <FormItem
                id="old-password"
                :label="$t('admin.settings.old-password')"
                :required="true"
                v-model="form.password"
                type="password"
                :error="form.errors.password"
            />
            <FormItem
                id="new-password"
                :label="$t('admin.settings.new-password')"
                :required="true"
                v-model="form.new_password"
                type="password"
                :error="form.errors.new_password"
            />
            <FormItem
                id="re-password"
                :label="$t('admin.settings.re-password')"
                :required="true"
                v-model="form.new_password_confirmation"
                type="password"
                :error="form.errors.new_password_confirmation"
            />
            <FormButton
                :disabled="form.proccess"
                type="edit"
            >
                {{ $t('admin.actions.edit') }}
            </FormButton>
        </CustomForm>
    </admin-dashboard-body>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3'
import CustomForm from '@/Components/Main/Forms/CustomForm.vue'
import FormItem from '@/Components/Main/Inputs/FormItem.vue'
import FormButton from '@/Components/Main/Buttons/FormButton.vue'


export default {
    components: {
        CustomForm,
        FormItem,
        FormButton,
    },
    data() {
        return {
            form: useForm({
                password: '',
                new_password: '',
                new_password_confirmation: '',
            })
        }
    },
    methods: {
        changePassword() {
            this.form.post(route('admin.settings'), {
                onSuccess: () => this.form.reset('new_password'),
                onFinish: () => this.form.reset('password','new_password_confirmation'),
            })
        }
    }
}
</script>
