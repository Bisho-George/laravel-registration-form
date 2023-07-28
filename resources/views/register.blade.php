@extends('master')
@section('form')
  <div class="container mt-3" id="form">
    @if (Session::has('success'))
      <div class="alert alert-success text-center">
        {{ Session::get('success') }}
      </div>
    @endif
    <form id="registration-form" onsubmit="return validateForm()" method="post" action="{{ route('validate.form') }}"
      novalidate>
      @csrf
      <div class="form-group mb-2">
        <label>{{ __('message.username') }}</label>
        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username">
        @error('username')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>



      <div class="form-group mb-2">
        <label>{{ __('message.fullname') }}</label>
        <input type="text" class="form-control @error('fullName') is-invalid @enderror" name="fullName" id="fullName">
        @error('fullName')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>





      <div class="form-group mb-2">
        <label>{{ __('message.birthdate') }}</label>
        <input type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate"
          id="birthdate">
        <button class="btn" type="button"
          onclick="getActor(birthdate.value)">{{ __('message.Get Actor Names') }}</button>
        <div>
          <h4>{{ __('message.Actor Names') }}: </h4>
          <ul id="actor-names"></ul>
        </div>


        @error('birthdate')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>


      <div class="form-group mb-2">
        <label>{{ __('message.phonenumber') }}</label>
        <input type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber"
          id="phonenumber">
        @error('phonenumber')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>


      <div class="form-group mb-2">
        <label>{{ __('message.address') }}</label>
        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address">
        @error('address')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>

      <div class="form-group mb-2">
        <label>{{ __('message.email') }}</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>

      <div class="form-group mb-2">
        <label>{{ __('message.password') }}</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
          id="password">
        @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group mb-2">
        <label>{{ __('message.confirmPassword') }}</label>
        <input type="password" class="form-control @error('confirmPassword') is-invalid @enderror" name="confirmPassword"
          id="confirmPassword">
        @error('confirmPassword')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="d-grid mt-3">
        <button type="submit" name="send" class="btn btn-dark btn-block">{{ __('message.Submit') }}</button>
      </div>
    </form>
  </div>

  <script src="{{ asset('js/API.js') }}"></script>
  <script src="{{ asset('js/ClientSide.blade.js') }}"></script>
@endsection
