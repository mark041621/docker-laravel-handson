<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Attendances App</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
@foreach($attendances as $attendance)
  <p class="list-group-item">
    {{ $attendance->working_date }}
  </p>
@endforeach
</body>
</html>