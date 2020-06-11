@extends('layouts.app')

@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-4">
            <button type="button" class="btn btn-purple btn-rounded w-md waves-effect waves-light mb-3"><i class="mdi mdi-plus"></i> Create Activity</button>
        </div>
        <div class="col-sm-8">
            <div class="project-sort float-right">
                <div class="project-sort-item">
                    <form class="form-inline">
                        <div class="form-group mr-2">
                            <label>Phase :</label>
                            <select class="form-control ml-2 form-control-sm">
                                <option>All Projects(6)</option>
                                <option>Complated</option>
                                <option>Progress</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Sort :</label>
                            <select class="form-control ml-2 form-control-sm">
                                <option>Date</option>
                                <option>Name</option>
                                <option>End date</option>
                                <option>Start Date</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- end col-->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-xl-4">
            <div class="card-box project-box">
                <div class="badge badge-success float-right">22-22-2020</div>
                <h4 class="mt-0"><a href="#" class="text-dark">Nama</a></h4>
                <p class="text-muted font-13">If several languages coalesce the grammar is more simple and regular than that of the individual languages...
                    <a href="{{ route('cards.index') }}" class="text-primary">View more</a>
                </p>

                <!-- <h5>Progress <span class="text-success float-right">80%</span></h5>
                <div class="progress progress-bar-alt-success progress-sm">
                    <div class="progress-bar bg-success progress-animated wow animated animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%; visibility: visible; animation-name: animationProgress;">
                    </div>
                </div> -->

            </div>
        </div><!-- end col-->

        <div class="col-xl-4">
            <div class="card-box project-box">
                <div class="badge badge-primary float-right">22-22-2020</div>
                <h4 class="mt-0"><a href="#" class="text-dark">App Design and Develop</a></h4>
                <p class="text-muted font-13">New common language will be more simple and regular than the existing European languages...
                    <a href="{{ route('cards.index') }}" class="text-primary">View more</a>
                </p>

                <!-- <h5>Progress <span class="text-primary float-right">45%</span></h5>
                <div class="progress progress-bar-alt-primary progress-sm">
                    <div class="progress-bar bg-primary progress-animated wow animated animated" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                    </div>
                </div> -->

            </div>
        </div><!-- end col-->

        <div class="col-xl-4">
            <div class="card-box project-box">
                <div class="badge badge-pink float-right">22-22-2020</div>
                <h4 class="mt-0"><a href="#" class="text-dark">Landing page Design</a></h4>
                <p class="text-muted font-13">It will be as simple as occidental in fact it will be to an english person it will seem like simplified English...
                    <a href="{{ route('cards.index') }}" class="text-primary">view more</a>
                </p>

                <!-- <h5>Progress <span class="text-pink float-right">68%</span></h5>
                <div class="progress progress-bar-alt-pink progress-sm">
                    <div class="progress-bar bg-pink progress-animated wow animated animated" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
                    </div>
                </div> -->

            </div>
        </div><!-- end col-->
    </div>
    <!-- end row -->
@endsection

@section('customJS')
<script>
    $('#activity_link').addClass('active')
</script>
@endsection