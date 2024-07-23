<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'kopi');

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Jika ID artikel ada di URL, ambil datanya
if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);

    $result = $conn->query("SELECT * FROM artikel WHERE id = '$id'");
    $article = $result->fetch_assoc();

    if (!$article) {
        die("Artikel tidak ditemukan.");
    }
} else {
    die("ID artikel tidak ditemukan.");
}

// Proses form jika metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $conn->real_escape_string($_POST['id']);
    $idjudul = $conn->real_escape_string($_POST['idjudul']);
    $judul = $conn->real_escape_string($_POST['judul']);
    $deskripsi = $conn->real_escape_string($_POST['deskripsi']);
    $konten = $conn->real_escape_string($_POST['konten']);

    $sql = "UPDATE artikel SET idjudul='$idjudul', judul='$judul', deskripsi='$deskripsi', konten='$konten' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Artikel berhasil diperbarui.');
        window.location.href = 'index.php?page=artikel';
      </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Edit Artikel</h1>
    <form action="" method="post" class="bg-white p-6 rounded shadow-md">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($article['id']); ?>">
        <div class="mb-4">
            <label for="idjudul" class="block text-gray-700 font-bold mb-2">ID Judul:</label>
            <input type="text" id="idjudul" name="idjudul" value="<?php echo htmlspecialchars($article['idjudul']); ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="judul" class="block text-gray-700 font-bold mb-2">Judul:</label>
            <input type="text" id="judul" name="judul" value="<?php echo htmlspecialchars($article['judul']); ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi:</label>
            <input id="deskripsi" name="deskripsi" value="<?php echo htmlspecialchars($article['deskripsi']); ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="konten" class="block text-gray-700 font-bold mb-2">Konten:</label>
            <textarea name="konten" id="konten" rows="8" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required><?php echo htmlspecialchars($article['konten']); ?></textarea>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-indigo-600 text-white font-bold py-2 px-4 rounded hover:bg-indigo-500 focus:outline-none focus:shadow-outline">Update</button>
        </div>
    </form>
</div>

<script src="https://cdn.tiny.cloud/1/jvb6ex4pqxvnaitiozgfavawguidvf01oywctbj04am05w3n/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#konten',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [{
                value: 'First.Name',
                title: 'First Name'
            },
            {
                value: 'Email',
                title: 'Email'
            },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });

    document.querySelector('form').addEventListener('submit', function() {
        tinymce.triggerSave();
    });
</script>