<?php 
    $host = "localhost";
    $port = "5432";
    $dbname = "EzNote";
    $user = "postgres";
    $password = "password";
    
    $db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

    function upload() {
        $fileName = $_FILES["picture"]["name"];
        $fileError = $_FILES["picture"]["error"];
        $tempName = $_FILES["picture"]["tmp_name"];

        if($fileError === 4) {
            echo "
                <script>
                    alert('Pilih gambar!!');
                </script>
            ";
            return false;
        }

        $validExtension = ['jpg', 'jpeg', 'png'];
        $fileExtension = explode('.', $fileName);
        $fileExtension = strtolower(end($fileExtension));
        if(!in_array($fileExtension, $validExtension)) {
            echo "
                <script>
                    alert('Yang Anda upload bukan gambar!!');
                </script>
            ";
        }

        $fileNameNEW = uniqid();
        $fileNameNEW .= '.';
        $fileNameNEW .= $fileExtension;

        move_uploaded_file($tempName, '../../images/' . $fileNameNEW);

        return $fileNameNEW;
    }

    function signUp($data) {
        global $db;

        $username = strtolower($data["username"]);
        $password = pg_escape_string($db, $data["password"]);
        $passwordConfirmation = pg_escape_string($db, $data["passwordConfirmation"]);

        $query = "SELECT * FROM users WHERE username='$username'";
        $result = pg_query($db, $query);

        if(pg_fetch_assoc($result)) {
            echo "<script>
                    alert(`Username has already been used!!!`);
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

    function addNote($data) {
        global $db;

        $id_user = $_SESSION["id_user"];

        $title = $data["title"];
        $note = $data["note"];
        $query = "
            INSERT INTO notes (id_user, note_title, note)
                VALUES  ('$id_user', '$title', '$note');
        ";
        $result = pg_query($db, $query);

        return pg_affected_rows($result);
    }

    function editNote($data) {
        global $db;

        $id_user = $_SESSION["id_user"];

        $id_note = $_GET["id_note"];

        $title = htmlspecialchars($data["title"]);
        $note = htmlspecialchars($data["note"]);

        $query = "
            UPDATE notes SET
                note_title = '$title',
                note = '$note'
            WHERE id_note = $id_note AND id_user=$id_user;
        ";
        $result = pg_query($db, $query);

        return pg_affected_rows($result);
    }

    function deleteNote($data) {
        global $db;

        $id_user = $_SESSION["id_user"];

        $query = "
            DELETE FROM notes
                WHERE id_note=$data AND id_user=$id_user;
        ";
        $result = pg_query($db, $query);

        return pg_fetch_assoc($result);
    }


    function addImage() {
        global $db;

        $id_user = $_SESSION["id_user"];

        $picture = upload();

        if(!$picture) {
            return false;
        }

        $query = "
            INSERT INTO pictures (id_user, picture)
                VALUES  ('$id_user', '$picture');
        ";
        $result = pg_query($db, $query);
        
        return pg_affected_rows($result);
    }

    function deleteImage($data) {
        global $db;

        $id_user = $_SESSION["id_user"];

        $query = "
            DELETE FROM pictures
                WHERE id_picture=$data AND id_user=$id_user;
        ";
        $result = pg_query($db, $query);

        return pg_affected_rows($result);
    }

    function resetPassword($data) {
        global $db;

        $id_user = $_SESSION['id_user'];

        // $username = $data["username"];
        $username = isset($_POST["username"]) ? $_POST["username"] : $data['usernameLama'];
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