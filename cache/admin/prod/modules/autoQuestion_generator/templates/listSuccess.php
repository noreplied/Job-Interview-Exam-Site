<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/29 01:22:34
?>
<?php use_helper('I18N', 'Date') ?>

<?php use_stylesheet('/sf/sf_admin/css/main') ?>

<div id="sf_admin_container">

<h1><?php echo __('question_generator list', 
array()) ?></h1>

<div id="sf_admin_header">
<?php include_partial('question_generator/list_header', array('pager' => $pager)) ?>
<?php include_partial('question_generator/list_messages', array('pager' => $pager)) ?>
</div>

<div id="sf_admin_bar">
</div>

<div id="sf_admin_content">
<?php if (!$pager->getNbResults()): ?>
<?php echo __('no result') ?>
<?php else: ?>
<?php include_partial('question_generator/list', array('pager' => $pager)) ?>
<?php endif; ?>
<?php include_partial('list_actions') ?>
</div>

<div id="sf_admin_footer">
<?php include_partial('question_generator/list_footer', array('pager' => $pager)) ?>
</div>

</div>
