<?php if(isset($_POST["submit"])) {

$to = "mushel@gmail.com";
$subject = "Message From VSP Finance";
$email = $_POST["email"];
$name = $_POST["name"];
$msg = $_POST["msg"];

$headers = "From: keith@vspfinance.com";
$mailBody="Name: $name\nEmail: $email\n\n$msg";

mail($to,$subject,$mailBody,$headers);
$thankYou="Your message has been sent.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>VSP Finance</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <link href="https://fonts.googleapis.com/css?family=Sorts+Mill+Goudy|Work+Sans&display=swap" rel="stylesheet">
  

</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#one">One Link</a></li>
        <li><a href="#two">Two Link</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#one">One Link</a></li>
        <li><a href="#two">Two Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br class="hide-on-med-and-down"><br>
        <h1 class="header center">Valley Strategic Partners Finance</h1>
        <div class="row center">
          <h5 class="header col s12 light hide-on-med-and-down">Valley Strategic Partners LLC is a focused team of CFO-level executives who provide
project-based financial management support to the winemaker and winegrower industry.
Together, we have over 50 years’ experience in strategic financial support to our clients.</h5>
        </div>
        <div class="row center">
          <a href="#two" id="download-button" class="btn-large waves-effect waves-light purple darken-3">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="grapes.jpg" alt="Winery"></div>
  </div>
  <div class="container">
    <div id="one" class="section">
      <div class="row hide-on-large-only">
        <p>Valley Strategic Partners LLC is a focused team of CFO-level executives who provide
project-based financial management support to the winemaker and winegrower industry.
Together, we have over 50 years’ experience in strategic financial support to our clients.</p>
      </div>
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center purple-text text-darken-3"><i class="material-icons">flash_on</i></h2>
            <h5 class="center purple-text text-darken-4">Speeds up development</h5>

            <p>Deep knowledge and understanding of wine industry business dynamics, barriers, and opportunities. Experience in financial management and leadership positions, focusing financial information to help make better operating decisions.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center gold-text"><i class="material-icons">group</i></h2>
            <h5 class="center gold-text ">User Experience Focused</h5>

            <p>Proven success in both contracted engagements as well as longer term roles with clients, with an ability to quickly identify those barriers and opportunities, as well as the solutions and plans to address them.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center teal-text text-darken-3"><i class="material-icons">settings</i></h2>
            <h5 class="center teal-text text-darken-4">Easy to work with</h5>

            <p>Demonstrated results in setting and achieving objective client metrics, with the strongest commitment possible to client success.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
        <h2 class="header col s12 light">Does your team…</h2>      
        </div>      
      </div>
    </div>
    <div class="parallax"><img src="winery-1.jpg" alt="winery"></div>
  </div>
  <div class="container">
    <div class="row">
      <p class="teal-text text-darken-2 col l4 s12">Have access to consistent financial reporting in dashboard format that helps you quickly understand the status of key business metrics?</p>
      <p class="teal-text text-darken-2 col l4 s12">
          Have that data presented in a way that helps you both make immediate decisions as well as understand longer term strategic opportunities?</p>
      <p class="teal-text text-darken-2 col l4 s12">
          Have a clear understanding of consumer analytics and how those connect to your financial success? Do you know your core consumer, the best way to communicate with them, and how to find more of them?</p>
    </div>
    <div class="row">
      <h5 class="gold-text col s12">If you cannot confidently answer yes to these questions, Valley Strategic
Partners can add immediate value to your business. Reach out to us today!</h5>
    </div>
  </div>
  <div class="container">
    <div id="two" class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4 class="teal-text text-darken-4">Contact Us</h4>
          <form action="#" id="form" method="post">
              <div class="row">
              
              </div>
              <div class="row">
                 
                    <div class="input-field col m6 s12">
                        <input name="name" type="text" class="validate">
                        <label for="name">Full Name</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input name="email" type="email" class="validate">
                        <label for="email">Email</label>   
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m9 s12">
                      <textarea name="msg" class="materialize-textarea"></textarea>
                      <label for="msg">Message</label>
                      <?=$thankYou?>
                    </div>
                    <div class="input-field col m3 s12">
                      <button class="btn waves-effect waves-light purple darken-3" type="submit" name="submit" value="submit" id="send">Submit
                      </button>    
                    </div> 
                                     
                </div>
              </form>             
        </div>
      </div>

    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h3 class="teal-text text-lighten-1">Valley Strategic Partners can add immediate value to your business.</h3>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="winery-2.jpg" alt="Winery 2"></div>
  </div>
  <footer class="page-footer purple darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Valley Strategic Partners</h5>
          <p class="grey-text text-lighten-4">Let us help you drive that success.</p>


        </div>
        <div class="col l3 s12">
          
          <ul>
            <li><a class="white-text" href="mailto:keith@vspfinance.com">Email Keith</a></li>
            <li><a class="white-text" href="#two">Contact</a></li>
            <li><a class="white-text" href="#one">About</a></li>
          
          </ul>
        </div>
        <div class="col l3 s12">
          <ul>
            <li>Keith Crawford</li>
            <li>1461 Main Street, #551</li>
            <li>St. Helena, California 94574</li>
            <li>504.717.3821</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col s12">
            Made by <a class="brown-text text-lighten-3" href="http://mcurrier.com">m. currier designs</a>

          </div>
        </div>
      
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  
  </body>
</html>
