

<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
    ?>
    <li id="li-<?php $comments->theId(); ?>" class="gitment-comment comment-body<?php
    if ($comments->levels > 0) {
        echo ' comment-child';
        $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
    } else {
        echo ' comment-parent';
    }
    $comments->alt(' comment-odd', ' comment-even');
    echo $commentClass;
    ?>">
        <a class="gitment-comment-avatar" href="" target="_blank">
            <?php $comments->gravatar('40', ''); ?>
        </a>
        <div class="gitment-comment-main">
            <div class="gitment-comment-header">
                <b>By</b> <?php echo "<a href=\"$comments->url\" rel=\"external nofollow\" target=\"_blank\" class=\"gitment-comment-name\">$comments->author</a>"; ?>
                at <?php $comments->date(); ?>. <?php if(isEnabled('showCommentUA','AriaConfig')): ?>
                    <span><?php echo parseUserAgent($comments->agent); ?></span><?php endif; ?>
                <span title="Sat Dec 30 2017 14:23:34 GMT+0800 (中国标准时间)"><?php //$comments->date('Y-m-d H:i'); ?></span>
                <div class="gitment-comment-like-btn">
<!--                    <svg class="gitment-heart-icon" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 50 50">-->
<!--                        <path d="M25 39.7l-.6-.5C11.5 28.7 8 25 8 19c0-5 4-9 9-9 4.1 0 6.4 2.3 8 4.1 1.6-1.8 3.9-4.1 8-4.1 5 0 9 4 9 9 0 6-3.5 9.7-16.4 20.2l-.6.5zM17 12c-3.9 0-7 3.1-7 7 0 5.1 3.2 8.5 15 18.1 11.8-9.6 15-13 15-18.1 0-3.9-3.1-7-7-7-3.5 0-5.4 2.1-6.9 3.8L25 17.1l-1.1-1.3C22.4 14.1 20.5 12 17 12z"></path>-->
<!--                    </svg>-->
                </div>
            </div>
            <div class="gitment-comment-body gitment-markdown">
                <?php $comments->content(); ?>
            </div>

            <?php if ($comments->children) { ?>
                <div class="comment-children">
                    <?php $comments->threadedComments($options); ?>
                </div>
            <?php } ?>

        </div> <img class="gitment-hidden" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
    </li>

<?php } ?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php commentReply($this); ?>

<div>
    <div lang="en-US" class="gitment-container gitment-comments-container">

        <?php if($this->allow('comment')): ?>
            <?php $this->comments()->to($comments); ?>

            <div class="gitment-comments-list">
                <?php $comments->listComments(); ?>
<!--                <li class="gitment-comment"> <a class="gitment-comment-avatar" href="https://github.com/HeskeyBaozi" target="_blank"> <img class="gitment-comment-avatar-img" src="https://avatars3.githubusercontent.com/u/15819224?v=4" /> </a>-->
<!--                    <div class="gitment-comment-main">-->
<!--                        <div class="gitment-comment-header">-->
<!--                            <a class="gitment-comment-name" href="https://github.com/HeskeyBaozi" target="_blank"> HeskeyBaozi </a> commented on-->
<!--                            <span title="Sat Jan 06 2018 17:15:52 GMT+0800 (中国标准时间)">Sat Jan 06 2018</span>-->
<!--                            <div class="gitment-comment-like-btn">-->
<!--                                <svg class="gitment-heart-icon" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 50 50">-->
<!--                                    <path d="M25 39.7l-.6-.5C11.5 28.7 8 25 8 19c0-5 4-9 9-9 4.1 0 6.4 2.3 8 4.1 1.6-1.8 3.9-4.1 8-4.1 5 0 9 4 9 9 0 6-3.5 9.7-16.4 20.2l-.6.5zM17 12c-3.9 0-7 3.1-7 7 0 5.1 3.2 8.5 15 18.1 11.8-9.6 15-13 15-18.1 0-3.9-3.1-7-7-7-3.5 0-5.4 2.1-6.9 3.8L25 "></path>-->
<!--                                </svg>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="gitment-comment-body gitment-markdown">-->
<!--                            <p>-->
<!--                                <a class="user-mention" data-hovercard-type="user" data-hovercard-url="/hovercards?user_id=19968251" data-octo-click="hovercard-link-click" data-octo-dimensions="link_type:self" href="https://github.com/QingHeYang">@QingHeYang</a> 嗯。当初设计的时候主要是强化作者在整个网页上的影响力。我也会在后续-->
<!--                                <del>-->
<!--                                    期末考试后-->
<!--                                </del>上添加调整标题和作者位置的接口。-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div> <img class="gitment-hidden" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />-->
<!--                </li>-->
            </div>

        <?php endif; ?>

        <?php $comments->pageNav('<', '>',1,'...',array('wrapTag' => 'ul', 'wrapClass' => 'gitment-comments-pagination','itemTag' => 'li','currentClass' => 'gitment-comments-page-item gitment-selected',)); ?>
        <!---->
        <!--        <ul class="gitment-comments-pagination">-->
        <!--            <li class="gitment-comments-page-item gitment-selected">1</li>-->
        <!--            <li class="gitment-comments-page-item">2</li>-->
        <!--            <li class="gitment-comments-page-item">Next</li>-->
        <!--        </ul>-->
    </div>
</div>


<div  id="<?php $this->respondId(); ?>">
    <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
        <div lang="en-US" class="gitment-container gitment-editor-container" id="comment-info">
            <p>
                <img no-lazyload class="gitment-editor-avatar" style="width: 40px;" src="<?php echo $this->options->avatarUrl ? $this->options->avatarUrl : __TYPECHO_GRAVATAR_PREFIX__ . md5( strtolower( trim( $this->remember('mail',true) ) ) ) . '?d=mp&r=g&s=120;' ?>" >
<!--                <img no-lazyload class="gitment-editor-avatar" style="width: 40px;" id="comment-cur-avatar" src="--><?php //echo __TYPECHO_GRAVATAR_PREFIX__ ?><!--">-->
            </p>
            <div class="gitment-editor-main">
                <?php if($this->user->hasLogin()): ?>
                    <div class="gitment-editor-header">
                        <div class="gitment-editor-login">
                            <?php _e('登录身份: '); ?>
                            <a href="<?php $this->options->profileUrl(); ?>">
                                <?php $this->user->screenName(); ?>
                            </a>.
                            <a href="<?php $this->options->logoutUrl(); ?>" title="Logout" no-pjax>
                                <?php _e('退出'); ?>&raquo;
                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <nav class="gitment-editor-tabs gitment-selected">
                        <input class="gitment-editor-tab" placeholder= " (必填) 昵称" style="width: 33%" type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required >
                        <label for="mail" <?php if ($this->options->commentsRequireMail): ?> class="required"
                        <?php endif; ?>>
<!--                            <i class="iconfont icon-aria-email"></i>-->
                        </label>

                        <input class="gitment-editor-tab gitment-selected"  placeholder="<?php echo $this->options->commentsRequireMail ? '（必填）' : '（选填）';echo '邮箱'; ?>" type="email" name="mail" id="mail" class="text" value="<?php echo $this->remember('mail'); ?>"
                            <?php if ($this->options->commentsRequireMail): ?> required
                            <?php endif; ?>/>

                        <input class="gitment-editor-tab " type="url" name="url" id="url" class="text" placeholder="<?php echo $this->options->commentsRequireURL ? '（必填）' : '（选填）';echo '网站'; ?>"
                               value="<?php $this->remember('url'); ?>" <?php
                        if ($this->options->commentsRequireURL): ?> required
                        <?php endif; ?> style="width: 32%">
                    </nav>
                <?php endif; ?>

                <div class="gitment-editor-body gitment-selected" >
                    <div class="gitment-editor-write-field">
                        <label for="textarea" class="required"></label>
                        <textarea placeholder="添加新的评论" title="Login to Comment" rows="7" cols="40" name="text" id="textarea" class="textarea" ><?php $this->remember('text'); ?></textarea>
                    </div>
                    <div class="gitment-editor-preview-field gitment-hidden">
                        <div class="gitment-editor-preview gitment-markdown"></div>
                    </div>
                </div>
            </div>

            <div class="gitment-editor-footer">
                <!--            <a class="gitment-editor-footer-tip" href="https://guides.github.com/features/mastering-markdown/" target="_blank"> Styling with Markdown is supported </a>-->
                <button class="gitment-editor-submit" title="Login to Comment" type="submit">Comment</button>
            </div>
        </div>
    </form>
</div>