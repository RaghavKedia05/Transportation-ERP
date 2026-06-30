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
            <div
                class="w-8 h-8 lg:w-9 lg:h-9 rounded-full bg-indigo-500 text-white flex items-center justify-center font-semibold">

                <?= strtoupper(substr(session('name'), 0, 1)) ?>

            </div>

            <div class="hidden sm:block text-right">
                <p class="text-sm font-medium text-slate-800">
                    <?= esc(session('name')) ?>
                </p>

                <p class="text-xs text-slate-500 capitalize">
                    <?= str_replace('_', ' ', session('role')) ?>
                </p>
            </div>

        </div>

        <!-- Settings -->
        <div class="relative">

            <button onclick="toggleSettingsMenu()" class="text-slate-600 hover:text-indigo-600">

                <i data-lucide="settings" class="w-5 h-5"></i>

            </button>

            <div id="settingsMenu"
                class="hidden absolute right-0 mt-3 w-52 bg-white rounded-xl shadow-lg border border-slate-200 overflow-hidden">

                <a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-slate-100">

                    <i data-lucide="user" class="w-4 h-4"></i>

                    Profile

                </a>

                <a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-slate-100">

                    <i data-lucide="lock" class="w-4 h-4"></i>

                    Change Password

                </a>

                <a href="<?= base_url('logout') ?>"
                    class="flex items-center gap-3 px-4 py-3 text-red-600 hover:bg-red-50">

                    <i data-lucide="log-out" class="w-4 h-4"></i>

                    Logout

                </a>

            </div>

        </div>

    </div>


    <script>

        function toggleSettingsMenu() {

            document
                .getElementById('settingsMenu')
                .classList
                .toggle('hidden');

        }

        document.addEventListener('click', function (e) {

            const menu = document.getElementById('settingsMenu');

            if (!e.target.closest('.relative')) {

                menu.classList.add('hidden');

            }

        });

    </script>
</nav>