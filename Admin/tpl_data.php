           <div class="content">
        <div class="container-fluid">
		          <div class="row">             
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0">Data Of This Person</h4>
                  <p class="card-category"> Here is a all data you need</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          First Name
                        </th>
                        <th>
                          Last Name
                        </th>
                         <th>
                          Email
                        </th>
                        <th>
                          Age
                        </th>
                        <th>
                          Employment
                        </th>
                        <th>
                          Diseases
                        </th>
                        <th>
                          Medicines
                        </th>                        
                        <th>
                          Height
                        </th>
                        <th>
                          Weight
                        </th>
                        <th>
                          Waist
                        </th>
                        <th>
                          Hip
                        </th>
                        <th>
                          Gender
                        </th>
                        <th>
                          Bmi
                        </th>
                      </thead>
                      <tbody>
                          <?php foreach($cust_list as $id=>$row){?>
                          <?php if($idclient==$row['id']) {?>
                        <tr>
                          <td>
                            <?php echo $row['id']?>
                          </td>
                          <td>
                            <?php echo $row['firstname']?>
                          </td>
                          <td>
                            <?php echo $row['lastname']?>
                          </td>
                          <td>
                            <?php echo $row['email']?>
                          </td>
                          <td>
                            <?php echo $row['age']?>
                          </td>
                           <td>
                            <?php echo $row['employment']?>
                          </td>
                           <td>
                            <?php echo $row['diseases']?>
                          </td>   
                           <td>
                            <?php echo $row['medicines']?>
                          </td> 
                           <td>
                            <?php echo $row['height']?>
                          </td>  
                           <td>
                            <?php echo $row['weight']?>
                          </td>
                           <td>
                            <?php echo $row['scope']?>
                          </td>
                          <td>
                            <?php echo $row['hip']?>
                          </td>
                          <td>
                            <?php echo $row['gender']?>
                          </td>
                           <td>
                             <?php echo $row['bmi']?>  
                          </td>                            
                        <?php } ?>
                          <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                                                     
           <div class="content">
        <div class="container-fluid">
		          <div class="row">  
                              <?php
$carb = $row['calorie']*0.55;   
$protien = $row['calorie']*0.15;
$fat = $row['calorie']*0.30;
 
$dataPoints = array( 
	array("label"=>"Carbohydrates", "y"=>$carb),
	array("label"=>"Protien", "y"=>$protien),
	array("label"=>"Fat", "y"=>$fat),
)
 
?>
<!DOCTYPE HTML>
<html>
<head>
<center>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Calorie Need: <?php echo $row['calorie']?>"
	},
	subtitles: [{
		text: "For <?php echo $row['firstname']?> <?php echo $row['lastname']?> "
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\" cal\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
       </center>

</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>



<div class="content">
        <div class="container-fluid">
		          <div class="row">
<div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0">History Of This Person</h4>
                  <p class="card-category"> History and follow-up measurements</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Height
                        </th>
                        <th>
                          Weight
                        </th>
                        <th>
                          Waist
                        </th>
                        <th>
                          Hip
                        </th>
                        <th>
                          Bmi
                        </th>
                         <th>
                          Date
                        </th>
                      </thead>
                      <tbody>
                          <?php foreach($his_list as $id=>$show){?>
                        <tr>
                          <td>
                            <?php echo $show['id']?>
                          </td>
                          <td>
                            <?php echo $show['height']?>
                          </td> 
                          <td>
                            <?php echo $show['weight']?>
                          </td>
                          <td>
                            <?php echo $show['scope']?>
                          </td>
                          <td>
                            <?php echo $show['hip']?>
                          </td>
                          <td>
                            <?php echo $show['bmi']?>
                          </td> 
                           <td>
                            <?php echo $show['good']?> 
                          </td>                            
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>                              