/*
作者：淡新举
联系：http://www.scriptlover.com
功能：使元素fixed定位
*/
var fixedPosition = function(element ,top ,left){
	element.style.display = "block";
	if (!window.XMLHttpRequest && window.ActiveXObject)
	{
		element.style.position = "absolute";
		fixedPosition.setGlobal();
	}
	else
	{
		element.style.position = "fixed";
	}
	element.style.top = top +"px";
	element.style.left = left +"px";
};

/*添加css规则*/
fixedPosition.addCSSRule = function(key ,value){
   var css = document.styleSheets[document.styleSheets.length-1];
	css.cssRules ? 
		 (css.insertRule(key +"{"+ value +"}", css.cssRules.length)) :
		 (css.addRule(key ,value));

};

/*标志特定公共规则是否存在*/
fixedPosition.inited = false;

/*设置特定公共规则*/
fixedPosition.setGlobal = function(){
	if (! fixedPosition.inited)
	{
		document.body.style.height = "100%";
		document.body.style.overflow = "auto";
		fixedPosition.addCSSRule("*html" ,"overflow-x:auto;overflow-y:hidden;");
		fixedPosition.inited = true;
	}
};