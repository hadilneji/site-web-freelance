
<link href="{{asset("https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900")}}" rel="stylesheet">
    <link href="{{asset("https://fonts.googleapis.com/css2?family=Rakkas&display=swap")}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("fonts/icomoon/style.css")}}">

    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/jquery-ui.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css")}}">

    <link rel="stylesheet" href="{{asset("css/jquery.fancybox.min.css")}}">

    <link rel="stylesheet" href="{{asset("css/bootstrap-datepicker.css")}}">

    <link rel="stylesheet" href="{{asset("fonts/flaticon/font/flaticon.css")}}">

    <link rel="stylesheet" href="{{asset("css/aos.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("style.css")}}">

<body style="text">
    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner" style="margin-block-end: 1em; border-bottom: solid;border-width: 1">        
        <div class="container" style="">
            <div class="row align-items-center">
              
              <div class="col-11 col-xl-2">
                <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0" style="font-family:'Rakkas', cursive;">Freeلانسي<span class="text-primary">.</span> </a></h1>
              </div>
              <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">
    
                  <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li><a href="{{url('/')}}" class="nav-link">Home</a></li>
                    <li><a href="{{url('/users')}}" class="nav-link">Registraion</a></li>
                  </ul>
                </nav>
              </div>
    
    
              <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
    
            </div>
          </div>
    </header>
    <h3 style="MARGIN-INLINE-START: 23em;margin-block: 1px;">All about Projects</h3> 
<div style="border: solid;padding-inline-start: 12em;padding-block-start: 2em;margin-inline: 18em;border-radius: 12px;height: 30em;margin-block-start: 2em;">

  <h3 style="MARGIN-INLINE-START: -6em;margin-block: 5px;margin-block-start: -8px;">Completed Projects</h3>

<table border="1" style="WIDTH: 57em;height: 13em;margin-inline-start: -10.6em;TEXT-ALIGN: CENTER;">
    <tr><th>id</th><th>title</th><th>price DT</th><th>description</th><th>date of shipping</th></tr>
@foreach ($projet as $projet)
    <tr>
        <td>{{$projet->getId()}}</td>
        <td><a onclick="click()">{{$projet->getTitle()}}</a></td>
        <td>{{$projet->getPrix()}}</td>
        <td>{{$projet->getDescr()}}</td>
        <td>{{$projet->getDelai()}}</td>
        <td><a href="">Revise the project </a></td>
    </tr>
@endforeach
</table>
<h3 style="MARGIN-INLINE-START: -6em;margin-block: 10px;">Check new Projects</h3>
<table border="1" style="WIDTH: 57em;height: 5em;margin-inline-start: -10.6em;TEXT-ALIGN: CENTER;">
  <tr><th>id</th><th>title</th><th>price DT</th><th>Project Description</th><th>date of shipping</th><th>Apply For The Project</th></tr>
  <tr>
    <td>
      @if(!empty($input['id_pr']))
      {{$input['id_pr']}}
       @endif
    </td>
    <td>
      @if(!empty($input['titre']))
      {{$input['titre']}}
      @endif
    </td>
    <td>
      @if(!empty($input['prix_pr']))
      {{$input['prix_pr']}}
      @endif
    </td>
    <td>
      @if(!empty($input['descrprojet']))
      {{$input['descrprojet']}}
    @endif
    </td>
    <td>
    @if(!empty($input['limit']))
    {{$input['limit']}}
    @endif
  </td>
  <td>
    <a href="">Yes</a>
  </td>
   </tr>
</table>
</div>
</body>
  
 