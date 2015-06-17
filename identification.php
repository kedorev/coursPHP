<?php
/**
 * Created by PhpStorm.
 * User: kedoPortable
 * Date: 17/06/2015
 * Time: 12:15
 */
?>

<!--
/**
 * Created by PhpStorm.
 * User: kedoPortable
 * Date: 09/06/2015
 * Time: 09:48
 */
-->

<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
    <head>
        <title>Bootstrap et bilbiotheque JS - login</title>
        <link rel="stylesheet" href="CSS/global.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="JS/global.js"></script>
    </head>
    <body id="body">
    <div class="container">
        <div class="row">
            <div class="col-xs-2"></div>
            <div class="col-xs-8 text-center">
                <div class="row">
                    <div class="col-xs-6">
                        <H3>Login</H3>
                        <div class="form-group">
                            <label for="login">Identifiant</label>
                            <input type="text" class="form-control" id="LoginNom" placeholder="Enter login">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="LoginPassword1" placeholder="Password">
                        </div>
                        <button type="button" class="btn btn-default" id="Login">Login</button>
                    </div>
                    <div class="col-xs-6">
                        <H3>New Account</H3>
                        <div class="form-group">
                            <label for="login">Identifiant</label>
                            <input type="text" class="form-control" id="RegisterNom" placeholder="Enter login">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="RegisterPassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="RegisterPassword2" placeholder="Password">
                        </div>

                        <button type="button" class="btn btn-default" id="NewAccount">Create new account</button>
                    </div>
                </div>
            </div>
            <div class="col-xs-2">

            </div>
        </div>
    </div>
    </body>
</html>