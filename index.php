<?php

require_once __DIR__ . '/header.php';

require_once __DIR__ . '/data.php';

?>
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
