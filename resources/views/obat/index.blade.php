<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Data Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
    .custom-margin {
        margin-bottom: 10rem;
    }
    </style>
    
</head>

<body>
    <div class="container">    
        <h1 class="text-center custom-margin" >Data Obat</h1>
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    
                    <th>Ubah</th>
                    <th>Hapus</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Tipe</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($obats as $obat)

                <tr>
                    
                    <td><a href="{{ route('edit.obat', $obat->id) }}" type="button" class="btn btn-primary">Ubah</button></td>
                    <td><a href="{{ route('delete.obat', $obat->id) }}" type="button" class="btn btn-danger">Delete</button></td>
                    <th scope="row">{{$obat->id}}</th>
                    <td>{{$obat->nama}}</td>
                    <td>{{$obat->deskripsi}}</td>
                    <td>{{$obat->tipe}}</td>
                    <td>{{$obat->jumlah}}</td>
                    <td>{{$obat->harga_satuan}}</td>
                </tr>

                @endforeach
                
                
                
                
            </tbody>
            <tfoot >
                
            </tfoot>
            
        </table>
        <td><a href="{{ route('create.obat') }}" type="button" class="btn btn-success float-center my-5">Tambah Obat</a></td>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>

    
</body>
    
</html>