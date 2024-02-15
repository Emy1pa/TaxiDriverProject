<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
            {{ __('passager') }}
        </h2>
    </x-slot>

    <div class="relative">
        <!-- Background image -->
        <img src="{{ asset('images/image3.jpg') }}" class="absolute top-0 left-0 w-screen h-screen object-cover z-0" alt="Background">

        <!-- Content -->
        <div class="flex flex-col items-center justify-center p-12 relative z-10 text-yellow-800">
            <!-- Form -->
            <div class="w-full max-w-[550px] bg-yellow-500 bg-opacity-90 p-8 rounded-lg text-white">
                <form action="{{ route('reservations.store') }}" method="post">
                    @csrf
                    <div class="flex flex-wrap items-center justify-between">
                        <!-- Departure -->
                        <div class="w-full sm:w-1/3 px-3">
                            <label for="depart" class="mb-3 block text-base font-medium">
                                Départ
                            </label>
                            <select name="depart" id="depart"
                                class="w-full rounded-md border border-yellow-800 bg-transparent py-3 px-6 text-base font-medium text-yellow-800 outline-none focus:border-yellow-500 focus:shadow-md">
                                <!-- ... (your options for departure) ... -->
                            </select>
                        </div>

                        <!-- Destination -->
                        <div class="w-full sm:w-1/3 px-3">
                            <label for="destination" class="mb-3 block text-base font-medium">
                                Destination
                            </label>
                            <select name="destination" id="destination"
                                class="w-full rounded-md border border-yellow-800 bg-transparent py-3 px-6 text-base font-medium text-yellow-800 outline-none focus:border-yellow-500 focus:shadow-md">
                                <!-- ... (your options for destination) ... -->
                            </select>
                        </div>

                        <!-- Date -->
                        <div class="w-full sm:w-1/3 px-3">
                            <label for="date" class="mb-3 block text-base font-medium">
                                Date
                            </label>
                            <input type="date" name="date" id="date"
                                class="w-full rounded-md border border-yellow-800 bg-transparent py-3 px-6 text-base font-medium text-yellow-800 outline-none focus:border-yellow-500 focus:shadow-md" />
                        </div>
                    </div>

                    <!-- Search Button -->
                    <div class="w-full flex justify-center mt-5">
                        <button
                            class="w-full hover:shadow-form rounded-md bg-yellow-700 hover:bg-yellow-900 py-3 px-8 text-center text-base font-semibold outline-none transition-all duration-300">
                            Search
                        </button>
                    </div>
                </form>
            </div>

            <!-- Grid of Reservations -->
            <div class="max-w-2xl mt-8 gap-4 flex flex-wrap justify-center">
                @foreach(auth()->user()->reservations as $index => $reservation)
                    @php
                    $chauffeur = $reservation->route->user;
                    @endphp

                    @if ($chauffeur->statut == 'disponible')
                        <div class="bg-white shadow-md rounded-3xl p-4 mb-4 lg:mb-0 lg:mr-4 lg:ml-4 lg:w-1/2">
                            <div class="flex-none lg:flex">
                                <div class="h-full w-full lg:h-48 lg:w-48 lg:mb-0 mb-3">
                                    <img src="{{ asset($chauffeur->picture) }}" alt="Chauffeur Picture" class="w-full object-scale-down lg:object-cover lg:h-48 rounded-2xl">
                                </div>
                                <div class="flex-auto ml-3 justify-evenly py-2">
                                    <div class="flex flex-wrap">
                                        <div class="w-full flex-none text-xs text-blue-700 font-medium">
                                           Chauffeur
                                        </div>
                                        <h2 class="flex-auto text-lg font-medium">{{ $chauffeur->name }}</h2>
                                    </div>
                                    <p class="mt-3"></p>
                                    <div class="flex py-4 text-sm text-gray-500">
                                        <div class="flex-1 inline-flex items-center space-betwen">
                                            <!-- ... (route icons or info) ... -->
                                        </div>
                                    </div>
                                    <div class="flex-1 inline-flex items-center">
                                        <!-- ... (date icon or info) ... -->
                                    </div>
                                    <div class="flex p-4 pb-2 border-t border-gray-200"></div>
                                    <div class="flex space-x-3 text-sm font-medium">
                                        <div class="flex-auto flex space-x-3"></div>
                                        <button class="mb-2 md:mb-0 bg-yellow-700 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-yellow-900" type="button" aria-label="like">
                                            Réserver
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
