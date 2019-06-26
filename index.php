<!DOCTYPE html>
<html>
<head>
    <title>Campus Event Software</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body id="reg_body">
<div class="header">
    <a href = "test.php"><h3 id="heading">Return to Login Page</h3></a>
    <br/>
    <p id="reg_header">Registration</p>
</div>
<div id="registration">
<div id="list" class="container">
        <form method="POST" action="registration_comp.php" name="myForm" >
                <div>
                    <label>First Name:</label>
                    <input type="text" name="firstName" id="firstName" />
                </div>
                <br />
                <div>
                    <label>Last Name:</label>
                    <input type="text" name="lastName" id="lastName" />
                </div>
                <br />
                <div>
                        <label>Major:</label>
                        <select name="Major" id="Major" onchange="">
                            <option value="LiberalArts">Liberal Arts</option>
                            <option value="NaturalSciences">Natural Sciences</option>
                            <option value="Engineering">Engineering</option>
                            <option value="CreativeArts">Creative Arts</option>
                            <option value="Business">Business</option>
                            <option value="Technology">Technology</option>
                            <option value="HospitalityandTourism">Hospitality and Tourism</option>
                        </select>
                </div>
                <br />
                <div>
                    <label>Classification:</label>
                    <select name="Classification" id="Classification" onchange="">
                        <option value="Freshman">Freshman</option>
                        <option value="Sophomore">Sophomore</option>
                        <option value="Junior">Junior</option>
                        <option value="Senior">Senior</option>
                        <option value="Graduate Student">Graduate Student</option>
                    </select>
                </div>
                <br />
                <div>
                        <label>Phone Number:</label>
                        <input type="text" name="phoneNumber" id="phoneNumber" placeholder="xxx-xxx-xxxx" />
                </div>
                <br />
                <div>
                        <label>Gender:</label>
                        <select name="Gender" id="Gender" onchange="">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Non-Binary">Non-Binary</option>
                        </select>
                </div>
                <br />
                <div>
                    <label>Email:</label>
                    <input type="text" name="email" id="email" placeholder="email@school.edu" />
                </div>
                <br />
                <div>
                    <label>Username:</label>
                    <input type="text" name="Username" id="Username" />
                </div>
                <br />
                <div>
                    <label>Password:</label>
                    <input type="password" name="Password" id="Password" />
                </div>
                <br />
                <p>Please select which groups you are interested in:</p>
                <div id = "orgs">
                <list>
                    <ul>
                    <div>
                        <input type="checkbox" id="organization" name="organization" class="regular-checkbox">
                        <label for="organization">Organizations</label>
                    </div>
                    </ul>  
                    <ul>
                    <div>
                        <input type="checkbox" id="meetups" name="meetups" class="regular-checkbox">
                        <label for="meetups">Meetups</label>                              
                    </div>
                    </ul>
                    <ul>
                    <div>
                            <input type="checkbox" id="socialEvents" name="socialEvents" class="regular-checkbox">
                            <label for="socialEvents">Social Events</label>                              
                    </div>
                    </ul>
                    <ul>
                    <div>
                            <input type="checkbox" id="foodieFriends" name="foodieFriends" class="regular-checkbox">
                            <label for="foodieFriends">Foodie Friends</label>                              
                    </div>
                    </ul>
                </list>
                </div>
                <br />
                <input type="submit" name="submit" class="sub" />
        </form>
</div>
</div>
</body>
</html>