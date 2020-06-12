@extends('layouts.app')

@section('customCSS')
<!-- Custom box css -->
<link href="{{asset('assets/libs/custombox/custombox.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4">
            <div class="card card-inverse text-white" style="background-color: #333; border-color: #333;">
                <div class="card-body">
                    <h4 class="card-title text-white">Create New Activity</h4>
                    <p class="card-text">You can add new activities by clicking the button.</p>
                    <a href="#custom-modal" class="btn btn-success btn-sm waves-effect" data-animation="fadein" data-plugin="custommodal" data-overlayColor="#36404a">
                        <i class="fas fa-plus mr-1"></i> 
                        <span>Add New Activity</span> 
                    </a>
                </div>
            </div>
        </div>
        @include('_FUNC.timeToDate')
        @foreach($activities as $res)
            @php
                $d = $res->created_at;
                $t = $d->format('Y-m-d');
            @endphp
            <div class="col-xl-4">
                <div class="card-box project-box">
                    <div class="badge badge-{{ $res->color }} float-right">{{ timeToDate($t) }}</div>
                    <h4 class="mt-0"><a href="#" class="text-dark">{{ $res->name }}</a></h4>
                    <p class="text-muted font-13">
                        @if(strlen($res->description) > 105)
                        {{ substr($res->description,0,105) }}..
                        @else
                        {{ $res->description }}
                        @endif
                    </p>

                    <a href="{{ route('cards.index') }}?activity_id={{ $res->id }}" class="btn btn-{{ $res->color }} rounded">View Activity</a>

                </div>
            </div>
        @endforeach
    </div>
    {{ $activities->links() }}
    <!-- end row -->
    @include('../layouts.component.Modal.ActivityCreate')
@endsection

@section('customJS')
<!-- Modal-Effect -->
<script src="{{asset('assets/libs/custombox/custombox.min.js')}}"></script>

<script>
    $('#activity_link').addClass('active')
</script>
@endsection