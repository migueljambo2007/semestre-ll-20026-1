<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Dashboard
            </h2>
        </template>

        <div class="py-12 bg-gray-50 min-h-screen">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-xl sm:rounded-xl border border-indigo-100"
                >
                    <div class="p-6 text-gray-900">
                        <div>
                            
                            <div class="flex items-center justify-between mb-5">
                                <h3 class="text-lg font-bold text-gray-700 tracking-tight">
                                    Lista de Usuarios
                                </h3>
                                <button 
                                    type="button"
                                    class="inline-flex items-center gap-1.5 rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-md hover:bg-indigo-700 active:bg-indigo-800 transition-all duration-200 transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                     Nuevo
                                </button>
                            </div>

                            <div class="overflow-x-auto rounded-lg border border-gray-100 shadow-sm">
                                <table class="min-w-full divide-y divide-gray-200 text-sm">
                                    <thead class="bg-gradient-to-r from-indigo-600 to-violet-600">
                                        <tr>
                                            <th class="px-6 py-4 text-left font-semibold text-white uppercase tracking-wider rounded-tl-lg">ID</th>
                                            <th class="px-6 py-4 text-left font-semibold text-white uppercase tracking-wider">Nombre</th>
                                            <th class="px-6 py-4 text-left font-semibold text-white uppercase tracking-wider">Email</th>
                                            <th class="px-6 py-4 text-left font-semibold text-white uppercase tracking-wider rounded-tr-lg">Rol</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-100 bg-white">
                                        <tr class="hover:bg-indigo-50/50 transition-colors duration-200">
                                            <td class="px-6 py-4 whitespace-nowrap text-indigo-600 font-bold">#1</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-800 font-medium">Usuario Ejemplo</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-500">usuario@ejemplo.com</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex items-center gap-1 rounded-full bg-fuchsia-50 px-3 py-1 text-xs font-semibold text-fuchsia-700 ring-1 ring-inset ring-fuchsia-700/20">
                                                    Administrador
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-indigo-50/50 transition-colors duration-200">
                                            <td class="px-6 py-4 whitespace-nowrap text-indigo-600 font-bold">#2</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-800 font-medium">María López</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-gray-500">maria@ejemplo.com</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="inline-flex items-center gap-1 rounded-full bg-cyan-50 px-3 py-1 text-xs font-semibold text-cyan-700 ring-1 ring-inset ring-cyan-700/20">
                                                    Editor
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>