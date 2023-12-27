@extends("layouts.home")


@section('content')


<!-- Account details -->
<div class="col-md-8 offset-lg-1 pb-5 mb-2 mb-lg-4 pt-md-5 mt-n3 mt-md-0">
	<div class="ps-md-3 ps-lg-0 mt-md-2 py-md-4">
		<div class="row">
			<div class="col-xl-7 col-lg-8">
				<div class="tab-pane card border-0 shadow-sm bg-faded-primary bg-repeat-0 bg-size-cover" style="background: url(../assets/img/account/pattern.svg) 60%, linear-gradient(30deg, #82022a 0%, #82022a 40%, #8ed2f0 100%) !important;color:#fff !important;min-height: 16rem;border-radius:1.5rem;">
					<div class="card-body">
						<div class="row">
							<div class="col-10 pb-3"><b>Account Balance</b></div>
							<div class="col-2">
								<div id="ref-btc"><img src="{{ asset('dash/img/btc.png') }}"></div>
								<div id="ref-bnb" style="display:none;"><img src="../assets/img/account/bnb.png"></div>
								<div id="ref-doge" style="display:none;"><img src="../assets/img/account/doge.png"></div>
								<div id="ref-ltc" style="display:none;"><img src="../assets/img/account/ltc.png"></div>
								<div id="ref-trx" style="display:none;"><img src="../assets/img/account/trx.png"></div>
								<div id="ref-usdt" style="display:none;"><img src="{{ asset('dash/img/usdt.png') }}"></div>
							</div>
							<div class="col-12 text-center">
								<div id="block-btc">
									<!-- <span style="font-size:2.5rem;font-weight:800;">0.000000 <span style="font-size:1.5rem;vertical-align:text-top;">BTC</span></span><br> -->
									<span style="font-size:1.8rem;font-weight:600;"> {{ $accountBalance }} <span style="font-size:0.8rem;vertical-align:text-top;">USD</span></span>
								</div>
							</div>
							<div class="col-12 pb-3"></div>
							<div class="col-6 text-center">
								<span style="font-weight:400;">Current investment</span><br>

								<div id="ti-btc"><span style="font-size:1.3rem;font-weight:800;"> {{ $totalInvestment }} <span style="font-size:0.8rem;vertical-align:text-top;">USD</span></span></div>

								<a style="text-decoration:none;" href="/dashboard/invest"><button style="font-weight:900;text-transform:uppercase;color:#000;" class="btn btn-warning shadow-secondary w-100" type="button"><i class="bx bx-up-arrow-alt fs-xl opacity-60 me-2"></i>Invest</button></a>
							</div>
							<div class="col-6 text-center">
								<span style="font-weight:400;">Earnings</span><br>
								<div id="tp-btc"><span style="font-size:1.3rem;font-weight:800;"> {{ $totalEarnings }} <span style="font-size:0.8rem;vertical-align:text-top;">USD</span></span></div>
								<a style="text-decoration:none;" href="/dashboard/withdraw"><button style="font-weight:900;text-transform:uppercase;" class="btn btn-light shadow-secondary w-100" type="button"><i class="bx bx-down-arrow-alt fs-xl opacity-60 me-2"></i>Withdraw</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-5 col-lg-4">
				<div class="card border-0 shadow-sm text-center" style="max-width:20rem;margin:3rem auto !important;">
					<div class="shadow-sm" style="margin: -1.5rem auto auto auto;font-size: 2rem;border-radius:50%;font-weight: 900;width: 50px;height:50px;color: #fff;background: linear-gradient(220deg, #82022a 0%, #82022a 40%, #8ed2f0 100%) !important;">?</div>
					<div class="card-body">
						<h5 class="card-title">Help Center</h5>
						<p class="card-text fs-sm">Having trouble in quopi-ai.online Dashboard?<br>Don't worry we create this manual page, check it and use Dashboard like a Pro.</p><a class="btn btn-sm btn-primary shadow-secondary rounded-pill" href="#">Go To Help Center</a>
					</div>
				</div>
			</div>
			<div class="col-xl-12 col-lg-10">
				<div class="card border-0 shadow-sm text-center">
					<iframe allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/crypto-mkt-screener/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A%22400%22%2C%22defaultColumn%22%3A%22overview%22%2C%22screener_type%22%3A%22crypto_mkt%22%2C%22displayCurrency%22%3A%22USD%22%2C%22colorTheme%22%3A%22light%22%2C%22isTransparent%22%3Afalse%2C%22market%22%3A%22crypto%22%2C%22enableScrolling%22%3Atrue%2C%22utm_source%22%3A%22micoinfinance.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22cryptomktscreener%22%7D" style="box-sizing: border-box;  height: 300px; width: 100%;"></iframe>
				</div>
			</div>
            @php
                $protocol = Request::isSecure() ? "https://" : "http://";
                $host = Request::getHost();
                $refUrl = $protocol .$host . "/register?ref=".Auth::user()->username;
            @endphp
			<div class="col-xl-12 col-lg-12 mt-5 mb-5">
				<h6 class="text-center">Promotion Link</h6>
				<p style="display:none;" id="p1">{{ $refUrl }}</p>
				<div class="input-group">
					<input type="text" class="form-control rounded-start ps-5" id="copybtc" value="{{ $refUrl }}">
					<i class="bx bx-link-alt fs-lg text-muted position-absolute top-50 start-0 translate-middle-y ms-3 zindex-5"></i>
					<button type="submit" class="btn btn-primary" onclick="mycopy()"><i class="bx bx-copy me-2"></i> Copy Link</button>

					<script type="text/javascript">
						function mycopy() {
							var copyTxt = document.getElementById("copybtc");
							copyTxt.select();
							document.execCommand("copy");
							alert("Link Sucessfully Copied to Clipboard");
						}
					</script>
				</div>
			</div>
			<div class="col-md-12 mt-3 mb-5">
				<div class="text-center">
					<h5 class="h5 text-primary mb-4" style="font-size: 14px;"><i class="bx bxs-megaphone" style="vertical-align: middle; "></i> start promoting your link and get 5% from ever deposit your partner</h5>
				</div>
			</div>
			<div class="col-md-12 mt-3">
				<div style="overflow-x:auto;">
					<table class="table">
						<thead class="thead-light">
							<tr align="center">
								<th style="color:#0d6efd">Username</th>
								<th style="color:#0d6efd">Email</th>
								<th style="color:#0d6efd">Fullname</th>
								<th style="color:#0d6efd">Amount paid</th>
							</tr>
						</thead>
						<tbody>
							<tr><td>No Referrals yet</td></tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
