<?php
    ob_start();
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html id="noIE" xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
    <?php
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    $pageURL_ROOT = $pageURL;
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        $pageURL_ROOT .=$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        $pageURL_ROOT .=$_SERVER["SERVER_NAME"];
    }
    define('url_root_main', $pageURL);
    define('url_root', $pageURL_ROOT."/kc_chance/");

    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="apple-touch-icon" href="<?php echo url_root;?>img/favicon.ico" />
    <link rel="icon" href="<?php echo url_root;?>img/favicon.ico" />

    <title>セブンレンディング株式会社 | 時代の変化をびジネスチャンスに</title>
    <meta name="description" content="常に時代の先端を意識したビジネスに着目し私たちのリソースとネットワークを活かしたビジネスモデルの構築を目指してゆきます。"/>
    <meta name="keywords" content="セブンレンディング,ビジネス,自然エネルギー,投資,冨田隆二"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo url_root;?>" />
    <meta http-equiv="Content-Language" content="ja" />

    <meta content="セブンレンディング,ビジネス,自然エネルギー,投資,冨田隆二" name="keywords" />
    <meta content="常に時代の先端を意識したビジネスに着目し私たちのリソースとネットワークを活かしたビジネスモデルの構築を目指してゆきます。" name="description" />
    <meta content="セブンレンディング株式会社 | 時代の変化をびジネスチャンスに" property="og:title">
    <meta content="常に時代の先端を意識したビジネスに着目し私たちのリソースとネットワークを活かしたビジネスモデルの構築を目指してゆきます。" property="og:description" />
    <meta content="<?php echo url_root;?>img/seven-lending-og-face.png" property="og:image" />

    <meta content="notranslate" name="robots"/>
    <!--[if gte IE 9]>
    <style type="text/css">
        .bg_grey, .bg_pink {
            filter: none;
        }
    </style>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="<?php echo url_root;?>js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <script src="<?php echo $protocol;?>//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo url_root;?>js/main.jquery.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>css/style.css" media="all" />
</head>
<body >
<div  class="site-page ">
    <div  class="wrapper_page ">
        <header class="site-header ">
            <div class="menu_top clear">
                <img class="brand_img" src="<?php echo url_root;?>img/brand.png" alt="kandc"/>
                <div class="toggle_btn">
                    <a id="kc_toggle" href="#">&#9776;</a>
                </div>
            </div>
            <div class="kc_menu_chance">
                <div class="toggle_btn">
                    <a id="kc_toggle_close" href="#">&#10005;</a>
                </div>
                <ul>
                    <li><a href="vol_01.php">Vol. 01　<span class="text_menu_des">松井 稼頭央</span></a></li>
                    <li>Vol. 02　<span class="text_menu_des">野口 聡一</span></li>
                    <li>Vol. 03　<span class="text_menu_des">平林 岳</span></li>
                    <li>Vol. 04　<span class="text_menu_des">石井 琢朗</span></li>
                    <li>Vol. 05　<span class="text_menu_des">米田 純</span></li>
                </ul>
                <ul>
                    <li><span class="text_menu_des">クライスの特長</span></li>
                    <li><span class="text_menu_des">コンサルタント紹介</span></li>
                    <li><span class="text_menu_des">最新求人情報</span></li>
                    <li><span class="text_menu_des">転職成功事例</span></li>
                    <li><span class="text_menu_des">申込から内定まで</span></li>
                    <li><a href="#">いつかは転職 プレエントリー</a></li>
                    <li><a href="#">いますぐ転職 エントリー</a></li>
                </ul>
                <ul>
                    <li><span class="text_menu_des">ヘッドハンティングのクライス&カンパニー</span></li>
                    <li><span class="text_menu_des">個人情報保護方針</span></li>
                    <li><span class="text_menu_des">パブリシティ</span></li>
                    <li><span class="text_menu_des">採用情報</span></li>
                </ul>
            </div>
        </header><!--#header_inc-->
        <main class="main-body">

