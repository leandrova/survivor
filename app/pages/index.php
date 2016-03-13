<!DOCTYPE html>
<html lang="en">

    <head>
        @@include('../components/html/header.php')
        <link href="./css/base_index.css" rel="stylesheet" type="text/css">
    </head>

<body class="ang">
  
<div class="anq" id="app-growl"></div>

@@include('../components/html/menu.php')

<div class="by amt">

  <div id="page" class="gc">

    <div class="gn">

        @@include('../components/html/card.php')  

        @@include('../components/html/classificacao/top5.php')

    </div>

    <div class="gz">
        
        @@include('../components/html/alertas/statusRodada.php')
        
        @@include('../components/html/classificacao/full.php')

        @@include('../components/html/palpites.php')

        @@include('../components/html/rodada/resumo.php')

    </div>

    <div class="gn">

        @@include('../components/html/rodada/rodada.php')

        @@include('../components/html/top5.php')

    </div>

  </div>

</div>

</body>

</html>