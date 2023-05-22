<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width-devicee-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <link rel="stylesheet" href="http://localhost/mahasiswa/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/mahasiswa/fontawesome/css/all.min.css">
  <style type="text/css">
  body {
    font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
    background-image: url(../asset/22.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
  }
  nav {
  width: 80%;
  margin: 0 auto;
  padding: 10px 0;
}
nav ul {
  list-style: none;
  text-align: center;
}
nav ul li {
  display: inline-block;
}
nav ul li a {
  display: block;
  padding: 15px;
  text-decoration: none;
  color: white;
  font-weight: 500;
  text-transform: uppercase;
  margin: 0 10px;
}
nav ul li a,
nav ul li a:after,
nav ul li a:before {
  transition: all .10s;
}
nav ul li a:hover {
  color: #4e4e4e;
}
nav.navbar{
    box-shadow: 0px 5px 0px #dedede;
}
nav.stroke ul li a {
  position: relative;
}
nav.stroke ul li a:after {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  width: 0%;
  content: '.';
  color: transparent;
  background: #aaa;
  height: 1px;
}
nav.stroke ul li a:hover:after {
  width: 100%;
}
    </style>
</head>
<body>
  <script src="http://localhost/mahasiswa/css/bootstrap.min.css"></script>
  <script src="http://localhost/mahasiswa/fontawesome/css/all.min.css"></script>
  <nav class="navbar navbar-expand-lg bg-dark">
   <a class="navbar-brand text-white" href="#"><i class="fas fa-book-reader text-white mr-2"></i>Data Mahasiswa </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <nav class="stroke">
    <ul class="nav nav-pills card-header-pills">
        <li class="nav-item">
          <a class="nav-link text-white active" href="daftar_mhs.php">Daftar Mahasiswa</a>
        </li>
    </ul>
    </nav>
      </div>
    <div class="navbar-right">
      <a href="logout.php?logout=true" onclick="return confirm('Yakin ingin Logout?')"><button class="btn btn-outline-danger"><i class="fas fa-sign-out-alt"></i>Logout</button></a>
   </div>
  </nav>
