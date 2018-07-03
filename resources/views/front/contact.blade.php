@extends('front.front-layout')
@section('content')
<div class="container my-4">
	<div class="row ">
		<div class="col-md-4 mx-auto">
			<div class="border-0 sharp card my-2 p-1 border-0" style="width: 100%; font-size: 0.85rem">
				<p class="card-text p-3">
					<span style="font-size: 18px;"><b>@lang('messages.popsi')</b></span>
					<br>E-Mail: info@popsibearings.com.mk
					<br> @lang('messages.address')
					<br> @lang('messages.skopje')
					<br> <span class="font-light"> Tax No. </span>: MK4030994260686
					<br> Bank account: 300-000000-821723 Komercijalna Banka
				</p>
			</div>
			<div class="border-0 sharp card my-2 p-1 border-0" style="width: 100%; font-size: 0.85rem">
				<p class="card-text p-3">
					<span style="font-size: 20px;"><b>@lang('messages.sales')</b></span>
					<br> Tel: +389 (0)2 2460 316
					<br> Mob: +389 (0)71 279 219
					<br> E-Mail: info@lageri.mk
				</p>
			</div>
			<div class="border-0 sharp card my-2 p-1 border-0" style="width: 100%; font-size: 0.85rem">
				<p class="card-text p-3">
					<span style="font-size: 20px;"><b>@lang('messages.aleksandar')</b></span>
					<br><span class="text-muted">@lang('messages.CEO')</span>
					<br>тел: +389 (0)2 2460 480
					<br>факс: +389 (0)2 2403 348
					<br>мобилен: +389 (0)71 279 219
					<br>E-Mail: popsicom@t.mk
				</p>
			</div>
			<div class="border-0 sharp card my-2 p-1 border-0" style="width: 100%; font-size: 0.85rem">
				<p class="card-text p-3">
					<span style="font-size: 20px;"><b>@lang('messages.vladimir')</b></span>
					<br><span class="text-muted">@lang('messages.CFO')</span>
					<br>тел/факс: +389 (0)2 2460 316
					<br>E-Mail: vladimir.p@popsibearings.com.mk
				</p>
			</div>
		</div>
		<div class="offset-md-2 col-md-6 mx-auto my-auto">
			<div class="bg-white p-4 ">
				<h1 class="text-center text-success">{{session('message')}}</h1>
				<h1 class="mb-4 text-center">@lang('messages.contact-greeting')</h1>
				<form method="POST" action="/contact">
					{{ csrf_field() }}
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="email">Email</label>
							<input type="email" class="sharp form-control" id="email" name="email" placeholder="Email" required>
						</div>
						<div class="form-group col-md-6">
							<label for="name">Name</label>
							<input type="Name" class="sharp form-control" id="name" name="name" placeholder="Name" required>
						</div>
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea class="sharp form-control" id="message" name="body" rows="5"></textarea>
					</div>
					<button type="submit" class="sharp btn btn-block btn-primary">Send</button>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

<br>
<br>
<br>
<br>
<br>
@endsection
