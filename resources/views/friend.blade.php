@extends('layouts.app')

@section('title', 'Friends')


@section('content')

@foreach ($friends as $friend)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"> {{ $friend['nama'] }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_telp'] }}</h6>
    <p class="card-text"> {{ $friend['alamat'] }}.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
    

@endforeach
    {{ $friends->links() }}

@endsection

