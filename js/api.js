// api.js

$(document).ready(function() {
/*
    window.console = {
        log = function( sMsg ) { },
        info = function( sMsg ) { },
        warn = function( sMsg ) { },
        //...
    }
*/
    $('input').each(function() {
        $(this).on('change', function() {
            console.log( 'Store ID ' + $(this).attr('id') + ': ' + $(this).val() );            
            $.post({
                url: 'api/',
                data: {
                    id: $(this).attr('id'),
                    val: $(this).val()
                }
            }).done(function( data ) {
                console.log( 'done!' );
            }).fail(function() {
                console.error( 'error' );
            }).always(function() {
                console.warn( 'alyway... ' + $(this).attr('id') );
            });
        });
    });

    $('input:checkbox').each(function() {
        $(this).change(function () {
            var name = $(this).attr('id');
            var check = $(this).attr('checked');
            console.log( 'Change ID ' + name + ' to ' + check );
        });
    });

    $('#ok').on('click', function() {
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
        console.log( 'Ok, go on!!' );            
        $.post({
            url: 'api/',
            data: {
                ok: true
            }
        }).done(function( data ) {
            console.log( 'done!' );
        }).fail(function() {
            console.error( 'error' );
        }).always(function() {
            console.warn( 'alyway...' );
        });
    });
    
});