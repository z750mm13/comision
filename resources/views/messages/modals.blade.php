@if(isset($success))
@push('js')
<script src="{{ asset('argon') }}/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        Swal.fire({
            title:"Correcto",
            text:"{{$success}}",
            type:"success",
            buttonsStyling:!1,
            confirmButtonClass:"btn btn-success"
        });
    });
</script>
@endpush

@elseif(isset($error))
@push('js')
<script src="{{ asset('argon') }}/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        Swal.fire({
            title:"Oh Oh, Lo sentimos",
            text:"{{$error}}",
            buttonsStyling: false,
            confirmButtonClass: 'btn btn-warning',
            type:"warning"
        });
    });
</script>
@endpush
@endif