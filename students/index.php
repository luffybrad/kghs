<?php
include "../header.php";
?>
  <!--navbar-->
  <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Kitengela Girls High School</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../academics/index.php">Academics</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Financials</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Contacts</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--navbar--> 
<br>

<script>
function displayForm(str) {
  if (str == "") {
    document.getElementById("display").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("display").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","form.php?f="+str,true);
    xmlhttp.send();
  }
}
</script>
<h1 style="text-align: center">
  STUDENTS
</h1>
<div class="container-fluid">
 
            <div class="container-fluid mb-3">
                <form method="POST" action="server.php" enctype="multipart/form-data">
                <div class="mb-3">
                <label for="csv_file">Students CSV file upload</label>
                <input type="file" name="file" id="file" onchange="rowCount(this)" class="form-control border-bottom border-info">
                </div>
                <button type="submit" class="btn btn-primary btn-lg" name="students_upload">Upload</button>
                </form>
            </div>
            <br>
            <div class="container">
            <div class="row">
                  <div class="col">
                    <label class="form-label" for="">Form: </label>
                    <form action="">
                      <select class="form-select" name="" id="" onchange="displayForm(this.value)">
                      <option value="">Choose Form</option>
                        <option value="all">All Forms</option>
                        <option value="1">Form 1</option>
                        <option value="2">Form 2</option>
                        <option value="3">Form 3</option>
                        <option value="4">Form 4</option>
                      </select>
                    </form>
                  </div>
                 
              </div>
              <br>
              <div id="display">
  
              </div> 
</div>      
</div>
<?php
include "../footer.php";
?>
