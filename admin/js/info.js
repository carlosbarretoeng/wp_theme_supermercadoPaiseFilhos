/*
$(document).ready(function (){
    $("input[name='pais_e_filhos_theme_telephone']").mask("(00) 0000-0000");
    $("input[name='pais_e_filhos_theme_whatsapp']").mask("(00) 0 0000-0000");

    $("#loadBannerImage").click((evt) => {
        evt.preventDefault();
        let imageFrame = wp.media({
            title: 'Select a imagem para o Banner',
            multiple : false,
            library : {
                type : 'image',
            }
        });

        imageFrame.on('close', async function() {
            let selection = imageFrame.state().get('selection');

            let selectionArray = await selection.map(el => {
                return el['id']
            });

            if(selectionArray.length <= 0) return;
        });

        imageFrame.open();
    });
})

function Refresh_Image(the_id){
    var data = {
        action: 'myprefix_get_image',
        id: the_id
    };

    jQuery.get(ajaxurl, data, function(response) {

        if(response.success === true) {
            jQuery('#myprefix-preview-image').replaceWith( response.data.image );
        }
    });
}
*/
/*
(function($) {
    $('document').ready(() => {
        $("input[name='pais_e_filhos_theme_telephone']").mask("(00) 0000-0000");
        $("input[name='pais_e_filhos_theme_whatsapp']").mask("(00) 0 0000-0000");

        $("#loadBannerImage").click((evt) => {
            evt.preventDefault();
            let imageFrame = wp.media({
                title: 'Select a imagem para o Banner',
                multiple : false,
                library : {
                    type : 'image',
                }
            });

            imageFrame.on('close', async function() {
                let selection = imageFrame.state().get('selection');

                let selectionArray = await selection.map(el => {
                    return el['id']
                });

                if(selectionArray.length <= 0) return;

                //

            });

            imageFrame.open();
        });
    });
})( jQuery );
*/

const $j = jQuery.noConflict();

$j(function(){
    $j("input[name='pais_e_filhos_theme_telephone']").mask("(00) 0000-0000");
    $j("input[name='pais_e_filhos_theme_whatsapp']").mask("(00) 0 0000-0000");

    $j("#loadBannerImage").click((evt) => {
        evt.preventDefault();
        let imageFrame = wp.media({
            title: 'Select a imagem para o Banner',
            multiple : false,
            library : {
                type : 'image',
            }
        });

        imageFrame.on('close', async function() {
            let selection = imageFrame.state().get('selection');

            let selectionArray = await selection.map(el => {
                return el['id']
            });

            if(selectionArray.length <= 0) return;

            $j.get(ajaxurl, {
                action: 'banner_image',
                id: selectionArray[0]
            }, (response) => {
                if(response.success === true) {
                    console.log(response)
                    $j('#pais_e_filhos_banenr_preview').replaceWith( response.data.image );
                    $j('input[name="pais_e_filhos_theme_banner"]').val(selectionArray[0]);
                }
            });

        });

        imageFrame.open();
    });
});
