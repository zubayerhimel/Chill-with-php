<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <nav id="navbarMaterialize" class=" blue-grey darken-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo center">Add Bank Info</a>
            <a href="#" class="sidenav-trigger" data-target="mobile-nav"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down ">
                <li>
                    <a class="tooltipped" data-position="bottom" data-tooltip="GitHub" target="_blank"
                        href="https://github.com/zubayerhimel/Chill-with-php">Github</a>
                </li>

                <li><a href="AddAccountInfo.php">Add account</a>
                </li>
                <li><a href="ViewAccountInfo.php"> View account info</a></li>
                <li><a href="ViewBranchInfo.php"> View bank info</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-nav">
        <li>
            <a class="tooltipped" data-position="bottom" data-tooltip="GitHub" target="_blank"
                href="https://github.com/zubayerhimel/Chill-with-php">Github</a>
        </li>
        <li><a href="AddAccountInfo.php">Add account</a></li>
        <li><a href="ViewAccountInfo.php"> View account info</a></li>
        <li><a href="#"> View bank info</a></li>
    </ul>


    <main>
        <br><br><br><br>
        <div class="container">
            <div class="row">
                <form action="AddBranch.php" method="POST" class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="bname" type="text" class="validate">
                            <label>Bank Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="blocation" type="text" class="validate">
                            <label>Bank location</label>
                        </div>
                    </div>
                    <div class="row">
                        <p class="center-align"><input type="submit" name="submit" class="btn  blue-grey darken-3 round z-depth-3" value="Submit"></p>
                    </div>
                </form>
            </div>
        </div>

        <?php

        include_once ('./Crud.php');

        $crud = new Crud();

        if(isset($_POST['submit'])){
            $bname = $_POST['bname'];
            $blocation = $_POST['blocation'];

            $result = $crud->execute("insert into bank_info (bank_name, bank_location) values ('$bname', '$blocation')");

            if($result){
                header("Location:ViewBranchInfo.php");
            }
            else{
                echo "bad";
            }
        }
        ?>

    </main>



      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>