<?php
$conn = mysqli_connect("localhost", "root", "", "TokyoThreads");

if (!$conn) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

function PhpAlert($message)
{
    echo <<<END
    <script>
    alert('$message');
    document.location.href = '../views/index.php';
    </script>
  END;
}
