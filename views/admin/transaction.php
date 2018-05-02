<?php include "header_admin.php"?>

	    <!-- Main content -->
		
<!-- Common -->
<!-- Title area -->
<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5>Giao dịch</h5>
			<span>Quản lý các giao dịch của hệ thống</span>
		</div>
		
		<div class="horControlB menu_action">
			<ul>
				
				<li><a href="admin/tran.html">
					<img src="images/icons/control/16/list.png" />
					<span>Danh sách</span>
				</a></li>
				
				<li><a href="admin/tran/export.html">
					<img src="images/excel.png" />
					<span>Xuất file excel</span>
				</a></li>
				
			</ul>
		</div>
		
		<div class="clear"></div>
	</div>
</div>
<div class="line"></div>

<!-- Message -->






<!-- Main content wrapper -->
<div class="wrapper">

	<div class="widget">
		<div class="title">
			<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>Danh sách Giao dịch</h6>
		 	<div class="num f12">Tổng số: <b>15</b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
			
			<thead class="filter"><tr><td colspan="9">
				<form class="list_filter form" action="index.php/admin/tran.html" method="get">
					<table cellpadding="0" cellspacing="0" width="100%"><tbody>
					
						<tr>
							<td class="label" style="width:60px;"><label for="filter_id">Mã số</label></td>
							<td class="item"><input name="id" value="" id="filter_id" type="text" style="width:95px;" /></td>
							
							<td class="label" style="width:60px;"><label for="filter_type">Hình thức</label></td>
							<td class="item">
								<select name="payment">
									<option value=""></option>
									<option value='nganluong' >Ngân lượng</option>
									<option value='baokim' >Bảo kim</option>
									<option value='dathang' >Đặt hàng</option>
								</select>
							</td>
							
							<td class="label" style="width:60px;"><label for="filter_created">Từ ngày</label></td>
							<td class="item"><input name="created" value="" id="filter_created" type="text" class="datepicker" /></td>

							
							<td colspan='2' style='width:60px'>
							<input type="submit" class="button blueB" value="Lọc" />
							<input type="reset" class="basic" value="Reset" onclick="window.location.href = 'index.php/admin/tran.html'; ">
							</td>
							
						</tr>
						
						<tr>
						    <td class="label" style="width:60px;"><label for="filter_user">Thành viên</label></td>
							<td class="item"><input name="user" value="" id="filter_user" class="tipS" title="Nhập mã thành viên" type="text" /></td>

							<td class="label"><label for="filter_status">Giao dịch</label></td>
							<td class="item">
								<select name="status">
									<option></option>
									<option value='0' >Đợi xử lý</option>
									<option value='1' >Thành công</option>
									<option value='2' >Hủy bỏ</option>
								</select>
							</td>

							<td class="label"><label for="filter_created_to">Đến ngày</label></td>
							<td class="item"><input name="created_to" value="" id="filter_created_to" type="text" class="datepicker" /></td>

							<td class="label"></td>
							<td class="item"></td>
						</tr>
						
					</tbody></table>
				</form>
			</td></tr></thead>
			<thead>
				<tr>
					<td style="width:10px;"><img src="images/icons/tableArrows.png" /></td>
					<td style="width:60px;">Mã số</td>
					<td style="width:175px;">Thành viên</td>
					<td style="width:90px;">Số tiền</td>
					<td>Hình thức</td>
					<td style="width:100px;">Giao dịch</td>
					<td style="width:75px;">Ngày tạo</td>
					<td style="width:55px;">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="8">
						 <div class="list_action itemActions">
								<a href="#submit" id="submit" class="button blueB" url="admin/tran/del_all.html">
									<span style='color:white;'>Xóa hết</span>
								</a>
						 </div>
							
					     <div class='pagination'>
			               &nbsp;<strong>1</strong>&nbsp;<a href="admin/tran/index/10">2</a>&nbsp;<a href="admin/tran/index/10">Trang kế tiếp</a>&nbsp;			            </div>
					</td>
				</tr>
			</tfoot>
			
			<tbody class="list_item">
							 <tr class='row_21'>
					<td><input type="checkbox" name="id[]" value="21" /></td>
					
					<td class="textC">21</td>
					
					<td>
						Hoàng văn Tuyền						(Khách						)
					</td>
					
					<td class="textR red">10,000,000</td>
					
					<td>
					dathang					</td>
					
					
					<td class="status textC">
						<span class="pending">
						Chờ xử lý						</span>
					</td>
					
					<td class="textC">16-08-2014</td>
					
					<td class="textC">
							<a href="admin/tran/view/21.html" class="lightbox">
								<img src="images/icons/color/view.png" />
							</a>
							
						   <a href="admin/tran/del/21.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						   </a>
					</td>
				</tr>
							 <tr class='row_20'>
					<td><input type="checkbox" name="id[]" value="20" /></td>
					
					<td class="textC">20</td>
					
					<td>
						Hoàng văn Tuyền						(19						)
					</td>
					
					<td class="textR red">5,000,000</td>
					
					<td>
					baokim					</td>
					
					
					<td class="status textC">
						<span class="pending">
						Chờ xử lý						</span>
					</td>
					
					<td class="textC">15-08-2014</td>
					
					<td class="textC">
							<a href="admin/tran/view/20.html" class="lightbox">
								<img src="images/icons/color/view.png" />
							</a>
							
						   <a href="admin/tran/del/20.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						   </a>
					</td>
				</tr>
							 <tr class='row_19'>
					<td><input type="checkbox" name="id[]" value="19" /></td>
					
					<td class="textC">19</td>
					
					<td>
						Hoàng văn Tuyền						(19						)
					</td>
					
					<td class="textR red">5,000,000</td>
					
					<td>
					baokim					</td>
					
					
					<td class="status textC">
						<span class="pending">
						Chờ xử lý						</span>
					</td>
					
					<td class="textC">15-08-2014</td>
					
					<td class="textC">
							<a href="admin/tran/view/19.html" class="lightbox">
								<img src="images/icons/color/view.png" />
							</a>
							
						   <a href="admin/tran/del/19.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						   </a>
					</td>
				</tr>
							 <tr class='row_18'>
					<td><input type="checkbox" name="id[]" value="18" /></td>
					
					<td class="textC">18</td>
					
					<td>
						Hoàng văn Tuyền						(19						)
					</td>
					
					<td class="textR red">5,000,000</td>
					
					<td>
					baokim					</td>
					
					
					<td class="status textC">
						<span class="pending">
						Chờ xử lý						</span>
					</td>
					
					<td class="textC">15-08-2014</td>
					
					<td class="textC">
							<a href="admin/tran/view/18.html" class="lightbox">
								<img src="images/icons/color/view.png" />
							</a>
							
						   <a href="admin/tran/del/18.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						   </a>
					</td>
				</tr>
							 <tr class='row_17'>
					<td><input type="checkbox" name="id[]" value="17" /></td>
					
					<td class="textC">17</td>
					
					<td>
						Hoàng văn Tuyền						(19						)
					</td>
					
					<td class="textR red">5,000,000</td>
					
					<td>
					baokim					</td>
					
					
					<td class="status textC">
						<span class="pending">
						Chờ xử lý						</span>
					</td>
					
					<td class="textC">15-08-2014</td>
					
					<td class="textC">
							<a href="admin/tran/view/17.html" class="lightbox">
								<img src="images/icons/color/view.png" />
							</a>
							
						   <a href="admin/tran/del/17.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						   </a>
					</td>
				</tr>
							 <tr class='row_16'>
					<td><input type="checkbox" name="id[]" value="16" /></td>
					
					<td class="textC">16</td>
					
					<td>
						Hoàng văn Tuyền						(19						)
					</td>
					
					<td class="textR red">5,000,000</td>
					
					<td>
					baokim					</td>
					
					
					<td class="status textC">
						<span class="pending">
						Chờ xử lý						</span>
					</td>
					
					<td class="textC">15-08-2014</td>
					
					<td class="textC">
							<a href="admin/tran/view/16.html" class="lightbox">
								<img src="images/icons/color/view.png" />
							</a>
							
						   <a href="admin/tran/del/16.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						   </a>
					</td>
				</tr>
							 <tr class='row_15'>
					<td><input type="checkbox" name="id[]" value="15" /></td>
					
					<td class="textC">15</td>
					
					<td>
						Hoàng văn Tuyền						(19						)
					</td>
					
					<td class="textR red">5,000,000</td>
					
					<td>
					baokim					</td>
					
					
					<td class="status textC">
						<span class="pending">
						Chờ xử lý						</span>
					</td>
					
					<td class="textC">15-08-2014</td>
					
					<td class="textC">
							<a href="admin/tran/view/15.html" class="lightbox">
								<img src="images/icons/color/view.png" />
							</a>
							
						   <a href="admin/tran/del/15.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						   </a>
					</td>
				</tr>
							 <tr class='row_14'>
					<td><input type="checkbox" name="id[]" value="14" /></td>
					
					<td class="textC">14</td>
					
					<td>
						Hoàng văn Tuyền						(Khách						)
					</td>
					
					<td class="textR red">10,000,000</td>
					
					<td>
					nganluong					</td>
					
					
					<td class="status textC">
						<span class="completed">
						Thành công						</span>
					</td>
					
					<td class="textC">14-08-2014</td>
					
					<td class="textC">
							<a href="admin/tran/view/14.html" class="lightbox">
								<img src="images/icons/color/view.png" />
							</a>
							
						   <a href="admin/tran/del/14.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						   </a>
					</td>
				</tr>
							 <tr class='row_13'>
					<td><input type="checkbox" name="id[]" value="13" /></td>
					
					<td class="textC">13</td>
					
					<td>
						Hoàng văn Tuyền						(Khách						)
					</td>
					
					<td class="textR red">20,000,000</td>
					
					<td>
					nganluong					</td>
					
					
					<td class="status textC">
						<span class="completed">
						Thành công						</span>
					</td>
					
					<td class="textC">13-08-2014</td>
					
					<td class="textC">
							<a href="admin/tran/view/13.html" class="lightbox">
								<img src="images/icons/color/view.png" />
							</a>
							
						   <a href="admin/tran/del/13.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						   </a>
					</td>
				</tr>
							 <tr class='row_12'>
					<td><input type="checkbox" name="id[]" value="12" /></td>
					
					<td class="textC">12</td>
					
					<td>
						Hoàng văn Tuyền						(Khách						)
					</td>
					
					<td class="textR red">10,000,000</td>
					
					<td>
					nganluong					</td>
					
					
					<td class="status textC">
						<span class="completed">
						Thành công						</span>
					</td>
					
					<td class="textC">13-08-2014</td>
					
					<td class="textC">
							<a href="admin/tran/view/12.html" class="lightbox">
								<img src="images/icons/color/view.png" />
							</a>
							
						   <a href="admin/tran/del/12.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						   </a>
					</td>
				</tr>
						</tbody>
			
		</table>
	</div>
	
</div>
        		<div class="clear mt30"></div>
<?php include "footer_admin.php"?>