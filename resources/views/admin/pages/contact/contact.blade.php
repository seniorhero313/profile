@extends('admin.layouts.master')

@inject('translate',\App\Http\Controllers\ContactController)

@section('content')


    <div class="content-wrapper clearfix">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>تماس</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{route('admin')}}">خانه</a>
                    </li>
                    <li class="active">
                        <strong>تماس</strong>
                    </li>
                </ol>
            </div>
        </div>

        <div style="margin-top: 20px;" class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">افزودن</div>
                @if(count($contacts) == 0)
                    <div class="panel-body">
                        <form id="contact" action="{{route('contact.store')}}" enctype="multipart/form-data" method="post">
                            {{csrf_field()}}
                            <div class="form-group{{ $errors->has('email') ? ' has-error': ''}}">
                                <div class="col-sm-10 col-md-12">
                                    <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text" placeholder="ایمیل"
                                           value="{{ Request::old('email') ?: ''}}" class="form-control m-b"
                                           name="email"
                                           tabindex="1" required autofocus>
                                    @if($errors->has('email'))
                                        <span class="help-block">{{ $errors->first('email')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('phone_number') ? ' has-error': ''}}">
                                <div class="col-sm-10 col-md-12">
                                    <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text" placeholder="موبایل"
                                           value="{{ Request::old('phone_number') ?: ''}}" class="form-control m-b"
                                           name="phone_number"
                                           tabindex="1" required autofocus>
                                    @if($errors->has('phone_number'))
                                        <span class="help-block">{{ $errors->first('phone_number')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('mobile') ? ' has-error': ''}}">
                                <div class="col-sm-10 col-md-12">
                                    <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text" placeholder="تلفن"
                                           value="{{ Request::old('mobile') ?: ''}}" class="form-control m-b"
                                           name="mobile"
                                           tabindex="1" required autofocus>
                                    @if($errors->has('mobile'))
                                        <span class="help-block">{{ $errors->first('mobile')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('office_number') ? ' has-error': ''}}">
                                <div class="col-sm-10 col-md-12">
                                    <input oninvalid="return chek(this)" oninput="return chek2(this)" type="text" placeholder="تلفن دفتر"
                                           value="{{ Request::old('office_number') ?: ''}}" class="form-control m-b"
                                           name="office_number"
                                           tabindex="1" required autofocus>
                                    @if($errors->has('office_number'))
                                        <span class="help-block">{{ $errors->first('office_number')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ibox float-e-margins img-cir2">
                                        <div class="form-group{{ $errors->has('qr_code') ? ' has-error': ''}}">
                                            <div style="width: 280px; margin-right: 15px;" class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput">
                                                    <p class="fileinput-exists" style="color: #2aca76;">بارگذاری شد</p>
                                                </div>
                                                <span style="border: 1px solid #e5e6e7;" class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">بارگذاری</span>
                                                    <span class="fileinput-exists">عوض کردن</span>
                                                    <input type="file"
                                                           value="{{ Request::old('qr_code') ?: ''}}" name="qr_code">
                                                </span>
                                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">پاک کردن</a>
                                            </div>
                                            <p style="font-size: 12px; margin-left: 15px;" class="pull-right colorpicker">۱۰۰ * ۱۰۰</p>
                                            <a style="color: #000;" href="https://app.qr-code-generator.com/" target="_blank">
                                                <i style="font-size: 25px; color: #ffd93e; margin-right: 15px;" class="fa fa-qrcode">
                                                </i> <p style="position: relative; top: -26px; right: 50px;">qr code خود را انتخاب کنید</p></a>
                                            @if($errors->has('qr_code'))
                                                <span class="help-block">{{ $errors->first('qr_code')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button style="font-family: webmdesign;" class="btn btn-primary col-md-4" name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
                        </form>
                    </div>
        @endif
        @if(count($contacts) == 1)
            @foreach($contacts as $contact)
                <div class="panel-body">
                    <form id="contact" action="{{route('contact.update',$contact->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        {{ method_field('PUT') }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error': ''}}">
                            <div class="col-sm-10 col-md-12">
                                <input type="text" placeholder="ایمیل" value="{{$contact->email}}" class="form-control m-b" name="email" tabindex="1" required autofocus>
                                @if($errors->has('email'))
                                    <span class="help-block">{{ $errors->first('email')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error': ''}}">
                            <div class="col-sm-10 col-md-12">
                                <label>موبایل</label>
                                <input type="text" placeholder="موبایل" value="{{$contact->phone_number}}" class="form-control m-b" name="phone_number" tabindex="1" required autofocus>
                                @if($errors->has('phone_number'))
                                    <span class="help-block">{{ $errors->first('phone_number')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('mobile') ? ' has-error': ''}}">
                            <div class="col-sm-10 col-md-12">
                                <label>تلفن</label>
                                <input type="text" placeholder="تلفن" value="{{$contact->mobile}}" class="form-control m-b" name="mobile" tabindex="1" required autofocus>
                                @if($errors->has('mobile'))
                                    <span class="help-block">{{ $errors->first('mobile')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('office_number') ? ' has-error': ''}}">
                            <div class="col-sm-10 col-md-12">
                                <label>تلفن دفتر</label>
                                <input type="text" placeholder="تلفن دفتر" value="{{$contact->office_number}}" class="form-control m-b" name="office_number" tabindex="1" required autofocus>
                                @if($errors->has('office_number'))
                                    <span class="help-block">{{ $errors->first('office_number')}}</span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins img-cir2">
                                    <div class="form-group{{ $errors->has('qr_code') ? ' has-error': ''}}">
                                        <div style="width: 280px; margin-right: 15px;" class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput">
                                                <p class="fileinput-exists" style="color: #2aca76;">بارگذاری شد</p>
                                            </div>
                                            <span style="border: 1px solid #e5e6e7;" class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">بارگذاری</span>
                                                    <span class="fileinput-exists">عوض کردن</span>
                                                    <input type="file" value="{{$contact->qr_code}}" name="qr_code">
                                                </span>
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">پاک کردن</a>
                                        </div>
                                        <p style="font-size: 12px; margin-left: 15px;" class="pull-right colorpicker">۱۰۰ * ۱۰۰</p>
                                        @if(isset($contact->qr_code))
                                            <img class="qr-mg" style="margin-right: 20px;" width="50" height="50" src="{{asset($contact->qr_code)}}">
                                        @else
                                            <h4 class="hde" style="width: 200px;">شما عکسی بارگذاری نکرده اید</h4>
                                        @endif
                                        @if($errors->has('qr_code'))
                                                <span class="help-block">{{ $errors->first('qr_code')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button style="font-family: webmdesign;" class="btn btn-primary col-md-4" name="submit" type="submit" id="contact-submit" data-submit="...Sending">اصلاح</button>
                    </form>
                    <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" class="frm">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <span class="text-center"><button style="width: 30px; height: 33px; position: relative; top: 1px; right: 5px;" class="btn btn-danger"><i style="margin-right: -4px; position: relative; top: px;" class="fa fa-trash" aria-hidden="true"></i></button></span>
                    </form>
                </div>
            @endforeach
        @endif
            </div>
        </div>
        @foreach($contacts as $contact)
            <div style="margin-top: 20px; direction: ltr !important;" class="col-lg-6">
                <div class="contact-box">
                        <div class="col-md-9">
                            <h3><strong>{{$contact->email}}</strong></h3>
                            <p>{{$translate::toPersianNum($contact->phone_number)}}</p>
                            <p>{{$translate::toPersianNum($contact->mobile)}}</p>
                            <p>{{$translate::toPersianNum($contact->office_number)}}</p>
                        </div>
                <div class="col-md-3">
                    @if(empty($contact->qr_code))
                        <img  alt="image" width="100px;" height="100px;" class="m-t-xs" src="/images/front/Cotint.png">
                        @else
                        <img  alt="تصویر تماس" width="100px;" height="100px;" class="m-t-xs" src="{{asset($contact->qr_code)}}">
                        @endif
                </div>
                    <div class="clearfix"></div>
            </div>
            </div>
        @endforeach
    </div>
    @include('admin.layouts.success')
    @include('admin.layouts.errors')
@endsection
