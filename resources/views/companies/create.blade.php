<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('companies.store') }}">
                @csrf
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
                    <div class="p-6 text-gray-900">
                        <div class="space-y-6">
                            <div>
                                <h2 class="font-bold mb-2 uppercase">Company</h2>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                    :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                        </div>
                    </div>
                </div>
                {{-- Employee 1 --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
                    <div class="p-6 text-gray-900">
                        <div class="space-y-6">
                            <div>
                                <h2 class="font-bold mb-2 uppercase">Employee - 1</h2>
                                <x-input-label for="employee1_name" :value="__('Name')" />
                                <x-text-input id="employee1_name" name="employee1_name" type="text"
                                    class="mt-1 block w-full" :value="old('employee1_name')" autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('employee1_name')" />
                            </div>
                            <div>
                                <x-input-label for="employee1_email" :value="__('Email')" />
                                <x-text-input id="employee1_email" name="employee1_email" type="email"
                                    class="mt-1 block w-full" :value="old('employee1_email')" autocomplete="email" />
                                <x-input-error class="mt-2" :messages="$errors->get('employee1_email')" />
                            </div>
                        </div>
                    </div>
                </div>
                {{-- / Employee 1 --}}
                {{-- Employee 2 --}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
                    <div class="p-6 text-gray-900">
                        <div class="space-y-6">
                            <div>
                                <h2 class="font-bold mb-2 uppercase">Employee - 2</h2>
                                <x-input-label for="employee2_name" :value="__('Name')" />
                                <x-text-input id="employee2_name" name="employee2_name" type="text"
                                    class="mt-1 block w-full" :value="old('employee2_name')" autocomplete="email" />
                                <x-input-error class="mt-2" :messages="$errors->get('employee2_name')" />
                            </div>
                            <div>
                                <x-input-label for="employee2_email" :value="__('Email')" />
                                <x-text-input id="employee2_email" name="employee2_email" type="email"
                                    class="mt-1 block w-full" :value="old('employee2_email')" autocomplete="email" />
                                <x-input-error class="mt-2" :messages="$errors->get('employee2_email')" />
                            </div>
                        </div>
                    </div>
                </div>
                {{-- / Employee 2 --}}
                <div>
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        {{ __('Save') }}
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
