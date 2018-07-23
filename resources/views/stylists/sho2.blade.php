<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Draggable - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="/demos/style.css" />
  <style>
  #draggable { width: 150px; height: 150px; padding: 0.5em; }
  </style>
  <script>
  $(function() {
    $( "#draggable" ).draggable();
  });
  </script>
</head>
<body>

<h3>ドラッグ&#038;ドロップのサンプル</h3>
<p>ドラッグ範囲を限定して、ドロップエリア内にのみドラッグ可能なように設定しました。カートに追加されれば画像を拡大、カートの中にある時は左のエリアへ戻す事が出来ます。</p>
<div class="demo ui-widget ui-helper-clearfix" id="demo">
<ul id="gallery" class="ui-helper-reset ui-helper-clearfix">
	<li class="ui-widget-content ui-corner-tr">
	 <p class="ui-widget-header">ケーキ<span class="ui-icon ui-icon-cart">購入する</span></p>
	 <img src="http://blog.diimo.net/files/asset/25/item1.jpg" alt="ケーキ" width="30" />
	</li>
	<li class="ui-widget-content ui-corner-tr">
	 <p class="ui-widget-header">苺ムース<span class="ui-icon ui-icon-cart">購入する</span></p>
	 <img src="http://blog.diimo.net/files/asset/25/item2.jpg" alt="苺ムース" width="30" />
	</li>
	<li class="ui-widget-content ui-corner-tr">
	 <p class="ui-widget-header">ワッフル<span class="ui-icon ui-icon-cart">購入する</span></p>
	 <img src="http://blog.diimo.net/files/asset/25/item3.jpg" alt="ワッフル" width="30" />
	</li>
</ul>
<div id="cart" class="ui-widget-content ui-state-default">
<p class="ui-widget-header"><span class="ui-icon ui-icon-star" style="float:left;"></span>&nbsp;お買い物かご</p>
<span id="counter"></span>
</div>


<style scoped>
#demo { width:550px; display:block; border:#999 1px solid; padding:10px 0; }
#gallery { width:200px; height:400px; float:left; }
#gallery .custom-state-active { background:#efefef; }
#gallery li, #cart li { padding:4px; text-align:center; float:left; list-style:none; display:inline-block; }
#gallery li p { margin:0 0 4px; cursor:move; }
#gallery li span { float:right; }
#cart { width:330px; height:400px; float:right; }
#cart p { line-height:1.5; margin:0 0 4px; }
#cart p span { float:left; }
</style>
<script type="text/javascript">
var _$ = jQuery;
_$(function()
{
var $gallery = _$("#gallery");
var $cart = _$("#cart");
var recycle_icon = "<span class='ui-icon ui-icon-refresh'>元に戻す</span>";
var cart_icon = "<span class='ui-icon ui-icon-cart'>購入する</span>";
_$("li", $gallery).draggable({
	cancel: "span.ui-icon",
	revert: "invalid",
	containment: _$("#demo").length ? "#demo" : "parent",
	helper: "clone",
	cursor: "move"
});
$cart.droppable({
	accept: "#gallery > li",
	activeClass: "ui-state-highlight",
	drop: function(ev, ui){ setImage(ui.draggable); }
});
$gallery.droppable({
	accept: "#cart li",
	activeClass: "ui-state-highlight",
	drop: function(ev, ui){ recycleImage( ui.draggable ); }
});
function setImage($item){
$item.fadeIn(function(){
	$item.find(".ui-icon-cart").remove();
	$item.find("img").width("110px");
	$item.find("p").append(recycle_icon);
	$item.appendTo($cart);
counter(0);
});
}
function recycleImage($item){
$item.fadeIn(function(){
	$item.find(".ui-icon-refresh").remove();
	$item.find("img").width("30px");
	$item.find("p").append(cart_icon);
	$item.appendTo($gallery);
counter(-1);
});
}
function counter(plus){
var n = $cart.find('li').length + plus;
var str = "現在の商品数：<b>"+ n +"</b>個です。";
if(n <= 0) str = "";
_$("#counter").html(str);
}
});
</script>
</body>
</html>