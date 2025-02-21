<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Profile Header -->
            <div class="mb-8 p-6 bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg">
                <div class="flex items-center space-x-4">
                    <div class="h-24 w-24 rounded-full bg-indigo-600 flex items-center justify-center text-white text-3xl font-bold">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ auth()->user()->name }}</h3>
                        <p class="text-gray-600 dark:text-gray-400">{{ auth()->user()->email }}</p>
                    </div>
                </div>
            </div>

            <!-- Profile Sections Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Profile Information -->
                <div class="bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg overflow-hidden">
                    <div class="p-6">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                </div>

                <!-- Update Password -->
                <div class="bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg overflow-hidden">
                    <div class="p-6">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>

                <!-- Delete Account -->
                <div class="md:col-span-2 bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg overflow-hidden">
                    <div class="p-6">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
