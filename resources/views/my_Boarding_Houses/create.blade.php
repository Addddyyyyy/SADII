@extends('layouts.master')
@section('title')
    Boarding Hub - Add Boarding House
@endsection
@section('content')
<div class="main-content">
    <!-- Page Header -->
    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
        <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Add Boarding House</h5>
            <nav>
                <ol class="flex items-center whitespace-nowrap min-w-0">
                    <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> My Boarding House <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                        </a> </li>
                        <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);"> Add Boarding House
                            </a> </li>
                </ol>
            </nav>
        </div>        
    </div>
    <!-- Page Header Close -->
    <div class="grid grid-cols-12 gap-6 text-defaultsize">
        <div class="xl:col-span-12 col-span-12">
            <div class="box">
                <div class="box-header flex justify-between">
                    <div class="box-title">
                        
                    </div>
                </div>
                @if ($errors->any())
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="grid grid-cols-12 sm:gap-6">
                            <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <label for="fullname" class="form-label !font-normal">Name *</label>
                                <input type="text" class="form-control" id="fullname" name="fullname"
                                    value="{{ old('fullname') }}" required>
                            </div>
                            <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <label for="text-area" class="form-label">Description</label>
                                <textarea class="form-control " id="text-area" rows="1"></textarea>
                            </div>
                            <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <label for="input-label" class="form-label !font-normal">Location *</label>
                                <input type="text" class="form-control " id="input">
                            </div>

                            <div class="col-span-12 lg:col-span-6 xl:col-span-3">
                                <label for="input-label" class="form-label !font-normal">Price per month *</label>
                                <div class="box !shadow-none">
                                    <!-- Input Number -->
                                    <div class="bg-white border border-gray-200 rounded-sm dark:bg-bodybg dark:border-white/10"
                                        data-hs-input-number>
                                        <div class="w-full flex justify-between items-center gap-x-1 overflow-hidden">
                                            <div class="grow py-2 px-3">
                                                <input
                                                    class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 dark:text-white"
                                                    type="text" value="1" data-hs-input-number-input>
                                            </div>
                                            <div
                                                class="flex flex-col -gap-y-px divide-y divide-gray-200 border-s border-gray-200 dark:divide-white/10 dark:border-white/10">
                                                <button type="button"
                                                    class="size-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-se-lg bg-gray-50 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:text-white dark:hover:bg-bodybg/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                    data-hs-input-number-decrement>
                                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M5 12h14" />
                                                    </svg>
                                                </button>
                                                <button type="button"
                                                    class="size-7 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-lg bg-gray-50 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:text-white dark:hover:bg-bodybg/70 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10"
                                                    data-hs-input-number-increment>
                                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="M5 12h14" />
                                                        <path d="M12 5v14" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Input Number -->
                                </div>
                            </div>
                            <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box !shadow-none">
                                    <div class="box-body">
                                        <label for="input-label" class="form-label !font-normal">Amenities</label>
                                        <select class="ti-form-select rounded-sm !py-2 !px-3" data-trigger
                                            name="choices-multiple-default" id="choices-multiple-default" multiple>
                                            <option value="Choice 1" selected>WiFi</option>
                                            <option value="Choice 2">Common Area</option>
                                            <option value="Choice 3">AC</option>
                                            <option value="Choice 4">Study Room</option>
                                            <option value="Choice 5">Laundry</option>
                                            <option value="Choice 6">Parking</option>
                                            <option value="Choice 7" disabled>Kitchen</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="xl:col-span-4 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                <div class="box !shadow-none">
                                    <div class="box-header">
                                        <h5 class="box-title">Upload Picture</h5>
                                    </div>
                                    <div class="box-body">
                                        <div data-single="true" action="https://httpbin.org/post" class="dropzone"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer border-t-0">
                        <div class="flex justify-end">
                            <button type="submit" class="ti-btn ti-btn-primary">
                                Add Boarding House
                            </button>
                        </div>
                    </div>
                </form>
                <div class="grid grid-cols-12 gap-x-6">

                </div>
            </div>
        </div>
    </div>
</div>



@endsection