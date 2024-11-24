<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP MVC</title>
</head>
<body>
    <h1>Welcome to Simple PHP MVC Starter!</h1>
    
    <h2>Daftar Jurnal</h2>
    <ul>
        <?php foreach ($journals as $index => $journal) : ?>
            <li>
                <?= htmlspecialchars($journal->name) ?> (<?= htmlspecialchars($journal->publishedYear) ?>)
                <form action="" method="POST" style="display:inline;">
                    <input type="hidden" name="index" value="<?= $index ?>">
                    <button type="submit" name="delete" onclick="return confirm('Apakah Anda yakin ingin menghapus jurnal ini?');">Hapus</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Tambah Jurnal Baru</h2>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Nama Jurnal" required>
        <input type="text" name="year" placeholder="Tahun Publikasi" required>
        <button type="submit">Tambah Jurnal</button>
    </form>
</body>
</html>