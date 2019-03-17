<?php 

	//找出首次出现三次的字符
	function ser($str){
		$arr=[];
		for($i=0;$i<strlen($str);$i++){
			if(array_key_exists($str[$i],$arr)){
				$arr[$str[$i]]+=1;
				if($arr[$str[$i]]==3){
					echo $str[$i];die;
				}
			}else{
				$arr[$str[$i]]=1;
			}
		}



	}
	ser("aabba");


再后来，小品中的剧情出现了——田某一口咬定是汪某撞了她，原因只是“不是你撞的，你怎么会扶我？”







 ?>