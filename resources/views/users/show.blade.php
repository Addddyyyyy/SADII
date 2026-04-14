@extends('layouts.master')
@section('title')
    User Management | Show
@endsection
@section('content')
<div class="xl:col-span-6 col-span-12">
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">{{ $user->name }}</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary" href="{{ route('users.index') }}">
                            Users</a> </li>
                    <li class="text-[12px] mx-2">/</li>
                    <li class="text-[12px] text-gray-500">{{ $user->name }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="box custom-box">
        <div class="box-body">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <span class="avatar avatar-lg online avatar-rounded">
                        <img src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('backend/assets/images/faces/13.jpg') }}" alt="img" class="object-cover h-full w-full">
                    </span>
                </div>
                <div>
                    <h5>{{ $user->name }}</h5>
                    <p>{{ $user->email }}</p>
                    <span class="badge {{ $user->status ? 'badge-success' : 'badge-danger' }}">{{ $user->status ? 'Active' : 'Inactive' }}</span>
                    <p>Registered: {{ $user->created_at->format('d M Y h:i A') }}</p>
                </div>
            </div>
        </div>
        <div class="box-footer border-t border-defaultborder flex justify-end gap-2">
            <a href="{{ route('users.edit', $user) }}" class="ti-btn ti-btn-info !py-2 !px-4">Edit</a>
            <a href="{{ route('users.index') }}" class="ti-btn ti-btn-secondary !py-2 !px-4">Back</a>
        </div>
    </div>
</div>
@endsection
