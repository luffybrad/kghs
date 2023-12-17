<?php
include "header.php";
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
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="students/index.php">Students</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="academics/index.php">Academics</a>
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
    <div class="container">
        <div class="row" >
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        STUDENTS
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">1000 Students</h5>
                        <p class="card-text">Check list of students</p>
                        <a href="students/index.php" class="btn btn-primary">Students' page</a>
                    </div>
                </div>
            </div> 
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        ACADEMICS
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">1000 tests done</h5>
                        <p class="card-text">List of tests done and performance reports</p>
                        <a href="#" class="btn btn-primary">Academics' page</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        FINANCIALS
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">1000 fees cleared</h5>
                        <p class="card-text">List of fee balances and cleared fees</p>
                        <a href="#" class="btn btn-primary">FINANCIALS' page</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        CONTACTS
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">1000 contacts on contact list</h5>
                        <p class="card-text">List of contacts and message</p>
                        <a href="#" class="btn btn-primary">Contacts' page</a>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php
include "footer.php";
?>