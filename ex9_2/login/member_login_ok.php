<?php
  if(!isset($_POST['user_id']) || !isset($_POST['user_pw'])) exit;

  $user_id = $_POST['user_id'];
  $user_pw = $_POST['user_pw'];

  $members = array(
    'std07209'=>array('pw'=>'12345', 'name'=>'강성준'),
    'seoul'=>array('pw'=>'56789', 'name'=>'홍대리')
  );

  if(isset($members[$user_id]) && $members[$user_id]['pw'] == $user_pw){
    echo '{"user_id" : "'.$user_id.'", "user_name" : "'.$members[$user_id]['name'].'"}';
  }
?>
