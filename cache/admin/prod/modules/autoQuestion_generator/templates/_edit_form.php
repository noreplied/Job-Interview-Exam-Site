<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/29 01:22:34
?>
<?php echo form_tag('question_generator/edit', array(
  'id'        => 'sf_admin_edit_form',
  'name'      => 'sf_admin_edit_form',
  'multipart' => true,
)) ?>

<?php echo object_input_hidden_tag($question_generator, 'getId') ?>

<fieldset id="sf_fieldset_none" class="">

<div class="form-row">
  <?php echo label_for('question_generator[user_id]', __($labels['question_generator{user_id}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('question_generator{user_id}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('question_generator{user_id}')): ?>
    <?php echo form_error('question_generator{user_id}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_select_tag($question_generator, 'getUserId', array (
  'related_class' => 'User',
  'control_name' => 'question_generator[user_id]',
  'include_blank' => true,
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('question_generator[question_id]', __($labels['question_generator{question_id}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('question_generator{question_id}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('question_generator{question_id}')): ?>
    <?php echo form_error('question_generator{question_id}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_select_tag($question_generator, 'getQuestionId', array (
  'related_class' => 'Question',
  'control_name' => 'question_generator[question_id]',
  'include_blank' => true,
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('question_generator[answer]', __($labels['question_generator{answer}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('question_generator{answer}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('question_generator{answer}')): ?>
    <?php echo form_error('question_generator{answer}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_tag($question_generator, 'getAnswer', array (
  'size' => 7,
  'control_name' => 'question_generator[answer]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('question_generator[answer_option_id]', __($labels['question_generator{answer_option_id}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('question_generator{answer_option_id}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('question_generator{answer_option_id}')): ?>
    <?php echo form_error('question_generator{answer_option_id}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_select_tag($question_generator, 'getAnswerOptionId', array (
  'related_class' => 'AnswerOption',
  'control_name' => 'question_generator[answer_option_id]',
  'include_blank' => true,
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('question_generator[created_at]', __($labels['question_generator{created_at}']), '') ?>
  <div class="content<?php if ($sf_request->hasError('question_generator{created_at}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('question_generator{created_at}')): ?>
    <?php echo form_error('question_generator{created_at}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_date_tag($question_generator, 'getCreatedAt', array (
  'rich' => true,
  'withtime' => true,
  'calendar_button_img' => '/sf/sf_admin/images/date.png',
  'control_name' => 'question_generator[created_at]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

<div class="form-row">
  <?php echo label_for('question_generator[answer_at]', __($labels['question_generator{answer_at}']), 'class="required" ') ?>
  <div class="content<?php if ($sf_request->hasError('question_generator{answer_at}')): ?> form-error<?php endif; ?>">
  <?php if ($sf_request->hasError('question_generator{answer_at}')): ?>
    <?php echo form_error('question_generator{answer_at}', array('class' => 'form-error-msg')) ?>
  <?php endif; ?>

  <?php $value = object_input_date_tag($question_generator, 'getAnswerAt', array (
  'rich' => true,
  'withtime' => true,
  'calendar_button_img' => '/sf/sf_admin/images/date.png',
  'control_name' => 'question_generator[answer_at]',
)); echo $value ? $value : '&nbsp;' ?>
    </div>
</div>

</fieldset>

<?php include_partial('edit_actions', array('question_generator' => $question_generator)) ?>

</form>

<ul class="sf_admin_actions">
      <li class="float-left"><?php if ($question_generator->getId()): ?>
<?php echo button_to(__('delete'), 'question_generator/delete?id='.$question_generator->getId(), array (
  'post' => true,
  'confirm' => __('Are you sure?'),
  'class' => 'sf_admin_action_delete',
)) ?><?php endif; ?>
</li>
  </ul>
