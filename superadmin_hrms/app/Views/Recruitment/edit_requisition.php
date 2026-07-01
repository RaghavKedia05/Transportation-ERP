<form method="post" action="<?= base_url('Recruitment/requisitions/update/' . $requisition['id']) ?>" class="text-left">

    <div class="space-y-6">

        <!-- Job Details -->
        <div class="text-left">

            <div class="flex items-center gap-2 mb-4">
                <div class="w-7 h-7 rounded-md bg-indigo-100 flex items-center justify-center shrink-0">
                    <i data-lucide="briefcase-business" class="w-4 h-4 text-indigo-600"></i>
                </div>
                <h2 class="text-sm font-semibold text-slate-900">Job Details</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                <div class="sm:col-span-2 text-left">
                    <label class="block text-xs font-medium text-slate-600 mb-1.5">Job Title</label>
                    <input type="text" name="job_title" value="<?= esc($requisition['job_title']) ?>"
                        class="w-full border border-slate-300 rounded-lg px-3.5 py-2.5 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="text-left">
                    <label class="block text-xs font-medium text-slate-600 mb-1.5">Department</label>
                    <select name="department"
                        class="w-full border border-slate-300 rounded-lg px-3.5 py-2.5 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-white">
                        <?php foreach ($departments as $dept): ?>
                            <option value="<?= $dept['department_name'] ?>"
                                <?= $dept['department_name'] == $requisition['department'] ? 'selected' : '' ?>>
                                <?= $dept['department_name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="text-left">
                    <label class="block text-xs font-medium text-slate-600 mb-1.5">Employment Type</label>
                    <input type="text" name="employment_type" value="<?= esc($requisition['employment_type']) ?>"
                        class="w-full border border-slate-300 rounded-lg px-3.5 py-2.5 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="text-left">
                    <label class="block text-xs font-medium text-slate-600 mb-1.5">Vacancies</label>
                    <input type="number" name="vacancies" min="1" value="<?= esc($requisition['vacancies']) ?>"
                        class="w-full border border-slate-300 rounded-lg px-3.5 py-2.5 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="text-left">
                    <label class="block text-xs font-medium text-slate-600 mb-1.5">Experience</label>
                    <input type="text" name="experience" value="<?= esc($requisition['experience']) ?>"
                        class="w-full border border-slate-300 rounded-lg px-3.5 py-2.5 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="sm:col-span-2 text-left">
                    <label class="block text-xs font-medium text-slate-600 mb-1.5">Location</label>
                    <input type="text" name="location" value="<?= esc($requisition['location']) ?>"
                        class="w-full border border-slate-300 rounded-lg px-3.5 py-2.5 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div class="text-left">
                    <label class="block text-xs font-medium text-slate-600 mb-1.5">Salary From</label>
                    <div class="relative">
                        <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-sm text-slate-400">₹</span>
                        <input type="number" name="salary_from" min="0" value="<?= esc($requisition['salary_from']) ?>"
                            class="w-full border border-slate-300 rounded-lg pl-7 pr-3.5 py-2.5 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                </div>

                <div class="text-left">
                    <label class="block text-xs font-medium text-slate-600 mb-1.5">Salary To</label>
                    <div class="relative">
                        <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-sm text-slate-400">₹</span>
                        <input type="number" name="salary_to" min="0" value="<?= esc($requisition['salary_to']) ?>"
                            class="w-full border border-slate-300 rounded-lg pl-7 pr-3.5 py-2.5 text-sm text-slate-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                </div>

            </div>

        </div>

        <hr class="border-slate-200">

        <!-- Required Skills -->
        <div class="text-left">

            <div class="flex items-center gap-2 mb-1.5">
                <div class="w-7 h-7 rounded-md bg-emerald-100 flex items-center justify-center shrink-0">
                    <i data-lucide="badge-check" class="w-4 h-4 text-emerald-600"></i>
                </div>
                <h2 class="text-sm font-semibold text-slate-900">Required Skills</h2>
            </div>
            <p class="text-xs text-slate-500 mb-2 ml-9">Separate each skill with a comma</p>

            <textarea name="skills" rows="3"
                class="w-full border border-slate-300 rounded-lg px-3.5 py-2.5 text-sm text-slate-800 leading-6 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"><?= esc($requisition['skills']) ?></textarea>

        </div>

        <hr class="border-slate-200">

        <!-- Job Description -->
        <div class="text-left">

            <div class="flex items-center gap-2 mb-2">
                <div class="w-7 h-7 rounded-md bg-blue-100 flex items-center justify-center shrink-0">
                    <i data-lucide="file-text" class="w-4 h-4 text-blue-600"></i>
                </div>
                <h2 class="text-sm font-semibold text-slate-900">Job Description</h2>
            </div>

            <textarea name="description" rows="6"
                class="w-full border border-slate-300 rounded-lg px-3.5 py-2.5 text-sm text-slate-800 leading-6 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"><?= esc($requisition['description']) ?></textarea>

        </div>

        <!-- Actions -->
        <div class="flex flex-col-reverse sm:flex-row justify-end gap-3 border-t border-slate-200 pt-5">

            <button type="button" onclick="closeEditModal()"
                class="px-5 py-2.5 border border-slate-300 rounded-lg text-sm font-medium text-slate-700 hover:bg-slate-50">
                Cancel
            </button>

            <button type="submit" name="action" value="draft"
                class="bg-amber-500 text-white px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-amber-600">
                Save Draft
            </button>

            <button type="submit" name="action" value="submit"
                class="bg-indigo-600 text-white px-5 py-2.5 rounded-lg text-sm font-semibold hover:bg-indigo-700">
                Submit For Approval
            </button>

        </div>

    </div>

</form>