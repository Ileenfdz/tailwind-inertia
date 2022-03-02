<template>
    <app-layout>
        <template #header>
            <h1 class="py-4 text-2xl font-bold leading-7 text-center text-gray-300 sm:text-3xl sm:truncate bg-gradient-to-l from-indigo-500 to-indigo-800 ">Pruebas</h1>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="p-4 overflow-hidden bg-white shadow-xl sm:rounded-lg">
                    <div class="flex justify-center mt-2">
                        <Link 
                            as="button"
                            type="button"
                            :href="route('pruebas')"
                            class=" text-center text-indigo-400 font-bold rounded py-2 w-2/12 hover:text-indigo-300 hover:bg-indigo-900 focus:outline-none bg-gray-900 border-2 border-indigo-400">
                            Pruebas
                        </Link>
                    </div>
                    <div>
                        <div class="flex justify-center mt-4">
                            <!-- Simple button -->
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Button
                            </button>
                        </div>
                        <div class="flex justify-center mt-4">
                            <!-- Pill button -->
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                Button
                            </button>
                        </div>
                        <div class="flex justify-center mt-4">
                             <!-- Outline button -->
                            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                Button
                            </button>
                        </div>
                       <div class="flex justify-center mt-4">
                           <!-- Bordered button -->
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                Button
                            </button>
                       </div>
                        <div class="flex justify-center mt-4">
                            <!-- Disabled button -->
                            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded opacity-50 cursor-not-allowed">
                                Button
                            </button>
                        </div>
                        <div class="flex justify-center mt-4">
                            <!-- 3D button -->
                            <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                                Button
                            </button>
                        </div>
                        <div class="flex justify-center mt-4">
                            <!-- Elevated button -->
                            <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                Button
                            </button>
                        </div>
                        <div class="flex justify-center mt-4">
                            <!-- Groups of buttons -->
                            <div class="inline-flex">
                                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                                    Prev
                                </button>
                                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                                    Next
                                </button>
                            </div>
                        </div>
                        <div class="flex justify-center mt-4">
                            <!-- Icons button -->
                            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                                <span>Download</span>
                            </button>
                        </div>
                        
                    </div>
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