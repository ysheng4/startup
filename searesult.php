<?php
include('connect.php');
$xuexiao=$_REQUEST['pxuexiao'];
$nianfen=$_REQUEST['pnianfen'];
$jieguo=$_REQUEST['pjieguo'];
$xiangmu=$_REQUEST['pxiangmu'];

$sql="SELECT rdnf,gzgpa,tfzf,satizf,grescore FROM dede_diyform10 WHERE ";
//年份	
		$sqlextra="";	
		$addsqlnf="";
		if($nianfen=='全部'){
			$sqlextra="";	
		}else{
			$addsqlnf.=" rdnf='".$nianfen."'";		
			$sqlextra.= " (".$addsqlnf.")";
		}
//学校
		$sqlextraxx="";
		$addsqlxx="";
		if($jieguo=='所有录取'){
		
				$addsqlxx.=" lqxx LIKE'%".$xuexiao."%'";
				if(!empty($sqlextra)){
					$sqlextra.=" and (".$addsqlxx.")";
				}else{
					$sqlextra.=" (".$addsqlxx.")";
				}
		
		}else if($jieguo=='有奖录取'){
			
				$addsqlxx.=" lqxxzyjxj LIKE'%".$xuexiao."%'";
				if(!empty($sqlextra)){
					$sqlextra.=" and (".$addsqlxx.")";
				}else{
					$sqlextra.=" (".$addsqlxx.")";
				}
		
		}else if($jieguo=='无奖录取'){
			
				$addsqlxx.=" lqxx LIKE'%".$xuexiao."%'"." and lqxxzyjxj NOT LIKE '%".$xuexiao."%'";
				if(!empty($sqlextra)){
					$sqlextra.=" and (".$addsqlxx.")";
				}else{
					$sqlextra.=" (".$addsqlxx.")";
				}
		
		}else if($jieguo=='拒绝'){
				$addsqlxx.=" bjxx LIKE'%".$xuexiao."%'";
				if(!empty($sqlextra)){
					$sqlextra.=" and (".$addsqlxx.")";
				}else{
					$sqlextra.=" (".$addsqlxx.")";
				}
		
		}else if($jieguo=='候补'){
				$addsqlxx.=" waitlist LIKE'%".$xuexiao."%'";
				if(!empty($sqlextra)){
					$sqlextra.=" and (".$addsqlxx.")";
				}else{
					$sqlextra.=" (".$addsqlxx.")";
				}
		
		}else if($jieguo=='最终入读学校'){
				$addsqlxx.=" zzdrxx LIKE'%".$xuexiao."%'";
	
				if(!empty($sqlextra)){
					$sqlextra.=" and (".$addsqlxx.")";
				}else{
					$sqlextra.=" (".$addsqlxx.")";
				}
		
		}
		//项目
		$sqlextraxm='';
		$addsqlxm='';
		if($xiangmu!='全部'){
			$addsqlxm.="new_jieguo LIKE '%".$xiangmu."%'";
			if(!empty($sqlextra)){
					$sqlextra.=" and (".$addsqlxm.")";
				}else{
					$sqlextra.=" (".$addsqlxm.")";
				}
		}else{
			$sqlextra.="";
			
		}
		
		$sql.=$sqlextra;
		
		
			
		$connect->query("SET CHARACTER SET utf8");
		
		$sqlresult=mysqli_query($connect,$sql);
		
		$test=array();
		
		while($row=mysqli_fetch_assoc($sqlresult)){
			
			$tem=array();
			array_push($tem,$row['rdnf']);
			array_push($tem,$row['gzgpa']);
			array_push($tem,$row['tfzf']);
			array_push($tem,$row['satizf']);
			array_push($tem,$row['grescore']);
			array_push($test,$tem);
			
		
		}
	//	array_push($test,$sql);
		echo json_encode($test);

 
?>