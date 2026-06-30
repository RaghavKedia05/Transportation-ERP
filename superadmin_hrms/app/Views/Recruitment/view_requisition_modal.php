<div class="grid grid-cols-2 gap-6">

    <div>
        <label class="text-sm text-slate-500">Requisition No</label>
        <p class="font-semibold"><?= esc($requisition['requisition_no']) ?></p>
    </div>

    <div>
        <label class="text-sm text-slate-500">Job Title</label>
        <p class="font-semibold"><?= esc($requisition['job_title']) ?></p>
    </div>

    <div>
        <label class="text-sm text-slate-500">Department</label>
        <p><?= esc($requisition['department']) ?></p>
    </div>

    <div>
        <label class="text-sm text-slate-500">Employment Type</label>
        <p><?= esc($requisition['employment_type']) ?></p>
    </div>

    <div>
        <label class="text-sm text-slate-500">Vacancies</label>
        <p><?= esc($requisition['vacancies']) ?></p>
    </div>

    <div>
        <label class="text-sm text-slate-500">Experience</label>
        <p><?= esc($requisition['experience']) ?></p>
    </div>

    <div>
        <label class="text-sm text-slate-500">Location</label>
        <p><?= esc($requisition['location']) ?></p>
    </div>

    <div>
        <label class="text-sm text-slate-500">Status</label>
        <p><?= esc($requisition['status']) ?></p>
    </div>

</div>

<div class="mt-6">
    <label class="text-sm text-slate-500">Skills</label>

    <div class="border rounded-lg p-4 mt-2 bg-slate-50">
        <?= nl2br(esc($requisition['skills'])) ?>
    </div>
</div>

<div class="mt-6">
    <label class="text-sm text-slate-500">Job Description</label>

    <div class="border rounded-lg p-4 mt-2 bg-slate-50">
        <?= nl2br(esc($requisition['description'])) ?>
    </div>
</div>

<?php if ($requisition['status'] == 'Draft'): ?>

<div class="flex justify-end mt-8">

    <a href="<?= base_url('Recruitment/requisitions/edit/'.$requisition['id']) ?>"
       class="bg-indigo-600 text-white px-6 py-3 rounded-lg">

        Edit & Submit

    </a>

</div>

<?php endif; ?>