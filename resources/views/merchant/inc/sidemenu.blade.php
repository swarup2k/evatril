<div class="col-lg-3 d-none d-lg-block">
	<div class="sidebar sidebar--style-3 no-border stickyfill p-0">
		<div class="widget mb-0">
			<div class="widget-profile-box text-center p-3">
				<div class="image"
					 style="background-image:url('https://img.pngio.com/merchant-royalty-free-stock-png-images-for-your-design-merchant-png-512_512.png')"></div>
				<div class="name mb-0">{{ auth('merchant')->user()->name }}

					@if (auth('merchant')->user()->approved == 1)
						<img width="40px" src="http://littardoemporium.com/shop/public/frontend/images/icons/verified.png"
							 alt="" width="130">

					@else
						<img width="40px" src="http://littardoemporium.com/shop/public/frontend/images/icons/non_verified.png"
							 alt="" width="130">


					@endif
				</div>
			</div>
			<div class="sidebar-widget-title py-3">
				<span>Menu</span>
			</div>
			<div class="widget-profile-menu py-3">
				<ul class="categories categories--style-3">
					<li>

					</li>
					<li>
						<a href="{{ route('merchant.home') }}" class="{{ (\Route::currentRouteName() == 'merchant.home') ? 'active' : '' }}">
							<i class="la la-dashboard"></i>
							<span class="category-name">
                                            Dashboard
                                        </span>
						</a>
					</li>
					<li>
						<a href="{{ route('merchant.bookings') }}" class="{{ (\Route::currentRouteName() == 'merchant.bookings') ? 'active' : '' }}">
							<i class="la la-file-text"></i>
							<span class="category-name">
                                            Booking History
                                        </span>
						</a>
					</li>
					<li>
						<a href="{{ route('merchant.venues') }}" class="{{ (\Route::currentRouteName() == 'merchant.venues') ? 'active' : '' }}">
							<i class="la la-heart-o"></i>
							<span class="category-name">
                                            Venues
                                        </span>
						</a>
					</li>
                    <li>
                        <a href="{{ route('merchant.master.venues') }}" class="{{ (\Route::currentRouteName() == 'merchant.master.venues') ? 'active' : '' }}">
                            <i class="la la-heart-o"></i>
                            <span class="category-name">
                                            Master Venues
                                        </span>
                        </a>
                    </li>
					<li>
						<a href="{{ route('merchant.reviews') }}" class="">
							<i class="la la-diamond"></i>
							<span class="category-name">
                                            Venue Reviews
                                        </span>
						</a>
					</li>
					<li>
						<a href="{{ route('merchant.list.hall') }}" class="">
							<i class="la la-file-text"></i>
							<span class="category-name">
                                            Hall/Lawn
                                        </span>
						</a>
					</li>

					<li>
						<a href="{{ route('merchant.payments') }}" class="">
							<i class="la la-cc-mastercard"></i>
							<span class="category-name">
                                            Payment History
                                        </span>
						</a>
					</li>

					<li>
						<a href="{{ route('merchant.support') }}" class="">
							<i class="la la-support"></i>
							<span class="category-name">
                                            Support Ticket
                                        </span>
						</a>
					</li>
					<li>
						<a href="{{ route('merchant.logout') }}" class="">
							<i class="fa fa-sign-out"></i>
							<span class="category-name">
                                            Logout
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
						<small class="d-block text-sm alpha-5 mb-2">Your earnings (current month)
						</small>
						<span class="p-2 bg-base-1 rounded">Rs0.00</span>
					</div>
					<table class="text-left mb-0 table w-75 m-auto">
						<tbody>
						<tr>
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
						</tbody>
					</table>
				</div>
				<table>

				</table>
			</div>
		</div>
	</div>
</div>
