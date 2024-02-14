<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Посты</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style-posts.css') }}">
</head>
<body>
<div class="demo form-bg">
    <div class="container">
        <div class="row">
            <div class="row-1 col-md-2 col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                <div class="form-container">
                    <h1 class="center">Категория постов</h1>
                    <form action="{{ route('posts.store') }}" class="form-horizontal" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>
                                <span class="title-span">Название</span>
                                <input class="form-control" type="text" name="name" placeholder="Название поста"
                                       required>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <span class="title-span">Описание</span>
                                <input class="form-control" type="text" name="description" placeholder="Описание поста">
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <span class="title-span">Содержание</span>
                                <textarea class="form-control"
                                          style="height: 90px;"
                                          name="content" id="content" cols="30" rows="10"
                                          required></textarea>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <span class="title-span">Постер</span>
                                <input class="form-control" type="file" name="poster" id="poster" required>
                            </label>
                        </div>
                        <label>
                            <span class="title-span">Категория</span>
                            <select name="category_ids[]" id="category_ids" multiple>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </label>

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
