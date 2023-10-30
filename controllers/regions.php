<?php include  'models/Database.php';

$sql = "SELECT r.name AS region, COUNT(c.country_id) AS nombre_de_pays
        FROM countries c
        INNER JOIN regions r ON c.region_id = r.region_id
        GROUP BY r.region_id
        ORDER BY COUNT(c.country_id) DESC";

$result = $conn->query($sql);

include  'views/regions.view.php';
