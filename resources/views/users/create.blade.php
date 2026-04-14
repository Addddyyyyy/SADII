@extends('layouts.master')
@section('title')
    User Management | Create
@endsection
@section('content')
<div class="xl:col-span-6 col-span-12">
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem] page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Create User</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary" href="{{ route('users.index') }}">
                            Users</a> </li>
                    <li class="text-[12px] mx-2">/</li>
                    <li class="text-[12px] text-gray-500">Create</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="box custom-box">
        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-input" value="{{ old('name') }}" required>
                        @error('name')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-input" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-input" required>
                        @error('password')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-input" required>
                    </div>
                    <div>
                        <label class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-input">
                        @error('photo')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label">Status</label>
                        <select name="status" class="form-input">
                            <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                        @error('status')
                            <p class="text-danger text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="box-footer border-t border-defaultborder flex justify-end gap-2">
                <a href="{{ route('users.index') }}" class="ti-btn ti-btn-cancel !py-2 !px-4">Cancel</a>
                <button type="submit" class="ti-btn ti-btn-primary !py-2 !px-4">Create User</button>
            </div>
        </form>
    </div>
</div>
@endsection
