// let mahasiswa = {
//     nama: " Lidya",
//     nrp: "173040104",
//     email: "Lidya@unpas.ac.id"
// }

// console.log(JSON.stringify(mahasiswa));

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }
//jalankan ajax
// xhr.open('GET', 'coba.json', true);
// xhr.send();

//jquery

$.getJSON('coba.json', function (data) {
    console.log(data);
});