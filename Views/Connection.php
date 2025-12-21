<div class="container">
    <form method="POST">
        <div class="login-header">
            <div>
                <label class="text" for="login">Adresse e-mail ou mobile</label>
                <br>
                <input class="text" name="login" placeholder="Votre login">
            </div>
            <div>
                <label class="text" for="password">Mot de passe</label>
                <br>
                <input class="text" name="password" placeholder="Votre mot de passe">
                <br>
                <a class="text header-link smaller" href=".">Informations de compte oubliées?</a>
            </div>
            <div class="input-group-3">
                <input class="text header-button" type="submit" value="Connexion">
            </div>
        </div>
    </form>
    <div class="registration-container">
        <p class="text">
            <span class="title-text">Inscription</span>
            <br/>
            <br/>
            <span class="subtitle-text">C'est gratuit (et ça le restera toujours)</span>
        </p>
        <form method="POST">
            <table>
                <tr>
                    <td>
                        <input class="registration-field" name="first-name" placeholder="Prénom" required>
                    </td>
                    <td>
                        <input class="registration-field" name="last-name" placeholder="Nom de famille" required>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <input class="registration-field-large" name="login" placeholder="Numéro de mobile ou email" required>
                    </th>
                </tr>
                <tr>
                    <th colspan="2">
                        <input class="registration-field-large" name="confirm-login" placeholder="Confirmer numéro de mobile ou email" required>
                    </th>
                </tr>
                <tr>
                    <th colspan="2">
                        <input class="registration-field-large" name="password" placeholder="Nouveau mot de passe" required>
                    </th>
                </tr>
            </table>
                <p  class="text section-title">Date de naissance</p></tr>
                <div>
                    <input class="number-input registration-field" name="birth-day" type="number" placeholder="Jour" min="1" max="31">
                    <select class="select-month" name="birth-month">
                        <option value="">Mois</option>
                        <?php    
                            $monthList = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
                            
                            for ($i = 0; $i < 12; $i++)
                            {
                                echo "<option value=". $i .">". $monthList[$i] ."</option>";
                            }

                        ?>
                    </select>

                    <input class="number-input registration-field" name="birth-year" type="number" placeholder="Année" min="1900" max="2050">
                    <a class="text other-link smaller" href=".">Pourquoi indiquer ma date de naissance?</a>
                </div>

                <div class="gender-form">
                    <span class="text">
                        <input type="radio" name="gender" value="F" required>
                        Femme
                    </span>
                    <span class="text">
                        <input type="radio" name="gender" value="M" required>
                        Homme
                    </span>
                </div>
                <div class="text smaller">
                    En cliquant sur Inscription, vous acceptez nos <a class="other-link" href=".">Conditions</a> et indiquez que vous avez lu notre <a href=".">Politique d'utilisation des données</a>, y compris notre <a class="other-link" href=".">Utilisation des cookies</a>. Vous pourrez recevoir des notifications par texto de la part de Facebook et pouvez vous désabonner à tout moment.
                </div>
                <br>
                <input class="register-button" type="submit" value="Inscription">
        </form>
    </div>
</div>