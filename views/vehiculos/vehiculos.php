<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data ["title"];?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2><?php echo $data ["title"];?></h2>
    <a href="#" class="add-button">Agregar</a>
    <table class="table-database">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Modelo</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Color</th>
            </tr>
        </thead>
        <tbody>
        <?php 

            foreach($data ["vehicles"] as $dat)
            {
                echo "<tr>";
                echo "<td>".$dat["car_number_plate"]."</td>";
                echo "<td>".$dat["trademark"]."</td>";
                echo "<td>".$dat["model"]."</td>";
                echo "<td>".$dat["year"]."</td>";
                echo "<td>".$dat["color"]."</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>