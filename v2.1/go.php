<?php
if (substr($Info['url'], -1) == "/") {
    header('Location: https://goo.gl/'.trim(substr($Info['url'], strrpos($Info['url'], '?') + 1), '/'));
}

?>
<!-- Popunder -->
<script data-cfasync='false' type='text/javascript'src='//p220146.clksite.com/adServe/banners?tid=220146_413113_9&tagid=2'></script>

<script>
var url = window.location.href;

var hash= " ";
if(url.indexOf("?") != -1){
    hash = url.substring(url.indexOf('?')+1);
if(hash != ""){
(function(){
  var counter = 7;
  setInterval(function() {
    counter--;
    if (counter >= 0) {
      span = document.getElementById("count");
      span.innerHTML = counter;
    }
    // Display 'counter' wherever you want to display it.
    if (counter === 0) {
        document.getElementById("goto").href = "https://goo.gl/"+hash;
        clearInterval(counter);
    }
  }, 1000);
})();
}else{
//window.location.href = "../";
}
}else{
//window.location.href = "../";
}
</script>

<div class="navbar navbar-info">
  <div class="container-fluid">
    <div class="navbar-header">
      <!--button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button-->
      <a href="../" style="zoom: 1.5;" class="navbar-brand" >URL🐨Shortener V2.1</a>
      <a href="http://www.revenuehits.com/lps/pubref/?ref=@RH@gf1vvTTO0VskYGrVMt5ZfuiYnnC3Du8g" target="_blank">
          <img class="img-responsive" src="http://revenuehits.com/publishers/media/img/v5/728x90_v5.jpg" border="0" style="display: inline-table;"></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a target="_blank" href="javascript:void(0)" class="btn btn-raised btn-success btn-sm" id="goto">skip ad after (<span style="fon" id="count">7</span>) seconds...</a></li>
    </ul>
  </div>
</div>

<div class="container-fluid text-center">
    <div class="well" style="height: 100%;position: absolute;right: 0;left: 0;overflow: hidden;">
        <script type="text/javascript">effadid = 1786</script><script  language="javascript" type="text/javascript" src="//exchangeff.com/ad.js"></script>

        <iframe src="ads.html"
style="border: 0;width: 100%;height: 100%;margin: 0;right: 0;left: 0;overflow: hidden;padding: 0;position: absolute;"
        >Your browser doesn't support iFrames.</iframe>


        <script data-cfasync='false' type='text/javascript' src='//p220146.clksite.com/adServe/banners?tid=220146_413113_5&type=footer&size=728x90'></script>

<script type="text/javascript">!function(a,b){var c=b.createElement("script");c.src="//p220146.intrev.co/absd.js",(a._sab=a._sab||[]).push(["220146_413113_5","220146"]),b.body.appendChild(c)}(window,document);</script>

    </div>

</div>
