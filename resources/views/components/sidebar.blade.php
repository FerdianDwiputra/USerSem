<aside id="sidebar"
    class="w-20 bg-[#46617B] text-white min-h-screen flex flex-col items-center p-4 transition-all duration-300">
    <!-- Tombol Toggle -->
    <button onclick="toggleSidebar()" class="mb-4 p-2 bg-gray-700 rounded-md hover:bg-gray-600">
        <i data-feather="menu" class="w-10 h-10"></i>
    </button>

    <!-- Logo -->
    <div class="flex items-center space-x-3 mb-6">
        <i data-feather="layers" class="w-10 h-10"></i>
        <span class="text-xl font-semibold hidden sidebar-text">USERSEM</span>
    </div>

    <!-- Menu -->
    <nav class="flex-1 w-full space-y-3">
        <a href="#" class="flex items-center space-x-3 p-3 rounded-md bg-gray-700 group">
            <i data-feather="home" class="w-10 h-10"></i>
            <span class="hidden sidebar-text">Dashboard</span>
        </a>
        <a href="#" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-700 transition group">
            <i data-feather="clipboard" class="w-10 h-10"></i>
            <span class="hidden sidebar-text">Acara</span>
        </a>
        <a href="#" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-700 transition group">
            <i data-feather="user" class="w-10 h-10"></i>
            <span class="hidden sidebar-text">Profil</span>
        </a>
        <a href="#" class="flex items-center space-x-3 p-3 rounded-md hover:bg-gray-700 transition group">
            <i data-feather="settings" class="w-10 h-10"></i>
            <span class="hidden sidebar-text">Pengaturan</span>
        </a>
    </nav>

    <!-- Logout -->
    <div class="mt-6 w-full">
        <a href="#"
            class="flex items-center space-x-3 p-3 rounded-md bg-red-600 hover:bg-red-700 transition group">
            <i data-feather="log-out" class="w-10 h-10"></i>
            <span class="hidden sidebar-text">Keluar</span>
        </a>
    </div>
</aside>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const texts = document.querySelectorAll('.sidebar-text');

        if (sidebar.classList.contains('w-20')) {
            sidebar.classList.remove('w-20');
            sidebar.classList.add('w-64');
            texts.forEach(text => text.classList.remove('hidden'));
        } else {
            sidebar.classList.remove('w-64');
            sidebar.classList.add('w-20');
            texts.forEach(text => text.classList.add('hidden'));
        }
    }

    feather.replace();
</script>
