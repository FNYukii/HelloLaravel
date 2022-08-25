<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete - Hello Laravel</title>
  <link rel="stylesheet" href="../styles/style.css">
</head>
<body>

  <x-header/>

  <main>
    <div class="large-container">
      <h2>Delete</h2>

      <p>{{ $comment->content }}</p>

      <form action="{{ route('deleteComment') }}" method="post">
        @csrf
        <input name="id" value="{{ $comment->id }}" type="hidden">
        <button type="submit">削除</button>
      </form>
    </div>
  </main>

</body>
</html>