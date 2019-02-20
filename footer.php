<footer data-v-75a8d7e8="" class="app-footer app-dep-footer container">
    <div data-v-d81624e6="" data-v-75a8d7e8=""  id="lite-footer" style="position: relative; z-index: 1; background-color: rgb(255, 255, 255); color: rgb(255, 255, 255); overflow: hidden; height: 100%; width: 100%;">
        <div data-v-d81624e6="" class="icon-list">
            <a data-v-d81624e6="" href="" target="_blank"><span data-v-d81624e6=""><i data-v-d81624e6="" aria-hidden="true" class="fa fa-github-alt"></i></span></a>
            <a data-v-d81624e6="" href="" target="_blank"><span data-v-d81624e6=""><i data-v-d81624e6="" aria-hidden="true" class="fa fa-weibo"></i></span></a>
            <a data-v-d81624e6="" href="mailto:<?php $this->remember('mail'); ?>" target="_blank"><span data-v-d81624e6=""><i data-v-d81624e6="" aria-hidden="true" class="fa fa-envelope"></i></span></a>
        </div>
        <?php if(isEnabled('showHitokoto','AriaConfig')): ?>
        <a data-v-d81624e6="" class="powered-by" id="hitokoto" val_url="<?php getHitokoto()?>"></a>
        <?php endif; ?>
        <p id="footer-info" style="    margin-top: 0px;">&copy; <span><?php echo $this->options->cpr ? $this->options->cpr : date('Y'); ?></span><?php getFooterWidget(); ?>
        <div style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: -1; content: &quot;&quot;; filter: blur(40px); background: url('http://ww1.sinaimg.cn/large/ac1a0c4agy1ftz7qj6l3xj21hc0u0b29.jpg') 50% center / cover no-repeat fixed rgb(255, 255, 255); height: 100%; width: 100%;"></div>
    </div>
</footer>
</div>
<style>
    canvas {
        position: absolute;
        top: 0;
        left: 0;
    }
</style>

<canvas id=c></canvas>

<script type="text/javascript">

</script>
<?php if(isEnabled('usePjax','AriaConfig')): ?>
    <script src="<?php $this->options->themeUrl('assets/js/jquery.pjax.min.js'); ?>"></script>
<?php endif; ?>
<?php if($this->options->statistics) $this->options->statistics(); ?>
<?php $this->footer(); ?>
<script type="text/javascript" src="<?php $this->options->themeUrl('assets/OwO/OwO.min.js') ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/function.js'); ?>"></script>

</body>
</html>














