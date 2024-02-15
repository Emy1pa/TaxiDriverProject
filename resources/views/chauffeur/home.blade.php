<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('chauffeur') }}
        </h2>
    </x-slot>

    <div class="bg-cover bg-center" style="background-image: url('images/image3.jpg');">
        <div class="flex items-center justify-center p-12">
            <div class="w-full max-w-[550px]">
                <form action="{{ route('routes.store') }}" method="post">
                    @csrf
                    <div class="bg-yellow-500 rounded-md p-6">
                        <div class="mb-6">
                            <label class="block text-base font-medium text-white mb-3">
                                Départ
                            </label>
                            <select name="depart" id="depart"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                <option value="safi">safi</option>
                                <option value="casablanca">casablanca</option>
                                <option value="marrakech">marrakech</option>
                                <option value="eljedida">eljedida</option>
                                <option value="chefchaouen">chefchaouen</option>
                                <option value="tanger">tanger</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-base font-medium text-white mb-3">
                                Destination
                            </label>
                            <select name="destination" id="destination"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                <option value="safi">safi</option>
                                <option value="casablanca">casablanca</option>
                                <option value="marrakech">marrakech</option>
                                <option value="eljedida">eljedida</option>
                                <option value="chefchaouen">chefchaouen</option>
                                <option value="tanger">tanger</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="date" class="block text-base font-medium text-white mb-3">
                                Date
                            </label>
                            <input type="date" name="date" id="date"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="flex justify-center">
                            <button name="submit" type="submit"
                                class="rounded-md bg-white w-32 py-3 px-6 text-center text-base font-semibold text-[#ffb703] outline-none transition-all duration-300">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="max-w-2xl mt-8 gap-4 flex flex-wrap pl-4">
    @foreach (auth()->user()->routes as $route)
        <div class="bg-white p-6 rounded-md shadow-md mb-8 flex-grow">
            <h1 class="text-2xl font-semibold text-black mb-6 text-center">Mes Trajets</h1>
            <div class="mb-4 flex">
                <div class="font-semibold text-black flex-shrink-0">Date:</div>
                <div class="text-black flex-grow">{{ $route->date }}</div>
            </div>
            <div class="mb-4 flex">
                <div class="font-semibold text-black flex-shrink-0">Depart:</div>
                <div class="text-black flex-grow">{{ $route->depart }}</div>
            </div>
            <div class="mb-4 flex">
                <div class="font-semibold text-black flex-shrink-0">Destination:</div>
                <div class="text-black flex-grow">{{ $route->destination }}</div>
            </div>
        </div>
    @endforeach
</div>

</x-app-layout>
