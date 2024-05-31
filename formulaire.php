<?php require __DIR__ . "/public/header.html.php"?>

<main>
    <div class="content">
        <section>
            <div id="h1">
                <h1>Formulaire</h1>
            </div>
            <form action="">
                <div class="class1">
                    <div>
                        <label for="nickname" required>Pseudo*</label>
                        <input type="text" id="nickname">
                    </div>
                    <div>
                        <label for="name">Prénom</label>
                        <input type="text" id="name" placeholder="Taper votre prénom">
                    </div>
                    <div>
                        <label for="Password">Mot de passe</label>
                        <input type="password" id="Password" name="Password">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div>
                        <label for="cv">CV</label>
                        <input type="file" id="cv" name="cv">
                    </div>
                </div>
                <div>
                    <div class="class2">
                        <label for="fruit">Quels sont vos fruits préférés?</label>
                        Orange<input type="checkbox" name="orange" id="fruit">
                        Fraise<input type="checkbox" name="strawberry" id="fruit">
                        Poire<input type="checkbox" name="pear" id="fruit">
                    </div>
                </div>
                <div>
                    <section class="class3">
                        <div>
                            <label for="zipcode">Code postal</label>
                            <input type="zipcode" id="zipcode" name="zipcode">
                        </div>
                        <div>
                            <label for="message" class="message">Message</label>
                            <textarea id="message" name="message" rows="5" cols="25"></textarea>
                        </div>
                    </section>
                </div>
                    <div>
                    <input type="submit" value="Envoyer">
                    <input type="reset" value="Annuler">
                    </div>
            </form>
        </section>
    </div>
</main>

<?php include "public/footer.html.php"?>