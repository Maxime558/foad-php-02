<?php require 'partials/header.php';

if ($result->num_rows > 0) {
    echo "<table>
                <tr>
                    <th>Pays<img class=toggleOrderImage id=toggleOrderCountryButton src=public/assets/images/chevron-down-solid.svg alt=fleche-bas></th>
                    <th>Région<img class=toggleOrderImage id=toggleOrderRegionButton src=public/assets/images/chevron-down-solid.svg alt=fleche-bas></th>
                    <th>Continent<img class=toggleOrderImage id=toggleOrderContinentButton src=public/assets/images/chevron-down-solid.svg alt=fleche-bas></th>
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

<img src="" alt="">