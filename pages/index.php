<?php
    lib\Page::getInstance()->setTitle('Accueil / Login');
    
    $contact = \lib\Config::getInstance('general')->get('contact');
?><header>
    <h1>
        🍋
        Citron Telecom
    </h1><?php include ROOTDIR.'/fragments/menu.php'; ?>
</header>
<main>
    <aside>
        <h2>
            Zone RH
        </h2>
        <p>
            Pour obtenir vos accès,
            contactez un administrateur du système:
            <a href="<?php echo htmlspecialchars($contact['mail']?? ''); ?>">
                <?php echo htmlspecialchars($contact['name']?? ''); ?>
            </a>
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