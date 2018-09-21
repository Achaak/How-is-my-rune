$(document).ready(function(){        
    $('body').on('click',function(event){
        if(!$(event.target).is('.input-multi-choice span, .input-multi-choice .selected')){
            $(".input-multi-choice .possible-choice").removeClass('open');
        }
    });

    $(".input-multi-choice .selected").click(function(){
        if($(this).parent().find(".possible-choice").hasClass('open'))
            $(this).parent().find(".possible-choice").removeClass('open');
        else
            $(this).parent().find(".possible-choice").addClass('open');
    });   

    $(".input-multi-choice .possible-choice span").click(function(){
        if($(this).hasClass("isClicked")) {
            $(this).parent().parent().find(".selected span:contains('"+$(this).text()+"')").remove();
            $(this).removeClass("isClicked");
        }
        else {
            $(this).parent().parent().find(".selected").append("<span>" + $(this).text() + "</span>");
            $(this).addClass("isClicked");
        }
        
        toolsDisplayRunes();
    });
});