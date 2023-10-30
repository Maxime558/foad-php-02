<?php require 'partials/header.php';

if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>Régions<img class=toggleOrderImage id=toggleOrderRegionButton src=public/assets/images/chevron-down-solid.svg alt=fleche-bas></th>
                <th>Nombre de pays<img class=toggleOrderImage id=toggleOrderNombreDePaysButton src=public/assets/images/chevron-down-solid.svg alt=fleche-bas></th>
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
