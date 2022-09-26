<template>
    <Head :title="$t('admin.settings.title')" />

    <admin-dashboard-body
        :page="$t('admin.AdminCreate.title')"
        :path="$t('admin.Home')"
    >


        <CustomForm @submit="submit">
            <FormItem
                id="name"
                :label="$t('admin.AdminCreate.name')"
                :required="true"
                v-model="form.name"
                type="text"
                :error="errors.name"
            />

            <FormItem
                id="email"
                :label="$t('admin.AdminCreate.email')"
                :required="true"
                v-model="form.email"
                type="email"
                :error="errors.email"
            />

            <FormItem
                id="password"
                :label="$t('admin.AdminCreate.password')"
                :required="true"
                v-model="form.password"
                type="password"
                :error="errors.password"
            />

          <input type="file" @input="form.avatar = $event.target.files[0]" />






            <FormItem
                id="checkbox"
                :label="$t('admin.AdminCreate.checkbox')"
                :required="false"
                class="checkbox"
                checked="checked"
                v-model="form.is_active"
                type="checkbox"
                :error="errors.is_active"
            />

            <FormButton
                :disabled="form.proccess"
                type="create"
            >
                {{ $t('admin.actions.create') }}
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
props: {
    errors: Object,
    successMessage: String

  },

  data() {
    return {
      form:useForm( {
        name: null,
        email: null,
        password: null,
        is_active:1,
        avatar:'',

      }),
  }
},

  methods: {

    submit() {

       this.form.post(route('admin.admin.store'),{
               forceFormData: true,
               preserveScroll: false


       });

    },
  },
}
</script>
