<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>02 Droppable | jQuery UI / Drag and Drop</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
</head>
<body>
<style>
/*
Theme Name: jqueryui-com
Template: jquery
*/

.title {
  color: #B24926;
}

#content a:hover {
  color: #333;
}

#banner-secondary p.intro {
  padding: 0;
  float: left;
  width: 50%;
}

#banner-secondary .download-box {
  border: 1px solid #aaa;
  background: #333;
  background: -webkit-linear-gradient(left, #333 0%, #444 100%);
  background: linear-gradient(to right, #333 0%, #444 100%);
  float: right;
  width: 40%;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  border-radius: 5px;
  box-shadow: 0 0 8px rgba(0, 0, 0, 0.8);
}

#banner-secondary .download-box h2 {
  color: #71D1FF;
  font-size: 26px;
}

#banner-secondary .download-box .button {
  float: none;
  display: block;
  margin-top: 15px;
}

#banner-secondary .download-box p {
  margin: 15px 0 5px;
}

#banner-secondary .download-option {
  width: 45%;
  float: left;
  font-size: 16px;
}

#banner-secondary .download-legacy {
  float: right;
}

#banner-secondary .download-option span {
  display: block;
  font-size: 14px;
  color: #71D1FF;
}

#content .dev-links {
  float: right;
  width: 30%;
  margin: -15px -25px .5em 1em;
  padding: 1em;
  border: 1px solid #666;
  border-width: 0 0 1px 1px;
  border-radius: 0 0 0 5px;
  box-shadow: -2px 2px 10px -2px #666;
}

#content .dev-links ul {
  margin: 0;
}

#content .dev-links li {
  padding: 0;
  margin: .25em 0 .25em 1em;
  background-image: none;
}

.demo-list {
  float: right;
  width: 25%;
}

.demo-list h2 {
  font-weight: normal;
  margin-bottom: 0;
}

#content .demo-list ul {
  width: 100%;
  border-top: 1px solid #ccc;
  margin: 0;
}

#content .demo-list li {
  border-bottom: 1px solid #ccc;
  margin: 0;
  padding: 0;
  background: #eee;
}

#content .demo-list .active {
  background: #fff;
}

#content .demo-list a {
  text-decoration: none;
  display: block;
  font-weight: bold;
  font-size: 13px;
  color: #3f3f3f;
  text-shadow: 1px 1px #fff;
  padding: 2% 4%;
}

.demo-frame {
  width: 70%;
  height: 350px;
}

.view-source a {
  cursor: pointer;
}

.view-source > div {
  overflow: hidden;
  display: none;
}

/*@media all and (max-width: 600px) {*/
/*  #banner-secondary p.intro, #banner-secondary .download-box {*/
/*    float: none;*/
/*    width: auto;*/
/*  }*/
/*  #banner-secondary .download-box {*/
/*    overflow: auto;*/
/*  }*/
/*}*/

/*@media only screen and (max-width: 480px) {*/
/*  #content .dev-links {*/
/*    width: 55%;*/
/*    margin: -15px -29px .5em 1em;*/
/*    overflow: hidden;*/
/*  }*/
/*}*/

#gallery {
  float: left;
  width: 65%;
  min-height: 12em;
}

.gallery.custom-state-active {
  background: #eee;
}

.gallery li {
  float: left;
  width: 96px;
  padding: 0.4em;
  margin: 0 0.4em 0.4em 0;
  text-align: center;
}

.gallery li h5 {
  margin: 0 0 0.4em;
  cursor: move;
}

.gallery li a {
  float: right;
}

.gallery li a.ui-icon-zoomin {
  float: left;
}

.gallery li img {
  width: 100%;
  cursor: move;
}

#trash {
  
  width:200px;
    height:300px;
    border: 1px solid #3a945b;
    background: #f0fff0;
    float:right;
  
}

#trash2 {
  margin:10px;
  width:200px;
    height:300px;
    border: 1px solid #3a945b;
    background: #f0fff0;
    float:right;
  
}

#trash h4 {
  line-height: 16px;
  margin: 0 0 0.4em;
  float:right;
}

#trash h4 .ui-icon {
  float: left;
  float:right;
}

#trash .gallery h5 {
  display: none;
  float:right;
  
}

#trash2 h4 {
  line-height: 16px;
  margin: 0 0 0.4em;
  float:right;
}

#trash2 h4 .ui-icon {
  float: left;
  float:right;
}

#trash2 .gallery h5 {
  display: none;
  float:right;
  
}

</style>






<p>https://jqueryui.com/droppable/#photo-manager</p>
<div class="ui-widget ui-helper-clearfix">
  <ul id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">
    <li class="ui-widget-content ui-corner-tr">
      <h5 class="ui-widget-header">High Tatras</h5>
      <img src="https://jqueryui.com/resources/demos/droppable/images/high_tatras_min.jpg" alt="The peaks of High Tatras" width="96" height="72">
      <a href="https://jqueryui.com/resources/demos/droppable/images/high_tatras.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>
      <a href="link/to/trash/script/when/we/have/js/off" title="Delete this image" class="ui-icon ui-icon-trash">Delete image</a>
    </li>
    <li class="ui-widget-content ui-corner-tr">
      <h5 class="ui-widget-header">High Tatras 2</h5>
      <img src="https://jqueryui.com/resources/demos/droppable/images/high_tatras2_min.jpg" alt="The chalet at the Green mountain lake" width="96" height="72">
      <a href="https://jqueryui.com/resources/demos/droppable/images/high_tatras2.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>
      <a href="link/to/trash/script/when/we/have/js/off" title="Delete this image" class="ui-icon ui-icon-trash">Delete image</a>
    </li>
    <li class="ui-widget-content ui-corner-tr">
      <h5 class="ui-widget-header">High Tatras 3</h5>
      <img src="https://jqueryui.com/resources/demos/droppable/images/high_tatras3_min.jpg" alt="Planning the ascent" width="96" height="72">
      <a href="https://jqueryui.com/resources/demos/droppable/images/high_tatras3.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>
      <a href="link/to/trash/script/when/we/have/js/off" title="Delete this image" class="ui-icon ui-icon-trash">Delete image</a>
    </li>
    <li class="ui-widget-content ui-corner-tr">
      <h5 class="ui-widget-header">High Tatras 4</h5>
      <img src="https://jqueryui.com/resources/demos/droppable/images/high_tatras4_min.jpg" alt="On top of Kozi kopka" width="96" height="72">
      <a href="https://jqueryui.com/resources/demos/droppable/images/high_tatras4.jpg" title="View larger image" class="ui-icon ui-icon-zoomin">View larger</a>
      <a href="link/to/trash/script/when/we/have/js/off" title="Delete this image" class="ui-icon ui-icon-trash">Delete image</a>
    </li>
  </ul>
  <div id="trash" class="ui-widget-content ui-state-default">
    <h4 class="ui-widget-header">
      Drop Items:<span id="items">0</span>
      <!-- <span class="ui-icon ui-icon-trash"></span> Trash -->
    </h4>
  </div>
  <div id="trash2" class="ui-widget-content ui-state-default">
    <h4 class="ui-widget-header">
      Drop Items:<span id="items">0</span>
      <!-- <span class="ui-icon ui-icon-trash"></span> Trash -->
    </h4>
  </div>
  <button type="button" id="save">Save</button>
  <button type="button" id="clear">Clear</button>
  <p>Stored Items</p>
  <ul id="storedItems">
  </ul>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
<script>


  $(function() {
    // there's the gallery and the trash
    var $gallery = $("#gallery"),
        $trash = $("#trash"),
        $trash2 = $("#trash2"),
        $items = $("#items");

    // let the gallery items be draggable
    $("li", $gallery).draggable({
      cancel: "a.ui-icon", // clicking an icon won't initiate dragging
      revert: "invalid", // when not dropped, the item will revert back to its initial position
      containment: "document",
      helper: "clone",
      cursor: "move"
    });


    
    $trash.droppable({
      accept: "#gallery > li",
      activeClass: "ui-state-highlight",
      drop: function(event, ui) {
        deleteImage(ui.draggable);
      }
    });
    
    $trash2.droppable({
      accept: "#gallery > li",
      activeClass: "ui-state-highlight",
      drop: function(event, ui) {
        deleteImage(ui.draggable);
      }
    });

    // let the gallery be droppable as well, accepting items from the trash
    $gallery.droppable({
      accept: "#trash li, #trash2 li",
      activeClass: "custom-state-active",
      drop: function(event, ui) {
        recycleImage(ui.draggable);
      }
    });
    
    
    

    // image deletion function
    var recycle_icon = "<a href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";

    function deleteImage($item) {
      var obj = cloneObject($item);
      var $list = $("ul", $trash).length ?
          $("ul", $trash,): 
          
          
		      $("<ul class='gallery ui-helper-reset'/>").appendTo($trash);
      obj.find("a.ui-icon-trash", "a.ui-icon-trash2").remove();
      obj.append(recycle_icon).appendTo($list).fadeIn(function() {
        obj
          .animate({
          width: "48px"
        })
          .find("img")
          .animate({
          height: "36px"
        });
      });
      $items.text($("li", $list).length);
		}

    // image recycle function
    var trash_icon = "<a href='link/to/trash/script/when/we/have/js/off' title='Delete this image' class='ui-icon ui-icon-trash'>Delete image</a>";
     var trash2_icon = "<a href='link/to/trash2/script/when/we/have/js/off' title='Delete this image' class='ui-icon ui-icon-trash2'>Delete image</a>";

    function recycleImage($item) {
      
      $item.fadeOut(function() {
        $item.remove();
	      $items.text($("li", $("ul", $trash, $trash2)).length);
      });
    }

    // image preview function, demonstrating the ui.dialog used as a modal window
    function viewLargerImage($link) {
      var src = $link.attr("href"),
        title = $link.siblings("img").attr("alt"),
        $modal = $("img[src$='" + src + "']");

      if ($modal.length) {
        $modal.dialog("open");
      } else {
        var img = $("<img alt='" + title + "' width='384' height='288' style='display: none; padding: 8px;' />")
          .attr("src", src).appendTo("body");
        setTimeout(function() {
          img.dialog({
            title: title,
            width: 400,
            modal: true
          });
        }, 1);
      }
    }

    function cloneObject($item) {
      var obj = $item.clone();
      obj.draggable({
        cancel: "a.ui-icon",
        revert: "invalid",
        containment: "document",
        helper: "clone",
        cursor: "move"
      });
      obj.click(function(event) {
        var $item = $(this),
          $target = $(event.target);
        if ($target.is("a.ui-icon-trash", "a.ui-icon-trash2")) {
          deleteImage($item);
        } else if ($target.is("a.ui-icon-zoomin")) {
          viewLargerImage($target);
        } else if ($target.is("a.ui-icon-refresh")) {
          recycleImage($item);
        }

        return false;
      });

      return obj;
    }

    // resolve the icons behavior with event delegation
    $("ul.gallery > li").click(function(event) {
      var $item = $(this),
        $target = $(event.target);
      if ($target.is("a.ui-icon-trash", "a.ui-icon-trash2")) {
        deleteImage($item);
      } else if ($target.is("a.ui-icon-zoomin")) {
        viewLargerImage($target);
      } else if ($target.is("a.ui-icon-refresh")) {
        recycleImage($item);
      }

      return false;
    });

    $("button#save").click(function() {
      var items = $("li", $("ul", $trash, $trash2));
      for (var i = 0, len = items.length; i < len; i++) {
        var item = items[i];
        var element = {
          title: $("h5", item).text(),
          img: $("img", item).attr("src")
        }
	      localStorage.setItem(i, JSON.stringify(element));
      }
      // 保存されたことを確認する
      for (var i = 0, len = localStorage.length; i < len; i++) {
        var element = JSON.parse(localStorage.getItem(i));
        $("ul#storedItems").append("<li> Title : " + element.title + "　File : " + element.img);
      }
    });

    $("button#clear").click(function() {
      localStorage.clear();
	    $("ul#storedItems li").remove();
    });
  });

/*  function updateCount(dragId, val) {
    var cnt = numOfEachId[dragId] + val;
    numOfEachId[dragId] = cnt;
    var obj = $('li#'+dragId, $("ul", $trash));
    $('.cc1', obj).text(cnt);
  }*/






</script>
</body>
</html>