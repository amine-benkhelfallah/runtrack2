<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
        <title>jour 10 job07</title>
	</head>
	<body>
    <h1>Base de données “jour09”</h1>
        <?php
        $mysqli = new mysqli("localhost", "root", "", "jour09");
        $mysqli->set_charset("utf8");
        $request = $mysqli->query("SELECT SUM(superficie) FROM etage; ");
        $result_fetch_arry = $request -> fetch_array(MYSQLI_ASSOC);

        //<thead>
        echo "<table border='2'><tr>";
        foreach ( $result_fetch_arry as $key => $value)
        {
        echo " <th> " . "Superficie totale" . " </th> ";
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




