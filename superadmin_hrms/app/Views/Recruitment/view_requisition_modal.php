<div class="bg-white rounded-2xl overflow-hidden">

    <!-- Header -->
    <div class="px-6 py-4 border-b border-slate-200">

        <div class="flex flex-col sm:flex-row justify-between sm:items-start gap-4">

            <div>

                <h1 class="text-2xl sm:text-3xl font-bold text-left text-slate-900">
                    <?= esc($requisition['job_title']) ?>
                </h1>

                <div class="flex flex-wrap items-center gap-x-3 gap-y-1 mt-3 text-sm text-slate-500">

                    <span class="font-semibold text-slate-700">
                        <?= esc($requisition['requisition_no']) ?>
                    </span>

                    <span class="text-slate-300">•</span>

                    <span><?= esc($requisition['department']) ?></span>

                    <span class="text-slate-300">•</span>

                    <span><?= esc($requisition['employment_type']) ?></span>

                    <span class="text-slate-300">•</span>

                    <span><?= esc($requisition['location']) ?></span>

                </div>

            </div>

            <?php

            $badge = 'bg-slate-100 text-slate-700';

            switch ($requisition['status']) {

                case 'Draft':
                    $badge = 'bg-yellow-100 text-yellow-800';
                    break;

                case 'Pending Approval':
                    $badge = 'bg-blue-100 text-blue-700';
                    break;

                case 'Approved':
                    $badge = 'bg-green-100 text-green-700';
                    break;

                case 'Rejected':
                    $badge = 'bg-red-100 text-red-700';
                    break;

            }

            ?>

            <span class="<?= $badge ?> px-4 py-2 rounded-full text-sm font-semibold whitespace-nowrap self-start">
                <?= esc($requisition['status']) ?>
            </span>

        </div>

    </div>

    <!-- Job Details -->
    <div class="px-6 py-5">

        <div class="flex items-center gap-3 mb-5">

            <div class="w-10 h-10 rounded-lg bg-indigo-100 flex items-center justify-center shrink-0">
                <i data-lucide="briefcase-business" class="w-5 h-5 text-indigo-600"></i>
            </div>

            <h2 class="text-lg text-left text-slate-900 font-semibold">
                Job Details
            </h2>

        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 gap-5">

            <div>
                <p class="text-xs uppercase tracking-wide text-left text-slate-500 mb-1">Department</p>
                <p class="font-semibold text-left text-slate-800"><?= esc($requisition['department']) ?></p>
            </div>

            <div>
                <p class="text-xs uppercase tracking-wide text-left text-slate-500 mb-1">Employment Type</p>
                <p class="font-semibold text-left text-slate-800"><?= esc($requisition['employment_type']) ?></p>
            </div>

            <div>
                <p class="text-xs uppercase tracking-wide text-left text-slate-500 mb-1">Vacancies</p>
                <p class="font-semibold text-left text-slate-800"><?= esc($requisition['vacancies']) ?></p>
            </div>

            <div>
                <p class="text-xs uppercase tracking-wide text-left text-slate-500 mb-1">Experience</p>
                <p class="font-semibold text-left text-slate-800"><?= esc($requisition['experience']) ?></p>
            </div>

            <div>
                <p class="text-xs uppercase tracking-wide text-left text-slate-500 mb-1">Location</p>
                <p class="font-semibold text-left text-slate-800"><?= esc($requisition['location']) ?></p>
            </div>

            <div>
                <p class="text-xs uppercase tracking-wide text-left text-slate-500 mb-1">Salary Range</p>
                <p class="font-semibold text-left text-slate-800">
                    ₹<?= number_format($requisition['salary_from']) ?> - ₹<?= number_format($requisition['salary_to']) ?>
                </p>
            </div>

        </div>

    </div>

    <hr class="border-slate-200">

    <!-- Required Skills -->
    <div class="px-6 py-5">

        <div class="flex items-center gap-3 mb-5">

            <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0">
                <i data-lucide="badge-check" class="w-5 h-5 text-emerald-600"></i>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-slate-900">Required Skills</h2>
                <p class="text-sm text-slate-500">Technical & professional competencies</p>
            </div>

        </div>

        <div class="flex flex-wrap gap-2">

            <?php

            $skills = explode(',', $requisition['skills']);

            foreach ($skills as $skill):
                $skill = trim($skill);
                if ($skill === '') continue;
                ?>
                <span class="px-3 py-1.5 rounded-full bg-indigo-50 text-indigo-700 text-sm font-medium border border-indigo-100">
                    <?= esc($skill) ?>
                </span>
            <?php endforeach; ?>

        </div>

    </div>

    <hr class="border-slate-200">

    <!-- Job Description -->
    <div class="px-6 py-5">

        <div class="flex items-center gap-3 mb-5">

            <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center shrink-0">
                <i data-lucide="file-text" class="w-5 h-5 text-blue-600"></i>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-slate-900">Job Description</h2>
                <p class="text-sm text-slate-500">Responsibilities & role overview</p>
            </div>

        </div>

        <div class="bg-slate-50 rounded-xl border border-slate-200 p-5 leading-7 text-slate-700 whitespace-pre-line">
            <?= nl2br(esc($requisition['description'])) ?>
        </div>

    </div>

    <hr class="border-slate-200">

    <!-- Hiring Justification -->
    <div class="px-6 py-5">

        <div class="flex items-center gap-3 mb-5">

            <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                <i data-lucide="clipboard-list" class="w-5 h-5 text-amber-600"></i>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-slate-900">Hiring Justification</h2>
                <p class="text-sm text-slate-500">Reason for creating this requisition</p>
            </div>

        </div>

        <div class="bg-slate-50 border border-slate-200 rounded-xl p-5 leading-7 text-slate-700 min-h-[120px]">
            <?= !empty($requisition['hiring_justification'])
                ? nl2br(esc($requisition['hiring_justification']))
                : '<span class="text-slate-400 italic">No hiring justification provided.</span>' ?>
        </div>

    </div>

    <hr class="border-slate-200">

    <!-- Timeline -->
    <div class="px-6 py-5">

        <div class="flex items-center gap-3 mb-5">

            <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center shrink-0">
                <i data-lucide="clock-3" class="w-5 h-5 text-purple-600"></i>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-slate-900">Timeline</h2>
                <p class="text-sm text-slate-500">Activity history</p>
            </div>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

            <!-- Created -->
            <div class="bg-white border border-slate-200 rounded-xl p-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center shrink-0">
                        <i data-lucide="plus-circle" class="w-5 h-5 text-green-600"></i>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-900">Created</p>
                        <p class="text-xs text-slate-500">
                            <?= date('d M Y h:i A', strtotime($requisition['created_at'])) ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Updated -->
            <div class="bg-white border border-slate-200 rounded-xl p-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center shrink-0">
                        <i data-lucide="refresh-cw" class="w-5 h-5 text-blue-600"></i>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-900">Last Updated</p>
                        <p class="text-xs text-slate-500">
                            <?= date('d M Y h:i A', strtotime($requisition['updated_at'])) ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Status -->
            <div class="bg-white border border-slate-200 rounded-xl p-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center shrink-0">
                        <i data-lucide="badge-check" class="w-5 h-5 text-indigo-600"></i>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-slate-900">Current Status</p>
                        <p class="text-xs text-slate-500"><?= esc($requisition['status']) ?></p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <hr class="border-slate-200">

    <!-- Footer -->
    <div class="px-6 py-5 bg-slate-50 flex flex-col-reverse sm:flex-row justify-between items-stretch sm:items-center gap-3">

        <button onclick="closeViewModal()"
            class="px-6 py-3 rounded-lg border border-slate-300 bg-white hover:bg-slate-100 font-medium text-slate-700">
            Close
        </button>

        <div class="flex flex-col sm:flex-row gap-3">

            <?php if ($requisition['status'] == 'Draft'): ?>

                <button onclick="closeViewModal();openEditModal(<?= $requisition['id'] ?>)"
                    class="px-6 py-3 rounded-lg bg-amber-500 hover:bg-amber-600 text-white font-semibold">
                    <i data-lucide="square-pen" class="w-4 h-4 inline mr-2"></i>
                    Edit Draft
                </button>

                <form action="<?= base_url('Recruitment/requisitions/update/' . $requisition['id']) ?>" method="post">
                    <input type="hidden" name="status" value="Pending Approval">
                    <button type="submit"
                        class="w-full px-6 py-3 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white font-semibold">
                        <i data-lucide="send" class="w-4 h-4 inline mr-2"></i>
                        Submit For Approval
                    </button>
                </form>

            <?php endif; ?>

        </div>

    </div>

</div>