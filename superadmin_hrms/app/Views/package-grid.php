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
    <!-- Graph JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body class="bg-[#f8fafc]">

    <div class="flex h-screen">

        <!-- Sidebar -->
        <?php include __DIR__ . '/sidebar.php'; ?>

        <!-- Main -->
        <div class="flex-1 flex flex-col ">

            <!-- Navbar -->
            <nav class="min-h-[72px] bg-white border-b border-slate-200 flex items-center justify-between px-8">

                <div>
                    <h1 class="text-[20px] font-semibold text-black">
                        !
                    </h1>
                </div>

                <!-- Search Button,Notification, Profile, Settings -->
                <div class="flex items-center gap-5">

                    <!-- Search -->
                    <button class="text-slate-600 hover:text-indigo-600 transition">
                        <i data-lucide="search" class="w-4 h-4"></i>
                    </button>

                    <!-- Notification -->
                    <button class="text-slate-600 hover:text-indigo-600 transition">
                        <i data-lucide="bell" class="w-4 h-4"></i>
                    </button>

                    <!-- Profile -->
                    <div class="flex items-center gap-3">
                        <div class="w-7 h-7 rounded-full bg-indigo-500 text-white flex items-center justify-center">
                            RK
                        </div>

                        <div class="text-right">
                            <p class="font-sm text-slate-800">
                                Mr. Kedia
                            </p>
                        </div>

                    </div>

                    <!-- Settings -->
                    <button class="text-slate-600 hover:text-indigo-600 transition">
                        <i data-lucide="settings" class="w-4 h-4"></i>
                    </button>

                </div>
            </nav>


            <!-- Page Content -->
            <div class="p-5">
                <!-- Page Header -->
                <div class="flex items-start justify-between mb-6">

                    <div>
                        <h1 class="text-[28px] font-semibold text-2xl text-slate-800">
                            Packages
                        </h1>

                        <div class="flex items-center gap-2 mt-2 text-sm text-slate-500">
                            <i data-lucide="house" class="w-4 h-4"></i>

                            <i data-lucide="chevron-right" class="w-4 h-4"></i>

                            <span>Super Admin</span>

                            <i data-lucide="chevron-right" class="w-4 h-4"></i>

                            <span class="text-slate-700">
                                Packages List
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">

                        <!-- List View -->
                        <a href="<?= base_url('packages') ?>"
                            class="w-8 h-8 bg-white border border-slate-200 rounded-md flex items-center justify-center text-slate-500">
                            <i data-lucide="list" class="w-4 h-4"></i>
                        </a>

                        <!-- Grid View -->
                        <a href="<?= base_url('package-grid') ?>"
                            class="w-10 h-10 bg-orange-500 rounded-md flex items-center justify-center text-white">
                            <i data-lucide="grid-2x2" class="w-4 h-4"></i>
                        </a>

                        <!-- Export -->
                        <button
                            class="flex items-center gap-2 px-4 py-1.5 bg-white border border-slate-200 rounded-md text-sm">
                            <i data-lucide="file-down" class="w-4 h-4"></i>

                            Export

                            <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </button>

                        <!-- Add Plan -->
                        <button
                            class="flex items-center gap-2 px-4 py-1.5 bg-orange-500 text-white rounded-md text-sm font-medium">

                            <i data-lucide="plus-circle" class="w-4 h-4"></i>

                            Add Plan
                        </button>

                        <!-- Scroll Top -->
                        <button
                            class="w-8 h-8 bg-white border border-slate-200 rounded-md flex items-center justify-center">
                            <i data-lucide="chevrons-up" class="w-4 h-4"></i>
                        </button>

                    </div>

                </div>

                <!-- Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5 mb-6">

                    <!-- Total Plans -->
                    <div class="bg-white border border-slate-200 rounded-md p-5 shadow-sm">
                        <div class="flex items-center justify-between">

                            <div>
                                <p class="text-xs font-semibold text-slate-500">
                                    Total Plans
                                </p>

                                <h3 class="text-xl font-semibold text-slate-800">
                                    08
                                </h3>
                            </div>

                            <div class="w-11 h-11 bg-orange-500 rounded flex items-center justify-center">
                                <i data-lucide="package" class="w-5 h-5 text-white"></i>
                            </div>

                        </div>
                    </div>

                    <!-- Active Plans -->
                    <div class="bg-white border border-slate-200 rounded-md p-5 shadow-sm">
                        <div class="flex items-center justify-between">

                            <div>
                                <p class="text-xs font-semibold text-slate-500">
                                    Active Plans
                                </p>

                                <h3 class="text-xl font-semibold text-slate-800">
                                    08
                                </h3>
                            </div>

                            <div class="w-11 h-11 bg-green-500 rounded flex items-center justify-center">
                                <i data-lucide="activity" class="w-5 h-5 text-white"></i>
                            </div>

                        </div>
                    </div>

                    <!-- Inactive Plans -->
                    <div class="bg-white border border-slate-200 rounded-md p-5 shadow-sm">
                        <div class="flex items-center justify-between">

                            <div>
                                <p class="text-xs font-semibold text-slate-500">
                                    Inactive Plans
                                </p>

                                <h3 class="text-xl font-semibold text-slate-800">
                                    0
                                </h3>
                            </div>

                            <div class="w-11 h-11 bg-red-500 rounded flex items-center justify-center">
                                <i data-lucide="pause" class="w-5 h-5 text-white"></i>
                            </div>

                        </div>
                    </div>

                    <!-- Plan Types -->
                    <div class="bg-white border border-slate-200 rounded-md p-5 shadow-sm">
                        <div class="flex items-center justify-between">

                            <div>
                                <p class="text-xs font-semibold text-slate-500">
                                    No of Plan Types
                                </p>

                                <h3 class="text-xl font-semibold text-slate-800">
                                    02
                                </h3>
                            </div>

                            <div class="w-11 h-11 bg-cyan-500 rounded flex items-center justify-center">
                                <i data-lucide="layers-3" class="w-5 h-5 text-white"></i>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Packages List -->
                <div class="bg-white border border-slate-200 rounded-md shadow-sm">

                    <!-- Header -->
                    <div class="flex items-center justify-between p-5 border-b">

                        <h3 class="text-l font-semibold text-slate-800">
                            Plan List
                        </h3>

                        <div class="flex items-center gap-4">

                            <select class="border rounded-md px-4 py-1 text-[13px]">
                                <option>Select Plan</option>
                            </select>
                            
                            <select class="border rounded-md px-4 py-1 text-[13px]">
                                <option>Sort By : Last 7 Days</option>
                            </select>

                        </div>

                    </div>

                    
                </div>
            </div>


            <script>
                lucide.createIcons();
            </script>
        </div>
    </div>
    </div>