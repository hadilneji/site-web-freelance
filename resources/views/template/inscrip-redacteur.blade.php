
@foreach ($_POST as $key=>$val)
    ${$key}=$val;
$erreur="";
@if (isset($valider)){
    @if(preg_match("#^[a-zA-Z ]+#",$fname)){
      $erreur="First name wrong";
    }@endif
}@endif
    
@endforeach

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
    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner" style="margin-block-end: -1em">

        <div class="container" style="">
          <div class="row align-items-center">
            
            <div class="col-11 col-xl-2">
              <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0" style="font-family:'Rakkas', cursive;">Freeلانسي<span class="text-primary">.</span> </a></h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right" role="navigation">
  
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li><a href="{{url('/')}}" class="nav-link">Home</a></li>
                  <li>
                    <a href="{{url('/')}}" class="nav-link">Services</a>
                  </li>
                 
                  <li><a href="#blog-section" class="nav-link">Registraion</a></li>
                  <li><a href="#contact-section" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>
  
  
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
  
          </div>
        </div>
        
      </header>
    <!--<h1>Registraion </h1>-->
    <hr style="margin-inline-end: 0em">
<div class="registration-div">
    <form action="{{Route("store")}}" method="POST">
        @csrf
        <u><h2>Select your statue</h2></u>
        <button style="font-size: 20px;background-color: #32dbc6;border-radius: 4px;border-width: 1;">Freelancer</button>
        <button style="font-size: 20px;background-color: #32dbc6;border-radius: 4px;border-width: 1;" onclick="client()">Client</button>
        <hr>
        <u><h2>Personnal Information</h2></u>
        <label for="First Name"> First Name</label><br>
        <input class="in" type="text" id="FirstName" name="FirstName" placeholder="First Name" required><br>

        <label for="Last Name"> Last Name</label><br>
        <input class="in" type="text" id="LastName" name="LastName" placeholder="Last Name" required><br>

        <label for="birthday"> Date Of Birth</label><br>
        <input class="in" type="date" id="Birth" name="Birth" placeholder="xx/xx/xx" required><br>

        <label for="Adresse">Adress</label><br>
        <input class="in" type="text" id="Adress" name="Adress" placeholder="Adress" required><br>

        <label for="Mail">E-Mail</label><br>
        <input class="in" type="email" id="Mail" name="Mail" placeholder="example.example@example.example" required><br>

        <label for="CIN">National Identity Card</label><br>
        <input class="in" type="number" id="cin" name="cin" placeholder="xx xx xx xx" required><br>

        <label for="First Name">Country</label><br>
        <select name="Pays" style="width: 19em;font-size:19px; margin-block-start:6px;height:2.3em;border-radius:6px;margin-block-end:8px;">
            <option value="Tunis">Tunisie</option>
            <option value="UK">UK</option>
        </select><br>

        <label for="job" id="job label" style="margin-inline-start: 28em;margin-block-start:-42em">Job</label><br>
        <input class="in" type="text" id="Job" name="Job" placeholder="Job" style="margin-inline-start: 30em;margin-block-start:-41.4em" required><br>

        <label for="bank" id="bank label"  style="margin-inline-start: 28em;margin-block-start:-18em">Bank Acount</label><br>
        <input class="in" type="number" id="bank" name="bank" placeholder="Bank Account Number" style="margin-inline-start: 30em;margin-block-start:-16.4em" required><br>

        <label for="cv" id="cvLabel"style="margin-inline-start: 28em;position: absolute; margin-block-start: -35.4em;"> Curriculum vitae</label><br>
        <input class="in"  id="cv" name="cv" type="file" placeholder="CV" style="margin-inline-start: 30em;margin-block-start: -37em" required><br>
    
        <label for="usernaame" id="usLabel" style="margin-inline-start: 28em;margin-block-start:-31.4em">Username</label><br>
        <input class="in" type="text" id="username" name="username" placeholder="Choose a username" style="margin-inline-start: 30em;margin-block-start:-30.7em" required><br>

        <label for="Password" id="pwdLabel" style="margin-inline-start: 28em;margin-block-start:-25.4em">Password</label><br>
        <input class="in" type="password" id="Pwd" name="Pwd" placeholder="Choose a Password" style="margin-inline-start: 30em;margin-block-start:-24.6em" required><br>
        <hr>
        <u><h2>About</h2></u>
        <label for="desc">Description</label><br>
        <textarea style="border-radius: 6px" id="desc" name="desc" cols="60" rows="6" placeholder="Describe yourself"></textarea><br>
        <label for="skills"> <p onclick="affichage()" id="comp">Skills</p> </label><br>
        <div class="container-chbx" id="skills" style="display: none">
            <h3>Programming/Developpement</h3>
            <input class="in2" type="checkbox" name="php" value="php"/> PHP <br />
            <input class="in2" type="checkbox" name="java" value="java"/> JAVA<br />
            <input class="in2" type="checkbox" name="c" value="c"/> C++/C#/C <br />
            <input class="in2" type="checkbox" name="js" value="js"/> JavaScript <br />
            <input class="in2" type="checkbox" name="html" value="html"/> HTML/CSS/XML... <br />
            <input class="in2" type="checkbox" name="python" value="python"/> Python <br />
            <input class="in2" type="checkbox" name="mobile" value="mobile"/> Creating Mobile Apps(Android/iPhone) <br />
            <input class="in2" type="checkbox" name="vg" value="vg"/> Video Games <br />
                  <hr style="margin-inline-end: 2em">
            <h3>DataBase Management</h3>
            <input class="in2" type="checkbox" name="apex" value="apex"/> Oracle Apex <br />
            <input class="in2" type="checkbox" name="mysql" value="mysql"/> MYSQL <br />
            <hr style="margin-inline-end: 2em">
            <h3>Operating Systems</h3>
            <input class="in2" type="checkbox" name="os" value="os"/> Linux/MacOs/Windows... <br />
            <hr style="margin-inline-end: 2em">
            <h3>Graphics</h3>
            <input class="in2" type="checkbox" name="3D" value="3D"/> 3D Animation <br />
            <input class="in2" type="checkbox" name="logo" value="logo"/> Logo <br />
            <input class="in2" type="checkbox" name="photoshop" value="photoshop"/> Photoshop <br /> 
        </div><br>
            <input type="submit" name="valider" value="register" style="margin-inline-start: 8em;background-color: #32dbc6;border-radius: 12px;font-size: larger;width: 6em;height: 2em;
            position: relative;" >
    </form>
    <div class="img-container" id="img">
        <img src="images\img_7.jpg" alt="">
    </div>
    <div class="tips-container" id="noir" >
    </div>
    <div class="tips">
        <h2>Tips For Registration </h2>
        <h3>Contact</h3>
        <p>In case you are put in touch with a client, we will send them your details so that they can contact you directly.</p>
        <h3>Skills</h3>
        <p>Be as exhaustive as possible, you will receive project alerts according <br> to your areas.</p>
        <h3>Presentation</h3>
        <p>Describe yourself without reservation! Your description is a very important element in the eyes of project leaders.</p>
    </div>
</div>
<script>
    function affichage(){
        document.getElementById("skills").style.display = "block";
    }
    function client(){
        document.getElementById("comp").innerHTML="Expertise"
        document.getElementById("job label").innerHTML="domain"
        document.getElementById('bank label').style.display='none'
        document.getElementById('bank').style.display='none'
       
  
        
        
    }
    function free(){
        document.getElementById("comp").innerHTML="Skills"
        document.getElementById("job label").innerHTML="Job"
        document.getElementById("bank label").style.display="block"
        document.getElementById("bank").style.display="block"
  


        
    }
</script>

</body>
