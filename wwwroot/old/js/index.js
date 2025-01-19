/**
 * Created by hesignchina on 16/12/1--scf
 */
/*$(function (){
     $(window).resize(function() {
         var Ww = $(window).width();
         if (Ww <= 790){
             removeClass();
         }else{
             addclassw();
             $("addclass").css({
             position:absolute,
             top:0,
             left:0
             });
         }
     });
 });*/
function removeClass(){
    $("#containerIndex").find("#ulbox li").removeClass("addclass");
}
function addclassw(){
    $("#containerIndex").find("#ulbox li").addClass("addclass");
}
/*$(function () {
    var liDom = document.getElementById("ulbox");
    var tabsDom = document.getElementById("itemsbox2");
    var oli = liDom.getElementsByTagName("li");
    var odiv = tabsDom.getElementsByClassName("ItemsAlls");
    for(var i=0;i<oli.length;i++){
        oli[i].index = i;
        oli[i].onclick=function(){
            show(this.index);
        }
    }
    function show(a){
        for(var i=0;i<oli.length;i++){
            odiv[i].style.display = "none";
            odiv[a].style.display = "block";
        }
    };
});*/
/*function seleT(type){
    for(i=1;i<=5;i++){
        if(i==type){
            document.getElementById("Items"+i).style.display="block";
        }else{
            document.getElementById("Items"+i).style.display="none";
        }
    }
}*/
/*$(function () {
     if(document.body.clientWidth <= 800){
         $("#containerIndex").find("#ulbox li").removeClass("addclass");
     }
});*/
