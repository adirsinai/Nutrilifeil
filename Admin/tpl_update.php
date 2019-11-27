              	<script type="text/javascript">
			function showMessage(){
				alert("successfully added Recors");
			}
		</script>
       
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add New Records</h4>
                          <p class="card-category">Edit Records</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Height:</label>
                          <input type="text" class="form-control" name="eheight" placeholder="Height(cm)">
                        </div>
                      </div>
                        <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Weight:</label>
                          <input type="text" class="form-control" name="eweight">
                        </div>
                      </div>
                        <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Waist circumference:</label>
                          <input type="text" class="form-control" name="escope">
                        </div>
                      </div>
                        <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Hip circumference:</label>
                          <input type="text" class="form-control" name="ehip">
                        </div>
                      </div>
                    </div>
                    <input type="hidden" name="cid" value="<?php echo $_GET['cid']?>"
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right" name="save_client" onClick='showMessage()'>Save Record</button>
                    <div class="clearfix"></div>
        </div>
      </div>

