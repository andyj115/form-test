<?php

session_start();

if( isset( $_POST )  &&  isset( $_POST['id'] )  &&  isset( $_POST['val'] ) )
{
    $_SESSION[ 'fv' ][ $_POST['id'] ] = $_POST['val'];

    header( "Content-type: application/json" );
    echo( json_encode( [
        'stat' 	=> 'ok',
        'id' 	=> $_POST[ 'id' ],
        'val' 	=> $_POST[ 'val' ],
        'array' => $_SESSION[ 'fv' ] ] ) );

    return;
}
