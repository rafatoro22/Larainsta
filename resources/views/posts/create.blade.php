@extends('layouts.app')


@section('content')


<div class="login">

    <div class="row">

        <div class="offset-md-4 col-md-4 border text-center p-5 bg-white">    
        <div><center> <a class = "btn btn-primary" href="/posts">Voltar</a> </center></div>


            <h1 class="">Poste sua Foto</h1>

               

            <form method="POST" enctype="multipart/form-data" action="/posts">


                @csrf


                <div class="form-group row">                    


                    <div class="col-md-12">

                        <input placeholder="Nome da foto" id="filter" type="text" class="form-control" name="filter" >


                    </div>

                </div>


                <div class="form-group row">                    


                    <div class="col-md-12">

                        <textarea placeholder="description" id="description" type="text" class="form-control" name="description" required=""> </textarea>

                    </div>

                </div>

                <div class="form-group row">                    


                    <div class="col-md-12">

                        <input type="file" class="form-control" name="image_path">


                    </div>

                </div>
                

                <div class="form-group row mt-0">

                    <div class="col-md-12">

                        <button type="submit" class="btn btn-primary">

                            Postar

                        </button>


                 

                    </div>

                </div>

            </form>

               

           

        </div>

    </div>



</div>

@endsection