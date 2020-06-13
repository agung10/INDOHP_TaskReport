@extends('layouts.app')

@section('customCSS')
<!-- Custom box css -->
<link href="{{asset('assets/libs/custombox/custombox.min.css')}}" rel="stylesheet">
<link href="{{asset('css/c-tooltip.css')}}" rel="stylesheet">

<!-- Plugins css -->
<link href="{{asset('assets/libs/multiselect/multi-select.css')}}"  rel="stylesheet" />
<link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">

@endsection

@section('content')
<!-- Start Content-->
<div class="container-fluid">

<div class="row">

<div class="col-xl-8 col-12">
    <div class="card text-white bg-{{ $activity->color }}">
        <div class="card-body">
            <h4 class="mt-0"><a href="#" class="text-light">{{ $activity->name }}</a></h4>
            <blockquote class="card-bodyquote mb-0">
                <p>{{ $activity->description }}</p>
            </blockquote>
        </div>
    </div>
</div>
<div class="col-xl-4 col-12">
    <div class="card card-body text-white bg-{{ $activity->color }}">
        <h4 class="card-title text-white">Activity Action</h4>
        <div class="row">
            <div class="col-12">
                <a href="#new_card" class="btn btn-light rounded" data-animation="fadein" data-plugin="custommodal" data-overlayColor="#36404a">
                    <i class="fas fa-plus mr-1"></i>
                    <span>Add New Card</span> 
                </a>
                <a href="#" data-uri="{{ route('activities.destroy', $activity->id) }}" class="btn btn-light rounded" data-toggle="modal" data-target="#modalDestroy"><i class="fas fa-trash-alt mr-1"></i> Delete Activity</a>
            </div>
        </div>
    </div>
</div>
    
@foreach($cards as $res)
<div class="col-xl-4">
    <div class="card-box taskboard-box">
        <div class="dropdown float-right">
            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-dots-vertical"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a href="#" id="btnOpenModalAddTask" class="dropdown-item openModalAddTask" __card_id="{{ $res->id }}" __card_name="{{ $res->name }}">
                    Add New Task
                </a>
                <!-- item-->
                <a href="#" data-uri="{{ route('cards.destroy', $res->id) }}" class="dropdown-item" data-toggle="modal" data-target="#modalDestroy">Delete Card</a>
            </div>
        </div>

        <h4 class="header-title mt-0 mb-3 text-{{ $activity->color }}">{{ $res->name }}</h4>

        <ul class="sortable-list list-unstyled taskList" id="{{ $res->name }}">
            @if($res->tasks == "[]")
                <li>
                    <a href="#" class="openModalAddTask" __card_id="{{ $res->id }}" __card_name="{{ $res->name }}">
                        <span class="text-muted"><i class="fas fa-plus mr-1"></i>Add a task</span>
                    </a>
                </li>
            @else
                @foreach($res->tasks as $res2)
                <li>
                    <a href="#" class="openModalEditTask" __id="{{ $res2->id }}" __name="{{ $res2->name }}" __priority="{{ $res2->priority }}" __description="{{ $res2->description }}" __started_at="{{ $res2->started_at }}" __ended_at="{{ $res2->ended_at }}" __card_id="{{ $res->id }}" __card_name="{{ $res->name }}">
                        <div class="float-right">
                            <span class="text-muted">{{ $res2->priority }}</span><br>
                            @if($res2->userTasks != "[]")
                                @foreach($res2->userTasks as $res3)
                                    <span class="c-tooltip mt-1">
                                        <img src="{{ asset('img/user-default.jpg') }}" alt="img" class="avatar-sm rounded-circle" style="border: 1px solid #dee2e6; width: 30px; height: 30px">
                                        <span class="c-tooltiptext">{{ $res3->user->name }}</span>
                                    </span>
                                @endforeach
                            @endif
                        </div>
                        <h5 class="mt-0" class="text-dark">{{ $res2->name }}</h5>
                        <span class="text-muted">
                            @if(strlen($res2->description) > 30)
                            {{ substr($res2->description,0,30) }}..
                            @else
                            {{ $res2->description }}
                            @endif
                        </span>
                    </a>
                </li>
                @endforeach
            @endif
        </ul>
    </div>
</div>
@endforeach
  
    @include('layouts.component.Modal.NewCard')
    @include('layouts.component.Modal.NewTask')
    @include('layouts.component.Modal.EditTask')
    @include('layouts.component.Modal.ModalDestroy')
@endsection

@section('customJS')
<!-- Jquery Ui js -->
<script src="{{asset('assets/libs/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Modal-Effect -->
<script src="{{asset('assets/libs/custombox/custombox.min.js')}}"></script>

<!-- dragula init -->
<script src="{{asset('assets/js/pages/kanban.init.js')}}"></script>

<!-- Plugins Js -->
<script src="{{asset('assets/libs/multiselect/jquery.multi-select.js')}}"></script>
<script src="{{asset('assets/libs/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{asset('assets/libs/jquery-mask-plugin/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

<!-- Init js-->
<script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>

<script>
    $('.openModalAddTask').click(function(){
        let card_id = $(this).attr('__card_id')
        let card_name = $(this).attr('__card_name')
        $('#ICardId').val(card_id)
        $('#ICardName').val(card_name)
        $('#addTaskModal').modal('show')
    })
    $('.openModalEditTask').click(function(){

        let id = $(this).attr('__id');
        let name = $(this).attr('__name');
        let priority = $(this).attr('__priority');
        let description = $(this).attr('__description');
        let started_at = $(this).attr('__started_at');
        let ended_at = $(this).attr('__ended_at');
        let card_id = $(this).attr('__card_id')
        let card_name = $(this).attr('__card_name')

        $('#IName').val(name)
        $('#IPriority').val(priority)
        $('#IDescription').html(description)
        $('#IStartedAt').val(started_at)
        $('#IEndedAt').val(ended_at)


        $('#IECardId').val(card_id)
        $('#IECardName').val(card_name)

        $('#editTaskForm').attr('action', 'tasks/'+id)

        $('#IFormRemoveTask').attr('action', 'tasks/'+id)

        $.ajax({
            url: "tasks/"+id,
            method: "GET",
            success:function(results){
                $('#IUserTasks').empty()
                $('#IUserTasks').html(results)
            }
        })

        $('#editTaskModal').modal('show')

        $('#selectMoveTaskToCard').hide()
        $('#btnMoveTaskToCard').click(function(){
            $(this).hide()
            $('#selectMoveTaskToCard').attr('name', "card_id")
            $('#selectMoveTaskToCard').slideDown("slow")
        })
    })
</script>

<!-- Sweet Alerts js -->
<script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

<!-- Sweet alert init js-->
<script src="{{asset('assets/js/pages/sweet-alerts.init.js')}}"></script>
@include('layouts.component.alert')
@endsection