<!DOCTYPE html>
<html lang="en">
  <?php include 'config.php'?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <style>
    /* .banner{
      background: url('Banner-1.jpg');
      background-size: cover;
    } */
      .navbar{
    overflow:hidden;
    background-color: #333;
    position: fixed;/*Set the nav bar to fixed position */
    top:0;/*Position the nav bar at top of the page*/
    width:100%;/*full width*/
    }
    /* h1,p{
      color: #fff;
    } */
    .card{
      width: 30%;
      border: 1px solid black;
      box-shadow:5px 5px 4px 5px grey;
      margin:10px;
      padding: 10px;
      margin-left: 20px;
    }
    
    /* .cardb{
      display:flex;
      flex-direction: column;
      align-items: center;
    } */
    
    @media only screen and (max-width: 900px) and (min-width: 601px){
      .card{
        margin-left: 7%;
       width: 40%
      }
    }
    @media only screen and (max-width: 600px) {
      .card{
       width: 90%;
      }
    }
    

  </style>
  <title>Career</title>
</head>
<body style="margin:0; padding:0;">
  <div class="row mr-0">
    <div class=" col-12 container-fluid">
      <div class="jumbotron jumbotron-fluid" style="background-image: url('banner-1.jpg'); background-size:cover; width: 100%;">
        <div class="container">
          <h1 class="display-4" style="color:#fff;">Job -portal</h1>
          <p class="lead" style="color:#fff;">Best Jobs available matching your skills</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <?php
    $server='localhost';
    $username='root';
    $password='';
    $database='jobs';
    
    $conn= mysqli_connect($server,$username,$password,$database);

    $sql="SELECT `cname`, `position`, `Jdesc`, `skills`, `CTC` FROM `jobs`";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
        echo'
          <div class="card" >
            <div class="card-body cardb">
            <h3 class="card-title " style="text-align: center;">'.$rows['position'].'</h3>
            <h4 class="card-title " style="text-align: center;">'.$rows['cname'].'</h4>
            <p class="card-text" style="color: black; text-align: justify;">'.$rows['Jdesc'].'</p>
            <p class="card-text" style="color: black;"><b>Skills Required : </b>'.$rows['skills'].'</p>
            <p class="card-text" style="color: black;"><b>CTC : </b>'.$rows['CTC'].'</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Apply Now
            </button> 


            
            </div>
          </div>';
          
          
      }
    }
    else{
      echo"";
    }
    ?>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apply For Jobs</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
    
            <form method="POST">
              <div class="mb-3">
                <label for="recieptent-name" class="col-form-label">Name</label>
                <input type="text" class="form-control" name="name" >
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Applying for</label>
                <input type="text" class="form-control" name="apply">
              </div>
              <div class="mb-3">
                <label for="recieptent-name" class="col-form-label">Qualification</label>
                <input type="text" class="form-control" name="qual">
              </div>
              <div class="mb-3">
                <label for="recieptent-name" class="col-form-label">Year passout</label>
                <input type="text" class="form-control" name="year">
              </div>
          </div>
        <div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="applyl" class="btn btn-primary">Apply</button>
           </form>
          </div>
        </div>

  </div>

 
  <!-- FROM HERE -->

  <!-- <div class="card" style="width: 30%;">
  <div class="card-body cardb">
    <h3 class="card-title ">PHP developer</h3>
    <h4 class="card-title ">Company Name</h4>
    <p class="card-text"></p>
    <div class="card-text">
      <p><b>Skils Required:</b> Htmls css3 ...</p>
      <p><b>Job location:</b> Delhi</p>
      <p><b>CTC :</b> 5-10lacs</p>
    </div> -->

        <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Launch demo modal
    </button> -->

    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
    
            <form method="POST">
              <div class="mb-3">
                <label for="recieptent-name" class="col-form-label">Name</label>
                <input type="text" class="form-control" name="name" >
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Applying for</label>
                <input type="text" class="form-control" name="apply">
              </div>
              <div class="mb-3">
                <label for="recieptent-name" class="col-form-label">Qualification</label>
                <input type="text" class="form-control" name="qual">
              </div>
              <div class="mb-3">
                <label for="recieptent-name" class="col-form-label">Year passout</label>
                <input type="text" class="form-control" name="year">
              </div>
            </form>

        <div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div> -->

  </div>
</div>


 <!-- <div class="container-fluid">
  <nav class="navbar navbar-expand-lg bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div >
  <img src="Banner-1.jpg" alt="" class="image-fluid" width="1900">
  
</div>
  </div> -->

</body>
</html>