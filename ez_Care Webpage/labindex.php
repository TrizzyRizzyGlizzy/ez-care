<?php
require 'connection.php';

if(isset($_POST["submit"])) { $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    
    $gender = $_POST["gender"];
    $gender = "";
    foreach ($gender as $row) {
        $gender .= $row . ",";
    }

    $Symptoms = $_POST["Symptoms"];
    $Temperature = $_POST["Temperature"];
    $BloodPressure = $_POST["BloodPressure"];
    $Pulse = $_POST["Pulse"];
    $Height = $_POST["Height"];
    $weight = $_POST["weight"];
    $BloodType = $_POST["BloodType"];
    $allergies = $_POST["allergies"];
    $currentMedication = $_POST["currentMedication"];
    $reasonForVisit = $_POST["reasonForVisit"];
    $appointmentDateTime = $_POST["appointmentDateTime"];
    $doctor = $_POST["doctor"];
    $insuranceProvider = $_POST["insuranceProvider"];
    $emergencyContactName= $_POST["emergencyContactName"];
    $EMcontactNumber = $_POST["contactNumber"];
    $EMcontactRelationship = $_POST["contactRelationship"];

    $query = "INSERT INTO labratory_medicalrecords 
VALUES  ('', '$name', '$email', '$age', '$Symptoms', '$Temperature',
'$BloodPressure', '$Pulse', '$Height', '$weight', '$BloodType','$allergies', '$currentMedication',
'$reasonForVisit', '$appointmentDateTime', '$doctor', '$insuranceProvider', '$emergencyContactName',
'$EMcontactNumber', '$EMcontactRelationship');"

mysqli_query($conn, $query);
echo
"<script>alert('Data Inserted Successfully');</script>";

}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Laboratory / Services - ez|Care</title>

        <link rel="icon" type="image/x-icon" href="/images/ezcarelogo.png">
        <link rel="stylesheet" href="services-forms.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/afa1737baf.js" crossorigin="anonymous"></script>
        <style>
            
            #medic {
                font-size: 36px;
                text-align: center;
                margin-bottom: 30px;
                background-color: #0058a3;
                color: #fff;
                padding: 20px;
                text-transform: uppercase;
                letter-spacing: 2px;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
                border-bottom: 2px solid #003366;
            }
                
        
                form {
                    background-color: #ffffff;
                    border-radius: 10px;
                    padding: 30px;
                    box-shadow: 0 0 10px rgba(0,0,0,0.1);
                    max-width: 600px;
                    margin: 0 auto;
                }
        
                label {
                    font-size: 16px;
                    margin-bottom: 5px;
                    display: inline-block;
                    width: 150px;
                }
        
                input[type="text"],
                input[type="email"],
                select,
                textarea {
                    padding: 10px;
                    border-radius: 5px;
                    border: none;
                    width: 100%;
                    margin-bottom: 20px;
                    font-size: 16px;
                    box-sizing: border-box;
                }
        
        
        
                textarea {
                    height: 120px;
                }
        
                input[type="submit"] {
                    background-color: #4CAF50;
                    color: white;
                    padding: 10px 20px;
                    border-radius: 5px;
                    border: none;
                    font-size: 16px;
                    cursor: pointer;
                }
        
                input[type="submit"]:hover {
                    background-color: #3e8e41;
                }
        
                form {
                    border: 1px solid #ccc;
                    padding: 20px;
                    max-width: 600px;
                    margin: 0 auto;
                    background-color: #f5f5f5;
                    border-radius: 10px;
                }
        
                label {
                    display: block;
                    margin-bottom: 10px;
                    font-weight: bold;
                }
        
                input[type="text"],
                input[type="email"],
                select {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    margin-bottom: 20px;
                    background-color: #fff;
                    color: #333;
                    font-size: 16px;
                }
        
                textarea {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    height: 100px;
                    margin-bottom: 20px;
                    background-color: #fff;
                    color: #333;
                    font-size: 16px;
                }
        
                input[type="submit"] {
                    background-color: #4CAF50;
                    color: white;
                    padding: 10px 20px;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    font-size: 16px;
                }
        
                input[type="submit"]:hover {
                    background-color: #45a049;
                }
        
        
        
                #temperature {
                    width: 30%;
                    display: inline-block;
                    margin-right: 10px;
                }
        
                #blood-pressure {
                    width: 30%;
                    display: inline-block;
                    margin-right: 10px;
                }
        
                #pulse {
                    width: 30%;
                    display: inline-block;
                    margin-right: 10px;
                }
        
                #height {
                    width: 30%;
                    display: inline-block;
                    margin-right: 10px;
                }
        
                #weight {
                    width: 30%;
                    display: inline-block;
                    margin-right: 10px;
                }
        
        
            </style>

    </head>

    <body>
 <!-----Dock----->
        <section class="dock">
            <a href="tel:+4733378901"><i class="fa-solid fa-phone" style="color:#006eff"></i>(+501) 333 78 901</a>
            <a href="mailto:danielmezamz@gmail.com"><i class="fa-solid fa-envelope" style="padding: 5px; color:#006eff"></i>hello@ezcarebz.com</a>
            <div class="dock-right">
                <a href=""><i class="fa-brands fa-twitter" style="padding-right: 15px; color: #006eff;"></i></a>
                <a href=""><i class="fa-brands fa-instagram" style="padding-right: 15px; color: #006eff"></i></a>
                <a href=""><i class="fa-brands fa-square-facebook" style="padding-right: 15px; color: #006eff"></i></a>
            </div>
        </section>
        <hr>

 <!-----Navigation Links----->
        <section class="navigation">
            <div class="nav-links">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <!--<li><a href="login.html">Create account</a></li>-->
                    <li><div class ="User-icon"><a href="Creation-page.html" id="userEmailLink" target="_blank">Login/Signup</a></div></li>
                    <a><img src="images/ezCare.jpeg" style="max-width: 150px; float: left; margin: 7px 20px;"></a>
                </ul>
            </div>
        </section>

        <section>
            <h1 id="medic">
              <img src="images/ezcarelogo.png" width="50" height="40">
              Laboratory Scans Medical Form
            </h1>
          
            <form>
              <h2>Personal Information</h2>
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" placeholder="Your name.." required>
          
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" placeholder="Your email.." required>
          
              <label for="age">Age:</label>
              <input type="text" id="age" name="age" placeholder="Your age.." required>
          
              <label>Select Gender:</label>
<br>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label>
<input type="text" id="otherGender" name="otherGender" placeholder="Please specify">
              
    <label for="symptoms">Symptoms:</label>
              <textarea id="symptoms" name="symptoms" placeholder="Describe your symptoms.." required></textarea>
          
              <label for="temperature">Temperature:</label>
              <input type="text" id="temperature" name="temperature" placeholder="Your temperature.." required>
              <span>&deg;</span>
          
              <label for="blood-pressure">Blood Pressure:</label>
              <input type="text" id="blood-pressure" name="blood-pressure" placeholder="Your blood pressure.." required>
              <span>mmHg</span>
          
              <label for="pulse">Pulse:</label>
              <input type="text" id="pulse" name="pulse" placeholder="Your pulse.." required>
              <span>bpm</span>
          
              <label for="height">Height:</label>
              <input type="text" id="height" name="height" placeholder="Your height.." required>
              <span>ft </span>
              <input type="text" id="height" name="height" placeholder="Your height.." required>
              <span>in </span>
          
              <label for="weight">Weight:</label>
              <input type="text" id="weight" name="weight" placeholder="Your weight.." required>
              <span>lbs</span>
          
              <label for="blood-type">Blood Type:</label>
              <select id="blood-type" name="blood-type" required>
                <option value="">--Select--</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
              </select>
          
              <label for="allergies">Allergies:</label>
              <textarea id="allergies" name="allergies" placeholder="List any allergies you have.."></textarea>
          
              <label for="medications">Current Medications:</label>
              <textarea id="medications" name="medications" placeholder="List any medications you are currently taking.."></textarea>
          
              <label for="reason">Reason for Visit:</label>
              <textarea id="reason" name="reason" placeholder="What is the reason for your visit?" required></textarea>

              <label for="appointment">Appointment Date and Time:</label>
              <input type="datetime-local" id="appointment" name="appointment" required>
              <br>
              <br>
              <label for="doctor">Doctor:</label>
              <input type="text" id="doctor" name="doctor" placeholder="Preferred Doctor" required>
              
              <label for="insurance">Insurance Provider:</label>
              <input type="text" id="insurance" name="insurance" placeholder="Insurance Provider" required>
              
              <h2>Emergency Contact</h2>
              
              <label for="emergency-contact-name">Emergency Contact Name:</label>
              <input type="text" id="emergency-contact-name" name="emergency-contact-name" placeholder="Emergency contact name.." required>
              
              <label for="emergency-contact-phone">Emergency Contact Phone:</label>
              <input type=other"text" id="emergency-contact-phone" name="emergency-contact-phone" placeholder="Emergency contact phone.." required>
              
              <label for="emergency-contact-relationship">Relationship to Emergency Contact:</label>
              <input type="text" id="emergency-contact-relationship" name="emergency-contact-relationship" placeholder="Relationship to emergency contact.." required>
              
              <input type="submit" value="Submit" onclick="redirectToPayment()">
              <input type="button" value="Clear Form" onclick="clearForm()">
              
              <script>
                function redirectToPayment() {
                  // Save form data as local variables
                  var name = document.getElementById("name").value;
                  var email = document.getElementById("email").value;
                  var age = document.getElementById("age").value;
                  var gender = document.getElementById("gender").value;
                  var symptoms = document.getElementById("symptoms").value;
                  var temperature = document.getElementById("temperature").value;
                  var bloodPressure = document.getElementById("blood-pressure").value;
                  var pulse = document.getElementById("pulse").value;
                  var height = document.getElementById("height").value;
                  var weight = document.getElementById("weight").value;
                  var bloodType = document.getElementById("blood-type").value;
                  var allergies = document.getElementById("allergies").value;
                  var medications = document.getElementById("medications").value;
                  var reason = document.getElementById("reason").value;
                  var appointment = document.getElementById("appointment").value;
                  var doctor = document.getElementById("doctor").value;
                  var insurance = document.getElementById("insurance").value;
                  var emergencyContactName = document.getElementById("emergency-contact-name").value;
                  var emergencyContactPhone = document.getElementById("emergency-contact-phone").value;
                  var emergencyContactRelationship = document.getElementById("emergency-contact-relationship").value;
              
                  // Save the data to localStorage or perform any desired operations
              
                  // Redirect to payment.html
                  window.location.href = "payment.html";
                }
              
                function clearForm() {
                  // Reset all form fields to empty
                  document.getElementById("name").value = "";
                  document.getElementById("email").value = "";
                  document.getElementById("age").value = "";
                  document.getElementById("gender").value = "";
                  document.getElementById("symptoms").value = "";
                  document.getElementById("temperature").value = "";
                  document.getElementById("blood-pressure").value = "";
                  document.getElementById("pulse").value = "";
                  document.getElementById("height").value = "";
                  document.getElementById("weight").value = "";
                  document.getElementById("blood-type").value = "";
                  document.getElementById("allergies").value = "";
                  document.getElementById("medications").value = "";
                  document.getElementById("reason").value = "";
                  document.getElementById("appointment").value = "";
                  document.getElementById("doctor").value = "";
                  document.getElementById("insurance").value = "";
                  document.getElementById("emergency-contact-name").value = "";
    document.getElementById("emergency-contact-phone").value = "";
    document.getElementById("emergency-contact-relationship").value = "";
  }
</script>
</form>
</section>

<!-----Footer----->
        <section class="footer">
            <div class="container">
            <p>To access and use all the features of ez|Care, you must login or create an account before attempting to make an appointment or use other services. Create an account or login by clicking > Create account < on the top right corner, and follow all steps for easy setup.<br><br>
                Available for qualifying applicants in the country of Belize.<br><br>
                ez|Care is issued by Aeon Inc, Belize City, Belize.<br><br>
                Learn more about ez|Care at yoh mamas house :)</p><br>
                <hr>
                <p>Copyright <i class="fa-regular fa-copyright"></i> 2023 Aeon Inc. All rights reserved.</p>
            </div>
        </section>
        
    </body>
    <script src="main.js"></script>s
</html>