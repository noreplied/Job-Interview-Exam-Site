<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/28 18:09:58
?>
  <th id="sf_admin_list_th_id">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/department/sort') == 'id'): ?>
      <?php echo link_to(__('Id'), 'department/list?sort=id&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/department/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/department/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Id'), 'department/list?sort=id&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_name">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/department/sort') == 'name'): ?>
      <?php echo link_to(__('Name'), 'department/list?sort=name&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/department/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/department/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Name'), 'department/list?sort=name&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_user">
        <?php echo __('User') ?>
          </th>
