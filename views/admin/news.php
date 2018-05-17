<?php include "header_admin.php"
?>
<!-- Title area -->
<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5>Bài viết</h5>
			<span>Quản lý bài viết</span>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="line"></div>
<!-- Main content -->
<div class="wrapper" id="main_news">
	<div class="widget">
	
		<div class="title">

			<h6>
				Danh sách bài viết			</h6>
		 	<div class="num f12">Số lượng: <b><?php echo count($dataTT);?></b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
			
			<thead class="filter"><tr><td colspan="6">
				<form class="list_filter form" action="route_admin.php?controller=controller_tintuc&action=filter" method="post">
					<table cellpadding="0" cellspacing="0" width="80%"><tbody>
					
						<tr>
							<td class="label" style="width:40px;"><label for="filter_id">Mã số</label></td>
							<td class="item"><input name="id" value="" id="filter_id" type="text" style="width:55px;" /></td>
							
							<td class="label" style="width:40px;"><label for="filter_id">Tiêu đề</label></td>
                            <td class="item" style="width:155px;" ><input name="name" value="" id="filter_iname" type="text" style="width:155px;" /></td>
                            <td style='width:150px'>
							<input type="submit" class="button blueB" value="Lọc" />
							<input type="reset" class="basic" value="Reset" onclick="window.location.href = 'route_admin.php?controller=controller_tintuc&action=showTTadmin'; "/>
                            </td>
                            
                        </tr>
                        </tbody></table>
				</form>
			</td></tr></thead>
			
			<thead>
				<tr>

					<td style="width:60px;">Mã số</td>
					<td>Tiêu đề</td>
					<td style="width:75px;">Ngày đăng</td>
					<td style="width:120px;">Hành động</td>
				</tr>
            </thead>
            
            
            <tbody class="list_item">
			    
				<?php
				if(!empty($dataTT)){
					foreach ($dataTT as $tt){
						?>
					<tr class='row_9'>

						
						<td class="textC"><?php echo $tt->getIdtintuc();?></td>
						
						<td>
						<div class="image_thumb">
							<img src="<?php echo $tt->getUrlanhtintuc(); ?>" height="50">
							<div class="clear"></div>
						</div>
						
						<a href="route_admin.php?controller=controller_tintuc&action=showTTadmindetail&id_tt=<?php echo $tt->getIdtintuc()?>" class="tipS" title="" target="_blank">
						<b><?php echo $tt->getTentintuc();?></b>
						</a>
						
							
						</td>
						
						<td class="textC"><?php echo $tt->getNgayviet();?></td>
						
						<td class="option textC">

							<a  href="route_admin.php?controller=controller_tintuc&action=showTTadmindetail&id_tt=<?php echo $tt->getIdtintuc()?>" target='_blank' class='tipS' title="Xem chi tiết bài viết">
									<img src="images/icons/color/view.png" />
							</a>
							<a href="route_admin.php?controller=controller_tintuc&action=updateTTadmin&id_tt=<?php echo $tt->getIdtintuc()?>" target='_blank' title="Chỉnh sửa" class="tipS">
								<img src="images/icons/color/edit.png" />
							</a>
							
							<a href="route_admin.php?controller=controller_tintuc&action=delTTadmin&id_tt=<?php echo $tt->getIdtintuc()?>" title="Xóa" class="tipS verify_action" >
								<img src="images/icons/color/delete.png" />
							</a>
						</td>
					</tr>

					<?php
					}
				}
				?>

            </tbody>
			
        </table>
    </div>

</div>		
<div class="clear mt30"></div>
<?php include "footer_admin.php" ?>
