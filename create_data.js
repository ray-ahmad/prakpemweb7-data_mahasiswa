let url = new URLSearchParams(window.location.search);

if(url.has('action') && url.get('action') == "create"){
    let data_mhs = document.getElementById("data_mhs");
    let alert_box = document.getElementById("alert-box");

    let row = data_mhs.insertRow(9);
    let cells = [];

    for (let i = 0; i <= 9; i++) {
        cells[i] = row.insertCell(i);
    }
    // ?action=create&nama=Udin&nim=121140128&prodi=Teknik+Elektro&email=asep%40test.com&password=ppp&jenis_kelamin=Laki-laki&tgl_lahir=2023-10-23&alamat=ssss&film=sssss
    cells[0].innerHTML = "9";
    cells[1].innerHTML = url.get('nama');
    cells[2].innerHTML = url.get('nim');
    cells[3].innerHTML = url.get('prodi');
    cells[4].innerHTML = url.get('email');
    cells[5].innerHTML = url.get('password');
    cells[6].innerHTML = url.get('jenis_kelamin');
    cells[7].innerHTML = url.get('tgl_lahir');
    cells[8].innerHTML = url.get('alamat');
    cells[9].innerHTML = url.get('film');
    alert_box.style.display = "block";
}