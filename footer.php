<footer data-v-75a8d7e8="" class="app-footer app-dep-footer container">
    <div data-v-d81624e6="" data-v-75a8d7e8=""  id="lite-footer" style="position: relative; z-index: 1; background-color: rgb(255, 255, 255); color: rgb(255, 255, 255); overflow: hidden; height: 100%; width: 100%;">
        <div data-v-d81624e6="" class="icon-list">
            <a data-v-d81624e6="" href="" target="_blank"><span data-v-d81624e6=""><i data-v-d81624e6="" aria-hidden="true" class="fa fa-github-alt"></i></span></a>
            <a data-v-d81624e6="" href="" target="_blank"><span data-v-d81624e6=""><i data-v-d81624e6="" aria-hidden="true" class="fa fa-weibo"></i></span></a>
            <a data-v-d81624e6="" href="mailto:<?php $this->remember('mail'); ?>" target="_blank"><span data-v-d81624e6=""><i data-v-d81624e6="" aria-hidden="true" class="fa fa-envelope"></i></span></a>
        </div>
        <a data-v-d81624e6="" class="powered-by"><?php getHitokoto(); ?></a>
        <a data-v-d81624e6="" class="powered-by">
            <?php $this->options->userFooter(); ?>
            <?php if(isEnabled('showHitokoto','AriaConfig')): ?>
                <p id="hitokoto"></p>
            <?php endif; ?>
        </a>
        <p id="footer-info" style="    margin-top: 0px;">&copy; <span><?php echo $this->options->cpr ? $this->options->cpr : date('Y'); ?></span><?php getFooterWidget(); ?>
        <div style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: -1; content: &quot;&quot;; filter: blur(40px); background: url('http://ww1.sinaimg.cn/large/ac1a0c4agy1ftz7qj6l3xj21hc0u0b29.jpg') 50% center / cover no-repeat fixed rgb(255, 255, 255); height: 100%; width: 100%;"></div>
    </div>
</footer>
</div>
<script type="text/javascript">
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














