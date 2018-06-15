<p></p>

<nav class="main-menu" role="navigation">
    <ul>
        <li class="main-menu__item <?= $page === "clients.php" ? "active" : "" ?>">
            <a href="/clients">
                <span class="icon icon-icon_user"></span>
                <div class="infos">
                    <h2>Clients</h2>
                    <span>Accédez à la liste de tous vos clients et à leurs coordonées</span>
                </div>
            </a>
        </li>
        <li class="main-menu__item <?= $page === "projects.php" ? "active" : "" ?>">
            <a href="/projects">
                <span class="icon icon-icon_list"></span>
                <div class="infos">
                    <h2>Projets</h2>
                    <span>Accédez à la liste de tous vos projets</span>
                </div>
            </a>
        </li>
        <li class="main-menu__item <?= $page === "invoices.php" ? "active" : "" ?>">
            <a href="/invoices">
                <span class="icon icon-icon_facture"></span>
                <div class="infos">
                    <h2>Facturation</h2>
                    <span>Accédez à la liste de tous vos clients et à leurs coordonées</span>
                </div>
            </a>
        </li>
        <li class="main-menu__item <?= $page === "company.php" ? "active" : "" ?>">
            <a href="/company">
                <span class="icon icon-icon_company"></span>
                <div class="infos">
                    <h2>Votre société</h2>
                    <span>Retrouvez toutes les informations relatives à votre société</span>
                </div>
            </a>
        </li>
        <li class="main-menu__item soon">
            <a>
                <span class="icon icon-icon_dashboard"></span>
                <div class="infos">
                    <h2>Tableau de bord <span class="soon-tag">Bientôt !</span></h2>
                    <span>Accédez à la liste de tous vos clients et à leurs coordonées</span>
                </div>
            </a>
        </li>
    </ul>
</nav>