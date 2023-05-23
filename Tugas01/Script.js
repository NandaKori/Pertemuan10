var luas;
var keliling;
var alas;
var tinggi;
var sisiMiring;
function hitung() {
    alas = parseFloat(document.getElementById("alas").value);
	tinggi = parseFloat(document.getElementById("tinggi").value);
	sisiMiring = parseFloat(document.getElementById("sisiMiring").value);
	luas = (alas * tinggi);
	keliling = 2 * (alas + sisiMiring);
	document.getElementById('luas').value = luas;
	document.getElementById('keliling').value = keliling;
}
function reset(){
    document.getElementById("alas").reset();
    document.getElementById("tinggi").reset();
    document.getElementById("sisiMiring").reset();
    document.getElementById("luas").reset();
    document.getElementById("keliling").reset();
}