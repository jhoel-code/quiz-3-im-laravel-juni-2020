@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>Artikel</h4></div>
                    <div class="card-body">
                        <div><a href="/artikel/create" class="btn btn-secondary" role="button">Create</a></div>
                            <br/>
                        <table class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Isi</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Tag</th>
                                <th scope="col" colspan = "3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0;?>
                        @foreach($data as $data)
                            <?php $no++ ;?>
                                <tr>
                                <td>{{ $no }}</td>
                                <td>{{$data->judul}}</td>
                                <td>{{$data->isi}}</td>
                                <td>{{$data->slug}}</td>
                                <td>{{$data->tag}}</td>
                                <td><a href="/artikel/{{$data->id}}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
                                <td>
                                <form action="/artikel/{{$data->id}}" method="POST">
                                    {{ method_field('delete') }}
                                    @csrf
                                <button class="btn btn-link" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                                </form>
                                </td>
                                <td><a href="/artikel/{{$data->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
@push('scripts')


<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Menambahkan Artikel BOS!!!',
        icon: 'success',
        confirmButtonText: 'Mantep'
    })
</script>
@endpush

@endsection
