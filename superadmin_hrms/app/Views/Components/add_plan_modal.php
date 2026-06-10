<!-- Add Plan Modal -->
<div id="addPlanModal"
     class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center">

    <div class="bg-white w-[95%] max-w-6xl max-h-[95vh] overflow-y-auto rounded shadow-xl">

        <!-- Header -->
        <div class="flex justify-between items-center p-5 border-b">
            <h2 class="text-3xl font-semibold text-slate-800">
                Add New Plan
            </h2>

            <button onclick="closeAddPlanModal()"
                    class="text-gray-500 hover:text-red-500 text-3xl">
                ✖
            </button>
        </div>

        <!-- Body -->
        <div class="p-5">

            <!-- Upload Section -->
            <div class="bg-gray-100 p-5 rounded mb-6 flex items-center gap-5">
                <img src="<?= base_url('assets/profile.png') ?>"
                     class="w-20 h-20 rounded-full object-cover">

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
                    <input type="text"
                           class="w-full border rounded p-3 mt-2">
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
                    <input type="number"
                           class="w-full border rounded p-3 mt-2">
                </div>

                <div>
                    <label class="font-medium">Plan Currency *</label>
                    <select class="w-full border rounded p-3 mt-2">
                        <option>USD</option>
                        <option>INR</option>
                    </select>
                </div>

                <div>
                    <label class="font-medium">Price *</label>
                    <input type="number"
                           class="w-full border rounded p-3 mt-2">
                </div>

                <div>
                    <label class="font-medium">Discount *</label>
                    <input type="number"
                           class="w-full border rounded p-3 mt-2">
                </div>

            </div>

            <!-- Description -->
            <div class="mt-6">
                <label class="font-medium">Description</label>

                <textarea rows="4"
                          class="w-full border rounded p-3 mt-2"></textarea>
            </div>

        </div>

        <!-- Footer -->
        <div class="flex justify-end gap-3 p-5 border-t">

            <button onclick="closeAddPlanModal()"
                    class="px-6 py-3 border rounded">
                Cancel
            </button>

            <button class="bg-orange-500 text-white px-6 py-3 rounded">
                Add Plan
            </button>

        </div>

    </div>
</div>