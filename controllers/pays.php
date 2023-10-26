<?php include  'models/Database.php';

$sql = "SELECT c.name AS country, r.name AS region, t.name AS continent
        FROM countries c
        INNER JOIN regions r USING (region_id)
        INNER JOIN continents t USING (continent_id)
        ORDER BY c.name";

$result = $conn->query($sql);

include  'views/pays.view.php';
