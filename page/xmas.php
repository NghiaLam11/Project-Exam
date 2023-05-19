<style>
	.owl-carousel .owl-nav.disabled{
		display: block;
	}
	.banner__height {
		height: 40vh ;
	}
	.desc__width {
		width: 90%;
	}
	.shadow__countdown {
		box-shadow: 0px 2px 6px 2px rgba(0, 0, 0, 0.5);
	}
	.nav__bar {
		top: -100px;
		transition: all 0.3s linear;
		z-index: 999;
	}
	@media(min-width: 768px){
		.banner__height {
			height: 60vh ;
		}
		.desc__width {
			width: 50%;
		}
	}
	
	@media(min-width: 1400px){
		.banner__height {
			height: 100vh ;
		}

	}
</style>
<!-- ------ START NAV -------------->
<div class="row nav__bar position-fixed start-0 end-0" style="background-color: rgba(0, 0, 0, 0.5);">
	<div class="p-2 d-flex align-items-center justify-content-between">
		<a href="#"><i class="bi bi-arrow-return-left fs-4 ms-3 text-light"></i></a>
		<div class="col-1">
			<img class="w-100" src="img/logo-footer.webp" alt="">
		</div>
		
		<div>
			
		</div>
	</div>
</div>
<!-- ------ END NAV --------->

<!- ------ START BANNER MB to TABLET ------->
<div class="row d-flex d-lg-none">
	<div>
		<img class="w-100" src="img/xmas_002__banner__img.jpg" alt="">
		<div class=" d-flex align-items-center justify-content-center bg-danger text-light py-5">
			
			<div class="text-center col-10">
				<div>
					<h1 class="ff-sec">ĐÓN GIÁNG SINH CÙNG EGA STYLE</h1>
					<p class="desc__width mx-auto my-4">Nhân dịp Giáng sinh và năm mới 2022, EGA STYLE gửi tặng tới các
						khách hàng chương trình KHUYẾN MÃI ĐẶC BIỆT, với mức chiết khấu ưu đãi và nhiều quà tặng độc đáo.</p>
					<div class="d-flex align-items-center justify-content-center px-5">
						<div class="d-flex flex-column align-items-center">
							<p>Ngay</p>
							<div class="display-5 fw-bold d-flex align-items-center">
								<span class="px-2 py-1 rounded m-1 shadow__countdown text-light">0</span>
								<span class="px-2 py-1 rounded m-1 shadow__countdown text-light">0</span>
								<span>:</span>
							</div>
						</div>
						<div class="d-flex flex-column align-items-center">
							<p>Gio</p>
							<div class="display-5 fw-bold d-flex align-items-center">
								<span class="px-2 py-1 rounded m-1 shadow__countdown text-light">0</span>
								<span class="px-2 py-1 rounded m-1 shadow__countdown text-light">0</span>
								<span>:</span>
							</div>
						</div>
						<div class="d-flex flex-column align-items-center">
							<p>Phut</p>
							<div class="display-5 fw-bold d-flex align-items-center">
								<span class="px-2 py-1 rounded m-1 shadow__countdown text-light">0</span>
								<span class="px-2 py-1 rounded m-1 shadow__countdown text-light">0</span>
								<span>:</span>
							</div>
						</div>
						<div class="d-flex flex-column align-items-center">
							<p>Giay</p>
							<div class="display-5 fw-bold d-flex align-items-center">
								<span class="px-2 py-1 rounded m-1 shadow__countdown text-light">0</span>
								<span class="px-2 py-1 rounded m-1 shadow__countdown text-light">0</span>
							</div>
						</div>	

					</div>
				<button class="btn bg-transparent text-light border rounded-pill mt-4">DEAL NONG GIA SOC</button>		
					
				</div>
			</div>
			 
		</div>
	</div>
</div>
<!-- -------- END BANNER MB to TABLET---- -->



<!-- ----- START BANNER ---- -->

<div class="row text-light banner__height d-none d-lg-flex" style="background: url('img/xmas_002__banner__img.jpg') no-repeat; background-size: 100%;">
	<div class=" d-flex align-items-center justify-content-center">
		
		<div class="text-center">
			<div>
				<h1 class="ff-sec">ĐÓN GIÁNG SINH CÙNG EGA STYLE</h1>
				<p class="desc__width mx-auto my-4">Nhân dịp Giáng sinh và năm mới 2022, EGA STYLE gửi tặng tới các
					khách hàng chương trình KHUYẾN MÃI ĐẶC BIỆT, với mức chiết khấu ưu đãi và nhiều quà tặng độc đáo.</p>
				<div class="d-flex align-items-center justify-content-center">
					<div class="d-flex flex-column align-items-center">
						<p>Ngay</p>
						<div class="display-3 fw-bold d-flex align-items-center">
							<span class="px-2 py-1 rounded m-1 bg-danger text-light">0</span>
							<span class="px-2 py-1 rounded m-1 bg-danger text-light">0</span>
							<span>:</span>
						</div>
					</div>
					<div class="d-flex flex-column align-items-center">
						<p>Gio</p>
						<div class="display-3 fw-bold d-flex align-items-center">
							<span class="px-2 py-1 rounded m-1 bg-danger text-light">0</span>
							<span class="px-2 py-1 rounded m-1 bg-danger text-light">0</span>
							<span>:</span>
						</div>
					</div>
					<div class="d-flex flex-column align-items-center">
						<p>Phut</p>
						<div class="display-3 fw-bold d-flex align-items-center">
							<span class="px-2 py-1 rounded m-1 bg-danger text-light">0</span>
							<span class="px-2 py-1 rounded m-1 bg-danger text-light">0</span>
							<span>:</span>
						</div>
					</div>
					<div class="d-flex flex-column align-items-center">
						<p>Giay</p>
						<div class="display-3 fw-bold d-flex align-items-center">
							<span class="px-2 py-1 rounded m-1 bg-danger text-light">0</span>
							<span class="px-2 py-1 rounded m-1 bg-danger text-light">0</span>
						</div>
					</div>	

			</div>
			<button class="btn bg-transparent text-light border rounded-pill mt-4">DEAL NONG GIA SOC</button>		
				
			</div>
		</div>
		
	</div>
</div>

<!-- ----- END BANNER ---- -->


<!-- -------- START SALE ----- -->
<div style="background-color: rgba(0, 0, 0, 0.1);" class="p-6 row">
	<div class="d-flex flex-wrap p-md-4 p-5">
		<div class="col-md-4 col-12 p-lg-5 p-md-4 p-2">
			<img class="w-100" src="img/xmas_002__sub_banner__2__img.jpg" alt="">
			<h6 class="fw-bold text-center py-3">CÙNG TẬN HƯỞNG GIÁNG SINH</h6>
		</div>
		<div class="col-md-4 col-12 p-lg-5 p-md-4 p-2">
			<img class="w-100" src="img/xmas_002__sub_banner__2__img.jpg" alt="">
			<h6 class="fw-bold text-center py-3">CÙNG TẬN HƯỞNG GIÁNG SINH</h6>

		</div>
		<div class="col-md-4 col-12 p-lg-5 p-md-4 p-2">
			<img class="w-100" src="img/xmas_002__sub_banner__2__img.jpg" alt="">
			<h6 class="fw-bold text-center py-3">CÙNG TẬN HƯỞNG GIÁNG SINH</h6>

		</div>
	</div>
</div>
<!-- -------- END SALE ----- -->


<!-- -------- START DEAL SHOCK ----- -->
<div class="row mb-5">
	<div >
		<div class="text-center py-4 text-light" style="background-color: #bd1b06;">
			<h2 class="ff-sec">THỜI THƯỢNG VƯỢT ĐẲNG CẤP</h2>
		</div>
		<img class="w-100" src="img/xmas_002__featured__img.jpg" alt="">
		<div class="d-flex p-6">
			<div class="d-flex flex-wrap px-lg-5">

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative h-100">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

			</div>
		</div>
	</div>
</div>
<!-- -------- END DEAL SHOCK ----- -->



<!-- -------- START CODE ----- -->

<div class="row text-light row" style="background-color: #0C0F7A;">
	<div class="text-center">
		<h1 class="py-4 ff-sec">Giam ngay 20%</h1>
		<span class="py-3 p-6 bg-white text-dark d-none d-lg-inline">EGA_XMAS</span>
		<p class="py-3 p-6 bg-white text-dark d-lg-none d-block w-75 mx-auto">EGA_XMAS</p>
		<p class="py-4">Nhập mã lúc thanh toán để được giảm 20% cho đơn hàng >2.000.000</p>
	</div>
</div>
<!-- -------- END CODE ----- -->


<!-- -------- START BIG DEAL ----- -->

<div class="row pt-5">
	<div>
		<div class="text-center">
			<h2 class="ff-sec display-5">Khuyến mãi cực lớn</h2>
		</div>
		<div class="d-flex p-6">
			<div class="d-flex flex-wrap order-1 p-lg-5 p-3">
				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>
				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative h-100">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

			</div>
		</div>
	</div>
</div>
<!-- -------- END BIG DEAL ----- -->

<!-- -------- START SHOPPING DAY ----- -->

<div class="row pt-5">
	<div>
		<div class="text-center">
			<h2 class="ff-sec display-5">Ngày hội mua sắm</h2>
		</div>
		<div class="d-flex p-6">
			<div class="d-flex flex-wrap order-1 p-lg-5 p-3">
				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>
				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative h-100">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

			</div>
		</div>
	</div>
</div>

<!-- -------- END SHOPPING DAY ----- -->

<!-- -------- START HOT SELL ----- -->

<div class="row pt-5">
	<div>
		<div class="text-center">
			<h2 class="ff-sec display-5 text-uppercase">SẢN PHẨM BÁN NHIỀU NHẤT</h2>
		</div>
		<div class="d-flex p-6">
			<div class="d-flex flex-wrap order-1 p-lg-5 p-3">
				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>
				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative h-100">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
						</div>

					</div>

				</div>

				<div class="col-lg-3 col-6 p-2">
					<div class="bg-white pb-3 position-relative">
						<div class="bg-danger text-light position-absolute end-0 top-0 p-2">
							-50%
						</div>
						<div class="px-md-5 px-2 py-1">
							<img class="w-100" src="img/upload-2c6103091dce4265a85a586e927ccea5-82464ebb514247e1a799eca7398d66dd.webp" alt="">
						</div>
						<div class="text-center pt-4">
							<h5 class="text-truncate">Vay Arta</h5>
							<p class="text-danger m-0">4.678.900đ</p>
							<p class="text-decoration-line-through">5.678.900đ</p>
							<button class="btn btn-secondary rounded-pill">THEM VAO GIO</button>
						</div>

					</div>

				</div>

			</div>
		</div>
	</div>
</div>
<!-- -------- END HOT SELL ----- -->
<!-- -------- START ALBUM ----- -->

<div class="row text-light py-5" style="background: url('img/xmas_002__banner_offer__img.jpg');">
	<div class="text-center d-flex align-items-center justify-content-center flex-column flex-lg-row">
		<h2 class="p-4 fw-bold text-uppercase">NHỮNG BỘ SƯU TẬP KHÁC ĐANG CHỜ BẠN</h2>
		<button class="btn btn-danger text-uppercase">Xem Ngay</button>
	</div>
</div>
<!-- -------- END ALBUM ----- -->
<!-- -------- START ALBUM 2 ----- -->

<div class="p-6 mt-5 row">
	<div class="text-center">
		<h3 class="p-3 fw-bold text-uppercase">CÁC BỘ SƯU TẬP ĐANG CÓ ƯU ĐÃI LÊN ĐẾN 50%</h3>
		<p>Thoả sức mua sắm, ấm lòng mùa Giáng sinh</p>
	</div>
	<div class="d-flex flex-wrap p-md-4 p-5">
		<div class="col-md-4 col-12 p-lg-5 p-md-4 p-2">
			<img class="w-100" src="img/xmas_002__sub_banner__2__img.jpg" alt="">
			<h6 class="fw-bold pt-3">CÙNG TẬN HƯỞNG GIÁNG SINH</h6>
			<p>Trọn bộ thời trang cao cấp, nâng tầm phụ nữ Việt</p>
		</div>
		<div class="col-md-4 col-12 p-lg-5 p-md-4 p-2">
			<img class="w-100" src="img/xmas_002__sub_banner__2__img.jpg" alt="">
			<h6 class="fw-bold pt-3">CÙNG TẬN HƯỞNG GIÁNG SINH</h6>
			<p>Trọn bộ thời trang cao cấp, nâng tầm phụ nữ Việt</p>

		</div>
		<div class="col-md-4 col-12 p-lg-5 p-md-4 p-2">
			<img class="w-100" src="img/xmas_002__sub_banner__2__img.jpg" alt="">
			<h6 class="fw-bold pt-3">CÙNG TẬN HƯỞNG GIÁNG SINH</h6>
			<p>Trọn bộ thời trang cao cấp, nâng tầm phụ nữ Việt</p>

		</div>
	</div>
</div>
<!-- -------- END ALBUM 2 ----- -->
<!-- -------- START FREE SHIP ----- -->

<div class="row p-6">
	<div class="d-flex align-items-center justify-content-lg-between justify-content-center flex-wrap px-lg-5 px-md-4 px-3">
		<p class="col-lg-7 col-12 h4 text-center">Giao hàng miễn phí cho đơn hàng từ <b>200 ngàn</b> trở lên</p>
		<div class="col-lg-3 col-md-5 col-10">
			<img class="w-100" src="img/footer_trustbadge.webp" alt="">
		</div>
	</div>
</div>
<!-- -------- END FREE SHIP ----- -->
<!-- -------- START CODE 2 ----- -->

<div class="row bg-danger text-light py-5 mt-5">
	<div>
		<h2 class="text-center">
			Nhập mã khuyến mãi <b>XMAS20</b> để thanh toán và giảm ngay thêm <b>20%</b>.
			<br>
			Áp dụng cho 100 khách hàng đầu tiên
		</h2>
	</div>
</div>	
<!-- -------- END CODE 2 ----- -->
<!-- -------- START REGIS ----- -->

<div class="row text-light" style="background-color: #0C0F7A;">
	<div>
		<div style="background: url('img/xmas_002__footer__register__img.webp') repeat-x; background-size: auto 100% ; height: 40px;">
			
		</div>
		<div class="d-flex flex-column align-items-center justify-content-center py-4">
			<h5>ĐĂNG KÝ NHẬN CÁC ƯU ĐÃI ĐẶC BIỆT</h5>
			<p>Để không bỏ lỡ bất kì thông tin ưu đãi nào từ chúng tôi.</p>
			<input placeholder="Nhap thong tin" type="text" class="col-6 mx-auto px-3 py-2 rounded text-center">
			<button class="btn rounded-pill my-4 bg-transparent text-light border">NHAN THONG TIN</button>
		</div>
		
	</div>
</div>	
<!-- -------- END REGIS ----- -->
<!-- -------- START NOCOPY ----- -->

<div class="row p-5" style="background-color: rgba(10, 12, 98, 1.0);">
	<div class="text-center">
		<p class="m-0 text-secondary">Copyright © 2022 EGANY. All rights reserved.</p>
	</div>
</div>	
<!-- -------- END NOCOPY ----- -->
	
		




<script>

window.addEventListener("scroll", () => {

    const nav = document.querySelector(".nav__bar");

    if (window.scrollY === 0) {
        nav.style.top = -100 + 'px';
    } else {
        nav.style.top = 0;
    }

});

</script>