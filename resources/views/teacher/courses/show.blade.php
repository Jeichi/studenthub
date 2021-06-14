<x-teacher-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($course->name) }} <p class="font-light text-sm">{{ $course->type }}</p>
        </h2>
    </x-slot>

    <div class="py-12 d:p-0 pl-5 pr-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('teacher.courses.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                    Go Back
                </a>
            </div>

            <div class="grid grid-rows-3 grid-flow-col gap-4">
                <div class="row-span-3">
                    <div class="px-4 bg-white p-6 shadow hover:shadow-lg rounded-md">
                        <div class="bg-white">
                            <p class="text-xl font-bold text-center text-blue-600">{{ $course->name }}</p>
                            <p class="text-sm font-light text-center mb-6 text-blue-400">{{ $course->type }}</p>
                            <p class="text-sm font-light text-justify">This following course is designed in order to promote and innovate, creativity and group collaboration. In order for this to be achieved, the following text should display like the following..</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="px-4 bg-white p-6 shadow hover:shadow-lg rounded-md">
                        <div class="bg-white">
                            This a box, the box auto expands, and when it runs out of room it looks a bit like sand
                        </div>
                    </div>
                </div>
                <div class="row-span-2 col-span-2">
                    <div class="px-4 bg-white p-6 shadow hover:shadow-lg rounded-md">
                        <div class="bg-white">
                            This a box, the box auto expands, and when it runs out of room it looks a bit like sand
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-teacher-layout>
