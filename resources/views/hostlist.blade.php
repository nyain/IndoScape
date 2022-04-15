<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
    <title>Host List</title>
</head>

<body>
    <h1 class="text-center">DATA Host</h1>

    <div class="container mb-2">
        <a href="/tambahwisata" type="button" class="btn btn-success">Tambah
            +</a>
        <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2" role="alert">
                {{ $message }}
            </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Price</th>
                        <th scope="col">Last Updated</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($user as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->name }}</td>
                        <td>
                            <img src="{{ asset('images/'. $row->image) }}"
                                alt="" style="width: 8em;">
                        </td>
                        <td>{{ $row->description }}</td>
                        <td>{{ $row->price }}</td>
                        <td>{{ $row->updated_at->format('D M Y') }}</td>
                        <td>{{ $row->updated_at->diffForHumans() }}</td>
                        <td>
                            <a href="/deletewisata/{{$row->id }}"
                                class="btn btn-danger mb-1">Delete</a>
                            <a href="/showwisata/{{$row->id }}"
                                class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>