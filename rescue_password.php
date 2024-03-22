<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="public/vendor/materialize/css/materialize.min.css">
        <link rel="stylesheet" href="public/css/login.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Recuperar senha</title>
    </head>
    <body class="grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="valign-wrapper">
                    <div class="col s12 m6 logo">
                        <img src="public/images/logo-login.png" alt="Logo">
                    </div>
                    
                    <div class="col s12 m6 form-card">
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <h5 class="center">Recuperar senha</h5>
                                    <br>

                                    <div class="input-field col s12 m12">
                                        <i class="material-icons prefix">mail_outline</i>
                                        <input id="icon_prefix" type="email" class="validate">
                                        <label for="icon_prefix">E-mail</label>
                                    </div>

                                    <div class="input-field col s12 m12">
                                        <a href="index.php" class="btn waves-effect waves-light btn-large orange darken-2 right">Enviar</a>
                                    </div>

                                    <div id="rescue-login-link" class="col s12 m12">
                                        <a href="login.php" id="login-link" class="orange-text darken-2 right">Voltar para o login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script src="public/vendor/js/jquery-3.7.1.min.js"></script>
        <script src="public/vendor/materialize/js/materialize.min.js"></script>
    </body>
</html>