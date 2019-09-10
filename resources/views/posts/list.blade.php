@extends('layouts.app')


@section('content')

<div class="container">

 <div class="row justify-content-center">

   <div class="col-md-8">

     @foreach ($posts as $post)

     <div class="card mt-4">

       <img class="card-img-top" src="{{$post->image_path}}" alt="Card image cap">

       <div class="card-body">{{$post->description}}</div>
       <div class="row">

        <div class="col-md-6 mb-2"><center><input class = "btn btn-success pr-4" type="submit" value="Like"/></center></div>
         <div class="col-md-6 mb-2"><center><button type="button" class="btn btn-danger">Deslike</button></center></div>

       </div>
       <textarea name="comentarios" id="comentarios">
       </textarea>
       <input class = "btn btn-primary " type="submit" value="Comentar"/>

     </div>   

     @endforeach

   </div>

 </div>

</div>

@endsection
