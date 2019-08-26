<script>
    $(document).ready(function () {
        if($('#hideBar').val() == 1){
            $('.aa-cartbox-summary').css('display', 'none');
        }

        $('#information').on('change', function() {
            var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
            var email_regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var Sel = $(this).val();
            if (vnf_regex.test(Sel) == true)
            {
                $('#filter').val(2);
            }else if(email_regex.test(Sel) == true){
                $('#filter').val(3);
            }else{
                $('#filter').val(0);
            }
        });

        $('#ModalSubmit').on('click', function (e) {
            e.preventDefault();
            var _token = $('input[name="_token"]').val();
            var information =  $('#information').val();
            var password = $('#password').val();
            var filter = $('#filter').val();
            $.ajax({
                url: "{{route('signIn')}}",
                method: 'POST',
                data: {information:information, _token:_token, password:password, filter:filter},
                dataType: 'json',
                success: function (data) {
                    if($.isEmptyObject(data.error)){
                        if(!$.isEmptyObject(data.error1)){
                            $(".print-error-msg").find("ul").html('');
                            $(".print-error-msg").css('display','block');
                            $(".print-error-msg").find("ul").append('<li><span class="fa fa-times"></span>&nbsp;'+data.error1+'</li>');
                        }else{
                            location.reload();
                        }
                    }
                    else{
                        printErrorMsg(data.error);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('An error occurred... Look at the console (F12 or Ctrl+Shift+I, Console tab) for more information!');
                    $('#result').html('<p>status code: '+jqXHR.status+'</p><p>errorThrown: ' + errorThrown + '</p><p>jqXHR.responseText:</p><div>'+jqXHR.responseText + '</div>');
                    console.log('jqXHR:');
                    console.log(jqXHR);
                    console.log('textStatus:');
                    console.log(textStatus);
                    console.log('errorThrown:');
                    console.log(errorThrown);
                },
            });
        });

        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li><span class="fa fa-times"></span>&nbsp;'+value+'</li>');
            });
        };
    });
</script>