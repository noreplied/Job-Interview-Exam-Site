<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/29 01:22:34
?>
<ul class="sf_admin_actions">
  <li><?php echo button_to(__('list'), 'question_generator/list?id='.$question_generator->getId(), array (
  'class' => 'sf_admin_action_list',
)) ?></li>
  <li><?php echo submit_tag(__('save'), array (
  'name' => 'save',
  'class' => 'sf_admin_action_save',
)) ?></li>
  <li><?php echo submit_tag(__('save and add'), array (
  'name' => 'save_and_add',
  'class' => 'sf_admin_action_save_and_add',
)) ?></li>
</ul>