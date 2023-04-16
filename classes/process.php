<?php 
        $con = new mysqli("localhost","root","","test");
        $action = $_POST['action'];
        $action();
        // Insert
        function insert() {
            global $con;
             $name = $_POST['name'];
             $email = $_POST['email'];
             $phone = $_POST['phone'];
             $status = $_POST['status'];

             $inserted = $con->query("INSERT INTO `tbl_user`(`name`, `email`, `phone`, `status`) VALUES ('$name','$email','$phone','$status')");

             if($inserted) {
                echo "User Inserted Successfully.";
             }
        }
        // Show
        function show() {
            global $con;
            $users = $con->query("SELECT * FROM `tbl_user`");
            $k=1;
            foreach($users as $user){?>
                <tr>
                    <td><?=$k++;?></td>
                    <td><?=$user['name']?></td>
                    <td><?=$user['email']?></td>
                    <td><?=$user['phone']?></td>
                    <td>
                        <?php
                            if ($user['status']=="1") {?>
                                <button class="btn btn-sm btn-primary" id="active" value="<?=$user['id']?>" >Active</button>
                            <?php
                            } else {?>
                                <button class="btn btn-sm btn-warning" id="inactive" value="<?=$user['id']?>" >Inactive</button>
                            <?php
                            }
                        ?>
                    </td>
                    <td>
                        <button class="btn btn-sm btn-outline-success" id="id-edit" value="<?=$user['id']?>" >Edit</button>
                        <button class="btn btn-sm btn-outline-danger" id="id-del" value="<?=$user['id']?>" >Delete</button>
                    </td>
                </tr>
            <?php
            }
        }
        // Delete
        function delete() {
            global $con;
            $id = $_POST['id'];
            $deleted = $con->query("DELETE FROM `tbl_user` WHERE  `id` = '$id'");
            if($deleted) {
                echo "User Deleted Successfully.";
            }
        }

        // Fetch
        function find() {
            global $con;
            $id = $_POST['id'];

            $fetch = $con->query("SELECT * FROM `tbl_user` WHERE `id`='$id'");
            $data = $fetch->fetch_assoc();
            echo json_encode($data);
        }
        // Update
        function update() {
            global $con;
             $id = $_POST['id'];
             $name = $_POST['name'];
             $email = $_POST['email'];
             $phone = $_POST['phone'];
             $status = $_POST['status'];

             $updated = $con->query("UPDATE `tbl_user` SET `name`='$name',`email`='$email',`phone`='$phone',`status`='$status' WHERE  `id` = '$id'");

             if($updated) {
                echo "User Updated Successfully.";
             }
        }

        function active() {
            global $con;
            $id = $_POST['id'];

            $change = $con->query("UPDATE `tbl_user` SET `status`='1' WHERE  `id` = '$id'");
        }
        function inactive() {
            global $con;
            $id = $_POST['id'];

            $change = $con->query("UPDATE `tbl_user` SET `status`='0' WHERE  `id` = '$id'");
        }
        
?>