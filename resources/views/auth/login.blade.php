<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md bg-white shadow-md rounded p-6">
            <h2 class="text-2xl font-bold text-center mb-4">Sign In</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required
                           class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required
                           class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="flex items-center justify-between mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="form-checkbox">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-indigo-600 hover:underline">Forgot your password?</a>
                </div>
                <button type="submit"
                        class="w-full py-2 px-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none">
                    Sign In
                </button>
            </form>
        </div>
    </div>
</body>
</html>
