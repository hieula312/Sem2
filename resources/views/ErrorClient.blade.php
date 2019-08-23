@if ($errors->any())
    <div class="alert alert-danger col-lg-12">
        <ul class="col-lg-12">
            @foreach($errors->all() as $error)
                <li class="col-lg-6">
                    <span class="fa fa-times"></span>&nbsp;{{$error}}
                </li>
            @endforeach
        </ul>
    </div>
@endif