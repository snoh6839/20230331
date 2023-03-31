<?php
//connect db
$dbc = mysqli_connect("localhost", "root", "root506", "employees", 3306);

// var_dump($dbc);

//request

$result_query_emp_no = mysqli_query($dbc, "SELECT emp_no, concat(last_name, ' ' , first_name) as full_name, gender, birth_date FROM employees Where emp_no <= 10005;");

if (mysqli_num_rows($result_query_emp_no) > 0) {
    while ($row = mysqli_fetch_assoc($result_query_emp_no)) {
        echo "emp_no: " . $row["emp_no"] . " full_name: " . $row["full_name"] . " gender: " . $row["gender"] . " birth_date: " . $row["birth_date"] . "\n" ;
    }
} else {
    echo "0 results";
}


mysqli_close($dbc);

?>