@mobile
<div class="container-fluid categories-section py-3">
  <div class="row categories-container">
    <div class="col-md-11 text-center mx-auto mt-3">
      <div class="card-deck">
        @foreach ($categories as $category)
        <div class="category-card card border mx-2 border-primary rounded">
          <img class="card-img-top mx-auto" src="{{Storage::url('/categories/'.$category->picture)}}" alt="Card image cap">
          <a href="/catalogue/categories/{{$category->id}}">
            <div class="card-body text-center">
              <div class="card-title ">{{ $category->translateTitle() }}</div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endmobile

@notmobile
<div class="container-fluid py-3 categories-section">
  <div class="row">
    <div class="col-md-3">
      <div class="list-group">
        @foreach ($categories as $category)
        <div data-target="{{$category->id}}" href="#" class="list-group-item @if($category->id == $categories[0]["id"]) active-category @endif">{{ $category->translateTitle() }}</div>
        @endforeach
      </div>
    </div>
    <div class="col-md-9">
      @foreach ($categories as $category)
      <div class="row {{$category->id}} @if($category->id == $categories[0]["id"]) active-items @else inactive-items @endif">
          <div class="col-md-11 mx-auto">
              <div class="items-container card border-primary">
                  <div class="media">
                      <img class="mx-3 my-3" src="{{Storage::url('/categories/'.$category->picture)}}" alt="Generic placeholder image">
                      <div class="media-body my-auto px-2">
                          <h5 class="mt-0">{{$category->translateTitle()}}</h5>
                          {{$category->translateDescription()}}
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="row mx-auto">
                          @foreach ($category->activeItems() as $item)
                          <div class="col-md-3 px-1 py-1">
                              <div class="card item-card text-center border-muted rounded mx-auto">
                                  <img class="card-img-top" src="{{Storage::url('/items/'.$item->getCoverPhoto() )}}" alt="Card image cap">
                                  <div class="card-body text-center">
                                      <div class="card-title ">{{$item->translateTitle()}}</div>
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
  </div>
</div>
@endnotmobile