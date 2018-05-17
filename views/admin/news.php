<?php include "header_admin.php"?>
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
			<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>
				Danh sách bài viết			</h6>
		 	<div class="num f12">Số lượng: <b>0</b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
			
			<thead class="filter"><tr><td colspan="6">
				<form class="list_filter form" action="index.php/admin/product.html" method="get">
					<table cellpadding="0" cellspacing="0" width="80%"><tbody>
					
						<tr>
							<td class="label" style="width:40px;"><label for="filter_id">Mã số</label></td>
							<td class="item"><input name="id" value="" id="filter_id" type="text" style="width:55px;" /></td>
							
							<td class="label" style="width:40px;"><label for="filter_id">Tiêu đề</label></td>
                            <td class="item" style="width:155px;" ><input name="name" value="" id="filter_iname" type="text" style="width:155px;" /></td>
                            <td style='width:150px'>
							<input type="submit" class="button blueB" value="Lọc" />
							<input type="reset" class="basic" value="Reset" onclick="window.location.href = 'index.php/admin/product.html'; ">
                            </td>
                            
                        </tr>
                        </tbody></table>
				</form>
			</td></tr></thead>
			
			<thead>
				<tr>
					<td style="width:21px;"><img src="images/icons/tableArrows.png" /></td>
					<td style="width:60px;">Mã số</td>
					<td>Tiêu đề</td>
					<td style="width:75px;">Ngày tạo</td>
					<td style="width:120px;">Hành động</td>
				</tr>
            </thead>
            
            <tfoot class="auto_check_pages">
				<tr>
					<td colspan="5">
						 <div class="list_action itemActions">
								<a href="#submit" id="submit" class="button blueB" url="admin/product/del_all.html">
									<span style='color:white;'>Xóa hết</span>
								</a>
						 </div>
							
					     <div class='pagination'>
			             </div>
					</td>
				</tr>
            </tfoot>
            
            <tbody class="list_item">
			      			       <tr class='row_9'>
					<td><input type="checkbox" name="id[]" value="9" /></td>
					
					<td class="textC">9</td>
					
					<td>
					<div class="image_thumb">
						<img src="../upload/product/product13.jpg" height="50">
						<div class="clear"></div>
					</div>
					
					<a href="product/view/9.html" class="tipS" title="" target="_blank">
					<b>Tivi LG 520</b>
					</a>
					
					<div class="f11" >
					  Đã bán: 0					  | Xem: 20					</div>
						
					</td>
					
					<td class="textC">01-01-1970</td>
					
					<td class="option textC">

						<a  href="product/view/9.html" target='_blank' class='tipS' title="Xem chi tiết sản phẩm">
								<img src="images/icons/color/view.png" />
						 </a>
						 <a href="admin/product/edit/9.html" title="Chỉnh sửa" class="tipS">
							<img src="images/icons/color/edit.png" />
						</a>
						
						<a href="admin/product/del/9.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						</a>
					</td>
                </tr>
            </tbody>
			
        </table>
    </div>

</div>		
<div class="clear mt30"></div>
<?php include "footer_admin.php" ?>