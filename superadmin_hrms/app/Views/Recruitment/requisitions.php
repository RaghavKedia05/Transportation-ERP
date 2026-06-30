<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Requisitions</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-slate-100">

    <div class="flex h-screen overflow-hidden">

        <?= $this->include('sidebar') ?>

        <div class="flex-1 flex flex-col overflow-hidden">

            <?= $this->include('navbar') ?>

            <!-- Main Content -->
            <main class="flex-1 p-8 overflow-auto">

                <!-- Page Header -->
                <div class="flex justify-between items-center mb-8">

                    <div>
                        <h1 class="text-3xl font-bold text-slate-800">
                            Job Requisitions
                        </h1>

                        <p class="text-slate-500 mt-1">
                            Manage all recruitment requisitions
                        </p>
                    </div>

                    <a href="<?= base_url('Recruitment/requisitions/create') ?>"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-3 rounded-lg flex items-center gap-2 shadow">

                        <i data-lucide="plus" class="w-5 h-5"></i>

                        Create Requisition

                    </a>

                </div>




                <!-- Table -->

                <div class="bg-white rounded-xl shadow border overflow-hidden">

                    <div class="overflow-x-auto">

                        <table class="w-full">

                            <thead class="bg-slate-100">

                                <tr class="text-left">

                                    <th class="px-6 py-4">Req No</th>

                                    <th class="px-6 py-4">Job Title</th>

                                    <th class="px-6 py-4">Department</th>

                                    <th class="px-6 py-4">Vacancies</th>

                                    <th class="px-6 py-4">Employment</th>

                                    <th class="px-6 py-4">Status</th>

                                    <th class="px-6 py-4">Created</th>

                                    <th class="px-6 py-4 text-center">Actions</th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php if (!empty($requisitions)): ?>

                                    <?php foreach ($requisitions as $row): ?>

                                        <tr class="border-t hover:bg-slate-50">

                                            <td class="px-6 py-4 font-medium">

                                                <?= esc($row['requisition_no']) ?>

                                            </td>

                                            <td class="px-6 py-4">

                                                <?= esc($row['job_title']) ?>

                                            </td>

                                            <td class="px-6 py-4">

                                                <?= esc($row['department']) ?>

                                            </td>

                                            <td class="px-6 py-4">

                                                <?= esc($row['vacancies']) ?>

                                            </td>

                                            <td class="px-6 py-4">

                                                <?= esc($row['employment_type']) ?>

                                            </td>

                                            <td class="px-6 py-4">

                                                <?php

                                                $status = $row['status'];

                                                $class = "bg-gray-100 text-gray-700";

                                                if ($status == "Draft")
                                                    $class = "bg-yellow-100 text-yellow-700";

                                                if ($status == "Pending HOD Approval")
                                                    $class = "bg-blue-100 text-blue-700";

                                                if ($status == "Approved")
                                                    $class = "bg-green-100 text-green-700";

                                                if ($status == "Rejected")
                                                    $class = "bg-red-100 text-red-700";

                                                ?>

                                                <span class="px-3 py-1 rounded-full text-xs font-semibold <?= $class ?>">

                                                    <?= esc($status) ?>

                                                </span>

                                            </td>

                                            <td class="px-6 py-4">

                                                <?= date('d M Y', strtotime($row['created_at'])) ?>

                                            </td>

                                            <!-- Actions -->
                                            <td class="px-6 py-4">

                                                <div class="flex justify-center gap-3">

                                                    <a href="#" onclick="openViewModal(<?= $row['id'] ?>)"
                                                        class="text-indigo-600 hover:text-indigo-800">

                                                        <i data-lucide="eye" class="w-5 h-5"></i>

                                                    </a>


                                                    <a href="#" onclick="openEditModal(<?= $row['id'] ?>)"
                                                        class="text-amber-600 hover:text-amber-800">

                                                        <i data-lucide="square-pen" class="w-5 h-5"></i>

                                                    </a>


                                                    <a href="#" onclick="deleteRequisition(<?= $row['id'] ?>)"
                                                        class="text-red-600 hover:text-red-800">

                                                        <i data-lucide="trash-2" class="w-5 h-5"></i>

                                                    </a>

                                                </div>

                                            </td>

                                        </tr>

                                    <?php endforeach; ?>

                                <?php else: ?>

                                    <tr>

                                        <td colspan="8" class="text-center py-10 text-slate-500">

                                            No Job Requisitions Found

                                        </td>

                                    </tr>

                                <?php endif; ?>

                            </tbody>

                        </table>

                    </div>

                </div>

        </div>

    </div>

    <!-- Toast Notification -->
    <?php if (session()->getFlashdata('success')): ?>

        <div id="toast"
            class="fixed top-6 right-6 translate-x-[120%] opacity-0 transition-all duration-500 ease-in-out z-50">

            <div class="bg-green-600 text-white px-5 py-4 rounded-lg shadow-2xl flex items-center gap-3 min-w-[340px]">

                <i data-lucide="check-circle" class="w-6 h-6"></i>

                <span class="font-medium">
                    <?= session()->getFlashdata('success') ?>
                </span>

            </div>

        </div>

    <?php endif; ?>

    <script>

        document.addEventListener("DOMContentLoaded", function () {

            // Initialize Lucide Icons
            lucide.createIcons();

            const toast = document.getElementById("toast");

            if (toast) {

                // Slide In
                setTimeout(() => {

                    toast.classList.remove("translate-x-[120%]");
                    toast.classList.remove("opacity-0");

                }, 100);

                // Slide Out
                setTimeout(() => {

                    toast.classList.add("translate-x-[120%]");
                    toast.classList.add("opacity-0");

                }, 3000);

            }

        });

    </script>

    <div id="viewModal" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">

        <div class="bg-white rounded-xl w-full max-w-3xl max-h-[90vh] overflow-y-auto p-6">

            <div class="flex justify-between items-center mb-6">

                <h2 class="text-2xl font-bold">

                    Requisition Details

                </h2>

                <button onclick="closeViewModal()">

                    ✕

                </button>

            </div>

            <div id="viewContent" class="text-center py-10 text-slate-500">
                Loading...
            </div>

        </div>

    </div>

    <div id="editModal" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">

        <div class="bg-white rounded-xl w-full max-w-5xl max-h-[90vh] overflow-y-auto p-6">

            <div class="flex justify-between items-center mb-6">

                <h2 class="text-2xl font-bold">

                    Edit Requisition

                </h2>

                <button onclick="closeEditModal()">

                    ✕

                </button>

            </div>

            <div id="editContent" class="text-center py-10 text-slate-500">
                Loading...
            </div>

        </div>

    </div>

    <script>

        function deleteRequisition(id) {
            if (confirm("Delete this requisition permanently?")) {
                window.location.href =
                    "<?= base_url('Recruitment/requisitions/delete/') ?>" + id;
            }
        }

        function closeViewModal() {
            document
                .getElementById("viewModal")
                .classList
                .add("hidden");
        }

        function closeEditModal() {
            document
                .getElementById("editModal")
                .classList
                .add("hidden");
        }

    </script>




</body>

</html>