var tim = setInterval(function(){
    if(document.getElementById("poster")){
        pop();
        clearInterval(tim);
    }

},200);


function pop(){
    var bot = -200;
    var inter = setInterval(function(){
        bot += 1;
        if(bot > 5){clearInterval(inter);}
        $("#poster").css("bottom",bot+"px");
    },5);
    

    $(".post-title a").click(function(){
        $("#poster").hide();
    });
}