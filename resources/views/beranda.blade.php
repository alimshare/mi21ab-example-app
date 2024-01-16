@extends('template.layout')

@section('content')
  <h2>Selamat Datang {{ Auth::user()->name }}</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta nulla id omnis suscipit quidem consequuntur hic unde fugit, architecto numquam assumenda dolorum facere, modi dolore aperiam molestias eligendi perspiciatis cupiditate!</p>
@endsection