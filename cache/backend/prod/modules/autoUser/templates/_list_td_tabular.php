<?php
// auto-generated by sfPropelAdmin
// date: 2007/03/28 17:43:07
?>
    <td><?php echo link_to($user->getId() ? $user->getId() : __('-'), 'user/edit?id='.$user->getId()) ?></td>
    <td><?php echo $user->getFullname() ?></td>
      <td><?php echo $user->getEmail() ?></td>
      <td><?php echo $user->getUsername() ?></td>
      <td><?php echo $user->getPassword() ?></td>
      <td><?php echo $user->getAdmin() ? image_tag(sfConfig::get('sf_admin_web_dir').'/images/tick.png') : '&nbsp;' ?></td>
      <td><?php echo $user->getGrade() ?></td>
      <td><?php echo $user->getDepartment() ?></td>
  