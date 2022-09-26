<template>
    <Head :title="$t('admin.profile.title')" />

    <admin-dashboard-body
        :page="$t('admin.profile.title')"
        :path="$t('admin.Home')"
    >
        <CustomForm @submit="changeProfile">
            <FormItem
                id="name"
                :label="$t('admin.profile.name')"
                :required="true"
                v-model="form.name"
                type="text"
                :error="form.errors.name"
            />
            <FormItem
                id="email"
                :label="$t('admin.profile.email')"
                :required="true"
                v-model="form.email"
                type="email"
                :error="form.errors.email"
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
                name: this.$page.props.auth.user.name,
                email: this.$page.props.auth.user.email,
            })
        }
    },
    methods: {
        changeProfile() {
            this.form.post(route('admin.profile'))
        }
    }
}
</script>
