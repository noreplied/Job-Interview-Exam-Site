<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/29 01:22:34
?>
    <td><?php echo link_to($question_generator->getId() ? $question_generator->getId() : __('-'), 'question_generator/edit?id='.$question_generator->getId()) ?></td>
    <td><?php echo $question_generator->getUserId() ?></td>
      <td><?php echo $question_generator->getQuestionId() ?></td>
      <td><?php echo $question_generator->getAnswer() ?></td>
      <td><?php echo $question_generator->getAnswerOptionId() ?></td>
      <td><?php echo ($question_generator->getCreatedAt() !== null && $question_generator->getCreatedAt() !== '') ? format_date($question_generator->getCreatedAt(), "f") : '' ?></td>
      <td><?php echo ($question_generator->getAnswerAt() !== null && $question_generator->getAnswerAt() !== '') ? format_date($question_generator->getAnswerAt(), "f") : '' ?></td>
  