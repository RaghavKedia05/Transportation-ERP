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

<body class="bg-slate-50">

    <div
        id="sidebarOverlay"
        class="fixed inset-0 bg-black/40 z-40 hidden lg:hidden">
    </div>

    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar -->
        <?php include __DIR__ . '/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">

            <!-- Navbar -->
            <?php include __DIR__ . '/navbar.php'; ?>

            <!-- Page Content -->
            <main class="flex-1 p-5 overflow-hidden overflow-auto-y">

                <!-- Page Header -->
                <div class="mb-5">
                    <h1 class="text-[28px] font-semibold text-slate-800">
                        Chat
                    </h1>

                    <div class="flex items-center gap-2 text-sm text-slate-500 mt-1">
                        <i data-lucide="house" class="w-4 h-4"></i>
                        <span>Applications</span>

                        <i data-lucide="chevron-right" class="w-4 h-4"></i>

                        <span class="text-slate-700">
                            Chat
                        </span>
                    </div>
                </div>

                <!-- Chat Container -->
                <div class="flex gap-5 h-[calc(100vh-180px)]">

                    <!-- LEFT SIDEBAR -->
                    <div class="w-[360px] bg-white rounded-xl border border-slate-200 flex flex-col">

                        <!-- Header -->
                        <div class="p-5 border-b border-slate-200">

                            <h2 class="text-[24px] font-semibold text-slate-800 mb-5">
                                Chats
                            </h2>

                            <!-- Search -->
                            <div class="relative">
                                <input type="text" placeholder="Search For Contacts or Messages"
                                    class="w-full border border-slate-200 rounded-lg py-3 pl-4 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-orange-500">

                                <i data-lucide="search"
                                    class="absolute right-4 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400">
                                </i>
                            </div>
                        </div>

                        <!-- Chat List -->
                        <div class="flex-1 overflow-y-auto p-4 space-y-3">

                            <!-- Chat Item -->
                            <div
                                class="flex items-center justify-between p-4 rounded-xl border border-slate-200 hover:bg-slate-50 cursor-pointer">

                                <div class="flex items-center gap-3">

                                    <div class="relative">
                                        <img src="https://i.pravatar.cc/100?img=11"
                                            class="w-12 h-12 rounded-full object-cover">

                                        <span
                                            class="absolute bottom-0 right-0 w-3 h-3 rounded-full bg-green-500 border-2 border-white">
                                        </span>
                                    </div>

                                    <div>
                                        <h4 class="font-semibold text-slate-800">
                                            Anthony Lewis
                                        </h4>

                                        <p class="text-sm text-slate-500">
                                            is typing...
                                        </p>
                                    </div>

                                </div>

                                <span class="text-sm text-slate-500">
                                    02:40 PM
                                </span>

                            </div>

                            <!-- Chat Item -->
                            <div
                                class="flex items-center justify-between p-4 rounded-xl border border-slate-200 hover:bg-slate-50 cursor-pointer">

                                <div class="flex items-center gap-3">

                                    <div class="relative">
                                        <img src="https://i.pravatar.cc/100?img=20"
                                            class="w-12 h-12 rounded-full object-cover">

                                        <span
                                            class="absolute bottom-0 right-0 w-3 h-3 rounded-full bg-green-500 border-2 border-white">
                                        </span>
                                    </div>

                                    <div>
                                        <h4 class="font-semibold text-slate-800">
                                            Rebecca Smith
                                        </h4>

                                        <p class="text-sm text-slate-500">
                                            Hi How are you 🔥
                                        </p>
                                    </div>

                                </div>

                                <div class="text-right">
                                    <p class="text-sm text-slate-500">
                                        Sunday
                                    </p>

                                    <span
                                        class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-red-500 text-white text-xs mt-2">
                                        25
                                    </span>
                                </div>

                            </div>

                            <!-- Chat Item -->
                            <div
                                class="flex items-center justify-between p-4 rounded-xl border border-slate-200 hover:bg-slate-50 cursor-pointer">

                                <div class="flex items-center gap-3">

                                    <div class="relative">
                                        <img src="https://i.pravatar.cc/100?img=16"
                                            class="w-12 h-12 rounded-full object-cover">

                                        <span
                                            class="absolute bottom-0 right-0 w-3 h-3 rounded-full bg-green-500 border-2 border-white">
                                        </span>
                                    </div>

                                    <div>
                                        <h4 class="font-semibold text-slate-800">
                                            Harvey Smith
                                        </h4>

                                        <p class="text-sm text-slate-500">
                                            Haha oh man 🔥
                                        </p>
                                    </div>

                                </div>

                                <span class="text-sm text-slate-500">
                                    03:15 AM
                                </span>

                            </div>

                        </div>

                    </div>

                    <!-- RIGHT CHAT AREA -->
                    <div class="flex-1 bg-white rounded-xl border border-slate-200 flex flex-col">

                        <!-- Header -->
                        <div class="flex items-center justify-between px-6 py-4 border-b border-slate-200">

                            <div class="flex items-center gap-3">

                                <div class="relative">
                                    <img src="https://i.pravatar.cc/100?img=11"
                                        class="w-12 h-12 rounded-full object-cover">

                                    <span
                                        class="absolute bottom-0 right-0 w-3 h-3 rounded-full bg-green-500 border-2 border-white">
                                    </span>
                                </div>

                                <div>
                                    <h3 class="font-semibold text-slate-800">
                                        Anthony Lewis
                                    </h3>

                                    <p class="text-sm text-green-500">
                                        Online
                                    </p>
                                </div>

                            </div>

                            <div class="flex items-center gap-5 text-slate-500">
                                <i data-lucide="search" class="w-5 h-5 cursor-pointer"></i>
                                <i data-lucide="more-vertical" class="w-5 h-5 cursor-pointer"></i>
                            </div>

                        </div>

                        <!-- Messages -->
                        <div class="flex-1 overflow-y-auto p-6 bg-slate-50 space-y-8">

                            <!-- Incoming -->
                            <div class="flex gap-3">

                                <img src="https://i.pravatar.cc/100?img=11" class="w-10 h-10 rounded-full object-cover">

                                <div>

                                    <div
                                        class="bg-white rounded-2xl px-5 py-4 max-w-[650px] shadow-sm text-sm text-slate-700">

                                        Hi John, I wanted to update you on a new company policy regarding remote work.

                                    </div>

                                    <p class="text-sm text-slate-500 mt-2">
                                        Anthony Lewis • 08:00 AM
                                    </p>

                                </div>

                            </div>

                            <!-- Outgoing -->
                            <div class="flex justify-end">

                                <div>

                                    <div
                                        class="bg-slate-200 rounded-2xl px-5 py-4 max-w-[650px] text-sm text-slate-700">

                                        Sure, Sarah. What's the new policy?

                                    </div>

                                    <p class="text-sm text-slate-500 mt-2 text-right">
                                        08:00 AM • You
                                    </p>

                                </div>

                            </div>

                            <!-- Date -->
                            <div class="flex justify-center">

                                <span class="bg-slate-900 text-white text-xs font-medium px-4 py-1 rounded-full">
                                    Today, July 24
                                </span>

                            </div>

                            <!-- Incoming -->
                            <div class="flex gap-3">

                                <img src="https://i.pravatar.cc/100?img=11" class="w-10 h-10 rounded-full object-cover">

                                <div>

                                    <div
                                        class="bg-white rounded-2xl px-5 py-4 max-w-[650px] shadow-sm text-sm text-slate-700">

                                        Yes, we'll be using a time-tracking tool to log hours. You'll need to ensure
                                        you're available during your usual working hours.

                                    </div>

                                    <p class="text-sm text-slate-500 mt-2">
                                        Anthony Lewis • 08:00 AM
                                    </p>

                                </div>

                            </div>

                        </div>

                        <!-- Message Input -->
                        <div class="border-t border-slate-200 p-4 bg-white">

                            <div class="flex items-center gap-4">

                                <i data-lucide="mic" class="w-5 h-5 text-slate-500 cursor-pointer">
                                </i>

                                <input type="text" placeholder="Type Your Message" class="flex-1 outline-none text-sm">

                                <i data-lucide="smile" class="w-5 h-5 text-slate-500 cursor-pointer">
                                </i>

                                <i data-lucide="folder" class="w-5 h-5 text-slate-500 cursor-pointer">
                                </i>

                                <i data-lucide="more-vertical" class="w-5 h-5 text-slate-500 cursor-pointer">
                                </i>

                                <button
                                    class="w-11 h-11 rounded-lg bg-orange-500 text-white flex items-center justify-center hover:bg-orange-600 transition">

                                    <i data-lucide="send" class="w-5 h-5"></i>

                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </main>

        </div>

    </div>

    <script>
        lucide.createIcons();

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');

            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }

        document
            .getElementById('sidebarOverlay')
            .addEventListener('click', function () {

                document
                    .getElementById('sidebar')
                    .classList.add('-translate-x-full');

                this.classList.add('hidden');
            });
    </script>

</body>

</html>