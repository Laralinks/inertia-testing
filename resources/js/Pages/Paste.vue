<template>
    <app-layout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Pastes
                </h2>
                <div>
                    <div class="flex flex-row space-x-8">
                        <jet-nav-link href="https://pastes.laravel.link" :active="$page.currentRouteName == 'pastes.index'">
                            Latest
                        </jet-nav-link>

                    </div>
                </div>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="py-1">
                        <div class=" min-w-full mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg rounded-lg">
                                <div class="p-3 sm:px-20 bg-white border-b border-gray-200">
                                    <div class="mt-2 text-2xl text-center">
                                        Latest Pastes
                                    </div>
                                </div>
                                <div class="">
                                    <div class="bg-gray-200 bg-opacity-25 min-w-full px-10 py-6 border-b border-gray-200 md:border-t-0 md:border-l" v-for="paste in pastes" :key="paste.id">
                                        <div class="justify-between items-center flex">
                                            <span class="font-light text-gray-600">{{ moment(paste.created_at).fromNow() }}</span>
                                            <a class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500"
                                               href="#">{{ paste.pastelanguage.name }}</a>
                                        </div>
                                        <div class="mt-2">
                                            <a class="text-2xl text-gray-700 font-bold hover:text-gray-600" href="#">{{ paste.title }}</a>
                                            <p class="mt-2 text-gray-600"><code>{{ paste.description }}</code></p>
                                        </div>
                                        <div class="flex justify-between items-center mt-4">
                                            <a class="text-blue-600 hover:underline" href="#">View Paste</a>
                                            <!--<div>
                                                <a class="flex items-center" href="#">
                                                    <img
                                                        class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block"
                                                        :src="paste.user.profile_photo_url" alt="avatar">
                                                    <h1 class="text-gray-700 font-bold">{{ paste.user.name }}</h1>
                                                </a>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6 sm:px-20 bg-white">
                                    <div class="mt-1 text-2xl">
                                        Pagination
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from './../Layouts/AppLayout'
import JetNavLink from './../Jetstream/NavLink'

var moment = require('moment');
export default {
    name: "Paste",
    components: {AppLayout, JetNavLink},
    props: ['pastes'],
    data() {
        return {
            moment: moment
        }
    }
}
</script>

<style scoped>

</style>
