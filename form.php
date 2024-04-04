<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Formulaire de contact</title>
</head>

<body>

    <!--<h1>Formulaire de contact</h1>

    <form action="thanks.php" method="post">
        <div>
            <label for="firstName">Prénom:</label>
            <input type="text" id="firstName" name="firstName" required>
        </div>
        <div>
            <label for="lastName">Nom:</label>
            <input type="text" id="name" name="lastName" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="phone">Téléphone:</label>
            <input type="phone" id="phone" name="phone" required>
        </div>
        <div>
            <label for="subject">Sujet:</label>
            <select id="subject" name="subject" required>
                <option value="question">Question</option>
                <option value="service après-vente">Service après-vente</option>
                <option value="réclamation">Réclamation</option>
            </select>
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>-->
    <form action="thanks.php" method="post">
    <div>
        <label for="name">Nom:</label>
        <input type="text" id="name" name="user_name" required>
    </div>
    <div>
        <label for="firstname">Prénom:</label>
        <input type="text" id="firstname" name="user_firstname" required>
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="user_email" required>
    </div>
    <div>
        <label for="phone">téléphone:</label>
        <input type="phone" id="phone" name="user_phone_number" required>
    </div>
    <div>
        <label for="subject">Subjet:</label>
        <select id="subject" name="user_subject" required>
            <option value="question">Question</option>
            <option value="issue">Problème</option>
            <option value="other">Autres</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message" required></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>
</body>

</html>





