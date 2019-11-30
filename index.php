<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Clima</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="js/clima.js"></script>
        <!-- Tags Gerais -->
        <meta NAME="DESCRIPTION" CONTENT="Site de informações climáticas de Brusque."/>
        <meta NAME="ABSTRACT" CONTENT="informações climáticas"/>
        <meta name="keywords" content="temperatura, temperatura maxima, temperatura minima, clima, tempo para brusque, tempo fechado, nublado, chuvoso, umidade, velocidade do vento, céu limpo, amanhecer, Por do sol, neve, verão."/>
        <meta NAME="title" CONTENT="Clima" />
        <meta NAME="identifier-url" content="https://emillysouza1.herokuapp.com/" />
        <meta NAME="author" content="Emilly souza" />
        <meta NAME="ROBOTS" CONTENT="All" />
        <meta NAME="RATING" CONTENT="general" />
        <meta NAME="DISTRIBUTION" CONTENT="global" />
        <meta NAME="LANGUAGE" CONTENT="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" /> 
        <meta name="reply-to" content="emilly_souza@estudante.sc.senai.br"/>

        <!-- Tags Para rede social Facebook -->
        <meta property="og:url" content="https://emillysouza1.herokuapp.com/" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Clima" />
        <meta property="og:title" content="Clima" />
        <meta property="og:description" content="Site de informações climáticas de Brusque." />
        <meta property="og:image" content="https://emillysouza1.herokuapp.com/img/icones/11d.png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />

        <!-- Tags Para rede social Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Site de informações climáticas de Brusque." />
        <meta name="twitter:title" content="Clima" />
    </head>
    <body>
        <div class="row">

            <div class="col-md-12">
                <div class="p-3 mb-4 bg-info text-white"></div>
                <div class="jumbotron">
                    <h1>Tempo para Brusque-SC <span id="temperatura"></span></h1>

                    <h5>
                        <span id="situacao"></span>
                        <img id="icone" src="img/icones/02d.png"/>
                    </h5>

                    <h5>
                        Pressão do ar: <span id="pressaoAr">10</span>
                    </h5>
                    <p>
                        <img src="img/icones/04d.png"/>
                    </p>


                    <h5>
                        Temperatura maxima: <span id="tempMaxima">296.48</span>
                    </h5>
                    <p>
                        <img src="img/icones/10d.png"/>
                    </p>

                    <h5>
                        Temperatura minima: <span id="tempMinima">294.82</span>
                    </h5>
                    <p>
                        <img src="img/icones/09d.png"/>
                    </p>

                    <h5>
                        Umidade: <span id="umidade">100</span>
                    </h5>
                    <p>
                        <img src="img/icones/01d.png"/>
                    </p>

                    <h5>
                        Velocidade do Vento: <span id="velocidadevento">5000</span>
                    </h5>
                    <p>
                        <img src="img/icones/11d.png"/>
                    </p>


                    <h5>
                        Amanhecer: <span id="amanhecer">0</span>
                    </h5>

                    <h5>
                        Por Do Sol: <span id="pordosol">0</span>
                    </h5>
                </div>

            </div>   

        </div>
        <div class="p-3 mb-2 bg-info text-white"></div>
    </body>
</html>
