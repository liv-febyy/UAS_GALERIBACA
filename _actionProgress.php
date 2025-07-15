<?php 
	error_reporting(E_ALL);
    ini_set('display_errors', 1);

	require_once 'components/db_connection.php';

	try {
            // Get database connection
            $connection = getDbConnection();

            $id = $_GET['id'];
            $stmt = $connection->prepare("UPDATE daftar_bacaan SET progress = least(progress + 10,100), status = case when progress >= 100 then 'completed' else status end WHERE id = ?");
            $stmt->bind_param("i", $id);

            // Execute the statement
            if ($stmt->execute()) {
                header("Location: Bacaansayapage.php");
                exit();
            } else {
                // Error occurred during execution
                throw new Exception("Error executing query: " . $stmt->error);
            }

        } catch (Exception $e) {
            // Set error message
            $_SESSION['alert'] = ['type' => 'error', 'message' => $e->getMessage()];
            
            header("Location: Bacaansayapage.php");
            exit();
        } finally {
            // Close connections if they exist
            if (isset($stmt)) $stmt->close();
            if (isset($connection)) $connection->close();
        }

?>