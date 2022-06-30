<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import BreezTc from '@/Components/TableColumn.vue';
import BreezHeader from '@/Components/TableHeader.vue';
const props = defineProps({
    departments:Array
})
 
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Departments
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <!-- {{ departments }} -->
                        <div class="flex item-end justify-center mb-8">
                            <a :href="route('create.department')">Create Department</a>                            
                        </div>
                        <table class="table-auto">
                        <thead>
                            <tr>
                            <BreezHeader>Name</BreezHeader>
                            <BreezHeader>Email</BreezHeader>
                            <BreezHeader>Phone</BreezHeader>
                            <BreezHeader>Action</BreezHeader>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="department in departments" :key="department.id" class="hover:bg-gray-300">
                            <BreezTc>{{ department.name }}</BreezTc>
                            <BreezTc>{{ department.email }}</BreezTc>
                            <BreezTc>{{ department.phone }}</BreezTc>
                            <BreezTc>
                                <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Edit
                                </a>
                                <a href="" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    Delete
                                </a>
                            </BreezTc>
                            </tr>
                        </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
