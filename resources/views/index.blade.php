<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Test Perulangan!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <form class="mt-4 col-sm-6" method="post" action="/index">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Input Angka</label>
                    <input type="number" name="angka" class="form-control" required="" >
                    <div id="emailHelp" class="form-text">Input angka kelipatan 3 atau 5.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Input  Jumlah perulangan</label>
                    <input type="number" class="form-control" name="perulangan" required="">
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>