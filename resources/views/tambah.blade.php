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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">
    <title>pegawai</title>
</head>

<body>
    <h1 class="text-danger text-center m-5">tambah pegawai</h1>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="/tambah-data" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="nama" class="form-label">nama</label>
                          <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama">
                          <div id="nama" class="form-text">nama</div>
                        </div>
                        <div class="mb-3">
                            <label for="kelamin" class="form-label">kelamin</label>
                            <select id="kelamin" name="kelamin" class="form-select">
                              <option selected disabled>Kelamin</option>
                              <option value="L">Laki Laki</option>
                              <option value="P">Perempuan</option>
                            </select>
                          </div>
                        <div class="mb-3">
                          <label for="hp" class="form-label">hp</label>
                          <input type="number" name="hp" class="form-control" id="hp">
                        </div>
                        <div class="mb-3">
                          <label for="foto" class="form-label">foto</label>
                          <input type="file" name="foto" class="form-control" id="foto">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->


</body>

</html>
