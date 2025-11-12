

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "Nur Aina Soleha Binti Nor Aminni";
        $matric = "CI240015";
        $course = "Bachelor of Computer Science (Information Security) with Honours";
        $yearstudy = "3 years";
        $address = "No 11, Jalan Cengal 3, Taman Desaru Utama, 81930, Bandar Penawar, Johor";

    ?>

    <!-- Add border="1" -->
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td> 
        </tr>
                <tr>
            <td>Matric number</td>
            <td><?php echo "$matric"; ?></td> 
        </tr>
                <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td> 
        </tr>
                <tr>
            <td>Year of study</td>
            <td><?php echo "$yearstudy"; ?></td> 
        </tr>
                <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td> 
        </tr>
    </table>
    
</body>
</html>
