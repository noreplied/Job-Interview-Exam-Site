<?php
// auto-generated by sfPropelAdmin
// date: 2007/04/13 21:28:18
?>
<td colspan="8">
    <?php echo link_to($question->getId() ? $question->getId() : __('-'), 'question/edit?id='.$question->getId()) ?>
     - 
    <?php echo $question->getDescription() ?>
     - 
    <?php echo $question->getAnswerA() ?>
     - 
    <?php echo $question->getAnswerB() ?>
     - 
    <?php echo $question->getAnswerC() ?>
     - 
    <?php echo $question->getAnswerD() ?>
     - 
    <?php echo $question->getDepartment() ?>
     - 
    <?php echo $question->getLevel() ?>
     - 
</td>