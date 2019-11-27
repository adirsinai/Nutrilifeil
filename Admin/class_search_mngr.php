<?php
session_start();
class search_mngr{
    
            function __construct(){
                
		$this->mysqli= mysqli_connect('localhost', 'adirsinai_adirdb', 'gPdl619fWC', 'adirsinai_adirdb');
	}






              	function search($food, $mincal, $maxcal){
                        $reto=array();
			$q1 = "SELECT * FROM food_db ";
                        $w="";
                        if(!empty($food)){
                            $w.=(empty($w))?'WHERE':'AND';
                            $w.= " Shrt_Desc LIKE '%$food%' ";
                        }
                        if(!empty($mincal)){
                            $w.=(empty($w))?'WHERE':'AND';
                            $w.=" Energ_Kcal < $mincal";
                        }  
                        if(!empty($maxcal)){
                            $w.=(empty($w))?'WHERE':'AND';
                            $w.=" Energ_Kcal > $maxcal";
                        }       
                        $q1.=$w;
                       $result = mysqli_query($this->mysqli,$q1);
                      while($list = mysqli_fetch_array($result)){
                            $id = $list['NDB_No'];
                            $reto[$id]['NDB_No']=$list['NDB_No'];
                            $reto[$id]['Shrt_Desc']=$list['Shrt_Desc'];
                            $reto[$id]['Water']=$list['Water'];
                            $reto[$id]['Energ_Kcal']=$list['Energ_Kcal'];
                            $reto[$id]['Protein']=$list['Protein']; 
                            $reto[$id]['Lipid_Tot']=$list['Lipid_Tot'];
                            $reto[$id]['Ash']=$list['Ash'];   
                            $reto[$id]['Carbohydrt']=$list['Carbohydrt']; 
                            $reto[$id]['Fiber_TD']=$list['Fiber_TD'];
                            $reto[$id]['Sugar_Tot']=$list['Sugar_Tot'];      
                            $reto[$id]['Calcium']=$list['Calcium'];
                            $reto[$id]['Iron']=$list['Iron'];
                            $reto[$id]['Magnesium']=$list['Magnesium'];
                            $reto[$id]['Phosphorus']=$list['Phosphorus'];
                            $reto[$id]['Potassium']=$list['Potassium'];
                            $reto[$id]['Sodium']=$list['Sodium'];
                            $reto[$id]['Zinc']=$list['Zinc'];
                            $reto[$id]['Copper']=$list['Copper'];
                            $reto[$id]['Manganese']=$list['Manganese'];
                            $reto[$id]['Selenium']=$list['Selenium'];
                            $reto[$id]['Vit_C']=$list['Vit_C'];
                            $reto[$id]['Thiamin']=$list['Thiamin'];
                            $reto[$id]['Riboflavin']=$list['Riboflavin'];
                            $reto[$id]['Niacin']=$list['Niacin'];
                            $reto[$id]['Panto_Acid']=$list['Panto_Acid'];
                            $reto[$id]['Vit_B6']=$list['Vit_B6'];
                            $reto[$id]['Folate_Tot']=$list['Folate_Tot'];
                            $reto[$id]['Folic_Acid']=$list['Folic_Acid'];
                            $reto[$id]['Food_Folate']=$list['Food_Folate'];
                            $reto[$id]['Folate_DFE']=$list['Folate_DFE'];
                            $reto[$id]['Choline_Tot']=$list['Choline_Tot'];
                            $reto[$id]['Vit_B12']=$list['Vit_B12'];
                            $reto[$id]['Vit_A_IU']=$list['Vit_A_IU'];
                            $reto[$id]['Vit_A_RAE']=$list['Vit_A_RAE'];
                            $reto[$id]['Retinol']=$list['Retinol'];
                            $reto[$id]['Alpha_Carot']=$list['Alpha_Carot'];
                            $reto[$id]['Beta_Carot']=$list['Beta_Carot'];
                            $reto[$id]['Beta_Crypt']=$list['Beta_Crypt'];
                            $reto[$id]['Lycopene']=$list['Lycopene'];
                            $reto[$id]['Lut+Zea']=$list['Lut+Zea'];
                            $reto[$id]['Vit_E']=$list['Vit_E'];
                            $reto[$id]['Vit_D_mcg']=$list['Vit_D_mcg'];
                            $reto[$id]['ViVit_D_IU']=$list['ViVit_D_IU'];
                            $reto[$id]['Vit_K']=$list['Vit_K'];
                            $reto[$id]['FA_Sat']=$list['FA_Sat'];
                            $reto[$id]['FA_Mono']=$list['FA_Mono'];
                            $reto[$id]['FA_Poly']=$list['FA_Poly'];
                            $reto[$id]['Cholestrl']=$list['Cholestrl'];
                            $reto[$id]['GmWt_1']=$list['GmWt_1'];
                            $reto[$id]['GmWt_Desc1']=$list['GmWt_Desc1'];
                            $reto[$id]['GmWt_2']=$list['GmWt_2'];
                            $reto[$id]['GmWt_Desc2']=$list['GmWt_Desc2'];
                           
                }
                  return $reto;            
                }
}

                
?>