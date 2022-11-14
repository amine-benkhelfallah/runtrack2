<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">

    </head>

    <body> 
        <?php
        $boolean = true;
        $Integer = 8;
        $String = 'LaPlateforme';
        $Float = 3.17;

        echo "<table border = 1>
            <thead> <tr> <th> Type </th> <th> Nom </th> <th> Valeur </th> </tr> </thead>
            <tbody>
                <tr> <th>boolean</th> <td> True </td> <td>$boolean</td> </tr>
                <tr> <th>Integer</th> <td> Nombre entier </td> <td>$Integer</td> </tr>
                <tr> <th>String</th> <td> Chaine de caracteres </td> <td>$String</td> </tr>
                <tr> <th>Float</th> <td> Nombre avec virgule </td> <td>$Float</td> </tr>
            </tbody>
        </table>"
        ?>   
    </body>
</html>