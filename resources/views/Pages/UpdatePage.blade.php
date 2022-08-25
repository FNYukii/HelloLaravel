<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update - Hello Laravel</title>
  <link rel="stylesheet" href="../styles/style.css">
</head>
<body>

  <x-header/>

  <main>
    <div class="large-container">
      <h2>Update</h2>

      <form action="{{ route('updateComment') }}" method="post">
        @csrf
        <input name="id" value="{{ $comment->id }}" type="hidden">
        <textarea type="text" name="content" placeholder="コメント">{{ $comment->content }}</textarea>

        <button type="submit">投稿</button>
      </form>
    </div>
  </main>

</body>
</html>