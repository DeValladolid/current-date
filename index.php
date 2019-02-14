<?php
       $date = new DateTime('now', new DateTimeZone('UTC'));
?>
{
 "current_date": "<?php echo $date->format('Y_1_d'); ?>"
}
