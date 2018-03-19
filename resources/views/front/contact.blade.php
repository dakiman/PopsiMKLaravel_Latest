@extends('front.front-layout') 
@section('content')
<div class="container my-4">
    <div class="row ">
        <div class="col-md-4 mx-auto">
            <div class="card" style="width: 100%;">
                <div class="card-body" >
                    <p class="card-text p-3">
                        <span style="font-size: 20px;"><b>@lang('messages.popsi')</b></span>
                        <br><b>E-Mail: info@popsibearings.com.mk</b>
                        <br> bul. Kuzman Josifovski Pitu br.30
                        <br>1000 Skopje, Macedonia
                        <br> Tax No. : MK4030994260686
                        <br> Bank account: 300-000000-821723 Komercijalna Banka
                    </p>
                </div>
            </div>
            <div class="card" style="width: 100%;">
                <div class="card-body" >
                    <p class="card-text p-3">
                        <span style="font-size: 20px;"><b>Поповски Александар</b></span>
                        <br><span class="text-muted">управител</span>
                        <br>тел: +389 (0)2 2460 480
                        <br>факс: +389 (0)2 2403 348
                        <br>мобилен: +389 (0)71 279 219
                        <br>e-mail:popsicom@t.mk 
                    </p>
                </div>
            </div>
            <div class="card" style="width: 100%;">
                <div class="card-body" >
                    <p class="card-text p-3">
                        <span style="font-size: 20px;"><b>                        Поповски Владимир</b></span>
                        <br><span class="text-muted">финансии</span>
                        <br>тел/факс: +389 (0)2 2460 316
                        <br>e-mail:vladimir.p@popsibearings.com.mk
                    </p>
                </div>
            </div>
        </div>
        <div class="offset-md-2 col-md-6 mx-auto">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="sharp form-control" id="inputEmail4" placeholder="Email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputName4">Name</label>
                        <input type="Name" class="sharp form-control" id="inputName4" placeholder="Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="sharp form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>
                <button type="submit" class="sharp btn btn-block btn-primary">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection