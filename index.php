<?php
/**
 *  由心而发，简单的
 * <a href="https://github.com/H-rafael/Typecho-Theme-Simple" target="_blank">Github</a> | <a href="http://qqexit.com/" target="_blank">Home</a>
 * @package Simple
 * @author  Kiln
 * @version 1.2.0
 * @link http://qqexit.com/index.php/archives/23/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<style>
    .active a{
        color: #fff;
    }
</style>
<section data-v-75a8d7e8="" class="app-body container_section app-dep-footer-body">
    <div data-v-802392fc="" data-v-75a8d7e8="" id="home-page">
        <button data-v-802392fc="" type="button" class="el-button back el-button--default el-button--mini is-plain" style="display: none;">
           <span><i data-v-802392fc="" aria-hidden="true" class="fa fa-undo"></i> <span data-v-802392fc="">Back</span></span></button>
        <div data-v-802392fc="" class="article-card-list">
            <?php while($this->next()): ?>
            <div data-v-e8c9ac44="" data-v-802392fc="" class="article-card">
                <h1 data-v-e8c9ac44="" class="title"><a data-v-e8c9ac44="" href="<?php $this->permalink() ?>" class=""><span data-v-e8c9ac44=""><?php $this->sticky(); $this->title() ?></span></a></h1>
                <p data-v-e8c9ac44="" class="meta"><span data-v-e8c9ac44="" class="create-time"><?php $this->category(' ',true,'无'); ?> <?php $this->date('F jS, Y'); ?></span></p>
                <div data-v-e8c9ac44="" class="box cover">
                    <a href="<?php $this->permalink() ?>">
                        <div data-v-e8c9ac44="" class="photo-wrapper" style="
                                background: url(
                        <?php if($this->fields->thumbnail)
                            $this->fields->thumbnail();
                        else
                            echo getThumbnail();
                        ?>);
                                background-position: center center;
                                background-size: cover;"></div>
                    </a>
                </div>
                <article data-v-e8c9ac44="" id="detailable-content">
                    <?php
                    if($this->fields->previewContent)
                        $this->fields->previewContent();
                    else
                        $this->excerpt(80, '...');
                    ?>
                </article>
                <div data-v-e8c9ac44="" class="categories-and-tags">
                </div>
                <a data-v-e8c9ac44=""  href="<?php $this->permalink() ?>" class="el-button more el-button--primary el-button--mini">
                   More </a>
            </div>
            <?php endwhile; ?>
        </div>
        <div data-v-802392fc="" class="pagination el-pagination el-pagination--small">
            <?php $this->pageNav('<', '>',1,'...',array('wrapTag' => 'ul', 'wrapClass' => 'el-pager','itemTag' => 'li','currentClass' => 'number active')); ?>
        </div>

        <div data-v-802392fc="" class="el-dialog__wrapper" style="display: none;">
            <div class="el-dialog" style="width: min-content; margin-top: 15vh;">
                <div class="el-dialog__header">
                    <span class="el-dialog__title"></span>
                    <button type="button" aria-label="Close" class="el-dialog__headerbtn"><i class="el-dialog__close el-icon el-icon-close"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->need('footer.php'); ?>
