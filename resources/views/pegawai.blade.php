<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--aos-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- bs -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!---->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">
    <title>pegawai</title>
    <style>
        .kotak {
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <h1 class="text-danger text-center m-5"> pegawai</h1>
    <div class="container">
        <div class="kanan-kiri d-flex flex-row justify-content-between m-3">
            <a href="/tambah"> <button type="button" class="btn btn-success">Tambah</button></a>

            <form class="d-flex" role="search" action="/pegawai" method="GET">
                <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <div class="row">
            <table class="table m-auto">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">kelamin</th>
                        <th scope="col">hp</th>
                        <th scope="col">foto</th>
                        <th scope="col">dibuat</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kelamin }}</td>
                            <td>{{ $item->hp }}</td>
                            <td><img style="width:50px;"src="{{ asset('fotopegawai/' . $item->foto) }}"></td>
                            <td>{{ $item->created_at->diffForHumans() }}</td>
                            <td>
                                <button class="btn btn-danger"
                                    onclick="confirmDelete('{{ $item->id }}')">Hapus</button>
                                <a href="tampil-edit/{{ $item->id }}"><button
                                        class="btn btn-primary">Edit</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $data->links('vendor.pagination.bootstrap-4') }}


        </div>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog"
        aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Hapus Data</h5>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-secondary btn" data-bs-dismiss="modal"
                        aria-label="Close">batal</button>
                    <form id="deleteForm" method="POST" action="">
                        @csrf
                        @method('POST')
                        <button type="submit" class="btn btn-danger">Ya</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sukses!</h5>

                </div>
                <div class="modal-body">
                    Data berhasil diubah.
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sukses!</h5>

                </div>
                <div class="modal-body">
                    Data berhasil dihapus.
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sukses!</h5>

                </div>
                <div class="modal-body">
                    Data berhasil ditambah.
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            if ('{{ session('berhasil') }}') {
                $('#exampleModal').modal('show');
                setTimeout(function() {
                    $('#exampleModal').modal('hide');
                }, 1000);
            }

            if ('{{ session('hapus') }}') {
                $('#hapusModal').modal('show');
                setTimeout(function() {
                    $('#hapusModal').modal('hide');
                }, 1000);
            }
            if ('{{ session('tambah') }}') {
                $('#tambahModal').modal('show');
                setTimeout(function() {
                    $('#tambahModal').modal('hide');
                }, 1000);
            }

        });

        function confirmDelete(id) {
            $('#deleteForm').attr('action', 'delete/' + id);
            $('#confirmDeleteModal').modal('show');
        }
    </script>

</body>

</html>
