<?php
require __DIR__ . '/resources/data.php';
require __DIR__ . '/includes/header.php';
?>

<main>
    <h1>Europa teams</h1>
    <p>Teams competing in the UEFA Women's Europa League.</p>

    <ul>
        <?php foreach ($teams as $teamName => $team): ?>
            <li>
                <img
                    src="<?= htmlspecialchars($team['logo_uefa'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="<?= htmlspecialchars($teamName, ENT_QUOTES, 'UTF-8') ?> logo"
                    width="80"
                    height="80">

                <h2><?= htmlspecialchars($teamName, ENT_QUOTES, 'UTF-8') ?></h2>

                <p>City: <?= htmlspecialchars($team['city'], ENT_QUOTES, 'UTF-8') ?></p>
                <p>League: <?= htmlspecialchars($team['league'], ENT_QUOTES, 'UTF-8') ?></p>
                <p>
                    UEFA coefficient ranking:
                    <?= htmlspecialchars((string) $team['uefa-coefficient-ranking'], ENT_QUOTES, 'UTF-8') ?>
                </p>
            </li>
        <?php endforeach; ?>
    </ul>
</main>

</body>

</html>