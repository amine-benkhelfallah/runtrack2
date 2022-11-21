<!DOCTYPE html>
<html >
    <head>
    <title>PHP jour 6 job5</title>
    <meta charset="UTF-8">
    <?php
            if($_GET){
                switch($_GET["style"]){
                    case "style1":
                        echo '<link rel="stylesheet" href="style1.css">';
                        break;
                    case "style2":
                        echo '<link rel="stylesheet" href="style2.css">';
                        break;
                    case "style3":
                        echo '<link rel="stylesheet" href="style3.css">';
                        break;
                    case "style4":
                        echo '<link rel="stylesheet" href="style4.css">';
                        break;
                }
            }
        ?>

    </head>
    <body>

        <form action="" method="GET">
            <div class="form-row">
                <label for="style-select">Style :</label>
                <select name="style" id="style-select">
                    <option value="style1">Style 1</option>
                    <option value="style2">Style 2</option>
                    <option value="style3">Style 3</option>
                    <option value="style4">Style 4</option>
                </select>
            </div>
            <input type="submit" value="Submit">
        </form>
      
    </body>
</html>