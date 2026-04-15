<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Welcome, {{ Auth::user()->name }}!</h3>
                    
                    <div class="mb-4">
                        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                        <p><strong>Role:</strong> 
                            <span class="px-2 py-1 rounded text-white {{ Auth::user()->role === 'admin' ? 'bg-red-500' : 'bg-blue-500' }}">
                                {{ Auth::user()->role }}
                            </span>
                        </p>
                    </div>

                    <div class="mt-6 p-4 bg-gray-50 rounded-lg">
                        <h4 class="font-semibold mb-2">Informasi:</h4>
                        @if(Auth::user()->role === 'admin')
                            <p class="text-green-600">✅ Anda login sebagai <strong>Administrator</strong> dengan akses penuh.</p>
                        @else
                            <p class="text-blue-600">✅ Anda login sebagai <strong>User biasa</strong>.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>