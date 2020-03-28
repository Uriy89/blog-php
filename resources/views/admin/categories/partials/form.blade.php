<label for="">Статус</label>
<select class="form-control" name="published">
    @if (isset($category->id))
        <option value="0" @if ($category->published == 0) selected="" @endif> Не опубликованно</option>
        <option value="1" @if ($category->published == 1) selected="" @endif> Опубликованно</option>
    @else
        <option value="0"> Не опубликованно</option>
        <option value="1"> Опубликованно</option>
    @endif
</select>

<label for="">Наименование</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value="{{$category->title ?? ""}}" required>

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация" value="{{$category->slug ?? ""}}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="parent_id">
    <option value="0">-- без родитеьской категории --</option>
    @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr>

<input class="btn btn-primary" type="submit" value="Сохранить">



