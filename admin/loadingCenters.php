<?php include('header.php'); ?>
	
		 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h4 class="h3">Loading Centers</h4>
            <div class="btn-toolbar mb-2 mb-md-0">
              <?php 
              echo date('D-M-d-Y');
              ?>
            </div>
          </div>
          
          <div class="container">
          	<div class="row">
          		<div class="col-lg-12 text-center">
          		

                <div class='responsive'>
                   <div class='container'>
                    <div class='row text-right'>
                      <button  type='button' class='btn btn-outline-warning' data-toggle='modal' data-target='#load'>Add Loading Center +</button>
                      <div class='col-lg-2'>
                        <input class='form-control' name='search' placeholder='search'>
                      </div>
                    </div>
                      <div class='row mt-2'> 
                        <div class='col-lg-12 col-md-12 col-sm-12'> 
                          <table class='table table-hover'>
                            <thead>
                              <tr>
                                <th>Store</th>
                                <th>Street Address</th>
                                <th>Barangay Address</th>
                                <th>City Address</th>
                                <th>Option</th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                      </div>
                   </div>
                </div>

  
          		</div>
          	</div>
          </div>

  <!--Loading Modal -->
<div class="modal fade" id="load" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Loading Center</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <input type="text" class="form-control" placeholder="Enter Loading Center Name">
          <input type="text" class="form-control mt-2" placeholder="Enter Street Address" name="">
          <input type="text" class="form-control mt-2" placeholder="Enter Barangay Address" name="">
           <input type="text" class="form-control mt-2" placeholder="Enter City Address" name="">
      </div>
      <div class="modal-footer">
    
        <button type="button" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>



