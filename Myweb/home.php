<?php
$nic = "";
$name = "";
$tel = "";
$address = "";
$course = "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO INFINITY Campus PANADURA</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        body {
            font-family: 'Pacifico', cursive;
            background-image: url("uni2.jpg");
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            overflow: auto;
            color: #1a237e; /* Dark Blue text color */
        }

        marquee {
            background-color: #0288d1; /* Dark Blue background */
            color: #ffffff;
            padding: 10px;
            opacity: 0.7;
            position: fixed;
        }

        h2 {
            font-family: "Sofia", sans-serif;
        }

        h1 {
            font-size: 50px;
            text-align: center;
            font-family: 'Times new roman', cursive;
            margin: 20px 0;
            color: #1a237e; /* Dark Blue text color */
        }

        h2 {
            color: black; /* Dark Blue text color */
            text-align: center;
            font-size: 60px;
            opacity: 0.7;
            margin: 0px;
            padding: 100px 10px 10px 10px;
        }

        form {
            max-width: 600px;
            opacity: 0.8;
            margin: 20px auto;
            padding: 20px;
            background: linear-gradient(to bottom, #81d4fa 0%, #ffcc80 100%);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            animation: fadeIn 1s ease-out; /* Apply the fade-in animation */
        }
 
        table {
            font-family: 'Pacifico', cursive;
            color: #1a237e; /* Dark Blue text color */
            font-size: 16px;
            background: linear-gradient(to bottom, #64b5f6 0%, #ffb74d 100%);
            border-collapse: collapse;
            border: 4px solid #1a237e; /* Dark Blue border */
            width: 100%;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #3f51b5; /* Darker Blue border */
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #1a237e; /* Dark Blue text color */
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 20px;
            border: 1px solid #3f51b5; /* Darker Blue border */
            border-radius: 4px;
            color: #1a237e; /* Dark Blue text color */
        }

        input[type="submit"] {
            background: linear-gradient(to right, #1a237e, #ffcc80);
            color: #ffffff; /* White text color */
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background: linear-gradient(to right, #0d47a1, #e65100);
        }

        .button-container {
            display: flex;
            justify-content: space-between;
        }

        .delete-btn,
        .update-btn {
            background: #e65100; /* Dark Orange button color */
            color: #ffffff; /* White text color */
        }

        .delete-btn:hover,
        .update-btn:hover {
            background: #bf360c; /* Darker Orange on hover */
        }

        p.status {
            font-family: 'Times New Roman', Times, serif;
            color: rgb(37, 212, 66);
            font-size: 25px;
            text-align: center;
        }
        p.error {
            font-family: 'Times New Roman', Times, serif;
            color: red;
            font-size: 25px;
            text-align: center;
        }

        .search {
            opacity: 0.6;
            border: none;
            color: white;
            text align: center;
            display: flex;
            font-size: 16px;
            justify-content: center;
            animation: fadeIn 1s ease-out;
        }

        form.search {
            opacity: 0.7;
            background: none;
            opacity: 0.6;
            border: none;
            color: white;
            text align: center;
            display: flex;
            font-size: 16px;
            justify-content: center;
            animation: fadeIn 1s ease-out;
        }

    </style>
</head>

<body>
    <marquee scrollamount="20">
        <h1 class="font-effect-fire">TO INFINITY Campus PANADURA</h1>
    </marquee>

    <h2 >Student Management System</h2>
    
    <form class="search" action="search.php" method="post">
        <label>
            <input type="text" name="search" placeholder="Enter NIC Number">
            <input type="submit" name="ssearch" value="Search">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php } ?>    
        </label>
    </form>

    <form action="submit.php" method="post">
    <?php if (isset($error)) { ?>
        <p class="error"><?php echo $error; ?></p>
    <?php } ?>
        <table>
            <tr>
                <th>Field</th>
                <th>Data</th>
            </tr>
            <tr>
                <td>Student NIC:</td>
                <td><input type="text" id="nic" name="nic" placeholder="Enter NIC" value="<?php echo htmlspecialchars($_GET['nic'] ?? ''); ?>"></td>
            </tr>
            <tr>
                <td>Student Name:</td>
                <td><input type="text" id="name" name="name" placeholder="Enter Name" value="<?php echo htmlspecialchars($_GET['name'] ?? ''); ?>"></td>
            </tr>
            <tr>
                <td>Student Tel:</td>
                <td><input type="text" id="tel" name="tel" placeholder="Enter Telephone" value="<?php echo htmlspecialchars($_GET['tel'] ?? ''); ?>"></td>
            </tr>
            <tr>
                <td>Student Address:</td>
                <td><input type="text" id="address" name="address" placeholder="Enter Address" value="<?php echo htmlspecialchars($_GET['address'] ?? ''); ?>"></td>
            </tr>
            <tr>
                <td>Student Course:</td>
                <td><input type="text" id="course" name="course" placeholder="Enter Course" value="<?php echo htmlspecialchars($_GET['course'] ?? ''); ?>"></td>
            </tr>
        </table>

        <div class="button-container">
            <input type="submit" name="save" value="Save Data">
            <input type="submit" name="delete" class="delete-btn" value="Delete Data">
            <input type="submit" name="update" class="update-btn" value="Update Data">
            <input type="reset" value="Clear Fields">
        </div>
        <?php if (isset($_GET['status'])) { ?>
            <p class="status"> <?php echo $_GET['status']; ?> </p>
        <?php } ?>
    </form>

    
</body>

</html>