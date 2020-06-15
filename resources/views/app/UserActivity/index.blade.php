@extends('layouts.app')

@section('customCSS')
@endsection

@section('content')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card-box task-detail">
                <div class="media mb-3">
                    @if(!empty($user->avatar))
                    <img class="d-flex mr-3 rounded-circle avatar-md" alt="64x64" src="{{ asset('img/avatar'.$user->avatar) }}">
                    @else
                    <img class="d-flex mr-3 rounded-circle avatar-md" alt="64x64" src="{{ asset('img/user-default.jpg') }}">
                    @endif
                    <div class="media-body">
                        <h4 class="media-heading mt-0">{{ $user->name }}</h4>
                        <span class="text-muted">{{ $user->email }}</span>
                    </div>
                </div>

                <h4>Chart Activities</h4>
                <div class="row">
                    <div class="col-12 col-xl-6">
                        {{ $user->userTasks }}
                        <select class="form-control">
                            @foreach($user->userTasks as $res)
                            <option value="{{ $res->task_id }}">{{ $res->task_id }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @include('../layouts.component.Modal.ActivityCreate')
@endsection

@section('customJS')

@include('layouts.component.alert')
@endsection