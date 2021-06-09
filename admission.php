<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions online- DPS Agra</title>
    <!-- CSS only -->
    <link href="./images/3dlogo.gif" rel="icon">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/admission.css" rel="stylesheet">
</head>
<body>
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <button onclick="shownav()" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="./">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Online admission</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <nav id="menucol">
  <div id="navbarCollapse">
        <ul class="navlist">
          <li class="nav-item">
            <a class="nav-link active" href="./">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Online admission</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<main class="flex-shrink-0">
<div class="container">
    <form action="./config/handle.php" method="post">
        
    <div class="row">
            <div class="col mb-4">
                <label>
                    <strong class="form-label">name</strong></label> : <input class="form-control" type="text" placeholder="name" name="name"></div>
        
        <div class="col mb-4">
            <label>
                <strong class="form-label">date of birth</strong></label> : <input class="form-control" type="date" placeholder="dob" name="dob"></div></div>
        
        <div class="row">
            <div class="col mb-4">
                <label>
                    <strong class="form-label">gender</strong></label> : <input class="form-control" type="text" placeholder="gender" name="gender"></div>
        
        <div class="col mb-4">
            <label>
                <strong class="form-label">grade</strong></label> : <input class="form-control" type="text" placeholder="grade" name="grade"></div></div>
        
        <div class="row">
            <div class="col mb-4">
                <label>
                    <strong class="form-label">academic year</strong></label> : <select name="year" class="form-select" aria-label="Default select example">
  <option value="2021" selected>2021-2022</option>
  <option value="2022">2022-2023</option>

</select></div>
        
        <div class="col mb-4">
            <label>
                <strong class="form-label">previous school</strong></label> : <input class="form-control" type="text" placeholder="school" name="school"></div></div>
        
        <div class="row">
            <div class="col mb-4">
                <label>
                    <strong class="form-label">mother</strong></label> : <input class="form-control" type="text" placeholder="mother" name="mother"></div>
        
        <div class="col mb-4">
            <label>
                <strong class="form-label">father</strong></label> : <input class="form-control" type="text" placeholder="father" name="father"></div></div>
        
        <div class="row">
            <div class="col mb-4">
                <label>
                    <strong class="form-label">phone</strong></label> : <input class="form-control" type="text" placeholder="phone" name="phone"></div>
        
        <div class="col mb-4">
            <label>
                <strong class="form-label">email</strong></label> : <input class="form-control" type="text" placeholder="email" name="email"></div></div>
        
        <div class="row">
            <div class="col mb-4">
                <label>
                    <strong class="form-label">address</strong></label> : <input class="form-control" type="text" placeholder="address" name="address"></div>
        <input class="btn btn-primary" type="submit">
    </form>
    </div></main>
    <script src="./js/admission.js"></script>
</body>
</html>