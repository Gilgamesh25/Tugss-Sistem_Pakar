<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="SISTEM PAKAR DIAGNOSA PENYAKIT SAYUR ORGANIK">
    <link rel="icon" href="">

    <title>SISTEM PAKAR DIAGNOSA PENYAKIT SAYUR ORGANIK</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/justified-nav.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet"> <!-- Link to the custom CSS file -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Link to Google Fonts -->
</head>

<body>

    <div class="container-fluid p-0"> <!-- Full width container -->

        <?php include "header.php"; ?>

        <main role="main" class="container-fluid">

            <!-- Jumbotron -->
            <div class="jumbotron text-center">
                <h1 class="display-4">Selamat datang di website kami</h1>
                <p class="lead">Website ini merupakan sistem pendeteksi penyakit pada tumbuhan berdasarkan gejala. Dari gejala tersebut akan ada info terkait penyakit pada tanaman, penyebabnya, dan solusinya.</p>
                <p><a class="btn btn-lg btn-success" href="#" role="button">Mulai Mencoba</a></p>
            </div>
            
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Selamat datang di website kami</h2>
                    <p>Sayur organik ditanam dengan sistem pertanian alami tanpa bahan kimia. Tidak menggunakan bahan kimia dalam pemupukan, pembudidayaan, dan pengobatan, tetapi menggunakan bahan organik yang ramah lingkungan. Contohnya, pupuk kompos, pupuk kandang, pupuk hijau, limbah pabrik, rumah tangga, dan ternak.</p>
                    <br />
                    <p>Bagi mereka yang berbisnis atau bersenang-senang dengan pertanian, terutama sayur organik, jelas kita harus sangat memperhatikan kesehatan tanaman kita. Namun, kadang-kadang kita menemukan hama atau penyakit menyerang tanaman kita, yang membuat kita ingin segera menghubungi pakar penyakit tanaman untuk membantu kita mengetahui penyakit apa yang menyerang dan solusinya.</p>
                    <br />
                    <p>Jangan khawatir, kami menawarkan Sistem Pakar Diagnosa Penyakit Sayuran Organik untuk membantu Anda dengan masalah sayuran Anda. Aplikasi ini dirancang untuk mendiagnosa penyakit sayuran organik dengan cara yang sama seperti seorang pakar. Oleh karena itu, Anda tidak perlu pergi jauh untuk melihat pakar.</p>
                    <p><a class="btn btn-primary btn-lg" href="diagnosa.php" role="button">Cek Diagnosa &raquo;</a></p>
                </div>
            </div>

        </main>

        <!-- Modal Popup -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Selamat datang di sistem pakar gejala penyakit pada tanaman sayur.</p>
                        <p>Di aplikasi ini anda bisa mengetahui penyakit tumbuhan dengan gejala yang ditimbulkannya</p>
                        <table class="table">
                            <tr>
                                <td>Author</td>
                                <td colspan="2">: Fahrezi Auliasyafa</td>
                            </tr>
                            <tr>
                                <td>Mata kuliah</td>
                                <td colspan="2">: Kecerdasan Buatan</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal Popup -->

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>
</body>
</html>
