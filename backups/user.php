<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="payment.css">
<link rel="stylesheet" href="../purchases/styles.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="use.fontawesome.com/releases/v5.15.4/css/all.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
    <style>
        
    </style>
</head>
<body>
<div class="header">
<div class="container">
<div class="navbar">
<div class="logo">
<img src="https://tse2.mm.bing.net/th?id=OIP.7yaXURN2zUfsnqZDKm0YdQHaHa&pid=Api&P=0&h=180" width="125 px">
</div>
<nav class="navbar">
    <ul>
        <li><a href="index.html">Product Inventory</a></li>
        <li><a href="../purchases/payment.html">Payment and Accounting</a></li>
        <li><a href="logistics.html">Logistics</a></li>
        <li><a href="customer_service.html">Customer Service</a></li>
        <li><a href="reports.html">Reports</a></li>
        <a href="../app/logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </ul>
</nav>
<img src="https://tse2.mm.bing.net/th?id=OIP.4mDv4lolzqtKDPHHU7ZasgHaHa&pid=Api&P=0&h=180" width="70px" height="70px">
</div>
<div class="row">
<div class="col-2">
<h1>Low Ray's Bag Shop<br>Trendy bags!</h1>
<p>Affordable & suit to your liking <br>site for all your fashion needs</p>

</div>
</div>
</div>
</div>
    <div class="container text-center">
        <h2 class="mb-4">Enter Your Address</h2>
        <form action="userinfo.php" method="POST" onsubmit="return validateForm()">
            <!-- Add a hidden input field for user ID -->
            <input type="hidden" name="user_id" value="1"> <!-- Assuming logged in user has ID 1. Modify this based on your login system. -->
            <div class="form-group">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                <span class="error" id="first_name_error"></span> <!-- Error message for first name -->
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                <span class="error" id="last_name_error"></span> <!-- Error message for last name -->
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" required>
                <span class="error" id="phone_number_error"></span> <!-- Error message for phone number -->
            </div>
            <div class="form-group">
                <input type="number" class="form-control" id="age" name="age" placeholder="Age" required>
                <span class="error" id="age_error"></span> <!-- Error message for age -->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="../products/despay.php" class="btn btn-danger ml-2">Cancel</a>
        </form>
    </div>

    <script>
        function validateForm() {
            var firstName = document.getElementById('first_name').value;
            var lastName = document.getElementById('last_name').value;
            var phoneNumber = document.getElementById('phone_number').value;
            var age = document.getElementById('age').value;

            var firstNameError = document.getElementById('first_name_error');
            var lastNameError = document.getElementById('last_name_error');
            var phoneNumberError = document.getElementById('phone_number_error');
            var ageError = document.getElementById('age_error');

            var isValid = true;

            // Validation for First Name
            if (firstName.trim() === '') {
                firstNameError.textContent = 'Please enter your first name';
                isValid = false;
            } else {
                firstNameError.textContent = '';
            }

            // Validation for Last Name
            if (lastName.trim() === '') {
                lastNameError.textContent = 'Please enter your last name';
                isValid = false;
            } else {
                lastNameError.textContent = '';
            }

            // Validation for Phone Number
            if (!phoneNumber.match(/^\d{11}$/)) {
                phoneNumberError.textContent = 'Please enter a valid phone number';
                isValid = false;
            } else {
                phoneNumberError.textContent = '';
            }

            // Validation for Age
            if (isNaN(age) || age < 0 || age > 150) {
                ageError.textContent = 'Please enter a valid age';
                isValid = false;
            } else {
                ageError.textContent = '';
            }

            return isValid;
        }
    </script>
</body>
</html>