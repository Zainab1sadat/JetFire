<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Firebase Crud ') }}
        </h2>
    </x-slot>
    <div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
                <a href="{{route('create')}}" class="inline-flex items-center justify-center px-4 py-2 bg-gray-800 w-full border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">add contact</a>

                <table class="table-fixed w-full mt-6">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Last Name</th>
                            <th class="px-4 py-2">Mobile</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tests as $key => $test)
                        <tr>
                            <td class="border px-4 py-2 text-center">{{$test['name']}}</td>
                            <td class="border px-4 py-2 text-center">{{$test['lastname']}}</td>
                            <td class="border px-4 py-2 text-center">{{$test['mobile']}}</td>
                            <td class="border px-4 py-2 text-center">
                                <a href="{{ url('edit-contact/' .$key)}}" class="inline-flex justify-center rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">edit</a>

                                <a href="{{url('delete-contact/' .$key)}}" class="inline-flex justify-center rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-bold text-white shadow-sm hover:bg-red-700 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Delete</a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>