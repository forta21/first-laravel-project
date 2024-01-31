<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label>
        Название
        <input type='text' name="name" placeholder="название поста">
    </label>
    <label>
       Описание
        <input type='text' name="description" placeholder="название поста">
    </label>
    <label>
        Содержание
       <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </label>

    <label>
        Категория
        <select name="category_ids" id="category_ids">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </label>

    <label>
        Постер
        <input type="file" name="poster" id="poster">
    </label>
    <button type="submit">
        <span>Сохранить</span>
    </button>
</form>
