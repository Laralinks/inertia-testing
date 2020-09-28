<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a href="/">
                <svg class="w-16 h-16" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z" fill="#6875F5"/>
                    <path d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z" fill="#6875F5"/>
                </svg>
            </a>

        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form @submit.prevent="submit">

            <div>
                    <jet-label value="Email" />
                    <jet-input  v-model="form.email" :error="errors.email" class="block mt-1 w-full" type="email" name="email" value="" required autofocus />
                </div>

                <div class="mt-4">
                    <jet-label value="Password" />
                    <jet-input v-model="form.password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label class="flex items-center">
                        <input v-model="form.remember" type="checkbox" class="form-checkbox" name="remember">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="#">
                        Forgot your password?
                    </a>


                    <jet-button class="ml-4">
                        Login
                    </jet-button>
                </div>

            </form>



        </div>
    </div>
</template>
<script>
import GuestLayout from "../Layouts/AppLayout";
import JetNavLink from "../Jetstream/NavLink";
import JetLabel from "../Jetstream/Label";
import JetInput from "../Jetstream/Input";
import JetButton from "../Jetstream/Button";

export default {
    name: "Login",
    components: {
        GuestLayout,
        JetNavLink,
        JetInput,
        JetLabel,
        JetButton
    },
    props: {
        errors: Object,
    },
    data() {
        return {
            sending: false,
            form: {
                email: 'johndoe@example.com',
                password: 'secret',
                remember: null,
            },
        }
    },

    methods: {
        submit() {
            const data = {
                email: this.form.email,
                password: this.form.password,
                remember: this.form.remember,
            }
            this.$inertia.post('/login', data, {
                onStart: () => this.sending = true,
                onFinish: () => this.sending = false,
            })
        },
    },
}

</script>

<style scoped>

</style>
