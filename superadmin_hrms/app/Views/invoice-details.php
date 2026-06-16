<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Details</title>

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

    <!-- Lucide -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-slate-50">

    <div class="flex h-screen">

        <!-- Sidebar -->
        <?php include __DIR__ . '/sidebar.php'; ?>

        <div class="flex-1 flex flex-col">

            <!-- Navbar -->
            <?php include __DIR__ . '/navbar.php'; ?>

            <!-- Main Content -->
            <div class="p-5">

                <!-- Header -->
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <h1 class="text-[28px] font-semibold text-slate-800">
                            Invoices
                        </h1>

                        <div class="flex items-center gap-2 mt-2 text-sm text-slate-500">
                            <i data-lucide="house" class="w-4 h-4"></i>
                            <i data-lucide="chevron-right" class="w-4 h-4"></i>
                            <span>Applications</span>
                            <i data-lucide="chevron-right" class="w-4 h-4"></i>
                            <span class="text-slate-700">Invoices</span>
                        </div>
                    </div>

                    <button
                        class="flex items-center gap-2 px-4 py-2 bg-slate-900 text-white rounded-md text-sm hover:bg-slate-800">
                        <i data-lucide="download" class="w-4 h-4"></i>
                        Download
                    </button>
                </div>

                <!-- Invoice Card -->
                <div class="max-w-[1400px] mx-auto">

                    <div class="bg-white rounded-lg border shadow-sm overflow-hidden">

                        <div class="p-8">

                            <!-- Back Button -->
                            <a href="<?= base_url('invoice') ?>"
                                class="inline-flex items-center gap-2 text-sm font-medium text-slate-700 hover:text-orange-500 mb-8">
                                <i data-lucide="arrow-left-circle" class="w-4 h-4"></i>
                                Back to List
                            </a>

                            <!-- Company Header -->
                            <div class="flex justify-between items-start border-b pb-8">

                                <div>
                                    <h2 class="text-4xl font-bold text-blue-500">
                                        GIC<span class="text-slate-800">HRMS</span>
                                    </h2>

                                    <p class="text-slate-500 mt-4">
                                        3099 Kennedy Court Framingham, MA 01702
                                    </p>
                                </div>

                                <div class="text-right">
                                    <h3 class="text-xl font-semibold text-slate-800">
                                        Invoice No
                                        <span class="text-orange-500">
                                            #INV0001
                                        </span>
                                    </h3>

                                    <p class="mt-3 text-slate-500">
                                        Created Date :
                                        <span class="font-medium text-slate-700">
                                            Sep 24, 2023
                                        </span>
                                    </p>

                                    <p class="mt-1 text-slate-500">
                                        Due Date :
                                        <span class="font-medium text-slate-700">
                                            Sep 30, 2023
                                        </span>
                                    </p>
                                </div>

                            </div>

                            <!-- From / To / Status -->
                            <div class="grid grid-cols-3 gap-12 py-8 border-b">

                                <!-- From -->
                                <div>

                                    <h4 class="font-semibold text-slate-800 mb-4">
                                        From
                                    </h4>

                                    <h3 class="text-2xl font-semibold text-slate-800">
                                        Thomas Lawler
                                    </h3>

                                    <p class="text-slate-500 mt-3">
                                        2077 Chicago Avenue Orosi, CA 93647
                                    </p>

                                    <p class="text-slate-500 mt-2">
                                        Email :
                                        Tarala2445@example.com
                                    </p>

                                    <p class="text-slate-500 mt-2">
                                        Phone :
                                        +1 987 654 3210
                                    </p>

                                </div>

                                <!-- To -->
                                <div>

                                    <h4 class="font-semibold text-slate-800 mb-4">
                                        To
                                    </h4>

                                    <h3 class="text-2xl font-semibold text-slate-800">
                                        Sara Inc.,
                                    </h3>

                                    <p class="text-slate-500 mt-3">
                                        3103 Trainer Avenue Peoria, IL 61602
                                    </p>

                                    <p class="text-slate-500 mt-2">
                                        Email :
                                        Sara_inc34@example.com
                                    </p>

                                    <p class="text-slate-500 mt-2">
                                        Phone :
                                        +1 987 471 6589
                                    </p>

                                </div>

                                <!-- Status -->
                                <div>

                                    <h4 class="font-semibold text-slate-800 mb-4">
                                        Payment Status
                                    </h4>

                                    <span
                                        class="inline-flex items-center px-4 py-2 bg-red-100 text-red-600 rounded-md text-sm font-medium">
                                        Due in 10 Days
                                    </span>

                                    <div
                                        class="w-28 h-28 border-2 border-dashed border-slate-300 rounded-lg mt-6 flex items-center justify-center text-slate-400">
                                        QR
                                    </div>

                                </div>

                            </div>

                            <!-- Invoice For -->
                            <div class="py-8">

                                <p class="text-slate-500">
                                    Invoice For :
                                    <span class="font-medium text-slate-800">
                                        Design & Development of Website
                                    </span>
                                </p>

                                <!-- Table -->
                                <div class="mt-8 overflow-x-auto">

                                    <table class="w-full">

                                        <thead class="bg-slate-100">
                                            <tr class="h-14 text-sm font-semibold text-slate-700">

                                                <th class="px-5 text-left">
                                                    Job Description
                                                </th>

                                                <th class="px-5 text-center">
                                                    Qty
                                                </th>

                                                <th class="px-5 text-right">
                                                    Cost
                                                </th>

                                                <th class="px-5 text-right">
                                                    Discount
                                                </th>

                                                <th class="px-5 text-right">
                                                    Total
                                                </th>

                                            </tr>
                                        </thead>

                                        <tbody class="divide-y divide-slate-200">

                                            <?php
                                            $items = [
                                                ['UX Strategy', '1', '$500', '$100', '$500'],
                                                ['Design System', '1', '$5000', '$100', '$5000'],
                                                ['Brand Guidelines', '1', '$5000', '$100', '$5000'],
                                                ['Social Media Template', '1', '$5000', '$100', '$5000']
                                            ];

                                            foreach ($items as $item):
                                                ?>

                                                <tr class="h-16">

                                                    <td class="px-5 font-medium text-slate-800">
                                                        <?= $item[0] ?>
                                                    </td>

                                                    <td class="px-5 text-center text-slate-600">
                                                        <?= $item[1] ?>
                                                    </td>

                                                    <td class="px-5 text-right text-slate-600">
                                                        <?= $item[2] ?>
                                                    </td>

                                                    <td class="px-5 text-right text-slate-600">
                                                        <?= $item[3] ?>
                                                    </td>

                                                    <td class="px-5 text-right font-medium text-slate-800">
                                                        <?= $item[4] ?>
                                                    </td>

                                                </tr>

                                            <?php endforeach; ?>

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                            <!-- Terms + Totals -->
                            <div class="grid grid-cols-2 gap-16 py-8 border-t border-b">

                                <!-- Left -->
                                <div>

                                    <h3 class="font-semibold text-slate-800 mb-3">
                                        Terms and Conditions
                                    </h3>

                                    <p class="text-slate-500">
                                        Please pay within 15 days from the date of invoice,
                                        overdue interest @ 14% will be charged on delayed payments.
                                    </p>

                                    <h3 class="font-semibold text-slate-800 mt-8 mb-3">
                                        Notes
                                    </h3>

                                    <p class="text-slate-500">
                                        Please quote invoice number when remitting funds.
                                    </p>

                                </div>

                                <!-- Right -->
                                <div class="space-y-5">

                                    <div class="flex justify-between">
                                        <span class="text-slate-500">
                                            Sub Total
                                        </span>
                                        <span class="font-semibold">
                                            $5500
                                        </span>
                                    </div>

                                    <div class="flex justify-between">
                                        <span class="text-slate-500">
                                            Discount (0%)
                                        </span>
                                        <span class="font-semibold">
                                            $400
                                        </span>
                                    </div>

                                    <div class="flex justify-between">
                                        <span class="text-slate-500">
                                            VAT (5%)
                                        </span>
                                        <span class="font-semibold">
                                            $54
                                        </span>
                                    </div>

                                    <div class="flex justify-between pt-5 border-t">

                                        <span class="text-2xl font-semibold text-slate-800">
                                            Total Amount
                                        </span>

                                        <span class="text-3xl font-bold text-slate-800">
                                            $5775
                                        </span>

                                    </div>

                                    <p class="text-sm text-slate-500">
                                        Amount in Words :
                                        Dollar Five Thousand Seven Hundred Seventy Five
                                    </p>

                                </div>

                            </div>

                            <!-- Signature -->
                            <div class="py-12 border-b">

                                <div class="text-right">

                                    <h4 class="text-xl font-semibold text-slate-800">
                                        Ted M. Davis
                                    </h4>

                                    <p class="text-slate-500 mt-2">
                                        Assistant Manager
                                    </p>

                                </div>

                            </div>

                            <!-- Footer -->
                            <div class="py-12 text-center">

                                <h2 class="text-4xl font-bold text-blue-500">
                                    GIC<span class="text-slate-800">HRMS</span>
                                </h2>

                                <p class="mt-6 text-slate-700">
                                    Payment Made Via bank transfer / Cheque in the name of Thomas Lawler
                                </p>

                                <div class="flex justify-center gap-8 mt-5 text-sm text-slate-500 flex-wrap">

                                    <span>
                                        Bank Name : HDFC Bank
                                    </span>

                                    <span>
                                        Account Number : 45366287987
                                    </span>

                                    <span>
                                        IFSC : HDFC0018159
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Bottom Buttons -->
                    <div class="flex justify-center gap-4 mt-8">

                        <button
                            class="flex items-center gap-2 px-6 py-3 bg-orange-500 text-white rounded-md hover:bg-orange-600 transition">
                            <i data-lucide="printer" class="w-4 h-4"></i>
                            Print Invoice
                        </button>

                        <button
                            class="flex items-center gap-2 px-6 py-3 border rounded-md hover:bg-slate-50 transition">
                            <i data-lucide="copy" class="w-4 h-4"></i>
                            Clone Invoice
                        </button>

                    </div>

                </div>

            </div>

            <script>
                lucide.createIcons();
            </script>

</body>

</html>