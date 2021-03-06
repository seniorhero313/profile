<!-- form-->
@inject('translate',\App\Http\Controllers\ContactController)
<main id="about7">
    <section id="scrollcontact" class="pull-left col-xs-12 col-sm-6 col-md-6 contact1">
        <h2>ارتباط با من</h2>
        <form action="{{route('saveMessage')}}" method="post">
            {{csrf_field()}}
            <section class="content bgcolor-1">
                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
            <span class="input input--nao">
      <input on invalid="return chek(this)" oninput="return chek2(this)" class="input__field input__field--nao name-field" required name="name"
             value="{{ Request::old('name') ?: ''}}" type="text" id="input-1"/>
      <label class="input__label input__label--nao" for="input-1">
          <span class="input__label-content input__label-content--nao">نام</span>
      </label>
      <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
      </svg>
      </span>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error': ''}}">
                <span class="input input--nao">
      <input oninvalid="return chek(this)" oninput="return chek2(this)" class="input__field input__field--nao email-field" required name="email"
             value="{{ Request::old('email') ?: ''}}" type="text" id="input-2"/>
      <label class="input__label input__label--nao" for="input-2">
          <span class="input__label-content input__label-content--nao">ایمیل</span>
      </label>
      <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
      </svg>
      </span>
                </div>

                <div class="form-group{{ $errors->has('message') ? ' has-error': ''}}">
                    <span class="input input--nao">
      <input oninvalid="return chek(this)" oninput="return chek2(this)" class="input__field input__field--nao message-field" required name="message"
             value="{{ Request::old('message') ?: ''}}" type="text" id="input-3"/>
      <label class="input__label input__label--nao" for="input-3">
          <span class="input__label-content input__label-content--nao">پیام</span>
      </label>
      <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
        <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
      </svg>
      </span>
                </div>
                <meta class="token" name="_token" content="{!! csrf_token() !!}" />
                <button id="message-form" class="btn btn-form">ارسال</button>
            </section>
        </form>
    </section>
        <section class="pull-right col-xs-12 col-sm-6 col-md-6 contact2">
            @if(!$contacts->isEmpty())
            @foreach($contacts as $contact)
            <div class="web"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                <p class="text-for"> ایمیل</p>
                <a href="{{$contact->email}}"><p class="text-for2">
                    @if(!empty($contact->email))
                    {{$contact->email}}
                    @else
                        info@cotint.com
                    @endif
                    </p></a>
            </div>
            <div class="web"><i class="fa fa-phone" aria-hidden="true"></i>
                <p class="text-for"> تلفن دفتر</p>
                <p class="text-for2">
                @if(!empty($contact->office_number))
                    {{$translate::toPersianNum($contact->office_number)}}
                @else
                    ۰۲۱-۲۲۰۳۵۹۷۶
                 @endif
                </p>
            </div>
                    <div class="web"><i class="fa fa-tty" aria-hidden="true"></i>
                        <p class="text-for">تلفن </p>
                        <p class="text-for2">
                            @if(!empty($contact->$contact->mobile))
                                {{$translate::toPersianNum($contact->phone_number)}}
                            @else
                                ۰۲۱-۶۶۵۶۴۶۱۲
                            @endif
                        </p>
                    </div>
            <div class="web"><i style="font-size: 30px; margin-top: 3px; margin-right: 12px;" class="fa fa-mobile" aria-hidden="true"></i>
                <p class="text-for"> تلفن همراه</p>
                <p class="text-for2">
                @if(!empty($phone_number))
                        {{$translate::toPersianNum($contact->mobile)}}
                @else
                   ۰۹۱۲۲۱۰۵۲۷۱
                @endif
                </p>
            </div>
                @endforeach
            @else

                        <div class="web"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <p class="text-for"> ایمیل</p>

                            <a href="info@cotint.com"><p class="text-for2">
                                    info@cotint.com
                                </p></a>
                        </div>
                        <div class="web"><i class="fa fa-phone" aria-hidden="true"></i>
                            <p class="text-for"> تلفن دفتر</p>
                            <p class="text-for2">

                                    ۰۲۱-۲۲۰۳۵۹۷۶

                            </p>
                        </div>

                <div class="web"><i class="fa fa-tty" aria-hidden="true"></i>
                    <p class="text-for">تلفن </p>
                    <p class="text-for2">

                        ۰۲۱-۶۶۵۶۴۶۱۲

                    </p>
                </div>


                        <div class="web"><i style="font-size: 30px; margin-top: 3px; margin-right: 12px;" class="fa fa-mobile" aria-hidden="true"></i>
                            <p class="text-for"> تلفن همراه</p>
                            <p class="text-for2">

                                    ۰۹۱۲۲۱۰۵۲۷۱

                            </p>
                        </div>

                @endif



            <div class="texti">
                @foreach($socialNetworks as $socialNetwork)
                    @if(!empty($socialNetwork->google_plus))
                    <a href="{{$socialNetwork->google_plus}}" target="_blank">
                        <i id="social-fo1" class="fa fa-google-plus"
                           aria-hidden="true"></i>
                    </a>
                    @endif
                        @if(!empty($socialNetwork->twitter))
                    <a href="{{$socialNetwork->twitter}}" target="_blank"><i id="social-fo2" class="fa fa-twitter"
                                                             aria-hidden="true"></i>
                    </a>
                     @endif
                        @if(!empty($socialNetwork->facebook))
                    <a href="{{$socialNetwork->facebook}}" target="_blank"><i id="social-fo3" class="fa fa-facebook"
                                                              aria-hidden="true"></i></a>
                        @endif
                        @if(!empty($socialNetwork->site))
                    <a href="{{$socialNetwork->site}}" target="_blank"><i id="social-fo4" class="fa fa-globe" aria-hidden="true"></i>
                        @endif
                        @if(!empty($socialNetwork->skype))
                    <a href="{{$socialNetwork->skype}}" target="_blank"><i id="social-fo5" class="fa fa-skype"
                                                          aria-hidden="true"></i></a>
                        @endif
                        @if(!empty($socialNetwork->telegram))
                    <a href="{{$socialNetwork->telegram}}" target="_blank"><i id="social-fo6" class="fa fa-paper-plane"
                                                           aria-hidden="true"></i></a>
                        @endif
                        @if(!empty($socialNetwork->linkedin))
                    <a href="{{$socialNetwork->linkedin}}" target="_blank"><i id="social-fo7" class="fa fa-linkedin"
                                                           aria-hidden="true"></i></a>
                        @endif
                        @if(!empty($socialNetwork->instagram))
                    <a href="{{$socialNetwork->instagram}}" target="_blank"><i id="social-fo8" class="fa fa-instagram"
                                                           aria-hidden="true"></i></a>
                        @endif
                @endforeach

            </div>

                @if(!$contacts->isEmpty())
            @foreach($contacts as $contact)
            <div class="pull-left">
                @if (!empty($contact->qr_code))
                    <img class="img-qr hidden-xs" src="{{$contact->qr_code}}" alt="{{$contact->qr_code}}"
                         width="130px">
                  @else
                    <img class="img-qr hidden-xs" src="images/front/Cotint.png" alt=""
                         width="130px">
                @endif
            </div>
            @endforeach
                 @else
                    <div class="pull-left">
                    <img class="img-qr hidden-xs" src="images/front/Cotint.png" alt="cotint"
                         width="130px">
                    </div>
                 @endif

        </section>

</main>

<!--footer-->

<footer class="container-fluid background-five">
    <section class="container">
        {{--<section class="col-md-4 pull-left web-footer"><span class="pull-left text-fo">۰۲۱-۲۲۷۴۸۵۴۳<i--}}
                        {{--class="fa fa-phone" aria-hidden="true"></i></span></section>--}}
        <section class="col-md-12 web-footer">
            <p class="text-center text-fo2">Powerd By <span style="color:#245c43;"><a class="text-fo3"
                                                                                     href="http://cotint.ir/"
                                                                                     target="_blank"><strong>Cotint</strong></a></span>
            </p>
        </section>
        {{--<section class="col-md-4 pull-right web-footer"><img class="pull-right img-fo" src="images/front/co.png"--}}
                                                             {{--height="28px"></section>--}}
    </section>
</footer>

<!--btn-top-->

<div class="btn-top"><i style="color:#FFFFFF; font-size:22px; padding-top:12px; padding-right:14px;"
                        class="fa fa-chevron-up" aria-hidden="true"></i></div>


@include('front.layouts.success')
@include('admin.layouts.errors')