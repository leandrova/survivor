<!DOCTYPE html>
<html lang="en">

    <head>
        @@include('../components/html/header.php')
        <link href="./css/base.css" rel="stylesheet" type="text/css">
        <link href="./css/classificacao.css" rel="stylesheet" type="text/css">
    </head>

<body class="ang">
  
<div class="anq" id="app-growl"></div>

@@include('../components/html/menu.php')

<div class="by amt">

  <div id="page" class="gc">

    <div class="gn">

        @@include('../components/html/card.php')

        @@include('../components/html/top5.php')

    </div>

    <div class="gz">
        
        @@include('../components/html/classificacao/full.php')

    </div>

    <div class="gn">

        @@include('../components/html/rodada/rodada.php')

    </div>

  </div>

</div>

</body>

</html>