<template>

    <div class="mb-5">
        <label
            class="text-sm"
            :for="id"
        >
        {{ label }}
        </label>


    <input type="checkbox" class=""  />

            <input
            :required="required"
            class="form-control toggle toggle-primary"
            @input="$emit('update:modelValue', $event.target.value)"
            :value="modelValue"
            type="checkbox"
            :id="id"

        />

</div>

<script>
export default {

}
</script>

<style>

</style>
