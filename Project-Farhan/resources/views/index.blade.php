<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-hover">
        <tr>
            <th>idvideo</th>
            <th>judul</th>
            <th>creator</th>
            <th>rating</th>
            <th>viewer</th>
            @if (session()->get('status')=='admin')
            <th>action</th>
            @endif

            @if (session()->get('status')=='user')
            <th>action</th>
            @endif

        </tr>
        @foreach($farhanuas as $b)
        <tr>
            <td>{{ $b->idvideo }}</td>
            <td>{{ $b->judul }}</td>
            <td>{{ $b->creator }}</td>
            <td>{{ $b->rating }}</td>
            <td>{{ $b->viewer }}</td>
            @if (session()->get('status')=='admin')
            <td> <a href="/show/{{ $b->idvideo }}"> <button type="button" class="btn btn-success btn">Edit</button></a>
            <a  href="/hapus/{{ $b->idvideo }}"><button type="button" class="btn btn-danger btn">
                Hapus
            </button></a></td>
            @endif
            @if (session()->get('status')=='user')
            <td> <a href="/Tonton/{{ $b->idvideo }}"> <button type="button" class="btn btn-success btn">Tonton Video</button></a></td>
            @endif
            <!-- <td><video src="{{ Storage::url($b-> alamatvideo) }} " width="150" height="200"></td>  -->

        </tr>
        @endforeach
    </table>
</body>
</html>