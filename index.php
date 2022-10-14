                                                                                                                                                                                                     <!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Banking System</title>
    
  </head>





     <body style="padding: 0;
   margin: 0;
   box-sizing: border-box;
   font-family: sans-serif;">
   <?php
   include 'navbar.php';
    ?>
     <nav class="navbar navbar-expand-md" style="background-color: #7a6c9e;">
         <a class="navbar-brand" style="color: white; font-weight: bolder;" href="index.php">BankIT</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="border:none;
         border-radius: 8px;
         padding: 10px;
         background:#6f37a1;
         color:white;
         letter-spacing: 1.5px;
         font-size: 15px;
         transition: 0.5s;">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="collapsibleNavbar">
               <ul class="navbar-nav ml-auto">
                 <li class="nav-item">
                   <a class="nav-link" style="color: white; font-weight: bold;" href="index.php">Home</a>
                 </li>

                 <li class="nav-item">
                   <a class="nav-link" style="color: white; font-weight: bold;" href="transactionhistory.php">History</a>
                 </li>
             </div>
          </nav>

       <div class="container-fluid" style="justify-content: space-around;">

             <div class="row intro py-9" style="background: #EAF0F1;">
               <div class="col-sm-6 col-md" style="margin-left:30%;">
                 <div class="heading text-center my-5" style="justify-content: space-around; align-items: center;">
                   <h3 style="color:#000000;">Welcome to</h3>
                   <h1 style="color: #6f37a1;
                   font-weight: bold;
                   transition: 0.5s;
                   text-align: center;">BankIT your payment partner</h1>
                 </div>
               </div>
               <div class="col-sm-12 col-md img text-center">

               </div>
             </div>


           <br>
           <br>
           <br>


       </div>
       <div class="flexbox" style=" display: flex;
       justify-content: space-around;">
         <div class="imgDiv">
             <img class="im" src="https://raw.githubusercontent.com/nipunpundhir/Basicbanking/main/rinnegan-6049194_960_720.webp" style="width: 180px;
             height: 180px;" class="img-fluid pt-2">
         </div>
         <div class="contDiv">
             <h3 style="text-align: center;
             text-decoration:none;
             font-family: 'Roboto Slab', serif;" class="action"><span style="font-family: 'Roboto Slab', serif">SELECT TYPE</h3></span>
             <div class="column activity text-center">

                   <div class="col-md act">

                     <br>
                     <br>
                     <br>
                     <a href="transactionhistory.php"><button style="border:none;
                         border-radius: 8px;
                         padding: 10px;
                         background:#6f37a1;
                         color:white;
                         letter-spacing: 1.5px;
                         font-size: 15px;
                         transition: 0.5s;">Transfer History</button></a>
                   </div>

                   <div class="col-md act">

                     <br>
                     <br>
                     <br>
                     <a href="transfermoney.php"><button style="border:none;
                         border-radius: 8px;
                         padding: 10px;
                         background:#6f37a1;
                         color:white;
                         letter-spacing: 1.5px;
                         font-size: 15px;
                         transition: 0.5s;">View Customers to transfer</button></a>
                   </div>

             </div>
         </div>
       </div>
       <br>
       <footer style="color:#211d24;
       background-color:white;
       letter-spacing: 0.5px;" class="text-center mt-5 py-2">
         <p style="font-family: Poppins; margin: 0;
         font-size: 15px;">Project made by <b>NIPUN PUNDHIR</b> <br>as a part of The Sparks Foundation internship</p>
       </footer>

       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   </body>
  
</html>
