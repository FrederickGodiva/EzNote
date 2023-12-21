<?php 
    $host = "localhost";
    $port = "5432";
    $dbname = "EzNote";
    $user = "postgres";
    $password = "password";
    
    $db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

    function signUp($data) {
        global $db;

        $username = strtolower($data["username"]);
        $password = pg_escape_string($db, $data["password"]);
        $passwordConfirmation = pg_escape_string($db, $data["passwordConfirmation"]);

        $query = "SELECT * FROM users WHERE username='$username'";
        $result = pg_query($db, $query);

        if(pg_fetch_assoc($result)) {
            echo "<script>
                    alert(`Username has alrady been used!!!`);
                </script>";
            return false;
        }

        if($password !== $passwordConfirmation) {
            echo "
                <script>
                    alert(`Password Confirmation Doesn't Match!!!`);
                </script>
            ";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "
            INSERT INTO users (username, password) 
                VALUES  ('$username', '$password'); 
        ";
        $result = pg_query($db, $query);
        
        return pg_affected_rows($result);
    }

    function resetPassword($data) {
        global $db;

        $id_user = $_SESSION['id_user'];

        $username = $data["username"];
        $password = $data["new-password"];

        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "
            UPDATE users SET
                username = '$username',
                password = '$password'
            WHERE id_user = $id_user
        ";
        $result = pg_query($db, $query);

        return pg_affected_rows($result);
    }
?>