<script>
    (function ($) {
        $(document).ready(function() {
            $(document).on('click','.buyProduct', function (e) {
                e.preventDefault();
                var idProduct = $(this).find('#idProduct').val();
                var num = $(this).find('#num').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{route('addCart')}}",
                    method: 'POST',
                    data: {id:idProduct, _token:_token, num:num},
                    dataType: 'json',
                    success: function (data) {
                        if(data.check == 1){
                            $('#success'+idProduct).css('display', 'none');
                            $('#error'+idProduct).css('display', 'block');
                        }else{
                            $('#CartContainer').html(data.output);
                            $('#NumCart').html(data.outputQty);
                            $('#NumPrice').html(data.outputPrice + '$');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
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

            $( ".quick-modal" ).on('show.bs.modal', function(){
                var id = $(this).attr('data-id');
                $('#productNum' + id).val(1);
                $('#showError' + id).css('display', 'none');
            });

            $(document).on('change', '.productNum', function (e) {
                e.preventDefault();
                var idProduct = $(this).parent().find('#idProduct').val();
                var num = $(this).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{route('checkNumProduct')}}",
                    method: 'POST',
                    data: {id:idProduct, _token:_token, num:num},
                    dataType: 'json',
                    success: function (data) {
                        if(data.unit <= data.sumCart && data.add > 0) {
                            $('#showError' + idProduct).css('display', 'block');
                            $('#productNum' + idProduct).attr('max', data.unit - data.qtyCart);
                            $('#UnitProduct' + idProduct).html(data.unit - data.qtyCart);
                        }else{
                            $('#showError' + idProduct).css('display', 'none');
                            $('#productNum' + idProduct).removeAttr('max');
                            $('#productNum' + idProduct).attr('value', num);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
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

            $(document).on('click','#selectCart', function (e) {
                e.preventDefault();
                var idProduct = $(this).parent().find('#idProduct').val();
                var num = $(this).parent().find('#productNum'+idProduct).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{route('addCart')}}",
                    method: 'POST',
                    data: {id:idProduct, _token:_token, num:num},
                    dataType: 'json',
                    success: function (data) {
                            if(data.check == 1){
                                if(data.left == 0){
                                    Swal.fire(
                                        'Product is out of stock!',
                                        '',
                                        'error',
                                    );
                                }else{
                                    Swal.fire(
                                        'Product is only has '+data.left+' unit left. Please select reasonalbe quantity!',
                                        '',
                                        'error',
                                    );
                                }
                            }else{
                                $('#CartContainer').html(data.output);
                                $('#NumCart').html(data.outputQty);
                                $('#NumPrice').html(data.outputPrice + '$');
                                Swal.fire(
                                    'Product is added to your cart!',
                                    '',
                                    'success',
                                );
                            }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('#result').html('<p>status code: '+jqXHR.status+'</p><p>errorThrown: ' + errorThrown + '</p><p>jqXHR.responseText:</p><div>'+jqXHR.responseText +'</div>');
                        console.log('jqXHR:');
                        console.log(jqXHR);
                        console.log('textStatus:');
                        console.log(textStatus);
                        console.log('errorThrown:');
                        console.log(errorThrown);
                    },
                });
            });
        });
    })(jQuery);

</script>