<?php
/* @var $this UserController */
$this->breadcrumbs->add('User', $this->createUrl('site/index'));
?>
<h1><?php $this->breadcrumbs->display()?>
    <?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
