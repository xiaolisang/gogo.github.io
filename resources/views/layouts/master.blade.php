<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>走着！来一次说走就走的旅行</title>

  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">  
  <link href="{{asset('css/flexslider.css')}}" rel="stylesheet">
  <link href="{{asset('css/templatemo-style.css')}}" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  @section('nav')
  


      <div class="tm-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
            <a href="#" class="tm-site-name">走着！<small>来一次说走就走的旅行！</small></a>  
          </div>
          <div class="col-lg-6 col-md-8 col-sm-9">
            <div class="mobile-menu-icon">
                  <i class="fa fa-bars"></i>
                </div>
            <nav class="tm-nav">
            <ul>
              <li><a href="{{url('index/index')}}">首页</a></li>
              <li><a href="{{url('forum/index')}}">逛论坛</a></li>
              <li><a href="{{url('diary/index')}}">在路上</a></li>
              <li><a href="{{url('way/index')}}">下一站</a></li>
              <script src="{{asset('js/jquery-1.9.1.min.js')}}"></script>

              <script>
                $(function(){
                  var nav=$(".tm-nav ul li a")
                  console.log(nav)
                  for (var i = 0; i < nav.length; i++) {
                    //console.log(nav.eq(i).attr('href'))
                      if ('{{"http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']}}'==nav.eq(i).prop('href')) {
                       nav.eq(i).addClass('active')
                      };
                  };
                      

                })


              </script>

            </ul>
          </nav>    
          </div>        
        </div>
      </div>      
    </div>
@show

   @yield('slide')
   @yield('cement')
   @yield('content')

 </html>