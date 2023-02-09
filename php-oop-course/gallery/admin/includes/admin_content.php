

<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ADMIN
                            <small>Subheading</small>
                        </h1>

<?php

// instatiantion of the user object
$user = new User();
$user->username = "saph";
$user->password = "night";
$user->first_name = "Saphira";
$user->last_name = "Patata";
$user->create();




// $user = User::find_user_by_id(4);
// $user->delete();
// $user = User::find_user_by_id(6);
// $user->password = "mozzi";
// $user->first_name = "Milly";
// $user->last_name = "Molly";
// $user->update();
// $user->save();

// $user->username = "Milly";
// $user->save();



?>



                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->