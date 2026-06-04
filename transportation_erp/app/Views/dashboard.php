<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperAdmin HRMS</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

</head>

<body class="bg-[#f5f6fa]">

    <div class="flex h-screen">

        <!-- Sidebar -->
        <aside class="w-[240px] bg-white border-r border-slate-200 overflow-y-auto">
            <div class="px-3 py-6 h-[72px] flex items-center border-b border-slate-100">
                <h2 class="text-[20px] font-semibold text-slate-900 whitespace-nowrap">
                    SuperAdmin HRMS
                </h2>
            </div>

            <nav class="px-3 py-3">
                <h6 class="px-1 mt-2 mb-2 text-[11px] font-medium tracking-wider uppercase text-slate-400">
                    Dashboard
                </h6>
                <a href="#" class="group flex items-center gap-12 px-4 py-2 rounded-md mt-4
                    bg-indigo-500
                    text-white
                    text-slate-600
                    hover:bg-indigo-500
                    hover:text-white-600
                    font-small">
                    <div class="flex items-center gap-2.5">
                        <i data-lucide="home" class="w-3.5 h-3.5"></i>
                        <span class="text-[13px] ">Dashboards</span>
                    </div>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>

                <h6 class="px-1 mt-5 mb-4 text-[11px] font-medium tracking-wider uppercase text-slate-400">
                    WEB APPS
                </h6>
                <a href="#" class="group flex items-center gap-3 px-4 py-3 rounded-md mt-4
                    text-slate-600
                    hover:bg-indigo-500
                    hover:text-white-600
                    font-medium">
                    <i data-lucide="layout-grid" class="w-4 h-4"></i>
                    <span>Apps</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>


                <a href="#" class="group flex items-center gap-3 px-4 py-3 rounded-md mt-2
                    text-slate-600
                    hover:bg-indigo-500
                    hover:text-white                    
                    transition-all duration-300
                    font-medium">
                    <i data-lucide="layers" class="w-4 h-4"></i>
                    <span>Nested Menu</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>

                <h6 class="px-2 mt-6 mb-2 text-[11px] font-medium tracking-wider uppercase text-slate-400">
                    CRAFTED
                </h6>
                <a href="#" class="group flex items-center gap-3 px-4 py-3 rounded-md mt-2
                    text-slate-600
                    hover:bg-indigo-50
                    hover:text-indigo-600
                    hover:translate-x-2
                    transition-all duration-300
                    font-medium">
                    <i data-lucide="lock" class="w-4 h-4"></i>
                    <span>Authentication</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>

                <a href="#" class="group flex items-center gap-3 px-4 py-3 rounded-md mt-2
                    text-slate-600
                    hover:bg-indigo-50
                    hover:text-indigo-600
                    hover:translate-x-2
                    transition-all duration-300
                    font-medium">
                    <i data-lucide="circle-alert" class="w-4 h-4"></i>
                    <span>Error</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>

                <a href="#" class="group flex items-center gap-3 px-4 py-3 rounded-md mt-2
                    text-slate-600
                    hover:bg-indigo-50
                    hover:text-indigo-600
                    hover:translate-x-2
                    transition-all duration-300
                    font-medium">
                    <i data-lucide="file-text" class="w-4 h-4"></i>
                    <span>Pages</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>

                <h6 class="px-4 mt-6 mb-2 text-[11px] font-medium tracking-wider uppercase text-slate-400">
                    MODULES
                </h6>
                <a href="#" class="group flex items-center gap-3 px-4 py-3 rounded-md mt-2
                    text-slate-600
                    hover:bg-indigo-50
                    hover:text-indigo-600
                    hover:translate-x-2
                    transition-all duration-300
                    font-medium">
                    <i data-lucide="form" class="w-4 h-4"></i>
                    <span>Forms</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>

                <a href="#" class="group flex items-center gap-3 px-4 py-3 rounded-md mt-2
                    text-slate-600
                    hover:bg-indigo-50
                    hover:text-indigo-600
                    hover:translate-x-2
                    transition-all duration-300
                    font-medium">
                    <i data-lucide="archive" class="w-4 h-4"></i>
                    <span>UI Elements</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>

                <a href="#" class="group flex items-center gap-3 px-4 py-3 rounded-md mt-2
                    text-slate-600
                    hover:bg-indigo-50
                    hover:text-indigo-600
                    hover:translate-x-2
                    transition-all duration-300
                    font-medium">
                    <i data-lucide="sparkle" class="w-4 h-4"></i>
                    <span>Advancedd UI</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>

                </a>

                <a href="#" class="group flex items-center gap-3 px-4 py-3 rounded-md mt-2
                    text-slate-600
                    hover:bg-indigo-50
                    hover:text-indigo-600
                    hover:translate-x-2
                    transition-all duration-300
                    font-medium">
                    <i data-lucide="award" class="w-4 h-4"></i>
                    <span>Utilities</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>

                <a href="#" class="group flex items-center gap-3 px-4 py-3 rounded-md mt-2
                    text-slate-600
                    hover:bg-indigo-50
                    hover:text-indigo-600
                    hover:translate-x-2
                    transition-all duration-300
                    font-medium">
                    <i data-lucide="gift" class="w-4 h-4"></i>
                    <span>Widgets</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>

                <h6 class="px-4 mt-6 mb-2 text-[11px] font-medium tracking-wider uppercase text-slate-400">
                    TOOLS AND COMPONENTS
                </h6>

                <a href="#" class="group flex items-center gap-3 px-4 py-3 rounded-md mt-2
                    text-slate-600
                    hover:bg-indigo-50
                    hover:text-indigo-600
                    hover:translate-x-2
                    transition-all duration-300
                    font-medium">
                    <i data-lucide="compass" class="w-4 h-4"></i>
                    <span>Maps</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>

                <a href="#" class="group flex items-center gap-3 px-4 py-3 rounded-md mt-2
                    text-slate-600
                    hover:bg-indigo-50
                    hover:text-indigo-600
                    hover:translate-x-2
                    transition-all duration-300
                    font-medium">
                    <i data-lucide="store" class="w-4 h-4"></i>
                    <span>Icons</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>

                <a href="#" class="group flex items-center gap-3 px-4 py-3 rounded-md mt-2
                    text-slate-600
                    hover:bg-indigo-50
                    hover:text-indigo-600
                    hover:translate-x-2
                    transition-all duration-300
                    font-medium">
                    <i data-lucide="chart-no-axes-combined" class="w-4 h-4"></i>
                    <span>Charts</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>

                <a href="#" class="group flex items-center gap-3 px-4 py-3 rounded-md mt-2
                    text-slate-600
                    hover:bg-indigo-50
                    hover:text-indigo-600
                    hover:translate-x-2
                    transition-all duration-300
                    font-medium">
                    <i data-lucide="table-2" class="w-4 h-4"></i>
                    <span>Tables</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>



            </nav>

        </aside>

        <!-- Main -->
        <div class="flex-1 flex flex-col">

            <!-- Navbar -->
            <nav class="h-[72px] bg-white border-b border-slate-200 flex items-center justify-between px-8">

                <div>
                    <h1 class="text-[20px] font-semibold text-black">
                        Dashboard
                    </h1>
                </div>

                <!-- Search Button,Notification, Profile, Settings -->
                <div class="flex items-center gap-5">

                    <!-- Search -->
                    <button class="text-slate-600 hover:text-indigo-600 transition">
                        <i data-lucide="search"></i>
                    </button>

                    <!-- Notification -->
                    <button class="text-slate-600 hover:text-indigo-600 transition">
                        <i data-lucide="bell"></i>
                    </button>

                    <!-- Profile -->
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-indigo-500 text-white flex items-center justify-center">
                            RK
                        </div>

                        <div class="text-right">
                            <p class="font-small text-slate-800">
                                Mr. Kedia
                            </p>
                        </div>

                    </div>

                    <!-- Settings -->
                    <button class="text-slate-600 hover:text-indigo-600 transition">
                        <i data-lucide="settings"></i>
                    </button>

                </div>

            </nav>

            <!-- Main Content -->
            <main class="p-6">

                <div class="grid grid-cols-3 gap-6">

                    <!-- LEFT SIDE -->
                    <div class="col-span-2">

                        <div class="grid grid-cols-2 gap-6">

                            <!-- Card 1 -->
                            <div class="bg-white rounded-md border border-slate-100 p-6 relative h-[120px]">
                                <p class="text-slate-500">Total Sales</p>
                                <h2 class="text-3xl font-bold mt-2">$24.5K</h2>
                            </div>

                            <!-- Card 2 -->
                            <div class="bg-white rounded-md border border-slate-100 p-6 relative h-[120px]">
                                <p class="text-slate-500">Orders</p>
                                <h2 class="text-3xl font-bold mt-2">145</h2>
                            </div>

                            <!-- Card 3 -->
                            <div class="bg-white rounded-md border border-slate-100 p-6 relative h-[120px]">
                                <p class="text-slate-500">Drivers</p>
                                <h2 class="text-3xl font-bold mt-2">52</h2>
                            </div>

                            <!-- Card 4 -->
                            <div class="bg-white rounded-md border border-slate-100 p-6 relative h-[120px]">
                                <p class="text-slate-500">Vehicles</p>
                                <h2 class="text-3xl font-bold mt-2">128</h2>
                            </div>

                        </div>

                    </div>

                    <!-- RIGHT SIDE -->
                    <div class="bg-white rounded-md border border-slate-100 p-6 relative h-[120px]">

                        <h3 class="text-lg font-semibold mb-4">
                            Fleet Distribution
                        </h3>

                        <div class="h-64 flex items-center justify-center text-slate-400">

                            Pie Chart Here

                        </div>

                    </div>

                </div>

            </main>

        </div>

    </div>

    <script>
        lucide.createIcons();
    </script>


</body>

</html>