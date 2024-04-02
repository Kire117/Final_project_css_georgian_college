<!DOCTYPE html>
<html lang="en">
<!-- head tag is created   -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>



<!-- body tag is used  -->
<body>
<header class="site-header">
        <div class="container">
            <div class="logo">
                <img src="wwf.png" alt="WWF Logo">
            </div>
            <div class="header-content">
                <h1 class="site-title">World Wildlife Fund</h1>
                <p class="header-quote">"Together, we can build a future where people live in harmony with nature."</p>
            </div>
            <div class="search-container">
                <input type="text" placeholder="Search" class="search-input">
                <button type="submit" class="search-button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <ul class="nav-list">
                <li><a href="index.html">Home</a></li>
            </ul>
        </div>
    </header>
    <!-- form action has been used to redirect the user to the checkout  -->
    <form action="" method="POST">
        <!-- center tag is used to align the text to center  -->
    <center>
        <h3>Donation Form</h3>
    </center>
    <h4>Personal Information</h4>
    <!-- table 1 first row -->
        <center>
            <!-- table tag is used to build a form with specific rows and columns  -->
            <table>
                <!-- first row -->
                <tr>
                    <!-- first columns -->
                    <td>First Name</td>
                    <!-- the required field is used to indicate that the given field is required and cannot be submitted without entering data  -->
                    <td><input type="text" name="fname" id="fname" required>
                </td>
                </tr>
                <tr>
                    <td>Middle Name</td>
                    <td><input type="text" name="name" id=""></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lname" id="lname" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <!-- the placeholder is used to display a pre-written text in the field  -->
                    <td>Street Number</td>
                    <td><input type="text" name="street" id="" placeholder="Enter your street number"></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city" id=""></td>
                    <!-- the empty td tag has used to provide space -->
                    <td></td>
                    <td></td>
                    <td>Country</td>
                    <!-- select tag is sued to diaply a dropdown list  -->
                    <td><select name="country" id="">
                        <option value="" selected="selected" disabled="disabled">Select</option>
                        <option value="">Canada</option>
                        <option value="">USA</option>
                        <option value="">India</option>
                        <option value="">Australia</option>
                        <option value="">New Zealand</option>
                        <option value="">Africa</option>
                        <option value="">Greenland</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Mobile Number</td>
                    <td><input type="number" name="number" id=""></td>
                </tr>
            </table>
        </center>
        <center>
            <table>
                <tr>
                    <td>
                        <label for="donation">Donation</label>
                        <br>
                        <input type="text" placeholder="Ammount">
                        </td>
                </tr>
            </table>
        </center>

  <br>

<th><b>Declaration</b></th><br>
<th>
I hereby declare that the information provided in this form is true, complete, and accurate to the best of my knowledge. I understand that any false, misleading, or omitted information may result in the rejection of this donation.

I authorize World WildLife Fund to verify the information provided and undertake any necessary checks to validate the details provided in this form.

<br>
<tr></tr> <br>

<th>Signature</th>
<th><input type="text" name="" id="" required placeholder="Full name"></th> <br>
<!-- the tr tag is used provide the space -->
<tr></tr> <br>

<!-- a new column has been created  -->
<th>Date:</th>
<th><input type="date" name="" id="" required></th>
</th>

<!-- javascript has been used  -->
<center>
    <br>
    <!-- the onclick function is used in submit button tag -->
<button onclick="submitForm()" class="form-button">Submit</button>
    <!-- script tag is used to define the javascript -->
    <script>
        // the function named submit form has been created 
    function submitForm() 
    {
        // the following code allows the value to be extracted from the fname id used earlier to define first name and displays an alert message wehn pressed submit 
        var fname = document.getElementById("fname").value;
        alert("Your donation has been submited!, Thank you " + fname + "!");
    }
</script>
<!-- the following type is used to reset the page  -->
    <input type="reset" name="" id="" value="RESET">
</center>

</form>

<footer class="site-footer">
    <div class="container">
        <div class="footer-row">
            <div class="footer-col">
              <a target="_blank" href="https://wwf.ca">
                <img class="mt-5" width="50% height=auto" src="https://wwf.ca/wp-content/uploads/2019/12/WWF-logo-1-1.png" alt="WWF.CA"> 
            </a>  
                <h3>World Wildlife Fund</h3>
            </div>
            <div class="footer-col">
                <h4>Our Location</h4>
                <address>
                    <p>1250 24th Street, N.W.</p>
                    <p>Washington, DC 20037</p>
                </address>
            </div>
            <div class="footer-col">
                <h4>Site Menu</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Work</a></li>
                    <li><a href="#">Get Involved</a></li>
                    <li><a href="form.php">Donate</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Follow Us!</h4>
                <div class="social-links">
                    <a href="your-facebook-link"><i class="bi bi-facebook"></i></a>
                    <a href="your-twitter-link"><i class="bi bi-twitter"></i></a>
                    <a href="your-youtube-link"><i class="bi bi-youtube"></i></a>
                    <a href="your-instagram-link"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
