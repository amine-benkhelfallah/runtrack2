<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
        <title>jour 10 job09</title>
	</head>
	<body>
    <h1>Base de données “jour09”</h1>
        <?php
        $mysqli = new mysqli("localhost", "root", "", "jour09");
        $mysqli->set_charset("utf8");
        $request = $mysqli->query("SELECT `salles`.* FROM salles ORDER BY capacite DESC ");
        $result_fetch_arry = $request -> fetch_array(MYSQLI_ASSOC);

        //<thead>
        echo "<table border='2'><tr>";
        foreach ( $result_fetch_arry as $key => $value)
        {
        echo " <th> " . $key . " </th> ";
        } 
        echo "</tr>";
        //</thead>
        //<tbody>
        while ( $result_fetch_arry != NULL)
        {
            echo "<tr>";
            foreach ( $result_fetch_arry as $value)
            {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
            $result_fetch_arry = $request -> fetch_array(MYSQLI_ASSOC);
        }
        echo "</table>";
         //</tbody>
        ?>   
    </body>
</html>




