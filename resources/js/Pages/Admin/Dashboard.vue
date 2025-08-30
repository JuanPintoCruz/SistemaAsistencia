<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import axios from 'axios'

</script>

<template>
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-8 px-4">
      <div class="w-full mx-auto bg-white shadow-md rounded-lg p-6 overflow-x-auto">
        <div class="flex justify-between items-center mb-6">
          <h1 class="text-2xl font-bold text-gray-700">Bienvenido al Panel de Administración</h1>
        </div>
        <p class="text-gray-600">Utilice el menú de navegación para gestionar las diferentes secciones del sistema.</p>
      </div>
    </div>

  </AppLayout>
</template>