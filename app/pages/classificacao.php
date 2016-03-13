<!DOCTYPE html>
<html lang="en">

    <head>
        @@include('../components/html/header.php')
        <link href="./css/base_classificacao.css" rel="stylesheet" type="text/css">
    </head>

<body class="ang">
  
<div class="anq" id="app-growl"></div>

@@include('../components/html/menu.php')

<div class="by amt">

    <div class="gn">
      
      @@include('../components/html/card.php')  

      @@include('../components/html/classificacao/top5.php')

    </div>

    <div class="gz">
        
        @@include('../components/html/alertas/statusRodada.php')

        @@include('../components/html/classificacao/full.php')     

        <div class="qv rc alu">
            <div class="qw">
              <h5 class="ald"><span>Palpites</span></h5>
              
                
                <style>

                #palpites .tabela {
                    padding: 0;
                }
                #palpites .tabela-tb {
                    font-size: 17px;
                    position: absolute;
                }
                #palpites .tabela-resultados {
                    font-size: 14px;
                    width: 100%;
                }
                #palpites .tabela-scroll {
                    opacity: 1; 
                    padding-left: 50%;
                }
                #palpites .tabela-head-linha {
                    border-bottom: 1px solid #c0c0c0;
                    border-top: 1px solid #ddd;
                    color: #999;
                    font-size: 9px;
                    height: 30px;
                }
                #palpites .tabela-head{
                    line-height: 10px;
                    text-align: left;
                    text-transform: uppercase;
                }
                #palpites .tabela-body-linha {
                    height: 45px;
                    border-bottom: solid 1px #ddd;
                }
                #palpites .tabela-body-linha td {
                    background-color: #fcfcfc;
                    line-height: 14px;
                }
                #palpites .tabela-body-linha button {
                    width: 92px;
                }
                #palpites .tabela td {
                    vertical-align: middle;
                }
                #palpites .tabela-posicao {
                    letter-spacing: -2px;
                    text-align: center;
                }
                #palpites .tabela-avatar {
                    letter-spacing: -1px;
                }
                #palpites .tabela-avatar img {
                    width: 25px;
                }
                #palpites .tabela-jogador {
                    letter-spacing: -1px;
                }
                #palpites .tabela-times-time-nome {
                    display: inline-block;
                    font-weight: normal;
                }
                #palpites .tabela-resultados td:nth-child(odd) {
                    background-color: #f5f5f5;
                }
                #palpites .tabela-resultados td {
                    padding-top: 2px;
                }
                #palpites .tabela-resultados .tabela-head-linha, .tabela-resultados .tabela-body-linha {
                    text-align: center;
                }
                #palpites .tabela-resultados .tabela-head-linha th, .tabela-resultados .tabela-body-linha th {
                    text-align: center;
                }

                @media only screen and (min-width: 320px) {
                    #palpites .tabela-tb {
                        width: 23%;
                    }
                    #palpites .tabela-posicao {
                        width: 10%;
                    }
                    #palpites .tabela-avatar {
                        width: 100%;
                        text-align: center;
                    }
                    #palpites .tabela-jogador {
                        width: 60%;
                    }
                    #palpites .tabela-scroll {
                        padding-left: 25%;
                    }
                    #palpites .tabela-resultados .tabela-body-linha td {
                        width: 33%;
                    }
                    #palpites .tabela-apostar {
                        display: none;
                    }
                    #palpites .tabela-body-linha button {
                        width: 40px;
                    }
                    #palpites .tabela-times-time-nome {
                        display: none;
                    }
                }

                @media only screen and (min-width: 375px) {
                    #palpites .tabela-tb {
                        width: 21%;
                    }
                    #palpites .tabela-posicao {
                        width: 10%;
                    }
                    #palpites .tabela-avatar {
                        width: 100%;
                    }
                    #palpites .tabela-jogador {
                        width: 60%;
                    }
                    #palpites .tabela-scroll {
                        padding-left: 23%;
                    }
                    #palpites .tabela-resultados .tabela-body-linha td {
                        width: 33%;
                    }
                    #palpites .tabela-apostar {
                        display: none;
                    }
                    #palpites .tabela-body-linha button {
                        width: 40px;
                    }
                }

                @media only screen and (min-width: 480px) {
                    #palpites .tabela-tb {
                        width: 47%;
                    }
                    #palpites .tabela-posicao {
                        width: 10%;
                    }
                    #palpites .tabela-avatar {
                        width: 20%;
                    }
                    #palpites .tabela-jogador {
                        width: 80%;
                    }
                    #palpites .tabela-scroll {
                        padding-left: 51%;
                    }
                    #palpites .tabela-resultados .tabela-body-linha td {
                        width: 33%;
                    }
                    #palpites .tabela-apostar {
                        display: none;
                    }
                    #palpites .tabela-body-linha button {
                        width: 40px;
                    }
                    #palpites .tabela-times-time-nome {
                        display: block;
                    }
                }

                @media only screen and (min-width: 568px) {
                    #palpites .tabela-tb {
                        width: 47%;
                    }
                    #palpites .tabela-posicao {
                        width: 10%;
                    }
                    #palpites .tabela-avatar {
                        width: 20%;
                    }
                    #palpites .tabela-jogador {
                        width: 80%;
                    }
                    #palpites .tabela-scroll {
                        padding-left: 49%;
                    }
                    #palpites .tabela-resultados .tabela-body-linha td {
                        width: 33%;
                    }
                    #palpites .tabela-apostar {
                        display: none;
                    }
                    #palpites .tabela-body-linha button {
                        width: 40px;
                    }
                    #palpites .tabela-times-time-nome {
                        display: block;
                    }
                }

                @media only screen and (min-width: 667px) {
                    #palpites .tabela-tb {
                        width: 41%;
                    }
                    #palpites .tabela-posicao {
                        width: 10%;
                    }
                    #palpites .tabela-avatar {
                        width: 20%;
                    }
                    #palpites .tabela-jogador {
                        width: 80%;
                    }
                    #palpites .tabela-scroll {
                        padding-left: 42%;
                    }
                    #palpites .tabela-resultados .tabela-body-linha td {
                        width: 33%;
                    }
                    #palpites .tabela-apostar {
                        display: inline-block;
                    }
                    #palpites .tabela-body-linha button {
                        width: 92px;
                    }
                    
                }

                @media only screen and (min-width: 768px) {
                    #palpites .tabela-tb {
                        width: 40%;
                    }
                    #palpites .tabela-posicao {
                        width: 10%;
                    }
                    #palpites .tabela-avatar {
                        width: 13%;
                    }
                    #palpites .tabela-jogador {
                        width: 77%;
                    }
                    #palpites .tabela-scroll {
                        padding-left: 41%;
                    }
                    #palpites .tabela-resultados .tabela-body-linha td {
                        width: 33%;
                    }
                    #palpites .tabela-apostar {
                        display: inline-block;
                    }
                    #palpites .tabela-body-linha button {
                        width: 92px;
                    }
                }

                @media only screen and (min-width: 1024px) {
                    #palpites .tabela-tb {
                        width: 46%;
                    }
                    #palpites .tabela-posicao {
                        width: 20%;
                    }
                    #palpites .tabela-avatar {
                        width: 20%;
                    }
                    #palpites .tabela-jogador {
                        width: 60%;
                    }
                    #palpites .tabela-scroll {
                        padding-left: 49%;
                    }
                    #palpites .tabela-resultados .tabela-body-linha td {
                        width: 33%;
                    }
                    #palpites .tabela-apostar {
                        display: none;
                    }
                    #palpites .tabela-body-linha button {
                        width: 40px;
                    }
                }

                @media only screen and (min-width: 1440px) {
                    #palpites .tabela-tb {
                        width: 35%;
                    }
                    #palpites .tabela-posicao {
                        width: 20%;
                    }
                    #palpites .tabela-avatar {
                        width: 20%;
                    }
                    #palpites .tabela-jogador {
                        width: 60%;
                    }
                    #palpites .tabela-scroll {
                        padding-left: 39%;
                    }
                    #palpites .tabela-resultados .tabela-body-linha td {
                        width: 33%;
                    }
                    #palpites .tabela-apostar {
                        display: inline-block;
                    }
                    #palpites .tabela-body-linha button {
                        width: 92px;
                    }
                }

                </style>

                <div id="palpites" class="tabela">
                    <table class="tabela-tb">
                        <thead>
                            <tr class="tabela-head-linha">
                                <th class="tabela-head" colspan="2">Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="tabela-body-linha">
                                <td class="tabela-avatar"><img src="./assets/images/escudos/fla.png"></td>
                                <td class="tabela-jogador"><strong class="tabela-times-time-nome">Flamengo</strong></td>
                            </tr>
                            
                            <tr class="tabela-body-linha">
                                <td class="tabela-avatar"><img src="./assets/images/escudos/bot.png"></td>
                                <td class="tabela-jogador"><strong class="tabela-times-time-nome">Botafogo</strong></td>
                            </tr>
                            <tr class="tabela-body-linha">
                                <td class="tabela-avatar"><img src="./assets/images/escudos/mac.png"></td>
                                <td class="tabela-jogador"><strong class="tabela-times-time-nome">Macaé</strong></td>
                            </tr>
                            <tr class="tabela-body-linha">
                                <td class="tabela-avatar"><img src="./assets/images/escudos/tig.png"></td>
                                <td class="tabela-jogador"><strong class="tabela-times-time-nome">Tigres-RJ</strong></td>
                            </tr>
                            <tr class="tabela-body-linha">
                                <td class="tabela-avatar"><img src="./assets/images/escudos/fri.png"></td>
                                <td class="tabela-jogador"><strong class="tabela-times-time-nome">Friburguense</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="tabela-scroll">
                        <table class="tabela-resultados">
                            <thead>
                                <tr class="tabela-head-linha">
                                    <th>Rodada</th>
                                    <th>Resultado</th>
                                    <th>Palpite</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tabela-body-linha">
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button class="cg tr" type="button">
                                        <span class="h aiw"></span>
                                        <span class="tabela-apostar">Apostar</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="tabela-body-linha">
                                    <td>3</td>
                                    <td>Empate</td>
                                    <td></td>
                                </tr>
                                <tr class="tabela-body-linha">
                                    <td>3</td>
                                    <td>Derrota</td>
                                    <td></td>
                                </tr>
                                <tr class="tabela-body-linha">
                                    <td>3</td>
                                    <td>Vitória</td>
                                    <td></td>
                                </tr>
                                <tr class="tabela-body-linha">
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button class="cg fp" type="button">
                                        <span class="h aiw"></span>
                                        <span class="tabela-apostar">Palpite</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                                

            </div>
        </div>

        <div class="qv rc alu">
            <div class="qw">
              <h5 class="ald"><span>Resumo da Rodada</span></h5>
              
                
                <style>

                #resumo .tabela {
                    padding: 0;
                }
                #resumo .tabela-tb {
                    font-size: 17px;
                    position: absolute;
                }
                #resumo .tabela-resultados {
                    font-size: 17px;
                    width: 100%;
                }
                #resumo .tabela-scroll {
                    opacity: 1; 
                    padding-left: 50%;
                }
                #resumo .tabela-scroll .time-escudo {
                    width: 30px;
                }
                #resumo .tabela-scroll .time-nome, #resumo .tabela-scroll .time-sigla {
                    display: none;
                }
                #resumo .tabela-head-linha {
                    border-bottom: 1px solid #c0c0c0;
                    border-top: 1px solid #ddd;
                    color: #999;
                    font-size: 9px;
                    height: 30px;
                }
                #resumo .tabela-head{
                    line-height: 10px;
                    text-align: left;
                    text-transform: uppercase;
                }
                #resumo .tabela-body-linha {
                    height: 45px;
                    border-bottom: solid 1px #ddd;
                }
                #resumo .tabela-body-linha td {
                    background-color: #fcfcfc;
                    line-height: 14px;
                }
                #resumo .tabela td {
                    vertical-align: middle;
                }
                #resumo .tabela-avatar {
                    letter-spacing: -1px;
                }
                #resumo .tabela-avatar img {
                    width: 35px;
                }
                #resumo .tabela-jogador {
                    letter-spacing: -1px;
                }
                #resumo .tabela-times-time-nome {
                    display: inline-block;
                    font-weight: normal;
                }
                #resumo .tabela-resultados td:nth-child(odd) {
                    background-color: #f5f5f5;
                }
                #resumo .tabela-resultados td {
                    padding-top: 2px;
                }
                #resumo .tabela-resultados .tabela-head-linha, .tabela-resultados .tabela-body-linha {
                    text-align: center;
                }
                #resumo .tabela-resultados .tabela-head-linha th, .tabela-resultados .tabela-body-linha th {
                    text-align: center;
                }

                @media only screen and (min-width: 320px) {
                    #resumo .tabela-tb {
                        width: 59%;
                    }
                    #resumo .tabela-avatar {
                        width: 30%;
                    }
                    #resumo .tabela-jogador {
                        width: 60%;
                    }
                    #resumo .tabela-scroll {
                        padding-left: 66%;
                    }
                }

                @media only screen and (min-width: 375px) {
                    #resumo .tabela-tb {
                        width: 66%;
                    }
                    #resumo .tabela-avatar {
                        width: 20%;
                    }
                    #resumo .tabela-jogador {
                        width: 65%;
                    }
                    #resumo .tabela-scroll {
                        padding-left: 72%;
                    }
                }

                @media only screen and (min-width: 480px) {
                    #resumo .tabela-tb {
                        width: 64%;
                    }
                    #resumo .tabela-avatar {
                        width: 13%;
                    }
                    #resumo .tabela-jogador {
                        width: 77%;
                    }
                    #resumo .tabela-scroll {
                        padding-left: 70%;
                    }
                }

                @media only screen and (min-width: 568px) {
                    #resumo .tabela-tb {
                        width: 64%;
                    }
                    #resumo .tabela-avatar {
                        width: 13%;
                    }
                    #resumo .tabela-jogador {
                        width: 77%;
                    }
                    #resumo .tabela-scroll {
                        padding-left: 68%;
                    }
                    #resumo .tabela-scroll .time-sigla {
                        display: inline-block;
                    }
                }

                @media only screen and (min-width: 667px) {
                    #resumo .tabela-tb {
                        width: 68%;
                    }
                    #resumo .tabela-avatar {
                        width: 13%;
                    }
                    #resumo .tabela-jogador {
                        width: 77%;
                    }
                    #resumo .tabela-scroll {
                        padding-left: 71%;
                    }
                }

                @media only screen and (min-width: 768px) {
                    #resumo .tabela-tb {
                        width: 60%;
                    }
                    #resumo .tabela-avatar {
                        width: 13%;
                    }
                    #resumo .tabela-jogador {
                        width: 77%;
                    }
                    #resumo .tabela-scroll {
                        padding-left: 62%;
                    }
                    #resumo .tabela-scroll .time-nome {
                        display: inline-block;
                    }
                    #resumo .tabela-scroll .time-sigla {
                        display: none;
                    }
                }

                @media only screen and (min-width: 1024px) {
                    #resumo .tabela-tb {
                        width: 46%;
                    }
                    #resumo .tabela-avatar {
                        width: 20%;
                    }
                    #resumo .tabela-jogador {
                        width: 60%;
                    }
                    #resumo .tabela-scroll {
                        padding-left: 49%;
                    }
                }

                @media only screen and (min-width: 1440px) {
                    #resumo .tabela-tb {
                        width: 46%;
                    }
                    #resumo .tabela-avatar {
                        width: 20%;
                    }
                    #resumo .tabela-jogador {
                        width: 60%;
                    }
                    #resumo .tabela-scroll {
                        padding-left: 51%;
                    }
                }

                </style>

                <div id="resumo" class="tabela">
                    <table class="tabela-tb">
                        <thead>
                            <tr class="tabela-head-linha">
                                <th class="tabela-head" colspan="3">Posição</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="tabela-body-linha">
                                <td class="tabela-avatar"><img class="qh cu" src="./assets/images/jogadores/leandro.png"></td>
                                <td class="tabela-jogador"><strong class="tabela-times-time-nome">Levi</strong></td>
                            </tr>
                            
                            <tr class="tabela-body-linha">
                                <td class="tabela-avatar"><img class="qh cu" src="./assets/images/jogadores/viana.png"></td>
                                <td class="tabela-jogador"><strong class="tabela-times-time-nome">Viana</strong></td>
                            </tr>
                            <tr class="tabela-body-linha">
                                <td class="tabela-avatar"><img class="qh cu" src="./assets/images/jogadores/nei.png"></td>
                                <td class="tabela-jogador"><strong class="tabela-times-time-nome">Nei</strong></td>
                            </tr>
                            <tr class="tabela-body-linha">
                                <td class="tabela-avatar"><img class="qh cu" src="./assets/images/jogadores/david.jpg"></td>
                                <td class="tabela-jogador"><strong class="tabela-times-time-nome">David</strong></td>
                            </tr>
                            <tr class="tabela-body-linha">
                                <td class="tabela-avatar"><img class="qh cu" src="./assets/images/jogadores/haroldo.jpg"></td>
                                <td class="tabela-jogador"><strong class="tabela-times-time-nome">Haroldo</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="tabela-scroll">
                        <table class="tabela-resultados">
                            <thead>
                                <tr class="tabela-head-linha">
                                    <th>Palpite</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tabela-body-linha">
                                    <td>
                                    <img class="time-escudo" src="./assets/images/escudos/fri.png" title="Macaé">
                                    <span class="time-sigla" title="">FRI</span>
                                    <span class="time-nome" title="">Friburguense</span>
                                    </td>
                                </tr>
                                <tr class="tabela-body-linha">
                                    <td>
                                    <img class="time-escudo" src="./assets/images/escudos/fri.png" title="Macaé">
                                    <span class="time-sigla" title="">FRI</span>
                                    <span class="time-nome" title="">Friburguense</span>
                                    </td>
                                </tr>
                                <tr class="tabela-body-linha">
                                    <td>
                                    <img class="time-escudo" src="./assets/images/escudos/fri.png" title="Macaé">
                                    <span class="time-sigla" title="">FRI</span>
                                    <span class="time-nome" title="">Friburguense</span>
                                    </td>
                                </tr>
                                <tr class="tabela-body-linha">
                                    <td>
                                    <img class="time-escudo" src="./assets/images/escudos/fri.png" title="Macaé">
                                    <span class="time-sigla" title="">FRI</span>
                                    <span class="time-nome" title="">Friburguense</span>
                                    </td>
                                </tr>
                                <tr class="tabela-body-linha">
                                    <td>
                                    <img class="time-escudo" src="./assets/images/escudos/fri.png" title="Macaé">
                                    <span class="time-sigla" title="">FRI</span>
                                    <span class="time-nome" title="">Friburguense</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                                

            </div>
        </div>

    </div>

    <div class="gn">


    <style type="text/css">
    .tabela-navegacao {
        border-bottom: 1px solid #c0c0c0;
        border-top: 1px solid #ddd;   
        text-align: center;
        text-transform: uppercase;
    }
    .tabela-navegacao-seletor {
        font-size: 16px;
        line-height: 39px;
    }
    .lista-de-jogos-conteudo {
        opacity: 1;
        transition: opacity .35s;
        list-style: none;
        padding: 0;
    }
    .lista-de-jogos-item {
        border-bottom: 1px solid #e3e3e3;
    }
    .placar-jogo {
        height: 65px;
        padding-top: 4px;
        text-align: center;
    }
    .placar-jogo-informacoes {
        color: #666;
        font-family: proximanova-bold;
        font-size: 11px;
        letter-spacing: -.3px;
        text-transform: uppercase;
    }
    .placar-jogo-equipes {
        padding-bottom: 7px;
    }
    .placar-jogo-equipes {
        color: #333;
        display: table;
        font-family: opensans-light;
        font-size: 16px;
        padding: 5px 0 4px;
        width: 100%;
    }
    .placar-jogo-equipes-item {
        vertical-align: middle;
    }
    .placar-jogo-equipes-mandante, .placar-jogo-equipes-visitante {
        width: 36%;
        float: left;
    }
    .placar-jogo-equipes-visitante {
        float: right;
    }
    .placar-jogo-equipes-placar {
        width: 28%;
        float: left;
    }
    .tabela-icone {
        display: inline-block;
        height: 5px;
        overflow: hidden;
        width: 5px;
    }
    .placar-jogo .tabela-icone-versus {
        margin: -2px 8px 0;
        background: url('./assets/images/sprite-tabela-icones.svg') no-repeat left bottom;
        background-size: 19px auto;
        height: 11px;
        width: 9px;
    }
    .placar-jogo-equipes-item img, .placar-jogo-equipes-item span {
        vertical-align: middle;
    }
    
    .lista-de-jogos .placar-jogo-equipes-sigla {
        padding-left: 0px;
        padding-right: 0px;
    }
    .placar-jogo-equipes-placar-mandante, .placar-jogo-equipes-placar-visitante {
        font-size: 24px;
        line-height: 24px;
    }
    .lista-de-jogos .placar-jogo-equipes-nome {
        display: none;
    }

    @media only screen and (min-width: 768px) {
        .lista-de-jogos .placar-jogo-equipes-sigla {
            display: none;
        }
    }

    @media only screen and (min-width: 480px) {
        .lista-de-jogos .placar-jogo-equipes-sigla {
            display: none;
        }
        .lista-de-jogos .placar-jogo-equipes-nome {
            display: inline-block;
            padding-right: 15px;
            padding-left: 15px;
        }
        .placar-jogo-equipes-mandante, .placar-jogo-equipes-visitante {
            width: 36%;
            float: left;
        }
        .placar-jogo-equipes-mandante {
            text-align: right;
        }
        .placar-jogo-equipes-visitante {
            text-align: left;
        }
        .placar-jogo-equipes-placar {
            width: 28%;
            float: left;
        }
    }

    @media only screen and (min-width: 1024px) {
        .lista-de-jogos .placar-jogo-equipes-nome {
            display: none;
        }
        .lista-de-jogos .placar-jogo-equipes-sigla {
            display: none;
        }
        .placar-jogo-equipes-mandante, .placar-jogo-equipes-visitante {
            width: 30%;
            float: left;
        }
        .placar-jogo-equipes-placar {
            width: 40%;
            float: left;
        }
    }   

    @media only screen and (min-width: 1440px) {
        .lista-de-jogos .placar-jogo-equipes-nome {
            display: none;
        }
        .lista-de-jogos .placar-jogo-equipes-sigla {
            display: inline-block;
        }
    }

    </style>

      <div class="qv rc alu">
        <div class="qw">
          <h5 class="ald"><span>Jogos da Rodada</span></h5>
          
            <aside class="lista-de-jogos lista-de-jogos-fora-grupo">
                
                <nav class="tabela-navegacao tabela-navegacao-jogos">
                    <h5>04ª RODADA</h5>
                </nav>



                <ul class="lista-de-jogos-conteudo">
                    <li class="lista-de-jogos-item">
                        <div class="placar-jogo">
                            <div class="placar-jogo-informacoes">13/02/2016 17:00</div>
                            <div class="placar-jogo-equipes">
                                <div class="placar-jogo-equipes-item placar-jogo-equipes-mandante">
                                    <span class="placar-jogo-equipes-sigla" title="">POR</span>
                                    <span class="placar-jogo-equipes-nome" title="">Portuguesa</span>
                                    <img class="placar-jogo-equipes-escudo-mandante" src="./assets/images/escudos/por.png" width="30" height="30" title="Macaé">
                                </div>

                                <div class="placar-jogo-equipes-item placar-jogo-equipes-placar">
                                    <span class="placar-jogo-equipes-placar-mandante">3</span>
                                    <span class="tabela-icone tabela-icone-versus"></span>
                                    <span class="placar-jogo-equipes-placar-visitante">2</span>
                                </div>

                                <div class="placar-jogo-equipes-item placar-jogo-equipes-visitante" itemprop="performer">
                                    <img class="placar-jogo-equipes-escudo-visitante" src="./assets/images/escudos/tig.png" width="30" height="30" title="America-RJ">
                                    <span class="placar-jogo-equipes-sigla" title="">TIG</span>
                                    <span class="placar-jogo-equipes-nome" title="">Tiges-RJ</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="lista-de-jogos-item">
                        <div class="placar-jogo">
                            <div class="placar-jogo-informacoes">30/01/2016 17:00</div>
                            <div class="placar-jogo-equipes">
                                <div class="placar-jogo-equipes-item placar-jogo-equipes-mandante">
                                    <span class="placar-jogo-equipes-sigla" title="">BAN</span>
                                    <span class="placar-jogo-equipes-nome" title="">Bangu</span>
                                    <img class="placar-jogo-equipes-escudo-mandante" src="./assets/images/escudos/ban.png" width="30" height="30" title="Macaé">
                                </div>

                                <div class="placar-jogo-equipes-item placar-jogo-equipes-placar">
                                    <span class="placar-jogo-equipes-placar-mandante">0</span>
                                    <span class="tabela-icone tabela-icone-versus"></span>
                                    <span class="placar-jogo-equipes-placar-visitante">2</span>
                                </div>

                                <div class="placar-jogo-equipes-item placar-jogo-equipes-visitante" itemprop="performer">
                                    <img class="placar-jogo-equipes-escudo-visitante" src="./assets/images/escudos/bot.png" width="30" height="30" title="America-RJ">
                                    <span class="placar-jogo-equipes-sigla" title="">BOT</span>
                                    <span class="placar-jogo-equipes-nome" title="">Botagofo</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="lista-de-jogos-item">
                        <div class="placar-jogo">
                            <div class="placar-jogo-informacoes">30/01/2016 17:00</div>
                            <div class="placar-jogo-equipes">
                                <div class="placar-jogo-equipes-item placar-jogo-equipes-mandante">
                                    <span class="placar-jogo-equipes-sigla" title="">FRI</span>
                                    <span class="placar-jogo-equipes-nome" title="">Frigurguense</span>
                                    <img class="placar-jogo-equipes-escudo-mandante" src="./assets/images/escudos/fri.png" width="30" height="30" title="Macaé">
                                </div>

                                <div class="placar-jogo-equipes-item placar-jogo-equipes-placar">
                                    <span class="placar-jogo-equipes-placar-mandante">1</span>
                                    <span class="tabela-icone tabela-icone-versus"></span>
                                    <span class="placar-jogo-equipes-placar-visitante">0</span>
                                </div>

                                <div class="placar-jogo-equipes-item placar-jogo-equipes-visitante" itemprop="performer">
                                    <img class="placar-jogo-equipes-escudo-visitante" src="./assets/images/escudos/mac.png" width="30" height="30" title="America-RJ">
                                    <span class="placar-jogo-equipes-sigla" title="">MAC</span>
                                    <span class="placar-jogo-equipes-nome" title="">Macaé</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="lista-de-jogos-item">
                        <div class="placar-jogo">
                            <div class="placar-jogo-informacoes">30/01/2016 19:30</div>
                            <div class="placar-jogo-equipes">
                                <div class="placar-jogo-equipes-item placar-jogo-equipes-mandante">
                                    <span class="placar-jogo-equipes-sigla" title="">FLA</span>
                                    <span class="placar-jogo-equipes-nome" title="">Flamengo</span>
                                    <img class="placar-jogo-equipes-escudo-mandante" src="./assets/images/escudos/fla.png" width="30" height="30" title="Macaé">
                                </div>

                                <div class="placar-jogo-equipes-item placar-jogo-equipes-placar">
                                    <span class="placar-jogo-equipes-placar-mandante">1</span>
                                    <span class="tabela-icone tabela-icone-versus"></span>
                                    <span class="placar-jogo-equipes-placar-visitante">1</span>
                                </div>

                                <div class="placar-jogo-equipes-item placar-jogo-equipes-visitante" itemprop="performer">
                                    <img class="placar-jogo-equipes-escudo-visitante" src="./assets/images/escudos/bvt.png" width="30" height="30" title="America-RJ">
                                    <span class="placar-jogo-equipes-sigla" title="">BVT</span>
                                    <span class="placar-jogo-equipes-nome" title="">Boavista</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="lista-de-jogos-item">
                        <div class="placar-jogo">
                            <div class="placar-jogo-informacoes">31/01/2016 17:00</div>
                            <div class="placar-jogo-equipes">
                                <div class="placar-jogo-equipes-item placar-jogo-equipes-mandante">
                                    <span class="placar-jogo-equipes-sigla" title="">VAS</span>
                                    <span class="placar-jogo-equipes-nome" title="">Vasco</span>
                                    <img class="placar-jogo-equipes-escudo-mandante" src="./assets/images/escudos/vas.png" width="30" height="30" title="Macaé">
                                </div>

                                <div class="placar-jogo-equipes-item placar-jogo-equipes-placar">
                                    <span class="placar-jogo-equipes-placar-mandante">4</span>
                                    <span class="tabela-icone tabela-icone-versus"></span>
                                    <span class="placar-jogo-equipes-placar-visitante">1</span>
                                </div>

                                <div class="placar-jogo-equipes-item placar-jogo-equipes-visitante" itemprop="performer">
                                    <img class="placar-jogo-equipes-escudo-visitante" src="./assets/images/escudos/mad.png" width="30" height="30" title="America-RJ">
                                    <span class="placar-jogo-equipes-sigla" title="">MAD</span>
                                    <span class="placar-jogo-equipes-nome" title="">Madureira</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="lista-de-jogos-item">
                        <div class="placar-jogo">
                            <div class="placar-jogo-informacoes">31/02/2016 17:00</div>
                            <div class="placar-jogo-equipes">
                                <div class="placar-jogo-equipes-item placar-jogo-equipes-mandante">
                                    <span class="placar-jogo-equipes-sigla" title="">BON</span>
                                    <span class="placar-jogo-equipes-nome" title="">Bonsucesso</span>
                                    <img class="placar-jogo-equipes-escudo-mandante" src="./assets/images/escudos/bon.png" width="30" height="30" title="Macaé">
                                </div>

                                <div class="placar-jogo-equipes-item placar-jogo-equipes-placar">
                                    <span class="placar-jogo-equipes-placar-mandante">0</span>
                                    <span class="tabela-icone tabela-icone-versus"></span>
                                    <span class="placar-jogo-equipes-placar-visitante">2</span>
                                </div>

                                <div class="placar-jogo-equipes-item placar-jogo-equipes-visitante" itemprop="performer">
                                    <img class="placar-jogo-equipes-escudo-visitante" src="./assets/images/escudos/res.png" width="30" height="30" title="America-RJ">
                                    <span class="placar-jogo-equipes-sigla" title="">RES</span>
                                    <span class="placar-jogo-equipes-nome" title="">Resende</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="lista-de-jogos-item">
                        <div class="placar-jogo">
                            <div class="placar-jogo-informacoes">31/01/2016 19:30</div>
                            <div class="placar-jogo-equipes">
                                <div class="placar-jogo-equipes-item placar-jogo-equipes-mandante">
                                    <span class="placar-jogo-equipes-sigla" title="">VRE</span>
                                    <span class="placar-jogo-equipes-nome" title="">Volta Redonda</span>
                                    <img class="placar-jogo-equipes-escudo-mandante" src="./assets/images/escudos/vre.png" width="30" height="30" title="Macaé">
                                </div>

                                <div class="placar-jogo-equipes-item placar-jogo-equipes-placar">
                                    <span class="placar-jogo-equipes-placar-mandante">3</span>
                                    <span class="tabela-icone tabela-icone-versus"></span>
                                    <span class="placar-jogo-equipes-placar-visitante">1</span>
                                </div>

                                <div class="placar-jogo-equipes-item placar-jogo-equipes-visitante" itemprop="performer">
                                    <img class="placar-jogo-equipes-escudo-visitante" src="./assets/images/escudos/flu.png" width="30" height="30" title="America-RJ">
                                    <span class="placar-jogo-equipes-sigla" title="">FLU</span>
                                    <span class="placar-jogo-equipes-nome" title="">Fluminense</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </aside>

        </div>
      </div>


      <style>

        #top5Times table {
            width: 100%;
        }
        #top5Times table tr {
            height: 35px;
        }
        #top5Times .escudo {
            text-align: center;
            width: 10%;
        }
        #top5Times .escudo img {
            width: 25px; 
        }

        #top5Times .time {
            width: 80%;
        }

        @media only screen and (min-width: 320px) {
            #top5Times .escudo {
                width: 20%;
            }
            #top5Times .time {
                width: 80%;
            }
        }

        @media only screen and (min-width: 375px) {
            #top5Times .escudo {
                width: 15%;
            }
            #top5Times .time {
                width: 85%;
            }
        }

        @media only screen and (min-width: 480px) {
            #top5Times .escudo {
                width: 10%;
            }
            #top5Times .time {
                width: 90%;
            }
        }

        @media only screen and (min-width: 768px) {
            #top5Times .escudo {
                width: 10%;
            }
            #top5Times .time {
                width: 90%;
            }
        }

        @media only screen and (min-width: 1024px) {
            #top5Times .escudo {
                width: 20%;
            }
            #top5Times .time {
                width: 80%;
            }            
        }

      </style>

      <div class="qv rc alu">
        <div id="top5Times" class="qw">

        <h5 class="ald">Top 5 Times</h5>
        <table class="tabela-times-full">
            <tbody>
            <tr>
                <td class="escudo"><img src="./assets/images/escudos/fla.png"></td>
                <td class="time"><strong>Flamengo</strong></td>
            </tr>
            <tr>
                <td class="escudo"><img src="./assets/images/escudos/res.png"></td>
                <td class="time"><strong>Resende</strong></td>
            </tr>
            <tr>
                <td class="escudo"><img src="./assets/images/escudos/tig.png"></td>
                <td class="time"><strong>Tigres</strong></td>
            </tr>
            <tr>
                <td class="escudo"><img src="./assets/images/escudos/mad.png"></td>
                <td class="time"><strong>Madureira</strong></td>
            </tr>
            <tr>
                <td class="escudo"><img src="./assets/images/escudos/vre.png"></td>
                <td class="time"><strong>Volta Redonda</strong></td>
            </tr>
            </tbody>
        </table>

        </div>
      </div>

    </div>

  </div>
</div>

    <script src="./js/jquery.min.js"></script>
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
  


</body></html>