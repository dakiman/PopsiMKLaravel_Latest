@extends('front.front-layout') 
@section('content')
<div class="container my-4">
    <div class="row ">
        <div class="col-md-8">
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
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text p-3">
                        <span style="font-size: 20px;"><b>POPSI-Company dooel</b></span>
                        <br>
                        bul. Kuzman Josifovski Pitu br.30
                        <br>                        
                        <b>E-mail : info@popsibearings.com.mk</b> 
                        1000 Skopje, Macedonia
                        <br>
                        Tax No. : MK4030994260686
                        <br>
                        Bank account: 300-000000-821723 Komercijalna Banka 
                    </p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection