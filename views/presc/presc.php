<?php
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dogshelter";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $query= "SELECT * FROM prescription";
    $result=mysqli_query($conn,$query);
    
?>
<!DOCTYPE html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="./includes/styles/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./includes/styles/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link " href="index.php">Dashboard <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="dogs.php">Dogs</a>
            <a class="nav-item nav-link" href="staff.php">Staff</a>            
            <a class="nav-item nav-link" href="vet.php">Veterinarians</a>
            <a class="nav-item nav-link" href="procedure.php">Procedures</a>
            <a class="nav-item nav-link" href="vaccine.php">Vaccines</a>
            <a class="nav-item nav-link " href="consult.php">Consults</a>
            <a class="nav-item nav-link active" href="presc.php">Prescription</a>
          </div>
        </div>
    </nav>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"><a href="presc_add.php">Add Prescription</a></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            <tr>
                <th scope="col">Prescription ID</th>
                <th scope="col">Generic Name</th>
                <th scope="col">Brand Name</th>        
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>

                <?php if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        printf("<tr>");
                            printf("<th scope='row'>%d</th>",$row["prescID"]);
                            printf("<td>%s</td>",$row["generic_name"]);
                            printf("<td>%s</td>",$row["brand_name"]);
                            printf("<td>%s</td>",$row["presc_desc"]);

                        printf("<td>");
                            print("<form action='prescriptionUpdate.php' method='POST'>");
                                printf("<input type='hidden' name='ref' value='%d'>",$row["prescID"]);
                                print("<button type='submit' name='update'>Update</button>");
                            printf("</form>");
                        printf("</td>");
                        
                        printf("<td>");
                            printf("<form action='includes/handlers/dogPrescriptionHandler.php' method='POST'>");
                                printf("<input type='hidden' name='ref' value='%d'>",$row["prescID"]);
                                print("<button type='submit' name='delete'>Remove</button>");
                            printf("</form>");
                        printf("<td>");


                        printf("</tr>");
                    }
                }?>

        
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>