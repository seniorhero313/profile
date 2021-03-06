@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">
            <form id="contact" action="{{route('skills.store')}}" method="post">
                <h3>فرم مهارت</h3>
                <h4>اطلاعات این فرم در صفحه ایندکس شما نمایش داده میشود</h4>
                {{csrf_field()}}

                <div class="form-group{{ $errors->has('type') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="نوع" type="text"
                               value="{{ Request::old('type') ?: ''}}" name="type" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('type'))
                        <span class="help-block">{{ $errors->first('type')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <fieldset>
                        <input placeholder="نام " type="text"
                               value="{{ Request::old('name') ?: ''}}" name="name" tabindex="1" required autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('point') ? ' has-error': ''}}">
                    <fieldset>
                        <p>امتیاز</p>
                        <select name="point" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </fieldset>
                    @if($errors->has('point'))
                        <span class="help-block">{{ $errors->first('point')}}</span>
                    @endif
                </div>

                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                </fieldset>

            </form>

        </div>
    </div>
@endsection
