@mobile
<div class="container-fluid n py-3">
	<div class="row categories-container">
		<div class="col-md-11 text-center mx-auto mt-3">
			<div class="card-deck">
				@foreach ($categories as $category)
				<div class="category-card card sharp">
					<img class="card-img-top mx-auto" src="{{Storage::url('categories/'.$category->picture)}}" alt="Card image cap">
					<a href="/catalogue/categories/{{$category->id}}">
						<div class=" card-body text-center">
							<div class="card-title">{{ ucfirst($category->translateTitle()) }}</div>
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
<div class="container-fluid py-3 ">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				@foreach ($categories as $category)
				<div style="font-size: 16px;" data-target="{{$category->id}}" href="#" class="sharp list-group-item @if($category->id == $categories[0]["id"]) active-category @endif font-weight-bold">
					<span class="align-middle">{{ $category->translateTitle() }}</span>
					<span class="align-middle">
						<i class=" float-right fas fa-arrow-right" style="font-size: 20px;"></i>
					</span>
				</div>
				@endforeach
			</div>
		</div>
		<div class="col-md-9">
			@foreach ($categories as $category)
			<div class="row {{$category->id}} @if($category->id == $categories[0]["id"]) active-items @else inactive-items @endif">
				@include('partials.category-partial')
			</div>
			@endforeach
		</div>
	</div>
</div>
@endnotmobile
