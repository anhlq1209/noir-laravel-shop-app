<!DOCTYPE html>
<html lang="en">
	
	@include('layouts.head')

	<body class="goto-here">
		
		@include('components.nav')

		@include('components.breadcrumb')

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-lg-10 order-md-last">
						<div class="row">
							@foreach ($products as $product)
							<div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
								<div class="product">
									<a href="#" class="img-prod"><img class="img-fluid" src="{{ $product->imageUrl }}" alt="Colorlib Template">
										<div class="overlay"></div>
									</a>
									<div class="text py-3 px-3">
										<h3><a href="#">{{ $product->name }}</a></h3>
										<div class="d-flex">
											<div class="pricing">
												<p class="price"><span class="pricing">{{ $product->price }} ₫</span></p>
											</div>
											<div class="rating">
												<p class="text-right">
													<a href="#"><span class="ion-ios-star-outline"></span></a>
													<a href="#"><span class="ion-ios-star-outline"></span></a>
													<a href="#"><span class="ion-ios-star-outline"></span></a>
													<a href="#"><span class="ion-ios-star-outline"></span></a>
													<a href="#"><span class="ion-ios-star-outline"></span></a>
												</p>
											</div>
										</div>
										<p class="bottom-area d-flex px-3">
											<a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
											<a href="#" class="buy-now text-center py-2">Buy now<span><i class="ion-ios-cart ml-1"></i></span></a>
										</p>
									</div>
								</div>
							</div>
							@endforeach

						</div>

						{{ $products->links() }}

					</div>

					<div class="col-md-4 col-lg-2 sidebar">
						@foreach ($categories as $category)
						<div class="sidebar-box-2">
							<h2 class="heading mb-4"><a href="/shop/{{ $category->name }}">{{ $category->name }}</a></h2>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>

		@include('components.footer')
			

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		@include('layouts.foot')
		
	</body>
</html>