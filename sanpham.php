
<?php
			if(!isset($_GET['id'])){
            echo"<h2 class='title text-center'> Sản Phẩm Bán Chạy Nhất</h2>";
            	$sql='SELECT sp.MaSP,HinhAnh,GiaBan,TenSP,TenCT,sum(SoLuong) as SoLuongBan
							  from cthd ct,sanpham sp
								where ct.masp=sp.masp
								group by sp.masp 
								ORDER BY ct.SoLuong  DESC limit 9';
				$result=$conn->query($sql);
				if ($result->num_rows > 0) {
				while($row = $result->fetch_array()){   
							$sqll="select TiSo from khuyenmai where MaSP=".$row['MaSP']." and NgayKT >= CURDATE()";
									$kq=$conn->query($sqll);
									$km=0;
									while ($d=$kq->fetch_array()) {
										$km=$d['TiSo'];
										$tile=$km*100;}
										$GiaBan=$row['GiaBan']*(1-$km); 		
					echo"<div class='col-sm-4'>
							<div class='product-image-wrapper'>
								<div class='single-products'>
									<div class='productinfo text-center'>";
						if ($km>0)
						echo"			<img style='width:100px; position:absolute;margin-left:150px;'src='images/icon/sale.ico'>
										<img  src='admin/modules/quanlysanpham/uploads/".$row['HinhAnh']."' width='250' height='250'/>
										<h2>".number_format($GiaBan)."VND"."</h2>
										<p><strong>".$row['TenSP']."<strong></p>
										<p>".$row['TenCT']."</p>
										
										<a href='index.php?xem=product&id=".$row['MaSP']."' class='btn btn-default add-to-cart'><i class='fa fa-plus'></i>Xem Thêm</a>
										<a href='update_cart.php?id=".$row['MaSP']."' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Đặt Mua</a>
									</div>
								</div>
							</div>
						</div>";
						else echo"	<img  src='admin/modules/quanlysanpham/uploads/".$row['HinhAnh']."' width='250' height='250'/>
										<h2>".number_format($row['GiaBan'])."VND"."</h2>
										<p><strong>".$row['TenSP']."<strong></p>
										<p>".$row['TenCT']."</p>
										
										<a href='index.php?xem=product&id=".$row['MaSP']."' class='btn btn-default add-to-cart'><i class='fa fa-plus'></i>Xem Thêm</a>
										<a href='update_cart.php?id=".$row['MaSP']."' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Đặt Mua</a>
									</div>
								</div>
							</div>
						</div>";
    			}
				}} else 

                {
					if(isset($_GET['ten'])){
					echo'<h2 class="title text-center">THƯƠNG HIỆU ';echo ($_GET["ten"]); echo'</h2>';
            	
					
				$sql="SELECT * from sanpham where mathuonghieu='".$_GET['id']."' ";
				$result=$conn->query($sql);
				
				while($row = $result->fetch_array()){     
						$sqll="select TiSo from khuyenmai where MaSP=".$row['MaSP']." and NgayKT >= CURDATE()";
									$kq=$conn->query($sqll);
									$km=0;
									while ($d=$kq->fetch_array()) {
										$km=$d['TiSo'];
										$tile=$km*100;}
										$GiaBan=$row['GiaBan']*(1-$km); 
					echo"<div class='col-sm-4'>
							<div class='product-image-wrapper'>
								<div class='single-products'>
									<div class='productinfo text-center'>";

										if ($km>0)
						echo"			<img style='width:100px; position:absolute;margin-left:150px;'src='images/icon/sale.ico'>
										<img  src='admin/modules/quanlysanpham/uploads/".$row['HinhAnh']."' width='250' height='250'/>
										<h2>".number_format($GiaBan)."VND"."</h2>
										<p><strong>".$row['TenSP']."<strong></p>
										<p>".$row['TenCT']."</p>
										
										<a href='index.php?xem=product&id=".$row['MaSP']."' class='btn btn-default add-to-cart'><i class='fa fa-plus'></i>Xem Thêm</a>
										<a href='update_cart.php?id=".$row['MaSP']."' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Đặt Mua</a>
									</div>
								</div>
							</div>
						</div>";
						else echo"	<img  src='admin/modules/quanlysanpham/uploads/".$row['HinhAnh']."' width='250' height='250'/>
										<h2>".number_format($row['GiaBan'])."VND"."</h2>
										<p><strong>".$row['TenSP']."<strong></p>
										<p>".$row['TenCT']."</p>
										
										<a href='index.php?xem=product&id=".$row['MaSP']."' class='btn btn-default add-to-cart'><i class='fa fa-plus'></i>Xem Thêm</a>
										<a href='update_cart.php?id=".$row['MaSP']."' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Đặt Mua</a>
									</div>
								</div>
							</div>
						</div>";
					}}
					else{
						$result=$conn->query("select * from loaisp where maloaisp='".$_GET['id']."'");
					while($row=$result->fetch_array()){
						$ten=$row['TenLoaiSP'];
					}
						echo'<h2 class="title text-center">Loại sản phẩm ';echo $ten; echo'</h2>';
            	
					
				$sql="SELECT * from sanpham where maloaisp='".$_GET['id']."' ";
				$result=$conn->query($sql);
				
				while($row = $result->fetch_array()){    
					$sqll="select TiSo from khuyenmai where MaSP=".$row['MaSP']." and NgayKT >= CURDATE()";
									$kq=$conn->query($sqll);
									$km=0;
									while ($d=$kq->fetch_array()) {
										$km=$d['TiSo'];
										$tile=$km*100;}
										$GiaBan=$row['GiaBan']*(1-$km); 

					echo"<div class='col-sm-4'>
							<div class='product-image-wrapper'>
								<div class='single-products'>
									<div class='productinfo text-center'>";
										if ($km>0)
						echo"			<img style='width:100px; position:absolute;margin-left:150px;'src='images/icon/sale.ico'>
										<img  src='admin/modules/quanlysanpham/uploads/".$row['HinhAnh']."' width='250' height='250'/>
										<h2>".number_format($GiaBan)."VND"."</h2>
										<p><strong>".$row['TenSP']."<strong></p>
										<p>".$row['TenCT']."</p>
										
										<a href='index.php?xem=product&id=".$row['MaSP']."' class='btn btn-default add-to-cart'><i class='fa fa-plus'></i>Xem Thêm</a>
										<a href='update_cart.php?id=".$row['MaSP']."' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Đặt Mua</a>
									</div>
								</div>
							</div>
						</div>";
						else echo"	<img  src='admin/modules/quanlysanpham/uploads/".$row['HinhAnh']."' width='250' height='250'/>
										<h2>".number_format($row['GiaBan'])."VND"."</h2>
										<p><strong>".$row['TenSP']."<strong></p>
										<p>".$row['TenCT']."</p>
										
										<a href='index.php?xem=product&id=".$row['MaSP']."' class='btn btn-default add-to-cart'><i class='fa fa-plus'></i>Xem Thêm</a>
										<a href='update_cart.php?id=".$row['MaSP']."' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Đặt Mua</a>
									</div>
								</div>
							</div>
						</div>";

                     
                
						
				}}
			}

				$conn->close();

				?>
