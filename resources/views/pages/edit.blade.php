@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Edit Artikel</h4></div>

                <div class="card-body">
                    <form method="POST" action="/artikel/{{$data->id}}">
                 @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Judul:</label>
                            <input type="text" name= "judul" class="form-control" value="{{$data->judul}}">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Isi:</label>
                            <input type="text" name= "isi" class="form-control" value="{{$data->isi}}">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Slug:</label>
                            <input type="text" name= "slug" class="form-control" value="{{$data->slug}}">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Tag</label>
                            <input type="text" name= "tag" class="form-control" value="{{$data->tag}}">
                        </div>

                        <button type="submit" class="btn btn-secondary mb-2">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
