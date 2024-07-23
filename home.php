<?php
$sql = "SELECT idjudul, judul, deskripsi FROM artikel";
$result = $conn->query($sql);

$artikel = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $deskripsi = $row['deskripsi'];
        $kata = explode(' ', $deskripsi);
        if (count($kata) > 10) {
            $kata = array_slice($kata, 0, 20);
            $deskripsi = implode(' ', $kata) . '...';
        }
        $row['deskripsi'] = $deskripsi;
        $artikel[] = $row;
    }
}
?>
<?php foreach ($artikel as $item) : ?>
    <div class="my-4">
        <div class="font-bold text-teal-900 mb-2">
            <a href="artikel.php?<?php echo urlencode($item['idjudul']); ?>" class=""><?php echo htmlspecialchars($item['judul']); ?></a>
        </div>
        <div class="text-gray-700 mb-2">
            <?php echo htmlspecialchars($item['deskripsi']); ?>
        </div>
        <div class="bg-green-400 w-fit rounded-lg">
            <a href="artikel.php?<?php echo urlencode($item['idjudul']); ?>" class="p-1">Baca</a>
        </div>
        <br>
        <hr>
    </div>
<?php endforeach; ?>