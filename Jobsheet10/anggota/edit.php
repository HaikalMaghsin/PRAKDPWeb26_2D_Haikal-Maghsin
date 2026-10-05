<?php
require __DIR__ . '/../includes/auth.php';
$page_title = "Edit Anggota";
require_once __DIR__ . '/../includes/session.php';
require __DIR__ . '/../includes/koneksi.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: list.php');
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM anggota WHERE id = :id");
$stmt->execute(['id' => $id]);
$anggota = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$anggota) {
    header('Location: list.php');
    exit;
}
include __DIR__ . '/../includes/header.php';
?>
        <section>
            <h2>Edit Anggota</h2>

            <?php if ($flash): ?>
                <p class="flash flash-<?php echo htmlspecialchars((string) $flash['type'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars((string) $flash['pesan'], ENT_QUOTES, 'UTF-8'); ?></p>
            <?php endif; ?>

            <form id="form-tambah" method="post" action="proses_edit.php">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars((string) $anggota['id'], ENT_QUOTES, 'UTF-8'); ?>">
                <p>
                    <label for="nama">Nama</label><br>
                    <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars((string) $anggota['nama'], ENT_QUOTES, 'UTF-8'); ?>" required>
                </p>
                <p>
                    <label for="no_anggota">No. Anggota</label><br>
                    <input type="text" id="no_anggota" name="no_anggota" value="<?php echo htmlspecialchars((string) $anggota['no_anggota'], ENT_QUOTES, 'UTF-8'); ?>" required>
                </p>
                <p>
                    <label for="alamat">Alamat</label><br>
                    <input type="text" id="alamat" name="alamat" value="<?php echo htmlspecialchars((string) $anggota['alamat'], ENT_QUOTES, 'UTF-8'); ?>">
                </p>
                <p>
                    <label for="no_hp">No. HP</label><br>
                    <input type="text" id="no_hp" name="no_hp" value="<?php echo htmlspecialchars((string) $anggota['no_hp'], ENT_QUOTES, 'UTF-8'); ?>">
                </p>
                <p>
                    <button type="submit">Update</button>
                </p>
            </form>
        </section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
