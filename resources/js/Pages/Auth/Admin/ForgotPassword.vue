<template>
    <Head title="Forgot Password" />
        <auth-body class="auth-body">
            <template #default>
                <LogoDetails />
                <AuthForget />
            </template>
        </auth-body>
</template>

<script>
// Auth Components
import LogoDetails from '@/Components/Main/LogoDetails.vue'
import AuthForget from '@/Components/Main/AuthForget.vue'
import AuthBody from '@/Components/Main/AuthBody.vue'

export default {
    props: {
        status: String,
    },
    components: {
        LogoDetails,
        AuthForget,
        AuthBody,
    },
}
</script>

<style scoped>
.auth-body {
    direction: ltr;
}
</style>
