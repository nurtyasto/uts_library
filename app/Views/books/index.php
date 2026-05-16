<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>

<!-- Dibuat oleh : Nurtyasto Hadi -->

<style>

    .page-title{
        font-weight: bold;
        color: #224abe;
    }

    .card-custom{
        border: none;
        border-radius: 20px;
        overflow: hidden;
    }

    .table thead{
        background-color: #224abe;
        color: white;
    }

    .table tbody tr:hover{
        background-color: #f2f6ff;
        transition: 0.3s;
    }

    .btn-custom{
        border-radius: 10px;
        font-weight: 600;
        padding: 8px 18px;
    }

    .badge-year{
        background-color: #224abe;
        color: white;
        padding: 6px 12px;
        border-radius: 20px;
    }

</style>

<div class="card shadow-lg card-custom">
    <div class="card-body p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="page-title">
                    Data Buku Perpustakaan
                </h2>
                <p class="text-muted mb-0">
                    Sistem CRUD Buku - Library App
                </p>

            </div>

            <a href="/" class="btn btn-secondary btn-custom">
                Kembali
            </a>
        </div>

        <div class="mb-4">
            <a href="/books/create" class="btn btn-primary btn-custom">
                Tambah Buku
            </a>

        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="text-center">
                    <tr>
                        <th width="5%">No</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th width="10%">Year</th>
                        <th width="18%">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($books as $book): ?>
                    <tr>
                        <td class="text-center">
                            <?= $no++; ?>
                        </td>
                        <td>
                            <b><?= $book['title']; ?></b>
                        </td>
                        <td>
                            <?= $book['author']; ?>
                        </td>
                        <td>
                            <?= $book['publisher']; ?>
                        </td>
                        <td class="text-center">
                            <span class="badge-year">
                                <?= $book['year']; ?>
                            </span>
                        </td>

                        <td class="text-center">
                            <a href="/books/edit/<?= $book['id']; ?>" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="/books/delete/<?= $book['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data?')">
                                Hapus
                            </a>
                        </td>
                    </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>

        <div class="text-center text-muted mt-4">
            Dibuat oleh : <b>Nurtyasto Hadi</b>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>