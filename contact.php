<?php require_once("/vues/header.php") ?>
<section class="inner-banner">
	
</section>
<!-- //banner -->

<!-- contact form -->
<div class="container">
<div class="row">
		<div class="col-md-4  ">
			<i class="fa fa-map-marker test"></i>
			<small style="font-size: 15px;" class="text-one">Paris,France </small>
		</div>
		
		<div class="col-md-4  ">
		    <i class=" fa fa-envelope  test"></i><small style="font-size: 15px;" class="text-one">eugenendjaka@gmail.com</small>
	   </div>
		
		<div class="col-md-4  ">
		  <i class="fa fa-phone test"></i><small style="font-size: 15px;" class="text-one">+237 691966876</small>
		</div>
	</div>
</div>
	
<section class="contact booking py-5">
	<div class="container py-sm-3">
		<center><h1 class="heading text-capitalize mb-lg-5 mb-4">Nous contacter</h1></center>
		<form action="#" method="post">
			<div class="row main-agile-sectns">
				<div class="col-md-6 agileits-btm-spc form-text1">
					<input type="text" name="Name" placeholder="votre nom" required="">
				</div>
				<div class="col-md-6 agileits-btm-spc form-text2">
					<input type="text" name="Phone" placeholder="entrez votre numéro" required="">
				</div>
			</div>
			<div class="row main-agile-sectns">
				<div class="col-md-6 agileits-btm-spc form-text1">
					<input type="text" name="subject" placeholder="entrez le sujet" required="">
				</div>
				
				<div class="col-md-6 agileits-btm-spc form-text1">
					<input type="email" name="email" placeholder="entrez votre email" required="">
				</div>
			</div>
			<div class="main-agile-sectns ">
				<div class="agileits-btm-spc form-text2 p-0">
					<textarea name="msg" placeholder="entrez votre message ici"></textarea>
				</div>
			</div>
			<input type="submit" name="valider" value="valider">
		</form>
	</div>
	<?php

			if( isset($_POST['valider'])){
				$name = $_POST['Name'];
				$phone = $_POST['Phone'];
				$subject = $_POST['subject'];
				$email = $_POST['email'];
				$msg = $_POST['msg'];

			 	$headers =  'MIME-Version: 1.0' . "\r\n"; 
                $headers .= 'eugenendjaka@gmail.com' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 


			 $message =	mail("eugenendjaka@gmail.com",$subject,$msg,$headers);

			 if($message ){
				 echo '<div class="alert alert-info content"> message envoyé</div>';
			 }else{
				echo '<div class="alert alert-danger content"> message non envoyé</div>';
			 }

			}
			  



			   
	
	
	?>
</section>
<style type="text/css">
	
	.content{
    width: max-content;
}
</style>

<!-- contact form -->
<section class="map">
	<div class="container">
		<iframe src="https://maps.google.com/maps?width=100%&height=600&hl=en&coord=3.85874475,11.505962709007044&q=ngoa%20ekelle+(groupe%20le%20kombi)&ie=UTF8&t=&z=14&iwloc=B&output=embed"></iframe>
		<div class="location">
			<p> <i class="fas mr-1 fa-map-marker"></i> cité U, ngoa ekelle, Yaounde </p>
		</div>
	</div>
</section>

<!-- //footer -->
<?php require_once("/vues/footer.php")?>

<