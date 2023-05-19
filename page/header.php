<style type="text/css">
	/*Di động*/
		.product__fixed{
		z-index: 99999;
		visibility: hidden;
		opacity: 0;
		top: 25%;
		transition: all 0.2s linear;
	}
	.fs-banner{
		font-size: 0.7rem;
	}
	.p-6 {
			padding-left: 1vw !important;
			padding-right: 1vw !important;
	}
	/*Tablet*/
	@media (min-width: 768px){
		.fs-banner{
			font-size: 1rem;
		}				
	}
	/*PC*/
	@media (min-width: 1400px){
		.fs-banner{
			font-size: 1rem;
		}
				.p-6 {
			padding-left: 8vw !important;
			padding-right: 8vw !important;
		}
	}
	.header .nav-link.active {
		opacity: 0.2;
	}
</style>

<!-- ------------- START PRODUCT WHEN HOVER -------- -->
<div class="product__fixed bg-white position-fixed start-0 end-0 row border-top border-bottom">
	<div class="w-1200 d-flex flex-wrap flex-lg-nowrap p-lg-5 p-md-4 p-2">
		<div class="d-flex flex-column col-lg-2 p-3">
			<h6 class="fw-bold text-uppercase fs-0">Nội thất</h6>
			<ul class="fs-0 list-unstyled">
				<li class="text__hover py-1">
					Phòng khách
				</li>
				<li class="text__hover py-1">
					Phòng khách

				</li>
				<li class="text__hover py-1">
					Phòng ăn

				</li>
				<li class="text__hover py-1">
					Phòng khách

				</li>
				<li class="text__hover py-1">
					Phòng ngủ

				</li>
				<li class="text__hover py-1">
					Phòng ngủ

				</li>
			</ul>
		</div>
		<div class="col-lg-2 p-md-3 px-3 py-0">
			<h6 class="fw-bold text-uppercase fs-0">Đồ trang trí</h6>
			<ul class="fs-0 list-unstyled">
				<li class="text__hover py-1">
					Tranh & Khung ảnh
				</li>
				<li class="text__hover py-1">
					Đồ dùng uống trà & Cafe
				</li>
				<li class="text__hover py-1">
					Tranh & Khung ảnh
				</li>
				<li class="text__hover py-1">
					Đồ dùng uống trà & Cafe
				</li>
				<li class="text__hover py-1">
				Đồ dùng uống trà & Cafe
				</li>
			</ul>
			
		</div>
		<div class="col-lg-2 p-md-3 px-3 py-0">
			<h6 class="fw-bold text-uppercase fs-0">Đèn</h6>
			<ul class="fs-0 list-unstyled">
				<li class="text__hover py-1">
					Đèn bàn
				</li>
				<li class="text__hover py-1">
					Đèn bàn

				</li>
				<li class="text__hover py-1">
					Đèn bàn

				</li>
				<li class="text__hover py-1">
					Đèn bàn

				</li>
			</ul>
		</div>
		<div class="col-lg-2 p-md-3 px-3 py-0">
			<h6 class="fw-bold text-uppercase fs-0">Nội thất</h6>
			<ul class="fs-0 list-unstyled">
				<li class="text__hover py-1">
					Trang trí ngoài trời
				</li>
				<li class="text__hover py-1">
					Trang trí ngoài trời

				</li>
			</ul>
		</div>
		<div class="col-lg-3">
			
		</div>
	</div>
</div>	
<!-- ------------- END PRODUCT WHEN HOVER -------- -->

<div class="row" style="background-color: rgb(205, 104, 38);">
	<div class="d-flex align-items-center justify-content-between pb-1 pt-2">
		<div class="col-11 text-center">
			<h6 class="text-light fs-banner">
				
			CHÀO HÈ SÔI NỔI - MỎI TAY SĂN QUÀ - ƯU ĐÃI X3		
			</h6>
		</div>
		<i class="bi bi-x px-1 rounded-circle bg-light me-1"></i>
	</div>
</div>


<div class="row p-6 nav__bar position-fixed top-25 end-0 start-0 bg-white" style="z-index: 999;">
	<div class="d-flex align-items-center justify-content-between px-lg-5 px-3 py-2 header">
		<div class="d-lg-none d-block col-2">
			<a class="border-0 fs-3 text-dark" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
			  <i class="bi bi-justify"></i>
			</a>

			<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
				  <div class="d-flex  align-items-center bg-warning text-light p-2">
				  	<i class="bi bi-person-circle fs-3"></i>
				  	<div class="p-2">
				  		<h5 class="offcanvas-title" id="offcanvasExampleLabel">Tai khoan</h5>
				    	<p class="offcanvas-title" id="offcanvasExampleLabel">Dang nhap</p>
				  	</div>
				   
				  </div>
				  <div class="offcanvas-body">
						<ul class="nav nav-tabs list-unstyled flex-nowrap m-0 d-flex border-0 flex-column">
							<li class="p-3 nav-item ">
								<a class="nav-link p-0 text-decoration-none text-dark" href="#">
									Trang chủ
								</a>
							</li>
							<li class="p-3 nav-item">
								<a class="nav-link p-0 text-decoration-none text-dark" href="?p=product">
									Sản phẩm <i class="bi bi-caret-down-fill"></i>
								</a>
							</li>
							<li class="p-3 nav-item">
								
								<div class="btn-group">
								  
								  <button class="border-0 bg-transparent dropdown-toggle dropdown-toggle-split px-1" data-bs-toggle="dropdown" aria-expanded="false">
								 
										Chương trình khuyến mãi
								
								    <span class="visually-hidden">Toggle Dropdown</span>
								  </button>
								  <ul class="dropdown-menu">
								    <li><a class="dropdown-item" href="?p=flashsale">Action</a></li>
								    <li><a class="dropdown-item" href="?p=blackfriday">Another action</a></li>
								    <li><a class="dropdown-item" href="?p=xmas">Something else here</a></li>
								    <li><a class="dropdown-item" href="?p=fnb">Action</a></li>

								  </ul>
								</div>
							</li>
							<li class="p-3 nav-item">
								<a class="nav-link p-0 text-decoration-none text-dark" href="?p=order">
									
								Đơn hàng
								</a>
							</li>
							<li class="p-3 nav-item">
								<a class="nav-link p-0 text-decoration-none text-dark" href="?p=stores">
									
								Hệ thống cửa hàng
								</a>
							</li>
							<li class="p-3 nav-item">
								<a class="nav-link p-0 text-decoration-none text-dark" href="?p=about">
									Gioi thieu
								</a>
							</li>
							<li class="p-3 nav-item">
								<a class="nav-link p-0 text-decoration-none text-dark" href="?p=news">
									Tin tức
								</a>
							</li>
							<li class="p-3 nav-item">
								<a class="nav-link p-0 text-decoration-none text-dark" href="?p=contact">
									Liên hệ
								</a>
							</li>

						</ul>
				  </div>
				</div>
			</div>
		<div>
			<img src="img/logo.webp" style="width: 134px;" alt="">
		</div>
		<div class="d-flex align-items-center col-lg-9 col-0 justify-content-around">

			<div class="tab-content d-lg-block d-none" id="myTabContent">

			  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				<ul class="nav nav-tabs list-unstyled flex-nowrap m-0 d-flex align-items-center border-0 justify-content-center">
					<li class="p-3 nav-item ">
						<a class="nav-link p-0 text-decoration-none text-dark" href="#">
							Trang chủ
						</a>
					</li>
					<li class="p-3 nav-item product__hover">
						<a class="nav-link p-0 text-decoration-none text-dark" href="?p=product">
							Sản phẩm <i class="bi bi-caret-down-fill"></i>
						</a>
					</li>
					<li class="p-3 nav-item">
						
						<div class="btn-group">
						  
						  <button class="border-0 bg-transparent dropdown-toggle dropdown-toggle-split px-1" data-bs-toggle="dropdown" aria-expanded="false">
						 
							
								Chương trình khuyến mãi
						
						    <span class="visually-hidden">Toggle Dropdown</span>
						  </button>
						  <ul class="dropdown-menu">
						    <li><a class="dropdown-item" href="?p=flashsale">Action</a></li>
						    <li><a class="dropdown-item" href="?p=blackfriday">Another action</a></li>
						    <li><a class="dropdown-item" href="?p=xmas">Something else here</a></li>
						    <li><a class="dropdown-item" href="?p=fnb">Action</a></li>

						  </ul>
						</div>
					</li>
					<li class="p-3 nav-item">
						<a class="nav-link p-0 text-decoration-none text-dark" href="?p=order">
							
						Đơn hàng
						</a>
					</li>
					<li class="p-3 nav-item">
						<a class="nav-link p-0 text-decoration-none text-dark" href="?p=stores">
							
						Hệ thống cửa hàng
						</a>
					</li>

				</ul>
			  </div>

			  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<ul class="nav nav-tabs list-unstyled m-0 d-flex align-items-center border-0 justify-content-center">
						<li class="p-3 nav-item">
							<a class="nav-link p-0 text-decoration-none text-dark" href="?p=about">
								Gioi thieu
							</a>
						</li>
						<li class="p-3 nav-item">
							<a class="nav-link p-0 text-decoration-none text-dark" href="?p=news">
								Tin tức
							</a>
						</li>
						<li class="p-3 nav-item">
							<a class="nav-link p-0 text-decoration-none text-dark" href="?p=contact">
								Liên hệ
							</a>
						</li>

					</ul>
			  </div>

			</div>

			<ul class="nav nav-tabs border-0 d-lg-flex align-items-center d-none flex-nowrap" id="myTab" role="tablist">
			  <li role="presentation mx-1">
			    <button class="nav-link active border-0 text-dark pe-1" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><i class="bi bi-caret-left-fill pe-2"></i></button>
			  </li>
			  <li role="presentation mx-1">
			    <button class="nav-link border-0 text-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="bi bi-caret-right-fill ps-2"></i></button>
			  </li>
			</ul>
		</div>
		<div class="fs-4 d-flex align-items-center">
			<i class="px-2 bi bi-search"></i>
			<i class="px-2 bi bi-person d-lg-inline d-none"></i>
			<button type="button" class="position-relative border-0 bg-transparent">
			  <i class="px-2 bi bi-bag"></i>
			  <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger" style="font-size: 0.7rem; left: 75%;">
			    9
			    <span class="visually-hidden">unread messages</span>
			  </span>
			</button>

		</div>
	</div>
</div>

<div class="w-100 py-4">
	
</div>

<script>
const product__hover = document.querySelector('.product__hover')	
const product__fixed = document.querySelector('.product__fixed')	

product__hover.addEventListener('mouseover', () => {
	if (window.scrollY === 0) {
		product__fixed.style.top = '15%';
	} else {
		product__fixed.style.top = '10%';
	}
	
	product__fixed.style.visibility = 'visible';
	product__fixed.style.opacity = '1';
})

product__fixed.addEventListener('mouseover', () => {
	if (window.scrollY === 0) {
		product__fixed.style.top = '15%';
	} else {
		product__fixed.style.top = '10%';
	}

	product__fixed.style.visibility = 'visible';
	product__fixed.style.opacity = '1';
})

product__hover.addEventListener('mouseout', () => {
	product__fixed.style.top = '25%';
	product__fixed.style.visibility = 'hidden';
	product__fixed.style.opacity = '0';
})
product__fixed.addEventListener('mouseout', () => {
	product__fixed.style.top = '25%';
	product__fixed.style.visibility = 'hidden';
	product__fixed.style.opacity = '0';

})

window.addEventListener("scroll", () => {

    const nav = document.querySelector(".nav__bar");

    if (window.scrollY === 0) {
        nav.style.top = 40 + 'px';
    } else {
        nav.style.top = 0;
    }

});

</script>