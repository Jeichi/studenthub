<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="px-4 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                            <h1 class="text-xl font-extrabold">Welcome to StudentHUB</h1>
                            <h4 class="text-sm font-light">A prototype Virtual Learning Environment (VLE), created by s0285157</h4>

                            <ul class="mt-5">
                                <li>You can view the project GitHub: <a href="https://github.com/Jeichi/studenthub">here</a>.</li>
                                <li>You can view the proof-of-concept: <a href="https://github.com/Jeichi/studenthub">here</a>.</li>
                            </ul>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</x-app-layout>
