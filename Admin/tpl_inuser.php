              	<script type="text/javascript">
			function showMessage(){
				alert("Client successfully added to client folder");
			}
		</script>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Client</h4>
                          <p class="card-category">Add a New Client</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name:</label>
                          <input type="text" class="form-control" name="firstname" placeholder="First Name">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name:</label>
                          <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" name="email" placeholder="Your Email">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Age:</label>
                          <input type="text" class="form-control" name="age" placeholder="Enter Age">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Employment:</label>
                          <input type="text" class="form-control" name="employment" placeholder="employment">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Background Diseases:</label>
                          <input type="text" class="form-control" name="diseases" placeholder="client diseases">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Medicines:</label>
                          <input type="text" class="form-control" name="medicines" placeholder="medicines">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Height:</label>
                          <input type="text" class="form-control" name="height" placeholder="Height(cm)">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Weight:</label>
                          <input type="text" class="form-control" name="weight" placeholder="weight">
                        </div>
                      </div>
                        <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Waist circumference:</label>
                          <input type="text" class="form-control" name="scope" placeholder="Waist circumference">
                        </div>
                      </div>
                        <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Hip circumference:</label>
                          <input type="text" class="form-control" name="hip" placeholder="Hip circumference">
                        </div>
                      </div>
                    </div>
                      <div class="form-check form-check-radio">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" >
        Male
        <span class="circle">
            <span class="check"></span>
        </span>
    </label>
</div>
<div class="form-check form-check-radio">
    <label class="form-check-label">
        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female" >
        Female
        <span class="circle">
            <span class="check"></span>
        </span>
    </label>
</div>
                    <button type="submit" class="btn btn-primary pull-right" name="new_client" onClick='showMessage()'>New Client</button>
                    <div class="clearfix"></div>
                  </form>
        </div>
      </div>

