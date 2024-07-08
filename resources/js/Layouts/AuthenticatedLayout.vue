<template>
    <v-app>
        <v-navigation-drawer v-model="drawer">

        </v-navigation-drawer>
        <v-app-bar class="d-flex justify-space-between">
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
            <v-app-bar-title>
                <NavLink :href="route('dashboard')" :active="route().current('dashboard')" class="text-decoration-none">
                    Budgets
                </NavLink>
            </v-app-bar-title>
            <v-menu>
                <template v-slot:activator="{props}"">
                    <span class="inline-flex rounded-md">
                        <v-btn v-bind="props">
                            {{ $page.props.auth.user.name }}

                            <v-icon icon="mdi-menu-down"></v-icon>
                        </v-btn>
                    </span>
                </template>

                <v-list>
                    <v-list-item>
                        <v-list-item-title>
                            <Link :href="route('profile.edit')" as="button">Perfil</Link>
                        </v-list-item-title>
                    </v-list-item>
                    <v-list-item>
                        <Link :href="route('logout')" method="post" as="button">Log Out</Link>
                    </v-list-item>
                </v-list>
            </v-menu>
        </v-app-bar>
        <v-main>
            <slot />
        </v-main>
    </v-app>
</template>
<script setup>
    import NavLink from '@/Components/NavLink.vue';
    import Dropdown from '@/Components/Dropdown.vue';
    import DropdownLink from '@/Components/DropdownLink.vue';
    import { Link } from '@inertiajs/vue3';
    import { ref } from 'vue';

    const drawer = ref(false);
</script>