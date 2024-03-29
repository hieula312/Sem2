<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Font awesome -->
    <link href="client_asset/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="client_asset/css/bootstrap.css" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="client_asset/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="client_asset/css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="client_asset/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="client_asset/css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="client_asset/css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="client_asset/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">
    <!-- Main style sheet -->
    <link href="client_asset/css/style.css" rel="stylesheet">
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9] -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- My Style -->
    <link rel="stylesheet" href="css/Mystyle.css">
    <link rel="stylesheet" href="css/duy.css">

    <!-- SWEET ALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--[endif]-->
</head>
<body>
<!-- wpf loader Two -->
<div id="wpf-loader-two">
    <div class="wpf-loader-two-inner">
        <span>Loading</span>
    </div>
</div>
<!-- / wpf loader Two -->
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->
<!-- HEADER -->
@include('layout.header')
<!-- MENU BAR -->
@include('layout.menubar')
@yield('content')
<!-- FOOTER -->
@include('layout.footer')
<!-- LOGIN MODAL -->
@include('layout.loginModal')
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="client_asset/js/bootstrap.js"></script>
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="client_asset/js/jquery.smartmenus.js"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="client_asset/js/jquery.smartmenus.bootstrap.js"></script>
<!-- To Slider JS -->
<script src="client_asset/js/sequence.js"></script>
<script src="client_asset/js/sequence-theme.modern-slide-in.js"></script>
<!-- Product view slider -->
<script type="text/javascript" src="client_asset/js/jquery.simpleGallery.js"></script>
<script type="text/javascript" src="client_asset/js/jquery.simpleLens.js"></script>
<!-- slick slider -->
<script type="text/javascript" src="client_asset/js/slick.js"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="client_asset/js/nouislider.js"></script>
<!-- Custom js -->
<script src="client_asset/js/custom.js"></script>
@yield('script')
@include('layout.logInModalScript')
<script>
    $(document).ready(function () {
        var $filter = $('#menu');
        var $filterSpacer = $('<div />', {
            "class": "vnovernight",
            "height": $filter.outerHeight()
        });
        <!-- var $down-menu = $('#menu-js-digital,#menu-js-home,#menu-js-kids,#menu-js-men,#menu-js-sports,#menu-js-women'); -->
        if ($filter.size())
        {
            $(window).scroll(function ()
            {
                if (!$filter.hasClass('fix') && $(window).scrollTop() > $filter.offset().top)
                {
                    $filter.before($filterSpacer);
                    $filter.addClass("fix");
                    $("#aa-search").fadeToggle(300,'swing');
                    $("#aa-cartbox-menu").fadeToggle(300,'swing');
                    <!-- $('#menu-js-digital,#menu-js-home,#menu-js-kids,#menu-js-men,#menu-js-sports,#menu-js-women').css('margin-top','15px');		 -->
                }
                else if ($filter.hasClass('fix')  && $(window).scrollTop() <= $filterSpacer.offset().top)
                {
                    $filter.removeClass("fix");
                    $filterSpacer.remove();
                    $("#aa-search").fadeToggle(0,'linear');
                    $("#aa-cartbox-menu").fadeToggle(0,'linear');
                    <!-- $('#menu-js-digital,#menu-js-home,#menu-js-kids,#menu-js-men,#menu-js-sports,#menu-js-women').css('padding-bottom','15px');		 -->
                }
            });
        }

        $('#subscribe').click(function (e) {
            e.preventDefault();
            var email = $('#emailSubscribe').val();
            var _token = $('input[name="_token"]').val();
            var email_regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if(email_regex.test(email) == true){
                $.ajax({
                    url: "{{route('postSubscribe')}}",
                    method: 'POST',
                    data: {email:email, _token:_token},
                    dataType: 'json',
                    success: function () {
                        Swal.fire(
                            'Thank for your subscribe!',
                            '',
                            'success',
                        );
                        $('#emailSubscribe').val('');
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
            }else{
                $('#emailSubscribe').css('border', '1px solid #ff6666')
                $('#emailSubscribe').mouseleave(function () {
                    $(this).css('border', '');
                })
            }
        })
    })

    jQuery(".aa-cartbox-menu").hover(function(){
            jQuery(this).find(".aa-cartbox-summary-menu").fadeIn(500);
        }
        ,function(){
            jQuery(this).find(".aa-cartbox-summary-menu").fadeOut(500);
        }
    );
</script>
</body>
@yield('css')
</html>
