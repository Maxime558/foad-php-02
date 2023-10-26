<?php require 'partials/header.php';

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>Région</th>
                <th>Nombre de pays</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["region"] . "</td>
                <td>" . $row["nombre_de_pays"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Aucun résultat trouvé.";
}

require 'partials/footer.php';
