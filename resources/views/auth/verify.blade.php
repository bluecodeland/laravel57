@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('تایید ایمیل') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('یک کد فعال سازی جدید به ایمیل شما ارسال شد. ') }}
                        </div>
                    @endif

                    {{ __('برای دسترسی به صفحه کاربری خود باید ابتدا ایمیل خود را تایید کنید. برای این کار به ایمیل خود وارد شوید') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
