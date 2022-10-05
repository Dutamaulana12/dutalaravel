<!doctype html>
<html lang="en">
  <head>
  	<title>@yield('judul')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/yondak.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url('images/aizen1.jpg');"></div>
	  				<h3>Duta Maulana</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li>
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Nilai Siswa Kelas 1</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="/kelas1a">Kelas 1A</a>
                </li>
                <li>
                    <a href="/kelas1b">Kelas 1B</a>
                </li>
                <li>
                    <a href="/kelas1c">Kelas 1C</a>
                </li>
	            </ul>
          </li>
          <li>
			  <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Nilai Siswa Kelas 2</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="/kelas2a">Kelas 2A</a>
                </li>
                <li>
                    <a href="/kelas2b">Kelas 2B</a>
                </li>
                <li>
                    <a href="/kelas2c">Kelas 2C</a>
                </li>
              </ul>
	          </li>
          <li>
              <a href="/users">Users</a>
          </li>
          <li>
            <a href="/kontak">Contact</a>
          </li>
          <li>
			  <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
            		  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
            	</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
          </li>
        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by Duta Maulana
	        </div>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        @yield('isi')
      </div>
		</div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>