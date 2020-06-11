@extends('layouts.app')

@section('content')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4">
            <div class="card card-inverse text-white" style="background-color: #333; border-color: #333;">
                <div class="card-body">
                    <h4 class="card-title text-white">Create New Activity</h4>
                    <p class="card-text">You can add new activities by clicking the button.</p>
                    <button class="btn btn-success waves-effect"> <i class="fas fa-plus mr-1"></i> <span>Add New Activity</span> </button>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card-box project-box">
                <div class="badge badge-success float-right">22 July 2020</div>
                <h4 class="mt-0"><a href="#" class="text-dark">Activity 1</a></h4>
                <p class="text-muted font-13">If several languages coalesce the grammar is more simple and regular than that of the individual languages...
                </p>

                <a href="{{ route('cards.index') }}" class="btn btn-success rounded">View Activity</a>

            </div>
        </div><!-- end col-->
        <div class="col-xl-4">
            <div class="card-box project-box">
                <div class="badge badge-primary float-right">22 July 2020</div>
                <h4 class="mt-0"><a href="#" class="text-dark">Activity 2</a></h4>
                <p class="text-muted font-13">If several languages coalesce the grammar is more simple and regular than that of the individual languages...
                </p>

                <a href="{{ route('cards.index') }}" class="btn btn-primary rounded">View Activity</a>

            </div>
        </div><!-- end col-->
        <div class="col-xl-4">
            <div class="card-box project-box">
                <div class="badge badge-danger float-right">22 July 2020</div>
                <h4 class="mt-0"><a href="#" class="text-dark">Activity 3</a></h4>
                <p class="text-muted font-13">If several languages coalesce the grammar is more simple and regular than that of the individual languages...
                </p>

                <a href="{{ route('cards.index') }}" class="btn btn-danger rounded">View Activity</a>

            </div>
        </div><!-- end col-->
        <div class="col-xl-4">
            <div class="card-box project-box">
                <div class="badge badge-warning float-right">22 July 2020</div>
                <h4 class="mt-0"><a href="#" class="text-dark">Activity 4</a></h4>
                <p class="text-muted font-13">If several languages coalesce the grammar is more simple and regular than that of the individual languages...
                </p>

                <a href="{{ route('cards.index') }}" class="btn btn-warning rounded">View Activity</a>

            </div>
        </div><!-- end col-->
        <div class="col-xl-4">
            <div class="card-box project-box">
                <div class="badge badge-success float-right">22 July 2020</div>
                <h4 class="mt-0"><a href="#" class="text-dark">Activity 5</a></h4>
                <p class="text-muted font-13">If several languages coalesce the grammar is more simple and regular than that of the individual languages...
                </p>

                <a href="{{ route('cards.index') }}" class="btn btn-success rounded">View Activity</a>

            </div>
        </div><!-- end col-->
        <div class="col-xl-4">
            <div class="card-box project-box">
                <div class="badge badge-warning float-right">22 July 2020</div>
                <h4 class="mt-0"><a href="#" class="text-dark">Activity 3</a></h4>
                <p class="text-muted font-13">If several languages coalesce the grammar is more simple and regular than that of the individual languages...
                </p>

                <a href="{{ route('cards.index') }}" class="btn btn-warning rounded">View Activity</a>

            </div>
        </div><!-- end col-->
        <div class="col-xl-4">
            <div class="card-box project-box">
                <div class="badge badge-primary float-right">22 July 2020</div>
                <h4 class="mt-0"><a href="#" class="text-dark">Activity 1</a></h4>
                <p class="text-muted font-13">If several languages coalesce the grammar is more simple and regular than that of the individual languages...
                </p>

                <a href="{{ route('cards.index') }}" class="btn btn-primary rounded">View Activity</a>

            </div>
        </div><!-- end col-->
        <div class="col-xl-4">
            <div class="card-box project-box">
                <div class="badge badge-danger float-right">22 July 2020</div>
                <h4 class="mt-0"><a href="#" class="text-dark">Activity 2</a></h4>
                <p class="text-muted font-13">If several languages coalesce the grammar is more simple and regular than that of the individual languages...
                </p>

                <a href="{{ route('cards.index') }}" class="btn btn-danger rounded">View Activity</a>

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