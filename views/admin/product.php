<?php include "header_admin.php"?>
<!-- Main content wrapper -->
<div class="wrapper" id="main_product">
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>
				Danh sách sản phẩm			</h6>
		 	<div class="num f12">Số lượng: <b>0</b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
			
			<thead class="filter"><tr><td colspan="6">
				<form class="list_filter form" action="index.php/admin/product.html" method="get">
					<table cellpadding="0" cellspacing="0" width="80%"><tbody>
					
						<tr>
							<td class="label" style="width:40px;"><label for="filter_id">Mã số</label></td>
							<td class="item"><input name="id" value="" id="filter_id" type="text" style="width:55px;" /></td>
							
							<td class="label" style="width:40px;"><label for="filter_id">Tên</label></td>
							<td class="item" style="width:155px;" ><input name="name" value="" id="filter_iname" type="text" style="width:155px;" /></td>
							
							<td class="label" style="width:60px;"><label for="filter_status">Thể loại</label></td>
							<td class="item">
								<select name="catalog">
									<option value=""></option>
																		      <!-- kiem tra danh muc co danh muc con hay khong -->
									      									            <optgroup label="Tivi">
									               									                    <option value="18" >
											                Toshiba											            </option>
									               									                    <option value="17" >
											                Samsung											            </option>
									               									                    <option value="16" >
											                Panasonic											            </option>
									               									                    <option value="15" >
											                LG											            </option>
									               									                    <option value="14" >
											                JVC											            </option>
									               									                    <option value="13" >
											                AKAI											            </option>
									               									            </optgroup>
									       
																		      <!-- kiem tra danh muc co danh muc con hay khong -->
									      									            <optgroup label="Điện thoại">
									               									                    <option value="12" >
											                HTC											            </option>
									               									                    <option value="11" >
											                BlackBerry											            </option>
									               									                    <option value="10" >
											                Asus											            </option>
									               									                    <option value="9" >
											                Apple											            </option>
									               									            </optgroup>
									       
																		      <!-- kiem tra danh muc co danh muc con hay khong -->
									      									            <optgroup label="Laptop">
									               									                    <option value="8" >
											                HP											            </option>
									               									                    <option value="7" >
											                Dell											            </option>
									               									                    <option value="6" >
											                Asus											            </option>
									               									                    <option value="5" >
											                 Apple											            </option>
									               									                    <option value="4" >
											                 Acer											            </option>
									               									            </optgroup>
									       
																	</select>
							</td>
							
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
					<td>Tên</td>
					<td>Giá</td>
					<td style="width:75px;">Ngày tạo</td>
					<td style="width:120px;">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="6">
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
					
					<td class="textR">
					                                     5,400,000 đ
                           				
					</td>

					
					<td class="textC">01-01-1970</td>
					
					<td class="option textC">
											   						<a href="" title="Gán là nhạc tiêu biểu" class="tipE">
							<img src="images/icons/color/star.png" />
						</a>
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
		        			       <tr class='row_8'>
					<td><input type="checkbox" name="id[]" value="8" /></td>
					
					<td class="textC">8</td>
					
					<td>
					<div class="image_thumb">
						<img src="../upload/product/product7.jpg" height="50">
						<div class="clear"></div>
					</div>
					
					<a href="product/view/8.html" class="tipS" title="" target="_blank">
					<b>Tivi JVC 500</b>
					</a>
					
					<div class="f11" >
					  Đã bán: 0					  | Xem: 112					</div>
						
					</td>
					
					<td class="textR">
					                                                                  9,500,000 đ
	                       <p style='text-decoration:line-through'>10,000,000 đ</p>
                           				
					</td>

					
					<td class="textC">01-01-1970</td>
					
					<td class="option textC">
											   						<a href="" title="Gán là nhạc tiêu biểu" class="tipE">
							<img src="images/icons/color/star.png" />
						</a>
												<a  href="product/view/8.html" target='_blank' class='tipS' title="Xem chi tiết sản phẩm">
								<img src="images/icons/color/view.png" />
						 </a>
						 <a href="admin/product/edit/8.html" title="Chỉnh sửa" class="tipS">
							<img src="images/icons/color/edit.png" />
						</a>
						
						<a href="admin/product/del/8.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						</a>
					</td>
				</tr>
		        			       <tr class='row_7'>
					<td><input type="checkbox" name="id[]" value="7" /></td>
					
					<td class="textC">7</td>
					
					<td>
					<div class="image_thumb">
						<img src="../upload/product/product6.jpg" height="50">
						<div class="clear"></div>
					</div>
					
					<a href="product/view/7.html" class="tipS" title="" target="_blank">
					<b>Tivi Toshiba</b>
					</a>
					
					<div class="f11" >
					  Đã bán: 0					  | Xem: 75					</div>
						
					</td>
					
					<td class="textR">
					                                                                  5,800,000 đ
	                       <p style='text-decoration:line-through'>6,200,000 đ</p>
                           				
					</td>

					
					<td class="textC">01-01-1970</td>
					
					<td class="option textC">
											   						<a href="" title="Gán là nhạc tiêu biểu" class="tipE">
							<img src="images/icons/color/star.png" />
						</a>
												<a  href="product/view/7.html" target='_blank' class='tipS' title="Xem chi tiết sản phẩm">
								<img src="images/icons/color/view.png" />
						 </a>
						 <a href="admin/product/edit/7.html" title="Chỉnh sửa" class="tipS">
							<img src="images/icons/color/edit.png" />
						</a>
						
						<a href="admin/product/del/7.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						</a>
					</td>
				</tr>
		        			       <tr class='row_6'>
					<td><input type="checkbox" name="id[]" value="6" /></td>
					
					<td class="textC">6</td>
					
					<td>
					<div class="image_thumb">
						<img src="../upload/product/product5.jpg" height="50">
						<div class="clear"></div>
					</div>
					
					<a href="product/view/6.html" class="tipS" title="" target="_blank">
					<b>Tivi LG 5000</b>
					</a>
					
					<div class="f11" >
					  Đã bán: 0					  | Xem: 1					</div>
						
					</td>
					
					<td class="textR">
					                                     5,000,000 đ
                           				
					</td>

					
					<td class="textC">01-01-1970</td>
					
					<td class="option textC">
											   						<a href="" title="Gán là nhạc tiêu biểu" class="tipE">
							<img src="images/icons/color/star.png" />
						</a>
												<a  href="product/view/6.html" target='_blank' class='tipS' title="Xem chi tiết sản phẩm">
								<img src="images/icons/color/view.png" />
						 </a>
						 <a href="admin/product/edit/6.html" title="Chỉnh sửa" class="tipS">
							<img src="images/icons/color/edit.png" />
						</a>
						
						<a href="admin/product/del/6.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						</a>
					</td>
				</tr>
		        			       <tr class='row_5'>
					<td><input type="checkbox" name="id[]" value="5" /></td>
					
					<td class="textC">5</td>
					
					<td>
					<div class="image_thumb">
						<img src="../upload/product/product4.jpg" height="50">
						<div class="clear"></div>
					</div>
					
					<a href="product/view/5.html" class="tipS" title="" target="_blank">
					<b>Tivi Samsung</b>
					</a>
					
					<div class="f11" >
					  Đã bán: 0					  | Xem: 1					</div>
						
					</td>
					
					<td class="textR">
					                                     5,500,000 đ
                           				
					</td>

					
					<td class="textC">01-01-1970</td>
					
					<td class="option textC">
											   						<a href="" title="Gán là nhạc tiêu biểu" class="tipE">
							<img src="images/icons/color/star.png" />
						</a>
												<a  href="product/view/5.html" target='_blank' class='tipS' title="Xem chi tiết sản phẩm">
								<img src="images/icons/color/view.png" />
						 </a>
						 <a href="admin/product/edit/5.html" title="Chỉnh sửa" class="tipS">
							<img src="images/icons/color/edit.png" />
						</a>
						
						<a href="admin/product/del/5.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						</a>
					</td>
				</tr>
		        			       <tr class='row_4'>
					<td><input type="checkbox" name="id[]" value="4" /></td>
					
					<td class="textC">4</td>
					
					<td>
					<div class="image_thumb">
						<img src="../upload/product/product3.jpg" height="50">
						<div class="clear"></div>
					</div>
					
					<a href="product/view/4.html" class="tipS" title="" target="_blank">
					<b>Tivi Panasonic</b>
					</a>
					
					<div class="f11" >
					  Đã bán: 0					  | Xem: 4					</div>
						
					</td>
					
					<td class="textR">
					                                     6,000,000 đ
                           				
					</td>

					
					<td class="textC">01-01-1970</td>
					
					<td class="option textC">
											   						<a href="" title="Gán là nhạc tiêu biểu" class="tipE">
							<img src="images/icons/color/star.png" />
						</a>
												<a  href="product/view/4.html" target='_blank' class='tipS' title="Xem chi tiết sản phẩm">
								<img src="images/icons/color/view.png" />
						 </a>
						 <a href="admin/product/edit/4.html" title="Chỉnh sửa" class="tipS">
							<img src="images/icons/color/edit.png" />
						</a>
						
						<a href="admin/product/del/4.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						</a>
					</td>
				</tr>
		        			       <tr class='row_3'>
					<td><input type="checkbox" name="id[]" value="3" /></td>
					
					<td class="textC">3</td>
					
					<td>
					<div class="image_thumb">
						<img src="../upload/product/product1.jpg" height="50">
						<div class="clear"></div>
					</div>
					
					<a href="product/view/3.html" class="tipS" title="" target="_blank">
					<b>Tivi Akai</b>
					</a>
					
					<div class="f11" >
					  Đã bán: 0					  | Xem: 8					</div>
						
					</td>
					
					<td class="textR">
					                                     5,000,000 đ
                           				
					</td>

					
					<td class="textC">01-01-1970</td>
					
					<td class="option textC">
											   						<a href="" title="Gán là nhạc tiêu biểu" class="tipE">
							<img src="images/icons/color/star.png" />
						</a>
												<a  href="product/view/3.html" target='_blank' class='tipS' title="Xem chi tiết sản phẩm">
								<img src="images/icons/color/view.png" />
						 </a>
						 <a href="admin/product/edit/3.html" title="Chỉnh sửa" class="tipS">
							<img src="images/icons/color/edit.png" />
						</a>
						
						<a href="admin/product/del/3.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						</a>
					</td>
				</tr>
		        			       <tr class='row_2'>
					<td><input type="checkbox" name="id[]" value="2" /></td>
					
					<td class="textC">2</td>
					
					<td>
					<div class="image_thumb">
						<img src="../upload/product/product2.jpg" height="50">
						<div class="clear"></div>
					</div>
					
					<a href="product/view/2.html" class="tipS" title="" target="_blank">
					<b>Tivi LG 4000</b>
					</a>
					
					<div class="f11" >
					  Đã bán: 0					  | Xem: 4					</div>
						
					</td>
					
					<td class="textR">
					                                                                  3,800,000 đ
	                       <p style='text-decoration:line-through'>4,000,000 đ</p>
                           				
					</td>

					
					<td class="textC">01-01-1970</td>
					
					<td class="option textC">
											   						<a href="" title="Gán là nhạc tiêu biểu" class="tipE">
							<img src="images/icons/color/star.png" />
						</a>
												<a  href="product/view/2.html" target='_blank' class='tipS' title="Xem chi tiết sản phẩm">
								<img src="images/icons/color/view.png" />
						 </a>
						 <a href="admin/product/edit/2.html" title="Chỉnh sửa" class="tipS">
							<img src="images/icons/color/edit.png" />
						</a>
						
						<a href="admin/product/del/2.html" title="Xóa" class="tipS verify_action" >
						    <img src="images/icons/color/delete.png" />
						</a>
					</td>
				</tr>
		        			</tbody>
			
		</table>
	</div>
	
</div>		<div class="clear mt30"></div>
<?php include "footer_admin.php" ?>