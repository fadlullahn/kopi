<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idjudul = $_POST['idjudul'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $konten = $_POST['konten'];

    $idjudul = $conn->real_escape_string($idjudul);
    $judul = $conn->real_escape_string($judul);
    $deskripsi = $conn->real_escape_string($deskripsi);
    $konten = $conn->real_escape_string($konten);

    $sql = "INSERT INTO artikel (idjudul, judul, deskripsi, konten) VALUES ('$idjudul', '$judul', '$deskripsi', '$konten')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Artikel berhasil ditambahkan.');
        window.location.href = 'index.php?page=artikel';
      </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Tambah Artikel</h1>
    <form action="" method="post" class="bg-white p-6 rounded shadow-md">
        <div class="mb-4">
            <label for="idjudul" class="block text-gray-700 font-bold mb-2">ID Judul:</label>
            <input type="text" id="idjudul" name="idjudul" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="judul" class="block text-gray-700 font-bold mb-2">Judul:</label>
            <input type="text" id="judul" name="judul" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi:</label>
            <input id="deskripsi" name="deskripsi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label for="konten" class="block text-gray-700 font-bold mb-2">Konten:</label>
            <textarea name="konten" id="konten">
            </textarea>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-indigo-600 text-white font-bold py-2 px-4 rounded hover:bg-indigo-500 focus:outline-none focus:shadow-outline">Tambah</button>
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