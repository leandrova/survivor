
<!DOCTYPE html>
<html lang="en">

    <head>
        @@include('../components/html/header.php')
        <link href="./css/base.css" rel="stylesheet" type="text/css">
        <link href="./css/profile.css" rel="stylesheet" type="text/css">
    </head>

<body class="ang">
  

<div class="anq" id="app-growl"></div>

@@include('../components/html/menu.php')

<div class="ans dj"
     style="background-image: url(./assets/images/temas/leandro.jpg);">
  <div class="by">
    <div class="ant">
      <img class="cu qh" src="./assets/images/jogadores/leandro.png">
      <h3 class="anv">Levi</h3>
      <p class="anu">
        E a regra é clara!
      </p>
    </div>
  </div>

  <script>

  $( "#navMenu" ).click(function() {
    console.log(1);
    alert(1);
  });

  </script>

  <nav id="navMenu" class="anw">
    <ul class="nav ol">
      <li class="active">
        <a href="#dados">Dados</a>
      </li>
      <li>
        <a href="#survivors">Survivor's</a>
      </li>
    </ul>
  </nav>
</div>

<div id="dados" class="by alx">
  <div>
    <img data-width="640" data-height="400" data-action="zoom" src="./images/escudos/vre.png">
  </div>
</div>


<div id="survivors" class="by alx">
  <div>
    <img data-width="640" data-height="400" data-action="zoom" src="./images/escudos/vre.png">
  </div>
</div>

    <script src="./js/chart.js"></script>
    <script src="./js/toolkit.js"></script>
    <script src="./js/application.js"></script>

    <script>
      // execute/clear BS loaders for docs
      $(function(){
        if (window.BS&&window.BS.loader&&window.BS.loader.length) {
          while(BS.loader.length){(BS.loader.pop())()}
        }
      })
    </script>
  </body>
</html>

