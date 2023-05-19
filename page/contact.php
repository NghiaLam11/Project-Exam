<style>
		.map__height{
			height: 40vh !important;
			
		}

	@media (min-width: 768px){
		.map__height{
			height: 50vh !important;
		}
	}
	/*PC*/
	@media (min-width: 1200px){
		.map__height{
			height: 100% !important;
		}
	}
</style>

<!-- ------------------ START CONTACT ----------------------- -->
<div class="p-6 row">
	<div class="d-flex flex-wrap p-lg-5 p-md-4 p-3">	

		<div class="col-lg-6 col-12 px-2">
			<h2 class="my-4">Công ty TNHH EGANY</h2>
			<span class="py-2">
				<i class="px-1 me-2 text-warning bi bi-geo-alt-fill"></i>
					Địa chỉ:	
				70 Lu Gia, Ward 15, District 11, Ho Chi Minh City
							
			</span>
			<br>
			<span class="py-2">
				<i class="px-1 fs-6 me-2 text-warning bi bi-telephone-fill"></i>
			
					Điện thoại: 
				1900 6750
			</span>
			<br>
			<span class="py-2"><i class="px-1 me-2 text-warning bi bi-clock-fill"></i>Email: support@sapo.vn</span>

			<form class="form-group py-3">	
				<p class="text-uppercase">Lien he voi chung toi</p>				
				<div class="d-flex flex-column my-3">
					<div class="mb-3 w-100">
				   		<input id="name" placeholder="Họ và tên" class="form-control px-3 py-2" type="text">
					</div>
					<div class="w-100">
				    	<input id="email" placeholder="Email" class="form-control px-3 py-2" type="email">
					</div>
				    
				</div>
				<input id="phone" placeholder="Điện thoại" class="form-control px-3 py-2 mb-3" type="text">

				<textarea id="content" placeholder="Nội dung:" class="form-control px-3 py-2" cols="15" rows="4"></textarea>
				<button class="btn rounded-0 py-2 px-3 bg-warning text-light my-3 w-100 ">Gửi tin nhắn</button>
			</form>
		</div>

		<div class="col-lg-6 col-12 px-2">
				
			<div class="mapouter"><div class="gmap_canvas map__height"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=ha noi&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style> 

			</div>
			</div>
		</div>

	</div>
</div>
<!-- ------------------- END CONTACT ----------------------- -->