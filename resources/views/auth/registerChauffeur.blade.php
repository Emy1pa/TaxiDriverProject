<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
    <!-- component -->
    <section id="contact" class="relative w-full min-h-screen bg-black text-[#ffb703]">
        <h1 class="text-4xl p-4 font-bold tracking-wide text-center">
            Driver Register
        </h1>
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-[#ffb703] h-32 bg-[#ffb703] w-full">
        </div>

        <!-- wrapper -->
        <div class="relative p-5 lg:px-20 flex flex-col md:flex-row items-center justify-center">

            <!-- Contact Me -->
            <form method="POST" action="{{ route('registerChauffeur') }}" enctype="multipart/form-data"
                class="w-full md:w-1/2 border border-[#ffb703] p-6 bg-gray-900 m-b-8">
                @csrf
                <h2 class="text-2xl pb-3 font-semibold">
                    Sign up
                </h2>
                <div>

                    <div class="flex flex-col mb-3">
                        <!-- Name Label -->
                        <label for="name" class="mb-2">Name</label>
                    
                        <!-- Name Input -->
                        <div class="w-full flex items-center">
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="flex-1 px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#ffb703] focus:outline-none focus:bg-gray-800 focus:text-[#ffb703]"
                                autocomplete="off">
                        </div>
                    
                        @error('name')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    

                <div class="flex flex-col mb-3">
                    <!-- Image Upload -->
                    <label for="image">Profile Image</label>
                    <input id="image" type="file" name="picture" accept="image/*"
                        class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#ffb703] focus:outline-none focus:bg-gray-800 focus:text-[#ffb703]">
                    @error('image')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col mb-3">
                    <!-- Email Label -->
                    <label for="email" class="mb-2">Email</label>
                
                    <!-- Email Input -->
                    <input type="text" id="email" name="email" value="{{ old('email') }}"
                        class="w-full px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#ffb703] focus:outline-none focus:bg-gray-800 focus:text-[#ffb703]"
                        autocomplete="off">
                
                    @error('email')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                

                <!-- Password and Confirmation Password on the same line -->
                <div class="flex flex-col mb-3 md:flex-row md:space-x-4">
                    <!-- Password -->
                    <div class="w-full md:w-1/2">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password"
                            class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#ffb703] focus:outline-none focus:bg-gray-800 focus:text-[#ffb703]">
                        @error('password')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirmation Password -->
                    <div class="w-full md:w-1/2">
                        <label for="password_confirmation">Confirmation Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#ffb703] focus:outline-none focus:bg-gray-800 focus:text-[#ffb703]">
                        @error('password_confirmation')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex flex-col mb-3">
                    <label for="phone">Phone Number</label>
                    <input id="phone" type="tel" name="phone" value="{{ old('phone') }}" autocomplete="tel"
                        class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#ffb703] focus:outline-none focus:bg-gray-800 focus:text-[#ffb703]">
                    @error('phone')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Location and Matricule on the same line -->
                <div class="flex flex-col mb-3 md:flex-row md:space-x-4">
                    <!-- Location -->
                    <div class="w-full md:w-1/2">
                        <label for="location">Location</label>
                        <input type="text" id="location" name="location" value="{{ old('location') }}"
                            class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#ffb703] focus:outline-none focus:bg-gray-800 focus:text-[#ffb703]"
                            autocomplete="off">
                        @error('location')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Matricule -->
                    <div class="w-full md:w-1/2">
                        <label for="matricule">Matricule</label>
                        <input type="text" id="matricule" name="matricule" value="{{ old('matricule') }}"
                            class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#ffb703] focus:outline-none focus:bg-gray-800 focus:text-[#ffb703]"
                            autocomplete="off">
                        @error('matricule')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Payment and Statut on the same line -->
                <div class="flex flex-col mb-3 md:flex-row md:space-x-4">
                    <!-- Payment -->
                    <div class="w-full md:w-1/2">
                        <label for="payment">Payment</label>
                        <input type="text" id="payment" name="payment" value="{{ old('payment') }}"
                            class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#ffb703] focus:outline-none focus:bg-gray-800 focus:text-[#ffb703]"
                            autocomplete="off">
                        @error('payment')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Statut -->
                    <div class="flex-1">
                        <label for="statut">Statut</label>
                        <select id="statut" name="statut"
                            class="w-full px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#ffb703] focus:outline-none focus:bg-gray-800 focus:text-[#ffb703]">
                            <option value="disponible">Disponible</option>
                            <option value="indisponible">Indisponible</option>
                            <option value="hors_services">Hors Services</option>
                        </select>
                        @error('statut')
                            <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Description -->
                <div class="flex flex-col mb-3">
                    <label for="description">Description</label>
                    <textarea id="description" name="description"
                        class="resize-none px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#ffb703] focus:outline-none focus:bg-gray-800 focus:text-[#ffb703]"></textarea>
                    @error('description')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <input type="text" value="{{ $role }}" class="hidden" name="role">

        </div>
        <div class="flex items-center justify-end mt-6">
            <a class="text-sm text-gray-600 hover:text-[#ffb703] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#ffb703]"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button type="submit"
                class="ml-4 inline-flex items-center px-4 py-2 border border-[#ffb703] rounded-md font-semibold text-[#ffb703] bg-gray-900 hover:bg-[#ffb703] hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#ffb703]">
                Register
            </button>
        </div>
        </form>
        </div>
    </section>
</body>

</html>
