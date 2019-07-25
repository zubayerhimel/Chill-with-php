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

    <nav id="navbarMaterialize" class="indigo darken-2" style="padding:0px 10px; position: fixed;">
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo"><i class="material-icons">school</i> University</a>
            <a href="#" class="sidenav-trigger" data-target="mobile-nav"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down ">
                <li>
                    <a class="tooltipped" data-position="bottom" data-tooltip="GitHub" target="_blank"
                        href="https://github.com/shunjid/a-day-with-PHP">
                        <i class="fab fa-github"></i></a>
                </li>

                <li><a target="_blank" href="addStudent.php"><i class="material-icons left">note_add</i> Add Student</a>
                </li>
                <li><a href="#"><i class="material-icons left">update</i> Update</a></li>
                <li><a href="#"><i class="material-icons left">delete_forever</i> Delete</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-nav">
        <li><a target="_blank" class="title" href="https://github.com/shunjid/a-day-with-PHP"><i
                    class="grey-text text-darken-4 fab fa-github"></i> GitHub</a></li>
        <li><a target="_blank" href="addStudent.php"><i class="blue-text material-icons">note_add</i> Add Student</a>
        </li>
        <li><a href="#"><i class="green-text material-icons">update</i> Update</a></li>
        <li><a href="#"><i class="red-text material-icons">delete_forever</i> Delete</a></li>
    </ul>


    <main>
        <br><br><br><br>
        <div class="container">
            <div class="row">
                <form action="AddBranch.php" method="POST" class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="bname" type="text" class="validate">
                            <label>Branch Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="blocation" type="text" class="validate">
                            <label>Branch location</label>
                        </div>
                    </div>
                    <div class="row">
                        <p class="center-align"><input type="submit" name="submit" class="btn indigo round z-depth-3" value="Submit"></p>
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

            $result = $crud->execute("insert into branch_info (branch_name, branch_location) values ('$bname', '$blocation')");

            if($result){
                echo "good";
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