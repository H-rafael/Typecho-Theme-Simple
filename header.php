<!DOCTYPE html>
<!-- saved from url=(0032)https://heskeybaozi.github.io/#/ -->
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
    <link rel="icon" type="image/ico" href="/favicon.ico">
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header("generator=&commentReply="); ?>
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?> - <?php $this->options->description(); ?></title>

    <!-- 使用url函数转换相关路径 -->
<!--    <link href="--><?php //$this->options->themeUrl('assets/css/jquery.fancybox.min.css'); ?><!--" rel="stylesheet">-->

    <link href="<?php $this->options->themeUrl('assets/css/comment.css'); ?>" rel="stylesheet" />
    <link href="<?php $this->options->themeUrl('assets/css/style_01.css'); ?>" rel="stylesheet" />
    <link href="<?php $this->options->themeUrl('assets/css/style_index.css'); ?>" rel="stylesheet" />
    <link href="<?php $this->options->themeUrl('assets/css/iconfont.css'); ?>" rel="stylesheet" >

    <link href="<?php $this->options->themeUrl('assets/css/app.c64eadfc8d3abfc9d85514dba4054813.css'); ?>" rel="stylesheet" />
    <link href="<?php $this->options->themeUrl('assets/css/style.min.css?v=9b5a929c0b'); ?>" rel="stylesheet">
    <script src="<?php $this->options->themeUrl('assets/js/jquery.min.js'); ?>"></script>
    <link href="<?php $this->options->themeUrl('assets/css/prism.css'); ?>" rel="stylesheet" />
    <script src="<?php $this->options->themeUrl('assets/js/prism.js'); ?>"></script>

    <script async="" src="<?php $this->options->themeUrl('assets/js/analytics.js'); ?>" charset="utf8"></script>
    <?php if($this->options->userHeader) $this->options->userHeader(); ?>

    <style>
        #app {

            background: url(
            <?php
                    if($this->is('post') || $this->is('page') || $this->is('single'))
                        if($this->fields->thumbnail)
                            $this->fields->thumbnail();
                        else
                            echo getThumbnail();
                    else
                        getBackground();
                ?>
            ) 50% center / cover no-repeat fixed rgb(255, 255, 255);
        }
    </style>
</head>
<body>
<div data-v-75a8d7e8="" id="app" style="">
    <div data-v-26df1257="" data-v-75a8d7e8="" id="top-nav">
        <div data-v-26df1257="" class="blur top-left-padding" style="position: relative; z-index: 1; background-color: rgb(255, 255, 255); color: rgb(255, 255, 255); overflow: hidden; height: 100%; width: 100%;">
            <div data-v-26df1257="" class="main-menu el-row el-row--flex">
                <div data-v-26df1257="" class="el-col el-col-24 el-col-xs-24 el-col-sm-0">
                    <div data-v-26df1257="" class="el-dropdown">
                        <button data-v-26df1257="" type="button" class="el-button el-button--text el-button--small el-dropdown-selfdefine" onclick="menu_select(1)">
                            <span>
                             <div data-v-26df1257="" class="menu-btn">
                                 <span data-v-26df1257=""><i data-v-26df1257="" aria-hidden="true" class="fa fa-bars"></i></span>
                                 <span data-v-26df1257=""   >Menu</span>
                             </div>
                         </span>
                        </button>

                        <ul data-v-26df1257="" class="el-dropdown-menu el-popper el-dropdown-menu--small " id="dropdown-menu-5411" style="position: fixed;top: 36px;left: 5px;transform-origin: center top 0px;z-index: 99999; display:none" x-placement="bottom-end">
                            <?php $slugs = getPermalinkFromSlug();showNav(0,$slugs); ?>
                            <div x-arrow="" class="popper__arrow" style="left: 29.2422px;"></div>
                        </ul>
                    </div>
                </div>
                <div data-v-26df1257="" class="el-col el-col-24 el-col-xs-0 el-col-sm-24">
                    <ul data-v-26df1257="" role="menubar" class="el-menu el-menu-demo el-menu--horizontal">
                        <?php showNav(1,$slugs); ?>
                    </ul>
                </div>
            </div>
            <div style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: -1; content: &quot;&quot;; filter: blur(50px); background: url('http://ww1.sinaimg.cn/large/ac1a0c4agy1ftz7qj6l3xj21hc0u0b29.jpg') 50% center / cover no-repeat fixed rgb(255, 255, 255); height: 100%; width: 100%;"></div>
        </div>
    </div>

    <header data-v-75a8d7e8="" class="app-header container_section">
        <div data-v-73f77182="" data-v-75a8d7e8="" id="lite-header" style="position: relative; z-index: 1; background-color: rgb(255, 255, 255); color: rgb(255, 255, 255); overflow: hidden; height: 100%; width: 100%;">
            <img data-v-73f77182="" no-lazyload src="<?php echo $this->options->avatarUrl ? $this->options->avatarUrl : __TYPECHO_GRAVATAR_PREFIX__ . md5( strtolower( trim( $this->author->mail ) ) ) . '?d=mp&r=g&s=120;' ?>" alt="avatar" class="avatar" />
            <p data-v-73f77182="" class="author"><?php $this->options->title(); ?></p>
            <p data-v-73f77182="" class="description"><?php $this->options->description(); ?></p>

            <div style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: -1; content: &quot;&quot;; filter: blur(30px); background: url(<?php $this->options->themeUrl('assets/img/miku.jpg'); ?>) 50% center / cover no-repeat fixed rgb(255, 255, 255); height: 100%; width: 100%;"></div>
        </div>
    </header>