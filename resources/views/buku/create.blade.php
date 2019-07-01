<html lang="en">
<head>
    <title>Create New Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <h1>Create
                <small>Book</small>
            </h1>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <form action="/save" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Judul Buku</label>
                        <input type="text" name="judul_buku" class="form-control" placeholder="Judul" required>
                    </div>
                    <div class="form-group">
                        <label>Penerbit Buku</label>
                        <input type="text" name="penerbit_buku" class="form-control" placeholder="Penerbit" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Halaman</label>
                        <input type="text" name="jumlah_halaman" class="form-control" placeholder="Jumlah Halaman" required>
                    </div>
                    <div class="form-group">
                        <label>User Have</label>
                        <input type="text" name="user_have" class="form-control" placeholder="User Have" value="{{Session::get('id')}}" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>