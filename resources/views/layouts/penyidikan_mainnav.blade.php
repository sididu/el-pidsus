  <nav class="navbar navbar-primary">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home">el-<strong>PID</strong>SUS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="rp1">PENYIDIKAN</a></li>
        <li><a href="master_penuntutan">PENUNTUTAN</a></li>
 <!--               <li><a href="#">EKSEKUSI</a></li>
         -->       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Profil</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Wilayah Hukum <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Kejaksaan Agung</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Kejaksaan Tinggi DKI</a></li>
            <li><a href="#">Kejaksaan Tinggi Bali</a></li>
            <li><a href="#">Kejaksaan Tinggi Kalimantan Timur</a></li>
          </ul>
        </li>
        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>