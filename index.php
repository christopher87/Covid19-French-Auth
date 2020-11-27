<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Générateur attestation Covid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.png">
    <style>
        .form-group {
            margin: 10px 0;
        }
        .form-group label {
            display: block;
        }
        #generation-link {
            margin: 20px 0;
        }
        #my-data {
            margin: 20px 0;
        }
        #my-data a {
            color: #000;
        }

        @media (max-width: 600px) {
            .form-group input,
            .form-group select {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div>
        <h2>
            Créer votre lien personnalisé
        </h2>

        <p>
            Remplissez le formulaire, et sauvegardez le lien généré qui vous sera proposé après validation.
            <br>
            A chaque lancement de ce lien, cela vous générera une attestation avec vos informations, à date et heure du moment.
        </p>

        <p>
            Le lien du PDF étant temporaire, il est vivement conseillé de sauvegarder le PDF généré sur votre téléphone ou sur votre ordinateur.
        </p>

        <form id="form-profile">
            <div class="form-group">
                <label for="first-name">
                    Prénom
                </label>
                <input type="text" id="first-name" name="firstname" autocomplete="given-name" placeholder="Jean" aria-labelledby="field-firstname-label" required autofocus>
            </div>
            <div class="form-group">
                <label for="last-name">
                    Nom
                </label>
                <input type="text" id="last-name" name="lastname" autocomplete="family-name" placeholder="Dupont" aria-labelledby="field-lastname-label" required>
            </div>
            <div class="form-group">
                <label for="birthdate">
                    Date de naissance
                </label>
                <input type="text" id="birthdate" name="birthday" autocomplete="bday" placeholder="01/01/1970" maxlength="10" aria-labelledby="field-birthday-label" required>
            </div>
            <div class="form-group">
                <label for="birth-place">
                    Lieu de naissance
                </label>
                <input type="text" id="birth-place" name="lieunaissance" aria-labelledby="field-lieunaissance-label" placeholder="Lyon" required>
            </div>
            <div class="form-group">
                <label for="address">
                    Adresse
                </label>
                <input type="text" id="address" name="address" autocomplete="address-line1" aria-labelledby="field-address-label" placeholder="999 avenue de france" required>
            </div>
            <div class="form-group">
                <label for="city">
                    Ville
                </label>
                <input type="text" id="city" name="town" autocomplete="address-level1" aria-labelledby="field-town-label" placeholder="Paris" required>
            </div>
            <div class="form-group">
                <label for="address">
                    Code postal
                </label>
                <input type="number" min="00000" max="99999" id="post-code" name="post-code" autocomplete="zipcode" minlength="4" maxlength="5" aria-labelledby="field-zipcode-label" placeholder="75001" required>
            </div>
            <div class="form-group">
                <label for="motive">
                    Raison
                </label>
                <select id="motive" name="motive" required>
                    <option value="">Sélectionnez une raison...</option>
                    <option value="travail">Travail</option>
                    <option value="achats_culturel_cultuel">Achats</option>
                    <option value="enfants">Enfants</option>
                    <option value="sport_animaux">Sortie / Sport / Animaux</option>
                    <option value="sante">Santé</option>
                    <option value="famille">Famille</option>
                    <option value="handicap">Handicap</option>
                    <option value="convocation">Convocation</option>
                    <option value="missions">Missions</option>
                </select>
            </div>
        </form>
        <button onclick="refreshData()">Valider</button>

        <div id="my-data" style="display: none;">
            <a href="#">Oublier mes données <small>(sauvegardées au sein du navigateur)</small></a>
        </div>

        <div id="generation-link" style="display: none;">
            Votre lien :
            <a href="generate.html"></a>
        </div>

        <p>
            <small>
                Aucune données n'est enregistrée ni exploitée.
                <a href="https://github.com/christopher87/Covid19-French-Auth" target="_blank">github</a>.
            </small>
        </p>
    </div>
</body>
<script src="demo.js?<?php echo date('YmdHis'); ?>"></script>
</html>
