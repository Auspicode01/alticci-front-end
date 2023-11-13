<?php
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
?>
<div class="simple-form">
  <h2><?php echo($_SESSION["response"]) ?></h2>  
</div>