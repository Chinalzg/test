<?php 

	
		function cs($n){
			
			$arr=[];
				for($i=1;;$i++){
					if(count($arr)==$n){
						return $arr[$n-1];
					}
					$j=$i;
					while($j%2==0){
						$j/=2;
					}
					while($j%3==0){
						$j/=3;
					}
					while($j%5==0){
						$j/=5;
					}

					if($j==1){
						$arr[]=$i;
					}
				}
				
			




		}
		var_dump(cs(240));











 ?>