<script setup>
import Container from '../../Components/Container.vue';
import Title from '../../Components/Title.vue';
import TextLink from '../../Components/TextLink.vue';
import InputField from '../../Components/InputField.vue';
import PrimaryBtn from '../../Components/PrimaryBtn.vue';
import { useForm } from '@inertiajs/vue3';
import ErrorMessages from '../../Components/ErrorMessages.vue';
import SessionMessages from '../../Components/SessionMessages.vue';
import CheckBox from '../../Components/CheckBox.vue';

defineProps({
    status: String,
})

const form = useForm({
    email: "",
    password: "",
    remember: null,
})

const submit = () => {
    form.post(route('login'), {
        onFinish: () => {
            form.reset('password')
        }
    })
}

</script>

<template>

    <Head title="- Login"></Head>
    <Container class="w-1/2">
        <div class="mb-8 text-center">
            <Title>Login to your Account</Title>
            <p>Need an account?
                <TextLink routeName="register" label="register" />
            </p>
        </div>

        <ErrorMessages :errors="form.errors" />

        <SessionMessages :status="status"></SessionMessages>

        <form @submit.prevent="submit" class="space-y-6">

            <InputField label="Email" icon="at" v-model="form.email" />
            <InputField label="Password" icon="key" type="password" v-model="form.password" />

            <div class="flex items-center justify-between">
                <CheckBox name="remember" v-model="form.remember">Remember me</CheckBox>
                <TextLink routeName="password.request" label="Forgot Password?" />
            </div>
            <PrimaryBtn :disabled="form.processing">Login</PrimaryBtn>
        </form>
    </Container>
</template>