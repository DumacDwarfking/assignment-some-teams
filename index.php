<?php

require_once __DIR__ . '/header.php';

require_once __DIR__ . '/data.php';

?>
<nav>
    <a href="index.php">
        <p id="siteName">Team Tracker</p>
    </a>
    <div id="navDiv">
        <a href="about.php">
            <p class="navlink">About</p>
        </a>
        <a href="">
            <p class="navlink">Contact</p>
        </a>
    </div>
</nav>
<main>
    <?php

    foreach ($teams as $name => $team) {
    ?>
        <a class="teamContainer" href="<?= $team['url'] ?>">
            <div>
                <h2 class="teamName"><?= $name ?></h2>
                <img src="<?= $team['logo'] ?>" class="logo">
                <ul>
                    <li>
                        <p class="containerText">
                            <b>League: </b>
                            <?= $team['league'] ?>
                        </p>
                    </li>
                    <li>
                        <p class="containerText">
                            <b>City: </b>
                            <?= $team['city'] ?>
                        </p>
                    </li>
                    <li>
                        <p class="containerText">
                            <b>Group: </b>
                            <?= $team['group'] ?>
                        </p>
                    </li>
                    <li>
                        <p class="containerText">
                            <b>UEFA ranking: </b>
                            <?= $team['uefa-coefficient-ranking'] ?>
                        </p>
                    </li>
                </ul>
            </div>
        </a>
    <?php
    }

    ?>
</main>
<?php

require_once __DIR__ . '/footer.php';
