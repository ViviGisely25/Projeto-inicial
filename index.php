<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Twitter clone</title>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script>
            //código javascript
        </script>
        
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle-collapsed"data-toggle="collapse" data-target="#navbar" 
                    aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <img src="images/icone_twitter.png"/>
        </div>
            <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav nabar-nav navbar right">
            <li><a href="inscrevase.php">inscrever-se</a></li>
            <li class="">
                <a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">Entrar</a>
                <ul class="dropdown-menu" aria-labelledby="entrar">
                    <div class="col-md-12">
                        <p>Você possui uma conta?</h3>
                            <br/>
                        <form method="post" action="" id="formLogin">
                            <div class=""form-group>
                                <input type="text" class="form-control" id="campo_usuario" name="usuario"
                                       placeholder="Usuário"/>
                                <div class=""form-group>
                                <input type="password" class="form-control red" id="campo_senha" name="senha"
                                       placeholder="Senha"/>
                                </div>
                                <button type="button" class="btn btn-primary" id="btn_login">Entrar</button>
                                <br/><br/>
                        </form>
                    </form>
                </ul>
            </li>
            </ul>
</div>
                    </div>
                    </nav>
        <div class="container">
            <div class="jumpbotron">
                <h1>Bem vindo ao twitter clone</h1>
                <p>Veja o que está acontecendo agora...</p>
                </div>
            <div class="clearfix"></div>
            </div>   
        
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
                                
                                       
                        
           
            
            
            
                    
        
    </body>
</html>
