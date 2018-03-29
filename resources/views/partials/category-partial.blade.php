<div class="col-md-11 mx-auto">
    <div class="items-container card border-primary">
        <div class="media">
            <div class="media-body my-auto px-2">
                <a href="/catalogue/categories/{{$category->id}}"><img @mobile style="width: 90%;" @endmobile class="float-left m-3" src="{{Storage::url('/categories/'.$category->picture)}}" alt="Generic placeholder image"></a>
                <h5 class="mt-2">
                    <a style="font-size: 24px;" class="font-weight-bold" href="/catalogue/categories/{{$category->id}}">{{$category->translateTitle()}}</a>
                </h5>
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
                        <a href="/catalogue/items/{{$item->id}}"><div class="card-title cut-text ">{{$item->translateTitle()}}</div></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
