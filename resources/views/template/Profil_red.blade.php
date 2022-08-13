<style>
    .img-prof{
    margin-block-start: -6em;
    border: solid;
    border-radius: 12px;
    width: 10em;
    margin-inline-start: 3em;
}
.job{
    margin-inline-start: 14em;
    margin-block-start: -3.6em;
}
.Profil_div{
    border: solid;
    border-radius: 7px;
    width: 44em;
    margin-inline-start: 8em;
    height: 10em;
    margin-block-end: 1em;
    padding: 10px;
}
.btn_pmang{
  float: right;
    margin-block-start: -5em;
    margin-inline-end: 2em;
    border: solid;
    border-width: 1;
    border-radius: 15px;
    width: 10em;
    text-align: center;
}
.btn_proj{
  float: right;
    margin-block-start: -3em;
    margin-inline-end: 2em;
    border: solid;
    border-width: 1;
    border-radius: 15px;
    width: 10em;
    text-align: center;
}
.Projet_Profil{
    border: solid;
    border-radius: 7px;
    width: 44em;
    margin-inline-start: 8em;
    margin-block-end: 1em;
    padding: 10px;
}
.skills_div{
    
}
</style>
<title>{{$inputs['username']}}</title>

<link rel="stylesheet" href="{{asset('css\style2.css')}}">
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

    <body>
        <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner" style="margin-block-end: 0em">

            <div class="container" style="">
              <div class="row align-items-center">
                
                <div class="col-11 col-xl-2">
                  <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0" style="font-family:'Rakkas', cursive;">Freeلانسي<span class="text-primary">.</span> </a></h1>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                  <nav class="site-navigation position-relative text-right" role="navigation">
      
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                      <li><a href="{{url('/')}}" class="nav-link">Home</a></li>
                     
                      
                      <li><a href="#blog-section" class="nav-link">Registraion</a></li>
                      <li><a href="#contact-section" class="nav-link">Contact</a></li>
                    </ul>
                  </nav>
                </div>
      
      
                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
      
              </div>
            </div>
            
          </header>
    </body>
<div class="header">
  <h1 id="welcome">Welcome {{$inputs['username']}} </h1>
</div>
<img  class="img-prof"src="{{asset('images\img-profil.png')}}" >
<p class="job" id="JOB">{{$inputs['Job']}}</p>

<img src="{{asset('images\img-location.png')}}" style="height: 32px;margin-inline-start: 13.3em;margin-block-start: -14px;" >
<p style="margin-inline-start: 15em;margin-block-start: -27px;" id="ADRESS">{{$inputs['Adress']}}</p>
<a class="btn_pmang" onclick="AffMenuModif()">Profil Management</a>
<a class="btn_proj" href="{{url('projets')}}">Projects </a>
<hr>
<h3 style="margin-inline-start: 5em">Profil</h3>
    <div class="Profil_div" cols="30" rows="8">
      @php
        $desc=$_POST["desc"];
        echo $desc;
      @endphp
    </div>
    <h3 style="margin-inline-start: 5em">Suitable Project</h3>
    <div class="Projet_Profil">
      <div>
        <p><b><a href="">Application compteur calorie <-> cryptomonnaie pour salle de sport</a></b></p>
        <p>
          We are looking for a freelancer to develop an application that would calculate the number of calories spent with his smartphone (android and apple) and create a cryptocurrency of our brand and then reward the efforts of our...</p>
      </div>
      <hr>
      <div>
        <p><b><a href="">Hidden Project</a></b></p>
        <p>The project leader has chosen to hide his project. Only subscribing service providers can access it.</p>
      </div>
    </div>

    @if ($inputs['Pays']=='Tunis')
    <img src="images\drap1.jpg"  style="margin-inline-start: 79.6em;width:2em;margin-block-start: -41.4em;">
    @endif

  @if ($inputs['Pays']=='UK')
       <img src="images\drap2.png"  style="margin-inline-start: 79.6em;width:2em;margin-block-start: -41.4em;">
  @endif


  <?php 
  if (isset($_POST['php'])){
    $php='#'.$_POST['php'].'<br>';
  }else{$php='';}

  if (isset($_POST['java'])){
    $java='#'.$_POST['java'].'<br>';
  }else{$java='';}

  if (isset($_POST['c'])){
    $c='#'.$_POST['c'].'<br>';
  }else{$c='';}

  if (isset($_POST['js'])){
    $js='#'.$_POST['js'].'<br>';
  }else{$js='';}

  if (isset($_POST['html'])){
    $ht='#'.$_POST['html'].'<br>';
  }else{$ht='';}

  if (isset($_POST['py'])){
    $py='#'.$_POST['py'].'<br>';
  }else{$py='';}

  if (isset($_POST['mb'])){
    $mb='#'.$_POST['mb'].'<br>';
  }else{$mb='';}

  if (isset($_POST['vg'])){
    $vg='#'.$_POST['vg'].'<br>';
  }else{$vg='';}

  if (isset($_POST['apex'])){
    $apex='#'.$_POST['apex'].'<br>';
  }else{$apex='apex';}

  if (isset($_POST['mysql'])){
    $sql='#'.$_POST['mysql'].'<br>';
  }else{$sql='';}

  if (isset($_POST['os'])){
    $os='#'.$_POST['os'].'<br>';
  }else{$os='';}

  if (isset($_POST['3D'])){
    $D='#'.$_POST['3D'].'<br>';
  }else{$D='';}

  if (isset($_POST['logo'])){
    $logo='#'.$_POST['logo'].'<br>';
  }else{$logo='';}

  if (isset($_POST['photoshop'])){
    $photoshop='#'.$_POST['photoshop'].'<br>';
  }else{$photoshop='';}

  
  ?>
  <div class="skills-div" style="border: solid;border-radius: 6px;border-width: 3px;margin-inline-start: 82em;margin-block-start: -33em;width: 10em;">
    <u><b>skills</b></u>
   @php
       echo "<p> $php $java $c $js $ht $py $mb $vg $apex $sql $os $D $logo $photoshop  </p>";
   @endphp 
  </div>


  <div style="border: solid;border-radius: 4px;width: 22em;margin-inline-start: 57em;margin-block-start:-15em;display:none;background-color:snow;border-width:2" id="menu-modif" >
    <h3><b>Modification</b></h3>
   <!-- <label for="fname" >First Name</label>
    <input type="text" name="fname" id="fname"style="border-radius: 12px;margin-inline-start: 2em;"><br>
    <label for="lname" >Last Name</label>
    <input type="text" name="lname" id="lname"style="border-radius: 12px;margin-inline-start: 2em;"><br>-->
    <label for="lname" >username</label>
    <input type="text" name="username" id="username"style="border-radius: 12px;margin-inline-start: 2.3em;"><br>
    <label for="adress">Adress</label>
    <input type="text" name="adress" id="adress"style="border-radius: 12px;margin-inline-start: 3.7em;"><br>
    <label for="pwd">Password</label>
    <input type="password" name="pwd" id="pwd"style="border-radius: 12px;margin-inline-start: 2.4em;"><br>
    <label for="job">Job</label>
    <input type="text" name="Job" id="job"style="border-radius: 12px;margin-inline-start: 5em;"><br>
    <a href="{{url('/')}}">Delete Profil</a>
    <button onclick="modif()" style="background: transparent;border-radius: 15px;border-color: #32dbc6;width: 6em;">Save</button>
  </div>

  
  
<script>
  function AffMenuModif(){
document.getElementById('menu-modif').style.display="Block";
}
function modif(){
 //fname=document.getElementById('fname').value;
 //lname=document.getElementById('lname').value;
 username=document.getElementById('username').value;
 adress=document.getElementById('adress').value;
 job=document.getElementById('job').value;
document.getElementById('welcome').innerHTML="welcome "+username;
document.getElementById('ADRESS').innerHTML=adress;
document.getElementById('JOB').innerHTML=job;
}

</script>












