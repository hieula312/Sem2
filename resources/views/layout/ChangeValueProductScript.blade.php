<script>
    (function ($) {
        $(document).ready(function () {
            var x = document.querySelectorAll('.aa-cart-quantity');
            Array.from(x).forEach(function (item) {
                item.addEventListener('change', function () {
                    var idSanPham = item.getAttribute('data-id');
                    var newQty = this.value;
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{route('changeQty')}}",
                        method: 'POST',
                        data: {id:idSanPham, _token:_token, newQty:newQty},
                        dataType: 'json',
                        success: function (data) {
                            if(data.check == 1){
                                if(data.left == 0){
                                    Swal.fire(
                                        'Product is out of stock!',
                                        '',
                                        'error',
                                    );
                                    $('#quantity'+idSanPham).val(data.oldQty);
                                }else{
                                    Swal.fire(
                                        'Product is only has '+data.left+' unit left. Please select reasonalbe quantity!',
                                        '',
                                        'error',
                                    );
                                    $('#quantity'+idSanPham).val(data.oldQty);
                                }
                            }else{
                                $('#CartContainer').html(data.output);
                                $('#NumCart').html(data.outputQty);
                                $('#NumPrice').html(data.outputPrice + '$');
                                $('#totalSubPrice').html(data.outputPrice + '$');
                                $('#totalPrice').html(data.outputPrice + '$');
                                $('#PriceContainer'+idSanPham).html(data.price + '$');
                            }
                            if(newQty == 0){
                                $('#item'+idSanPham).html('');
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
            })
            //Delete Product
            $('.deleteProduct').click(function () {
                var productId = this.getAttribute('data-id');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{route('deleteClientProduct')}}",
                    method: 'POST',
                    data: {id:productId, _token:_token},
                    dataType: 'json',
                    success: function (data) {
                        $('#CartContainer').html(data.output);
                        $('#NumCart').html(data.outputQty);
                        $('#NumPrice').html(data.outputPrice + '$');
                        $('#totalSubPrice').html(data.outputPrice + '$');
                        $('#Container'+productId).html('');
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
        });
    })(jQuery);
</script>