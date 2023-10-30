if (window.location.href === "http://localhost/regions") {
  document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".toggleOrderImage");
    let ascending = true;
    images.forEach((image) => {
      image.addEventListener("click", function () {
        if (ascending) {
          image.src = "public/assets/images/chevron-down-solid.svg";
          image.alt = "fleche-bas";
        } else {
          image.src = "public/assets/images/chevron-up-solid.svg";
          image.alt = "fleche-haut";
        }
        ascending = !ascending;
      });
    });

    const table = document.querySelector("table");
    const tbody = table.querySelector("tbody");
    const rows = Array.from(tbody.querySelectorAll("tr"));
    let currentColumn = 0;

    function sortRows(columnIdx) {
      return rows.slice(1).sort((a, b) => {
        const aValue = a.cells[columnIdx].textContent;
        const bValue = b.cells[columnIdx].textContent;

        const numA = parseFloat(aValue);
        const numB = parseFloat(bValue);

        return ascending ? numA - numB : numB - numA;
      });
    }

    function updateTable(columnIdx) {
      currentColumn = columnIdx;
      const sortedRows = sortRows(columnIdx);
      rows.slice(1).forEach((row) => tbody.removeChild(row));
      sortedRows.forEach((row) => tbody.appendChild(row));
    }

    document
      .getElementById("toggleOrderNombreDePaysButton")
      .addEventListener("click", function () {
        updateTable(1);
      });

    updateTable(0);
  });
}
