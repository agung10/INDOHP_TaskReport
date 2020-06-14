@extends('layouts.app')

@section('customCSS')
<!-- Custom box css -->
<link href="{{asset('assets/libs/custombox/custombox.min.css')}}" rel="stylesheet">
 <!-- dropify -->
 <link href="{{ asset('assets/libs/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-xl-4">
            <div class="bg-picture card-box">
                <div class="profile-info-name">
                    @if(!empty(Auth::user()->avatar))
                    <img src="{{ asset('img/avatar/'.Auth::user()->avatar) }}" class="rounded-circle avatar-xl img-thumbnail float-left mr-3" alt="profile-image">
                    @else
                    <img src="{{ asset('img/user-default.jpg') }}" class="rounded-circle avatar-xl img-thumbnail float-left mr-3" alt="profile-image">
                    @endif
                    <div class="profile-info-detail overflow-hidden">
                        <h4 class="m-0">{{ Auth::user()->name }}</h4>
                        <p class="text-muted"><i>{{ Auth::user()->email }}</i></p>
                        @include('_FUNC.timeToDate')
                        @php
                            $d = \Auth::user()->created_at;
                            $t = $d->format('Y-m-d');
                        @endphp
                        <div class="badge badge-primary">Joined on {{ timeToDate($t) }}</div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-8">
            <div class="card-box">
                <h4 class="header-title">My Account Form</h4>
                <br>
                <span class="alert alert-success">
                    Manage your info, privacy and security so that the application works better for you.
                </span>
                <br>
                <br>

                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form class="form-horizontal" method="POST" action={{ route('profile.update', Auth::user()->id) }} enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="form-group row">
                                    <div class="col-md-5">
                                        @if(!empty(Auth::user()->avatar))
                                        <input type="file" name="avatar" class="dropify" data-default-file="{{ asset('img/avatar/'.Auth::user()->avatar) }}"  />
                                        @else
                                        <input type="file" name="avatar" class="dropify" data-default-file="{{ asset('img/user-default.jpg') }}"  />
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="name">Name</label>
                                    <div class="col-md-10">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{ Auth::user()->name }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="email">Email</label>
                                    <div class="col-md-10">
                                        <input type="text" readonly="" name="email" class="form-control-plaintext" id="email" value="{{ Auth::user()->email }}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="phone_number">Phone Number</label>
                                    <div class="col-md-10">
                                        <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Phone Number" value="{{ Auth::user()->phone_number }}" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="example-password">Password</label>
                                    <div class="col-md-10">
                                        <input type="password" id="example-password" name="password" class="form-control" placeholder="Fill if you want to change the password..">
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-primary rounded">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- end row -->

            </div>
        </div>
    <!-- end row -->
    @include('../layouts.component.Modal.ActivityCreate')
@endsection

@section('customJS')

<!-- dropify js -->
<script src="{{ asset('assets/libs/dropify/dropify.min.js') }}"></script>
<!-- form-upload init -->
<script src="{{ asset('assets/js/pages/form-fileupload.init.js') }}"></script>
<!-- Modal-Effect -->
<script src="{{asset('assets/libs/custombox/custombox.min.js')}}"></script>
<!-- Sweet Alerts js -->
<script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Sweet alert init js-->
<script src="{{asset('assets/js/pages/sweet-alerts.init.js')}}"></script>
@include('layouts.component.alert')
@endsection