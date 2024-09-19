@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-2xl font-bold">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror shadow-sm bg-gray-50 border text-gray-900 text-sm rounded-lg w-full p-2.5" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror shadow-sm bg-gray-50 border text-gray-900 text-sm rounded-lg w-full p-2.5" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password-confirm" class="block mb-2 text-sm font-medium text-gray-900">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control shadow-sm bg-gray-50 border text-gray-900 text-sm rounded-lg w-full p-2.5" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="mb-0">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center w-full">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
