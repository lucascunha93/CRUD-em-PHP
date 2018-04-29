<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Faça o login para entrar</title>
    <link rel="shortcut icon" href="assets/imagens/gremio.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://necolas.github.io/normalize.css/3.0.1/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css"/>
</head>
<body>

  <div class="container login">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        Digite seu e-mail para recuperar senha:</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Enviar" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">Entrar</p>
                <form class="login" action="?c=u&a=cl" method="POST">
                  <input type="text" placeholder="Nome" name="email" />
                  <input type="password" placeholder="Senha" name="senha" />
                  <input type="submit" value="Logar" class="btn btn-success btn-sm" />
                  <div class="remember-forgot">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" />
                                      Me lembre
                                  </label>
                              </div>
                          </div>
                          <div class="col-md-6 forgot-pass-content">
                              <a href="javascript:void(0)" class="forgot-pass">Esqueceu a senha</a>
                          </div>
                      </div>
                  </div>
                </form>
            </div>
        </div>
    </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>
