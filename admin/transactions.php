<?php include('header.php'); ?>
	
		 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h4 class="h3">Transactions</h4>
            <div class="btn-toolbar mb-2 mb-md-0">
              <?php 
              echo date('D-M-d-Y');
              ?>
            </div>
          </div>
          
          <div class="container">
          	<div class="row">
          		<div class="col-lg-12 text-center">
          			 <?php

                echo "

                <div class='responsive'>
                   <div class='container'>
                    <div class='row text-right'>
                      <div class='col-lg-2'>
                        <input class='form-control' name='search' placeholder='search'>
                      </div>
                    </div>
                      <div class='row mt-2'> 
                        <div class='col-lg-12 col-md-12 col-sm-12'> 
                          <table class='table table-hover'>
                            <thead>
                              <tr>
                                <th>Transaction Code</th>
                                <th>Transaction Type</th>
                                <th>Transaction Date Name</th>
                                <th>Options</th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                      </div>
                   </div>
                </div>

              "; ?>
          		</div>
          	</div>
          </div>

<?php include('footer.php'); ?>



