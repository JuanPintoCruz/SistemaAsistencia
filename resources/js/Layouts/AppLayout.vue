<template>
<div class="menu-btn sidebar-btn" id="sidebar-btn">
        <i class='bx  bx-menu'></i>
        <i class='bx  bx-x'></i>
    </div>
    <div class="dark-mode-btn" id="dark-mode-btn">
        <i class="bx bx-moon"></i>
        <i class="bx bx-sun"></i>
    </div>
    <div class="sidebar" id="sidebar">
        <div class="header">
            <div class="menu-btn" id="menu-btn">
                <i class='bx bx-chevron-left'></i>
            </div>
            <div class="brand">
                <img src="../../../public/icon-system.png" alt="logo">
                <span>System Asistent</span>
            </div>
        </div>
        <div class="menu-container">
            <div class="search">
                <i class='bx  bx-search'></i>
                <input type="search" placeholder="Search">
            </div>
            <ul class="menu">
                <li class="menu-item menu-item-static active">
                    <a href="#" class="menu-link">
                        <i class='bx  bx-home'></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-item menu-item-static">
                    <a href="#" class="menu-link">
                        <i class='bx  bx-bar-chart-square'></i>
                        <span>Área 1</span>
                    </a>
                </li>
                <li class="menu-item menu-item-dropdown">
                    <a href="#" class="menu-link">
                        <i class='bx  bx-bar-chart-square'></i>
                        <span>Área 2</span>
                        <i class='bx  bx-chevron-down'></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="" class="sub-menu-link">Sub-Area1</a></li>
                        <li><a href="" class="sub-menu-link">Sub-Area2</a></li>
                        <li><a href="" class="sub-menu-link">Sub-Area3</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-static">
                    <a href="#" class="menu-link">
                        <i class='bx bx-task'></i>
                        <span>Informes</span>
                    </a>
                </li>
                <li class="menu-item menu-item-dropdown">
                    <a href="#" class="menu-link">
                        <i class='bx  bx-file-blank'></i>
                        <span>archivos</span>
                        <i class='bx  bx-chevron-down'></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="" class="sub-menu-link">Images</a></li>
                        <li><a href="" class="sub-menu-link">Audios</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="footer">
            <ul class="menu">
                <li class="menu-item menu-item-static">
                    <a href="#" class="menu-link">
                        <i class='bx  bx-bell'></i>
                        <span>Notificaciones</span>
                    </a>
                </li>
                <li class="menu-item menu-item-static">
                    <a href="#" class="menu-link">
                        <i class='bx  bx-cog'></i>
                        <span>Configuraciones</span>
                    </a>
                </li>
            </ul>
            <div class="user">
                <div class="user-img">
                    <img src="../../images/pato.jpg" alt="user">
                </div>
                <div class="user-data">
                    <span class="name">Oscar Jeison</span>
                    <span class="email">Jeison@gmail.com</span>
                </div>
                <div class="user-icon">
                    <i class="bx bx-exit"></i>
                </div>
            </div>
            </div>
    </div>
</template>
<!-- <script >
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};
</script> -->
