<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="font-bold text-xl leading-6 text-gray-900">Artikel</h1>
        </div>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <a href="?page=artikel&action=tambah" class="block rounded-md bg-indigo-600 px-3 py-2 text-center font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Tambah
            </a>
        </div>
    </div>
    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left font-semibold text-gray-900 sm:pl-6">No</th>
                                <th scope="col" class="px-3 py-3.5 text-left font-semibold text-gray-900">ID Judul</th>
                                <th scope="col" class="px-3 py-3.5 text-left font-semibold text-gray-900">Judul</th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6"> <span class="sr-only">Edit</span> </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            <?php
                            $i = 1;
                            $sql = "SELECT * FROM artikel ORDER BY id ASC";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                $judul = $row['judul'];
                                $kata = explode(' ', $judul);
                                if (count($kata) > 6) {
                                    $kata = array_slice($kata, 0, 6);
                                    $judul = implode(' ', $kata) . '...';
                                }
                            ?>
                                <tr>
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 font-medium text-gray-900 sm:pl-6"><?php echo $i++; ?></td>
                                    <td class="whitespace-nowrap px-3 py-4 text-gray-900"><?php echo $row['idjudul']; ?></td>
                                    <td class="whitespace-nowrap px-3 py-4 text-gray-900"><?php echo htmlspecialchars($judul); ?></td>
                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right font-medium sm:pr-6">
                                        <a href="?page=artikel&action=update&id=<?php echo $row['id']; ?>" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="?page=artikel&action=hapus&id=<?php echo $row['id']; ?>" class="text-indigo-600 hover:text-indigo-900">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>