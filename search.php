<?php
    $searchq=$_POST["search_q"];

    $conn = mysqli_connect('localhost','root','','tovars_table');

    if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

    $searchq = trim($searchq);
    $searchq = strip_tags($searchq);
    mysqli_report(MYSQLI_REPORT_ERROR);
    $sql = "SELECT name FROM ` product` WHERE name LIKE '%$searchq%'";
    $q = mysqli_query($conn, $sql);

    if ($q == false) {
      print("Произошла ошибка при выполнении запроса");
    }

    $itog=mysqli_fetch_assoc($q);
        while ($itog = mysqli_fetch_assoc($q)) {
           printf("%s (%s)\n",$r["name"]);
        }
    mysqli_free_result($q);
    mysqli_close($conn);
    ?>