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
    $protocol = $pageURL;
    if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s"; $protocol = $pageURL;}
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
    define('protocol', $protocol);

    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="apple-touch-icon" href="<?php echo url_root;?>img/favicon.ico" />
    <link rel="icon" href="<?php echo url_root;?>img/favicon.ico" />
    <?php
        $check_tilte = $_SERVER['REQUEST_URI'];
        if(strpos($check_tilte, 'matsui') !== false){
            ?>
            <title>Vol.01 メジャーリーガー　松井稼頭央氏へのインタビュー　page1｜転機をチャンスに変えた瞬間</title>
            <meta name="keywords" content="ヘッドハンティング,転職,人材,紹介,求人,キャリア,インタビュー,松井稼頭央,メジャーリーガー">
            <meta name="description" content="現在、様々な環境において第一線でご活躍されている方が経験された転機について、クライス＆カンパニー代表の丸山が独占インタビューを行います。第1回はメジャーリーガーの松井稼頭央氏です。「世界一になる」という夢を追い続けるメジャーリーガーの、転機をチャンスに変えた瞬間とは。">
            <?php
        }
        if(strpos($check_tilte, 'noguchi') !== false){
            ?>
            <title>Vol.02 宇宙飛行士　野口聡一氏へのインタビュー　page1｜転機をチャンスに変えた瞬間</title>
            <meta name="keywords" content="ヘッドハンティング,転職,人材,紹介,求人,キャリア,インタビュー,野口聡一,宇宙飛行士">
            <meta name="description" content="現在、様々な環境において第一線でご活躍されている方が経験された転機について、クライス＆カンパニー代表の丸山が独占インタビューを行います。第2回は宇宙飛行士の野口聡一氏です。「偉大なる転職」を成功させ、夢を現実にした宇宙飛行士の、転機をチャンスに変えた瞬間とは。">
            <?php
        }
        if(strpos($check_tilte, 'hira') !== false){
            ?>
            <title>Vol.03 野球審判員 平林岳氏へのインタビュー　page1｜転機をチャンスに変えた瞬間</title>
            <meta name="keywords" content="ヘッドハンティング,転職,人材,紹介,求人,キャリア,インタビュー,平林岳,野球審判員">
            <meta name="description" content="現在、様々な環境において第一線でご活躍されている方が経験された転機について、クライス＆カンパニー代表の丸山が独占インタビューを行います。第3回は野球審判員の平林岳氏です。言語の壁をも越え、日本人初のアメリカプロ野球審判員となった彼が、メジャーリーグという最高峰に挑むアンパイアの、転機をチャンスに変えた瞬間とは。">
            <?php
        }
        if(strpos($check_tilte, 'ishii') !== false){
            ?>
            <title>Vol.04 プロ野球選手 石井琢朗氏へのインタビュー　page1｜転機をチャンスに変えた瞬間</title>
            <meta name="keywords" content="ヘッドハンティング,転職,人材,紹介,求人,キャリア,インタビュー,石井琢朗,プロ野球選手">
            <meta name="description" content="現在、様々な環境において第一線でご活躍されている方が経験された転機について、クライス＆カンパニー代表の丸山が独占インタビューを行います。第4回はプロ野球選手の石井琢朗氏です。プロ球界という厳しくも華やかな世界で生き抜いてきた選手の、転機をチャンスに変えた瞬間とは。">
            <?php
        }
        if(strpos($check_tilte, 'yoneda') !== false){
            ?>
            <title>Vol.05 プロ野球球団代表 米田純氏へのインタビュー　page1｜転機をチャンスに変えた瞬間</title>
            <meta name="keywords" content="ヘッドハンティング,転職,人材,紹介,求人,キャリア,インタビュー,米田純,プロ野球球団代表">
            <meta name="description" content="現在、様々な環境において第一線でご活躍されている方が経験された転機について、クライス＆カンパニー代表の丸山が独占インタビューを行います。第5回はプロ野球球団代表の米田純氏です。東北楽天ゴールデンイーグルスの球団代表の、転機をチャンスに変えた瞬間とは。">
            <?php
        }
    ?>


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
    <script src="<?php echo protocol; ?>://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo url_root;?>js/main.jquery.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo url_root; ?>css/style.css" media="all" />
</head>
<body >
<div  class="site-page ">
    <div  class="wrapper_page ">
        <header class="site_header ">
            <div class="menu_top clear">
                <a href="<?php echo url_root;?>"><img class="brand_img" src="<?php echo url_root;?>img/brand.png" alt="kandc"/></a>
                <div class="toggle_btn">
                    <a id="kc_toggle" href="#">
                        <span class="kc_toggle_first"></span>
                        <span class="kc_toggle_second"></span>
                        <span class="kc_toggle_third"></span>
                    </a>
                </div>
            </div>
            <div class="kc_menu_chance">
<!--                <div class="menu_top clear">-->
<!--                    <img class="brand_img" src="--><?php //echo url_root;?><!--img/brand.png" alt="kandc"/>-->
<!--                    <div class="toggle_btn">-->
<!--                        <a id="kc_toggle" href="#">&#9776;</a>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="toggle_btn_close">
                    <a id="kc_toggle_close" href="#">&#10006;</a>
                </div>
                <div class="kc_wrapper_menu_scroll">
                    <ul class="kc_menu_vol">
                        <li><a href="<?php echo url_root;?>matsui/index.php">Vol. 01　<span class="text_menu_des">松井 稼頭央</span></a></li>
                        <li><a href="<?php echo url_root;?>noguchi/index.php">Vol. 02　<span class="text_menu_des">野口 聡一</span></a> </li>
                        <li><a href="<?php echo url_root;?>hira/index.php">Vol. 03　<span class="text_menu_des">平林 岳</span></a> </li>
                        <li><a href="<?php echo url_root;?>ishii/index.php">Vol. 04　<span class="text_menu_des">石井 琢朗</span></a> </li>
                        <li ><a class="border_red" href="<?php echo url_root;?>yoneda/index.php">Vol. 05　<span class="text_menu_des">米田 純</span></a> </li>
                    </ul>
                    <ul>
                        <li><a href="<?php echo protocol; ?>://www.kandc.com/features/"><span class="text_menu_des">クライスの特長</span></a></li>
                        <li><a href="<?php echo protocol; ?>://www.kandc.com/consultant/"><span class="text_menu_des">コンサルタント紹介</span></a></li>
                        <li><a href="<?php echo protocol; ?>://www.kandc.com/jobinfo/"><span class="text_menu_des">最新求人情報</span></a></li>
                        <li><a href="<?php echo protocol; ?>://www.kandc.com/voice/"><span class="text_menu_des">転職成功事例</span></a></li>
                        <li><a class="none_border" href="<?php echo protocol; ?>://www.kandc.com/process/"><span class="text_menu_des">申込から内定まで</span></a></li>
                        <li><a class="kc_btn_menu_chance green_bg" href="<?php echo protocol; ?>://www.kandc.com/entry_pre/">いつかは転職 プレエントリー</a></li>
                        <li ><a class="kc_btn_menu_chance red_bg" href="<?php echo protocol; ?>://www.kandc.com/entry/">いますぐ転職 エントリー</a></li>
                    </ul>
                    <ul>
                        <li><a href="<?php echo protocol; ?>://www.kandc.com/"><span class="text_menu_des">ヘッドハンティングのクライス&カンパニー</span></a></li>
                        <li><a href="<?php echo protocol; ?>://www.kandc.com/privacy_policy"><span class="text_menu_des">個人情報保護方針</span></a></li>
                        <li><a href="<?php echo protocol; ?>://www.kandc.com/publicity/"><span class="text_menu_des">パブリシティ</span></a></li>
                        <li><a href="<?php echo protocol; ?>://www.kandc.com/kc-recruit/"><span class="text_menu_des">採用情報</span></a></li>
                    </ul>
                </div>
            </div>
        </header><!--#header_inc-->
        <main class="main-body">

