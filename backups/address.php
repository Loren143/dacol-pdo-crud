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
<div class="container">
    <h2 class="mt-5">Enter Your Address</h2>
    <form action="process_address.php" method="POST" onsubmit="return validateForm()">
        <!-- Add a hidden input field for user ID -->
        <input type="hidden" name="user_id" value="1"> <!-- Assuming logged in user has ID 1. Modify this based on your login system. -->
        <div class="form-group">
            <label for="street">Street</label>
            <input type="text" class="form-control" id="street" name="street" required>
            <span class="error" id="street_error"></span> <!-- Error message for street -->
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" required>
            <span class="error" id="city_error"></span> <!-- Error message for city -->
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <input type="text" class="form-control" id="state" name="state">
        </div>
        <div class="form-group">
            <label for="postal_code">Postal Code</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code" required>
            <span class="error" id="postal_code_error"></span> <!-- Error message for postal code -->
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <select class="form-control" id="country" name="country" required>
                <option value="">Select your country</option>
                <option value="USA">United States</option>
                <option value="UK">United Kingdom</option>
                <option value="CA">Canada</option>
                <option value="PHI">Philipppines</option>
            </select>
            <span class="error" id="country_error"></span> <!-- Error message for country -->
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="../products/despay.php" class="btn btn-danger mr-3" style="border-color: black;">Cancel</a>
    </form>
</div>

<script>
    function validateForm() {
        var street = document.getElementById('street').value;
        var city = document.getElementById('city').value;
        var postalCode = document.getElementById('postal_code').value;
        var country = document.getElementById('country').value;

        var streetError = document.getElementById('street_error');
        var cityError = document.getElementById('city_error');
        var postalCodeError = document.getElementById('postal_code_error');
        var countryError = document.getElementById('country_error');

        var isValid = true;

        // Validation for Street
        if (street.trim() === '') {
            streetError.textContent = 'Please enter your street';
            isValid = false;
        } else {
            streetError.textContent = '';
        }

        // Validation for City
        if (city.trim() === '') {
            cityError.textContent = 'Please enter your city';
            isValid = false;
        } else {
            cityError.textContent = '';
        }

        // Validation for Postal Code
        if (postalCode.trim() === '') {
            postalCodeError.textContent = 'Please enter your postal code';
            isValid = false;
        } else {
            postalCodeError.textContent = '';
        }

        // Validation for Country
        if (country.trim() === '') {
            countryError.textContent = 'Please select your country';
            isValid = false;
        } else {
            countryError.textContent = '';
        }

        return isValid;
    }
</script>
</body>
</html>