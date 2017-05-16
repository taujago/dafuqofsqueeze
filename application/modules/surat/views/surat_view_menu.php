 <ul class="menuitems">
    <?php 
    $i=0;
		foreach($record->result() as $row) : 
			$i++;
		?>
        <li><?php echo anchor("$row->controller", "$i .  $row->menu"); ?>
        </li>
        <?php
		endforeach;
	?>
  </ul>