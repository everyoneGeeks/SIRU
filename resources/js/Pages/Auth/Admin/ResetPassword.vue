<template>
    <Head title="Forgot Password" />
        <auth-body class="auth-body">
            <template #default>
                <LogoDetails />
                <AuthReset />
            </template>
        </auth-body>
</template>

<script>
// Auth Components
import LogoDetails from '@/Components/Main/LogoDetails.vue'
import AuthReset from '@/Components/Main/Auth/Admin/AuthReset.vue'
import AuthBody from '@/Components/Main/AuthBody.vue'

export default {
    props: {
        status: String,
    },
    components: {
        LogoDetails,
        AuthReset,
        AuthBody,
    },
}
</script>

<style scoped>
.auth-body {
    direction: ltr;
}
</style>
