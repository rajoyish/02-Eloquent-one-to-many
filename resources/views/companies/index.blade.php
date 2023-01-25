<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">{{ __('Companies') }}</h2>
            <a class="inline-flex items-center rounded-md border border-transparent bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900"
                href="#"> {{ __('New Company') }} </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Content --}}
                    <section class="bg-white dark:bg-gray-900">
                        <div class="mx-auto px-6 py-10">
                            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                                @foreach ($companies as $company)
                                    {{-- Company Component --}}
                                    <div>
                                        <div class="mt-8">
                                            <h1
                                                class=" text-xl font-semibold text-gray-800 dark:text-white text-center">
                                                {{ $company->name }}
                                            </h1>
                                            <p class="mb-4 uppercase text-blue-500 text-center">
                                                {{ $company->employees->count() }} Employee(s)
                                            </p>
                                            {{-- Employee Table --}}
                                            <div class="relative overflow-x-auto">
                                                <table
                                                    class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                                                    <thead
                                                        class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3">ID</th>
                                                            <th scope="col" class="px-6 py-3">Employee</th>
                                                            <th scope="col" class="px-6 py-3">Email</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($company->employees as $employee)
                                                            <tr
                                                                class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                                                                <td class="px-6 py-4">{{ $employee->id }}</td>
                                                                <td scope="row"
                                                                    class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                                                    {{ $employee->name }}
                                                                </td>
                                                                <td class="px-6 py-4">{{ $employee->email }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            {{-- / Employee Table --}}
                                        </div>
                                    </div>
                                    {{-- / Company Component --}}
                                @endforeach
                            </div>
                        </div>
                    </section>








                    {{-- Ende of Content --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
