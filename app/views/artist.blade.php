@extends('layout.main')

@section('content')
  @foreach($artists as $artist)
      <div class="col-md-3 artists-container">
        <a href="{{ URL::route('artists-show-single', $artist->permalink) }}" class="artists-container-permalink">{{ $artist->name }}</a>
        <a href="{{ URL::route('artists-show-single', $artist->permalink) }}">
          <img class="img-responsive" src="/{{ Media::find($artist->cover_image)->img_min }}" />
        </a>
      </div>
  @endforeach
@stop
