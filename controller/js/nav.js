$(document).ready(function(){
    $("nav li").click(function(e){              
        $('article').hide();              
        $('article:nth-child('+ ($(this).index()+1) +')').show();

        $("nav li").removeClass('selected');
        $(this).addClass('selected');
    });
});