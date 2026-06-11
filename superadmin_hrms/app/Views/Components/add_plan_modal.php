<!-- Add Plan Modal -->
<div id="addPlanModal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center">

    <div class="bg-white w-[90%] max-w-6xl max-h-[95vh] overflow-y-auto rounded shadow-xl">

        <!-- Header -->
        <div class="flex justify-between items-center p-5 border-b">
            <h2 class="text-[22px] font-semibold text-slate-800">
                Add New Plan
            </h2>

            <button onclick="closeAddPlanModal()" class="text-gray-500 hover:text-red-500 text-3xl">
                ✖
            </button>
        </div>

        <!-- Body -->
        <div class="p-5">

            <!-- Upload Section -->
            <div class="bg-gray-100 px-6 py-4 rounded mb-6 flex items-center gap-6">
                <img src="<?= base_url('assets/profile.png') ?>" class="w-16 h-16 rounded-full object-cover">

                <div>
                    <h4 class="font-semibold text-lg">
                        Upload Profile Image
                    </h4>

                    <p class="text-gray-500 text-sm">
                        Image should be below 4 mb
                    </p>

                    <div class="mt-3 flex gap-2">
                        <button class="bg-orange-500 text-white px-4 py-2 rounded">
                            Upload
                        </button>

                        <button class="bg-white border px-4 py-2 rounded">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>

            <!-- Form Grid -->
            <div class="grid grid-cols-2 gap-6">

                <div>
                    <label class="font-medium">Plan Name *</label>
                    <input type="text" class="w-full h-11 border border-slate-300 rounded-md p-3 mt-2 text-sm">
                </div>

                <div>
                    <label class="font-medium">Plan Type *</label>
                    <select class="w-full border rounded p-3 mt-2">
                        <option>Monthly</option>
                        <option>Yearly</option>
                    </select>
                </div>

                <div>
                    <label class="font-medium">Plan Position *</label>
                    <input type="number" class="w-full border rounded p-3 mt-2">
                </div>

                <div>
                    <label class="font-medium">Plan Currency *</label>
                    <select class="w-full border rounded p-3 mt-2">
                        <option>USD</option>
                        <option>INR</option>
                    </select>
                </div>

                <div>
                    <div class="flex justify-between items-center">
                        <label class="font-medium text-slate-700">
                            Plan Price *
                        </label>

                        <span class="text-orange-500 text-sm">
                            Set 0 for free
                        </span>
                    </div>

                    <select class="w-full h-11 border border-slate-300 rounded-md px-3 mt-2">
                        <option>Fixed</option>
                    </select>
                </div>

                <div class="grid grid-cols-[1fr_180px] gap-6">
                    <div>
                        <label class="font-medium">
                            Discount Type *
                        </label>

                        <select class="w-full h-11 border border-slate-300 rounded-md px-3 mt-2">
                            <option>Fixed</option>
                            <option>Percentage</option>
                        </select>
                    </div>

                    <div>
                        <label class="font-medium">
                            Discount *
                        </label>

                        <input type="text" class="w-full h-11 border border-slate-300 rounded-md px-3 mt-2">
                    </div>
                </div>

                <div>
                    <label class="font-medium">Price *</label>
                    <input type="number" class="w-full border rounded p-3 mt-2">
                </div>

                <div>
                    <label class="font-medium">Discount *</label>
                    <input type="number" class="w-full border rounded p-3 mt-2">
                </div>

            </div>

            <div class="grid grid-cols-4 gap-6 mt-6">

                <div>
                    <label>Limitations Invoices</label>
                    <input type="text" class="w-full h-10 border rounded-md mt-2 px-3">
                </div>

                <div>
                    <label>Max Customers</label>
                    <input type="text" class="w-full h-10 border rounded-md mt-2 px-3">
                </div>

                <div>
                    <label>Product</label>
                    <input type="text" class="w-full h-10 border rounded-md mt-2 px-3">
                </div>

                <div>
                    <label>Supplier</label>
                    <input type="text" class="w-full h-10 border rounded-md mt-2 px-3">
                </div>

            </div>

            <div class="mt-8">

                <div class="flex justify-between mb-4">
                    <h3 class="font-semibold text-slate-700">
                        Plan Modules
                    </h3>

                    <label class="flex items-center gap-2">
                        <input type="checkbox">
                        <span>Select All</span>
                    </label>
                </div>

                <div class="grid grid-cols-4 gap-y-4">

                    <label><input type="checkbox"> Employees</label>
                    <label><input type="checkbox"> Invoices</label>
                    <label><input type="checkbox"> Reports</label>
                    <label><input type="checkbox"> Contacts</label>

                    <label><input type="checkbox"> Clients</label>
                    <label><input type="checkbox"> Estimates</label>
                    <label><input type="checkbox"> Goals</label>
                    <label><input type="checkbox"> Deals</label>

                    <label><input type="checkbox"> Projects</label>
                    <label><input type="checkbox"> Payments</label>
                    <label><input type="checkbox"> Assets</label>
                    <label><input type="checkbox"> Leads</label>

                    <label><input type="checkbox"> Tickets</label>
                    <label><input type="checkbox"> Taxes</label>
                    <label><input type="checkbox"> Activities</label>
                    <label><input type="checkbox"> Pipelines</label>

                </div>

            </div>

            <!-- Trial & Status Section -->
            <div class="mt-8">

                <!-- Access Trial -->
                <div class="mb-6 flex items-center gap-3">
                    <span class="font-medium text-slate-700">
                        Access Trial
                    </span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">

                        <div
                            class="w-10 h-5 bg-gray-300 rounded-full transition-colors duration-300 peer-checked:bg-blue-400">
                        </div>

                        <span
                            class="absolute left-0.5 top-0.5 h-4 w-4 bg-white rounded-full shadow transition-transform duration-300 peer-checked:translate-x-5"></span>
                    </label>
                </div>

                <!-- Trial Days -->
                <div class="grid grid-cols-3 gap-8">

                    <!-- Trial Days -->
                    <div>
                        <label class="block mb-2 font-medium text-slate-700">
                            Trial Days
                        </label>

                        <input type="text" class="w-full h-10 border border-slate-300 rounded-md px-3">
                    </div>

                    <!-- Recommended -->
                    <div>
                        <label class="block mb-2 text-slate-700">
                            Is Recommended
                        </label>

                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer">

                            <div
                                class="w-10 h-5 bg-gray-300 rounded-full transition-colors duration-300 peer-checked:bg-blue-400">
                            </div>

                            <span
                                class="absolute left-0.5 top-0.5 h-4 w-4 bg-white rounded-full shadow transition-transform duration-300 peer-checked:translate-x-5"></span>
                        </label>
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="block mb-2 font-medium text-slate-700">
                            Status <span class="text-red-500">*</span>
                        </label>

                        <select class="w-full h-10 border border-slate-300 rounded-md px-3 bg-white">
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                    </div>

                </div>

            </div>

            <!-- Description -->
            <div class="mt-6">
                <label class="font-medium">Description</label>

                <textarea rows="4" class="w-full border rounded p-3 mt-2"></textarea>
            </div>

        </div>

        <!-- Footer -->
        <div class="flex justify-end gap-4 px-8 py-4 border-t bg-slate-50">

            <button onclick="closeAddPlanModal()" class="px-6 py-3 border rounded">
                Cancel
            </button>

            <button class="bg-orange-500 text-white px-6 py-3 rounded">
                Add Plan
            </button>

        </div>

    </div>
</div>