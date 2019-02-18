
<?php
/**
 *  由心而发，简单的
 *
 * <a href="https://github.com/H-rafael/Typecho-Theme-Simple" target="_blank">Github</a> | <a href="http://qqexit.com/" target="_blank">Home</a>
 *
 * @package Simple
 * @author  Kiln
 * @version 1.2.0
 * @link http://qqexit.com/index.php/archives/23/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<section data-v-75a8d7e8="" class="app-body container_section app-dep-footer-body" >
    <div data-v-0759750a="" data-v-75a8d7e8="" class="detailable-page">
        <h1 data-v-0759750a="" class="title"><span data-v-0759750a=""><?php $this->title() ?></span></h1>
        <p data-v-0759750a="" class="meta" style="display: none;"><span data-v-0759750a="" class="create-time"><?php $this->date('F jS, Y'); ?></span></p>
        <?php if($this->user->hasLogin()): ?>
        <?php endif; ?>
        <div data-v-0759750a="" class="comments">
            <div data-v-0759750a="" class="gitment">
                <div data-v-0759750a="" id="lite-gitment-root">
                    <div lang="en-US" class="gitment-container gitment-root-container ">
                        <div class="post-content">
                            <?php $this->content(); ?>
                        </div>
                        <link href="<?php $this->options->themeUrl('assets/css/count-down.css'); ?>" rel="stylesheet" media="screen" />
                        <script src="<?php $this->options->themeUrl('count-down/js/html5shiv.js'); ?>"></script>

                        <style>
                            @font-face {
                                font-family: 'JournalRegular';
                                src: url('/usr/themes/Simple/count-down/fonts/journal-webfont.eot');
                                src: url('/usr/themes/Simple/count-down/fonts/journal-webfont_162a16fe.eot') format('embedded-opentype'), url('/usr/themes/Simple/count-down/fonts/journal-webfont.woff') format('woff'), url('/usr/themes/Simple/count-down/fonts/journal-webfont.ttf') format('truetype'), url('/usr/themes/Simple/count-down/fonts/journal-webfont.svg') format('svg');
                                font-weight: normal;
                                font-style: normal;
                            }
                        </style>
                        <?php
                        if($this->options->countDown): ?>
                            <div class="container-count">
                                <div class="hero-unit">
                                    <h1 id="days"> 高考倒计时</h1>
                                </div>
                                <div class="clock">
                                    <input type="hidden" id="date_time" value="<?php   countDown();?>">
                                    <div class="span6"> <img class="img-clock" src="<?php $this->options->themeUrl('assets/img/bg-clock.png'); ?>" alt="clock counter" />
                                        <div id="countdown">
                                            <div class="days"><span id="days"></span> <ins>/</ins> <em>days /</em></div>
                                            <div class="hours"><span id="hours"></span> <ins>/</ins> <em>hours /</em></div>
                                            <div class="minutes"><span id="minutes"></span> <ins>/</ins> <em>min /</em></div>
                                            <div class="seconds"><span id="seconds"></span><em>sec</em> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php postOther($this); ?>

                        <div>
                            <div lang="en-US" class="gitment-container gitment-header-container">
                                <span class="gitment-header-like-btn">
                                <svg class="gitment-heart-icon" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 50 50">
                                <path d="M25 39.7l-.6-.5C11.5 28.7 8 25 8 19c0-5 4-9 9-9 4.1 0 6.4 2.3 8 4.1 1.6-1.8 3.9-4.1 8-4.1 5 0 9 4 9 9 0 6-3.5 9.7-16.4 20.2l-.6.5zM17 12c-3.9 0-7 3.1-7 7 0 5.1 3.2 8.5 15 18.1 11.8-9.6 15-13 15-18.1 0-3.9-3.1-7-7-7-3.5 0-5.4 2.1-6.9 3.8L25 17.1l-1.1-1.3C22.4 14.1 20.5 12 17 12z"></path>
                                </svg> Like • <strong><?php getPostView($this); ?></strong>次阅读
                                <span> • <strong>
                                        <?php $this->commentsNum(_t('0 条评论'), _t('1 条评论'), _t('%d 条评论')); ?>
                                </strong>
                                 </span> 是否收录：<?php
                                    $url = get_permalink();
                                    if(checkBaiduInclude($url) == 1) echo "百度已收录"; else echo "百度未收录"; ?>
                                </span>
                            </div>
                        </div>
                        <?php $this->need('comments.php'); ?>
<!--                        <div>-->
<!--                            <div lang="en-US" class="gitment-container gitment-footer-container">-->
<!--                                Powered by-->
<!--                                <a class="gitment-footer-project-link" href="https://github.com/imsun/gitment" target="_blank"> Gitment </a>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <button data-v-e739917e="" data-v-0759750a="" type="button" class="el-button eof el-button--text el-button--mini">
            <span><i data-v-e739917e="" aria-hidden="true" class="fa fa-level-up"></i>
                <a data-v-e739917e=""  href="#top">EOF</a>
            </span>
        </button>
    </div>
</section>
<script src="<?php $this->options->themeUrl('count-down/js/bootstrap-tooltip.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('count-down/js/jquery.countdown.min.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('count-down/js/jquery.custom.js'); ?>"></script>
<?php $this->need('footer.php'); ?>