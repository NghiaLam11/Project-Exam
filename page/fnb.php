<style>

	.banner__height {
		height: 50vh ;
	}
			.desc__width {
			width: 90%;
			padding:0 2vw;

		}
		.desc__quote::before {
			position: absolute;
			width: 50px;
			height: 50px;
			content: '';
			background: url('img/foodnbeverage_001_home_intro_quote.webp') no-repeat;
			left: -10%;
			top: 0;
		}
		.desc__quote::after {
			position: absolute;
			width: 50px;
			height: 50px;
			content: '';
			background: url('img/foodnbeverage_001_home_intro_quote.webp') no-repeat;
			right: -10%;
			transform: rotate(180deg);
			bottom: 0;
		}
				.desc__quote {
			width: 80%;
			padding: 3rem 0;
		}
				.venus__scroll {
			height: 60vh;
		}
		.p-6 {
			padding-left: 1vw !important;
			padding-right: 1vw !important;
		}
		.review__img-scale {
			scale: 1;
		}

	@media(min-width: 768px){
		.banner__height {
			height: 60vh ;
		}
				.desc__width {
			width: 50%;
			padding:0 2vw;
		}.desc__quote {
			width: 50%;
			padding: 0;
		}
				.venus__scroll {
			height: 80vh;
		}
	}
	
	@media(min-width: 1200px){
		.banner__height {
			height: 100vh;
		}
		.venus__scroll {
			height: 108vh;
		}
		.review__img-scale {
			scale: 2;
		}

	}
		@media(min-width: 1400px){
			.desc__width {
			width: 50%;
			padding:0 10vw;
		}
		.venus__scroll {
			height: 130vh;
		}
		.p-6 {
			padding-left: 8vw !important;
			padding-right: 8vw !important;
		}
	
	}
</style>

<!-- ---- START HEADER ---- -->
<div class="row position-fixed top-0 start-0 end-0 shadow bg-light" style="z-index: 999;">
	<div class="d-flex align-items-center justify-content-lg-center justify-content-between">
		<div class="d-lg-none d-block col-2 ms-2">
			<a class="border-0 fs-3 text-dark" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
			  <i class="bi bi-justify"></i>
			</a>

			<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
				  <div class="offcanvas-header">
				    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
				    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				  </div>
				  <div class="offcanvas-body">
				    <div>
				      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
				    </div>
				    <div class="dropdown mt-3">
				      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
				        Dropdown button
				      </button>
				      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				        <li><a class="dropdown-item" href="#">Action</a></li>
				        <li><a class="dropdown-item" href="#">Another action</a></li>
				        <li><a class="dropdown-item" href="#">Something else here</a></li>
				      </ul>
				    </div>
				  </div>
				</div>
			</div>

		<div class="p-3" style="width: 150px;">
			<img class="w-100" src="img/logo.webp" alt="">
		</div>	
		<div class="d-lg-none d-block col-2">
			
		</div>
		<ul class="nav nav-tabs list-unstyled m-0 d-lg-flex align-items-center border-0 justify-content-center py-3 d-none">
						<li class="px-3 py-2 nav-item">
							<a class="nav-link p-0 text-decoration-none text-dark" href="?p=about">
								Gioi thieu
							</a>
						</li>
						<li class="px-3 py-2 nav-item">
							<a class="nav-link p-0 text-decoration-none text-dark" href="?p=news">
								Tin tức
							</a>
						</li>
						<li class="px-3 py-2 nav-item">
							<a class="nav-link p-0 text-decoration-none text-dark" href="?p=contact">
								Liên hệ
							</a>
						</li>
						<li class="px-3 py-2 nav-item">
							<a class="nav-link p-0 text-decoration-none text-dark" href="?p=contact">
								Liên hệ
							</a>
						</li>
						<li class="px-3 py-2 nav-item">
							<button class="btn-danger p-0 btn border px-4 py-2" href="?p=contact">
								DAT HANG NGAY
							</button>
						</li>

		</ul>
		
	</div>
</div>
<!-- ---- END HEADER ---- -->


<!-- ----- START BANNER ---- -->

<div class="row text-light banner__height" style="background: url('img/foodnbeverage_001_banner_img.jpg') no-repeat; background-size: cover; background-position: 50%; margin-top: 3rem;">
	<div class="d-flex align-items-center">
		
		<div class="desc__width">
			
			<h1 class="display-5 fw-bold">VENUS DRESS ẤN TƯỢNG CHO <br> NÀNG</h1>
			<p style="text-shadow: 1px 2px 2px black;">Một trong những thiết kế chào hè của BST Venus Dress, tone chủ đạo đỏ đô cùng hoạ tiết chấm bi nhỏ, tăng sự dịu dàng và tạo nét thơ cho các nàng</p>
			<a href="" class="text-light">XEM THEM</a>
				
		</div>
		
	</div>
</div>

<!-- ----- END BANNER ---- -->

<!-------- START INFO -------- -->
<div class="row py-lg-5 py-md-4 py-2">
	<div class="text-center">

		<h1 class="display-5 ff-sec">Thông tin Venus Dress</h1>
		<p class="mx-auto desc__quote position-relative">
			Venus Dress là sản phẩm thời trang chủ đạo trong BST "Chào hè 2022" năm nay của nhà thiết kế D.K Rain. Một trong những nhà thiết kế nổi tiếng của Việt Nam, BST được lấy ý tưởng từ hoa thuỷ tiên đỏ, loài hoa nhỏ nhắn dịu dàng nhưng cũng không kém phần trang nhã, với tông chủ đạo đỏ đô, thiết kế nhẹ nhàng đơn giản nhưng cũng không kém phần sang trọng, chất liệu thoáng mát mềm mại, dễ thấm hút sẽ giúp bạn thoải mái hoạt động mà không sợ ướt mồ hôi. BST "Chào hè 2022" sẽ được tổ chức tại TPHCM vào tháng 09/2022. Mọi thông tin cần biết xin liên hệ nhận vé: 0999999999
		</p>
	</div>
</div>
<!-------- END INFO -------- -->



<!-- ---------- START DRESS ----- -->
<div class="row py-lg-5 py-md-4 py-2 p-6">
	<div class="text-center mb-lg-5 mb-2">
		<h1 class="display-5 ff-sec">Venus Dress</h1>
		<p>Đẳng cấp quý cô, nâng tầm giá trị cho bạn</p>
		<div class="col-1 mx-auto">
			<img class="w-100" src="img/foodnbeverage_001_title_line.webp" alt="">
		</div>
		
	</div>
	<div class="d-flex align-items-center flex-wrap py-lg-5 py-md-4 py-2 mb-5">
		<div class="col-lg-6 col-12 order-lg-1 order-2">
			<div class="text-center">
				<h1>360 độ khí chất</h1>
				<p>Bạn không tự tin với cơ thể mình? Không sao nhé! Váy Venus Dress sẽ cho bạn cảm gián thon gọn ở mọi góc độ dù cho thân hình không được hoàn hảo thì bạn cũng sẽ trở nên tự tin và toả sáng trước đám đông. Hãy tậu ngay 1 em về nhà để trải nghiệm sản phẩm nhé. Bạn không tin ư??? Hãy liên hệ với chúng tôi để được tư vấn tận tình và hướng dẫn miễn phí</p>
				<a class="text-danger text-decoration-none" href="">XEM THEM</a>
				<div class="mx-auto" style="width: 70px;">
					<img class="w-100" src="img/foodnbeverage_001_title_line.webp" alt="">
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-12 order-lg-2 order-1">
			<img class="w-100" src="img/foodnbeverage_001_benefit_img_1.jpg" alt="">
		</div>
	</div>

	<div class="d-flex align-items-center flex-wrap py-lg-5 py-md-4 py-2 mb-5">
		
		<div class="col-lg-6 col-12">
			<img class="w-100" src="img/foodnbeverage_001_benefit_img_2.jpg" alt="">
		</div>

		<div class="col-lg-6 col-12">
			<div class="text-center">
				<h1>360 độ khí chất</h1>
				<p>Bạn không tự tin với cơ thể mình? Không sao nhé! Váy Venus Dress sẽ cho bạn cảm gián thon gọn ở mọi góc độ dù cho thân hình không được hoàn hảo thì bạn cũng sẽ trở nên tự tin và toả sáng trước đám đông. Hãy tậu ngay 1 em về nhà để trải nghiệm sản phẩm nhé. Bạn không tin ư??? Hãy liên hệ với chúng tôi để được tư vấn tận tình và hướng dẫn miễn phí</p>
				<a class="text-danger text-decoration-none" href="">XEM THEM</a>
				<div class="mx-auto" style="width: 70px;">
					<img class="w-100" src="img/foodnbeverage_001_title_line.webp" alt="">
				</div>
			</div>
		</div>

	</div>

	<div class="d-flex align-items-center flex-wrap py-lg-5 py-md-4 py-2 mb-5">
		<div class="col-lg-6 col-12 order-lg-1 order-2">
			<div class="text-center">
				<h1>360 độ khí chất</h1>
				<p>Bạn không tự tin với cơ thể mình? Không sao nhé! Váy Venus Dress sẽ cho bạn cảm gián thon gọn ở mọi góc độ dù cho thân hình không được hoàn hảo thì bạn cũng sẽ trở nên tự tin và toả sáng trước đám đông. Hãy tậu ngay 1 em về nhà để trải nghiệm sản phẩm nhé. Bạn không tin ư??? Hãy liên hệ với chúng tôi để được tư vấn tận tình và hướng dẫn miễn phí</p>
				<a class="text-danger text-decoration-none" href="">XEM THEM</a>
				<div class="mx-auto" style="width: 70px;">
					<img class="w-100" src="img/foodnbeverage_001_title_line.webp" alt="">
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-12 order-lg-2 order-1">
			<img class="w-100" src="img/foodnbeverage_001_benefit_img_3.jpg" alt="">
		</div>
	</div>

</div>
<!-- ---------- END DRESS ----- -->

<!-- --------- START PRODUCT ---- -->

<div class="row text-light p-lg-5 p-md-4 p-2 p-6" style="background-color: #2E2B2B;">
	<div>
		<div class="text-center mb-lg-5 mb-2">
			<h1 class="display-5 ff-sec">San pham</h1>
			<div class="col-1 mx-auto">
				<img class="w-100" src="img/foodnbeverage_001_title_line.webp" alt="">
			</div>
			
		</div>
		<div class="d-flex flex-wrap">

			<div class="col-lg-7 col-12 d-flex">
				<div class="col-2 d-md-block d-none">
					<div class="d-flex flex-column overflow-scroll venus__scroll">
						<div class="p-3">
							<img src="img/video-dam-venus-dress-9f5f6d3759f043c2abf15b1a0917c50f-050c65e71eac47c0b7b435865a58f89a.webp" alt="" class="w-100">
						</div>
						<div class="p-3">
							<img src="img/video-dam-venus-dress-9f5f6d3759f043c2abf15b1a0917c50f-050c65e71eac47c0b7b435865a58f89a.webp" alt="" class="w-100">
						</div>
						<div class="p-3">
							<img src="img/video-dam-venus-dress-9f5f6d3759f043c2abf15b1a0917c50f-050c65e71eac47c0b7b435865a58f89a.webp" alt="" class="w-100">
						</div>
						<div class="p-3">
							<img src="img/video-dam-venus-dress-9f5f6d3759f043c2abf15b1a0917c50f-050c65e71eac47c0b7b435865a58f89a.webp" alt="" class="w-100">
						</div>
						<div class="p-3">
							<img src="img/video-dam-venus-dress-9f5f6d3759f043c2abf15b1a0917c50f-050c65e71eac47c0b7b435865a58f89a.webp" alt="" class="w-100">
						</div>
						<div class="p-3">
							<img src="img/video-dam-venus-dress-9f5f6d3759f043c2abf15b1a0917c50f-050c65e71eac47c0b7b435865a58f89a.webp" alt="" class="w-100">
						</div>
						<div class="p-3">
							<img src="img/video-dam-venus-dress-9f5f6d3759f043c2abf15b1a0917c50f-050c65e71eac47c0b7b435865a58f89a.webp" alt="" class="w-100">
						</div>
						<div class="p-3">
							<img src="img/video-dam-venus-dress-9f5f6d3759f043c2abf15b1a0917c50f-050c65e71eac47c0b7b435865a58f89a.webp" alt="" class="w-100">
						</div>
					</div>
				</div>
				<div class="col-md-10 col-12">
					<img src="img/video-dam-venus-dress-9f5f6d3759f043c2abf15b1a0917c50f-050c65e71eac47c0b7b435865a58f89a.webp" alt="" class="w-100">
				</div>
			</div>
			<div class="col-lg-5 col-12 p-lg-4 p-1">
				<h3 class="fw-bold">DAM VENUS DRESS</h3>
				<span class="text-danger fw-bold h4">2.300.000 |</span> <span class="text-danger text-decoration-line-through">3.200.000</span>
				<p>Tiet kiem: 900.000 (-28%)</p>
				<p class="m-0">Kich thuoc:</p>
				<select name="" id="">
					<option value="">S</option>
					<option value="">XL</option>
					<option value="">XXL</option>
				</select>
				<p class="m-0">Kich thuoc:</p>
				<select name="" id="">
					<option value="">S</option>
					<option value="">XL</option>
					<option value="">XXL</option>
				</select>
				<hr>
				<ul>
					<li>Xuất xứ: Việt Nam</li>
					<li>Xuất xứ: Việt Nam</li>
					<li>Xuất xứ: Việt Nam</li>
					<li>Xuất xứ: Việt Nam</li>
				</ul>
				<hr>
				<span>So luong:</span>
				<span class="bg-white text-dark p-2"><span class="p-2" >-</span><span class="p-2">1</span><span class="p-2">+</span></span>
				<button class="btn btn-danger w-100 py-2 my-4">DAT HANG NGAY</button>
				<p>Chuong trinh ket thuc sau</p>
				<div class="d-flex align-items-center fw-bold">
					<div class="border rounded-circle d-flex flex-column align-items-center justify-content-center" style="width: 100px; height: 100px;">
						<div class="d-flex flex-column align-items-center">
							<span>00</span>
							<span>Ngay</span>
						</div>
					</div>
					<div class="mx-2">:</div>
					<div class="border rounded-circle d-flex flex-column align-items-center justify-content-center" style="width: 100px; height: 100px;">
						<div class="d-flex flex-column align-items-center">
							<span>00</span>
							<span>Ngay</span>
						</div>
					</div>
					<div class="mx-2">:</div>
					<div class="border rounded-circle d-flex flex-column align-items-center justify-content-center" style="width: 100px; height: 100px;">
						<div class="d-flex flex-column align-items-center">
							<span>00</span>
							<span>Ngay</span>
						</div>
					</div>
					<div class="mx-2">:</div>
					<div class="border rounded-circle d-flex flex-column align-items-center justify-content-center" style="width: 100px; height: 100px;">
						<div class="d-flex flex-column align-items-center">
							<span>00</span>
							<span>Ngay</span>
						</div>
					</div>
				</div>
			</div>

		</div>			
	</div>
</div>		

<!-- --------- END PRODUCT ---- -->


<!-- ------ START REVIEW ------- -->
<div class="row py-lg-5 py-md-4 py-2 p-6">
	<div>
		<div class="text-center mb-lg-5 mb-2">
			<h1 class="display-5 ff-sec">Khách hàng đánh giá</h1>
			<div class="col-1 mx-auto">
				<img class="w-100" src="img/foodnbeverage_001_title_line.webp" alt="">
			</div>
			
		</div>
		<div class="d-flex align-items-center flex-wrap p-lg-5 p-1">
			<div class="col-lg-2 col-12 text-center text-lg-end">
				<img class="w-50 rounded-circle review__img-scale" src="img/cus_review_avatar_2.webp" alt="">
			</div>
			<div class="col-lg-10 col-12">
				<div class="ms-5 ps-3">
					<h4>LIEN HOA</h4>
					<p class="text-danger">Quản lí thẩm mỹ Spa Evis</p>
				</div>
				<div class="p-2 border px-lg-5 px-2">
					<p class="px-md-5 px-2">
						Sản phẩm chất lượng, chất vải mềm mát mặc vào rất thoải mái và ôm sát người giúp khoe được điểm mạnh của tôi, giá cả hợp lý, giao hàng nhanh
					</p>
					
				</div>
			</div>
		</div>
		<div class="text-center">
			<p>Sự hài lòng của khách hàng chính hạnh phúc của chúng tôi</p>
			<p class="text-danger">_______________________</p>
			<div class="d-flex px-lg-5 px-2 flex-wrap">
				<div class="col-lg-4 col-md-6 col-12 d-flex">
					<div class="col-2">
						<img class="w-100 rounded-circle" src="img/cus_review_avatar_2.webp" alt="">
					</div>
					<div class="col-10 text-start p-2">
						<h5>BICH CHI</h5>
						<p class="text-danger">Chủ tịch và sáng lập MaxVN</p>
						<p>Sản phẩm đẹp, chất liệu mát, mặc vừa người, nhân viên phục vụ rất tận tình và chu đáo, quá tốt</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-12 d-flex">
					<div class="col-2">
						<img class="w-100 rounded-circle" src="img/cus_review_avatar_2.webp" alt="">
					</div>
					<div class="col-10 text-start p-2">
						<h5>BICH CHI</h5>
						<p class="text-danger">Chủ tịch và sáng lập MaxVN</p>
						<p>Sản phẩm đẹp, chất liệu mát, mặc vừa người, nhân viên phục vụ rất tận tình và chu đáo, quá tốt</p>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-12 d-flex">
					<div class="col-2">
						<img class="w-100 rounded-circle" src="img/cus_review_avatar_2.webp" alt="">
					</div>
					<div class="col-10 text-start p-2">
						<h5>BICH CHI</h5>
						<p class="text-danger">Chủ tịch và sáng lập MaxVN</p>
						<p>Sản phẩm đẹp, chất liệu mát, mặc vừa người, nhân viên phục vụ rất tận tình và chu đáo, quá tốt</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<!-- ------ END REVIEW ------- -->
