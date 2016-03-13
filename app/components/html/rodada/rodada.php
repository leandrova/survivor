<!-- begin rodada  -->
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
<!-- end rodada -->