@if(session('alert'))
    <script>
        window.onload = function(){
            Swal.fire(
                '{{session('alert')}}',
                '',
                'success',
            );
        };
    </script>
@endif