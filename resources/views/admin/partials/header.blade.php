<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin">
                <strong>Oral Plus</strong>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="header-posicion"><a href="{{ route('admin.userPerfil.index') }}" class="pull-right"><span class="icon-profile4"></span><strong> Perfil de {{ Auth::user()->first_name.' '.Auth::user()->last_name }}</strong></a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="/auth/logout"><span class="icon-enter"></span><strong> Cerrar Sesi&oacute;n</strong></a></li>

            </ul>
        </div>
    </div>
</nav>