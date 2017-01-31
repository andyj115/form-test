<?php

session_start();

if( isset( $_POST )  &&  isset( $_POST['id'] )  &&  isset( $_POST['val'] ) )
{
    $_SESSION[ 'fv' ][ $_POST['id'] ] = $_POST['val'];
}
