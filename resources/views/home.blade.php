<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>list of books and names of authors</h2>
    <img src="../public/img/library.jpeg" alt="" class="">
    <ul>
        @foreach($books as $book)
            <li>{{ $book->title }} - {{ $book->author }}</li>
        @endforeach
    </ul>

</body>
</html>