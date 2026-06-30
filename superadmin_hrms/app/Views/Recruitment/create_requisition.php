<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Job Requisition</title>

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

    <div id="sidebarOverlay" class="fixed inset-0 bg-black/40 z-40 hidden lg:hidden">
    </div>

    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar -->
        <?= $this->include('sidebar') ?>

        <!-- Main -->
        <div class="flex-1 flex flex-col overflow-hidden">

            <!-- Navbar -->
            <?= $this->include('navbar') ?>

            <!-- Content -->
            <div class="flex-1 overflow-y-auto p-6">
                <div class="max-w-6xl mx-auto">

                    <!-- Back -->
                    <a href="<?= base_url('/Recruitment/requisitions') ?>"
                        class="inline-flex items-center gap-2 text-sm font-medium mb-5 hover:text-orange-500">
                        <i data-lucide="arrow-left-circle" class="w-4 h-4"></i>
                        Back 
                    </a>

                    <div class="bg-white rounded-xl shadow border">

                        <div class="border-b p-6">

                            <h1 class="text-2xl font-bold text-slate-800">

                                Create Job Requisition

                            </h1>

                            <p class="text-slate-500 mt-1">

                                Fill all the required details and submit the requisition for approval.

                            </p>

                        </div>

                        <form action="<?= base_url('Recruitment/requisitions/save-draft') ?>" method="POST">

                            <?= csrf_field(); ?>

                            <?php if (session()->getFlashdata('errors')): ?>

                                <div class="mx-6 mt-6 bg-red-100 border border-red-300 text-red-700 rounded-lg p-4">

                                    <ul class="list-disc ml-5">

                                        <?php foreach (session()->getFlashdata('errors') as $error): ?>

                                            <li><?= esc($error) ?></li>

                                        <?php endforeach; ?>

                                    </ul>

                                </div>

                            <?php endif; ?>

                            <?php if (session()->getFlashdata('success')): ?>

                                <div class="mx-6 mt-6 bg-green-100 border border-green-300 text-green-700 rounded-lg p-4">

                                    <?= session()->getFlashdata('success') ?>

                                </div>

                            <?php endif; ?>

                            <div class="p-6 grid grid-cols-1 lg:grid-cols-2 gap-6">

                                <!-- Job Title -->
                                <div>

                                    <label class="font-medium mb-2 block">
                                        Job Title
                                    </label>

                                    <input type="text" name="job_title" value="<?= old('job_title') ?>"
                                        class="w-full border rounded-lg px-4 py-3" required>

                                </div>

                                <!-- Department -->
                                <div>

                                    <label class="font-medium mb-2 block">
                                        Department
                                    </label>

                                    <select name="department" class="w-full border rounded-lg px-4 py-3">

                                        <option value="">Select Department</option>

                                        <?php foreach ($departments as $department): ?>

                                            <option value="<?= esc($department['department_name']) ?>"
                                                <?= old('department') == $department['department_name'] ? 'selected' : '' ?>>

                                                <?= esc($department['department_name']) ?>

                                            </option>

                                        <?php endforeach; ?>

                                    </select>

                                </div>

                                <!-- Employment Type -->
                                <div>

                                    <label class="font-medium mb-2 block">
                                        Employment Type
                                    </label>

                                    <select name="employment_type" class="w-full border rounded-lg px-4 py-3">

                                        <option <?= old('employment_type') == 'Full Time' ? 'selected' : '' ?>>Full Time
                                        </option>

                                        <option <?= old('employment_type') == 'Part Time' ? 'selected' : '' ?>>Part Time
                                        </option>

                                        <option <?= old('employment_type') == 'Internship' ? 'selected' : '' ?>>Internship
                                        </option>

                                        <option <?= old('employment_type') == 'Contract' ? 'selected' : '' ?>>Contract
                                        </option>

                                    </select>

                                </div>

                                <!-- Vacancies -->
                                <div>

                                    <label class="font-medium mb-2 block">
                                        Vacancies
                                    </label>

                                    <input type="number" min="1" name="vacancies" value="<?= old('vacancies') ?>"
                                        class="w-full border rounded-lg px-4 py-3">

                                </div>

                                <!-- Experience -->
                                <div>

                                    <label class="font-medium mb-2 block">
                                        Experience
                                    </label>

                                    <input type="text" name="experience" value="<?= old('experience') ?>"
                                        placeholder="Eg. 3-5 Years" class="w-full border rounded-lg px-4 py-3">

                                </div>

                                <!-- Location -->
                                <div>

                                    <label class="font-medium mb-2 block">
                                        Location
                                    </label>

                                    <input type="text" name="location" value="<?= old('location') ?>"
                                        class="w-full border rounded-lg px-4 py-3">

                                </div>

                                <!-- Salary From -->
                                <div>

                                    <label class="font-medium mb-2 block">
                                        Salary From
                                    </label>

                                    <input type="number" name="salary_from" value="<?= old('salary_from') ?>"
                                        class="w-full border rounded-lg px-4 py-3">

                                </div>

                                <!-- Salary To -->
                                <div>

                                    <label class="font-medium mb-2 block">
                                        Salary To
                                    </label>

                                    <input type="number" name="salary_to" value="<?= old('salary_to') ?>"
                                        class="w-full border rounded-lg px-4 py-3">

                                </div>

                            </div>

                            <div class="px-6 pb-6">

                                <label class="font-medium mb-2 block">
                                    Skills
                                </label>

                                <textarea name="skills" rows="4"
                                    class="w-full border rounded-lg px-4 py-3"><?= old('skills') ?></textarea>

                            </div>

                            <div class="px-6 pb-6">

                                <label class="font-medium mb-2 block">
                                    Job Description
                                </label>

                                <textarea name="description" rows="6"
                                    class="w-full border rounded-lg px-4 py-3"><?= old('description') ?></textarea>

                            </div>

                            <div class="px-6 pb-8">

                                <label class="font-medium mb-2 block">
                                    Reason for Hiring
                                </label>

                                <textarea name="reason_for_hiring" rows="3"
                                    class="w-full border rounded-lg px-4 py-3"><?= old('reason_for_hiring') ?></textarea>

                            </div>

                            <div class="border-t p-6 flex justify-end gap-4">

                                <button type="submit"
                                    class="bg-slate-700 hover:bg-slate-800 text-white px-6 py-3 rounded-lg">

                                    Save Draft

                                </button>

                                <button formaction="<?= base_url('Recruitment/requisitions/submit') ?>" type="submit"
                                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg">

                                    Submit For Approval

                                </button>

                            </div>

                        </form>

                    </div> <!-- Card -->

                </div> <!-- max-w-6xl -->

            </div> <!-- Content -->

        </div> <!-- Main -->

    </div> <!-- Flex -->

    <script>
        lucide.createIcons();
    </script>



</body>

</html>