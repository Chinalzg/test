<?php 



		class Db{


			public $n;

			public function fbnq($n){
				//0 1 1 2 3 5 8 13 21
				$this->n=$n;
				
				if($this->n==0){
					return 0;
				}else if($this->n==1 || $this->n==2){
					return 1;
				}else{
					return $this->fbnq($this->n-1)+$this->fbnq($this->n-2);
				}


			}

			public function fbnq2($n){
				$this->n=$n;

				 $arr=[];

				for($i=0;$i<=$this->n;$i++){
					if($i==0){
						$arr[]=0;
					}else if($i==1 || $i==2){
						$arr[]=1;
					}else{
						$arr= $this->fbnq2($i-1)+$this->fbnq2($i-2);
					}


				}
				return $arr;



			}



		}

		$db=new Db();
		//fb
		print_r($db->fbnq2(8)) ;


		// function fbnq($n){

		// 	if($n==0){
		// 		return 0;
		// 	}

		// 	if($n==1 || $n==2){
		// 		return 1;
		// 	}else{
		// 		return fbnq($n-1)+fbnq($n-2);
		// 	}


		// }
		// echo fbnq(7);






		$(document).on('','',function(){
			
		})


 ?>