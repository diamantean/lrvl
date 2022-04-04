<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lihat Buku</title>
</head>

<body>
    <div class="card" style="width: 40rem; margin: 7px auto 7px;">
        <img src="{{ $buku->gambar_buku }}" class='card-img-top'>
        <div class="card-body">
            <h5 class="card-title">{{ $buku->judul_buku }}</h5>
            <p class="card-text" style="text-align: justify">{{ $buku->deskripsi_buku }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Penulis : {{ $buku->penulis }}</li>
            <li class="list-group-item">Penerbit : {{ $buku->penerbit }}</li>
            <li class="list-group-item">Tahun Terbit : {{ $buku->tahun_terbit }}</li>
            <li class="list-group-item">Stok : {{ $buku->stok_buku }}</li>
        </ul>
        <div class="card-body">
            <a href="/"> <input type="button" value="Kembali" class="btn btn-secondary"></a>
        </div>
    </div>
</body>

</html>
