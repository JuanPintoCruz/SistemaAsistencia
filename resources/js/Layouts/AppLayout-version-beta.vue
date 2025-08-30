<template>
    <div class="dark-mode-btn" @click="toggleDarkMode">
        <i class='bx  bx-moon'></i>
        <i class='bx  bx-sun'></i>
    </div>
    <div class="menu-btn sidebar-btn" @click="toggleSidebar">
        <i class="bx bx-menu"></i>
        <i class="bx bx-x"></i>
    </div>
    <div class="sidebar" :class="{ 'minimize': isMinimized }">
        <div class="header">
            <div class="menu-btn" @click="toggleMinimize">
                <i class='bx bx-chevron-left'></i>
            </div>
            <div class="brand">
                <img src="/icon-system.png" alt="logo">
                <span>Sistema Asistencia</span>
            </div>
        </div>
        <div class="menu-container">
            <ul class="menu">
                <li v-for="item in menuItems" :key="item.id" :class="['menu-item', item.type, { active: item.active, 'sub-menu-toggle': item.isOpen }]"
                    @click="toggleSubMenu(item)"
                    @mouseover="closeSubMenuOnHover(item)">
                    <a href="#" class="menu-link">
                        <i :class='item.icon'></i>
                        <span>{{ item.name }}</span>
                        <i v-if="item.type === 'menu-item-dropdown'" class="bx bx-chevron-down"></i>
                    </a>
                    <ul v-if="item.subMenu" class="sub-menu"
                        :style="{ height: item.isOpen ? subMenuHeight(item) + 'px' : '0', padding: item.isOpen ? '0.2rem 0' : '0' }">
                        <li v-for="sub in item.subMenu" :key="sub.id">
                            <a href="#" class="sub-menu-link">{{ sub.name }}</a>
                        </li>
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
                    <img src="images/pato.jpg" alt="user">
                </div>
                <div class="user-data">
                    <span class="name">Oscar Jeison</span>
                    <span class="email">Jeison@gmail.com</span>
                </div>
                <div class="user-icon">
                    <Link :href="route('logout')" method="post" as="Button" class="bx bx-exit"></Link>
                </div>
            </div>
        </div>
    </div>
    <main>
        <slot />
    </main>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default {
    props: {
        title: String,
    },
    components: {
        Link,
    },
    data() {
        return {
            isDarkMode: false,
            isMinimized: false,
            isSidebarHidden: false,
            isMobile: window.innerWidth <= 700,
            menuItems: [
                { id: 1, name: 'Dashboard', icon: 'bx bx-home', type: 'menu-item-static', active: true, subMenu: null},
                { id: 2, name: 'Área 1', icon: 'bx bx-bar-chart-square', type: 'menu-item-static', active: false, subMenu: null},
                { id: 3, name: 'Área 2', icon: 'bx bx-bar-chart-square', type: 'menu-item-dropdown', active: false, subMenu: [
                        { id: 1, name: 'Sub-Area1'}, 
                        { id: 2, name: 'Sub-Area2'},
                        { id: 3, name: 'Sub-Area3'}]},
                { id: 4, name: 'Informes', icon: 'bx bx-task', type: 'menu-item-static', active: false, subMenu: null},
                { id: 5, name: 'archivos', icon: 'bx bx-file-blank', type: 'menu-item-dropdown', active: false, subMenu: [
                         { id: 1, name: 'Images' },
                         { id: 2, name: 'Audios' }]},
            ]
        };
    },
    methods: {
        toggleDarkMode() {
            this.isDarkMode = !this.isDarkMode;
            document.body.classList.toggle('dark-mode', this.isDarkMode);
        },
        toggleSidebar() {
            this.isSidebarHidden = !this.isSidebarHidden;
            document.body.classList.toggle('sidebar-hidden', this.isSidebarHidden);
        },
        toggleMinimize() {
            this.isMinimized = !this.isMinimized;
        },
        toggleSubMenu(item) {
            if(item.type === 'menu-item-dropdown') {
                item.isOpen = !item.isOpen;
                this.menuItems.forEach(i => {
                    if(i !== item && i.type === 'menu-item-dropdown' && i.isOpen) {
                        i.isOpen = false;
                    }
                });
            }
        },
        closeSubMenuOnHover(item) {
            if(this.isMinimized && item.type === 'menu-item-static') {
                this.menuItems.forEach(i => {
                    if(i.type === 'menu-item-dropdown' && i.isOpen) {
                        i.isOpen = false;
                    }
                });
            }
        },
        subMenuHeight(item) {
            return item.subMenu ? item.subMenu.length * 40 + 6 : 0;
        },
    },
    mounted() {
        window.addEventListener('resize', () => {
            this.isMobile = window.innerWidth <=700;
            if(window.innerWidth > 700) {
                this.isMinimized = false;
                this.isSidebarHidden = false;
            }
        });
    },
}
</script>

<style scoped>
.dark-mode {
    background-color: #1a202c;
    color: #e2e8f0;
}
.sidebar {
    transition: all 0.3s ease;
}
.minimize {
    width: 4.94rem;
}
.sidebar-hidden {
    transform: translate(-100%);
}
main {
    padding: 2rem 3rem 3rem 15rem;
    transition: padding 0.5 ease;
}
.minimize + main {
    padding-left: 7.96rem;
}
@media (max-width: 700px) or (max-height: 683px) {
    .sidebar-hidden {
        transform: translate(0);
    }
    main {
        padding: 2rem;
    }
    .menu-btn {
        display: none;
    }
    .sidebar-btn {
        display: flex;
        position: absolute;
        right: 1rem;
        padding: 1.2rem;
    }
    .sidebar-btn i:last-child {
        display: none;
    }
    .sidebar-hidden .sidebar-btn i:last-child {
        display: flex;
    }
    .sidebar-hidden .sidebar-btn i:first-child {
        display: none;
    }
}
</style>
