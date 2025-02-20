  <x-guest-layout>
  <div class="min-h-screen flex flex-col sm:flex-row">
        <!-- Hero Section -->
        <div class="hidden sm:flex sm:w-1/2 bg-gradient-to-br from-indigo-600 to-purple-600 p-12 text-white justify-center items-center">
            <div class="max-w-md">
                <h1 class="text-4xl font-bold mb-6">YouCommunity</h1>
                <p class="text-xl mb-8">Découvrez et participez à des événements locaux qui vous passionnent. Rejoignez une communauté dynamique près de chez vous.</p>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Trouvez des événements près de chez vous</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <span>Rencontrez de nouvelles personnes</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span>Créez vos propres événements</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Login Form Section -->
        <div class="sm:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md space-y-8">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900 dark:text-gray-100">Bienvenue</h2>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Connectez-vous pour accéder à votre espace communautaire</p>
                </div>

                <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-6">
                    @csrf

                    <!-- Email Address -->
                    <div class="rounded-md shadow-sm -space-y-px">
                        <div>
                            <x-input-label for="email" :value="__('Adresse e-mail')" class="sr-only" />
                            <x-text-input id="email" 
                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 placeholder-gray-500 text-gray-900 dark:text-gray-100 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                type="email"
                                name="email"
                                placeholder="Adresse e-mail"
                                :value="old('email')"
                                required
                                autofocus
                                autocomplete="username" />
                        </div>
                        <div>
                            <x-input-label for="password" :value="__('Mot de passe')" class="sr-only" />
                            <x-text-input id="password"
                                class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 dark:border-gray-700 placeholder-gray-500 text-gray-900 dark:text-gray-100 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                type="password"
                                name="password"
                                placeholder="Mot de passe"
                                required
                                autocomplete="current-password" />
                        </div>
                    </div>

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900 dark:text-gray-100">
                                {{ __('Se souvenir de moi') }}
                            </label>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-sm">
                                <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300">
                                    {{ __('Mot de passe oublié ?') }}
                                </a>
                            </div>
                        @endif
                    </div>

                    <div>
                        <x-primary-button class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            {{ __('Se connecter') }}
                        </x-primary-button>
                    </div>

                    @if (Route::has('register'))
                        <p class="mt-2 text-center text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Pas encore de compte ?') }}
                            <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300">
                                {{ __('Inscrivez-vous') }}
                            </a>
                        </p>
                    @endif
                </form>
            </div>
        </div>
    </div>
    </x-guest-layout>