@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">1. Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to
                    additional content.</p>
                    <footer class="blockquote-footer text-muted"> Created at: 22-22-2020 </footer>
                <a href="{{route('tasks.index')}}" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">2. Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to
                    additional content.</p>
                    <footer class="blockquote-footer text-muted"> Created at: 22-22-2020 </footer>
                <a href="{{route('tasks.index')}}" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">3. Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to
                    additional content.</p>
                    <footer class="blockquote-footer text-muted"> Created at: 22-22-2020 </footer>
                <a href="{{route('tasks.index')}}" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection

@section('customJS')
<script>
$('#activity_link').addClass('active')
</script>
@endsection