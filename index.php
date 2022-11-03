<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Forno & Lenha</title>
                <link rel="stylesheet" type="text/css" href="site/css/reset.css">
                <link rel="stylesheet" href="site/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="site/css/style.css">
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                <script src="https://kit.fontawesome.com/bca6c87191.js" crossorigin="anonymous"></script>
                <style>
                        .espacamento_card{
                                width:90vw;
                                margin-left:5vw;
                                margin-top:2em;
                                clear: both;
                        }
                </style>
                
        </head>
        <body onload="load()">
                        
                <header class="cor_2 header_1">
                        <nav>
                                <ul>        
                                        <li><a href="#cardapio">Cardápio</a></li>
                                        <li><a href="#sobre">Sobre</a></li>
                                        <li><a href="#formulario">Reservas</a></li>
                                        <li><a href="#local">Local</a></li>
                                        <li><a href="#contato">Contato</a></li>
                                </ul>
                        </nav>
                </header>
               <main>
                        <div class="bordas">        
                                <img class="imagem_promo" src="site/images/pizza_de_costela.jpg" alt="pizza principal da página">        
                                <article class="texto_imagem_principal"><a name="sobre"></a>
                                        <div>
                                                <h1>Venha experimentar </br> a verdadeira pizza caseira!</h1>
                                                <p>Pizzas bem recheadas, massa caseira com bordas recheadas e preços incríveis!</p>
                                        </div>
                                
                                </article><br>
                        </div>
                        <div class="espacamento clear"><a name="cardapio"></a>

                        </div>
                        <section class="responsive">
                                <header class="cor_1 header_1 bordas">
                                        <nav>
                                                <ul>        
                                                        <li><a href='javascript: void(0)' onclick='remove(this)' id="Pizza">Pizzas</a></li>
                                                        <li><a href='javascript: void(0)' onclick='remove(this)' id="Combo">Combos</a></li>
                                                        <li><a href='javascript: void(0)' onclick='remove(this)' id="Bebida">Bebidas</a></li>
                                                        <li><a href='javascript: void(0)' onclick='remove(this)' id="Sobremesa">Sobremesas</a></li>
                                                </ul>
                                        </nav>
                                </header>
                                 
                                <div class="bloco_responsivo">
                                        <div class="sobreposicao translate_back">
                                                <?php include('select_item.php');?>
                                        </div>
                                        <div class="tamanho_aba">
                                        <div class="espacamento_card">                              
                                                
                                        </div>
                                        </div>
                                        
                                </div>        
                                <div class="espacamento"></div>

                        </section>
                        <section class="formulario">
                                
                                <div class="espacamento_form">
                                        <form action="site/php/insert_front.php" method="POST">
                                                <h1 class="espaco_baixo">Faça já sua reserva!</h1>
                                                <div>
                                                        <input type="text" class="border font_size" id="fname" name="fname" placeholder="Nome">
                                                        <input type="number" class="border font_size" id="fnumber" name="fnumber" placeholder="Telefone">
                                                        <input type="email" class="border font_size" id="femail" name="femail" placeholder="Email">
                                                        <input type="number" class="border font_size" id="fpessoas" name="fpessoas" placeholder="Nº Pessoas">
                                                        <input type="datetime-local" id="data" class="border font_size" id="fdata" name="fdata" placeholder="Data" min="2022-01-01" max="2023-01-01">
                                                        <input type="submit" id="data" value="Enviar" class="button">
                                                </div>
                                                
                                        </form>
                                </div>
                        </section>
                </main><br>
                <div class="espacamento"><a name="local"></a>

                </div>
                <section class="map">
                        <div class="map_background_color">
                             <h2 class="subtitle">Temos dois endereços em Matinhos!</h2>   
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114966.0010312028!2d-48.58666681911876!3d-25.780882503972474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dbee2def8620f1%3A0xe1f069c76f033955!2sMatinhos%2C%20PR%2C%2083260-000!5e0!3m2!1spt-BR!2sbr!4v1663250700353!5m2!1spt-BR!2sbr" width="100%" height="600vw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br><br>
                </section>
                <div class="espacamento"><a name="contato"></a>

                </div>
                <footer>                                             
                        
                        <div class="footer_right">
                                <div class="first">
                                        <ul>
                                                <li><a href="#">Quem somos?</a></li>
                                                <li><a href="#">Pontos de atendimento</a></li>
                                                <li><a href="#">Cardápio</a></li>
                                                <li><a href="#">Promoções</a></li>
                                        </ul>
                                </div>
                                <div class="second">
                                        <ul>
                                                <li><a href="#">Quem somos?</a></li>
                                                <li><a href="#">Pontos de atendimento</a></li>
                                                <li><a href="#">Cardápio</a></li>
                                                <li><a href="#">Promoções</a></li>
                                        </ul>
                                </div>
                        </div>
                </footer>
        </body>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script>
                
                function add(object){
                        document.getElementsByClassName('sobreposicao')[0].classList.remove("translate_back");
                        document.getElementsByClassName('sobreposicao')[0].classList.add("translate");
                        var nome = object.title;
                        
                        $.ajax({
                                type:'POST',
                                url:'select_item.php',
                                data:{nome:nome},
                                datatype:'json',
                                success:function(resultado){
                                        $('.sobreposicao').html(resultado);
                                }
                        });
                }
                
                function remove(obj){
                        var id = obj.id;
                        console.log(id);
                        $.ajax({
                                type:'POST',
                                url:'adiciona_cards.php',
                                data:{id:id},
                                datatype:'json',
                                success:function(resultado){
                                        $('.espacamento_card').html(resultado);
                                }
                        });
                        document.getElementsByClassName('sobreposicao')[0].classList.add("translate_back");                        
                        document.getElementsByClassName('sobreposicao')[0].classList.remove("translate");
                }
                        function load(){
                        $.ajax({
                                type:'POST',
                                url:'adiciona_cards.php',
                                data:{id:"Pizza"},
                                datatype:'json',
                                success:function(resultado){
                                        $('.espacamento_card').html(resultado);
                                }
                        });
                        $.ajax({
                                type:'POST',
                                url:'select_item.php',
                                data:{nome:"Pizza de Mussarela"},
                                datatype:'json',
                                success:function(resultado){
                                        $('.sobreposicao').html(resultado);
                                }
                        });
                }
                
                console.log($(document).width());
        
        </script>
</html>