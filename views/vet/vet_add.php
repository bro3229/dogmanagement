<!DOCTYPE html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../../includes/assets/styles/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../includes/assets/styles/styles.css">    
    <link href="../../includes/assets/icons/css/all.css" rel="stylesheet">
    <script>
        function openSlideMenu(){
            document.getElementById('menu').style.width = '280px';
            document.getElementById('content').style.marginLeft = '280px';
            document.getElementById('menu1').style.display = 'block';
            document.getElementById('menu2').style.display = 'block';
            document.getElementById('menu3').style.display = 'block';
            document.getElementById('menu4').style.display = 'block';
            document.getElementById('menu5').style.display = 'block';
            document.getElementById('menu6').style.display = 'block';
        }

        function closeSlideMenu(){
            document.getElementById('menu').style.width = '85px';
            document.getElementById('content').style.marginLeft = '85px';
            document.getElementById('menu1').style.display = 'none';
            document.getElementById('menu2').style.display = 'none';
            document.getElementById('menu3').style.display = 'none';
            document.getElementById('menu4').style.display = 'none';
            document.getElementById('menu5').style.display = 'none';
            document.getElementById('menu6').style.display = 'none';
        }
    </script>
</head>
<body>        
    <div id="content">
        <span class="slide">
            <a href="#" onclick="openSlideMenu()">
                <i class="fas fa-bars"></i> 
            </a>
        </span>

        <div id="menu" class="nav">
            <a href="#" class="close" onclick="closeSlideMenu()">
                <i class="fas fa-times"></i>
            </a>
            <ul class="mt-5 pt-3">
            <li ><a href="../index.php">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fas fa-th-large"></i>
                        </div>
                        <div class="col-md-3">
                            <span class="menu_item" id="menu1">Dashboard</span>
                        </div>
                    </div>
                </a></li>
                <li><a href="../dog/dogs.php">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fas fa-dog"></i>
                        </div>
                        <div class="col-md-3">
                            <span class="menu_item" id="menu2">Dogs</span>
                        </div>
                    </div>                    
                </a></li>
                <li><a href="../vaccine/vaccined.php">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fas fa-syringe active_span"></i>
                        </div>
                        <div class="col-md-3">
                            <span class="menu_item active_span" id="menu3">Vaccined</span>
                        </div>
                    </div>                    
                </a></li>
                <li><a href="../adopted/adopted.php">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fas fa-paw"></i>
                        </div>
                        <div class="col-md-3">
                            <span class="menu_item" id="menu4">Adopted</span>
                        </div>
                    </div>                    
                </a></li>
                <li ><a href="../staff/staff.php">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="col-md-3">
                            <span class="menu_item" id="menu5">Staffs</span>
                        </div>
                    </div>
                </a></li>
                <li ><a href="./vet.php">
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="col-md-3">
                            <span class="menu_item" id="menu6">Vets</span>
                        </div>
                    </div>
                </a></li>
                            
            </ul>
        </div>

        <div class="container mt-3">
        <form action="../../controllers/vetController.php" method="POST">
          <h2>ADD VET</h2>
          <input type='hidden' name='vet_add' id='vet_add' value='1'/>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="first">First Name</label>
                <input type="text" name="FName" class="form-control" placeholder="" id="first" required>
              </div>
            </div>
            <!--  col-md-6   -->

            <div class="col-md-4">
                <div class="form-group">
                  <label for="middle">Middle Initial</label>
                  <input type="text" name="MI" class="form-control" placeholder="" id="middle" required>
                </div>
              </div>
      
            <div class="col-md-4">
              <div class="form-group">
                <label for="last">Last Name</label>
                <input type="text" name="LName" class="form-control" placeholder="" id="last" required>
              </div>
            </div>
            <!--  col-md-6   -->
          </div>
      
      
          <div class="row">
            <!--  col-md-6   -->
            <div class="col-md-4">
      
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
                </div>
              </div>
      
            <div class="col-md-4">
      
              <div class="form-group">
                <label for="phone">Contact Number</label>
                <input type="tel" name="contact" class="form-control" id="phone" placeholder="Contact Number" required>
              </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                  <label for="clinic">Clinic</label>
                  <input type="text" name="clinic" class="form-control" placeholder="Clinic" id="clinic" required>
                </div>
              </div>
            
            <!--  col-md-6   -->
          </div>

          <!--  row   -->
          <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                  <label for="address">Clinic Address</label>
                  <input type="text" name="address" class="form-control" id="address" placeholder="Address" required>
                </div>
              </div>
          </div>
      
          <button class ="btn btn-primary" type="submit" name='add' value="Submit">Add</button> 
        </form>
      </div>
    </div>    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>