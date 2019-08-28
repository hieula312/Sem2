
    <script>
            $(document).ready(function () {

            $('#checkUser').change(function () {
               if(this.val() == 1){
                   var x = parseFloat($('#deliveryType').find(':selected').data('num')) * parseFloat($('#subdistrict').find(':selected').data('num'));
                   counting(x);
               }
            });

            $('#tel').on('change', function() {
                var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
                var mobile = $(this).val();
                if (vnf_regex.test(mobile) == true)
                {
                    $('#checkTel').val(1);
                }
            });

            $('#deliveryType').change(function (e) {
                e.preventDefault();
                var x = parseFloat($('#deliveryType').find(':selected').data('num')) * parseFloat($('#subdistrict').find(':selected').data('num'));
                counting(x);
            });

            $('#subdistrict').change(function (e) {
                e.preventDefault();
                var x = parseFloat($('#deliveryType').find(':selected').data('num')) * parseFloat($('#subdistrict').find(':selected').data('num'));
                counting(x);
            });

            $('#city').change(function (e) {
                e.preventDefault();
                var idCity = $(this).val();
                if(idCity == 0){
                    $('#district').val(0);
                    $('#district').html('<option selected value="0">Select Your District</option>');
                    $('#subdistrict').html('<option selected value="0">Select Your Sub District</option>');
                    $('#shippingfee').val(0);
                    $('#shippingfee').html(0 + '$');
                    counting(0);
                    return false;
                };
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{route('getDistrict')}}",
                    method: 'POST',
                    data: {id:idCity, _token:_token},
                    dataType: 'json',
                    success: function (data) {
                        $('#district').html(data.output);

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
            })

            $('#district').change(function (e) {
                e.preventDefault();
                var idDistrict = $(this).val();
                if(idDistrict == 0){
                    $('#subdistrict').html('<option selected value="0">Select Your Sub District</option>');
                    $('#shippingfee').val(0);
                    $('#shippingfee').html(0 + '$');
                    counting(0);
                    return false;
                };
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{route('getSubDistrict')}}",
                    method: 'POST',
                    data: {id:idDistrict, _token:_token},
                    dataType: 'json',
                    success: function (data) {
                        $('#subdistrict').html(data.output);
                        $('#shippingfee').val(0);
                        $('#shippingfee').html(0 + '$');
                        counting(0);
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
            })
        })
        function counting(x) {
            x = x.toFixed(2);
            x = parseFloat(x);
            var y = parseFloat($('#inputSubTotal').val());
            y = y.toFixed(2);
            y = parseFloat(y);
            if(isNaN(x) == false){
                var z = x + y;
                $('#shippingfee').val(x);
                $('#shippingfee').html(x + '$');
                $('#total').val(z);
                $('#totalPrice').val(z);
                $('#total').html(z + '$');
            }
        }
    </script>