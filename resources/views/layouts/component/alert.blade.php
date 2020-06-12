@if(session("alertStore"))
<script>
    Swal.fire({
        title:"Data has been added!",
        text:"{{ session('alertStore') }}",
        type:"success",
        confirmButtonClass:"btn btn-confirm mt-2"
    })
</script>
@elseif(session("alertUpdate"))
<script>
    Swal.fire({
        title:"Data has been updated!",
        text:"{{ session('alertUpdate') }}",
        type:"success",
        confirmButtonClass:"btn btn-confirm mt-2"
    })
</script>
@elseif(session("alertDestroy"))
<script>
    Swal.fire({
        title:"Data has been deleted!",
        text:"{{ session('alertDestroy') }}",
        type:"success",
        confirmButtonClass:"btn btn-confirm mt-2"
    })
</script>
@endif