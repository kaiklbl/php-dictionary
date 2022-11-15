<?php

$a = 10;
if ($a < 8) :
?>
<p>if-Bedingung erfüllt</p>
<?php
elseif ($a >= 8 && $a < 20) :
    ?>
<p>elseif Bedingung erfüllt</p>
<?php
else :
    ?>
<p>else Fall eingetreten</p>
<?php
endif;
?>
<p>HTML au&szlig;erhalb der Fallunterscheidungen</p>