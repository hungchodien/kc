/**
 * Created by HOME on 9/28/2017.
 */
jQuery(document).ready(function($){
    //$(".background_header").height($( window ).height());
    $("#kc_toggle").click(function(e){
        $('.wrapper_page').addClass('menu_active');
        $(".kc_menu_chance").addClass('menu_active');
        e.preventDefault();
        return false;

    });
    $("#kc_toggle_close").click(function(e){
        $('.wrapper_page').removeClass('menu_active');
        $(".kc_menu_chance").removeClass('menu_active');
        e.preventDefault();
        return false;
    });

    var banner_adm = $(".banner_adm");
    var width = banner_adm.attr('data-width');
    var height = banner_adm.attr('data-height');
    var height_p = banner_adm.width()* height / width;
    banner_adm.height(height_p);
    $( window ).resize(function() {
        var banner_adm = $(".banner_adm");
        var width = banner_adm.attr('data-width');
        var height = banner_adm.attr('data-height');
        var height_p = banner_adm.width()* height / width;
        banner_adm.height(height_p);
    });

    var banner_mm = $(".banner_mm");
    var width_mm = banner_mm.attr('data-width');
    var height_mm = banner_mm.attr('data-height');
    var height_p_mm = banner_mm.width()* height_mm / width_mm;
    banner_mm.height(height_p_mm);
    $( window ).resize(function() {
        var banner_mm = $(".banner_mm");
        var width_mm = banner_mm.attr('data-width');
        var height_mm = banner_mm.attr('data-height');
        var height_p_mm = banner_mm.width()* height_mm / width_mm;
        banner_mm.height(height_p_mm);
    });
});
