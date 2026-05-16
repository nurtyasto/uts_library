<!-- Dibuat oleh : Nurtyasto Hadi -->

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Library App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background: linear-gradient(to right, #4e73df, #224abe);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .card-custom{
            border: none;
            border-radius: 20px;
            overflow: hidden;
        }

        .header{
            background: #224abe;
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1{
            font-weight: bold;
            margin-bottom: 10px;
        }

        .header h4{
            opacity: 0.9;
        }

        .table th{
            width: 35%;
            background-color: #f8f9fa;
        }

        .btn-custom{
            background-color: #224abe;
            color: white;
            border-radius: 10px;
            padding: 10px 25px;
            font-weight: 600;
        }

        .btn-custom:hover{
            background-color: #1b3c96;
            color: white;
        }

        .footer-text{
            font-size: 14px;
            color: gray;
            margin-top: 20px;
        }

    </style>

</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-custom shadow-lg">

                <div class="header">
                    <h1>WEBSITE PERPUSTAKAAN</h1>
                    <h4>UTS Pemrograman Web Enterprise</h4>
                </div>

                <div class="card-body p-5">
                    <table class="table table-bordered align-middle">
                        <tr>
                            <th>Nama Website</th>
                            <td>Library App</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>Nurtyasto Hadi</td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td>2402600036</td>
                        </tr>
                        <tr>
                            <th>Program Studi</th>
                            <td>Sistem Teknologi Informasi</td>
                        </tr>
                    </table>

                    <div class="text-center mt-4">
                        <a href="/books" class="btn btn-custom btn-lg">
                            Masuk ke CRUD Books
                        </a>
                    </div>

                    <div class="text-center footer-text">
                        Dibuat oleh : <b>Nurtyasto Hadi</b>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>