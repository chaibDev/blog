<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Laravel</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />

</head>

@foreach ($posts as $post)
<p style="margin-lef:80px;">{{$post->id}}</p>
<h2><p style="margin-lef:80px;margin-right:30%;">{{$post->title}}</p></h2>
<br>
<p style="margin-lef:80px;"><img src="{{$post->thumbnail}}"></a></p>
<br>
<p style="margin-lef:80px;margin-right:30%;">{{$post->excerpt}}</p>
    <br>
    <a href="{{ route('posts.show', ['post'=>$post]) }}" class="btn btn-primary">Lire l'article</a>
@endforeach

{{ $posts->links() }}