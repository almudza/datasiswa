          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#the-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Siswa</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="the-navbar-collapse">
              <ul class="nav navbar-nav navbar-right">

              {{-- link active --}}
{{--                 @if (!empty($halaman) && $halaman == '/')
                  <li class="active"><a href="{{ url('/') }}">Home
                   <span class="sr-only">(current)</span></a></li>
                @else
                  <li><a href="{{ url('/') }}">Home</a></li>
                @endif --}}

                @if (!empty($halaman) && $halaman == 'siswa')
                  <li class="active"><a href="{{ url('admin/siswa') }}">Siswa
                  <span class="sr-only">(current)</span></a></li>
                @else
                  <li><a href="{{ url('admin/siswa') }}">Siswa</a></li>
                @endif
{{-- 
                @if (!empty($halaman) && $halaman == 'about')
                  <li class="active"><a href="{{ url('about') }}">About
                  <span class="sr-only">(current)</span></a></li>
                @else
                  <li><a href="{{ url('about') }}">About</a></li>
                @endif --}}
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container -->