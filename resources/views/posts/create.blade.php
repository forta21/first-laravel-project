<form action="{{route('posts.store')}}" method="post">
    @csrf
    <label>
        Название
    <input type="text" name="name" placeholder="название поста">
    </label>

    <label>
        Описание
        <input type="text" name="description" placeholder="описание поста">
    </label>

    <label>
        Содержимое
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </label>

    <button type="submit">
        <span>Сохронить</span>
    </button>
</form>
