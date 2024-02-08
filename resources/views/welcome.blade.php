<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body class="antialiased">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="text-white bg-[#ffb703] focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-yellow-600 ">Dashboard</a>
            @else
                <a href="{{ route('login') }}"
                    class="text-white bg-[#ffb703] focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-yellow-600 ">Log
                    in</a>

                @if (Route::has('register'))
                    <!-- Update your Register button -->
                    <a href="#" onclick="showRegisterModal()"
                        class="text-white bg-[#ffb703] focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-yellow-600 ">
                        Register
                    </a>
                @endif
            @endauth
        </div>
    @endif
    <!-- Add this section for the modal -->
    <div id="registerModal" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-8 rounded-md w-96">
            <div class="flex items-center justify-between mb-4">
                <!-- Move the image to the top -->
                <img src="images/taxi.jpg" alt="Icon" class="w-16 h-16 mb-2 rounded-full border-4 border-[#ffb703]">
                <h2 class="text-xl font-bold text-[#ffb703]">Choose your role</h2>
                <button onclick="hideRegisterModal()" class="text-gray-600 hover:text-gray-800 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <p class="text-lg mb-6">Are you a passenger or a driver?</p>
            <div class="flex justify-center space-x-4">
                <button onclick="redirectToRegister('passenger')"
                    class="bg-[#ffb703] text-white px-6 py-3 rounded-full hover:bg-yellow-600 focus:outline-none focus:ring focus:border-yellow-300">
                    Passenger
                </button>
                <button onclick="redirectToRegister('driver')"
                    class="bg-[#ffb703] text-white px-6 py-3 rounded-full hover:bg-yellow-600 focus:outline-none focus:ring focus:border-yellow-300">
                    Driver
                </button>
            </div>
        </div>
    </div>
    

    <!-- Rest of your HTML -->

    <section class="bg-gray-50 bg-cover bg-center relative" style="background-image: url('images/image3.jpg');">
        <div class="mx-auto max-w-screen-xl px-4 py-40 lg:flex lg:h-screen lg:items-center">
            <div class="mx-auto max-w-xl text-center bg-gray-900 bg-opacity-75 p-8 rounded-md">
                <h1 class="text-3xl font-extrabold sm:text-5xl text-white mb-4" style="white-space: nowrap;">
                    MON TAXI DRIVER.
                </h1>

                <strong class="block text-[#ffb703] font-bold text-3xl my-2 sm:inline px-4 py-2 rounded">
                    "Ride with Ease, Arrive with Pleasure."
                </strong>

                <p class="mt-4 sm:text-xl/relaxed text-white max-w-screen-md mx-auto">
                    Welcome to our premier taxi service, where your journey is our top priority.
                    With a commitment to reliability, efficiency, and passenger satisfaction,
                    we offer swift and comfortable rides that transcend the ordinary.
                </p>
            </div>
        </div>
    </section>
    <!-- Add this script at the end of your body tag -->
    <script>
        // Function to show the modal
        function showRegisterModal() {
            document.getElementById('registerModal').classList.remove('hidden');
        }

        // Function to hide the modal
        function hideRegisterModal() {
            document.getElementById('registerModal').classList.add('hidden');
        }

        // Function to redirect to the appropriate registration page
        function redirectToRegister(userType) {
            hideRegisterModal();
            if (userType === 'passenger') {
                window.location.href = '{{ route('register') }}'; // Update with your passenger registration route
            } else if (userType === 'driver') {
                window.location.href = '{{ route('registerChauffeur') }}'; // Update with your driver registration route
            }
        }
    </script>













</body>

</html>
