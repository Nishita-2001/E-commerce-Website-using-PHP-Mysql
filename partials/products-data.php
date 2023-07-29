<?php
    include 'config/db.php';
    $query = "SELECT * FROM `product` WHERE 1";
    $res = mysqli_query($conn, $query);
?>
<div class="container pt-3">
    <h3>
        Products List
        <a class="float-right btn btn-dark text-light" href="product-add.php">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Add
        </a>
    </h3>
    <table class="table">
        <tr>
            <th>
               id
            </th>
            <th>
                Name
            </th>
            <th>
                Type
            </th>
            <th>
                Price
            </th>
            <th>
                Image
            </th>
            <th>
                Action
            </th>
        </tr>
        <?php
        while($row = mysqli_fetch_assoc($res)) {
        ?>
        <tr>
            <td>
                <?= $row['id']; ?>
            </td>
            <td>
                <?= $row['name']; ?>
            </td>
            <td>
                <?= $row['type']; ?>
            </td>
            <td>
                <?= $row['price']; ?>
            </td>
            <td>
               <img src="uploads/<?= $row['image']; ?>" width="60" alt="" srcset=""> 
            </td>
            <td>
                <a  class="btn btn-warning" href="product-edit.php?id=<?= $row['id'] ?>">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
                <a href="del.php?data=<?= $row['id']  ?>" class="btn btn-danger text-white">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>