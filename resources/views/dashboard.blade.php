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
                    {{ __("You're logged in!") }}
                    <br>
                    <button style="background-color:rgb(84, 84, 214);padding:8px;border-radius:15px "><a href="blog" style="color: white"><b>goto-blog</b></a></button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
