<div class="content">
        <div class="container-fluid">
            <center>
              <form>  
                <input type="text" name="food" value="" placeholder="Food type...">
              &nbsp;
              &nbsp;
              <input type="text" name="mincal" value="" placeholder="Min Cal...">
              &nbsp;
              &nbsp;
              <input type="text" name="maxcal" value="" placeholder="Max Cal...">  
              &nbsp;
              &nbsp;
              <button type="submit" class="btn btn-info" type="button" name="info" class="btn btn-info">Info</button>
              </form>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Results</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
 <th>Shrt_Desc</th>
            <th>Water</th>
            <th>Energ_Kcal</th>
            <th>Protein</th>
            <th>Lipid_Tot</th>
            <th>Ash</th>            
            <th>Carbohydrt</th>            
            <th>Fiber_TD</th>            
            <th>Sugar_Tot</th>            
            <th>Calcium</th>
            <th>Iron</th>
            <th>Magnesium</th>
            <th>Phosphorus</th>
            <th>Potassium</th>
            <th>Sodium</th>
            <th>Zinc</th>
            <th>Copper</th>
            <th>Manganese</th>
            <th>Selenium</th>
            <th>Vit_C</th>
            <th>Thiamin</th>
            <th>Riboflavin</th>
            <th>Niacin</th>
            <th>Panto_Acid</th>
            <th>Vit_B6</th>
            <th>Folate_Tot</th>
            <th>Folic_Acid</th>      
            <th>Food_Folate</th>
            <th>Folate_DFE</th>
            <th>Choline_Tot</th>
            <th>Vit_B12</th>
            <th>Vit_A_IU</th>
            <th>Vit_A_RAE</th>
            <th>Retinol</th>
            <th>Alpha_Carot</th>
            <th>Beta_Carot</th>
            <th>Beta_Crypt</th>
            <th>Lycopene</th>
            <th>Lut+Zea</th>
            <th>Vit_E</th>
            <th>Vit_D_mcg</th>
            <th>ViVit_D_IU</th>
            <th>Vit_K</th>
            <th>FA_Sat</th>
            <th>FA_Mono</th>
            <th>FA_Poly</th>
            <th>Cholestrl</th>
            <th>GmWt_1</th>
            <th>GmWt_Desc1</th>
            <th>GmWt_2</th>
            <th>GmWt_Desc2</th>
                      </thead>
                      <tbody>
                      <tbody>
                          <?php foreach($reto as $id=>$list){?>
                        <tr>
                          <td>
                            <?php echo $list['Shrt_Desc']?>
                          </td>
                          <td>
                            <?php echo $list['Water']?>
                          </td>     
                          <td>
                            <?php echo $list['Energ_Kcal']?>
                          </td>                              
                           <td>
                            <?php echo $list['Protein']?> 
                          </td>  
                          <td>
                            <?php echo $list['Lipid_Tot']?> 
                          </td>
                          <td>
                            <?php echo $list['Ash']?> 
                          </td>
                          <td>
                            <?php echo $list['Carbohydrt']?> 
                          </td>
                          <td>
                            <?php echo $list['Fiber_TD']?> 
                          </td>
                          <td>
                            <?php echo $list['Sugar_Tot']?> 
                          </td>
                          <td>
                            <?php echo $list['Calcium']?> 
                          </td>
                          <td>
                            <?php echo $list['Iron']?> 
                          </td>
                          <td>
                            <?php echo $list['Magnesium']?> 
                          </td>
                          <td>
                            <?php echo $list['Phosphorus']?> 
                          </td>
                          <td>
                            <?php echo $list['Potassium']?> 
                          </td>
                          <td>
                            <?php echo $list['Sodium']?> 
                          </td>
                          <td>
                            <?php echo $list['Zinc']?> 
                          </td>
                          <td>
                            <?php echo $list['Copper']?> 
                          </td>
                          <td>
                            <?php echo $list['Manganese']?> 
                          </td>
                          <td>
                            <?php echo $list['Selenium']?> 
                          </td>
                          <td>
                            <?php echo $list['Vit_C']?> 
                          </td>
                          <td>
                            <?php echo $list['Thiamin']?> 
                          </td>
                          <td>
                            <?php echo $list['Riboflavin']?> 
                          </td>
                          <td>
                            <?php echo $list['Niacin']?> 
                          </td>
                          <td>
                            <?php echo $list['Panto_Acid']?> 
                          </td>
                          <td>
                            <?php echo $list['Vit_B6']?> 
                          </td>
                          <td>
                            <?php echo $list['Folate_Tot']?> 
                          </td>
                          <td>
                            <?php echo $list['Folic_Acid']?> 
                          </td>
                          <td>
                            <?php echo $list['Food_Folate']?> 
                          </td>
                          <td>
                            <?php echo $list['Folate_DFE']?> 
                          </td>
                          <td>
                            <?php echo $list['Choline_Tot']?> 
                          </td>
                          <td>
                            <?php echo $list['Vit_B12']?> 
                          </td>
                          <td>
                            <?php echo $list['Vit_A_IU']?> 
                          </td>
                          <td>
                            <?php echo $list['Vit_A_RAE']?> 
                          </td>
                          <td>
                            <?php echo $list['Retinol']?> 
                          </td>
                          <td>
                            <?php echo $list['Alpha_Carot']?> 
                          </td>
                          <td>
                            <?php echo $list['Beta_Carot']?> 
                          </td>
                          <td>
                            <?php echo $list['Beta_Crypt']?> 
                          </td>
                          <td>
                            <?php echo $list['Lycopene']?> 
                          </td>
                          <td>
                            <?php echo $list['Lut+Zea']?> 
                          </td>
                          <td>
                            <?php echo $list['Vit_E']?> 
                          </td>
                          <td>
                            <?php echo $list['Vit_D_mcg']?> 
                          </td>
                          <td>
                            <?php echo $list['ViVit_D_IU']?> 
                          </td>
                          <td>
                            <?php echo $list['Vit_K']?> 
                          </td>
                          <td>
                            <?php echo $list['FA_Sat']?> 
                          </td>
                          <td>
                            <?php echo $list['FA_Mono']?> 
                          </td>
                          <td>
                            <?php echo $list['FA_Poly']?> 
                          </td>
                          <td>
                            <?php echo $list['Cholestrl']?> 
                          </td>
                          <td>
                            <?php echo $list['GmWt_1']?> 
                          </td>
                          <td>
                            <?php echo $list['GmWt_Desc1']?> 
                          </td>
                          <td>
                            <?php echo $list['GmWt_2']?> 
                          </td>
                          <td>
                            <?php echo $list['GmWt_Desc2']?> 
                          </td>
                        <?php } ?>
                      </tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           