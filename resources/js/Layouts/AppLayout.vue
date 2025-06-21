<script setup>

</script>

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
                        <span>Home</span>
                    </a>
                </li>
                <li class="menu-item menu-item-static">
                    <a href="#" class="menu-link">
                        <i class='bx  bx-bar-chart-square'></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-item menu-item-dropdown">
                    <a href="#" class="menu-link">
                        <i class='bx  bx-bar-chart-square'></i>
                        <span>Home</span>
                        <i class='bx  bx-chevron-down'></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="" class="sub-menu-link">Products</a></li>
                        <li><a href="" class="sub-menu-link">Orders</a></li>
                        <li><a href="" class="sub-menu-link">Subscriptions</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-static">
                    <a href="#" class="menu-link">
                        <i class='bx bx-task'></i>
                        <span>Task</span>
                    </a>
                </li>
                <li class="menu-item menu-item-dropdown">
                    <a href="#" class="menu-link">
                        <i class='bx  bx-file-blank'></i>
                        <span>File</span>
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
