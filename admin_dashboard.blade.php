<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            background: linear-gradient(135deg, #6db3f2, #1e62d0); 
            font-family: 'Arial', sans-serif;
            text-align: center;
            padding: 50px;
            margin: 0;
            animation: fadeIn 1s ease;
            color: white; 
        }

        h1 {
            font-size: 48px;
            margin-bottom: 30px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); 
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; 
            gap: 20px; 
        }

        .button {
            background-color: #ffffff;
            color: #007bff;
            border: none;
            border-radius: 25px; 
            padding: 15px 25px; 
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease; 
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); 
            text-decoration: none; 
            width: 300px; 
            height: 50px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            position: relative; 
            overflow: hidden;
        }

        .button:hover {
            background-color: #007bff; 
            color: white; 
            transform: translateY(-5px); 
        }

        .button:active {
            transform: translateY(2px); 
        }

        .button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 300%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3); 
            transition: all 0.4s ease; 
            transform: translateX(-50%) translateY(-100%); 
            border-radius: 25px; 
            z-index: 0;
        }

        .button:hover::before {
            transform: translateX(-50%) translateY(0); 
        }

        .button span {
            position: relative; 
            z-index: 1; 
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        
        @media (max-width: 600px) {
            .button {
                width: 90%; 
                font-size: 16px;
            }

            h1 {
                font-size: 36px; 
            }
        }
    </style>
</head>

<body>
    <h1>Admin Dashboard</h1>
    <div class="container">
        <a href="employee_details" class="button"><span>Fetch Employee Details</span></a>


        <a href="edit_employee" class="button"><span>Edit Employee Details</span></a>


        <a href="add_employee" class="button"><span>Add an Employee</span></a>

        <a href="remove_emp" class="button"><span>Remove an Employee</span></a>
         
        <a href="candidate_details" class="button"><span>Fetch Candidate Details</span></a>
        
        <a href="edit_candidate" class="button"><span>Edit Candidate Details</span></a>
    
        <a href="add_candidate" class="button"><span>Add a Candidate</span></a>

       
        <a href="remove_candidate" class="button"><span>Remove a Candidate</span></a> 
        <a href="emp_crud" class="button"><span>Employee Management</span></a>
        <a href="candidate_crud" class="button"><span>Candiate Management</span></a>

         
        <a href="voting_result" class="button"><span>Fetch Voting Details</span></a>
        
        <a href="update_voting_time" class="button"><span>Update Voting Time</span></a> 
    </div>
</body>

</html>
