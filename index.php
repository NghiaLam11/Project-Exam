<?php 
 $dm='http://localhost/aWork/LamHienNghia - Exam/';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="<?php echo $dm; ?>"/>
	<!-- BOOSTRAP -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- OWL -->
	<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<!-- FONT -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
	<!-- --------- START LG --------------- -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/css/lightgallery.min.css" integrity="sha512-F2E+YYE1gkt0T5TVajAslgDfTEUQKtlu4ralVq78ViNxhKXQLrgQLLie8u1tVdG2vWnB3ute4hcdbiBtvJQh0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- --------- END LG --------------- -->
	<link rel="stylesheet" type="text/css" href="css/style.css?version=<?php echo time(); ?>" />

	<script src="public/js/jquery.js"></script>

	<script src="owlcarousel/owl.carousel.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<!-- --------- START LG --------------- -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.1/lightgallery.min.js" integrity="sha512-dSI4QnNeaXiNEjX2N8bkb16B7aMu/8SI5/rE6NIa3Hr/HnWUO+EAZpizN2JQJrXuvU7z0HTgpBVk/sfGd0oW+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- --------- END LG --------------- -->
	<title>Document</title>
	<style>
		.ff-pri {
			font-family: 'Mulish', sans-serif !important;
		}
		.ff-sec {
			font-family: 'Dancing Script', cursive !important;
		}
		.fs-7 {
			font-size: 0.7rem !important;
		}
		.nav-link {
			border: none !important;
		}
	@media(min-width: 1200px){
		.col-20 {
    		width: 20% !important;
    		max-width: 20% !important;
  		}

	}
	@media(min-width: 1200px){
  		.p-6{
       		padding-left: 8vw !important;
      	  	padding-right: 8vw !important;
    	}
    	*::-webkit-scrollbar {
			display: none;
		}

	}
	</style>
</head>
<body>
	<div class="container-fluid p-0 ff-pri overflow-hidden">
		<?php 
		if(@$_GET['p'] === 'blackfriday' || @$_GET['p'] === 'xmas' || @$_GET['p'] === 'fnb'){
			$p=$_GET['p'];
				require "page/".$p.".php";
		} else if(@$_GET['p']){
			
			$p=$_GET['p'];
				require "page/header.php";
				require "page/".$p.".php";
				require "page/footer.php";
		} else{

			require "page/header.php";
			require "page/trangchu.php";
			require "page/footer.php";
		}
		?>
	</div>

	
</html>