

        	<?php
				if(isset($_GET['quanly'])&&$_GET['ac']){
					$tam=$_GET['quanly'];
					$tam1=$_GET['ac'];
					}else{
						$tam='thongso';
						$tam1='lietke';}
					
					if(($tam == 'loaisp')&&($tam1 == 'them')){
						include('modules/quanlyloaisp/them.php');
					}elseif(($tam == 'loaisp')&&($tam1 == 'lietke')){
						
						include('modules/quanlyloaisp/lietke.php');
					}elseif(($tam == 'hoadon')&&($tam1 == 'lietke')){
						include('modules/quanlyhoadon/lietke.php');
					}elseif(($tam == 'hoadon')&&($tam1 == 'sua')){
						include('modules/quanlyhoadon/sua.php');
					}elseif(($tam == 'loaisp')&&($tam1 == 'sua')){
						
						include('modules/quanlyloaisp/sua.php');
					}elseif(($tam == 'hieusp')&&($tam1 == 'them')){
						
						include('modules/quanlyhieusp/them.php');
					}elseif(($tam == 'hieusp')&&($tam1 == 'lietke')){
						
						include('modules/quanlyhieusp/lietke.php');
					}elseif(($tam == 'hieusp')&&($tam1 == 'sua')){
						
						include('modules/quanlyhieusp/sua.php');
					
					}elseif(($tam == 'sanpham')&&($tam1 == 'them')){
						
						include('modules/quanlysanpham/them.php');
					}elseif(($tam == 'sanpham')&&($tam1 == 'lietke')){
						
						include('modules/quanlysanpham/lietke.php');
					}elseif(($tam == 'sanpham')&&($tam1 == 'sua')){
						
						include('modules/quanlysanpham/sua.php');
					}elseif(($tam == 'timkiem')&&($tam1 == 'sp')){
						include('modules/timkiem/timkiem.php');
					}elseif(($tam == 'gallery')&&($tam1 == 'them')){
						include('modules/gallery/them.php');
					}elseif(($tam == 'gallery')&&($tam1 == 'lietke')){
						include('modules/gallery/lietke.php');
					}elseif(($tam == 'gallery')&&($tam1 == 'sua')){
						include('modules/gallery/sua.php');

					}elseif(($tam == 'nhansu')&&($tam1 == 'lietke')){
						include('modules/quanlytaikhoan/lietke.php');}
					elseif(($tam == 'nhansu')&&($tam1 == 'sua')){
						include('modules/quanlytaikhoan/sua.php');}
					elseif(($tam == 'nhansu')&&($tam1 == 'them')){
						include('modules/quanlytaikhoan/them.php');}
						elseif(($tam == 'nhaphanphoi')&&($tam1 == 'lietke')){
						include('modules/quanlynhaphanphoi/lietke.php');}
					elseif(($tam == 'nhaphanphoi')&&($tam1 == 'sua')){
						include('modules/quanlynhaphanphoi/sua.php');}
					elseif(($tam == 'nhaphanphoi')&&($tam1 == 'them')){
						include('modules/quanlynhaphanphoi/them.php');}
					elseif(($tam == 'thongso')&&($tam1 == 'lietke')){
						include('modules/thongso.php');}
					
					else{
						include('modules/quanlysanpham/lietke.php');
					}
					
			?>
        
    
