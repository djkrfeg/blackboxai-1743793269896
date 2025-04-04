<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: aqua;
        }
        h1 {
            font-size: 45px;
        }
        h2 {
            font-size: 35px;
            text-align: center;
        }
        p {
            font-size: 25px;            
        }
        .inline {
            display: flex;
            justify-content: space-around;
        }
        table {
            width: 1000px;
            font-size: 30px;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 3px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        button, input[type="submit"] {
            padding: 10px;
            background-color: red;
            color: white;
            border: none;
            cursor: pointer;
            margin: 10px;
        }
        button a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <center><h1>VIDHANSABHA ELECTIONS</h1></center>
    <h2>ONLINE VOTER FORM</h2>
    <div class="inline">
        <form id="votingForm" action="">
            <p>
                <label for="ward">Ward</label>
                <input type="text" id="ward" value="TAJPUR" readonly> &nbsp;&nbsp;&nbsp;

                <label for="date">Date of Election</label>
                <input type="text" id="date" value="28 December 2023" readonly> &nbsp;&nbsp;&nbsp;

                <label for="constituency">Constituency</label>
                <input type="text" id="constituency" value="Jamalpur Khadia" readonly>
            </p>
            
            <p style="font-size: 35px; text-align: center;"><b>List of Candidates</b></p>

            <table>
                <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Name of Candidate</th>
                        <th>Symbol</th>
                        <th>Select to Vote</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Jethalal</td>
                        <td>📺</td>
                        <td><input type="radio" name="vote" value="Jethalal" required></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bhide</td>
                        <td>🛵</td>
                        <td><input type="radio" name="vote" value="Bhide" required></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Iyer</td>
                        <td>🚀</td>
                        <td><input type="radio" name="vote" value="Iyer" required></td>
                    </tr>
                </tbody>
            </table>

            <h3>Undertaking</h3>
            <input type="checkbox" name="undertaking" value="agree" required> I declare that I have not voted through offline voting process of Election Commission of India. I know casting vote multiple times is a punishable offence.
            <br><br>

            <center>
                <input type="submit" value="Submit">
                <button type="button" onclick="window.location.href='votingwebsite';">
                    <a href="votingwebsite">Go To Voting Website</a>
                </button>
            </center>
        </form>
    </div>
</body>
</html>
