<?php
    lib\Page::getInstance()->setTitle('Accueil / Login');
?><header>
    <h1>
        🍋
        Citron Telecom
    </h1>
</header>
<main>
    <aside>
        <h2>
            Zone RH
        </h2>
        <p>
            Pour obtenir vos accès,
            contactez un administrateur du système:
            <a href="mailto:contact@baggio.fr">M. Chassel</a>
        </p>
    </aside>
    <section>
        <form method="post">
            <fieldset>
                <legend>Connexion</legend>
                <input type="text" name="login" placeholder="Identifiant" />
                <input type="password" name="pwd" placeholder="Mot de passe" />
                <input type="submit" name="submitLogin" value="Connexion" />
            </fieldset>
        </form>
    </section>
</main>