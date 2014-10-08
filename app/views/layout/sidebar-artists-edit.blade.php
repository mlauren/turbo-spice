@if(Auth::check())
	<h3>Artists / Partners <a href="/partner-add"><span class="badge">+New</span></a></h3>
	<ul class="list-group">
		<h5>Published:</h5>
		@foreach(Artist::all() as $artist)
			<li class="list-group-item">
				{{ HTML::link('/artists/' . $artist->permalink, $artist->name) }}
				<a href="/partner/{{ $artist->id }}/edit"><span class="pull-right badge">edit</span></a>
			</li>
		@endforeach
	</ul>
@endif
