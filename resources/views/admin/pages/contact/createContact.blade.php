@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            {{--@include('admin.layouts.errors')--}}

            <form id="contact" action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
                <h3>فرم راه های ارتباطی</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>
                {{csrf_field()}}

                <div class="form-group{{ $errors->has('email') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="ایمیل" id="email"
                               value="{{ Request::old('email') ?: ''}}" class="form-control" type="text" name="email" tabindex="1"
                               autofocus>
                    </fieldset>
                    @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('phone_number') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="شماره تلفن" value="{{ Request::old('phone_number') ?: ''}}" type="text" name="phone_number" tabindex="1" autofocus>
                    </fieldset>
                    @if($errors->has('phone_number'))
                        <span class="help-block">{{ $errors->first('phone_number')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('mobile') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="تلفن همراه" type="text" name="mobile"
                               value="{{ Request::old('mobile') ?: ''}}" tabindex="1" autofocus>
                    </fieldset>
                    @if($errors->has('mobile'))
                        <span class="help-block">{{ $errors->first('mobile')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('office_number') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="تلفن دفتر" type="text"
                               value="{{ Request::old('office_number') ?: ''}}" name="office_number" tabindex="1" autofocus>
                    </fieldset>
                    @if($errors->has('office_number'))
                        <span class="help-block">{{ $errors->first('office_number')}}</span>
                    @endif
                </div>


                <div class="form-group{{ $errors->has('qr_code') ? ' has-error': ''}}">
                    <fieldset>
                        <button id="upfile1">کد QR</button>
                        <input type="file" id="file1" name="qr_code"
                               value="{{ Request::old('qr_code') ?: ''}}" style="display:none"/>
                    </fieldset>
                    @if($errors->has('qr_code'))
                        <span class="help-block">{{ $errors->first('qr_code')}}</span>
                    @endif
                </div>

                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                </fieldset>

            </form>

        </div>
    </div>
@endsection
