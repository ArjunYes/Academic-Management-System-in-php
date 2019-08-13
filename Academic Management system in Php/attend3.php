<form method='post' action="">
<label><input type="checkbox" name="c" value="great">Bruce</label>
<input type="submit" name="b1">
<?php
if(isset($_POST['b1']))
{	

   if(isset($_POST['c']))
  {
  
    $val = $_POST['c'];
  }

  echo $val;
}

?>
</form>