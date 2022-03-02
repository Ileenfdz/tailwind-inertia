<template>
    <app-layout>
        <template #header>
            <h1 class="py-4 text-2xl font-bold leading-7 text-center text-gray-300 sm:text-3xl sm:truncate bg-gradient-to-l from-indigo-500 to-indigo-800 ">Pruebas</h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="p-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <Link 
                        as="button"
                        type="button"
                        :href="route('pruebas')"
                        class="text-center text-indigo-400 font-bold rounded py-2 w-2/12 hover:text-indigo-300 hover:bg-indigo-900 focus:outline-none bg-gray-900 border-2 border-indigo-400">
                        Pruebas
                    </Link>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import { Head, Link } from '@inertiajs/inertia-vue3';
export default {
    props:{
        productos: Array
    },
    components:{
        AppLayout,
        Head,
        Link,
    }
};
</script>