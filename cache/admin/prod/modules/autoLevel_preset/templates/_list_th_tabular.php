<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/28 18:09:57
?>
  <th id="sf_admin_list_th_id">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/level_preset/sort') == 'id'): ?>
      <?php echo link_to(__('Id'), 'level_preset/list?sort=id&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/level_preset/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/level_preset/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Id'), 'level_preset/list?sort=id&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_name">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/level_preset/sort') == 'name'): ?>
      <?php echo link_to(__('Type of Question'), 'level_preset/list?sort=name&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/level_preset/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/level_preset/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Type of Question'), 'level_preset/list?sort=name&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_department">
        <?php echo __('Department') ?>
          </th>
  <th id="sf_admin_list_th_grade">
        <?php echo __('Position Level') ?>
          </th>
  <th id="sf_admin_list_th_level">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/level_preset/sort') == 'level'): ?>
      <?php echo link_to(__('Level'), 'level_preset/list?sort=level&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/level_preset/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/level_preset/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Level'), 'level_preset/list?sort=level&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_question_no">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/level_preset/sort') == 'question_no'): ?>
      <?php echo link_to(__('No Of Question'), 'level_preset/list?sort=question_no&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/level_preset/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/level_preset/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('No Of Question'), 'level_preset/list?sort=question_no&type=asc') ?>
      <?php endif; ?>
          </th>
