<script>
    (function ($) {
        $(document).ready(function() {
            $(document).on('click','#buy', function (e) {
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
                        $('#CartContainer').html(data.output);
                        $('#NumCart').html(data.outputQty);
                        $('#NumPrice').html(data.outputPrice + '$');
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

            $(document).on('click','#selectCart', function (e) {
                e.preventDefault();
                var idProduct = $(this).parent().find('#idProduct').val();
                var num = $(this).parent().find('#productNum').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{route('addCart')}}",
                    method: 'POST',
                    data: {id:idProduct, _token:_token, num:num},
                    dataType: 'json',
                    success: function (data) {
                        $('#CartContainer').html(data.output);
                        $('#NumCart').html(data.outputQty);
                        $('#NumPrice').html(data.outputPrice + '$');
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
        });
    })(jQuery);

</script>