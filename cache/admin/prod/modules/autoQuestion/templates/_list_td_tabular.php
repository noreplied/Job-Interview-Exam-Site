<?php
// auto-generated by sfPropelAdmin
// date: 2007/04/13 21:28:18
?>
    <td><?php echo link_to($question->getId() ? $question->getId() : __('-'), 'question/edit?id='.$question->getId()) ?></td>
    <td><?php echo $question->getDescription() ?></td>
      <td><?php echo $question->getAnswerA() ?></td>
      <td><?php echo $question->getAnswerB() ?></td>
      <td><?php echo $question->getAnswerC() ?></td>
      <td><?php echo $question->getAnswerD() ?></td>
      <td><?php echo $question->getDepartment() ?></td>
      <td><?php echo $question->getLevel() ?></td>
  