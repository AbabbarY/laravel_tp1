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
    

  <div class="container p-5">
    <p class="text-center fw-bold"> Contact </p>
    <form action="{{ route('merci') }}" method="POST">
        @csrf
        <input type="text" name="nom" placeholder="nom" class="form-control m-3"  required/>
        <input type="email" name="email" placeholder="email" class="form-control m-3"  required/>
        <textarea placeholder="message" name="message" class="form-control m-3" required></textarea>
        <input type="submit" value="Envoyer" class="btn btn-success" />
    </form>

  </div>



</body>

</html>