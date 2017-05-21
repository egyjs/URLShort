<div class="navbar navbar-info">
  <div class="container-fluid">
    <div class="navbar-header">
      <!--button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button-->
      <a class="navbar-brand" >URL🐨Shortener V2.1</a>
    </div>
    <!--div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="javascript:void(0)">home</a></li>
        <li><a href="javascript:void(0)">Link</a></li>
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)">Action</a></li>
            <li><a href="javascript:void(0)">Another action</a></li>
            <li><a href="javascript:void(0)">Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Dropdown header</li>
            <li><a href="javascript:void(0)">Separated link</a></li>
            <li><a href="javascript:void(0)">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control col-md-8" placeholder="Search">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="javascript:void(0)">Link</a></li>
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)">Action</a></li>
            <li><a href="javascript:void(0)">Another action</a></li>
            <li><a href="javascript:void(0)">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="javascript:void(0)">Separated link</a></li>
          </ul>
        </li>
      </ul>
  </div-->
  </div>
</div>

<div class="container text-center well">
<div class="row ">
<div class="col-sm-10 text-left">
  <h2>Welcome To URL🐨Shortener</h2>
  <div class="well">
    <fieldset >
    <h3>Simplify your links</h3>
    <div class="form-group label-floating">
        <div class="input-group">
            <span class="input-group-addon">http://</span>
            <label class="control-label" for="longurl">✒️ Your original URL here </label>
            <input class="form-control"  id="longurl" name="url"  type="text">
            <p class="help-block">All URLs can be accessed by anyone 👍🏻</p>
            <span class="input-group-btn">
                <a href="javascript:void(0)" onclick="makeShort();" class="btn btn-raised btn-info">🚀 Shorten URL!</a>
            </span>
        </div>
    </div>
    <br>
    <div id="output">
        <b>Long URL:</b>none<br>
        <b>Short URL:</b><a class="label label-success" href="javascript:void(0);">none</a><br></div>

    </fieldset>
</div>
</div>
<div class="col-sm-2 sidenav">
  <div class="well">
    <p>ADS</p>
  </div>
  <div class="well">
    <p>ADS</p>
  </div>
</div>
</div>
</div>
<div class="well" >
<div class="container">
  <div class="row">
      <hr>
      <div class="col-md-8 col-sm-8">
        <a href="#">Terms of Service</a> | <a href="#">Privacy</a>
      </div>
      <div class="col-md-4 col-sm-4">
        <p >© Made with ❤️ By <a href="#">el3zahaby</a></p>
      </div>
  </div>
</div>
</div>
<script type="text/javascript">
var url = window.location.href;
function makeShort()
{
   var longUrl  =  document.getElementById("longurl").value;
    var request = gapi.client.urlshortener.url.insert({
    'resource': {
      'longUrl': longUrl
 }
    });
    request.execute(function(response)
 {

  if(response.id != null)
  {
   var uri = response.id;
   var lastslash = uri.lastIndexOf('/');
   var result= uri.substring(lastslash + 1);


   str ="✔️<b>Long URL:</b>"+longUrl+"<br>";
   str +="✔️<b>Short URL:</b> <a class='label label-success' href='"+url+"?"+result+"'>"+url.replace(/https?:\/\//i, "")+"?"+result+"</a><br>";
   document.getElementById("output").innerHTML = str;
  }
  else
  {
   alert("error: creating short url");
  }

    });
 }
function load()
{
 gapi.client.setApiKey('AIzaSyDs1wNY_9R_8insio4ZMZvlGQEWoqPSQ4w'); //get your ownn Browser API KEY
 gapi.client.load('urlshortener', 'v1',function(){});

}
window.onload = load;

</script>
