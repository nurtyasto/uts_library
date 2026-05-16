<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>

<!-- Dibuat oleh : Nurtyasto Hadi -->

<style>

    .card-custom{
        border: none;
        border-radius: 20px;
        overflow: hidden;
    }

    .header-create{
        background: linear-gradient(to right, #1cc88a, #169b6b);
        color: white;
        padding: 20px;
    }

    .header-create h3{
        margin: 0;
        font-weight: bold;
    }

    .form-label{
        font-weight: 600;
        color: #224abe;
    }

    .form-control{
        border-radius: 10px;
        padding: 10px;
    }

    .btn-custom{
        border-radius: 10px;
        padding: 10px 20px;
        font-weight: 600;
    }

</style>

<div class="card shadow-lg card-custom">

    <!-- Header -->
    <div class="header-create">

        <h3>Tambah Data Buku</h3>

        <p class="mb-0">
            Silahkan tambahkan data buku perpustakaan
        </p>

    </div>

    <!-- Body -->
    <div class="card-body p-4">
        <form action="/books/store" method="post">
            <div class="mb-3">
                <label class="form-label">
                    Title
                </label>
                <input type="text" name="title" class="form-control" placeholder="Masukkan title buku" required>

            </div>

            <div class="mb-3">
                <label class="form-label">
                    Author
                </label>
                <input type="text" name="author" class="form-control" placeholder="Masukkan nama author" required>

            </div>

            <div class="mb-3">
                <label class="form-label">
                    Publisher
                </label>
                <input type="text" name="publisher" class="form-control" placeholder="Masukkan nama publisher" required>

            </div>

            <div class="mb-4">
                <label class="form-label">
                    Year
                </label>
                <input type="year" name="year" class="form-control" required>

            </div>

            <!-- Button -->
            <div class="d-flex justify-content-between">
                <a href="/books" class="btn btn-secondary btn-custom">
                    Kembali
                </a>

                <button type="submit" class="btn btn-success btn-custom">
                    Simpan Buku
                </button>

            </div>
        </form>
    </div>

    <!-- Footer -->
    <div class="card-footer text-center text-muted">
        Dibuat oleh : <b>Nurtyasto Hadi</b>
    </div>

</div>

<?= $this->endSection(); ?>