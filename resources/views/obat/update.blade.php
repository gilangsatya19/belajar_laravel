<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Edit Obat</title>
    <style>
        th, td {
            padding-top: 10px;
            padding-bottom: 20px;
            padding-left: 30px;
            padding-right: 40px;
        }
    </style>
</head>
<body style="margin-top: 3rem">
    <form action="{{route('update.obat',$obat->id)}}" method="POST">
        @csrf
        <div class="container">
            <h1 class="text-center custom-margin mb-5" >Edit Obat</h1>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <table>
                        <tr>
                            <th>Nama</th>
                            <td><input type="text" name="nama" value="{{$obat->nama}}"></td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td><textarea name="deskripsi" id="" cols="23" rows="5" >{{$obat->deskripsi}}</textarea></td>
                        </tr>
                        <tr>
                            <th>Tipe</th>
                            <td>
                                <select class="text-center" name="tipe" style="width: 12rem;height: 3rem" aria-placeholder="dsadsa">
                                    <option value="{{$obat->tipe}}">{{$obat->tipe}}</option>
                                    <option value="tablet">tablet</option>
                                    <option value="kapsul">kapsul</option>
                                    <option value="sirup">sirup</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <td><input type="text" name="jumlah" value="{{$obat->jumlah}}"></td>
                        </tr>
                        <tr>
                            <th>Harga Satuan</th>
                            <td><input type="text" name="harga_satuan" value="{{$obat->harga_satuan}}"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>