<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Accueil') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Filters Section -->
            <div class="mb-6 grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="relative">
                    <select class="block appearance-none w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md py-2 px-3 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">{{ __('All Categories') }}</option>
                        <option value="sport">{{ __('Sport') }}</option>
                        <option value="music">{{ __('Music') }}</option>
                        <option value="education">{{ __('Education') }}</option>
                        <option value="technology">{{ __('Technology') }}</option>
                    </select>
                </div>
                <div class="relative">
                    <input type="date" class="block w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md py-2 px-3 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="relative">
                    <input type="text" placeholder="{{ __('Location') }}" class="block w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-md py-2 px-3 leading-tight focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="relative">
                    <button class="w-full bg-gray-100 dark:bg-gray-600 text-gray-800 dark:text-gray-200 py-2 px-4 rounded-md hover:bg-gray-200 dark:hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500">
                        {{ __('Filter') }}
                    </button>
                </div>
            </div>

            <!-- Events Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Event Card 1 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                    <div class="h-48 bg-gray-300 dark:bg-gray-700">
                        <img src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4" alt="Event" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 rounded-full text-sm">Sport</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">March 1, 2025</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-2">Football Tournament</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-2">Join us for an exciting football tournament with teams from all around the city.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="text-sm text-gray-500 dark:text-gray-400">City Stadium</span>
                            </div>
                            <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 font-medium text-sm">View Details →</a>
                        </div>
                    </div>
                </div>

                <!-- Event Card 2 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                    <div class="h-48 bg-gray-300 dark:bg-gray-700">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819" alt="Event" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="px-3 py-1 bg-pink-100 dark:bg-pink-900 text-pink-800 dark:text-pink-200 rounded-full text-sm">Music</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">March 5, 2025</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-2">Jazz Night</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-2">Experience an unforgettable evening of jazz music with local and international artists.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Music Hall</span>
                            </div>
                            <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 font-medium text-sm">View Details →</a>
                        </div>
                    </div>
                </div>

                <!-- Event Card 3 -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                    <div class="h-48 bg-gray-300 dark:bg-gray-700">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655" alt="Event" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="px-3 py-1 bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 rounded-full text-sm">Education</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">March 10, 2025</span>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-2">Web Development Workshop</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-2">Learn the latest web development technologies in this hands-on workshop.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Tech Hub</span>
                            </div>
                            <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 font-medium text-sm">View Details →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-8 flex justify-center">
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <span class="sr-only">Previous</span>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">1</a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-indigo-50 dark:bg-indigo-900 text-sm font-medium text-indigo-600 dark:text-indigo-200">2</a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">3</a>
                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <span class="sr-only">Next</span>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</x-app-layout>
