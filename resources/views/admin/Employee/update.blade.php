@extends('admin.layout.index')
@section('content')
    <section class="content-header col-lg-7" style="margin-bottom: 15px;">
        <h1 style="border-bottom: 2px solid black;">
            <span><b>Employee</b></span>
            <small>Update</small>
        </h1>
    </section>
    <!-- Main content -->
    <div class="row">
        <div class="col-lg-7">
            <section class="content container-fluid">
                @include('Error')
                @include('success')
                @include('alert')
                <form action="admin/employee/update/{{$employee->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Name</label>
                        <input value="{{$employee->name}}" name="name" type="text" class="form-control" placeholder="Enter name of employee">
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="hidden" value="0" name="checkTel" id="checkTel">
                        <input value="{{$employee->phoneNumber}}" id="tel"  name="phoneNumber" type="text" class="form-control" placeholder="Enter phone number of employee" >
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input value="{{$employee->email}}"  name="email" type="text" class="form-control" placeholder="Enter email of employee" >
                    </div>
                    <div class="form-group">
                        <label>Password&ensp;</label>
                        <input style="margin: 0px; !important;" type="checkbox"  name="checkPassword" id="checkPassword">
                        <input disabled value=""  name="password" id="password" type="password" class="form-control" placeholder="Enter password of employee" >
                    </div>
                    <div class="form-group">
                        <label>Sex:&nbsp</label>
                        <label class="radio-inline">
                            <input name="sex" value="F" <?php if($employee->sex == 'F'){ echo "checked";} ?> type="radio">Female
                        </label>
                        <label class="radio-inline">
                            <input name="sex" value="M" <?php if($employee->sex == 'M'){ echo "checked";} ?> type="radio">Male
                        </label>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Add new</button>
                </form>
            </section>
        </div>
    </div>
@endsection
@section('css')
    <style>
        .btn{
            width: 30%;
        }
    </style>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tel').on('change', function() {
                var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
                var mobile = $(this).val();
                if (vnf_regex.test(mobile) == true)
                {
                    $('#checkTel').val(1);
                }
            });

            $('#checkPassword').on('click',function () {
                if(this.checked){
                    document.getElementById('password').removeAttribute('disabled');
                    this.value = 1;
                }else{
                    document.getElementById('password').setAttribute('disabled', '');
                }
            })
        });
    </script>
@endsection

