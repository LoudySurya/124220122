<?php
include 'login_asset.php';
 ?>
<body>
  <div class="container">
    <div class="row justify-content-center">
        <article class="card col-sm-4 bg-light" >
            <div class="card-body bg-light" >
                <h4 class="card-title text-center"><i class="fa fa-users"></i> Login Mahasiswa</h4>
                <hr>
                <p class="text-success text-center" id="p1">Selamat Datang Mahasiswa</p>
                <form id="login" name="login" method="post" action="proses-login.php" enctype="multipart/form-data">
                    <div class="form-group" >
                        <div class="input-group">
                            <input name="username" id="username" class="form-control" placeholder="Username" type="text" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input class="form-control" name="password" id="password" placeholder="Password" type="password" required="">
                        </div>
                    </div>
                    <hr>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-info btn-block" name="login" id="button" type="submit"><i class="fa fa-lock"></i> LOGIN </button>
                    </div>
                    </div>
                </form>
            </article>
        </div>
    </div>
</body>
</html>
