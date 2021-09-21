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
    </style>
</head>

<body>
        <h3><b style="color: black;">Data masyarakat</b></h3>
    <!-- Optional JavaScript; choose one of the two! -->
    <table class="table " border="1">
        <thead>
            <tr class="text-center">
                <th>NO</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>Telp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($masyarakat as $mass)
                <tr class="text-center">
                    <td><b>{{ $loop->iteration }}</b></td>
                    <td><b>{{ $mass->nik }}</b></td>
                    <td><b>{{ $mass->nama }}</b></td>
                    <td><b>{{ $mass->telp }}</b></td>

                </tr>
                <tr class="text-center">
                    <td><b>{{ $loop->iteration }}</b></td>
                    <td><b>{{ $mass->nik }}</b></td>
                    <td><b>{{ $mass->nama }}</b></td>
                    <td><b>{{ $mass->telp }}</b></td>

                </tr>
                <tr class="text-center">
                    <td><b>{{ $loop->iteration }}</b></td>
                    <td><b>{{ $mass->nik }}</b></td>
                    <td><b>{{ $mass->nama }}</b></td>
                    <td><b>{{ $mass->telp }}</b></td>

                </tr>


            @endforeach

        </tbody>
    </table>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script> --}}

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>
