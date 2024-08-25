<?php
include('./db.php');
$sql = "SELECT * FROM clients_demo";
$result = $conn->query($sql);

// Check if the 'id' parameter is set in the URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    if ($id !== null && $row['id'] == $id) {
        echo '<form class="form-inline m-2" action="update.php" method="POST">';
        echo '<td><input type="text" class="form-control" name="name" value="' . htmlspecialchars($row['name']) . '"></td>';
        echo '<td><input type="email" class="form-control" name="email" value="' . htmlspecialchars($row['email']) . '"></td>';
        // echo '<td><textarea class="form-control" name="msg">' . htmlspecialchars($row['msg']) . '</textarea></td>';
        echo '<td><button type="submit" class="btn btn-success">Save</button></td>';
        echo '<input type="hidden" name="id" value="' . htmlspecialchars($row['id']) . '">';
        echo '</form>';
    } else {
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        // echo "<td>" . htmlspecialchars($row['msg']) . "</td>";
        echo '<td><a class="btn btn-primary" href="frontpage.php?id=' . htmlspecialchars($row['id']) . '" role="button">Update</a></td>';
    }
    echo '<td><a class="btn btn-danger" href="delete.php?id=' . htmlspecialchars($row['id']) . '" role="button">Delete</a></td>';
    echo "</tr>";
}

$conn->close();
?>
