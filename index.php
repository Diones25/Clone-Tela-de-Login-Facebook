<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Facebook - entre ou cadastre-se</title>
    <!--Aplicar depois as meta tags-->
    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
    <link rel="stylesheet"href="style.css">
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>Facebook</h2>  
            </div><!--logo-->
            <form method="post" class="form-login">
                <div class="form-element">
                    <p>Email ou telefone</p>
                    <input type="email"/>
                </div><!--form-element-->
                <div class="form-element">
                    <p>Senha</p>
                    
                    <input type="password"/>
                    
                </div><!--form-element-->
                    <p>Esqueceu conta?</p>
                <div class="form-element">
                    <input type="submit" name="acao" value="Entrar" />
                </div><!--form-element-->
            </form><!--form-login-->
            <div class="clear"></div> 
        </div><!--center-->
    </header>


    <section class="main">
        <p>O Facebook ajuda você a se conectar e<br>
        compartilhar com as pessoas que fazem parte<br>da sua vida.</p>
        <div class="center">
            <div class="img-pessoas">
                <img src="img1.png">
            </div><!--img-pessoas-->

            <div class="abrir-conta">
                <h2>Abra uma conta</h2>
                <h3>É gratuito e sempre será.</h3>    
            
                <form class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text"> 
                    </div><!--w50-->
                    <div class="w50">
                        <input placeholder="Sobrenome" type="text"> 
                    </div><!--w50-->
                    <div class="w100">
                        <input placeholder="Celular ou email" type="email"> 
                    </div><!--w100-->
                    <div class="w100">
                        <input placeholder="Nova senha" type="password"> 
                    </div><!--w100-->

                    <div class="w100">
                        <h2>Data de nascimento</h2>
                        <select name="nascimento-dia" class="nascimento">
                            <?php
                                for($i = 1; $i <=31; $i++){
                            ?>
                        <option value="<?php echo $i; ?>"><?php echo $i;?></option>
                        <?php } ?>
                        </select>
                        <select name="nascimento-mes" class="nascimento">
                            <!--Aplicar depois o PHP-->
                        <option value="0">Junho</option>
                        </select>
                        <select name="nascimento-ano" class="nascimento">
                        <?php
                                for($i = 1960; $i <=2018; $i++){
                            ?>
                        <option value="<?php echo $i; ?>"><?php echo $i;?></option>
                        <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div><!--w100-->
                    
                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="masculino">
                            <h2>Masculino</h2>
                            
                        </div><!--radio-->
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="feminino">
                            <h2>Feminino</h2>
                            
                        </div><!--radio-->
                        
                        <div class="clear"></div>
                        
                    </div><!--w100-->

                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastre-se">
                    </div><!--w100-->

                    <div class="clear"></div>
                </form><!--criar-conta-->
            </div><!--abrir-conta-->

            <div class="clear"></div>
        </div><!--center-->
    </section><!--main-->

    <section>
        <div class="center">
            <a class="select-lingua" href="">Português (BR)</a>
            <a href="#">English (US)</a>
            <a href="#">Español</a>
            <a href="#">Français (France)</a>
            <a href="#">Italiano </a>
            <a href="#">Deutsch</a>
            <a href="#">العربية</a>
            <a href="#">हिन्दी</a>
            <a href="#">中文(简体)</a>
            <a href="#">日本語</a>
        </div><!--center-->
        <div style="border:0; padding-top: 10px;" class="center">
            <a href="#">Cadastre-se</a>
            <a href="#">Entrar</a>
            <a href="#">Messenger</a>
            <a href="#">Facebook Lite</a>
            <a href="#">Celular</a>
            <a href="#">Encontrar amigos</a>
            <a href="#">Pessoas</a>
            <a href="#">Páginas</a>
            <a href="#">Locais</a>
            <a href="#">Jogos</a>
            <a href="#">Locais</a>
            <a href="#">Marketplace</a>
            <a href="#">Grupos</a>
            <a href="#">Receitas</a>
        </div><!--center-->
    </section><!--linguas-->
</body>
</html>