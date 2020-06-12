<!-- @if(session("alertStore"))
<script>
    iziToast.success({
        title: 'Berhasil menambah Data!',
        message: "{{ session('alertStore') }}",
        position: 'bottomRight'
    });
</script>
@endif -->

@if(session("alertStore"))
<script>
    Swal.fire({
        title:"Berhasil menambah Data!",
        text:"{{ session('alertStore') }}",
        type:"success",
        confirmButtonClass:"btn btn-confirm mt-2"
    })
</script>
@endif