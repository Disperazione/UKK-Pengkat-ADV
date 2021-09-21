<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        table {
    border-left: 0.01em solid #ccc;
    border-right: 0;
    border-top: 0.01em solid #ccc;
    border-bottom: 0;
    border-collapse: collapse;
}
table td,
table th {
    border-left: 0;
    border-right: 0.01em solid #ccc;
    border-top: 0;
    border-bottom: 0.01em solid #ccc;
}

.success{
    color:rgb(255, 255, 255);
}
.danger{
    color:rgb(255, 255, 255);
}






    </style>
</head>

<body>
    <!-- Optional JavaScript; choose one of the two! -->
    <div class="card-header header-elements-inline">
        <h4 class="card-title">Data Pengaduan</h4>

    </div>

    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Dari</th>
                <th>Judul pengaduan</th>
                <th>Tanggal dibuat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduan as $pengadu)
                <tr class="text-dark text-center">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$pengadu->Masyarakat->nama}}</td>
                    <td>{{$pengadu->judul_laporan}}</td>
                    <td>{{$pengadu->tgl_pengaduan}}</td>
                    @if ($pengadu->status === 'selesai')
                    
                    <td style="background-color: rgb(102, 255, 14)">
                        <span  class="success">di tanggapi</span>
                    </td>
                    @elseif($pengadu->status === '0')
                    <td style="background-color: rgb(255, 14, 14)">
                            <span  class="danger">di tolak</span>
                    </td>
                    @endif
                </tr>
            @endforeach

        </tbody>
    </table>
    {{-- {{ $masyarakat->links() }} --}}
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script> --}}

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>
