@extends('layouts.master')

@section('title')
    BoardNest - Dashboard
@endsection

@section('content')
<div class="main-content p-6 bg-[#f8f6f2] min-h-screen">
    
    <div class="mb-8">
        <h2 class="text-3xl font-bold text-[#1a202c]">Welcome back, Alex!</h2>
        <p class="text-gray-500 mt-1">Here's what's happening with your boarding house search.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <div class="bg-white p-6 rounded-2xl shadow-sm flex items-center space-x-4">
            <div class="w-14 h-14 bg-red-50 flex items-center justify-center rounded-xl">
                <i class="ti ti-bookmark text-red-500 text-2xl"></i>
            </div>
            <div>
                <h5 class="text-3xl font-bold text-gray-800">5</h5>
                <p class="text-gray-500 text-sm font-medium">Saved Listings</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm flex items-center space-x-4">
            <div class="w-14 h-14 bg-green-50 flex items-center justify-center rounded-xl">
                <i class="ti ti-calendar text-green-600 text-2xl"></i>
            </div>
            <div>
                <h5 class="text-3xl font-bold text-gray-800">2</h5>
                <p class="text-gray-500 text-sm font-medium">Active Reservations</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm flex items-center space-x-4">
            <div class="w-14 h-14 bg-orange-50 flex items-center justify-center rounded-xl">
                <i class="ti ti-message text-orange-400 text-2xl"></i>
            </div>
            <div>
                <h5 class="text-3xl font-bold text-gray-800">3</h5>
                <p class="text-gray-500 text-sm font-medium">Unread Messages</p>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-between mb-6 mt-10">
        <h3 class="text-xl font-bold text-[#1a202c]">Recommended for You</h3>
        <a href="#" class="text-orange-500 font-semibold hover:text-orange-600 flex items-center gap-1">
            See all <i class="ti ti-arrow-right"></i>
        </a>
    </div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full">
    
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 flex flex-col p-6 items-center text-center">
        <div class="mb-4">
             <span class="bg-gray-100 text-gray-500 px-3 py-1 rounded-full text-[10px] font-bold uppercase">Available</span>
        </div>
        <i class="ti ti-home-2 text-gray-300 text-8xl mb-4"></i>
        <h4 class="font-bold text-xl text-gray-900">Metro Living Spaces</h4>
        <p class="text-gray-400 text-sm">Manila</p>
        <div class="mt-4">
            <span class="text-gray-800 font-bold text-2xl">₱6,500</span>
            <span class="text-gray-400 text-sm">/mo</span>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 flex flex-col p-6 items-center text-center">
        <div class="mb-4">
             <span class="bg-gray-100 text-gray-500 px-3 py-1 rounded-full text-[10px] font-bold uppercase">Coming Soon</span>
        </div>
        <i class="ti ti-home-2 text-gray-300 text-8xl mb-4"></i>
        <h4 class="font-bold text-xl text-gray-900">Greenfield Residence</h4>
        <p class="text-gray-400 text-sm">Makati</p>
        <div class="mt-4">
            <span class="text-gray-800 font-bold text-2xl">₱8,500</span>
            <span class="text-gray-400 text-sm">/mo</span>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 flex flex-col p-6 items-center text-center">
        <div class="mb-4">
             <span class="bg-gray-100 text-gray-500 px-3 py-1 rounded-full text-[10px] font-bold uppercase">Available</span>
        </div>
        <i class="ti ti-home-2 text-gray-300 text-8xl mb-4"></i>
        <h4 class="font-bold text-xl text-gray-900">Sunrise Apartments</h4>
        <p class="text-gray-400 text-sm">Cebu</p>
        <div class="mt-4">
            <span class="text-gray-800 font-bold text-2xl">₱7,200</span>
            <span class="text-gray-400 text-sm">/mo</span>
        </div>
    </div>

     <div class="bg-white rounded-2xl shadow-sm border border-gray-100 flex flex-col p-6 items-center text-center">
        <div class="mb-4">
             <span class="bg-gray-100 text-gray-500 px-3 py-1 rounded-full text-[10px] font-bold uppercase">Available</span>
        </div>
        <i class="ti ti-home-2 text-gray-300 text-8xl mb-4"></i>
        <h4 class="font-bold text-xl text-gray-900">Metro Living Spaces</h4>
        <p class="text-gray-400 text-sm">Manila</p>
        <div class="mt-4">
            <span class="text-gray-800 font-bold text-2xl">₱6,500</span>
            <span class="text-gray-400 text-sm">/mo</span>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 flex flex-col p-6 items-center text-center">
        <div class="mb-4">
             <span class="bg-gray-100 text-gray-500 px-3 py-1 rounded-full text-[10px] font-bold uppercase">Coming Soon</span>
        </div>
        <i class="ti ti-home-2 text-gray-300 text-8xl mb-4"></i>
        <h4 class="font-bold text-xl text-gray-900">Greenfield Residence</h4>
        <p class="text-gray-400 text-sm">Makati</p>
        <div class="mt-4">
            <span class="text-gray-800 font-bold text-2xl">₱8,500</span>
            <span class="text-gray-400 text-sm">/mo</span>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 flex flex-col p-6 items-center text-center">
        <div class="mb-4">
             <span class="bg-gray-100 text-gray-500 px-3 py-1 rounded-full text-[10px] font-bold uppercase">Available</span>
        </div>
        <i class="ti ti-home-2 text-gray-300 text-8xl mb-4"></i>
        <h4 class="font-bold text-xl text-gray-900">Sunrise Apartments</h4>
        <p class="text-gray-400 text-sm">Cebu</p>
        <div class="mt-4">
            <span class="text-gray-800 font-bold text-2xl">₱7,200</span>
            <span class="text-gray-400 text-sm">/mo</span>
        </div>
    </div>

</div>   
@endsection