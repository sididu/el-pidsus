@include('layouts.head')
  <body>
  @include('layouts.penuntutan_mainnav')
  <div class="wrapper">
    <div class="content-wrapper">
      <div class="content-header">
          @include('layouts.penuntutanheader')
          
      </div> 

      <div class="content">
       <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title text-uppercase">@yield('judulhalaman')</h3>
        </div>
        <div class="box-body">


          @yield('materi')

        </div>
        <div class="panel-footer">Panel footer</div>
      </div><!-- /.box -->
    </div><!-- /.content -->

  </div><!-- /.content-wrapper -->
  @include('layouts.footer')
</div><!-- /.wrapper -->

    @yield('script')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Latest compiled and minified JavaScript -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    </body>
</html>
