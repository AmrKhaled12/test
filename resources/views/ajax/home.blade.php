<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Display</title>
</head>
<body>
<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Body</th>
        <th scope="col">Edit/Delete</th>
    </tr>
    </thead>
    <tbody>
    <a class="btn btn-success" href="" role="button">add post</a>
    <a class="btn btn-warning" href="" role="button">Delete All</a>
    @foreach($posts as $post)
        <tr>
            <td> {{$post->id}}</td>
            <td>{{$post->name}}</td>
            <td>{{$post->body}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('edit',encrypt( $post->id)) }}" role="button">Edit</a>
                <a class="btn btn-danger" href="" role="button">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
