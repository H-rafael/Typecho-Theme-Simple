<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
    <style>
        /*.img_p p{text-align: center;}*/
    </style>


<section data-v-75a8d7e8="" class="app-body container_section app-dep-footer-body">
    <div data-v-0759750a="" data-v-75a8d7e8="" class="detailable-page">
        <h1 data-v-0759750a="" class="title"><span data-v-0759750a=""><?php $this->title() ?></span></h1>
        <p data-v-0759750a="" class="meta" style="display: none;"><span data-v-0759750a="" class="create-time">2016-03-14, 19:34:43</span></p>

        <div data-v-0759750a="" class="comments ">
            <div data-v-0759750a="" class="gitment">
                <div data-v-0759750a="" id="lite-gitment-root">
                    <div lang="en-US" class="gitment-container gitment-root-container ">
                        <div class="post-content">
                            <?php $this->content(); ?>
                        </div>
                        <div>
                            <div lang="en-US" class="gitment-container gitment-header-container">
                                <span class="gitment-header-like-btn">
                                <svg class="gitment-heart-icon" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 50 50">
                                <path d="M25 39.7l-.6-.5C11.5 28.7 8 25 8 19c0-5 4-9 9-9 4.1 0 6.4 2.3 8 4.1 1.6-1.8 3.9-4.1 8-4.1 5 0 9 4 9 9 0 6-3.5 9.7-16.4 20.2l-.6.5zM17 12c-3.9 0-7 3.1-7 7 0 5.1 3.2 8.5 15 18.1 11.8-9.6 15-13 15-18.1 0-3.9-3.1-7-7-7-3.5 0-5.4 2.1-6.9 3.8L25 17.1l-1.1-1.3C22.4 14.1 20.5 12 17 12z"></path>
                                </svg> Like • <strong>1</strong> Liked </span>
                                <span> • <strong>
                                        <?php $this->commentsNum(_t('0 条评论'), _t('1 条评论'), _t('%d 条评论')); ?>
                                </strong>  </span>
                            </div>
                        </div>
                        <?php $this->need('comments.php'); ?>
                    </div>

                </div>
            </div>
        </div>

        <button data-v-e739917e="" data-v-0759750a="" type="button" class="el-button eof el-button--text el-button--mini">
            <!---->
            <!----><span><i data-v-e739917e="" aria-hidden="true" class="fa fa-level-up"></i> <span data-v-e739917e="">EOF</span></span></button>
        <div data-v-0759750a="" class="el-dialog__wrapper" style="display: none;">
            <div class="el-dialog" style="width: min-content; margin-top: 15vh;">
                <div class="el-dialog__header">
                    <span class="el-dialog__title"></span>
                    <button type="button" aria-label="Close" class="el-dialog__headerbtn"><i class="el-dialog__close el-icon el-icon-close"></i></button>
                </div>
                <!---->
                <!---->
            </div>
        </div>
    </div>
</section>
<?php $this->need('footer.php'); ?>