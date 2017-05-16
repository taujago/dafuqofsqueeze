
<div class="menjorok">G. ETNIS </div>
<table class="menjorok" width="45%"   style="border:1px solid black;border-collapse:separate;border-spacing:0">
  <tr>
    <th class="thin" width="50%">SUKU</th>
    <th class="thin" width="25%">Laki - laki </th>
    <th class="thin" width="25%">Perempuan</th>
  </tr>
  <?php 
 	foreach($record->result() as $row) :  
    // show_array($row); 
  ?>
  <tr>
    <td class="thin"><?php echo $row->suku; ?></td>
    <td class="thin"><?php echo $row->L; ?></td>
    <td class="thin"><?php echo $row->P; ?></td>
  </tr>
  <?php 
  endforeach;
  ?>
</table>
<p>
</p>

