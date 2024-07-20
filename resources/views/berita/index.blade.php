<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap 5 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      </head>
<body>
    <div class="container mt-2">
        <div class="card shadow">
            <div class="card-body">
                <h1>INI ADALAH BERITA</h1>
                <a href="">
                    <div class="btn btn-primary"> + Tambah</div>   
                </a>
                  
   

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">judul berita</th>
                        <th scope="col">konten berita</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $berita)
                      <tr>
                       
                        <td>{{ $berita->id }}</td>
                        <td>{{ $berita->judul_berita }}</td>
                        <td>{{ $berita->konten_berita }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

            </div>
        </div>
    </div>

   


    
</body>
</html>