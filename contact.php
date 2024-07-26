<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>King's Contact Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <img src="assets/images/logo.png" alt="logo" title="logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page"
              href="https://nategithub9.github.io/official-king-street-food/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="carte.html">Menu</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Infos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="notre_histoire.html">Notre histoire</a></li>
              <li><a class="dropdown-item" href="streets.html">Emplacements</a></li>
              <li><a class="dropdown-item" href="photo.html">Photos</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="contact.html">Contactez-nous</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="row">
        <!-- Contact Form-->
        <div class="col-md-6 mx-auto">
          <form action="contact_form_script.php" method="post">
            <div class="form-group">
              <label for="exampleInputLastName1">Nom</label>
              <input type="text" class="form-control" id="exampleInputLastName1" name="last_name"
                placeholder="Entrer votre Nom">
            </div>
            <div class="form-group">
              <label for="exampleInputFirstName1">Prénom</label>
              <input type="text" class="form-control" id="exampleInputFirstName1" name="first_name"
                placeholder="Entrer votre Prénom">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">E-mail</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                placeholder="Entrer votre E-mail">
              <small id="emailHelp" class="form-text text-muted">(Votre e-mail ne sera pas partagé.)</small>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Objet du message</label>
              <select class="form-control" name="subject">
                <option disabled selected>Choisissez votre objet</option>
                <option>Jobs</option>
                <option>Emplacements</option>
                <option>Presse</option>
                <option>Réclamation</option>
                <option>Suggestions</option>
                <option>Autres</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputMessage1">Message</label>
              <textarea type="text" class="form-control" id="exampleInputMessage1" name="message"
                placeholder="Entrer votre message"></textarea>
            </div>
            <button type="submit" class="btn btn-info"><i class="fas fa-check-circle"></i> Envoyer</button>
          </form>

        </div>
        <!-- Information du siège social-->
        <div class="col-md-6">
          <ul class="list-group">
            <li class="list-group-item disabled">Informations</li>
            <li class="list-group-item"><strong class="text-info">Adresse : </strong>24, Place Plasky,
              1030 Schaerbeek</li>
            <li class="list-group-item"><strong class="text-info">Téléphone : </strong>0487/90.32.55
            </li>
            <li class="list-group-item"><strong class="text-info">E-mail Info :
              </strong>contact@King-street-food.com</li>
            <li class="list-group-item"><strong class="text-info">E-mail Admin :
              </strong>admin@King-street-food.com</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3 bgfooter">© 2024 Copyright: <a
      href="https://nategithub9.github.io/official-king-street-food">King-street-food.com</a>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

</html>