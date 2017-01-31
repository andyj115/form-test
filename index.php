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
<html lang="en">
    <head>
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
		<title>1eye.io - Form test</title>
		
        <meta name="robots" content="noindex, nofollow">
        <link rel="icon" href="favicon.ico">

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        
        <!--[if lt IE 9]>
            <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <link href='//fonts.googleapis.com/css?family=Work+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
        <style>
            *, body
            {
                font-family:'Work Sans';
            }
            
			pre
			{
                font-family:'Inconsolata';
				color:#660000;
			}
        </style>
    </head>
    <body>
        <section class="main-container">
            <section class="content-body">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Form store test (ajax/restful)</h2>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="<?= GetCurVal('inputEmail3') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Password" value="<?= GetCurVal('inputPassword3') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" placeholder="Full Name" value="<?= GetCurVal('name') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="address" placeholder="Address" value="<?= GetCurVal('address') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                    <input type="checkbox" id="remember"> Remember me
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="button" class="btn btn-default" id="ok">Sign in</button>
                                    <i>(check events in javascript console)</i>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </section>
        </section>

        <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                
                $('input').each(function() {
                    $(this).on("change", function() {
                        console.log( 'Store ID ' + $(this).attr('id') + ': ' + $(this).val() );            
                        $.post({
                            url: 'api/',
                            data: {
                                id: $(this).attr('id'),
                                val: $(this).val()
                            }
                        });
                    });
                });
                
                $('#ok').on("click", function() {
                    $('input').each(function() {
                        console.log( ' - ID ' + $(this).attr('id') + ': ' + $(this).val() );            
                        $.post({
                            url: 'api/',
                            data: {
                                id: $(this).attr('id'),
                                val: $(this).val()
                            }
                        });
                    });
                    console.warn( 'Ok, go on!!' );            
                    $.post({
                        url: 'api/',
                        data: {
                            ok: true
                        }
                    });
                });
                
            });
        </script>
        
    </body>
</html>