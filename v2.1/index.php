<?php

$Info = array(
    'url' => $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ,
    'desc'  => 'socu.tk URL Shortener is Made with love by Abdulrahman El-zahaby to create short URLs that can be easily shared, tweeted,posted or emailed to friends. ✉️',
    'kwords'=> 'socutk, bitly, urls, earn, money, save, share, shorten',
    'title' => 'URL🐨Shortener V2.1',
    'img'   =>'como.jpg');
?> <!DOCTYPE html><html><head><meta charset="utf-8"><meta content="width=device-width,initial-scale=1" name="viewport"><meta content="IE=edge" http-equiv="X-UA-Compatible"><title>URL🐨Shortener V2.1</title><meta content="<?= $Info['desc'] ?>" name="description"><meta content="<?= $Info['kwords'] ?>" name="keywords"><meta content="MGCl7dRaPLlAc40ONmoLVkT5vEnYgE2hTYpbHEMdb-E" name="google-site-verification"><link href="favicon.ico" rel="shortcut icon" type="image/x-icon"><link href="favicon.ico" rel="icon" type="image/x-icon"><meta content="<?= $Info['url']; ?>" property="og:url"><meta content="website" property="og:type"><meta content="<?= $Info['title'] ?>" property="og:title"><meta content="<?= $Info['desc'] ?>" property="og:description"><meta content="<?= $Info['img'] ?>" property="og:image"><script src="https://apis.google.com/js/client.js" async></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" async></script><link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"><link href="dist/css/bootstrap-material-design.min.css" rel="stylesheet"><link href="dist/css/ripples.min.css" rel="stylesheet"><link href="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.css" rel="stylesheet"><style>.navbar{margin-bottom:0;border-radius:0}.row.content{height:450px}.sidenav{padding-top:20px;background-color:#f1f1f1;height:100%}@media screen and (max-width:767px){.sidenav{height:auto;padding:15px}.row.content{height:auto}}</style></head><body><div id="body"> <?php
                if( strpos( $Info['url'], "?" ) === false ){
                    include_once "home.php";
                }else {
                    include_once "go.php";
                    //echo explode( "?", $Info['url'] )[1];
                }
                  ?> </div><script src="https://apis.google.com/js/client.js" async></script><script src="//code.jquery.com/jquery-1.10.2.min.js"></script><script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><script src="dist/js/ripples.min.js"></script><script src="dist/js/material.min.js"></script><script src="//fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script><script>!function(e,t,a,n,c,o,s){e.GoogleAnalyticsObject=c,e[c]=e[c]||function(){(e[c].q=e[c].q||[]).push(arguments)},e[c].l=1*new Date,o=t.createElement(a),s=t.getElementsByTagName(a)[0],o.async=1,o.src="https://www.google-analytics.com/analytics.js",s.parentNode.insertBefore(o,s)}(window,document,"script",0,"ga"),ga("create","UA-92222791-2","auto"),ga("send","pageview")</script><script>$(function(){$.material.init()})</script></body></html>
