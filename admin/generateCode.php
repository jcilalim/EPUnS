<?php include('header.php'); ?>
	
		 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">


          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h4 class="cl-blue">Load Cards Generator</h4>
                  
            <div class="btn-toolbar mb-2 mb-md-0">

              <?php 
              echo date('D-M-d-Y');
              ?>
            </div>
          </div>
        

          	<div class="" lass="row">
          		<div class="col-lg-4 offset-lg-3 mt-2 text-right" style="background: #FFFFFF">
                <?php
                    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                          
                          if (strrpos($url, 'generate=success') == true) {

                                 echo '
                                 <div class="row"> 
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                                       Load Cards Generated Successfully.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                    </div>
                                 </div
                                ';

                                }
                  ?>
          			<?php 

                echo "

                  <form method='GET' action='../includes/api.php' style='background:#DEDEDE;padding:20px;border-radius:5px'>
                    <input type='number' min='1' name='amount' placeholder='Enter Card Amount' class='form-control' required> 
                    <input type='number' min='1' name='quantity' placeholder='Enter Quantity' class='form-control mt-2' required>
                    <button  type='submit' name='generateLoadCode' class='btn btn-outline-warning mt-2'>Generate</button>

                  </form>

                ";




                ?>
          		</div>
          	</div>
          </div>

<?php include('footer.php'); ?>



