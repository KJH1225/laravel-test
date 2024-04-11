<html>
  <head>
      @vite(['/resources/css/app.css', '/resources/js/app.js'])
    <title>Document</title>
  </head>
  <body class="bg-blue-300">
    <h1>글쓰기</h1>
    <form action="/articles" method="post">
      <!-- <input type="hidden" name="_token" value="<?= csrf_token(); ?>" /> -->
      @csrf
      <input type="text" name="content" id="content" />
      <input type="submit" id="save-button" value="저장" />
    </form>
  </body>
</html>