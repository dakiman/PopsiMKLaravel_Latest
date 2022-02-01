<div class="products"
     @if(!Request::is('/'))
        style="margin-top: 0px!important;"
     @else
        style="margin-top: 50px!important;"
    @endif
>
    <div class="container">
        <div class="row">
            <div class="col-md-12"
                 @if((!Request::is('/'))) style="margin-top: 120px!important;"@endif>
                <div class="filters">
                    <ul>
                        @foreach($categories as $category)
                            <li data-filter=".{{Str::slug($category->title_en)}}">{{$category->translateTitle()}}</li>
                            |
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="filters-content">
                    <div class="row grid">
                        @foreach($categories as $category)
                            @foreach($category->activeItems() as $item)
                                <div class="col-lg-4 col-md-4 all {{Str::slug($category->title_en)}}">
                                    <div class="product-item text-center">
                                        <a href="/products/{{$item->id}}"><img class="item-img"
                                                         src="{{ Storage::url('items/' . $item->getCoverPhoto() )}}"
                                                         alt=""></a>
                                        <div class="down-content">
                                            <a href="/products/{{$item->id}}"><h4 class="item-title">{{$item->translateTitle()}}</h4></a>
                                            <p class="item-description">{{ $item->translateDescription() }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
