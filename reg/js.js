$(document).ready(function(){
    $(".show").click(function(){
        $("#bg").show();
        $("#"+($(this).attr("box"))).slideDown("fast");
    });
    $(".close").click(function(){
        $("#bg").hide();
        $(".LotsBlock").slideUp("fast");
        return false;
    })
});

$(document).ready(function(){
    $(".show").click(function(){
        $("#bg").show();
        $("#"+($(this).attr("box"))).slideDown("fast");
    });
    $(".close").click(function(){
        $("#bg").hide();
        $(".ItemsBlock").slideUp("fast");
        return false;
    })
});

$(document).ready(function(){
    $(".show").click(function(){
        $("#bg").show();
        $("#"+($(this).attr("box"))).slideDown("fast");
    });
    $(".close").click(function(){
        $("#bg").hide();
        $(".BasketBlock").slideUp("fast");
        return false;
    })
});