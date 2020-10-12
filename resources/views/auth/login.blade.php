@extends('layouts.app')

@section('content')
<div class="d-flex flex-wrap align-items-stretch">
   <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
      
      <div class="p-4 m-3">
         <img src="{{asset('assets/img/stisla-fill.svg')}}" 
            alt="logo" 
            width="80" 
            class="shadow-light rounded-circle mb-5 mt-2">

         <h4 class="text-dark font-weight-normal">
            Welcome to 
            <span class="font-weight-bold">
               Stisla
            </span>
         </h4>

         <p class="text-muted">
            Before you get started, you must login or register if you don't already have an account.
         </p>
         {{-- Form Login --}}
         <form method="POST" 
            action="{{ route('login') }}" 
            class="needs-validation" 
            novalidate="">
            @csrf

            {{-- Input Email --}}
            <div class="form-group">
               <label for="email">Email</label>
               <input id="email" 
                  type="email" 
                  class="form-control @error('email') is-invalid @enderror" 
                  name="email" 
                  tabindex="1" 
                  value="{{ old('email') }}" 
                  autocomplete="email" 
                  required
                  autofocus>
                  
                  @error('email')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror

               <div class="invalid-feedback">
                  Please fill in your email
               </div>
            </div>

            {{-- Input Password --}}
            <div class="form-group">
               <div class="d-block">
                  <label for="password" 
                     class="control-label">
                     Password
                  </label>
               </div>

               <input id="password" 
                  name="password"
                  type="password" 
                  class="form-control @error('password') is-invalid @enderror"  
                  tabindex="2"  
                  autocomplete="current-password"
                  required>

                  @error('password')
                     <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                     </span>
                  @enderror

               <div class="invalid-feedback">
                  please fill in your password
               </div>
            </div>

            {{-- Chechbox Remember Me --}}
            <div class="form-group">
               <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" 
                     tabindex="3"  
                     type="checkbox" 
                     name="remember" 
                     id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="custom-control-label" 
                     for="remember-me">
                     Remember Me
                  </label>
               </div>
            </div>

            {{-- Forgot Password dan Button Login --}}
            <div class="form-group text-right">
               @if (Route::has('password.request'))
                  <a class="v" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                  </a>
               @endif
               <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
               </button>
            </div>
         </form>

         <div class="text-center mt-5 text-small">
            Copyright &copy; urunproteksi.com. <br />
            Made with Laravel 7  and template by Stisla
            {{-- <div class="mt-2">
               <a href="#">Privacy Policy</a>
               <div class="bullet"></div>
               <a href="#">Terms of Service</a>
            </div> --}}
         </div>
      </div>
   </div>
   <div class="col-lg-8 col-12  " 
      {{-- data-background="{{asset('assets/img/unsplash/login.jpg')}}" --}}
      
      >
      <img src="{{asset('assets/img/unsplash/login.jpg')}}" alt=""  height="675px"  class="w-100">
      <div class="absolute-bottom-left index-2">
         <div class="text-light p-5 pb-2">
            <div class="mb-5 pb-3">

               <h1 class="mb-2 display-4 font-weight-bold">
                  Good Morning
               </h1>
               
               <h5 class="font-weight-normal text-muted-transparent">
                  Bali, Indonesia
               </h5>

            </div>
            Photo by 
            <a class="text-light bb" 
               target="_blank" 
               href="https://unsplash.com/photos/a8lTjWJJgLA">
               Justin Kauffman
            </a> on 
            <a class="text-light bb" 
               target="_blank" 
               href="https://unsplash.com">
               Unsplash
            </a>
         </div>
      </div>
   </div>
</div>
@endsection
