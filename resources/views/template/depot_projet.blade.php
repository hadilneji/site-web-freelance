<style>

    input{
    width: 16em;
    border-radius: 6px;
    border-width: 1;
    }
</style>
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

<header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center">
        
        <div class="col-11 col-xl-2">
          <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0" style="font-family:'Rakkas', cursive;">Freeلانسي<span class="text-primary">.</span> </a></h1>
        </div>
        <div class="col-12 col-md-10 d-none d-xl-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li>
                <a href="{{url('/')}}"  class="nav-link">Home</a>
              </li>
              <li><a href="{{url('/users')}}" class="nav-link">Registraion</a></li>
            </ul>
          </nav>
        </div>


        <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

      </div>
    </div>
    
  </header>

  <div style="border: solid;text-align: center;margin-inline: 18em;border-radius: 2em;MARGIN-BLOCK-START: 3em;">
      <h3>Submit Project</h3>
      <form action="{{Route('store1')}}" method="POST" style="margin-inline-start: -10em;">
        @csrf
      <label for= "project title"style="margin-inline-end:8em">Project title</label>
      <input type="text" name="titre"><br>

      <label for= "project id"style="margin-inline-end:9em">Project id</label>
      <input type="text"name="id_pr"><br>

      <label for= "Price"style="margin-inline-end:6em">Project price DT</label>
      <input type="number"name="prix_pr"><br>

      <label for= "project descr"style="margin-inline-end:4.8em">Project description</label>
      <textarea name="descrprojet"  cols="30" rows="6"></textarea><br>

      <label for= "delai"style="margin-inline-end:9em">Time limit</label>
      <input type="date" name="limit"><br>

      <input type="submit" value="Submit your project" style="margin-inline-start: 14em;margin-block-start: 4em;">
    </form>


  </div>