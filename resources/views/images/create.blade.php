<!-- resources/views/images/create.blade.php -->
 <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>メインページ</title>
            <!-- Fonts -->
            <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="{{ 'css/app.css' }}">
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        </head>
        <body class="antialiased">
<form action="{{ route('images.store') }}" method="post" enctype="multipart/form-data">    @csrf

    <label for="user_id">User:</label>
    <select name="user_id" id="user_id">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>

    <label for="category_id">Category:</label>
    <select name="category_id" id="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <label for="images">Images:</label>
    <input type="file" name="images[]" multiple accept="image/*">

    <button type="submit">Upload Images</button>
</form>
</body>
</head>
</html>