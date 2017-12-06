<!DOCTYPE html>
<html>
<head>
<meta name = "viewport" content = "width = device-width"/>
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="/o2assetl/css/application.min.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="wrapper">
    <span class="loader"></span>

    <header>
      <div class="logo">
        <h1>tap tap app</h1>
      </div>
      <div class="trajet">
        <span class="img"></span>
        <span class="text"></span>
      </div>
      <div class="driver">
        <span class="img"></span>
        <span class="text"></span>
      </div>
    </header>

    <!-- section home -->
    <section id="home" class="enabled">
      <button type="button" class="btn" id="startTaptap">demarrer</button>
      <button type="button" class="btn" id="collecter">collecter</button>
    </section>


    <!-- section trajet formulaire -->
    <section id="trajet-form" class="disabled">
      <form id="AddTrajetForm">
      <label for='inspecteur'>Inspecteur</label>
      <input type=text name="inspecteur" id="inspecteur" value="" >

      <label for='parcours'>Parcours</label>
      <select name="parcours" id="parcours">
        <option value="802">802</option>
        <option value="920">920</option>
      </select>


      <label for='depart'>Départ</label>
      <input type="text" name="depart" value="" id="depart">

      <button type="button" id="addTrajet">Ajouter</button>

      </form>
</section>


    <!-- section trajet lancé -->
    <section id="trajet-lance" class="disabled">

      <div class="">
        <p>Votre trajet est lance</p>

        <p>Utilisez le bouton <span class="endTrajet">Fin</span> pour mettre fin au trajet une fois a desttintion.</p>
      </div>


      <div class="">
        <p> Il n'y a personne a bord pour l'instant</p>

        <p> Utiliser le bouton <span> + </span> pour ajouter des passagers.</p>

        <button type="button"> + </button>

      </div>
      <button type="button"> - </button>


    </section>


    <!-- section Ajouter passenger without detail -->
    <section id="addPassengerGlobal" class="disabled">

      <div class="">
        <p class="on-board">A bord</p>

        <p> Le vehicule est vide.</p>

      </div>

      <div class="">

        <div class="">
          <p> Nombre de passager a ajouter</p>
          <p> annuler </p>
          <form>

          <div class="big-div">
            <label for="enfant">Indiquez le nombre de passagers a ajouter</label>
            <div>
              <span class="minus disabled" id="minus_nbPassenger"></span>
              <input type="text" name="nbPassenger" id="nbPassenger" value="0" min="0">
              <span class="plus" id="plus_nbPassenger"></span>
            </div>
          </div>

          <button type="button" name="saveNbPassenger" id="saveNbPassenger">Confirmer</button>

        </form>
        </div>
      </div>


    </section>


    <!-- section list on board passenger without detail -->
    <section class="list-view disabled" id="passenger-list-view" >
      <div class="container list">
        <ul id="passenger-list-without-detail">

        </ul>
      </div>
    </section>

    <!-- section passenger detail form -->


    <!-- section list passenger with detail -->
    <section id="form-section" class="disabled">
      <form id="AddPassengerForm">
        <fieldset>
          <legend>Sexe</legend>
          <div class="small-div">
            <label for="homme">Homme</label>
            <input type="radio" name="sexe" id="homme" value="homme">
              <div class="check"><div class="inside"></div></div>
          </div>
          <div class="small-div">
            <label for="femme">Femme</label>
            <input type="radio" name="sexe" id="femme" value="femme">
              <div class="check"><div class="inside"></div></div>
          </div>

          <div class="error" id="error-sexe">Vous devez renseigner un sexe</div>
        </fieldset>


        <fieldset>
          <legend>Age (requis)</legend>
          <label for="17-et-moins">17 ans et -</label>
          <input type="radio" name="age" id="17-et-moins" value="17-et-moins">

          <label for="18-24">18-24 ans</label>
          <input type="radio" name="age" id="18-24" value="18-24">

          <label for="25-34">25-34 ans</label>
          <input type="radio" name="age" id="25-34" value="25-34">
          <br>


          <label for="35-44">35-44 ans</label>
          <input type="radio" name="age" id="35-44" value="35-44">

          <label for="45-54">45-54 ans</label>
          <input type="radio" name="age" id="45-54" value="45-54">

          <label for="55-64">55-64 ans</label>
          <input type="radio" name="age" id="55-64" value="55-64">
          <br>


          <label for="65-et-plus">65 et +</label>
          <input type="radio" name="age" id="65-et-plus" value="65-et-plus">

          <div class="error" id="error-age">Vous devez renseigner un age</div>
        </fieldset>


        <fieldset>
        <legend>Avec</legend>
        <div class="grid-4">

            <div class="big-div">
              <label for="enfant">Enfant</label>
              <div>
                <span class="minus disabled" id="minus_enfant"></span>
                <input type="text" name="enfant" id="enfant" value="0" min="0">
                <span class="plus" id="plus_enfant"></span>
              </div>
            </div>

            <div class="big-div">
              <label for="valise">valise</label>
              <div>
                <span class="minus disabled" id="minus_valise"></span>
                <input type="text" name="valise" id="valise" value="0" min="0">
                <span class="plus" id="plus_valise"></span>
              </div>
            </div>

            <div class="big-div">
              <label for="animal">animal</label>
              <div>
                <span class="minus disabled" id="minus_animal"></span>
                <input type="text" name="animal" id="animal" value="0" min="0">
                <span class="plus" id="plus_animal"></span>
              </div>
            </div>

          </div>
        </fieldset>

        <input type="hidden" name="currentId" id="currentId" value="">
        <button type="button" class="submit-button" id="updatePassengerOnBoard">Update</button>
      </form>
    </section>


    <!-- section remove passenger / take off -->
    <section id="passenger-list-debarquement" class="disabled"></section>

    <!-- section list des passenger a board -->

    <!-- section statistique  -->

    <!-- section destination final -->


    <section id="on-board" class="disabled">

      <h3> A bord </h3>
      <ul id="allPassengerOnBoard">

      </ul>


    </section>

  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="/o2assetl/js/application.min.js"></script>
</body>

</html>
