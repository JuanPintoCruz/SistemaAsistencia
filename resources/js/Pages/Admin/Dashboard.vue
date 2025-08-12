<script setup>
import { ref, onMounted } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import axios from 'axios'

// Estado
const trabajadores = ref([])
const loading = ref(false)
const trabajadorSeleccionado = ref(null)

//  Obtener trabajadores
async function cargarTrabajadores() {
  loading.value = true
  try {
    const response = await axios.get('http://127.0.0.1:8000/api/trabajadores')
    trabajadores.value = response.data
    console.log(' Trabajadores cargados:', response.data)
  } catch (error) {
    console.error(' Error:', error)
    alert('Error al cargar trabajadores')
  } finally {
    loading.value = false
  }
}

const sexo = ref([
  { id: '1', label: 'Masculino' },
  { id: '2', label: 'Femenino' },
])

function obtenerSexo(id) {
  const encontrado = sexo.value.find(s => s.id == id);
  return encontrado ? encontrado.label : 'No definido';
}


//  Cargar al inicio
onMounted(() => {
  cargarTrabajadores()
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
          <h1 class="text-2xl font-bold text-gray-700">Lista de Trabajadores</h1>
          <div class="flex items-center space-x-4">
            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
              Total: {{ trabajadores.length }}
            </span>
            <button 
              @click="cargarTrabajadores"
              :disabled="loading"
              class="bg-blue-500 hover:bg-blue-600 disabled:opacity-50 text-white px-4 py-2 rounded transition-colors"
            >
              {{ loading ? '🔄 Cargando...' : '🔄 Recargar' }}
            </button>
          </div>
        </div>
        
        <!-- Loading -->
        <div v-if="loading && trabajadores.length === 0" class="text-center py-8">
          <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-500 mx-auto"></div>
          <p class="mt-4 text-gray-600">Cargando trabajadores...</p>
        </div>

        <!-- Tabla -->
        <div v-else class="overflow-x-auto">
          <table class="w-full table-auto border-collapse border border-gray-300">
            <thead>
              <tr class="bg-gray-100">
                <th class="border border-gray-300">ID</th>
                <th class="border border-gray-300">Nombre Completo</th>
                <th class="border border-gray-300">DNI</th>
                <th class="border border-gray-300">SEXO</th>
                <th class="border border-gray-300">Email</th>
                <th class="border border-gray-300">Teléfono</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="t in trabajadores" :key="t.N_ID_TRABAJADOR" class="hover:bg-gray-50">
                <td class="border border-gray-300 px-4 py-2 font-mono text-sm">
                  {{ t.N_ID_TRABAJADOR }}
                </td>               
                <td class="border border-gray-300 px-4 py-2">
                  <div class="font-medium">{{ t.NOMBRES }} {{ t.APELLIDO_PATERNO }}</div>
                  <div class="text-sm text-gray-500">{{ t.APELLIDO_MATERNO }}</div>
                </td>
                <td class="border border-gray-300 px-4 py-2 font-mono">
                  {{ t.DNI }}
                </td>
                <td class="border border-gray-300 px-4 py-2 font-mono">
                  {{ obtenerSexo(t.N_ID_SEXO) }}
                </td>
                <td class="border border-gray-300 px-4 py-2 text-sm">
                  {{ t.EMAIL_CORPORATIVO }}
                </td>
                <td class="border border-gray-300 px-4 py-2">
                  {{ t.TELEFONO }}
                </td>
              </tr>
            </tbody>
          </table>

          <!-- Si no hay datos -->
          <div v-if="trabajadores.length === 0 && !loading" class="text-center py-8">
            <p class="text-gray-500">No hay trabajadores para mostrar</p>
            <button 
              @click="cargarTrabajadores"
              class="mt-4 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded"
            >
              Cargar Trabajadores
            </button>
          </div>
        </div>
      </div>
    </div>

  </AppLayout>
</template>