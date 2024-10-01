<?php
session_start();
include "style_login.php";
include "config.php";

date_default_timezone_set('Asia/Manila');
$error = "";

// Redirect if already logged in
if (isset($_SESSION['NotSup'])){
    echo "<script>window.location.href='HomePage'</script>";
}

// Maximum login attempts and lockout time
$max_attempts = 2; // Allow 2 attempts
$lockout_time = 20; // Lock for 20 seconds

// Initialize login attempts and lockout time if not set
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}
if (!isset($_SESSION['last_attempt_time'])) {
    $_SESSION['last_attempt_time'] = 0;
}

// Function to check if the user is locked out
function isLockedOut() {
    global $lockout_time;
    if (isset($_SESSION['last_attempt_time'])) {
        $time_since_last_attempt = time() - $_SESSION['last_attempt_time'];
        if ($time_since_last_attempt < $lockout_time) {
            return true;
        } else {
            // Reset attempts and lockout time after lockout period ends
            $_SESSION['login_attempts'] = 0;
            unset($_SESSION['last_attempt_time']);
        }
    }
    return false;
}

if (isset($_POST['usubmit'])) {
    // Check if the user is currently locked out
    if (isLockedOut()) {
        $remaining_time = $_SESSION['last_attempt_time'] + $lockout_time - time();
        $error = "Too many failed attempts. Please try again after $remaining_time seconds.";
    } else {
        $ucode = htmlspecialchars($_POST['ucode']);
        $upass = htmlspecialchars($_POST['upass']);
$pass = md5($_POST['upass']);
        if (!empty($ucode) && !empty($upass)) {
            // Use prepared statements to avoid SQL injection
            $stmt = $con->prepare("SELECT * FROM applicants WHERE stuname = ? AND password = ?");
            $stmt->bind_param("ss", $ucode, $pass);
            $stmt->execute();
            $result = $stmt->get_result();
            $TR = $result->num_rows;

            if ($TR > 0) {
                // Reset login attempts on successful login
                $_SESSION['login_attempts'] = 0;
                unset($_SESSION['last_attempt_time']); // Clear lockout time

                $logdate = date("Y-m-d h:i:s");
                $R = $result->fetch_array();
                $Q2 = mysqli_query($con, "INSERT INTO logs (stuname,action,timess) VALUES ('".$R['stuname']."','Successfully Login','$logdate')");

                if ($R['project'] == "User") {
                    $_SESSION['NotSup'] = $R['stuname'];
                    echo "<script>alert('Welcome, {$R['stuname']}. Redirecting to Home Page....')</script>";
                    echo "<script>window.location.href='HomePage'</script>";
                }
            } else {
                // Increment login attempts on failure
                $_SESSION['login_attempts']++;
                $_SESSION['last_attempt_time'] = time();

                if ($_SESSION['login_attempts'] >= $max_attempts) {
                    $error = "- Too many failed attempts. Please try again after $lockout_time seconds.";
                } else {
                    $remaining_attempts = $max_attempts - $_SESSION['login_attempts'];
                    $error = "- Username and/or Password incorrect! You have $remaining_attempts attempt(s) left.";
                }
            }
            $stmt->close();
        }
    }

    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <form action="#" method="post">
                <div class="input-group"><br>
                    <label>Username</label>
                    <input type="text" name="ucode" required><br><br>
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="upass" required>
                </div>
                <div class="submit-group">
                    <button type="submit" name="usubmit">Login</button>
                </div>
                <p style="color: white;">Don't you have an account?<a style="color: white;" href="Register">Register Here</a></p>
                    <?php if ($error != "") { ?>
                        <p class="error"><?= $error ?></p>
                    <?php } ?>
                </form>
</body>
</html>