@if ($message = Session::get('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                position: "top-center",
                icon: "success",
                title: "{{ $message }}",
                showConfirmButton: false,
                timer: 1700
            });
        });
    </script>
@endif


@if ($message = Session::get('danger'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                position: "top-center",
                icon: "success",
                title: "{{ $message }}",
                showConfirmButton: false,
                timer: 1900
            });
        });
    </script>
@endif
