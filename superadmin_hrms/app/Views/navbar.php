<nav class="min-h-[72px] bg-white border-b border-slate-200 flex items-center justify-between px-4 lg:px-8">

    <div class="flex items-center gap-3">

        <button onclick="toggleSidebar()" class="text-slate-700">
            <i data-lucide="menu" class="w-6 h-6"></i>
        </button>       
    </div>

    <!-- Search Button,Notification, Profile, Settings -->
    <div class="flex items-center gap-3 lg:gap-5 shrink-0">

        <!-- Search -->
        <button class="hidden sm:block text-slate-600 hover:text-indigo-600 transition">
            <i data-lucide="search" class="w-5 h-5"></i>
        </button>

        <!-- Notification -->
        <button class="text-slate-600 hover:text-indigo-600 transition">
            <i data-lucide="bell" class="w-5 h-5"></i>
        </button>

        <!-- Profile -->
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 lg:w-9 lg:h-9 rounded-full bg-indigo-500 text-white flex items-center justify-center">
                RK
            </div>

            <div class="hidden sm:block text-right">
                <p class="font-sm text-slate-800">
                    Mr. Kedia
                </p>
            </div>

        </div>

        <!-- Settings -->
        <button class="text-slate-600 hover:text-indigo-600 transition">
            <i data-lucide="settings" class="w-5 h-5"></i>
        </button>

    </div>
</nav>