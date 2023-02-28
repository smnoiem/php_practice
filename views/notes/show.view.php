<?php view('partials/head.php') ?>
<?php view('partials/nav.php') ?>
<?php view('partials/banner.php', ['heading' => $heading]) ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 hover:underline">Go back..</a>
        </p>
        <p><?= htmlspecialchars($note['body']) ?></p>

        <form action="" method="POST" class="mt-6">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <input type="hidden" name="method" value="delete">
            <button class="text-red-500 text-sm">Delete</button>
        </form>
    </div>
</main>

<?php view('partials/footer.php') ?>