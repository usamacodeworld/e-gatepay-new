@extends('frontend.layouts.user.index')
@section('title', __('Settings'))
@section('content')
    <style>
        .tab-pane.active {
            background: transparent !important;
        }

        .nav-link.flex-sm-fill.active {
            background: black !important;
            color: white !important;
            border-bottom: 2px solid #eb4a32 !important;
        }
    </style>
    <div class="single-form-card">
        <div class="card-main p-4">
            <div class="tab-area mb-3">
                <nav class="nav nav-tabs bg-sky-2 rounded flex-column flex-sm-row flex-wrap text-center text-sm-start"> <a
                        href="{{ route('user.settings.profile') }}"
                        class="nav-link flex-sm-fill {{ isActive('user.settings.profile') }}" aria-controls="profile"
                        aria-selected="true"> <i class="fas fa-user"></i> {{ __('Profile') }} </a>
                    <a href="{{ route('user.settings.2fa.setup') }}"
                        class="nav-link flex-sm-fill {{ isActive('user.settings.2fa.setup') }}" aria-controls="security"
                        aria-selected="false"> <i class="fas fa-shield-alt"></i> {{ __('2FA Security') }} </a> <a
                        href="{{ route('user.settings.password.change') }}"
                        class="nav-link flex-sm-fill {{ isActive('user.settings.password.change') }}"
                        aria-controls="password-change" aria-selected="false"> <i class="fas fa-lock"></i>
                        {{ __('Change Password') }} </a>
                </nav>
                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        @yield('user_setting_content') </div>
                </div>
            </div>
        </div>
    </div>
@endsection
