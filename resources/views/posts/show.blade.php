@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-8">
        <img src="/storage/{{ $post->image }}" class="w-100">
      </div>
      <div class="col-4">
        <div>
          <div class="d-flex align-items-center">
            <div class="pr-3">
              <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 40px">
            </div>
            <div class="d-flex">
              <div class="font-weight-bold"><a href="{{ route('profile.show', $post->user->id) }}"><span class="text-dark">{{ $post->user->username }}</span></a></div> |
              <a href="#" class="pl-2">Follow</a>
            </div>
          </div>

          <hr>

          <p><span class="font-weight-bold"><a href="{{ route('profile.show', $post->user->id) }}"><span class="text-dark">{{ $post->user->username }}</span></a></span> {{ $post->caption }}</p>
        </div>
      </div>
    </div>
</div>
@endsection
