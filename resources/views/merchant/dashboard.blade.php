@extends('merchant.layouts.app')

@section('content')
	<section class="gry-bg py-4 profile">
		<div class="container">
			<div class="row cols-xs-space cols-sm-space cols-md-space">
				<div class="col-lg-3 d-none d-lg-block">
					<div class="sidebar sidebar--style-3 no-border stickyfill p-0">
						<div class="widget mb-0">
							<div class="widget-profile-box text-center p-3">
								<div class="image" style="background-image:url('https://img.pngio.com/merchant-royalty-free-stock-png-images-for-your-design-merchant-png-512_512.png')"></div>
								<div class="name mb-0">{{ auth('merchant')->user()->name }} </div>
							</div>
							<div class="sidebar-widget-title py-3">
								<span>Menu</span>
							</div>
							<div class="widget-profile-menu py-3">
								<ul class="categories categories--style-3">
									<li>
										<a href="http://littardoemporium.com/shop/dashboard" class="active">
											<i class="la la-dashboard"></i>
											<span class="category-name">
                            Dashboard
                        </span>
										</a>
									</li>
									<li>
										<a href="http://littardoemporium.com/shop/purchase_history" class="">
											<i class="la la-file-text"></i>
											<span class="category-name">
                            Purchase History
                        </span>
										</a>
									</li>
									<li>
										<a href="http://littardoemporium.com/shop/wishlists" class="">
											<i class="la la-heart-o"></i>
											<span class="category-name">
                            Wishlist
                        </span>
										</a>
									</li>
									<li>
										<a href="http://littardoemporium.com/shop/seller/products" class="">
											<i class="la la-diamond"></i>
											<span class="category-name">
                            Products
                        </span>
										</a>
									</li>
									<li>
										<a href="http://littardoemporium.com/shop/orders" class="">
											<i class="la la-file-text"></i>
											<span class="category-name">
                            Orders
                        </span>
										</a>
									</li>
									<li>
										<a href="http://littardoemporium.com/shop/seller/reviews" class="">
											<i class="la la-star-o"></i>
											<span class="category-name">
                            Product Reviews
                        </span>
										</a>
									</li>
									<li>
										<a href="http://littardoemporium.com/shop/shops" class="">
											<i class="la la-cog"></i>
											<span class="category-name">
                            Shop Setting
                        </span>
										</a>
									</li>
									<li>
										<a href="http://littardoemporium.com/shop/seller/payments" class="">
											<i class="la la-cc-mastercard"></i>
											<span class="category-name">
                            Payment History
                        </span>
										</a>
									</li>
									<li>
										<a href="http://littardoemporium.com/shop/profile" class="">
											<i class="la la-user"></i>
											<span class="category-name">
                            Manage Profile
                        </span>
										</a>
									</li>
									<li>
										<a href="http://littardoemporium.com/shop/support_ticket" class="">
											<i class="la la-support"></i>
											<span class="category-name">
                            Support Ticket
                        </span>
										</a>
									</li>
								</ul>
							</div>

							<div class="sidebar-widget-title py-3">
								<span>Earnings</span>
							</div>
							<div class="widget-balance pb-3 pt-1">
								<div class="text-center">
									<div class="heading-4 strong-700 mb-4">
										<small class="d-block text-sm alpha-5 mb-2">Your earnings (current month)</small>
										<span class="p-2 bg-base-1 rounded">Rs0.00</span>
									</div>
									<table class="text-left mb-0 table w-75 m-auto">
										<tbody><tr>
											<td class="p-1 text-sm">
												Total earnings:
											</td>
											<td class="p-1">
												Rs0.00
											</td>
										</tr>
										<tr>
											<td class="p-1 text-sm">
												Last Month earnings:
											</td>
											<td class="p-1">
												Rs0.00
											</td>
										</tr>
										</tbody></table>
								</div>
								<table>

								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-9">
					<!-- Page title -->
					<div class="page-title">
						<div class="row align-items-center">
							<div class="col-md-6">
								<h2 class="heading heading-6 text-capitalize strong-600 mb-0">
									Dashboard
								</h2>
							</div>
							<div class="col-md-6">
								<div class="float-md-right">
									<ul class="breadcrumb">
										<li><a href="http://littardoemporium.com/shop">Home</a></li>
										<li class="active"><a href="http://littardoemporium.com/shop/dashboard">Dashboard</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- dashboard content -->
					<div class="">
						<div class="row">
							<div class="col-md-3 col-6">
								<div class="dashboard-widget text-center green-widget mt-4 c-pointer">
									<a href="javascript:;" class="d-block">
										<i class="fa fa-upload"></i>
										<span class="d-block title heading-3 strong-400">0</span>
										<span class="d-block sub-title">Products</span>
									</a>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="dashboard-widget text-center red-widget mt-4 c-pointer">
									<a href="javascript:;" class="d-block">
										<i class="fa fa-cart-plus"></i>
										<span class="d-block title heading-3 strong-400">0</span>
										<span class="d-block sub-title">Total sale</span>
									</a>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="dashboard-widget text-center blue-widget mt-4 c-pointer">
									<a href="javascript:;" class="d-block">
										<i class="fa fa-dollar"></i>
										<span class="d-block title heading-3 strong-400">Rs0.00</span>
										<span class="d-block sub-title">Total earnings</span>
									</a>
								</div>
							</div>
							<div class="col-md-3 col-6">
								<div class="dashboard-widget text-center yellow-widget mt-4 c-pointer">
									<a href="javascript:;" class="d-block">
										<i class="fa fa-check-square-o"></i>
										<span class="d-block title heading-3 strong-400">0</span>
										<span class="d-block sub-title">Successful orders</span>
									</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-7">
								<div class="form-box bg-white mt-4">
									<div class="form-box-title px-3 py-2 text-center">
										Orders
									</div>
									<div class="form-box-content p-3">
										<table class="table mb-0 table-bordered" style="font-size:14px;">
											<tbody><tr>
												<td>Total orders:</td>
												<td><strong class="heading-6">0</strong></td>
											</tr>
											<tr>
												<td>Pending orders:</td>
												<td><strong class="heading-6">0</strong></td>
											</tr>
											<tr>
												<td>Cancelled orders:</td>
												<td><strong class="heading-6">0</strong></td>
											</tr>
											<tr>
												<td>Successful orders:</td>
												<td><strong class="heading-6">0</strong></td>
											</tr>
											</tbody></table>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="bg-white mt-4 p-5 text-center">
									<div class="mb-3">
										<img src="http://littardoemporium.com/shop/public/frontend/images/icons/non_verified.png" alt="" width="130">
									</div>
									<a href="http://littardoemporium.com/shop/seller/shop/apply_for_verification" class="btn btn-styled btn-base-1">Verify Now</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="form-box bg-white mt-4">
									<div class="form-box-title px-3 py-2 text-center">
										Products
									</div>
									<div class="form-box-content p-3 category-widget">
										<ul class="clearfix">
										</ul>
										<div class="text-center">
											<a href="http://littardoemporium.com/shop/seller/product/upload" class="btn pt-3 pb-1">Add New Product</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="bg-white mt-4 p-4 text-center">
									<div class="heading-4 strong-700">Shop</div>
									<p>Manage &amp; organize your shop</p>
									<a href="http://littardoemporium.com/shop/shops" class="btn btn-styled btn-base-1 btn-outline btn-sm">Go to setting</a>
								</div>
								<div class="bg-white mt-4 p-4 text-center">
									<div class="heading-4 strong-700">Payment</div>
									<p>Configure your payment method</p>
									<a href="http://littardoemporium.com/shop/profile" class="btn btn-styled btn-base-1 btn-outline btn-sm">Configure Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection