<?php 
include "config.php";
include "style_login.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
    </style>
    <!-- Include the reCAPTCHA JS -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <form action="#" method="post">

                <div class="input-group"><br>
                    <label>Student Number</label>
                    <input type="text" name="ucodes" minlength="9" maxlength="9" required>
                </div>
                <div class="input-group"><br>
                    <label>Username</label>
                    <input type="text" name="ucode" required><br><br>
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="upass" required>
                </div>

                <!-- Add the reCAPTCHA widget -->
                <div class="recaptcha-container">
                    <div class="g-recaptcha" data-sitekey="6Le4OVIqAAAAACDNHHa4q7WPz7oDRX0PWySgQfs8"></div>
                    <br/>
                </div>

                <div class="submit-group">
                    <button type="submit" name="usubmit">Submit</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>

<?php 
if (isset($_POST['usubmit'])) {
    // Get form values
    $name = $_POST['ucodes']; // Student number
    $num = $_POST['ucode'];   // Username
    $email = '1'; // Hardcoded email as per your original code
    $pass = md5($_POST['upass']); // Hashed password using md5
    $type = 'User'; // Fixed user type

    // reCAPTCHA secret key (Replace with your secret key)
    $secretKey = '6Le4OVIqAAAAAJLwKI5y3MeoH7olVTqRCKvGM2wX';

    // Get the reCAPTCHA response from the form
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $remoteIp = $_SERVER['REMOTE_ADDR'];

    // Verify the reCAPTCHA response with Google's API
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $secretKey,
        'response' => $recaptchaResponse,
        'remoteip' => $remoteIp
    ];

    // Send a POST request to Google
    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ]
    ];
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $responseKeys = json_decode($result, true);

    // Check if the reCAPTCHA was verified successfully
    if ($responseKeys["success"]) {
        // If reCAPTCHA is valid, insert the user into the database
        $query = mysqli_query($con, "INSERT INTO applicants (stunum, stuname, email, password, project) 
            VALUES ('$name','$num','$email','$pass','$type')");
        if ($query) {
            echo "<script>alert('Successfully Added!')</script>";
            echo "<script>window.location.href='admin.php'</script>";
        } else {
            echo "<script>alert('Error occurred while adding!')</script>";
        }
    } else {
        // If reCAPTCHA failed, show an error message
        echo "<script>alert('reCAPTCHA verification failed. Please try again.')</script>";
    }
}
?>
