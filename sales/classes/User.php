<?php
require_once "Database.php";

class User extends Database{
    public function createUser($first_name, $last_name, $username, $password){
        # CREATE THE SQL
        $sql = "INSERT INTO users (first_name, last_name, username, password)
                 VALUES('$first_name', '$last_name', '$username', '$password')";

        #EXECUTION
        if($this->conn->query($sql)){
            header("location: ../views"); //GOES  TO THE index.php OF THE VIEWS FOLDER
            exit;                         //STOPS THE CODE
        }else{
            die("Error in registering the user: ") . $this->conn->error;
        }

    }
    public function login($username, $password){
        $sql = "SELECT * FROM users WHERE username = '$username'";

        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            $user_details = $result->fetch_assoc();

            if(password_verify($password, $user_details['password'])){
                #CREATE THE SESSION VARIABLES
                session_start();

                $_SESSION['user_id'] = $user_details['id'];
                $_SESSION['username'] = $user_details['username'];

                header("location: ../views/dashboard.php");
                exit;
            }else{
                die("Password is incorrect");
            }
        }else{
            die("Username not found");
        }
    }

    public function getAllUsers(){
        $sql = "SELECT id, first_name, last_name, username FROM users";

        if($result = $this->conn->query($sql)){
            while($row = $result->fetch_assoc()){
                $user_list[] = $row;
            }
            return $user_list;
        }else{
            die("Error in retrieving users: " . $this->conn->error);
        }
    }

    public function destroy($id){
        $sql = "DELETE FROM users WHERE id = '$id'";
        $this->conn->query($sql);

        header('location: '.$_SERVER['HTTP_REFERER']);
    }

    public function getUserDetails(){
       $sql = "SELECT id, first_name, last_name, username *FROM users";

         if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        } else {
            die("Error: ". $this->conn->error);
        }    
    }

    function displayUserdetail($id){

        $sql = "SELECT id, first_name, last_name, username *FROM users";

        if($result = $this->conn->query($sql)){
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "
                        <tr>
                            <td>".$row['id']."</td>
                            <td>".$row['first_name']."</td>
                            <td>".$row['last_name']."</td>
                            <td>".$row['user_name']."</td>
                          
                        </tr>
                    ";
                }
            } else {
                echo "<tr>
                    <td colspan='5' class='text-center lead fst-italic fw-bold'>
                        No Records Found
                    </td>
                </tr>";
            }
        } else {
            die("Error: " . $this->conn->error);
        }
     }
    

    public function update($id,$firstname,$lastname,$username){
    $sql = "UPDATE users SET firstname = '$firstname',lastname ='$lastname',username='$username' WHERE user_id ='$id'";

    if($this->conn->query($sql)){
        header("location: ../views"); //GOES TO THE index.php OF THE VIEWS FOLDER
        exit;                         //STOPS THE CODE
    }else{
        die("Error in registering the user: " . $this->conn->error);
    }}

    public function edit($id){
        $sql = "SELECT * FROM users WHERE user_id = '$id'";
        $result = $this->conn->query($sql);
        if($result){
            return $result->fetch_assoc();
            exit;      //STOPS THE CODE
        }else{
            die("Error in registering the user: " . $this->conn->error);
        }
    }
}



   
    

    
?>