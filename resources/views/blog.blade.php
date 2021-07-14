<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Blog</title>
</head>

<body style="background: lightgray">
    <h2>Basic HTML Table</h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('blog.create') }}" class="btn btn-md btn-success mb-3">TAMBAH BLOG</a>
                        <table class="table table-bordered" style="Swidth:100%">
                            <thead>
                                <tr>

                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blog as $value)
                                    <tr>
                                        <td class="text-center">
                                            <img src="/storage/images/.{{ $value->image }}" class="rounded"
                                                style="width: 150px">
                                        </td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->content }}</td>
                                    </tr>

                                @endforeach

                            </tbody>

                        </table>
                        {{ $blog->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
