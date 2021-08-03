<?php
 
 include 'logic.php';

   ?>



 <!doctype html>
 <html lang="en">

 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
         <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Georama:wght@500&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="style.css">
     <title>COVID 19 tracker</title>
 </head>

 <body>

     <nav class="navbar-light mx-2">
         <ul class="nav justify-content-end">

             <li class="nav-item ">
                 <a class="nav-link text-dark" href="#about">Home</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link text-dark" href="#myTable">Records</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link text-dark" href="#">Support</a>
             </li>
         </ul>
     </nav>

     <div class="intro text-center" id="about">
         <h1 id="anim1">Covid 19 Tracker</h1>
         <p>An OpenSource Project to keep All the Records across the world</p>
     </div>


     <div class="row mx-5 text-center my-5">
         <div class="col-md-4 my-2">
             <div class="card" style="width: 18rem;">
                 <div class="card-body text-warning">
                     <h5 class="card-title"> Total Number Affected</h5>
                        <p>  <strong><?php echo $total_num_confirm ?></strong></p>
                     
                 </div>
             </div>
         </div>
         <div class="col-md-4 my-2">
             <div class="card" style="width: 18rem;">
                 <div class="card-body text-danger">
                     <h5 class="card-title">  Total Number Death</h5>
                     <p>  <strong><?php echo $total_num_death ?></strong></p>

                 </div>
             </div>
         </div>
         <div class="col-md-4">
             <div class="card" style="width: 18rem;">
                 <div class="card-body text-success">
                     <h5 class="card-title"> Total Number Recovered</h5>
                     <p> <strong><?php echo $total_num_recover ?></strong></p>

                 </div>
             </div>
         </div>
     </div>




     <div class="container-fluid my-5 p-4">
         <h4 class="text-center p-2">Result in Different Countries</h4>
         <table class="table my-4" id="myTable">
             <thead class="thead-dark">
                 <th>Country</th>
                 <th>Confirm</th>
                 <th>Death</th>
                 <th>Recover</th>
             </thead>
             <tbody>
 <?php
  foreach($result as $key => $value){

     $incrased = $value[$days_count]['confirmed'] - $value[$prev_day]['confirmed'];
 
 
    echo'<tr>
          <td>
           '.$key .'
          </td>
          <td>
        ' .$value[$days_count]['confirmed'] . '
          <sup> <i class="fas fa-arrow-up"></i> ' . $incrased . ' </sup>
          </td>
          <td>
        ' . $value[$days_count]['deaths'] . '
          </td>
          <td>
        ' . $value[$days_count]['recovered'] . '
          </td>
      </tr>';
 
     }
     ?>
 
      </tbody>
   
      
         </table>

     </div>
















     <!-- Optional JavaScript; choose one of the two! -->

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
     </script>

     <!-- Option 2: Separate Popper and Bootstrap JS -->
     <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
e
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script>
      $(document).ready( function () {
    $('#myTable').DataTable();

} 


);

  </script>
 </body>
 <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <strong>@amirDaSparko</strong>
  </div>
  <!-- Copyright -->
</footer>
 </html>