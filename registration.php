<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="regi.css">
</head>

<body>
    <div class="wrapper">
        <selection class="form signup">
            <header>MY Chart</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="fn">First Name:</label>
                        <input type="text" name="" id="fn" placeholder="Enter Your FirstName">
                    </div>
                    <div class="field input">
                        <label for="ln">Last Name:</label>
                        <input type="text" name="" id="ln" placeholder="Enter Your LastName">
                    </div>
                    <div class="field input">
                        <label for="em">Email Address:</label>
                        <input type="email" name="" id="em" placeholder="Enter Your Email">
                    </div>
                    <div class="field input">
                        <label for="pass">Password:</label>
                        <input type="password" name="" id="pass" placeholder="Enter Your Password">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                    <div class="field image">
                        <label>Select Image:</label>
                        <input type="file" name="" value="Choose Imange">
                    </div>
                    <div class="field button">
                        <input type="submit" name="" id="" value="Continue to chart">
                    </div>
                </div>
            </form>
            <div class="link">
                Already signed up? <a href="login.php">Login now</a>
            </div>
        </selection>
    </div>
    <script src="JAVASCRIPT/pass-show-hide.js"></script>
    <script src="JAVASCRIPT/signup.js"></script>
</body>

</html>