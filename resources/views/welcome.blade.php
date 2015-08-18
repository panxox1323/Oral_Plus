<html>
	<head>
        <title>Cl&iacute;nica Denatl Oral Plus</title>
        <link rel=icon href=favicon.png sizes="16x16" type="image/png">
        {!!  Html::style('css/app.css') !!}
        {!! Html::style('css/style.css') !!}
        {!! Html::style('css/awesome/css/font-awesome.css') !!}
        {!!  Html::script('js/jquery.js') !!}
        {!!  Html::script('js/bootstrap.min.js') !!}
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">


	</head>
	<body>
		<header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <h1 class="navbar-brand navbar_">
                            <div class="col-md-2 col-sm-2 col-xs-2">
                                <img src="{{ asset('img/logo.jpg') }}" alt="Logo de la compa&nacute;ia">
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-10 arreglo">
                                <h3><strong>Cl&iacute;nica dental Oral Plus</strong></h3>
                            </div>
                        </h1>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6   follow-box">
                        <div class="box2">
                            <ul>
                                <li>
                                    <a href="#!" class="fa fa-facebook" target="_blank"></a>
                                </li>
                            </ul>
                            <p class="tel">
                                <span class="fa fa-phone"></span>
                                1234567890
                            </p>
                        </div>
                        <div class="box1">
                            <p>
                                <a href="">
                                    <strong>Contacte</strong>
                                </a>
                                con nosotros,<br>
                                o pidanos una
                                <a href="">
                                    <strong>cita</strong>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="menu-box">
                    <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
                        <ul class="nav sf-menu clearfix sf-js-enabled sf-arrows">
                            <li class="">
                                <a href="inicio.aspx">Inicio</a>
                            </li>
                            <li class="">
                                <a href="tratamientos.aspx">Tratamientos</a>
                            </li>
                            <li class="">
                                <a href="instalaciones.aspx">Instalaciones</a>
                            </li>
                            <li class="">
                                <a href="cita.aspx">Cita</a>
                            </li>
                            <li class="">
                                <a href="contacto.aspx">Contacto</a>
                            </li>
                            <li class="pull-right">
                                <a href="auth/login" class="pull-right">Iniciar Sesi&oacute;n</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <script src="js/bootstrap.min.js"></script>
        <meta content="width=device-width,initial-scale=1.0,user-scalable=0" name="viewport">
        <script>

            $(window).load(function () {
                var curAccord = 0;
                var oldAccord = 0;

                $('._accodList').find('p').slideUp(1);
                $('._accodList').find('._plus').addClass('btnBg1');
                $('._accodList').find('h6').addClass('color1');

                setTimeout(function () {
                    $('._accodList > li').eq(0).find('._plus').removeClass('btnBg1');
                    $('._accodList > li').eq(0).find('._plus').addClass('btnBg2');
                    $('._accodList > li').eq(0).find('p').slideDown();
                    $('._accodList > li').eq(0).find('h6').addClass('color2');
                }, 200)

                $('._accodList').find('._plus, h6').click(
                        function () {
                            if (curAccord !== $(this).parent().index()) {
                                oldAccord = curAccord;
                                curAccord = $(this).parent().index();

                                $('._accodList > li').eq(curAccord).find('._plus').removeClass('btnBg1');
                                $('._accodList > li').eq(curAccord).find('._plus').addClass('btnBg2');
                                $('._accodList > li').eq(curAccord).find('h6').removeClass('color1');
                                $('._accodList > li').eq(curAccord).find('h6').addClass('color2');
                                $('._accodList > li').eq(curAccord).find('p').slideDown();

                                $('._accodList > li').eq(oldAccord).find('._plus').removeClass('btnBg2');
                                $('._accodList > li').eq(oldAccord).find('._plus').addClass('btnBg1');
                                $('._accodList > li').eq(oldAccord).find('h6').removeClass('color2');
                                $('._accodList > li').eq(oldAccord).find('h6').addClass('color1');
                                $('._accodList > li').eq(oldAccord).find('p').slideUp();
                            }

                        }
                )
            })
        </script>
        <a id="toTop" href="#" style="margin-right: -51px; right: 50%; display: block;">
            <span id="toTopHover"></span>
        </a>
        {!!  Html::script('js/jquery.js') !!}
        {!!  Html::script('js/bootstrap.min.js') !!}
	</body>
</html>
