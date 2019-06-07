<?php

session_start();

function GetCurVal( $sKey, $sVal = '' )
{
    if( isset( $_SESSION[ 'fv' ] )  &&  isset( $_SESSION[ 'fv' ][ $sKey ] ) )
    {
        return $_SESSION[ 'fv' ][ $sKey ];
    }

    return $sVal;
}

?><!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'> 
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    	<title>Form test</title>
		
        <meta name='robots' content='noindex, nofollow'>
        <link rel='icon' href='favicon.ico'>

        <link rel='stylesheet' href='//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
        <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Work+Sans:400,300,600'>
	    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Inconsolata'>
        <style>
            *, body {
                font-family:'Work Sans';
            }
            
            pre {
                font-family:'Inconsolata';
                color:#660000;
            }
        </style>
    </head>
    <body>
        <section class='main-container'>
            <section class='content-body'>
                <div class='row'>
                    <div class='col-sm-8'>
                        <h2>Form store test (ajax/restful)</h2>
                        <form class='form-horizontal'>
                            <div class='form-group'>
                                <label for='inputEmail3' class='col-sm-2 control-label'>Email</label>
                                <div class='col-sm-10'>
                                <input type='email' class='form-control' id='email' placeholder='Email' value='<?= GetCurVal('email') ?>'>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label for='inputPassword3' class='col-sm-2 control-label'>Password</label>
                                <div class='col-sm-10'>
                                <input type='password' class='form-control' id='pwd' placeholder='Password' value='<?= GetCurVal('pwd') ?>'>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label for='name' class='col-sm-2 control-label'>Name</label>
                                <div class='col-sm-10'>
                                <input type='text' class='form-control' id='name' placeholder='Full Name' value='<?= GetCurVal('name') ?>'>
                                </div>
                            </div>
                            <div class='form-group'>
                                <label for='address' class='col-sm-2 control-label'>Address</label>
                                <div class='col-sm-10'>
                                <input type='text' class='form-control' id='address' placeholder='Address' value='<?= GetCurVal('address') ?>'>
                                </div>
                            </div>
                            <div class='form-group'>
                            <label for='address' class='col-sm-2 control-label'>Notes</label>
                                <div class='col-sm-10'>
                                <textarea class='form-control' id='notes' placeholder='notes'><?= GetCurVal('address') ?></textarea>
                                </div>
                            </div>
                            <div class='form-group'>
                                <div class='col-sm-offset-2 col-sm-10'>
                                    <div class='checkbox'>
                                        <label for='remember'>
                                        <input type='checkbox' id='remember' name='remember' value='remember'> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class='form-group'>
                                <div class='col-sm-offset-2 col-sm-10'>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                        Default radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                        Second default radio
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                        <label class="form-check-label" for="exampleRadios3">
                                        Disabled radio
                                        </label>
                                    </div>                            
                                </div>                            
                            </div>                            
                            <div class='form-group'>
                                <div class='col-sm-offset-2 col-sm-10'>
                                    <button type='button' class='btn btn-primary' id='ok'>Sign in</button>
                                    <i>(check events in javascript console)</i>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </section>
        </section>

        <script src='//code.jquery.com/jquery-3.3.1.min.js'></script>
        <script src='//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
        <script src='//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
        <script src='js/ajax.js?v=<?= filemtime( __DIR__ . '/js/ajax.js' ) ?>'></script>
        
    </body>
</html>
