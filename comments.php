
<style>
    .comment-list {
        padding: 0;
        margin: 0
    }
    .gitment-comments-list{
        /*width: 92%;*/
        margin-left: 59px;
    }
    .comment-reply a{
        text-decoration: none;!important;
    }
    #page-nav ul li a{
        text-decoration: none;
    }
</style>

<?php
function threadedComments($comments, $options) {
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

                <b>By</b>
                <?php echo "<a href=\"$comments->url\" rel=\"external nofollow\" target=\"_blank\" class=\"gitment-comment-name\">$comments->author</a>"; ?> at <?php $comments->date('Y-m-d H:i'); ?>.
                <?php if(isEnabled('showCommentUA','AriaConfig')): ?>
                    <span><?php echo parseUserAgent($comments->agent); ?></span>
                <?php endif; ?>
                <span class="comment-reply" style="float:right">
                    <?php $comments->reply('<i class="iconfont icon-aria-reply"></i>'); ?>
                </span>
            </div>
            <div class="gitment-comment-body gitment-markdown">
                <?php showCommentContent($comments->coid); ?>
            </pre>

            </div>
        </div>

        <?php if ($comments->children) { ?>
            <div class="comment-children">
                <?php $comments->threadedComments($options); ?>
            </div>
        <?php } ?>
    </li>

<?php } ?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php commentReply($this); ?>



<div>
    <div lang="en-US" class="gitment-container gitment-comments-container ">

        <?php if($this->allow('comment')): ?>
            <?php $this->comments()->to($comments); ?>


            <div class="gitment-comments-list ">
                <?php $comments->listComments(); ?>
            </div>


        <?php endif; ?>
        <div id="page-nav">
            <?php $comments->pageNav('Previous', 'Next',1,'...',array('wrapTag' => 'ul', 'wrapClass' => '','itemTag' => 'li','currentClass' => 'page-current',)); ?>
        </div>
    </div>

</div>

<div id="<?php $this->respondId(); ?>" class="respond">
<!--    <div class="cancel-comment-reply">-->
<!--        --><?php //$comments->cancelReply('<i class="iconfont icon-aria-cancel"></i>'); ?>
<!--    </div>-->




    <span id="new-response">
			<i class="iconfont icon-aria-write"></i> 添加新评论 </span>
    <!-- New Comments begin -->
    <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form"
          role="form">
        <?php if($this->user->hasLogin()): ?>
            <p>
                <?php _e('登录身份: '); ?>
                <a href="<?php $this->options->profileUrl(); ?>">
                    <?php $this->user->screenName(); ?>
                </a>.
                <a href="<?php $this->options->logoutUrl(); ?>" title="Logout" no-pjax>
                    <?php _e('退出'); ?>&raquo;</a>
            </p>
        <?php else: ?>
            <div id="comment-info">
                <p>

                    <img no-lazyload id="comment-cur-avatar" src="<?php echo __TYPECHO_GRAVATAR_PREFIX__ ?>">
                </p>
                <p class="comment-input">
                    <label for="author" class="required">
                        <i class="iconfont icon-aria-username"></i>
                    </label>
                    <input placeholder="（必填）昵称" type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required />
                </p>
                <p class="comment-input">
                    <label for="mail" <?php if ($this->options->commentsRequireMail): ?> class="required"
                    <?php endif; ?>>
                        <i class="iconfont icon-aria-email"></i>
                    </label>
                    <input placeholder="<?php echo $this->options->commentsRequireMail ? '（必填）' : '（选填）';echo '邮箱'; ?>" type="email" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>"
                        <?php if ($this->options->commentsRequireMail): ?> required
                        <?php endif; ?>/>
                </p>
                <p class="comment-input">
                    <label for="url" <?php if ($this->options->commentsRequireURL): ?> class="required"
                    <?php endif; ?>>
                        <i class="iconfont icon-aria-link"></i>
                    </label>
                    <input type="url" name="url" id="url" class="text" placeholder="<?php echo $this->options->commentsRequireURL ? '（必填）' : '（选填）';echo '网站'; ?>"
                           value="<?php $this->remember('url'); ?>" <?php
                    if ($this->options->commentsRequireURL): ?> required
                    <?php endif; ?>/>
                </p>
            </div>
        <?php endif; ?>
        <?php if($this->options->commentsMarkdown): ?>
            <div style="float:right">
                <i class="iconfont icon-aria-markdown"></i><span style="font-style:italic;font-size:13px;color:#444"> Markdown is supported.</span>
            </div>
        <?php endif; ?>
        <p>
            <label for="textarea" class="required"></label>
            <textarea style="background: url('<?php $this->options->themeUrl('assets/img/textarea_2.png'); ?>') right bottom no-repeat;background-size: 180px 180px;" rows="8" cols="50" name="text" id="textarea" class="textarea" placeholder="念念不忘，必有失望。"><?php $this->remember('text'); ?></textarea>
        </p>
        <div id="comment-footer">
            <div class="OwO">
            </div><!--end .OwO-->
<!--            <div class="comment-image">-->
<!--                <span><i class="iconfont icon-aria-picture"></i>图片</span>-->
<!--            </div>-->
            <?php if(isEnabled('useCommentToMail','AriaConfig')): ?>
                <div id="comment-ban-mail" class="ui toggle checkbox">
                    <input name="banmail" type="checkbox" value="stop">
                    <label for="comment-ban-mail"><strong>不接收</strong>回复邮件通知</label>
                </div>
            <?php endif; ?>
        </div>
        <center>
            <button type="submit" class="submit"><i class="iconfont icon-aria-submit"></i> 一言既出</button>
        </center>
    </form>
</div>
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>

