<?= $this->extend('layouts/app'); ?>
<?= $this->section('content'); ?>

<!-- Dibuat oleh : Nurtyasto Hadi -->

<style>

    .card-custom{
        border: none;
        border-radius: 20px;
        overflow: hidden;
    }

    .header-edit{
        background: linear-gradient(to right, #f6c23e, #dda20a);
        color: white;
        padding: 20px;
    }

    .header-edit h3{
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
    <div class="header-edit">

        <h3>Edit Data Buku</h3>

        <p class="mb-0">
            Silahkan ubah data buku perpustakaan
        </p>

    </div>

    <!-- Body -->
    <div class="card-body p-4">
        <form action="/books/update/<?= $book['id']; ?>" method="post">
            <div class="mb-3">
                <label class="form-label">
                    Title
                </label>
                <input type="text" name="title" class="form-control" value="<?= $book['title']; ?>" required>

            </div>

            <div class="mb-3">
                <label class="form-label">
                    Author
                </label>
                <input type="text" name="author" class="form-control" value="<?= $book['author']; ?>" required>

            </div>

            <div class="mb-3">
                <label class="form-label">
                    Publisher
                </label>
                <input type="text" name="publisher" class="form-control" value="<?= $book['publisher']; ?>" required>

            </div>

            <div class="mb-4">
                <label class="form-label">
                    Year
                </label>
                <input type="year" name="year" class="form-control" value="<?= $book['year']; ?>" required>

            </div>

            <!-- Button -->
            <div class="d-flex justify-content-between">

                <a href="/books" class="btn btn-secondary btn-custom">
                    Kembali
                </a>

                <button type="submit" class="btn btn-warning btn-custom text-white">
                    Update Buku
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