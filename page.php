<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<content>
  <div id="pjax-container" class="main box">
    <div class="article">
      <div class="article-title">
        <?php $this->title() ?>
      </div>
      <div class="article-content">
        <?php $this->content(); ?>
      </div>
      <?php $this->need('comments.php'); ?>
    </div>
  </div>
</content>
<?php $this->need('footer.php'); ?>
