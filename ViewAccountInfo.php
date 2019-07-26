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
        <a href="#" class="brand-logo center">Account Info</a>
            <a href="#" class="sidenav-trigger" data-target="mobile-nav"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down ">
            <li>
                    <a class="tooltipped" data-position="bottom" data-tooltip="GitHub" target="_blank"
                        href="https://github.com/zubayerhimel/Chill-with-php"></a>
                </li>

                <li><a href="AddAccountInfo.php">Add account</a>
                </li>
                <li><a href="AddBranch.php"> Add bank info</a></li>
                <li><a href="ViewBranchInfo.php"> View bank info</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-nav">
        <li>
            <a class="tooltipped" data-position="bottom" data-tooltip="GitHub" target="_blank"
                href="https://github.com/zubayerhimel/Chill-with-php"></a>
        </li>

        <li><a href="AddAccountInfo.php">Add account</a>
        </li>
        <li><a href="AddBranch.php"> Add bank info</a></li>
        <li><a href="ViewBranchInfo.php"> View bank info</a></li>
    </ul>


    <br><br><br><br>
        <?php

            include_once ('./Crud.php');
            $crud = new Crud();

            $query = "select * from account_info";
            $result = $crud->getData($query);
        ?>
        <div class="container">
        <table class="responsive-table">
        <thead>
          <tr>
              <th>Account Id</th>
              <th>Account Number</th>
              <th>Account Name</th>
              <th>Account Type</th>
              <th>Bank Name</th>
              <th>Action </th>
          </tr>
        </thead>

        <tbody>
             <?php
              foreach($result as $key=>$res){
                  echo "<tr>";
                  echo "<td>".$res['id']."</td>";
                  echo "<td>".$res['account_number']."</td>";
                  echo "<td>".$res['account_name']."</td>";
                  echo "<td>".$res['account_type']."</td>";
                  echo "<td>".$res['b_name']."</td>";
                  echo "<td>"."<a class='btn-floating green darken-4' href='editAccount.php?id=".$res['id']."'><i class='material-icons'>create</i></a>"."
                                <a class='btn-floating red darken-1' href='deleteAccount.php?id=".$res['id']."'><i class='material-icons'>delete_forever</i></a>
                                </td>";
                  echo "</tr>";
        }
        ?>
        </tbody>
      </table>
            
        </div>

    </main>



      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>