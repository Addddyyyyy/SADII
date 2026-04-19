@extends('layouts.master')

@section('title')
    BHFinder - My Profile
@endsection

@section('content')
            <div class="main-content grid place-items-center min-h-screen">
                <!-- Page Header -->
                <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                  <div class="my-auto">
                    <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Profile</h5>
                    <nav>
                      <ol class="flex items-center whitespace-nowrap min-w-0">
                        <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            href="javascript:void(0);"> Pages <i
                              class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                          </a> </li>
                        <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                            href="javascript:void(0);">Profile 
                          </a> </li>
                      </ol>
                    </nav>
                  </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
                <div class="grid grid-cols-12 gap-x-6">
                    <div class="xxl:col-span-4 xl:col-span-12 col-span-12">
                        <div class="box overflow-hidden">
                            <div class="box-body !p-0">
                                <div class="sm:flex items-start !py-6 px-4 main-profile-cover">
                                    <div>
                                        <span class="avatar avatar-xxl avatar-rounded online me-4">
                                            <img src="{{ asset('backend/assets/images/bg_logo/emptyprofile.jpg') }}" alt="profile">
                                        </span>
                                    </div>
                                    <div class="flex-grow main-profile-info">
                                        <div class="flex items-center !justify-between">
                                            <h6 class="font-semibold mb-1 text-white text-[1rem]">John Doe</h6>
                                        </div>
                                        <p class="mb-1 !text-white  opacity-[0.7]">Landlord</p>
                                        <p class="text-[0.75rem] text-white mb-6 opacity-[0.5]">
                                            <span class="me-4 inline-flex"><i
                                                    class="ri-building-line me-1 align-middle"></i>Kabacan</span>
                                        </p>
                                        <div class="flex mb-0">
                                            <div class="me-6">
                                                <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">12</p>
                                                <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Total Rooms</p>
                                            </div>
                                            <div class="me-6">
                                                <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">2
                                                </p>
                                                <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Active Reservation</p>
                                            </div>
                                            <div class="me-6">
                                                <p class="font-bold text-[1.25rem] text-white text-shadow mb-0">3</p>
                                                <p class="mb-0 text-[.6875rem] opacity-[0.5] text-white">Messages</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6 border-b border-dashed dark:border-defaultborder/10">
                                    <div class="mb-6">
                                        <p class="text-[.9375rem] mb-2 font-semibold">Description :</p>
                                        <p class="text-[0.75rem] text-textmuted opacity-[0.7] mb-0 text-justify">
                                            I am <b class="!text-defaulttextcolor font-medium">John Doe,</b> a dedicated and approachable landlord committed to providing safe, comfortable, and well-maintained boarding spaces. 
                                            I take pride in ensuring that all tenants feel at home, with clean facilities and a peaceful environment suitable for students and working professionals alike.
                                            I am responsive to concerns and always willing to assist with maintenance requests or inquiries. 
                                            My goal is to create a friendly and respectful community where everyone can enjoy a convenient and secure living experience.
                                        </p>
                                    </div>
                                </div>
                                <div class="p-6 border-b border-dashed dark:border-defaultborder/10">
                                    <p class="text-[.9375rem] mb-2 me-6 font-semibold">Contact Information :</p>
                                    <div class="text-textmuted">
                                        <p class="mb-2">
                                            <span
                                                class="avatar avatar-sm avatar-rounded me-2 bg-light text-textmuted">
                                                <i
                                                    class="ri-mail-line align-middle text-[.875rem] text-textmuted"></i>
                                            </span>
                                            JohnDoe@gmail.com
                                        </p>
                                        <p class="mb-2">
                                            <span
                                                class="avatar avatar-sm avatar-rounded me-2 bg-light text-textmuted">
                                                <i
                                                    class="ri-phone-line align-middle text-[.875rem] text-textmuted"></i>
                                            </span>
                                            +63 917 123 4567
                                        </p>
                                        <p class="mb-0">
                                            <span
                                                class="avatar avatar-sm avatar-rounded me-2 bg-light text-textmuted">
                                                <i
                                                    class="ri-map-pin-line align-middle text-[.875rem] text-textmuted"></i>
                                            </span>
                                            Avenue Street, Kabacan, North Cotabato, Philippines
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="p-6 border-b dark:border-defaultborder/10 border-dashed sm:flex items-center">
                                    <p class="text-[.9375rem] mb-2 me-6 font-semibold">Social Networks :</p>
                                    <div class="btn-list mb-0 flex justify-center items-center">
                                        <button aria-label="button" type="button"
                                            class="ti-btn ti-btn-sm ti-btn-primary text-primary me-[.375rem] mb-1">
                                            <i class="ri-facebook-line font-semibold"></i>
                                        </button>
                                        <button aria-label="button" type="button"
                                            class="ti-btn ti-btn-sm ti-btn-secondary me-[.375rem] mb-1">
                                            <i class="ri-twitter-x-line"></i>
                                        </button>
                                        <button aria-label="button" type="button"
                                            class="ti-btn ti-btn-sm ti-btn-warning me-[.375rem] mb-1">
                                            <i class="ri-instagram-line font-semibold"></i>
                                        </button>
                                    </div>
                                </div>
@endsection