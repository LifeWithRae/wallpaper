<?php
/**
 * @author:LifeWithRae
 * @GitHub:https://github.com/LifeWithRae/wallpaper
 */
function is_https() {
    if ( !empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') {
        return true;
    } elseif ( isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
        return true;
    } elseif ( !empty($_SERVER['HTTP_FRONT_END_HTTPS']) && strtolower($_SERVER['HTTP_FRONT_END_HTTPS']) !== 'off') {
        return true;
    }
    return false;
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Church电脑壁纸</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <?php
    if(is_https()){
        echo "<meta http-equiv=\"Content-Security-Policy\" content=\"upgrade-insecure-requests\">";
    }
    ?>
    <meta name="robots" content="index,follow"/>
    <meta name="referrer" content="no-referrer" />

    <link rel="stylesheet" href="css/wallpaper.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-sm xben-nav  navbar-light fixed-top">
    <a class="navbar-brand xben-title" href="http://wallpaper.Church.tk" >Church在线壁纸</a>
    <button class="navbar-toggler xben-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="collapsibleNavbar">
        <ul class="navbar-nav">
            <form class="form-inline xben-from">
                <input id="hiddenText" type="text" style="display:none" />
                <input class="form-control text-360" id="360text" type="text" placeholder="请输入关键字" onkeypress="loadData360Search();changeTitle(this)">
                                <input id="hiddentext" type="hidden" style="display-none">
                <button class="btn btn-primary " id="xbenSearchBtn" type="button"
                        onclick="loadData360Search();changeTitle(this)">壁纸一下
                </button>
            </form>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)"
                   onclick="loadData('360new', true);changeTitle(this)">最新壁纸</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    分类壁纸
                </a>
                <div class="dropdown-menu xben-dropdown-menu" id="xbenTags">

                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)"
                   onclick="loadData('bing', true);changeTitle(this)">必应美图</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" onclick="loadData('ciba', true);changeTitle(this);"
                   title="金山词霸每日一句壁纸">每日英语</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://ruiwen.org" target="_blank">芮文杂货铺</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/LifeWithRae/wallpaper" target="_blank">GitHub</a>
            </li>
        </ul>
    </div>
</nav>
<div class="xben-container">

    <div class="jigsaw" id="walBox"></div>  <!-- id="walBox" -->

    <a id="toolBall" target="_blank" href="javascript:void(0);" class="uptoTop"></a>

    <div id="loadmore">Church壁纸加载中……</div>
	<div class="xben-full-img"><img
            src="http://cdn-ali-img-staticbz.shanhutech.cn/bizhi/staticwp/202003/9bd0be8ab5506a7902f36eb4da95ebc1--3977944025.jpg"/>
    <button class="horizontal-btn btn btn-primary">横屏显示</button>
</div>
</div>
<!-- jQuery文件 -->
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<!--滚动加载插件-->
<script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
<!--全屏滚动插件-->
<script type="text/javascript" src="js/jquery.onepage-scroll.min.js"></script>
<!--页面核心js文件-->
<script type="text/javascript" src="js/wallpaper.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
