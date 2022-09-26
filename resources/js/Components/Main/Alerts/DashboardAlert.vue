<template>
    <div  v-if="hasMessage" :class="messageClass" class="alert py-2 mb-2 text-center shadow-lg">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>{{ message.value }}</span>
        </div>
    </div>
</template>

<script>
export default {
    computed: {
        hasMessage() {
            return this.$page.props.message
        },
        message() {
            return this.hasMessage ? this.$page.props.message : ''
        },
        messageClass() {
            return [
                {'alert-success': this.message.type == 'success'},
                {'alert-error': this.message.type == 'danger'},
                {'alert-warning': this.message.type == 'warn'},
            ]
        }
    }
}
</script>
