<nav class="navbar fixed-top navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Agu C. Christopher</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>  
  <li class="nav-item">
          <a class="nav-link" href="#">Skills</a>
  <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>  
        </li> 
  <li class="nav-item">
          <a class="nav-link" href="#"> <i class="bi bi-github"></i> </a>
        </li>  
        </li>  
 <li class="nav-item">
          <a class="nav-link" href="https://facebook.com/lrc.agu.don/"><i class="bi bi-facebook"></i></a>
        </li>  
 <li class="nav-item">
          <a class="nav-link" href="#"> <i class="bi bi-twitter"></i></a>
        </li>
        <li class="nav-item">
  </li>
      </ul>
    </div>
  </div>
</nav>
<br />
<br />
<div class="container-fluid">
<div class="d-flex">
        <div class="form-check form-switch ms-auto mt-3 me-3">
          <label class="form-check-label ms-3" for="lightSwitch">
            <i class="bi bi-sun"></i>
          </label>
          <input class="form-check-input" type="checkbox" id="lightSwitch" />
        </div>
      </div>
<div class="row">
 <div class="col-sm-6">
<div class="jumbotron">
  <br />
 <div class="container-fluid">
    <h1 class="intro">Hi,</h1>
	<div class="intro">
<h1 id="type"></h1> <script>     var string = "am Christopher a Web Developer Thanks For Visiting \n Thank You.... ";     var array = string.split("");     var timer;
    function looperr() {       if (array.length > 0) {         document.getElementById("type").innerHTML += array.shift();       } else {         clearTimeout(looperr);       }       timer = setTimeout('looperr()', 50);     }     looperr();   </script>
	</div>

 <p><a href="#me" class="btn btn-primary btn-lg" role="button">
 Learn more <i class="bi bi-arrow-right-circle"></i></a>
 </p>
</div>
  </div>

</div>
  <div class="col-sm-6">
    <img class="img-fluid" src="images/2.jpg" alt="" />
  </div>
 </div>
</div>
<br />
<hr />
<div class="container-fluid">
<div id="contact">
<form action="php/form.php" method="get" accept-charset="utf-8">
  <h4 class="center">Contact Form</h4>
    <input type="text" name="sender" id="" class="form-control" placeholder="Your Full Name" />
    <br />
    <input type="number" name="phone" placeholder="Phone Number" class="form-control"value="" />
    <br />
    <textarea name="message" class="form-control" name="message" placeholder="Message..." rows="8" cols="40"></textarea>
    <br class=""/>
    <button style="float:right;" class="btn btn-primary btn-xs" type="submit"><i class="bi bi-send-fill"></i></button>
</form>
</div>
</div>
<br />
<br />
<br />
<hr />
<div class="">
<h4 class="intro center">My Projects</h4>
<div id="demo" class="carousel slide" data-bs-interval="5000" data-bs-ride="carousel">
<!--Indicators/dots --> 
<div class="carousel-indicators">     
<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button> 
</div>
<!--The slideshow/ carousel --> <div class="carousel-inner">     <div class="carousel-item active"> <img src="images/1.jpg" alt="Los Angeles" class="d-block w-100"> </div> <div class="carousel-item"> <img src="images/code.png" alt="2" class="d-block w-100"> </div> <div class="carousel-item">
   <img src="images/1.jpg" alt="New York" class="d-block w-100"> </div>
   </div>
<!--Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">   
<span class="carousel-control-prev-icon"></span> 
</button> 
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next"> 
<span class="carousel-control-next-icon"></span>
</button>
</div>
</div>
<hr />
<div class="container">
  <div class="row">
    <div class="col-sm-4">
<div id="me"class="card">
 <img class="card-img-top rounded" src="images/me.jpg" height="250" width="250"
 alt="Media Object">
</div>
    </div>
 <div class="col-sm-8">
 <div class="card-body">
   <br />
 <h4 class="card-title">About Me</h4>
<h4 id="typeb"></h4> <script>     var strings = "Hi am Agu C. Christopher a web developer am 14+ years old am a Nigerian and hail from Umuota village in Umuhu Community in Imo State. \n  \n I love coding and watching  movies  \n\n I currently code with Html, Css, Bootstrap, Php and Mysql. \n \n Thanks For Reading ";
 var arrayy = strings.split("");     var timer;
    function looper() {       if (arrayy.length > 0) {         document.getElementById("typeb").innerHTML += arrayy.shift();       } else {     
    clearTimeout(looper); 
    } 
    timer = setTimeout('looper()', 10);     
    }     
    looper();   
    </script>
    <hr />
 </div>
 </div>
  </div>
</div>
<script src="js/index.js"></script>
<div class="skills">
  
</div>
</body>
</html>