<?php 

		function test($str){
			//计算字符串的长度
			$len=strlen($str);

			if($len>10000){ //超出范围直接退出
				return false;
			}
			
			//依次循环
			for($i=0;$i<$len;$i++){
				if(substr_count($str,$str[$i])==1){
					$key=$i;
					break;
				}else{
					$key=-1;
				}
			}
			return $key;
		}

		echo test('BbbbbBccaaaaaaaaaadd');






 ?>