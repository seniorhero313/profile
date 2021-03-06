@extends('admin.layouts.master')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="container">

            <form id="contact" action="{{route('language.update',$language->id)}}" method="post">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
                    <label>نام</label>
                    <fieldset>
                        <input class="form-control m-b col-md-3" placeholder="نام زبان" value="{{$language->name}}" type="text" name="name" tabindex="1"
                               required autofocus>
                    </fieldset>
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name')}}</span>
                    @endif
                </div>
<div class="row">
                <div class="col-md-1">
                    <div class="form-group{{ $errors->has('reading') ? ' has-error': ''}}">
                        <select name="reading" class="select2_demo_1 form-control">
                            <option value="1" @if($language->reading == 1) selected @endif>1</option>
                            <option value="2" @if($language->reading == 2) selected @endif>2</option>
                            <option value="3" @if($language->reading == 3) selected @endif>3</option>
                            <option value="4" @if($language->reading == 4) selected @endif>4</option>
                            <option value="5" @if($language->reading == 5) selected @endif>5</option>
                        </select>
                        @if($errors->has('reading'))
                            <span class="help-block">{{ $errors->first('reading')}}</span>
                        @endif
                    </div>
                </div>

                    <div class="col-md-1">
                        <div class="form-group{{ $errors->has('writing') ? ' has-error': ''}}">
                            <select name="writing" class="select2_demo_1 form-control">
                            <option value="1" @if($language->writing == 1) selected @endif>1</option>
                            <option value="2" @if($language->writing == 2) selected @endif>2</option>
                            <option value="3" @if($language->writing == 3) selected @endif>3</option>
                            <option value="4" @if($language->writing == 4) selected @endif>4</option>
                            <option value="5" @if($language->writing == 5) selected @endif>5</option>
                        </select>
                    @if($errors->has('writing'))
                        <span class="help-block">{{ $errors->first('writing')}}</span>
                    @endif
                </div>
                    </div>
                 <div class="col-md-1">
                <div class="form-group{{ $errors->has('speaking') ? ' has-error': ''}}">
                        <select name="speaking" class="select2_demo_1 form-control">
                            <option value="1" @if($language->speaking == 1) selected @endif>1</option>
                            <option value="2" @if($language->speaking == 2) selected @endif>2</option>
                            <option value="3" @if($language->speaking == 3) selected @endif>3</option>
                            <option value="4" @if($language->speaking == 4) selected @endif>4</option>
                            <option value="5" @if($language->speaking == 5) selected @endif>5</option>
                        </select>
                    @if($errors->has('speaking'))
                        <span class="help-block">{{ $errors->first('speaking')}}</span>
                    @endif
                </div>
                 </div>
                <div class="col-md-1">
                <div class="form-group{{ $errors->has('listening') ? ' has-error': ''}}">
                            <select name="listening" class="select2_demo_1 form-control">
                            <option value="1" @if($language->listening == 1) selected @endif>1</option>
                            <option value="2" @if($language->listening == 2) selected @endif>2</option>
                            <option value="3" @if($language->listening == 3) selected @endif>3</option>
                            <option value="4" @if($language->listening == 4) selected @endif>4</option>
                            <option value="5" @if($language->listening == 5) selected @endif>5</option>
                        </select>
                    @if($errors->has('listening'))
                        <span class="help-block">{{ $errors->first('listening')}}</span>
                    @endif
                </div>
                </div>
                </div>

                <div style="margin-top: 20px;" class="modal-footer col-md-5">
                    <button  style="font-family: webmdesign;" type="button" class="btn btn-white" data-dismiss="modal">بستن</button>
                    <button style="font-family: webmdesign;" name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="btn btn-primary">اعمال تغییرات</button>
                </div>
            </form>

        </div>
    </div>
@endsection
