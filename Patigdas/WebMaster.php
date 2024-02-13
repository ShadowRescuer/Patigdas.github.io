<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Master</title>
</head>
<body>

<style>
body {
    background-image: url('1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

h1 {
    color: #333; 
    font-size: 3rem; 
    margin-bottom: 1rem; 
    text-align: center;
}

p {
    margin-left: 50px;
    color:#333;
    line-height: 1.5;
    font-size: 2rem;
    margin-top: 3rem;
}

table {
    border-collapse: collapse;
    width: 50%;
    margin: 0 auto;
}

th, td {
    border: 1px solid black;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

.container {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
    margin-top: 10px;
}

.photo {
    margin-left: 50px;
    margin-right: 50px;
    width: 300px;
    height: 300px;
}

.photo1 {
    margin-left: 50px;
    margin-right: 50px;
    width: 200px;
    height: 200px;
}

.photo2 {
    margin-left: 50px;
    margin-right: 50px;
    width: 200px;
    height: 200px;
}

.photo3 {
    margin-left: 50px;
    margin-right: 50px;
    width: 200px;
    height: 200px;
}

</style>

    <?php 
    echo "<h1>My Information</h1>";
    echo "<p>Personal Information</p>";
    echo "<div class='container'>";
    echo "<div class='photo'><img src='1667861152707.jpg' alt='Your Photo' width='300' height='300'></div>";
    echo "<table>
    <tr><th>Name: </th><td>Philistine Athena S. Patigdas</td></tr>
    <tr><th>Birthdate: </th><td>July 05,2004</td></tr>
    <tr><th>Gender: </th><td>Female</td></tr>
    <tr><th>Age: </th><td>19</td></tr>
    <tr><th rowspan='3'>Contact Details: </th>
    <td>Email Address: s.patigdas.philistineathena@cmu.edu.ph</td></tr>
    <tr><td>Facebook Account: Athena Patigdas</td></tr>
    <tr><td>Mobile Number: 09467089463</td></tr>
    </table>";
    echo "</div><br/>";

    echo "<p>Education</p>";
    echo "<div class='container'>";
    echo "<div class='photo1'><img src='second pic.jpg' alt='Education Photo' width='200' height='200'></div>";
    echo "<table>
    <tr><th>Elementary: </th><td>Adtuyon Pangantucan Elementary School</td></tr>
    <tr><th>High School: </th><td>Pangantucan National High School</td></tr>
    <tr><th>College: </th><td>Central Mindanao University</td></tr>
    <tr><th>Course & Year: </th><td>BSIT 2A</td></tr>
    </table>";
    echo "</div><br/>";

    echo "<p>Skills</p>";
    echo "<div class='container'>";
    echo "<div class='photo2'><img src='Skills.jpg' alt='Skills Photo' width='200' height='200'></div>";
    echo "<table>
    <tr><th>Sepak Takraw Player</th></tr>
    <tr><th>Badminton Player</th></tr>
    <tr><th>Basketball Player</th></tr>
    <tr><th>Music Creator</th></tr>
    </table>";
    echo "</div><br/>";

    echo "<p>Experience</p>";
    echo "<div class='container'>";
    echo "<div class='photo3'><img src='Experience.jpg' alt='Experience Photo' width='200' height='200'></div>";
    echo "<table>
    <tr><th>Video Editing</th></tr>
    <tr><th>Photo Editing</th></tr>
    </table>";
    echo "</div><br/>";
    ?>


</body>
</html>