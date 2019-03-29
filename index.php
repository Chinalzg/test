<?php 
		header("content-type:text/html;charset=utf-8");

		function product($arr,$s){
			$data=[];
			for($i=0;$i<count($arr);$i++){
				for($j=$i+1;$j<count($arr);$j++){
					if(($arr[$i]+$arr[$j])==$s){
						$data[]=[$arr[$i],$arr[$j]];
					}
				}
			}
		
			if(count($data)==1){
				return implode(',',$data[0]);
			}
			

			for($i=1;$i<count($data);$i++){
				
				if(array_product($data[$i])<array_product($data[0])){
					$min=$data[$i];
				}else{
					$min=$data[0];
				}
			}
			
			return implode(',',$min);
		}

		$arr=[1,2,3,4,5,6,7,8,9,10,0];
		$s=19;
		print_r(product($arr,$s));








 ?>