<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

const usuarios = [
  { id: 1, nombre: 'Juan Pérez', rol: 'Administrador' },
  { id: 2, nombre: 'María García', rol: 'Trabajador' },
  { id: 3, nombre: 'Carlos Sánchez', rol: 'Trabajador' },
  { id: 4, nombre: 'Ana Torres', rol: 'Administrador' },
];
</script>

<template>
  <AppLayout title="Dashboard">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-8 px-4">
      <div class="max-w-5xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-700">Lista de Usuarios</h1>
        
        <table class="min-w-full divide-y divide-gray-200 text-sm text-center">
          <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
            <tr>
              <th class="px-4 py-3">#</th>
              <th class="px-4 py-3">Nombre</th>
              <th class="px-4 py-3">Rol</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-100">
            <tr v-for="usuario in usuarios" :key="usuario.id" class="hover:bg-gray-50">
              <td class="px-4 py-2">{{ usuario.id }}</td>
              <td class="px-4 py-2 font-medium text-gray-800">{{ usuario.nombre }}</td>
              <td class="px-4 py-2">
                <span
                  :class="usuario.rol === 'Administrador'
                    ? 'bg-blue-500 text-white px-2 py-1 rounded-full text-xs font-semibold'
                    : 'bg-green-500 text-white px-2 py-1 rounded-full text-xs font-semibold'"
                >
                  {{ usuario.rol }}
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </AppLayout>
</template>
