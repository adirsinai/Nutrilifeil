          <div class="content">
        <div class="container-fluid">
		          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Clients Table</h4>
                  <p class="card-category"> Here is all Clients You Have</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                            Id
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
                          Gender
                        </th>
                        <th>
                          Options
                        </th>
                      </thead>
                      <tbody>
                             <?php foreach($cust_list as $id=>$row){?>
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
                            <?php echo $row['gender']?>
                          </td> 
 <td><i class="material-icons">add_circle</i><a href="update.php?cid=<?php echo $row['id']?>"><i>Update</i></a>
 <i class="material-icons">perm_data_setting</i><a href="data.php?cid=<?php echo $row['id']?>"><i>Data</i></a>      
 <i class="material-icons">remove_circle</i><a href="delete.php"><i>Delete</i></a>     
                        </tr>
                       <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>