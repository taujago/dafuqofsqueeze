
        <table id="tt_<?php echo $id ?>" class="easyui-datagrid" style="width:1200px;height:375px"
			url="<?php echo site_url($url)  ?>" title="<?php echo $title1 ?>"  singleSelect="false" toolbar="#tb_<?php echo $id ?>" rownumbers="true" pagination="true">
		<thead>
			<tr>
				<th field='<?php echo $f1 ?>' width='250' sortable='true'><strong><?php echo $l1 ?></strong></th>
                <th field='<?php echo $f7 ?>' width='80' sortable='true'><strong><?php echo $l7 ?></strong></th>
                <th field='<?php echo $f8 ?>' width='80' sortable='true'><strong><?php echo $l8 ?></strong></th>
                <th field='<?php echo $f9 ?>' width='80' sortable='true'><strong><?php echo $l9 ?></strong></th>
                <th field='<?php echo $f2 ?>' width='110' sortable='true'><strong><?php echo $l2 ?></strong></th>
                <th field='<?php echo $f3 ?>' width='110' sortable='true'><strong><?php echo $l3 ?></strong></th>
                <th field='<?php echo $f4 ?>' width='230' sortable='true'><strong><?php echo $l4 ?></strong></th>
                <th field='<?php echo $f5 ?>' width='110' sortable='true'><strong><?php echo $l5 ?></strong></th>
                <th field='<?php echo $f6 ?>' width='110' sortable='true'><strong><?php echo $l6 ?></strong></th>
                <!---->
			</tr>
			
		</thead>
       	</table>
 <script type="text/javascript">
 	$('#tt_<?php echo $id; ?>').datagrid({
		queryParams: {'table':'<?php echo "v_".$table; ?>','default':'<?php echo $default; ?>'}
	});
 </script>
<div style="display:none" id="tb_<?php echo $id ?>" style="padding:5px;height:auto">
 <a class="easyui-linkbutton"  iconCls="icon-back" href="<?php echo site_url("profil_menu"); ?>" > Kembali </a>
 </div>