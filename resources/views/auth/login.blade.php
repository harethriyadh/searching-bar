@extends('layouts.app')

@section('content')



<section class="u-align-center u-clearfix u-grey-10 u-section-1" id="sec-911b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-radius-10 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1"><span class="u-align-center u-file-icon u-icon u-icon-circle u-text-palette-1-base u-icon-1" data-animation-name="rotateIn" data-animation-duration="3000" data-animation-delay="0" data-animation-direction=""><img src="{{ asset('images/wertwert1.png') }}" alt=""></span>
            <h3 class="u-text u-text-default u-text-1">Dea</h3>
            <div class="u-form u-login-control u-form-1">
              <form action="{{ route('login') }}" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-35 u-form-vertical u-inner-form" source="custom" name="form-2" style="padding: 10px;">
                @csrf
                <div class="u-form-group u-form-name">
                  <label style="text-align: right ;" for="username-708d" class="u-custom-font u-form-control-hidden u-heading-font u-label"></label>
                  <input style="text-align: right ;" type="email" placeholder="ادخل الاميل الخاص بك" id="username-708d" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror u-grey-5  " id="email"  required autocomplete autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div  class="u-form-group u-form-password">
                  <label style="text-align: right ;" for="password-708d" class="u-custom-font u-form-control-hidden u-heading-font u-label"></label>
                  <input style="text-align: right ;" type="password" placeholder="ادخل الرقم السري" id="password-708d" name="password" class="form-control @error('password') is-invalid @enderror u-grey-5 u-input u-input-rectangle u-radius-10 u-input-2" id="password" type="password" class="" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div style="  margin: auto ; padding-left: 70% ; margin-bottom: 20px; " class=" ">
                    <input style="float: " type="checkbox" id="checkbox-708d remember" name="remember" value="On" {{ old('remember') ? 'checked' : '' }}>
                    <label  for="checkbox-708d" class="u-custom-font u-heading-font u-label">حفظ التسجيل</label>
                  
                  
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <a href="#" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-17 u-btn-1">تسجيل الدخول</a>
                  <input  type="submit" value="submit" class="u-form-control-hidden">
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
            @if (Route::has('password.request'))
            <a href="" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-login-control u-login-forgot-password u-none u-text-palette-1-base u-btn-2">نسيت الرقم السري؟</a>
            @endif
          </div>
        </div>
      </div>
    </section>
@endsection
