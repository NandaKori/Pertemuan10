<form name="Latihan01" method="post" onsubmit="return checkform(this)">
NIM<br>
<input type="text" name="txNIM"><br>

<br>Jenis Kelamin<br>
<input type="radio" name="txJK" value="L">Laki-laki
<input type="radio" name="txJK" value="P">Perempuan<br>

<br>Jurusan<br>
<select name="txJurusan">
    <option value="MTI"> MTI </option>
    <option value="DGM"> DGM </option>
    <option value="KAB"> KAB </option>
</select>

<br>Hoby<br>
<input type="checkbox" name="txhobibola" value="1">Sepak Bola
<input type="checkbox" name="txhobibulutangkis" value="2">Bulu Tangkis
<input type="checkbox" name="txhobivoly" value="3">Bola Voly

<br><br>
<button type="submit"> Kirim </button>
</form>

<script type="text/javascript">
    function checkform(frm){
        let form = frm.elements;
        let NIM = form.namedItem("txNIM").value;
        let jnskel = form.namedItem("txJK").value;
        let jur = form.namedItem("txjurusan").value;
        let hobi = [
            form.namedItem("txhobibola").checked;
            form.namedItem("txhobibulutangkis").checked;
            form.namedItem("txhobivoly").checked;
        ];


        console.log("NIM "+NIM);
        console.log("Jenis Kelamin "+jnskel);
        console.log("Jurusan "+jur);
        console.log("hobi "+hobi);
        return false;
    }
</script>