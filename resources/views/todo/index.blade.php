<!DOCTYPE html>
<html lang="ch" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- {{$todos}} -->

    <form  action="/todo" method="post">
      {{csrf_field()}}
      <input type="text" placeholder="請輸入" name="title">
      <input type="submit" value="OK">
    </form>
    @foreach ($todos as $todo)
      <p>{{$todo->id .".".$todo->title}}</p>
    @endforeach
  </body>
</html>
