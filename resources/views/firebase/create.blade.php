<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Firebase Crud ') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
            <h1 class="text-center text-info">
                New Contact
            </h1>
            <form action="{{route('store')}}" method="post">

                @csrf
                <div class="form-group mb-5">
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Name" name="name">
                        @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Last Name</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Last Name" name="lastname">
                        @error('lastname') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Mobile</label>
                        <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Mobile" name="mobile">
                        @error('mobile') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="form-group mb-3">
                    <button type="submit" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Store
                    </button>
                    <a type="button" href="{{route('crud')}}" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 mt-6 bg-red-600 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>