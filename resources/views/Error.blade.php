@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    <span class="fa fa-times">&nbsp;{{$error}}
                </li>
             @endforeach
        </ul>
    </div>
@endif
