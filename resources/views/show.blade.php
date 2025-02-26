<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="w-full h-96 bg-gray-200 dark:bg-gray-700 relative mb-6">
                    <img src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4" alt="{{ $event->titre }}" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <div class="mb-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 rounded-full text-sm">{{ $event->categorie }}</span>
                            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $event->date_heure }}</span>
                        </div>
                        <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-4">{{ $event->titre }}</h1>
                        <div class="flex items-center space-x-2 mb-4">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-gray-600 dark:text-gray-400">{{ $event->lieu }}</span>
                            <div class="flex items-center space-x-2">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span class="text-gray-700 dark:text-gray-300">
                                     {{$event->max_participants}}
                                </span>
                            </div>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 text-lg">{{ $event->description }}</p>
                    </div>

                 
                    <div class="mt-8 border-t border-gray-200 dark:border-gray-700 pt-8">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center space-x-2">
                                <h4>Place Restant : </h4>
                                <span class="text-gray-700 dark:text-gray-300">
                                {{ $event->max_participants - $event->rsvps()->count() }}
                                </span>
                            </div>
                            
                            @if(!$event->rsvps()->where('user_id', auth()->id())->exists() && $event->rsvps()->count() < $event->max_participants)
                                <form action="{{ route('rsvps.create', $event) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Reserve Place
                                    </button>
                                </form>
                            @elseif($event->rsvps()->where('user_id', auth()->id())->exists())
                                <span class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-green-700 bg-green-100">
                                    Already Reserved
                                </span>
                            @else
                                <span class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-red-700 bg-red-100">
                                    Event Full
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comments Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100 mb-6">Comments</h2>

                    
                    <form action="{{ route('comments.store', $event) }}" method="POST" class="mb-8">
                        @csrf
                        <div>
                            <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Add a comment</label>
                            <div class="mt-1">
                                <textarea rows="3" name="content" id="content" class="shadow-sm block w-full sm:text-sm border-gray-300 dark:border-gray-600 dark:bg-gray-700 rounded-md" placeholder="Share your thoughts..."></textarea>
                            </div>
                            @error('content')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Post Comment
                            </button>
                        </div>
                    </form>

            
                    <div class="space-y-6">
                        @foreach($comments as $comment)
                            <div class="flex space-x-4">
                                <div class="flex-1 bg-gray-50 dark:bg-gray-700 rounded-lg px-4 py-3">
                                    <div class="flex items-center justify-between mb-2">
                                        <div class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ $comment->user->name }}</div>
                                        <div class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</div>
                                    </div>
                                    <p class="text-gray-600 dark:text-gray-300">{{ $comment->contenu }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>