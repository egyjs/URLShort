<div id="fb-root"></div><script>!function(e,t,n){var o,c=e.getElementsByTagName(t)[0];e.getElementById(n)||((o=e.createElement(t)).id=n,o.src="//connect.facebook.net/ar_AR/sdk.js#xfbml=1&version=v2.9",c.parentNode.insertBefore(o,c))}(document,"script","facebook-jssdk")</script><div class="navbar navbar-info"><div class="container-fluid"><div class="navbar-header"><h1 class="navbar-brand">URL🐨Shortener V2.1</h1></div></div></div><div class="well container text-center"><div class="row"><div class="col-sm-8 col-md-10 text-left"><h2>Welcome To URL🐨Shortener</h2><div class="well"><fieldset><h3>Simplify your links</h3><div class="form-group label-floating"><div class="row"><div class="col-md-9"><div class="input-group"><span class="input-group-addon">http://</span><label class="control-label" for="longurl">✒️ Your original URL here</label><input class="form-control" id="longurl" name="url" type="text"><p class="help-block">All URLs can be accessed by anyone 👍🏻</p></div></div><div class="col-md-3"><span class="input-group-btn"><a href="javascript:void(0)" class="btn btn-block btn-info btn-raised" onclick="makeShort()">🚀 Shorten URL!</a></div></div></div><br><div id="output"><b>Long URL:</b>none<br><b>Short URL:</b><a href="javascript:void(0);" class="label label-success">none</a><br></div></fieldset></div></div><div class="col-sm-4 col-md-2 sidenav"><div class="well"><div class="fb-like" data-action="like" data-href="http://socu.tk/" data-layout="box_count" data-share="true" data-show-faces="true" data-size="large"></div></div><div class="well" itemscope itemtype="http://schema.org/Person"><h5>about us</h5><p itemprop="name">Abdulrahman El-zahaby</p><p itemprop="company">freelancer</p><p itemprop="tel">+966-53-711-8696</p><a href="mailto:el0zahaby@gmail.com" itemprop="email">el0zahaby@gmail.com</a></div><div class="well"><script data-cfasync="false" src="https://p220146.clksite.com/adServe/banners?tid=220146_413113_7&size=158x21"></script></div></div></div></div><div class="well"><div class="container"><div class="row"><hr><div class="col-sm-8 col-md-8"><a href="#">Terms of Service</a> | <a href="#">Privacy</a></div><div class="col-sm-4 col-md-4"><p>© Made with ❤️ By <a href="//fb.com/el3zahaby" target="_blank">el3zahaby</a></p></div></div></div></div><script>function makeShort(){var e=document.getElementById("longurl").value;gapi.client.urlshortener.url.insert({resource:{longUrl:e}}).execute(function(r){if(null!=r.id){var l=r.id,t=l.lastIndexOf("/"),n=l.substring(t+1);str="✔️<b>Long URL:</b>"+e+"<br>",str+="✔️<b>Short URL:</b> <a class='label label-success' href='"+url+"?"+n+"'>"+url.replace(/https?:\/\//i,"")+"?"+n+"</a><br>",document.getElementById("output").innerHTML=str}else alert("error: creating short url")})}function load(){gapi.client.setApiKey("AIzaSyDs1wNY_9R_8insio4ZMZvlGQEWoqPSQ4w"),gapi.client.load("urlshortener","v1",function(){})}var url=window.location.href;window.onload=load</script>
