<?php view('partials/head.php') ?>
<?php view('partials/nav.php') ?>
<?php view('partials/banner.php', ['heading' => $heading]) ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach($notes as $note) : ?>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                    <li><?= htmlspecialchars($note['body']) ?></li>
                </a>    
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/notes/create" class="text-green-500 hover:underline">Create Note</a>
        </p>
    </div>
</main>

<?php view('partials/footer.php') ?>