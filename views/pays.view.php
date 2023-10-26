<?php require 'partials/header.php';
 
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Pays</th>
                    <th>Région</th>
                    <th>Continent</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["country"] . "</td>
                    <td>" . $row["region"] . "</td>
                    <td>" . $row["continent"] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "Aucun résultat trouvé.";
    }
    ?>

<?php require 'partials/footer.php'; ?>