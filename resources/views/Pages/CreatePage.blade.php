<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create - Hello Laravel</title>
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>

  <x-header/>

  <main>
    <div class="large-container">
      <h2>Create</h2>

      <form action="{{ route('createComment') }}" method="post">
    
        @csrf
        <textarea type="text" name="comment" placeholder="コメント"></textarea>

        @error('tweet')
        <p style="color: red;">{{ $message }}</p>
        @enderror

        <button type="submit">投稿</button>
      </form>
    </div>
  </main>
  
</body>
</html>