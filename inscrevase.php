<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Twitter clone</title>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle-collapsed" data-toggle="collapse" data-target="#navbar"
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
            <li><a href="index.php">Voltar para home</a></li>
            </ul>
              </div>
            </div>
        </nav>
        <div class="container">
         <br/><br/>
         <div class="col-md-4"></div>
         <div class="col-md-4">
             <h3>Inscreva-se já.</h3>
             <br/>
             <form method="post" action="" id="formCadastrarse">
               <div class="form-group">
                   <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário"
                          required="required">
                   </div>
                 <div class="form-group">
                     <input type="email" class="form-control" id="email" placeholder="Email"
                            required="required">
           
        </div>
                 
                  <div class="form-group">
                   <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha"
                          required="required">
                   </div>
                 <button type="submit" class="btn btn primary form-control">Inscreva-se</button>
             </form>
             </div>
         <div class="col-md-4"></div>
         <div class="clearfix"></div>
         <br/>
       <div class="col-md-4"></div>
        <div class="col-md-4"></div>
         <div class="col-md-4"></div>
        </div>
    
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
                                

                 
    </body>
</html>