<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: gray;
            font-size: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h2 {
            text-align: center;
            text-decoration: underline;
        }

        form {
            width: 450px;
            background: #fff;
            padding: 15px 40px 40px;
            border: 1px solid #ccc;
            margin: 50px auto 0;
            border-radius: 5px;
        }

        label {
            color: #999;
            font-size: 80%;
        }

        input,
        select,
        button {
            border: 1px solid #ccc;
            padding: 10px;
            display: block;
            width: 100%;
            box-sizing: border-box;
            border-radius: 2px;
        }

        .form-inline label,
        .form-inline input {
            display: inline-block;
            width: auto;
            padding-right: 15px;
        }

        .row {
            padding-bottom: 10px;
        }
    </style>
</head>

<body>
    <b>
        <form action="vidhansabha" method="GET">
            <h2>VOTER REGISTRATION FORM</h2>

            <div class="row">
                <label for="voterID">Voter ID No.</label>
                <input type="text" id="voterID" required>
            </div>

            <div class="row">
                <label for="aadharNo">Aadhar Card No.</label>
                <input type="text" id="aadharNo" required>
            </div>

            <div class="row">
                <label for="fullName">Full Name of Voter</label>
                <input type="text" id="fullName" required>
            </div>

            <div class="row">
                <label for="address">Address</label>
                <input type="text" id="address" required>
            </div>

            <div class="row">
                <label for="mobile">Mobile number</label>
                <input type="text" id="mobile" required>
            </div>

            <div class="row">
                <label for="dob">D.O.B</label>
                <input type="date" id="dob" required>
            </div>

            <div class="row">
                <label for="gender">Gender</label>
                <div class="form-inline">
                    <label><input type="radio" name="Gender" value="Male" required>Male</label>
                    <label><input type="radio" name="Gender" value="Female" required>Female</label>
                    <label><input type="radio" name="Gender" value="Others" required>Others</label>
                </div>
            </div>

            <div class="row">
                <label for="state">State</label>
                <select name="state" id="state" required>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Rajasthan">Rajasthan</option>
                </select>
            </div>

            

            <button type="submit" style="padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem; transition: background-color 0.3s, transform 0.3s;">
                REGISTER
            </button>
        </form>
    </b>
</body>

</html>
