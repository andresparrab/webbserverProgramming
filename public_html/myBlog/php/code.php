<?php
        session_start();
        if(!isset($_SESSION['author']))
        {   
        
            header("Location: ../error.php");
        }
        // if($_SESSION['name']!='admin')
        // {
        //     header("Location: ../login.php");
        // }
        //include('./admin/php/adminFunctions.php');
        include('connect.php');

        
        // Function to get all users
        function getUsers(){
        global $conn;
            $query = "SELECT * FROM author";


            if (mysqli_query($conn, $query)) {
                $result = $conn->query($query);
                $rows = $result->num_rows; 
                for ($j = 0;$j < $rows ; ++$j) {
                    $result->data_seek($j); 
                    $row = $result->fetch_array(MYSQLI_ASSOC);

                echo '
                <tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['password'].'</td>
                    <td class="btn-change">
                    <form action="user_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="'.$row['id'].'"> 
                    <button name="edit-btn" type="submit" class="btn btn-secondary btn-block edit_delete">Edit</button>
                    </form>
                    </td>
                    <td>
                    <form method="post">
                    <input type="hidden" name="del_id" value="'.$row['id'].'"> 
                    <button name="delete_btn" type="submit" class="btn btn-secondary btn-block edit_delete">Delete</button>
                    </form>           
                    </td>

                </tr>
                ';
                
                    //echo "this is ti: ". $row['name'];
                }
                } else {
                echo "<br>"."category Error: " . $query . "<br>" . mysqli_error($conn);
                }
        }

        function getUserById(){
            global $conn;
            if(isset($_POST['edit-btn']) || isset($_POST['update-btn']) )
            {

                $id = $_POST['edit_id'];
                

                $query= "SELECT * FROM author WHERE id='$id'";
                $result = $conn->query($query);
                

                    $user2 = $result->fetch_array(MYSQLI_ASSOC); 

                    return $user2;
            }

        }

        function getUserById2(){
            global $conn;
            //if(isset($_POST['edit-btn']))
            //{

                $id = $_SESSION['id'];
                
                

                $query= "SELECT * FROM author WHERE id='$id'";
                $result = $conn->query($query);
                

                $user2 = $result->fetch_array(MYSQLI_ASSOC); 

                return $user2;
            //}

        }

        function updateUser(){
            global $conn;
            //echo 'inside';

                if(isset($_POST['update-btn']))
                {
                    //echo '<br> halfWay1: '.$id;
                    $id = $_POST['update_id'];
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    //echo '<br> halfWay2: '.$id.'name: '.$username.' email: '.$email.' password: '.$password;
            
                $query = "UPDATE author SET name='$username',  email='$email',  password='$password' WHERE id='$id'";
                $result = $conn->query($query);

                }

                if($result)
                {
                    
                    if($_SESSION['name']=='admin')
                    {
                        header('Location: ../adminDashboard/editUsers.php');
                        $_SESSION['success'] = "User Updated";
                    }
                    else{
                       
                        $_SESSION['name'] = $username;
                        header('Location: ../userDashboard/uedit.php');
                        $_SESSION['success'] = "User Updated";
                        
                       
                    }
                    
                }
                else
                {
                    echo "NO: ".$id;
                    echo "<br>"."Mega Error: " . $query . "<br>" . mysqli_error($conn);
                    $_SESSION['status']=" NOT Updated";
                    echo 'df';
                }
        }

 
        // Delete User Function
        function Delete_user(){
            global $conn;
             if(isset($_POST['delete_btn']))
             {
            
                $id = $_POST['del_id'];
                $query= "DELETE  FROM author WHERE id=$id";
                $result = $conn->query($query);
                //$result = mysqli_query($conn,$query);
            // $row = $result->fetch_array(MYSQLI_ASSOC); 
                //echo 'this is the name: '.mysqli_query($conn,$query);

                if($result)
                {

                    $_SESSION['success']="User deleted";
                    if($_SESSION['name']=='admin')
                    {
                        header('Location: ../adminDashboard/editUsers.php');
                    }
                    else{
                        $_SESSION['name'] = $username;
                        header('Location: ../logout.php');
                    }
                   
                }
                else
                {
                    echo "NO: ".$id;
                    echo "<br>"."Mega Error: " . $query . "<br>" . mysqli_error($conn);
                    $_SESSION['status']=" NOT deleted";
                    echo 'df';
                }
            }
            
        }

        function message(){            
            if(isset($_SESSION['success'])&& $_SESSION['status'] !='')
            {                
                echo '<h2>'.$_SESSION['success'].'<h2>';
                unset($_SESSION['success']);
            }

            if(isset($_SESSION['status'])&& $_SESSION['status'] !='')
            {
                echo '<h2>'.$_SESSION['status'].'<h2>';
                unset($_SESSION['status']);
            }

        }

        function numberOfPosts(){
            global $conn;
            $query = "SELECT * FROM post";
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }
              else{
                //echo '<br> number of rows';
                if (mysqli_query($conn, $query)) {
                    $result = $conn->query($query);
                    $rows = $result->num_rows; 
                    echo $rows;
    
                }
                else {
                    echo "<br>"."category Error: " . $query . "<br>" . mysqli_error($conn);
                    }
              }            
        }


        function numberOfPostsPerMonth(){
            global $conn;
            $query = "SELECT * FROM post WHERE date BETWEEN (CURRENT_DATE() - INTERVAL 1 MONTH) AND CURRENT_DATE()";
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }
              else{
                //echo '<br> number of rows';
                if (mysqli_query($conn, $query)) {
                    $result = $conn->query($query);
                    $rows = $result->num_rows; 
                    echo $rows;
    
                }
                else {
                    echo "<br>"."category Error: " . $query . "<br>" . mysqli_error($conn);
                    }
              }            
        }

        function numberOfUsers(){
            global $conn;
            $query = "SELECT * FROM author";
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }
              else{
                //echo '<br> number of rows';
                if (mysqli_query($conn, $query)) {
                    $result = $conn->query($query);
                    $rows = $result->num_rows; 
                    echo $rows;
    
                }
                else {
                    echo "<br>"."category Error: " . $query . "<br>" . mysqli_error($conn);
                    }
              }            
        }

        function numberOfUsersPerMonth(){
            global $conn;
            $query = "SELECT * FROM author WHERE date BETWEEN (CURRENT_DATE() - INTERVAL 1 MONTH) AND CURRENT_DATE()";
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }
              else{
                //echo '<br> number of rows';
                if (mysqli_query($conn, $query)) {
                    $result = $conn->query($query);
                    $rows = $result->num_rows; 
                    echo $rows;
    
                }
                else {
                    echo "<br>"."category Error: " . $query . "<br>" . mysqli_error($conn);
                    }
              }            
        }
?> 