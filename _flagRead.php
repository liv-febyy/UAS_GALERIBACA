<?php 
    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once 'components/db_connection.php';

    $username = $_SESSION['user'];
    $book_name = $_GET['book_name'];
    $author = $_GET['author'];
    $genre = $_GET['genre'];
    $id = $_GET['book_id'];
    $imagepath = $_GET['imagepath'];

    $status = 'reading';
    $progres = '0';

    try {
        // Get database connection
        $connection = getDbConnection();

        $stmt = $connection->prepare("INSERT IGNORE INTO daftar_bacaan (username, book_id, book_name, author, genre, progress, imagepath, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $username, $id, $book_name, $author, $genre, $progres, $imagepath, $status);

        // Execute the statement
        if ($stmt->execute()) {
            $_SESSION['alert'] = ['type' => 'success', 'message' => 'Berhasil ditandai'];
            header("Location: bookDetail.php?id=".$id);
            exit();
        } else {
            // Error occurred during execution
            throw new Exception("Error executing query: " . $stmt->error);
        }

        } catch (Exception $e) {
            // Set error message
            $_SESSION['alert'] = ['type' => 'error', 'message' => $e->getMessage()];
            
            header("Location: bookDetail.php?id=".$id);
            exit();
        } finally {
            // Close connections if they exist
            if (isset($stmt)) $stmt->close();
            if (isset($connection)) $connection->close();
        }

?>