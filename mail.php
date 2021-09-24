<?php
include('connection.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://codingbirdsonline.com/wp-content/uploads/2019/12/cropped-coding-birds-favicon-2-1-192x192.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <title></title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Send Email</h5>
                        <form action="" method="POST" class="form-signin">
                            <div class="form-label-group">
                                <label for="inputEmail">From <span style="color: #FF0000">*</span></label>
                                <input type="text" name="fromEmail" id="fromEmail" class="form-control"
                                    placeholder="Email address" required autofocus>
                            </div> <br />
                            <div class="form-label-group">
                                <label for="inputEmail">To <span style="color: #FF0000">*</span></label>
                                <input type="text" name="toEmail" id="toEmail" class="form-control"
                                    value="info@factorypixxel.com" readonly autofocus>
                            </div> <br />
                            <label for="inputPassword">Subject <span style="color: #FF0000">*</span></label>
                            <div class="form-label-group">
                                <input type="text" id="subject" name="subject" class="form-control"
                                    placeholder="Subject" required>
                            </div><br />
                            <label for="inputPassword">Message <span style="color: #FF0000">*</span></label>
                            <div class="form-label-group">
                                <textarea id="message" name="message" class="form-control" placeholder="Message"
                                    required></textarea>
                            </div> <br />
                            <button type="submit" name="sendmail"
                                class="btn btn-lg btn-primary btn-block text-uppercase">Send Email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['sendmail'])) {
    $fromEmail = $_POST['fromEmail'];
    $toEmail = $_POST['toEmail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = $toEmail;
    $subject = $subject;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<!doctype html>

            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title></title>
            </head>
            <body>
            <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
                <div class="container">
                 '.$message.'<br/>
                    Regards<br/>
                  '.$fromEmail.'
                </div>
            </body>
            </html>';
    $result = @mail($to, $subject, $message, $headers);

    echo '<script>alert("Email sent successfully !")</script>';
    echo '<script>window.location.href = "index.php";</script>';
}