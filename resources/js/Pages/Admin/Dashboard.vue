<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
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
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-700">Lista de Trabajadores</h1>
        
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
              <tr>
                <th class="px-2 py-3 text-center">ID</th>
                <th class="px-2 py-3 text-left">Nombres</th>
                <th class="px-2 py-3 text-left">Apellido Paterno</th>
                <th class="px-2 py-3 text-left">Apellido Materno</th>
                <th class="px-2 py-3 text-center">DNI</th>
                <th class="px-2 py-3 text-center">Género</th>
                <th class="px-2 py-3 text-center">Teléfono</th>
                <th class="px-2 py-3 text-left">Dirección</th>
                <th class="px-2 py-3 text-left">Email</th>
                <th class="px-2 py-3 text-left">Cargo</th>
                <th class="px-2 py-3 text-center">Foto</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
              <tr class="hover:bg-gray-50">
                <td class="px-2 py-2 text-center">1</td>
                <td class="px-2 py-2 font-medium text-gray-800">Juan Carlos</td>
                <td class="px-2 py-2">Pinto</td>
                <td class="px-2 py-2">Cruz</td>
                <td class="px-2 py-2 text-center">12345678</td>
                <td class="px-2 py-2 text-center">M</td>
                <td class="px-2 py-2 text-center">987654321</td>
                <td class="px-2 py-2 text-gray-600">Av. Lima 123, Lima</td>
                <td class="px-2 py-2 text-blue-600">juan.pinto@empresa.com</td>
                <td class="px-2 py-2">
                  <span class="bg-blue-500 text-white px-2 py-1 rounded-full text-xs font-semibold">
                    Desarrollador Senior
                  </span>
                </td>
                <td class="px-2 py-2 text-center">
                  <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=60&h=60&fit=crop&crop=face" 
                       alt="Juan Carlos" 
                       class="w-10 h-10 rounded-full object-cover mx-auto">
                </td>
              </tr>
              <tr class="hover:bg-gray-50">
                <td class="px-2 py-2 text-center">2</td>
                <td class="px-2 py-2 font-medium text-gray-800">María Elena</td>
                <td class="px-2 py-2">González</td>
                <td class="px-2 py-2">Pérez</td>
                <td class="px-2 py-2 text-center">23456789</td>
                <td class="px-2 py-2 text-center">F</td>
                <td class="px-2 py-2 text-center">987654322</td>
                <td class="px-2 py-2 text-gray-600">Jr. Cusco 456, Lima</td>
                <td class="px-2 py-2 text-blue-600">maria.gonzalez@empresa.com</td>
                <td class="px-2 py-2">
                  <span class="bg-green-500 text-white px-2 py-1 rounded-full text-xs font-semibold">
                    Desarrolladora Junior
                  </span>
                </td>
                <td class="px-2 py-2 text-center">
                  <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?w=60&h=60&fit=crop&crop=face" 
                      alt="María Elena" 
                      class="w-10 h-10 rounded-full object-cover mx-auto">
                </td>
              </tr>
              <tr class="hover:bg-gray-50">
                <td class="px-2 py-2 text-center">3</td>
                <td class="px-2 py-2 font-medium text-gray-800">Carlos Alberto</td>
                <td class="px-2 py-2">Rodríguez</td>
                <td class="px-2 py-2">Vargas</td>
                <td class="px-2 py-2 text-center">34567890</td>
                <td class="px-2 py-2 text-center">M</td>
                <td class="px-2 py-2 text-center">987654323</td>
                <td class="px-2 py-2 text-gray-600">Av. Arequipa 789, Lima</td>
                <td class="px-2 py-2 text-blue-600">carlos.rodriguez@empresa.com</td>
                <td class="px-2 py-2">
                  <span class="bg-purple-500 text-white px-2 py-1 rounded-full text-xs font-semibold">
                    Analista RRHH
                  </span>
                </td>
                <td class="px-2 py-2 text-center">
                  <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face" 
                       alt="Carlos Alberto" 
                       class="w-10 h-10 rounded-full object-cover mx-auto">
                </td>
              </tr>
              <tr class="hover:bg-gray-50">
                <td class="px-2 py-2 text-center">4</td>
                <td class="px-2 py-2 font-medium text-gray-800">Ana Lucía</td>
                <td class="px-2 py-2">López</td>
                <td class="px-2 py-2">Torres</td>
                <td class="px-2 py-2 text-center">45678901</td>
                <td class="px-2 py-2 text-center">F</td>
                <td class="px-2 py-2 text-center">987654324</td>
                <td class="px-2 py-2 text-gray-600">Calle Las Flores 321, Lima</td>
                <td class="px-2 py-2 text-blue-600">ana.lopez@empresa.com</td>
                <td class="px-2 py-2">
                  <span class="bg-red-500 text-white px-2 py-1 rounded-full text-xs font-semibold">
                    Gerente Marketing
                  </span>
                </td>
                <td class="px-2 py-2 text-center">
                  <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=60&h=60&fit=crop&crop=face" 
                       alt="Ana Lucía" 
                       class="w-10 h-10 rounded-full object-cover mx-auto">
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </AppLayout>
</template>