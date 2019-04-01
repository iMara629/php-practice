<html>

<head>
    <title>hi</title>
</head>

<body>
    <?php require_once('partials/nav.php') ?>
    <link href="assets/style.css" rel="stylesheet">
    <h2>CPA View</h2>
    <div id="signup">
        <form method="get" action="extras/process.php">

            <div class="container">

                <form action="/action_page.php">
                    <input type="file" name="pic" accept="image/*">
                </form>

                <br>
                <label for="email"><b>Zip Code:</b></label><br>
                <input type="text" placeholder="Zip" name="zip" required>
                <br>
                <select>
                    <option value="ap">Asset Protection</option>
                    <option value="ap">Bankruptcy</option>
                    <option value="ap">Bookkeeping</option>
                    <option value="ap">Business Planning</option>
                    <option value="ap">Business Valuations</option>
                    <option value="ap">Computer Consulting</option>
                    <option value="ap">Consulting Services</option>
                    <option value="ap">Consulting Education</option>
                    <option value="ap">Corporate Taxes</option>
                    <option value="ap">Cost Accounting</option>
                    <option value="ap">Elder Care</option>
                    <option value="ap">Estate Planning</option>
                    <option value="ap">Estate Tax Returns</option>
                    <option value="ap">Expatriate Tax</option>
                    <option value="ap">Fiduciary Accounting</option>
                    <option value="ap">Financial Management</option>
                    <option value="ap">Financial Planning</option>
                    <option value="ap">Financial Statements</option>
                    <option value="ap">Foreign National Tax</option>
                    <option value="ap">Forensic Accounting</option>
                    <option value="ap">Fraud Prevention</option>
                    <option value="ap">Incorporation & Dissolution</option>
                    <option value="ap">Incorporation Services</option>
                    <option value="ap">Individual Taxation</option>
                    <option value="ap">Insurance</option>
                    <option value="ap">International Taxation</option>
                    <option value="ap">Internet/High Tech</option>
                    <option value="ap">Inventory</option>
                    <option value="ap">Invesment Advisory</option>
                    <option value="ap">Leasing/Asset Acquisition</option>
                    <option value="ap">Litigation Support</option>
                    <option value="ap">Management Advisory</option>
                    <option value="ap">Marriage & Divorce</option>
                    <option value="ap">Mergers & Acquisitions</option>
                    <option value="ap">Partnership LLC/LLP</option>
                    <option value="ap">Partnership Taxation</option>
                    <option value="ap">Payroll & Salex Tax</option>
                    <option value="ap">Peer Review</option>
                    <option value="ap">Pension & Retirement</option>
                    <option value="ap">Projection & Forecasts</option>
                    <option value="ap">Small Business</option>
                    <option value="ap">Software Support</option>
                    <option value="ap">State Taxation</option>
                    <option value="ap">Tacation-General/option>
                    <option value="ap">Trusts</option>
                    <option value="ap">Write Ups</option>
                </select>

                <br>

                <select>
                    <option value="is">Industries Serviced</option>
                    <option value="is">Architects</option>
                    <option value="is">Arts & Creative Services</option>
                    <option value="is">Automotive</option>
                    <option value="is">Banks</option>
                    <option value="is">Broker-Dealers</option>
                    <option value="is">Casinos & Gaming</option>
                    <option value="is">Colleges & Schools</option>
                    <option value="is">Computer Consulting</option>
                    <option value="is">Construction</option>
                    <option value="is">Credit Unions</option>
                    <option value="is">Dentists & Doctors</option>
                    <option value="is">Electronic Commerce</option>
                    <option value="is">Embroidery/Textiles</option>
                    <option value="is">Entertainment</option>
                    <option value="is">Environmental Services</option>
                    <option value="is">Equiptment Leasing</option>
                    <option value="is">Farming & Agriculture</option>
                    <option value="is">Financial Institutions</option>
                    <option value="is">Gas & Oil</option>
                    <option value="is">Government Center</option>
                    <option value="is">Healthcare</option>
                    <option value="is">Homeowners Associations</option>
                    <option value="is">Hotels/Motels</option>
                    <option value="is">Imports/Exports</option>
                    <option value="is">Information Systems</option>
                    <option value="is">Insurance</option>
                    <option value="is">Interior Design</option>
                    <option value="is">Internet</option>
                    <option value="is">Lawyers</option>
                    <option value="is">Leasing Companies</option>
                    <option value="is">Manufacturing</option>
                    <option value="is">Mining</option>
                    <option value="is">Mortgage Banking</option>
                    <option value="is">Not-For-Profit Organizations</option>
                    <option value="is">Real Estate</option>
                    <option value="is">Restaurants</option>
                    <option value="is">Retail</option>
                    <option value="is">SEC-Public Companies</option>
                    <option value="is">Software Design</option>
                    <option value="is">Technology</option>
                    <option value="is">Thoroughbreds</option>
                    <option value="is">Transportation</option>
                    <option value="is">Utilities</option>
                    <option value="is">Wholesalers & Jobbers</option>
                </select>
                <br>
                <label for="email"><b>Full Name:</b></label><br>
                <input type="text" placeholder="John A Doe" name="fn" required>
                <br>
                <label for="email"><b>Email:</b></label><br>
                <input type="text" placeholder="JohnADoe@email.com" name="em" required>
                <br>
                <label for="username"><b>Username:</b></label><br>
                <input type="text" placeholder="Username" name="un" required>
                <br>
                <!--change password?-->
                <label for="psw"><b>Password:</b></label><br>
                <input type="password" placeholder="Password" name="pw" required>
                <br>
                <label for="psw-repeat"><b>Repeat Password:</b></label><br>
                <input type="password" placeholder="Repeat Password" name="pwr" required>
                <br>
                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>
                <br>
                <form action="//www.html.am/html-codes/textboxes/submitted.cfm">
                    <textarea name="myTextBox" cols="50" rows="5">
Text here
</textarea>
                </form>
                <br>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <?php require_once('partials/footer.php') ?>

</body>

</html>
