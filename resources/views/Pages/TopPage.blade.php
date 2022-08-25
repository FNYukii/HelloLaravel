<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello Laravel</title>
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>

  <x-header/>

  <main>
    <div class="large-container">
      <h2>Read</h2>

      <div class="comment-card-container">
        @foreach($comments as $comment)
          <div class="comment-card">
            <p>{{ $comment->content}}</p>
            <a href="/update/{{ $comment->id }}">Update</a>
            <a href="/delete/{{ $comment->id }}">Delete</a>
          </div>
        @endforeach
      </div>
    </div>
  </main>

</body>
</html>