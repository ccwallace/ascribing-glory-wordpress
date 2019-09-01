<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"  media="screen,projection"/>

    <link rel="stylesheet" href="/apps/wordpress/htdocs/wp-content/themes/ascribing-glory-wordpress/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <div class="row">
      <div class="col s12">
        <img class="responsive-img rainbow-pens" src="http://34.94.0.6/wp-content/uploads/2019/08/rainbow-pens-doubled.png" alt="Rainbow Pens"></img>
      </div>
      <div class="col s6 push-s3">
        <img class="responsive-img ag-logo-main" src="http://34.94.0.6/wp-content/uploads/2019/08/ag-logo-transparent.png"></img>
      </div>
    </div>
    <nav class="z-depth-0">
      <div class="nav-wrapper white">
        <a href="#" data-activates="mobile-demo" class="button-collapse fixed right"><i class="material-icons black-text">menu</i></a>
        <div class="nav-center">
          <ul class="hide-on-med-and-down">
            <li><a class="black-text" href="sass.html">Home</a></li>
            <li><a class="black-text" href="badges.html">About</a></li>
            <li><a class="black-text" href="collapsible.html">Weddings</a></li>
            <li><a class="black-text" href="mobile.html">Resources</a></li>
            <li><a class="black-text" href="mobile.html">Shop</a></li>
            <li><a class="black-text" href="mobile.html">Contact</a></li>
          </ul>
        </div>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="sass.html">Home</a></li>
          <li><a href="badges.html">About</a></li>
          <li><a href="collapsible.html">Weddings</a></li>
          <li><a href="mobile.html">Resources</a></li>
          <li><a href="mobile.html">Shop</a></li>
          <li><a href="mobile.html">Contact</a></li>
        </ul>
      </div>
    </nav>





    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <script type="text/javascript">
      $( document ).ready(function(){
        $(".button-collapse").sideNav({
          edge:'right'
        });
      })
    </script>

  </body>
</html>
