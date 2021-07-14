<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>create page</h1>
    <form>
        <div class="form-group">
            <label class="font-weight-bold">GAMBAR</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
            @error('image')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>

            @enderror
        </div>


        <div class="form-group">
            <label class="font-weight-bold">TITLE</label>
            <input type="text" name="title">
        </div>
        <div class="form-group">
            <label class="font-weight-bold">KONTEN</label>
            <textarea class="form-control " placeholder="masukkan konten">{{ old('content') }}</textarea>
        </div>
        </div>
    </form>
</body>

</html>
