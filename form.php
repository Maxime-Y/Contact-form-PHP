<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulaire de contact</title>
</head>

<body>

    <h1>Formulaire de contact</h1>

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
    </form>

</body>

</html>





