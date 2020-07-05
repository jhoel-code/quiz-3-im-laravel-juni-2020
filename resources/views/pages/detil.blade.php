@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>Detil</h4></div>

                <div class="card-body">

                    <h2>Judul: {{$data->judul}} </h2>

                    <h5>Slug: {{$data->slug}}</h5>

                    <h5>{{$data->isi}}</h5>

                    <div><button type="button" class="btn btn-success">Info</button> <button type="button" class="btn btn-success">Web</button> <button type="button" class="btn btn-success">phplaravel</button></div>
                    <br/>
                    <div><a href="/artikel" class="btn btn-secondary" role="button">Back</a></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
