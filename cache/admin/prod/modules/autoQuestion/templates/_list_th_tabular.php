<?php
// auto-generated by sfPropelAdmin
// date: 2007/04/13 21:28:18
?>
  <th id="sf_admin_list_th_id">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/question/sort') == 'id'): ?>
      <?php echo link_to(__('Id'), 'question/list?sort=id&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/question/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/question/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Id'), 'question/list?sort=id&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_description">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/question/sort') == 'description'): ?>
      <?php echo link_to(__('Question'), 'question/list?sort=description&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/question/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/question/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Question'), 'question/list?sort=description&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_answer_a">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/question/sort') == 'answer_a'): ?>
      <?php echo link_to(__('A'), 'question/list?sort=answer_a&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/question/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/question/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('A'), 'question/list?sort=answer_a&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_answer_b">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/question/sort') == 'answer_b'): ?>
      <?php echo link_to(__('B'), 'question/list?sort=answer_b&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/question/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/question/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('B'), 'question/list?sort=answer_b&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_answer_c">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/question/sort') == 'answer_c'): ?>
      <?php echo link_to(__('C'), 'question/list?sort=answer_c&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/question/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/question/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('C'), 'question/list?sort=answer_c&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_answer_d">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/question/sort') == 'answer_d'): ?>
      <?php echo link_to(__('D'), 'question/list?sort=answer_d&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/question/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/question/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('D'), 'question/list?sort=answer_d&type=asc') ?>
      <?php endif; ?>
          </th>
  <th id="sf_admin_list_th_department">
        <?php echo __('Department') ?>
          </th>
  <th id="sf_admin_list_th_level">
          <?php if ($sf_user->getAttribute('sort', null, 'sf_admin/question/sort') == 'level'): ?>
      <?php echo link_to(__('Level'), 'question/list?sort=level&type='.($sf_user->getAttribute('type', 'asc', 'sf_admin/question/sort') == 'asc' ? 'desc' : 'asc')) ?>
      (<?php echo __($sf_user->getAttribute('type', 'asc', 'sf_admin/question/sort')) ?>)
      <?php else: ?>
      <?php echo link_to(__('Level'), 'question/list?sort=level&type=asc') ?>
      <?php endif; ?>
          </th>
