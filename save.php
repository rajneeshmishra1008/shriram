<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxCyZd3N-odAkLNOnoDYgiidN4GlLVt7ZI2vlgbGNyHzo8CHQ9FAWOTu3woZwRzEmgIQI&usqp=CAU'); 
            background-size: cover;
        }

        .contact-form {
            max-width: 400px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdwSR6BYu0Q3aAO3tUSAsa_1-5ES4tBLJlcQ&usqp=CAU'); 
            background-size: cover;
        }

        input[type="text"], input[type="password"], textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: black;
        }

        /* Show password by default */
        input[type="password"] {
            -webkit-text-security: none;
            -moz-text-security: none;
            text-security: none;
        }
    </style>
</head>
<body>
    <div class="contact-form" >
        <h2><center>CONTACT US</center></h2>
        <div>
        <form action="save.php" method="post">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" class="form-control" placeholder="Your name.." required>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" class="form-control" placeholder="Your last name.." required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Your email.." required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Your password.." required>
            <input type="checkbox" onclick="showPassword()"> Show Password

            <center><input type="submit" class="form-control submit" value="submit"></center><hr>
            <center><button> <a href="shriram_main.html" class="back-button">Back</a></button> </center>   
        </form>
        <hr>
        <center><a href="display.php" class="display-button">View Submissions</a></center>
    </div>

    <script>
        // Function to toggle password visibility
        function showPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>
