<?php 
	function DanhSachTheLoai(){
 	$sql = "
 		SELECT * FROM theloai
 	";
 	return mysql_query($sql);
 	}
 	function Danhsachloaitin($idTL){
 	$sql = "
 		SELECT * FROM loaitin
 		WHERE idTheLoai = $idTL;
 	";
 	return mysql_query($sql);
 	}
 	function TinMoiNhat_BaTindau(){
 	
 	$sql = "
 		SELECT * From tintuc
 		ORDER BY id DESC 
 		LIMIT 0,3 
 	";
 	return mysql_query($sql);
 	}
 	function TinMoiNhat_BaTinsau(){
 	
 	$sql = "
 		SELECT * From tintuc
 		ORDER BY id DESC 
 		LIMIT 3,3 
 	";
 	return mysql_query($sql);
 	}
 	function TinMotMoi($idTL){
 		$sql = "
 			SELECT t.* FROM tintuc t, loaitin lt
 			WHERE t.idLoaiTin = lt.id AND lt.idTheLoai = $idTL
 			ORDER BY id DESC
 			LIMIT 0,1
 		";
 		return mysql_query($sql);
 	}
 	function TinMoiBaTin($idTL){
 		$sql = "
 			SELECT t.* FROM tintuc t, loaitin lt
 			WHERE t.idLoaiTin = lt.id AND lt.idTheLoai = $idTL
 			ORDER BY id DESC
 			LIMIT 1,3
 		";
 		return mysql_query($sql);
 	}
 	function TinXemNhieu(){
		$sql = "SELECT *
		FROM tintuc
		ORDER BY SoLuotXem DESC
		limit 6
		";
		return mysql_query($sql);
	}
	function TinTheoLoaiTin($idTL){
		$sql = "
			SELECT * FROM tintuc
			WHERE idLoaiTin = $idTL
			ORDER BY id DESC
		";
		return mysql_query($sql);
	}
	function TenLoaiTinDangXem($idTL){
		$sql = "
			SELECT tl.Ten as TenTheLoai, lt.Ten as TenLoaiTin 
			FROM theloai tl, loaitin lt
			WHERE tl.id = lt.idTheLoai
			AND lt.id = $idTL
		";
		return mysql_query($sql);
	}
	function TinTheoLoaiTinPhanTrang($idTL,$form, $sotin1trang){
		$sql = "
			SELECT * FROM tintuc
			WHERE idLoaiTin = $idTL
			ORDER BY id DESC
			LIMIT $form, $sotin1trang
		";
		return mysql_query($sql);
	}
	function Chitiettin($idLT){
	    $sql = "
	        SELECT * FROM tintuc
			WHERE id = $idLT
	    ";
	    return mysql_query($sql);
    }
    function TinCungLoaiTin($idTin, $idLT)
    {
    	$sql = "
    		SELECT *FROM tintuc
    		WHERE id <> $idTin
    		AND idLoaiTin = $idLT
    		ORDER BY RAND()
    		LIMIT 0,5
    	";
    	return mysql_query($sql);
    }
    function SoLanXemTin($idTin)
    {
    	$sql = "
    		UPDATE tintuc
    		SET SoLuotXem = SoLuotXem + 1
    		WHERE id = $idTin
    	";
    	return mysql_query($sql);
    }
    function TongComment($idTin)
    {
    	$sql="
    		SELECT idTinTuc, COUNT(idTinTuc) as TongSoComment 
    		FROM comment
    		WHERE idTinTuc = $idTin
			GROUP BY idTinTuc
    	";
    	return mysql_query($sql);
    }
    function getComment($idTin)
    {
    	$sql = "
    		SELECT * FROM comment
    		WHERE idTinTuc = $idTin
    	";
    	return mysql_query($sql);
    }
?>