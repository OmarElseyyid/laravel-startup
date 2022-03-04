@extends('admin/layouts.log')
@section("content")

<div id="page-container" class="main-content-boxed">

    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo36@2x.jpg');">
            <div class="hero bg-black-75 overflow-hidden">
                <div class="hero-inner">
                    <div class="content content-full text-center">
                        <div class="mb-5 invisible" data-toggle="appear" data-class="animated fadeInDown">
                            <i class="fa fa-id-card fa-3x text-primary"></i>
                            <h2 class="h3 font-w400 text-white-50 invisible" data-toggle="appear" data-class="animated fadeInDown" data-timeout="300">
                                Oto İhale Sistemi
                            </h2>
                            <h4 class="text-white invisible" data-toggle="appear" data-class="animated fadeInDown">
                                Admin <span class="font-w300">panel</span>
                            </h4>
                        </div>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" style="color:red;" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" style="color:red;" :errors="$errors" />

                        <form method="POST" action="{{ route('admin.adminlogin') }}">
                            @csrf

                            <div class="row justify-content-center">
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label style="color:darkgray;" for="email">{{__('Email')}}</label>
                                        <input type="text" class="form-control form-control-alt" id="email" :value="old('email')" required autofocus name="email" placeholder="Enter your username..">
                                    </div>
                                    <div class="form-group">
                                        <label style="color:darkgray;" for="password">{{__('Password')}}</label>
                                        <input type="password" class="form-control form-control-alt" id="password" required autocomplete="current-password" name="password" placeholder="Enter your password..">
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <span class="m-2 text-white invisible" data-toggle="appear" data-class="animated fadeInUp" data-timeout="600">
                                    <x-button class="btn btn-sm btn-outline-primary px-4 py-2" data-toggle="click-ripple">
                                        {{ __('Log in') }}
                                    </x-button>
                   
                                </span>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

    </main>
    <!-- END Main Container -->
</div>

@endsection