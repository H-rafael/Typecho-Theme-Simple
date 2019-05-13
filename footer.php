<footer data-v-75a8d7e8="" class="app-footer app-dep-footer container">
    <div data-v-d81624e6="" data-v-75a8d7e8=""  id="lite-footer" style="position: relative; z-index: 1; background-color: rgb(255, 255, 255); color: rgb(255, 255, 255); overflow: hidden; height: 100%; width: 100%;">
        <div data-v-d81624e6="" class="icon-list">
            <a data-v-d81624e6="" href="" target="_blank"><span data-v-d81624e6=""><i data-v-d81624e6="" aria-hidden="true" class="fa fa-github-alt"></i></span></a>
            <a data-v-d81624e6="" href="" target="_blank"><span data-v-d81624e6=""><i data-v-d81624e6="" aria-hidden="true" class="fa fa-weibo"></i></span></a>
            <a data-v-d81624e6="" href="mailto:<?php $this->remember('mail'); ?>" target="_blank"><span data-v-d81624e6=""><i data-v-d81624e6="" aria-hidden="true" class="fa fa-envelope"></i></span></a>
        </div>


        <?php
        if(isEnabled('showHitokoto','AriaConfig')): ?>
            <a data-v-d81624e6="" class="powered-by" id="hitokoto" val_url="<?php getHitokoto()?>"><?php getHitokoto()?></a>
        <?php endif; ?>

        <a data-v-d81624e6="" class="powered-by"><?php //getHitokoto(); ?></a>
        <a data-v-d81624e6="" class="powered-by"><?php $this->options->userFooter(); ?></a>
        <p id="footer-info" style="    margin-top: 0px;">&copy; <span><?php echo $this->options->cpr ? $this->options->cpr : date('Y'); ?></span><?php getFooterWidget(); ?>
        <div id="footer_img" style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: -1; content: &quot;&quot;; filter: blur(40px); background: url('') 50% center / cover no-repeat fixed rgb(255, 255, 255); height: 100%; width: 100%;"></div>
    </div>
</footer>
</div>
<link href="<?php $this->options->themeUrl('assets/css/base-style.css'); ?>" rel="stylesheet">
<!-- 现代写法，推荐 -->
<!-- 兼容低版本浏览器 (包括 IE)，可移除 -->
<!--<script src="https://cdn.jsdelivr.net/npm/bluebird@3/js/browser/bluebird.min.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/whatwg-fetch@2.0.3/fetch.min.js"></script>-->


<!--End-->
<script type="text/javascript">


    (function ($) {
        var img = '<?php $this->options->themeUrl('assets/img/log.jpg'); ?>';
        $('#app').css("background-image","url("+img+")");
        $('#header_img').css("background-image","url("+img+")");
        $('#footer_img').css("background-image","url("+img+")");
    })(jQuery);

    $(function () {
        var img = '<?php echo getBackground()?>';
        $('#app').css("background-image","url("+img+")");
        $('#header_img').css("background-image","url("+img+")");
        $('#footer_img').css("background-image","url("+img+")");
    })
//    // 先进行一次检查
//    lazyRender();
//    //为了不在滚轮滚动过程中就一直判定，设置个setTimeout,等停止滚动后再去判定是否出现在视野中。
//    var clock; //这里的clock为timeID，
//    $(window).on('scroll',function () {
////        lazyRender();
//        if (clock) { // 如果在300毫秒内进行scroll的话，都会被clearTimeout掉，setTimeout不会执行。
//            //如果有300毫秒外的操作，会得到一个新的timeID即clock，会执行一次setTimeout,然后保存这次setTimeout的ID，
//            //对于300毫秒内的scroll事件，不会生成新的timeID值，所以会一直被clearTimeout掉，不会执行setTimeout.
//            clearTimeout(clock);
//        }
//        clock = setTimeout(function () {
//            console.log('运行了一次');
//            lazyRender();
//        },300)
//    })
//    function lazyRender () {
//        $('.container img').each(function () {
//            if (checkShow($(this)) && !isLoaded($(this)) ){
//                loadImg($(this));
//            }
//        })
//    }
//    function checkShow($img) { // 传入一个img的jq对象
//        var scrollTop = $(window).scrollTop();  //即页面向上滚动的距离
//        var windowHeight = $(window).height(); // 浏览器自身的高度
//        var offsetTop = $img.offset().top;  //目标标签img相对于document顶部的位置
//
//        if (offsetTop < (scrollTop + windowHeight) && offsetTop > scrollTop) { //在2个临界状态之间的就为出现在视野中的
//            return true;
//        }
//        return false;
//    }
//
//    function isLoaded ($img) {
//        return $img.attr('data-src') === $img.attr('src'); //如果data-src和src相等那么就是已经加载过了
//    }
//
//    function loadImg ($img) {
//        $img.attr('src',$img.attr('data-src')); // 加载就是把自定义属性中存放的真实的src地址赋给src属性
//    }

    $(function () {
        var url_g = '<?php print_r(getHitokoto());?>';
        console.log(url_g);
        console.log(3333);
        var url = $('#hitokoto').attr('val_url');
        $.get(url,function (t) {
            $("#hitokoto").html(t)
        })
    })

    function menu_select(sign) {
        if($('#dropdown-menu-5411').is(':hidden')){//如果当前隐藏
            $('#dropdown-menu-5411').show();//那么就显示div
        }else{//否则
            $('#dropdown-menu-5411').hide();//就隐藏div
        }
    }

    $(function () {
        $("#search-box").css("display") && $("#search-box").css("display", "none");
        $("#nav-search-btn").on("click", function() {
            $("#search-box").css("display", "flex");
            $("#search-box").animateCss("zoomIn", function(t) {})
        });
        $("#search-box>.close").on("click", function() {
            $("#search-box").hide()
        })
    })

    $('.post-reward').click(function () {
        if($('.post-reward ul').is(':hidden')){//如果当前隐藏
            $('.post-reward ul').show();
            console.log($('.post-reward ul').show())
        }else{//否则
            $('.post-reward ul').hide();//就隐藏div
        }
    })


    $.fn.extend({
        animateCss: function(t, n) {
            var e = function(t) {
                var n = {
                    animation: "animationend",
                    OAnimation: "oAnimationEnd",
                    MozAnimation: "mozAnimationEnd",
                    WebkitAnimation: "webkitAnimationEnd"
                };
                for (var e in n) if (void 0 !== t.style[e]) return n[e]
            } (document.createElement("div"));
            return this.addClass("animated " + t).one(e,
                function() {
                    $(this).removeClass("animated " + t),
                    "function" == typeof n && n($(this))
                }),
                this
        }
    })
</script>
<?php if($this->options->statistics) $this->options->statistics(); ?>
<?php $this->footer(); ?>
<script type="text/javascript" src="<?php $this->options->themeUrl('assets/OwO/OwO.min.js') ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/function.js'); ?>"></script>
</body>
</html>














