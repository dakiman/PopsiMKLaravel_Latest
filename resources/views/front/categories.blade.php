<div class="container-fluid ">
  <div class="row categories-container">
    <div class="col-md-11 text-center mx-auto mt-3">
      <div class="card-deck">
        @foreach ($categories as $category)
        <div data-target="{{$category->id}}" class="@if($category->id == $categories[0]["id"]) active-category @endif category-card card border mx-2 border-primary rounded">
          <img class="card-img-top mx-auto" src="{{Storage::url('/categories/'.$category->picture)}}" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title ">{{ $category->translateTitle() }}</h5>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  @foreach ($categories as $category)
  <div class="row {{$category->id}} @if($category->id == $categories[0]["id"]) active-items @else inactive-items @endif">
    <div class="col-md-11 mx-auto px-2 mt-4">
      <div class="card border-primary">
        <div style="" class="card-header ">
          <div style="font-size: 30px;" class="text-primary font-weight-bold">{{ $category->translateTitle() }}</div>
          <hr>
          <div style="font-size: 20px;" class="pl-3 text-muted font-weight-italic ">{{$category->translateDescription()}}</div>
        </div>
        <div class="card-body">
          <div class="row mx-auto">
            @foreach ($category->activeItems() as $item)
            <div class="col-md-2 px-1 py-1">
              <div class="card item-card text-center border-muted rounded">
                <img class="card-img-top" src="{{Storage::url('/items/'.$item->pictures)}}" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title ">{{$item->translateTitle()}}</h5>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>