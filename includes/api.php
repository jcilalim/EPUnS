<style type="text/css">
		@font-face{
			font-family: "barcode";
			src: url("fonts/3OF9_NEW.TTF");
		}
		.barcode{
			font-family: barcode;
		}

	</style>

<?php

include('config.php');


if (isset($_GET['clientRegister'])) {

	$sql = "SELECT COUNT('user_id') as `accOrder` FROM `tbl_user` ";
	$result = mysqli_query($conn,$sql);

	while ($row = mysqli_fetch_assoc($result)) {
		$val = $row['accOrder'];
	}

	$accOrder = str_pad($val, 8, '0', STR_PAD_LEFT);
	$randomVal = mt_rand(1000,9999);
	$currentYear = date('Y');
	$accountID = $currentYear."-".$accOrder."-".$randomVal;

	$username = mysqli_real_escape_string($conn,$_GET['username']);
	$pass = ($_GET['password']);
	$email = mysqli_real_escape_string($conn,$_GET['email']);
	$fname = mysqli_real_escape_string($conn,$_GET['fname']);
	$mname = mysqli_real_escape_string($conn,$_GET['mname']);
	$lname = mysqli_real_escape_string($conn,$_GET['lname']);
	$mobile = mysqli_real_escape_string($conn,$_GET['mobile']);
	$points = 0;
	$user_privilege = 1;
	$status = 1;
	$balance = 0;

	$sql1 = "INSERT INTO `tbl_user`(`user_account_id`, `user_username`, `user_password`, `user_email`, `user_fname`, `user_mname`, `user_lname`, `user_mobile`,`user_balance`, `user_points`, `user_privilege`, `user_status`) VALUES ('$accountID', '$username','$pass','$email','$fname','$mname','$lname','$mobile','$balance','$points','$user_privilege','$status'); ";

	$result1 = mysqli_query($conn,$ql1);

}


elseif (isset($_GET['generateLoadCode'])) {

	require_once('config.php');

	$quantity = $_GET['quantity'];
	$amount = $_GET['amount'];
	$status = 0;
	$id = 0;

	for ($i=0; $i < $quantity; $i++) { 
		
		$rand = mt_rand(10000,99999);
		$rand1 = mt_rand(10000,99999);
		$rand2 = mt_rand(20000,99999);
		$finalCode = "$rand-$rand1-$rand2";
		$exp = date('Y-m-d', strtotime("+365 days"));

		$sql = "INSERT INTO `tbl_card`(`card_number`, `card_amount`,`card_status`,`card_expiration`) VALUES ('$finalCode','$amount','$status','$exp')";
		$result = mysqli_query($conn,$sql);

		
	}
	header("Location:../admin/generateCode.php?generate=success");

}



elseif(isset($_GET['useCardNumber'])){
	$user_id = $_GET['user_id'];
	$card_id = $_GET['card_id'];
	$card_status = 1;

	$sql = "UPDATE `tbl_card` SET `user_id`= '$user_id' ,`card_status`= '$card_status' WHERE `card_id` = '$card_id' ";
	$result = mysqli_query($conn,$sql);
}




elseif(isset($_GET['receiveCard'])) {

	require_once('config.php');
	$card_number = $_GET['card_number'];  
	$card_status = 1;
	$sql = "SELECT * FROM `tbl_card` WHERE `card_number` = '$card_number'";
	$result = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($result);
	if ($count == 1) {
		$sql1 = "UPDATE `tbl_card` SET `card_status`= '$card_status' WHERE `card_number` = '$card_number' ";
		$result1 = mysqli_query($conn,$sql1);

	}
}
	


else if(isset($_GET['clientSignIn'])) {
	$username = mysqli_real_escape_string($conn,$_GET['user_username']);
	$password = mysqli_real_escape_string($conn,$_GET['user_password']);

	$privilege = 1;
	

	$sql = "SELECT * FROM `tbl_user` WHERE `user_username` = '$username' AND `user_password` = '$password' AND `user_privilege` = '$privilege' ";
	$result = mysqli_query($conn,$sql);
	$data_arr =[];

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($data_arr, $row);
	}

	die(json_encode(array("response" => 200,  "data" => $data_arr)));

	}