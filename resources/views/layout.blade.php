<!DOCTYPE html>
  <html>
    <head>
      <!-- Add FavIcon -->
      <link rel="shortcut icon" href="{{ asset('b_logo_icon.ico') }}">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
      <!-- Import SWAL CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('sweetalert-master/dist/sweetalert.css') }}">
      <!-- Import custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="grey lighten-4">
      <!-- Navbar -->
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper teal darken-2">
            <a href="/" class="brand-logo" style="padding-left:10px">Bhinneka - Promotion Abuse</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="/compare">Compare</a></li>
              <li><a href="/import">Import</a></li>
              <li><a href="/transactions/index">Transactions</a></li>
              <li><a href="/config">Config</a></li>
            </ul>
          </div>
        </nav>
      </div>

      <!-- Main -->
        @yield('content')
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

      <script src="{{asset('sweetalert-master/dist/sweetalert.min.js')}}"></script>

      @include('messages')

      @include('config')

      <script src="{{ asset('js/app.js') }}"></script>

      <script type="text/javascript">
        var progress = document.getElementById("progress");

        window.addEventListener('load', function(){
        progress.style.display = 'none';
        });

        $(document).ready(function(){
          $('input#mobile_one').formatter({
            'pattern': '({{9999}})-{{999}}-{{999}}-{{999}}',
            'persistent': true
          });

          $('.modal').modal();

          $('#btn_compare').click(function(){
            progress.style.display = 'block';
          });

          $('#btn_dummy').click(function(e){
            e.preventDefault();
            $('label').addClass('active');
            $('#member_address_one').val('Jl. Diponegoro no: 1');
            $('#shipping_address_one').val('Jl. Diponegoro no: 1');
            $('#payment_one').val('437451**5211');
            $('#mobile_one').val('0811200756');
            $('#member_email_one').val('malim269@hotmail.com');
            $('#order_email_one').val('malim269@hotmail.com');

            $('#member_address_two').val('Taman Duta Mas CIB / 4');
            $('#shipping_address_two').val('Metro Jewelry Gd. Cikini Gold Center Lt. LG 029 Jl. Pegangsaan Timur 9');
            $('#payment_two').val('415735xxxxxx0074');
            $('#mobile_two').val('08159660230');
            $('#member_email_two').val('ikj83@yahoo.com');
            $('#order_email_two').val('ikj83@yahoo.com');
          })
        });
      </script>
    </body>
  </html>
