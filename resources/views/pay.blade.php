@extends('layouts.home')

@section('content')

<div class="col-md-8 offset-lg-1 pb-5 mb-2 mb-lg-4 pt-md-5 mt-n3 mt-md-0">
	<div class="ps-md-3 ps-lg-0 mt-md-2 py-md-4">
		<div class="container">
			<div class="row align-items-center">
				<h5 class="text-capitalize">Complete your payment</h5>
                <p class="card-text">To complete your deposit, your are to make a deposit of <strong>{{ $tx->amountCurrency }} {{ $tx->currency }}</strong> to this address <strong>{{ $tx->address }}</strong></p>
                <div class="card ">
                    <h5 class="card-header text-capitalize"> Payment Details </h5>
                    <div class="card-body">
                        Currency: <h5 class="card-title text-uppercase">{{ $tx->currency }} </h5>
                        Amount: <h5 class="card-title">{{ $tx->amountCurrency }} <button style="background-color: #f7f7f7; color: #000; padding: 5px 10px;" type="button" class="btn" onclick="mycopyAmount()"><i class="bx bx-copy me-2"></i></button></h5>
                        Payment Address: <h5 class="card-title">{{ $tx->address }} <button style="background-color: #f7f7f7; color: #000; padding: 5px 10px;" type="button" class="btn" onclick="mycopyAddress()"><i class="bx bx-copy me-2"></i></button></h5>
                        Network: <h5 class="card-title">{{ $tx->currency === 'btc' ? "Bitcoin" : ($tx->currency === 'bnb' ? "Binance Smart Chain" : "Ethereum" )}}</h5>
                        Payment Status: <div class="alert alert-{{ $tx->status === "pending" ? "warning" : ( $tx->status === 'processing' ? "info" : "success" ) }}">{{ strtoupper($tx->status) }}</div>

                        @if($tx->status !== 'success')
                            <a data-bs-toggle="modal" data-bs-target="#verifyPaymentModal" href="#" class="btn btn-primary">Verify Payment</a>
                        @endif
                      @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif
                    </div>
                  </div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="verifyPaymentModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Verify Payment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('verifyTx') }}">
                @csrf
                <label>Transaction Hash</label>
                <div class="form-group mb-3">
                    <input name="new_hash" type="text" class="form-control" aria-label="Transaction Hash" required>
                    <input name="old_hash" type="hidden" value="{{ $tx->tx_hash }}">
                </div>
                <div class="form-group mb-3 text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>

    <input type="hidden" value="{{ $tx->amountCurrency }}" id="amountCopy" />
    <input type="hidden" value="{{ $tx->address }}" id="addressCopy" />

  <script type="text/javascript">
    function mycopyAmount() {
        var copyTxt = document.getElementById("amountCopy");

        var textArea = document.createElement('textarea');
        textArea.value = copyTxt.value;

        document.body.appendChild(textArea);

        textArea.select();
        document.execCommand("copy");
        alert("Amount Sucessfully Copied to Clipboard");
    }

    function mycopyAddress() {
        var copyTxt = document.getElementById("addressCopy");

        var textArea = document.createElement('textarea');
        textArea.value = copyTxt.value;

        document.body.appendChild(textArea);

        textArea.select();
        document.execCommand("copy");
        alert("Address Sucessfully Copied to Clipboard");
    }
</script>

@endsection
