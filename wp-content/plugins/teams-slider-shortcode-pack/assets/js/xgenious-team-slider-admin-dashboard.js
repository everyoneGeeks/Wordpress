(function ($) {
    "use strict";
    /*=========================================
       Price Plan ShortCode 
    ==========================================*/
    $(document).on('change', '#xgeinous-team-slider-options', function () {
        var value = $(this).val();
        $('#show_preview_img').attr('src', xTeamSliderJs.pluginsUrl + '/assets/img/' + value + '.jpg');
        var value = $('#xgeinous-team-slider-options').val();
        $('#show_short_code').text('[xgenious_team_slider_' + value +']');
    });
    $(document).on('click', '#xbtn_submit', function () {

        var xcount = $('#xcount').val();
        var xitems = $('#xitems').val();
        var xautoplay = $('#xautoplay').val();
        var xcategory = $('#xcategory').val();
        var xsocial = $('#xsocial').val();
        var xautoplayTimeout = $('#xautoplayTimeout').val();
        var xsocial_color = $('#xsocial_color').val();
        var value = $('#xgeinous-team-slider-options').val();

        $('#show_short_code').text('[xgenious_team_slider_' + value + ' count="' + xcount + '" items="' + xitems + '" atuoplay="' + xautoplay + '" category="' + xcategory + '" social="' + xsocial + '" autopalyTimeout="' + xautoplayTimeout + '" social_color="' + xsocial_color + '"]');
    });

}(jQuery));