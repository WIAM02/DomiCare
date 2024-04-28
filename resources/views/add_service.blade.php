<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <title>Register</title>
    <link rel="stylesheet" href="/css/add_service.css">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Ajouter un Service </h2>
                    <form method="POST" action="/insert-route">
    <div class="input-group">
        <input class="input--style-2" type="text" placeholder="Métier" name="metier">
    </div>

    <div class="input-group">
        <input class="input--style-2" type="text" placeholder="Ville" name="ville">
    </div>

    <div class="input-group">
        <input class="input--style-2" type="text" placeholder="Type d'intervention" name="type_intervention">
    </div>

    <div class="input-group">
        <input class="input--style-2" type="text" placeholder="Prix d'intervention" name="prix_intervention">
    </div>

    <div class="input-group">
        <input class="input--style-2" type="text" placeholder="Disponibilité" name="disponibilite">
    </div>

    <div class="input-group">
        <input class="input--style-2" type="text" placeholder="Prix" name="prix">
    </div>

    <div class="input-group">
        <select class="input--style-2" name="domaine">
            <option disabled selected>Choisir un domaine</option>
            <option value="domaine1">Jardinage</option>
            <option value="domaine2">Plomberie</option>
            <option value="domaine3">Menage</option>
        </select>
    </div>

    <div class="p-t-30">
        <button class="btn btn--radius btn--green" type="submit">Submit</button>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>


</body>
</html>
