<?php
       $date = new DateTime('now', new DateTimeZone('UTC'));
?>
{
 "current_date": "<?php echo $date->format('Y_1_d'); ?>",
 "current_year": "<?php echo $date->format('Y'); ?>",
 "current_day": "<?php echo $date->format('d'); ?>",
 "current_month": "<?php echo $date->format('m'); ?>"
}
