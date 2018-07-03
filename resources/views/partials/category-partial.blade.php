<div class="col-md-11 mx-auto ">
	<div class="items-container card sharp">
		<div @notmobile style="height: 270px;" @endnotmobile class="row my-auto">
			<div  class="col-sm-3 text-center my-auto">
				<img @mobile style="width: 90%;" @endmobile class="m-3" src="{{Storage::url('/categories/'.$category->picture)}}"
				 alt="Generic placeholder image">
			</div>
			<div class="col-sm-9 pt-4 @mobile text-center @endmobile">
				<a style="font-size: 24px;" class="font-weight-bold" href="/catalogue/categories/{{$category->id}}">{{ucfirst($category->translateTitle())}}</a> <br> @if (strlen($category->translateDescription()) > 3) {{$category->translateDescription()}} @endif
			</div>
		</div>
		<div class="card-body">
			<div class="row mx-auto">
				@foreach ($category->activeItems() as $item)
				<div class="col px-1 py-1">
					<div class="sharp card item-card text-center border-muted mx-auto">
						<img class="card-img-top  " src="{{Storage::url('/items/'.$item->getCoverPhoto() )}}" alt="Card image cap">
						<div class="card-body text-center">
							<a href="/catalogue/items/{{$item->id}}">
								<div class="card-title cut-text ">{{$item->translateTitle()}}</div>
							</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>