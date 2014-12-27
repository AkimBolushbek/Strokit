/**
 * Created by Akim on 27.12.2014.
 */
var asc1 = 1,
    asc2 = 1,
    asc3 = 1,
    asc4 = 1;

window.onload = function () {
    news = document.getElementById("news");
}
function sort_table(tbody, col, asc) {

    var rows = tbody.rows,
        rlen = rows.length,
        arr = new Array(),
        i, j, cells, clen;

    for (i = 0; i < rlen; i++) {
        cells = rows[i].cells;
        clen = cells.length;
        arr[i] = new Array();

        for (j = 0; j < clen; j++) {
            arr[i][j] = cells[j].innerHTML;
            arr[i][3] = parseInt(arr[i][3]);
            arr[i][0] = new  Date(arr[i][0]);
        }
    }
    arr.sort(function (a, b) {
        return (a[col] == b[col]) ? 0 : ((a[col] > b[col]) ? asc : -1 * asc);
    });

  for (i = 0; i < rlen; i++) {
      arr[i][0] = arr[i][0].toLocaleDateString();
      rows[i].innerHTML = "<td>" + arr[i].join("</td><td>") + "</td>";
    }
}