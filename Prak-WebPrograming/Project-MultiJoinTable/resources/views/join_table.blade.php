<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>How to Join Table in Laravel 8 using Eloquent Model</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">    
            <br />
            <h1 class="text-center text-primary">Ini Merupakan Multi Join Table</h1>
            <br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Pulau</th>
                            <th>Provinsi</th>
                            <th>Kota</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $row->nama_pulau }}</td>
                                <td>{{ $row->nama_provinsi }}</td>
                                <td>{{ $row->nama_kota }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>