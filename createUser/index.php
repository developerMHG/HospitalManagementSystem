<?php 
include "../header.php";

if(!checkURL($_SESSION['userId'], 2, "<="))
	echo "<script>window.location.href = 'http://localhost/HospitalManagementSystem/index/?error=access&id=au';</script>";


$error = isset($_GET['result']) ? "display: block;" : "display: none;";
$step = isset($_POST['step'])? $_POST['step']: "GNC";
$url = $step == "GNC" ? "http://localhost/sabtahval/api/": "";

$title = array("GNC" => "افزودن کاربر",
			   "GPD" => "اطلاعات شناسایی",
			   "SUT" => "تعیین نوع کاربر",
			   "CO" => "تائید اطلاعات",
			   "FI" => "اتمام");
?>

<div class="insert-user col-md-11">
	<nav aria-label="breadcrumb">
	  	<ol class="breadcrumb col-10">
	    	<li id="itemGNC" class="breadcrumb-item">افزودن کاربر</li>
	    	<li id="itemGPD" class="breadcrumb-item">اطلاعات شناسایی</li>
	    	<li id="itemSUT" class="breadcrumb-item">تعیین نوع کاربر</li>
	    	<li id="itemCO" class="breadcrumb-item">تائید اطلاعات</li>
	    	<li id="itemFI"  class="breadcrumb-item">اتمام</li>
	  	</ol>
	</nav>
	<h4 class="col-10">#<?php echo $title[$step]; ?></h4>
	<form action="<?php echo $url; ?>" method="post">
		<?php 
			if($step == "GNC") include "getNationalCode.php"; 
			else if($step == "GPD") include "personalDataForm.php"; 
			else if($step == "SUT") include "setUserType.php"; 
			else if($step == "CO") include "confirm.php"; 
			else if($step == "FI") include "finish.php"; 
		?>
		<div class="row" style="<?php echo $error; ?>">
			<div class="alert alert-danger col-md-5" style="margin: 10px auto; text-align: center;">این کاربر قبلا به سیستم افزوده شده است</div>
		</div>
	</form>
</div>


<script>
    document.getElementById("item<?php echo $step; ?>").classList.add("active");
</script>

<?php include "../footer.php"; ?>