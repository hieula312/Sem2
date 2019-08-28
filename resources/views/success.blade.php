@if(session('success'))
    <div class="alert alert-success">
        <ul>
            <li>
                <span class="fa fa-check"></span>&nbsp;{{session('success')}}
            </li>
        </ul>
    </div>
@endif