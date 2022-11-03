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
        <body>
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
                        <img src="site/images/pizza_de_costela.jpg" alt="pizza principal da página">        
                        <article class="texto_imagem_principal"><a name="sobre"></a>
                                <div>
                                        <h1>Is simply dummy text of the printing</h1>
                                        <p>Is simply dummy text of the printing and typesetting industry. Loren Ipsun has been the industry's.</p>
                                </div>
                                
                        </article><br>
                        <div class="espacamento clear"><a name="cardapio"></a>

                        </div>
                        <section class="responsive">
                                <header class="cor_1 header_1">
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

                                        </div>
                                        <div class="tamanho_aba">
                                        <div class="espacamento_card">                              
                                        <?php
                                                include ('adiciona_cards.php');
                                        ?>          
                                        </div>
                                </div>

                        </section>
                        <div class="espacamento"><a name="formulario"></a>

                        </div>
                        <section class="formulario">
                                <div class="espacamento_form">
                                        <form action="site/php/insert_front.php" method="POST">
                                                <h1 class="espaco_baixo">Faça já sua reserva!</h1>
                                                <div class="espaco_40">
                                                        <input type="text" class="espaco_form_1 border espaco_baixo" id="fname" name="fname" placeholder="Nome"><br>
                                                        <input type="number" class="espaco_form_1 border espaco_baixo" id="fnumber" name="fnumber" placeholder="Telefone"><br>
                                                </div>
                                                <div class="espaco_60">
                                                        <input type="email" class="tamanho border espaco_baixo" id="femail" name="femail" placeholder="Email"><br>
                                                        <div class="espaco_30">
                                                                <input type="number" class="espaco_form_2 border espaco_baixo" id="fpessoas" name="fpessoas" placeholder="Nº Pessoas"><br>
                                                        </div>      
                                                        <div class="espaco_30">   
                                                                <input type="datetime-local" class="form_float border tamanho espaco_baixo" id="fdata" name="fdata" placeholder="Data" min="2022-01-01" max="2023-01-01"><br>
                                                        </div>  
                                                </div>
                                                <div class="submit">
                                                        <p class="text_position">Horário de atendimento de tal à tal horario!</p>  
                                                        <input type="submit" value="Enviar" style="background-color:orange; color: white; height:150%; width:15vw; border-radius:25px; border:none;" class="button">
                                                </div>
                                                
                                        </form>
                                </div>
                        </section>
                </main><br>
                <div class="espacamento"><a name="local"></a>

                </div>
                <section class="map">
                        <div class="map_background_color">
                             <h2>Temos dois endereços em Matinhos!</h2>   
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114966.0010312028!2d-48.58666681911876!3d-25.780882503972474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dbee2def8620f1%3A0xe1f069c76f033955!2sMatinhos%2C%20PR%2C%2083260-000!5e0!3m2!1spt-BR!2sbr!4v1663250700353!5m2!1spt-BR!2sbr" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br><br>
                </section>
                <div class="espacamento"><a name="contato"></a>

                </div>
                <footer>                                             
                        <div class="footer_left">
                                <div>
                                        
                                </div>
                                <div class="icons">
                                        <a href="www.google.com"><i class="fa-brands fa-facebook"></i></i></a>
                                        <a href="www.google.com"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="www.google.com"><i class="fa-brands fa-whatsapp"></i></a>  
                                </div>
                        </div>
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
                function add(clicked_id){
                        alert("oi");
                        document.getElementsByClassName('sobreposicao')[0].classList.remove("translate_back");
                        document.getElementsByClassName('sobreposicao')[0].classList.add("translate");
                        var identity = clicked_id;
    
                }
    
                function remove(obj){
                var id_objeto = obj.id;
                document.getElementsByClassName('espacamento_card')[0].innerHTML = "";
                $.ajax({
                        url:"adiciona_cards.php",
                        type:'post',
                        data:{class: id_objeto},
                        datatype:'json',
                        beforeSend : function(){
                                alert();
                        }
                }).done(function(result){
                    console.log(result);
                });
            
    
                
                
                $(".espacamento_card").load("adiciona_cards.php");
                document.getElementsByClassName('sobreposicao')[0].classList.add("translate_back");                        document.getElementsByClassName('sobreposicao')[0].classList.remove("translate");
                
        }
        
        </script>
</html>