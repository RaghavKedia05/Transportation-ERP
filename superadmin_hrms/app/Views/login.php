<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<?php if (session()->getFlashdata('success')): ?>

    <div id="toast"
        class="fixed top-5 right-5 bg-green-600 text-white px-6 py-4 rounded-xl shadow-xl flex items-center gap-3 translate-x-[120%] transition-all duration-500 z-50">

        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">

            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />

        </svg>

        <span>
            <?= session()->getFlashdata('success') ?>
        </span>

    </div>

<?php endif; ?>


<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md p-8">
        <div class="bg-white shadow-xl rounded-2xl p-8">

            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Welcome Back</h1>
                <p class="text-gray-500 mt-2">Sign in to your account</p>
            </div>

            <?php if (session()->getFlashdata('error')): ?>

                <div class="mb-5 flex items-center gap-3 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-700">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01M12 3a9 9 0 100 18 9 9 0 000-18z" />

                    </svg>

                    <span>
                        <?= session()->getFlashdata('error') ?>
                    </span>

                </div>

            <?php endif; ?>

            <form action="<?= base_url('login') ?>" method="post" class="space-y-5">

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Email
                    </label>
                    <input type="email" name="email" placeholder="Enter your email"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition" />
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-sm font-medium text-gray-700">
                            Password
                        </label>
                        <a href="#" class="text-sm text-indigo-600 hover:text-indigo-700">
                            Forgot Password?
                        </a>
                    </div>

                    <input type="password" name="password" placeholder="Enter your password"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition" />
                </div>

                <div class="flex items-center">
                    <input id="remember" type="checkbox" class="h-4 w-4 text-indigo-600 border-gray-300 rounded" />
                    <label for="remember" class="ml-2 text-sm text-gray-600">
                        Remember me
                    </label>
                </div>

                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-lg transition duration-300">
                    Sign In
                </button>

                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="bg-white px-4 text-gray-500">or continue with</span>
                    </div>
                </div>

                <div class="flex justify-center">
                    <button type="button"
                        class="flex justify-center items-center py-3 px-6 border border-gray-300 rounded-lg hover:bg-gray-50 transition">
                        Google
                    </button>
                </div>

                <p class="text-center text-sm text-gray-600">
                    New employee?
                    <a href="<?= base_url('register') ?>"
                        class="text-indigo-600 font-medium hover:text-indigo-700 transition-colors">
                        Register Here
                    </a>
                </p>

            </form>
        </div>
    </div>


    <script>

        const toast = document.getElementById("toast");

        if (toast) {

            // Slide in
            setTimeout(() => {

                toast.classList.remove("translate-x-[120%]");

            }, 100);

            // Slide out
            setTimeout(() => {

                toast.classList.add("translate-x-[120%]");

            }, 3000);

        }

    </script>
</body>

</html>