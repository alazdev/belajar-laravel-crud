<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar CRUD</title>
    <link rel=”icon” type=”image/png” href=””>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-md-12">
                    <h1>CRUD
                        <small>Book</small>
                        <div class="float-right"><a href="/create" class="btn btn-primary">Add New</a></div>
                    </h1>
                </div>
                <div class="col-md-12">
                    <h3><small>Hai {{Session::get('username')}}, {{Session::get('email')}}, status : {{Session::get('login')}}</small>
                        <div class="float-right"><a href="/logout" class="btn btn-danger">Logout</a></div>
                    </h3>
                    </div>
                @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
                @endif
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Buku</th>
                            <th>Penerbit Buku</th>
                            <th>Jumlah Halaman</th>
                            <th>User Have</th>
                            <th style="text-align: right;">Actions</th>
                        </tr>
                    </thead>
                        @foreach($books as $data)
                        <tr>
                            <td>{{$data['judul_buku']}}</td>
                            <td>{{$data['penerbit_buku']}}</td>
                            <td>{{$data['jumlah_halaman']}}</td>
                            <td>{{$data['user_have']}}</td>
                            <td style="text-align: right;">
                                <a href="/edit/{{$data['id']}}" class="btn btn-info">Edit</a>
                                <a href="/delete/{{$data['id']}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>    
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>