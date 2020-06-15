@extends('layouts.app')

@section('customCSS')
<!--Morris Chart-->
<link rel="stylesheet" href="{{asset('assets/libs/morris-js/morris.css')}}"/>
@endsection

@section('content')
<div class="container-fluid">


    <div class="row">
        @foreach($users as $res)
        <div class="col-xl-3 col-md-6">
            <div class="card-box widget-user">
                <div>
                    <div class="avatar-lg float-left mr-3">
                        @if(!empty($res->avatar))
                        <img src="{{ asset('img/avatar/'.$res->avatar) }}" class="img-fluid rounded-circle" alt="user">
                        @else
                        <img src="{{ asset('img/user-default.jpg') }}" class="img-fluid rounded-circle" alt="user">
                        @endif
                    </div>
                    <div class="wid-u-info">
                        <h5 class="mt-0">{{ $res->name }}</h5>
                        <p class="text-muted mb-1 font-13 text-truncate">{{ $res->email }}</p>
                        <a target="blank" href="{{ route('useractivities.show', $res->id) }}" class="text-primary font-13"><b>View Activities</b></a>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
        @endforeach
    </div>
    <!-- end row -->


</div> 
@endsection

@section('customJS')
<!-- Dashboard init js-->
<script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>
<!-- knob plugin -->
<script src="{{asset('assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>
<!--Morris Chart-->
<script src="{{asset('assets/libs/morris-js/morris.min.js')}}"></script>
<script src="{{asset('assets/libs/raphael/raphael.min.js')}}"></script>

<script>
    $('#dasboards').addClass('active')
</script>
@endsection