<?php

$Info = array(
    'url' => $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ,
    'desc'  => 'socu.tk URL Shortener is Made with love by Abdulrahman El-zahaby to create short URLs that can be easily shared, tweeted,posted or emailed to friends. ✉️',
    'kwords'=> 'socutk, bitly, urls, earn, money, save, share, shorten',
    'title' => 'URL🐨Shortener V2.1',
    'img'   =>'como.jpg');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>URL🐨Shortener V2.1</title>

        <meta name="description" content="<?= $Info['desc'] ?>">
        <meta name="keywords" content="<?= $Info['kwords'] ?>">
        <meta name="google-site-verification" content="MGCl7dRaPLlAc40ONmoLVkT5vEnYgE2hTYpbHEMdb-E" />


        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <meta property="og:url"           content="<?= $Info['url']; ?>" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="<?= $Info['title'] ?>" />
        <meta property="og:description"   content="<?= $Info['desc'] ?>" />
        <meta property="og:image"         content="<?= $Info['img'] ?>" />

        <script async src="https://apis.google.com/js/client.js"> </script>
        <script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Material Design fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap Material Design -->
        <link href="dist/css/bootstrap-material-design.min.css" rel="stylesheet">
        <link href="dist/css/ripples.min.css" rel="stylesheet">
        <link href="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.css" rel="stylesheet">

        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */
            .navbar {
            margin-bottom: 0;
            border-radius: 0;
            }
            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {height: 450px}
            /* Set gray background color and 100% height */
            .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
            }
            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
            .sidenav {
            height: auto;
            padding: 15px;
            }
            .row.content {height:auto;}
            }
        </style>


    </head>
    <body>
        <div id="body">
            <?php
                if( strpos( $Info['url'], "?" ) === false ){
                    include_once "home.php";
                }else {
                    include_once "go.php";
                    //echo explode( "?", $Info['url'] )[1];
                }
                 ?>
        </div>
        <!--   javascript          -->
        <script  async src="https://apis.google.com/js/client.js"> </script>
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script>
            (function () {

              var $button = $("<div id='source-button' class='btn btn-primary btn-xs'>&lt; &gt;</div>").click(function () {
                var index = $('.bs-component').index($(this).parent());
                $.get(window.location.href, function (data) {
                  var html = $(data).find('.bs-component').eq(index).html();
                  html = cleanSource(html);
                  $("#source-modal pre").text(html);
                  $("#source-modal").modal();
                })

              });

              $('.bs-component [data-toggle="popover"]').popover();
              $('.bs-component [data-toggle="tooltip"]').tooltip();

              $(".bs-component").hover(function () {
                $(this).append($button);
                $button.show();
              }, function () {
                $button.hide();
              });

              function cleanSource(html) {
                var lines = html.split(/\n/);

                lines.shift();
                lines.splice(-1, 1);

                var indentSize = lines[0].length - lines[0].trim().length,
                    re = new RegExp(" {" + indentSize + "}");

                lines = lines.map(function (line) {
                  if (line.match(re)) {
                    line = line.substring(indentSize);
                  }

                  return line;
                });

                lines = lines.join("\n");

                return lines;
              }

              $(".icons-material .icon").each(function () {
                $(this).after("<br><br><code>" + $(this).attr("class").replace("icon ", "") + "</code>");
              });

            })();

        </script>
        <script src="dist/js/ripples.min.js"></script>
        <script src="dist/js/material.min.js"></script>
        <script src="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>

        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92222791-2', 'auto');
  ga('send', 'pageview');

</script>
        <script>
            $(function () {
              $.material.init();



            });
        </script>
    </body>
</html>
