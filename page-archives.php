<?php
/**
 * 归档页面 时间轴
 *
 * @package custom
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<style>
    .archives-page a[data-v-06bf989f] {
        border-bottom: 1px solid transparent;
        -webkit-transition: all 200ms;
        transition: all 200ms;
    }
    .archives-page a[data-v-06bf989f]:hover {
        border-bottom-color: #5c5c5c;
    }
    .archives-page .timeline .leading[data-v-06bf989f],
    .archives-page .timeline .one-timeline[data-v-06bf989f] {
        margin-top: 0;
        margin-bottom: 1.5rem;
    }
    .archives-page .timeline .leading[data-v-06bf989f] {
        text-align: center;
        font-size: 1.3rem;
        text-shadow: 0 0 1px #c2c2c2;
        margin-top: 0;
    }
    .archives-page .timeline .leading > *[data-v-06bf989f] {
        margin: 0 0.2rem;
    }
    .archives-page .timeline .one-timeline .one-time[data-v-06bf989f] {
        text-align: center;
        white-space: nowrap;
    }
    .archives-page .timeline .one-timeline .one-title[data-v-06bf989f] {
        word-break: break-all;
    }
    .archives-page .timeline .one-timeline .one-title .external-link[data-v-06bf989f] {
        font-size: 0.8em;
    }
    .archives-page .pagination[data-v-06bf989f] {
        text-align: center;
    }
</style>
<section data-v-75a8d7e8="" class="app-body container app-dep-footer-body">
    <div data-v-06bf989f="" data-v-75a8d7e8="" class="archives-page">
        <button data-v-06bf989f="" type="button" class="el-button el-button--default el-button--mini is-plain" style="display: none;">
            <span><i data-v-06bf989f="" aria-hidden="true" class="fa fa-undo"></i> <span data-v-06bf989f="">Back</span></span></button>

        <div data-v-06bf989f="" class="timeline">
            <?php $this->widget('Widget_Contents_Post_Recent','pageSize=10000')->to($post);?>
            <?php while($post->next()): ?>
                <?php pageArchives($post); ?>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php $this->need('footer.php'); ?>
