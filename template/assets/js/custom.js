// $(function() {
//
//
//
// })(jQuery);


$(".lang_sw").click(function(){
    var lang = $(this).attr( "lang" );
    document.cookie = "cflang="+lang;
    window.location.reload(false);
});