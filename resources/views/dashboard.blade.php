@extends('layouts.admin')

@section('content')
{{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
</h2>
</x-slot> --}}

<div class="py-12">
    <div class="mx-auto px-4 xl:px-0">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="text-gray-900">
                <h1 class="text-2xl font-semibold">Dashboard</h1>
                <div class="flex flex-col md:flex-row">

                    <div class="bg-white border border-slate-300 rounded-2xl p-6 flex items-center grow my-3 mr-0 md:mr-3 basis-1/3">
                        <div class="mr-3 text-xl bg-primary-600 px-4 py-3 rounded-2xl text-white">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="flex flex-col ml-2">
                            <span class="font-semibold text-xl text-zinc-800">43</span>
                            <span class="font-light">Number of visitors</span>
                        </div>
                    </div>
                    <div class="bg-white border border-slate-300 rounded-2xl p-6 flex items-center grow my-3 mx-0 md:mx-3 basis-1/3">
                        <div class="mr-3 text-xl bg-primary-600 px-4 py-3 rounded-2xl text-white">
                            <i class="fa-solid fa-user-group"></i>
                        </div>
                        <div class="flex flex-col ml-2">
                            <span class="font-semibold text-xl text-zinc-800">567</span>
                            <span class="font-light">All time Visitors</span>
                        </div>
                    </div>
                    <div class="bg-white border border-slate-300 rounded-2xl p-6 flex items-center grow my-3 ml-0 md:ml-3 basis-1/3">
                        <div class="mr-3 text-xl bg-primary-600 px-4 py-3 rounded-2xl text-white">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="flex flex-col ml-2">
                            <span class="font-semibold text-xl text-zinc-800">7</span>
                            <span class="font-light">Number of appointments</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection