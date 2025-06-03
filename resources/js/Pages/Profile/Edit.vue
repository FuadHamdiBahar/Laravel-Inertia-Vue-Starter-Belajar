<script setup>
import UpdateInfo from './Sections/UpdateInfo.vue';

defineProps({
    user: Object
})
</script>

<template>

    <Head title="- Profile" />
    <UpdateInfo :user="user" />
</template>