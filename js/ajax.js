// ajax.js

$(document).ready(function() {

    $('input').each(function() {
        $(this).on('change', function() {
            console.log( 'Store ID ' + $(this).attr('id') + ': ' + $(this).val() );            
            $.post({
                url: 'api/',
                data: {
                    id:  $(this).attr('id'),
                    val: $(this).val()
                }
            }).done(function( data ) {
                console.log( 'done!' );
            }).fail(function() {
                console.error( 'error' );
            });
        });
    });

    $('input:checkbox').each(function() {
        $(this).change(function () {
            var name =  $(this).attr('id');
            var check = $(this).is(":checked");
            console.log( 'Change ID ' + name + ' to ' + check );
        });
    });

    $('#ok').on('click', function() {
        $('input').each(function() {
            console.log( ' - ID ' + $(this).attr('id') + ': ' + $(this).val() );            
            $.post({
                url: 'api/',
                data: {
                    id:  $(this).attr('id'),
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
        });
    });
    
});