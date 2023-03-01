<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    
    <div class="container">
        <p >Merci  <span class="fw-bold"> {{ $data->nom }} </span>  </p>
        <p>Email : <span class="fw-bold"> {{ $data->email }} </span> </p>
        <p>Votre Message : <span class="fw-bold"> {{ $data->message }} </span> </p>
        Retour a <a href="{{ Url('/') }}" class="link-secondary m-4"> L'accueil </a>
    </div>

</body>

</html>