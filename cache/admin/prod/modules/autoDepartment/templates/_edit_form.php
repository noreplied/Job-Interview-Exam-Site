<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/28 18:09:58
?>
<?php echo form_tag('department/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($department, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('department[name]', __($labels['department{name}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('department{name}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('department{name}')): ?>
    <?php echo form_error('department{name}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($department, 'getName', array (
  'size' => 80,
  'control_name' => 'department[name]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('department[user_id]', __($labels['department{user_id}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('department{user_id}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('department{user_id}')): ?>
    <?php echo form_error('department{user_id}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_select_tag($department, 'getUserId', array (
  'related_class' => 'User',
  'control_name' => 'department[user_id]',
  'include_blank' => true,
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('department[created_at]', __($labels['department{created_at}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('department{created_at}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('department{created_at}')): ?>
    <?php echo form_error('department{created_at}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_date_tag($department, 'getCreatedAt', array (
  'rich' => true,
  'withtime' => true,
  'calendar_button_img' => '/sf/sf_admin/images/date.png',
  'control_name' => 'department[created_at]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>

<?php include_partial('edit_actions', array('department' => $department)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($department->getId()): ?>
<?php echo button_to(__('delete'), 'department/delete?id='.$department->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>