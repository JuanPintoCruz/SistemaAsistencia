<script setup>
import { ref, onMounted } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import axios from 'axios'

// Estado
const areas = ref([])
const loading = ref(false)
a
//  Obtener areas
async function cargarAreas() {
  loading.value = true
  try {
    const response = await axios.get('http://127.0.0.1:8000/api/areas')
    areas.value = response.data
    console.log(' areas cargadas:', response.data)
  } catch (error) {
    console.error(' Error:', error)
    alert('Error al cargar Areas')
  } finally {
    loading.value = false
  }
}

//  Cargar al inicio
onMounted(() => {
  cargarAreas()
})
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
          <h1 class="text-2xl font-bold text-gray-700">Lista de Areas</h1>
          <div class="flex items-center space-x-4">
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
              Total: {{ areas.length }}
            </span>
            <button 
              @click="cargarAreas"
              :disabled="loading"
              class="bg-blue-500 hover:bg-blue-600 disabled:opacity-50 text-white px-6 py-3 rounded-lg transition-all"
            >
              {{ loading ? '🔄 Cargando...' : '🔄 Recargar' }}
            </button>
          </div>
        </div>
        
        <!-- Loading -->
        <div v-if="loading && areas.length === 0" class="text-center py-8">
          <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-500 mx-auto"></div>
          <p class="mt-4 text-gray-600">Cargando Areas...</p>
        </div>

        <!-- Tabla -->
        <div v-else class="overflow-x-auto">
          <table class="w-full table-auto border-collapse border border-gray-300">
            <thead>
              <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Nombre</th>
                <th class="border border-gray-300 px-4 py-2">Descripción</th>
                <th class="border border-gray-300 px-4 py-2">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="t in areas" :key="t.N_ID_AREA" class="hover:bg-gray-50">
                <td class="border border-gray-300 px-4 py-2">{{ t.N_ID_AREAS }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ t.NOMBRE }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ t.DESCRIPCION }}</td>
                <td class="border border-gray-300 px-4 py-2 text-center">
                  <button 
                    type="button" 
                    class="btn btn-primary mx-2"
                  >
                    Editar
                  </button>
                  <button 
                    type="button" 
                    class="btn btn-danger mx-2"
                  >
                    Eliminar
                  </button>
                </td>
              </tr>
            </tbody>
          </table>

          <!-- Si no hay datos -->
          <div v-if="areas.length === 0 && !loading" class="text-center py-8">
            <p class="text-gray-500">No hay áreas para mostrar</p>
            <button 
              @click="cargarAreas"
              class="mt-4 bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg"
            >
              Cargar Áreas
            </button>
          </div>
        </div>
      </div>
    </div>

  </AppLayout>
</template>
