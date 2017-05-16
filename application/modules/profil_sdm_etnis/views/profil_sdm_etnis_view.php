
        <table id="tt_<?php echo $id ?>" class="easyui-datagrid" style="width:1135px;height:400px"
			url="<?php echo site_url("profil_sdm_etnis/get_data")  ?>" title="<?php echo $title1 ?>"  singleSelect="false" toolbar="#tb_<?php echo $id ?>" rownumbers="true" pagination="true" showFooter="true" >
		<thead>
			<tr>
				<th field="suku" width="100" sortable="true"><strong>Suku</strong> </th>
				<th field="L" width="100" sortable="true"><strong>Laki-Laki</strong> </th>
				<th field="P" width="100" sortable="true"><strong>Perempuan</strong> </th>
				<th field="total" width="100" sortable="true"><strong>Total</strong> </th>
<!-- <th field='<?php echo $f2 ?>' width='200' sortable='true'><strong><?php echo $l2 ?></strong></th>
<th field='<?php echo $f3 ?>' width='200' sortable='true'><strong><?php echo $l3 ?></strong></th> -->
<!---->
			</tr>
			
		</thead>
       	</table>
 




