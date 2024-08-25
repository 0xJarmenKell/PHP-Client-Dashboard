<title>clients</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">
<link rel="icon" href="./assets//Untitled-1-507-100x100.ico" type="image/x-icon">
<nav class="navbar navbar-expand-lg gradiant" >
  <div class="container">
    <img src="./assets/Untitled-1-507-100x100.png" alt="logo">
    <a class="logo" href="index.php">Clients Dashbaord</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="frontpage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./clients.php">clients</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container spacing">
    <form method="GET" action="clients.php" class="form-inline">
    <input type="text" name="search" placeholder="Search by name or email" class="form-control"><br>
    <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <table class="table table-striped table-bordered" id="tableContainer">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <!-- <th>Message</th> -->
                    <th>actions</th>
                    <th>Deleteion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('./db.php');
                

                // Initialize search variable
                $search = isset($_GET['search']) ? $_GET['search'] : '';

                // Prepare SQL query
                $sql = "SELECT * FROM clients_demo";
                if (!empty($search)) {
                    $sql .= " WHERE name LIKE '%" . $conn->real_escape_string($search) . "%' OR email LIKE '%" . $conn->real_escape_string($search) . "%'";
                }
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
                        echo '<td><a class="btn btn-primary" href="clients.php?id=' . htmlspecialchars($row['id']) . '&search=' . htmlspecialchars($search) . '" role="button">Update</a></td>';
                    }
                    echo '<td><a class="btn btn-danger" href="delete.php?id=' . htmlspecialchars($row['id']) . '" role="button">Delete</a></td>';
                    echo "</tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
        <div>
            <button class="btn btn-success no-print" onclick="window.print()">
                print
            </button>
        </div>
    </div>
    </footer>
    <script>
            function printTable() {
            // Create a new window
            var printWindow = window.open('', '', 'height=600,width=800');

            // Get the table content
            var tableContent = document.getElementById('tableContainer').innerHTML;

            // Include the existing CSS
            var css = `
                <style>
                    table { width: 100%; border-collapse: collapse; }
                    th, td { border: 1px solid black; padding: 8px; text-align: left; }
                    th { background-color: #f2f2f2; }
                    h1 { text-align: center; }
                </style>
            `;

            // Write the HTML to the new window
            printWindow.document.write('<html><head><title>Print Table</title>');
            printWindow.document.write(css);
            printWindow.document.write('</head><body >');
            printWindow.document.write(tableContent);
            printWindow.document.write('</body></html>');

            // Close the document and trigger print dialog
            printWindow.document.close();
            printWindow.focus();
            printWindow.print();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <!--                       if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                          $name = $_POST['name'] ?? '';
                          $email = $_POST['email'] ?? '';
                          $msg = $_POST['msg'] ?? '';
                            echo 'Form submitted successfully!';
                    }
 -->