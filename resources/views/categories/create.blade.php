<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
</head>
<body>
<div class="demo form-bg" style="background: linear-gradient(135deg, #291F22, #D83F58);">
    <div class="container" style="height: 1000px;">
        <div style="justify-content: center; align-items: center; text-align: center; margin-right: -15px; margin-left: -15px; display: flex;">
            <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                <div class="form-container">
                    <form action="{{ route('categories.store') }}" class="form-horizontal" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>
                                Название
                                <input class="form-label" type="text" name="name" placeholder="название поста" required>
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                Постер
                                <input class="form-label" type="file" name="poster" id="poster" required>
                            </label>
                        </div>
                        <button class="btn signup" type="submit">
                            <span>Сохранить</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>

