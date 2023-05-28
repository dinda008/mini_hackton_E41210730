<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRUD LARAVEL 8</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Edit Data Pegawai</h1>

    <div class="container">
      
        <div class="row justify-content-center">
           <div class="col-8">
            <div class="card">
              <div class="card-body">
                <form action="/updatedata/{{ $data->id }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
                   </div>

                   <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <select class="form-select"  name="jeniskelamin" aria-label="Default select example">
                      <option selected>{{ $data->jeniskelamin }}</option>
                      <option value="laki laki">laki laki</option>
                      <option value="perempuan">perempuan</option>
                      
                    </select>
                   </div>

                   <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                    <input type="number"  name="notelepon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->notelepon }}">
                   </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
           </div>
        </div>
    </div>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>