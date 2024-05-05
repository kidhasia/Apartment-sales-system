<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../styles/styles.css">
    <title>Message Management</title>
    <style>
    table {
        border-collapse: separate;
        border-spacing: 0 10px;
        width: 100%;
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: var(--primary-color, #0047AB);
        color: #fff;
    }

    td {
        background-color: #f9f9f9;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .flexible-column {
        white-space: normal;
        word-wrap: break-word;
    }

    .btn {
        padding: 8px 16px;
        border: 1px solid transparent;
        border-radius: 5px;
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-edit {
        background-color: #4CAF50;
        border-color: #4CAF50;
    }

    .btn-edit:hover {
        background-color: #45a049;
    }

    .btn-delete {
        background-color: #f44336;
        border-color: #f44336;
    }

    .btn-delete:hover {
        background-color: #d32f2f;
    }
    </style>
</head>
<body>
    <?php
    include './head.php'; 
    include './header.php'; 

?>
    <h2>Contact Us Messages</h2>
    
    <table>
        <thead>
            <tr>
                <th>Message ID</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

             $sql= "SELECT * from 'message_controller'";
             $result=mysqli_query($conn,$sql);
             if($result){
                $row=mysqli_fetch_assoc($result);
                echo $row['user_message'];
             }

            ?>
            <!-- <tr>
                <td>1</td>
                <td class="flexible-column">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatem quibusdam, nisi provident voluptates dicta blanditiis corrupti iure at dolorem autem culpa inventore, doloremque aspernatur numquam veniam eius doloribus quis!</td>
                <td>
                    <a class="btn btn-edit" href="edit.html">Edit</a>
                    <a class="btn btn-delete" href="delete.html">Delete</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td class="flexible-column">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent venenatis, lorem a convallis viverra, purus erat elementum tortor, at placerat erat nisi et sapien. Maecenas cursus massa ut lectus egestas tincidunt.</td>
                <td>
                    <a class="btn btn-edit" href="edit.html">Edit</a>
                    <a class="btn btn-delete" href="delete.html">Delete</a>
                </td>
            </tr> -->
        </tbody>
    </table>
</body>
</html>
