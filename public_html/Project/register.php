<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" name="confirm" required minlength="8" />
    </div>
    <input type="submit" value="Register" />
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success
        var email = form.email.value;
        var password = form.password.value;
        var confirm = form.confirm.value;

    // Validate email
    if (!email) {
        alert("Email must not be empty.");
        return false;
    }
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        alert("Invalid email format.");
        return false;
    }

    // Validate password
    if (!password) {
        alert("Password must not be empty.");
        return false;
    }
    if (password.length < 8) {
        alert("Password must be at least 8 characters.");
        return false;
    }

    // Confirm password
    if (!confirm) {
        alert("Confirm password must not be empty.");
        return false;
    }
    if (password !== confirm) {
        alert("Password and confirm password must match.");
        return false;
    }

    // All validations passed
    return true;
}
</script>
<?php
 //TODO 2: add PHP Code
 if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"])){
    $email = se($_POST, "email","", false); //$_POST["email"];
    $password = se($_POST, "password","", false);//$_POST["password"];
    $confirm = se($_POST, "confirm","", false);//$_POST ["confirm"];
    //TODO 3: validate/use
    $hasError = false;
    if (empty($email)) {
        echo "Email must not be empty <br>";
        $hasError = true;
    }
    //sanitize
    //$email = (filter_var($email, FILTER_SANITIZE_EMAIL));
    $email = sanitize_email($email);
    //validate
    /*if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $hasError = true;
    }*/
    if(!is_valid_email($email)){
        echo "Invalid email address";
        $hasError = true;
    }

    if (empty($password)) {
        echo "Password must not be empty <br>";
        $hasError = true;
    }
    if (empty($confirm)) {
        echo "Confirm Password must not be empty <br>";
        $hasError = true;
    }
    if (strlen($password) < 8) {
        echo "Password must be at least 8 characters <br>";
        $hasError = true;
    }
    if (
        strlen($password) > 0 && $password !== $confirm) {
        echo "password must match <br>";
        $hasError = true;
    }
    if (!$hasError) {
        //echo "Welcome, $email";
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Users (email, password) VALUES (:email, :password)");
        try {
            $stmt->execute([":email" => $email, ":password" => $hash]);
            echo "Successfully registered!";
        }catch (Exception $e) {
            echo "There was a problem registering";
            echo "<pre>" . var_export($e, true) . "</pre>";

        }
    }

 }
?>