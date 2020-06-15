@extends('layouts.app')

@section('customCSS')
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/c-tooltip.css')}}" rel="stylesheet">
<style>
   .sorting_asc,.sorting_desc,.sorting{
        text-transform: uppercase !important; 
    }
</style>

<!-- Plugins css -->
<link href="{{asset('assets/libs/multiselect/multi-select.css')}}"  rel="stylesheet" />
<link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet" />
@endsection
@section('content')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="row mb-3">
                    <div class="col-12 col-xl-10">
                        <h4 class="mt-0 header-title">Customers Table</h4>
                    </div>
                    <div class="col-12 col-xl-2">
                        <button class="float-right btn btn-success rounded" data-toggle="modal" data-target="#customerCreateModal"><i class="fas fa-plus mr-1"></i>New Customer</button>
                    </div>
                </div>

                <table id="datatable" class="table table-bordered dt-responsive nowrap">
                    <thead>
                    <tr>
                        <th>Task</th>
                        <th class="text-center">Assignee</th>
                        <th class="text-center">Paket Mitra</th>
                        <th class="text-center">Harga</th>
                        <th class="text-center">Tanggal Close</th>
                        <th class="text-center">Payment</th>
                        <th class="text-center">Priority</th>
                        <th class="text-center">Comments</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $res)
                        <tr>
                            <td>{{ $res->task }}</td>
                            <td class="text-center">
                                @foreach($res->customerReports as $res2)
                                    @if(!empty($res2->user->avatar))
                                    <span class="c-tooltip">
                                        <img src="{{ asset('img/avatar/'.$res2->user->avatar) }}" alt="img" class="avatar-sm rounded-circle" style="border: 1px solid #dee2e6; width: 30px; height: 30px">
                                        <span class="c-tooltiptext">{{ $res2->user->name }}</span>
                                    <span>
                                    @else
                                    <span class="c-tooltip">
                                        <img src="{{ asset('img/user-default.jpg') }}" alt="img" class="avatar-sm rounded-circle" style="border: 1px solid #dee2e6; width: 30px; height: 30px">
                                        <span class="c-tooltiptext">{{ $res2->user->name }}</span>
                                    <span>
                                    @endif
                                @endforeach
                            </td>
                            <td class="@if($res->package == "Universal") bg-success @elseif($res->package == "Branding") bg-dark @elseif($res->package == "Professional") bg-primary @endif text-light text-center">
                                {{ $res->package }}
                            </td>
                            <td class="text-center">Rp{{ number_format($res->price,0,',','.') }}</td>
                            <td class="text-center">{{ $res->date_close }}</td>
                            <td>
                                <div class="bg-warning text-center rounded">
                                    <b class="text-light">{{ $res->payment }}</b>
                                </div>
                            </td>
                            <td class="text-center">{{ $res->priority }}</td>
                            <td class="text-center">
                                <a href="#" data-comment="{{ $res->comment }}" data-toggle="modal" data-target="#modalComment">
                                    <i class="mdi mdi-comment-text-multiple h4"></i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="#" data-uri="{{ route('customers.destroy', $res->id) }}" data-toggle="modal" data-target="#modalDestroy">
                                    <i class="mdi mdi-trash-can-outline h3 text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <!-- end row -->
    @include('../layouts.component.Modal.CustomerCreate')
    @include('layouts.component.Modal.ModalDestroy')
    @include('layouts.component.Modal.ModalComment')
@endsection

@section('customJS')
    <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>

    <script src="{{asset('assets/libs/multiselect/jquery.multi-select.js')}}"></script>
    <script src="{{asset('assets/libs/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>


    <script src="{{ asset('assets/js/pages/form-advanced.init.js') }}"></script>

    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

    <script>
        $('#modalComment').on('show.bs.modal', function(e) {
            $(this).find('#showComment').html($(e.relatedTarget).data('comment'));
        });
    </script>


    <script src="{{ asset('js/datepicker-autoclose.js') }}"></script>

    <!-- Sweet Alerts js -->
    <script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <!-- Sweet alert init js-->
    <script src="{{asset('assets/js/pages/sweet-alerts.init.js')}}"></script>
    @include('layouts.component.alert')
@endsection