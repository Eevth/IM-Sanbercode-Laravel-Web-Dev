<!DOCTYPE html>
<html>
<head>
    <title>Categories</title>
</head>
<body>
    <h1>List Categories</h1>

    <a href="/categories/create">+ Tambah Category</a>

    <ul>
        @foreach ($categories as $category)
            <li>
                <strong>{{ $category->name }}</strong>
                <br>
                {{ $category->description }}

                <br>
                <a href="/categories/{{ $category->id }}">Detail</a> |
                <a href="/categories/{{ $category->id }}/edit">Edit</a>

                <form action="/categories/{{ $category->id }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
            <hr>
        @endforeach
    </ul>
</body>
</html>