<?php
  $saida = shell_exec('/usr/bin/mysql -u restrict_dupla01 -ppwd0232123 --verbose < /home/restrict/script/blog.sql');
  echo "OK!";
?>
