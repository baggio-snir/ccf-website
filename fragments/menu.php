<?php if(lib\Session::getInstance()->isLogged()) { ?><nav>
    <menu>
        <li>
            <a href="<?php echo \lib\Page::link('person'); ?>">Nouveau Contrat</a>
        </li>
        <li>
            <a href="<?php echo \lib\Page::link('contracts'); ?>">Employés</a>
        </li>
        <li>
            <a href="<?php echo \lib\Page::link('vacations'); ?>">Congés</a>
        </li>
        <li>
            <a href="<?php echo \lib\Page::link('money'); ?>">Bilan comptable</a>
        </li>
        <li>
            <a href="<?php echo lib\Page::link('logoff'); ?>">Déconnexion</a>
        </li>
    </menu>
</nav><?php } ?>