<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <?php 
        $name = "NIK MUHAMMAD SYAHRUL SYAHZUWIE BIN ROSLAN";
        $matric_number = "A1220080";
        $course = "Computer Science";
        $year_of_study = "3rd Year";
        $address = "PT6919, Jalan Casuarina 8, Desa Casuarina, 71800, Nilai, Negeri Sembilan";
    ?>

    <table>
        <tr>
            <th>Detail</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td> 
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td> 
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td> 
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td> 
        </tr>
    </table>
    
</body>
</html>
