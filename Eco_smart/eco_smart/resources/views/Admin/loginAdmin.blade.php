<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* CSS personnalisé pour centrer le contenu */
        .centered-form {
    margin: 15vh auto; 
    width: 50%; 
}
    </style>
</head>
<body>
<div class="bg-light w-50 rounded-5 text-center  centered-form">
    <h1>Connectez-vous</h1>

    <form action="{{route('adminInfo')}}" method="POST" class="m-5">
        @csrf
        <div class="mb-3">
            <input type="text" name="name" placeholder="Nom" required class="form-control rounded-5">
        </div>

        <div class="mb-3">
            <input type="password" name="password" placeholder="Mot de Pass" required class="form-control rounded-5">
        </div>
        <button type="submit" class="btn btn-success">Log in</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
