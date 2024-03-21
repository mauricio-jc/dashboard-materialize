<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="public/vendor/materialize/css/materialize.min.css">
        <link rel="stylesheet" href="public/css/style.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Login</title>
    </head>
    <body class="auth grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col m6">
                        6-columns (one-half)
                    </div>
                    
                    <div class="col m6">
                        <div class="input-field col m12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">First Name</label>
                        </div>

                        <div class="input-field col m12">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone">Telephone</label>
                        </div>
                    </div>
    
                <!-- <form class="col s12">
                    <div class="row">
                        
                        
                    </div>
                </form> -->
            </div>
        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script src="public/vendor/js/jquery-3.7.1.min.js"></script>
        <script src="public/vendor/materialize/js/materialize.min.js"></script>
    </body>
</html>