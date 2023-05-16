<form name="Latihan02" id="latihan02" method="post" onsubmit="return checkform()">
NIM<br>
<input type="text" name="txNIM" id="txNIM"><br>

<br>Jenis Kelamin<br>
<input type="radio" name="txJK" id="txJK" value="L">Laki-laki
<input type="radio" name="txJK" id="txJK" value="P">Perempuan<br>

<br>Jurusan<br>
<select name="txJurusan" id="txJurusan">
    <option value="MTI"> MTI </option>
    <option value="DGM"> DGM </option>
    <option value="KAB"> KAB </option>
</select>

<br>Hoby<br>
<input type="checkbox" name="txhobi" id="txhobi" value="1">Sepak Bola
<input type="checkbox" name="txhobi" id="txhobi" value="2">Bulu Tangkis
<input type="checkbox" name="txhobi" id="txhobi" value="3">Bola Voly

<br><br>
<button type="submit"> Kirim </button>
</form>

<script type="text/javascript">
    function checkform(){
        let frm = document.getElementById("Latihan02").elements

        let NIM = frm.txhobi
        let hoby1 = frm.txhobi[0].checked
        let hoby2 = frm.txhobi[1].checked
        let hoby3 = frm.txhobi[2].checked
        
        return false;
    }
</script>