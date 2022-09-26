<template>
    <Head title="Forgot Password" />
        <auth-body class="auth-body">
            <template #default>
                <LogoDetails />
                <CheckReset />
            </template>
        </auth-body>
</template>

<script>
// Auth Components
import LogoDetails from '@/Components/Main/LogoDetails.vue'
import CheckReset from '@/Components/Main/Auth/Admin/CheckReset.vue'
import AuthBody from '@/Components/Main/AuthBody.vue'

export default {
    props: {
        status: String,
    },
    components: {
        LogoDetails,
        CheckReset,
        AuthBody,
    },
}
</script>

<style scoped>
.auth-body {
    direction: ltr;
}
</style>
