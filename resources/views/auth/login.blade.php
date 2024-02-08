<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('images/image2.jpg');">

    <div class="max-w-md w-full p-6 bg-white bg-opacity-90 rounded-md shadow-md">

        <!-- Session Status -->
        <div class="mb-4 text-center">
            @if (session('status'))
                <div class="text-green-600">
                    {{ session('status') }}
                </div>
            @endif
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" class="mt-1 p-2 w-full border rounded-md" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                @error('email')
                    <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" class="mt-1 p-2 w-full border rounded-md" type="password" name="password" required autocomplete="current-password">
                @error('password')
                    <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                <label for="remember_me" class="ml-2 text-sm text-gray-600">Remember me</label>
            </div>

            <div class="flex items-center justify-between mt-4">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-gray-900">Forgot your password?</a>
                @endif

                <button type="submit" class="px-4 py-2 bg-yellow-400 text-white rounded-md hover:bg-yellow-500 focus:outline-none focus:ring focus:border-blue-300">Log in</button>
            </div>
        </form>
    </div>

</body>

</html>
