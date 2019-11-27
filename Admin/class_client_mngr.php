<?php
session_start();
class client_mngr{
    
            function __construct(){
                
		$this->mysqli= mysqli_connect('localhost', 'adirsinai_adirdb', 'gPdl619fWC', 'adirsinai_adirdb');
	}
                    function customers_link(){
                        $ret=array();
                        $q="SELECT * FROM clients WHERE idsub='{$_SESSION['UID']}'";
		    $result = mysqli_query($this->mysqli,$q);
                        while($row = mysqli_fetch_array($result))
      {
                            $id = $row['id'];
                            $ret[$id]['id']=$row['id'];
                            $ret[$id]['firstname']=$row['firstname'];
                            $ret[$id]['lastname']=$row['lastname'];
                            $ret[$id]['email']=$row['email'];
                            $ret[$id]['age']=$row['age']; 
                            $ret[$id]['employment']=$row['employment'];
                            $ret[$id]['diseases']=$row['diseases'];   
                            $ret[$id]['medicines']=$row['medicines']; 
                            $ret[$id]['height']=$row['height'];
                            $ret[$id]['weight']=$row['weight'];      
                            $ret[$id]['scope']=$row['scope'];
                            $ret[$id]['hip']=$row['hip'];
                            $ret[$id]['gender']=$row['gender'];
                            $ret[$id]['calorie']=$row['calorie'];
                            $ret[$id]['bmi']=$row['bmi'];
      }
      return $ret;

	}
	function add_client($idsub, $firstname, $lastname, $email, $age, $employment, $diseases, $medicines, $height, $weight, $scope, $hip, $gender, $calorie, $bmi){  
            
			$query = "INSERT INTO clients (idsub, firstname, lastname, email, age, employment, diseases, medicines, height, weight, scope, hip, gender, calorie, bmi) 
					  VALUES('$idsub', '$firstname', '$lastname', '$email', '$age', '$employment', '$diseases', '$medicines', '$height', '$weight', '$scope', '$hip', '$gender', '$calorie', '$bmi')";
			mysqli_query($this->mysqli, $query);
                        
                        $UID = mysqli_insert_id($this->mysqli);
                        return $UID;
        }
      	function save_client($idsub, $idclient, $height, $weight, $scope, $hip, $bmi){  
            
			$query = "INSERT INTO editclient (idsub, idclient, height, weight, scope, hip, bmi) 
					  VALUES('$idsub', '$idclient', '$height', '$weight', '$scope', '$hip', '$bmi')";
			mysqli_query($this->mysqli, $query);
                        
                        $UID = mysqli_insert_id($this->mysqli);
                        return $UID;
        }
              	function History_client($idclient){  
                        $his=array();
                if($idclient<=0){
                return $his;
            }
                        $h="SELECT *,DATE_FORMAT(iddate, '%d.%m.%Y') as good FROM editclient WHERE idclient='$idclient'";
		        $result = mysqli_query($this->mysqli,$h);
                        while($show = mysqli_fetch_array($result))
                        {
                            $id = $show['id'];
                            $his[$id]['id']=$show['id'];
                            $his[$id]['height']=$show['height'];
                            $his[$id]['weight']=$show['weight'];
                            $his[$id]['scope']=$show['scope'];
                            $his[$id]['hip']=$show['hip'];
                            $his[$id]['bmi']=$show['bmi'];
                            $his[$id]['good']=$show['good'];
	}
        return $his;
                }
        
}


?>