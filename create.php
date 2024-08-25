<?php
  include('./db.php');
  $name = $_POST["name"];
  $email = $_POST["email"];
//   $msg = $_POST["msg"];
  $errors = [];

    // Validate clientName
    if (empty($name)) {
        $errors[] = 'Client name is required.';
    }
    // Validate clientEmail
    if (empty($email)) {
        $errors[] = 'Client email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }

    // Check if there are any errors
    if (!empty($errors)) {
        // Output errors and stop further processing
        foreach ($errors as $error) {
            echo '<p>' . htmlspecialchars($error) . '</p>';
        }
        // Optionally redirect or display the form again
        exit;
    }

    // Success message or redirection
    echo '<p>Form submitted successfully!</p>';
  $sql = "insert into clients_demo (name, email) values ('$name', '$email')";
  $conn->query($sql);
  $conn->close();
  header("location: frontpage.php");
?>