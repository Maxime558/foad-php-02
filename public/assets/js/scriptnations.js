document.addEventListener("DOMContentLoaded", function () {
  if (window.location.href === "http://localhost/nations") {
    const images = document.querySelectorAll(".toggleOrderImage");
    let ascendingImages = true;

    images.forEach((image) => {
      image.addEventListener("click", function () {
        if (ascendingImages) {
          image.src = "public/assets/images/chevron-up-solid.svg";
          image.alt = "fleche-haut";
        } else {
          image.src = "public/assets/images/chevron-down-solid.svg";
          image.alt = "fleche-bas";
        }
        ascendingImages = !ascendingImages;
      });
    });

    const table = document.querySelector("table");
    const tbody = table.querySelector("tbody");
    const rows = Array.from(tbody.querySelectorAll("tr"));
    let ascendingTable = true;
    let currentColumn = 0;

    function sortRows(columnIdx) {
      return rows.slice(1).sort((a, b) => {
        const aValue = a.cells[columnIdx].textContent;
        const bValue = b.cells[columnIdx].textContent;
        return ascendingTable
          ? aValue.localeCompare(bValue)
          : bValue.localeCompare(aValue);
      });
    }

    function updateTable(columnIdx) {
      currentColumn = columnIdx;
      const sortedRows = sortRows(columnIdx);
      rows.slice(1).forEach((row) => tbody.removeChild(row));
      sortedRows.forEach((row) => tbody.appendChild(row));
      ascendingTable = !ascendingTable;
    }

    document
      .getElementById("toggleOrderCountryButton")
      .addEventListener("click", function () {
        updateTable(0);
      });

    document
      .getElementById("toggleOrderRegionButton")
      .addEventListener("click", function () {
        updateTable(1);
      });

    document
      .getElementById("toggleOrderContinentButton")
      .addEventListener("click", function () {
        updateTable(2);
      });

    updateTable(0);
  }
});
