<template>
    <div class="min-h-screen bg-gray-100">


        <!-- Page Content -->
        <main>
            <slot></slot>
        </main>


    </div>
</template>

<script>
import JetApplicationLogo from './../Jetstream/ApplicationLogo'
import JetApplicationMark from './../Jetstream/ApplicationMark'
import JetDropdown from './../Jetstream/Dropdown'
import JetDropdownLink from './../Jetstream/DropdownLink'
import JetNavLink from './../Jetstream/NavLink'
import JetResponsiveNavLink from './../Jetstream/ResponsiveNavLink'

export default {
    components: {

    },

    data() {
        return {
        }
    },

    methods: {

    },

    computed: {
        path() {
            return window.location.pathname
        }
    }
}
</script>
