<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- js -->
    <script src="script.js"></script>
    <title>Jajaran Genjang</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Luas Jajaran Genjang</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="border">
                        <h4>RUMUS</h4>
                        <p>Luas Jajar Genjang = a * t</p>
                        <p>Keliling Jajar Genjang = 2 * (a + b)</p>
                    </div>
                    <label for="alas">Alas (a)</label>
                    <input type="number" class="form-input" id="alas" name="alas" placeholder="Masukkan alas jajar genjang">
                    <label for="tinggi">Tinggi (t)</label>
                    <input type="number" class="form-input" id="tinggi" name="tinggi" placeholder="Masukkan tinggi jajar genjang">
                    <label for="sisiMiring">Miring (b)</label>
                    <input type="number" class="form-input" id="sisiMiring" name="sisiMiring" placeholder="Masukkan sisi miring jajar genjang">
                    <input type="button" class="btn" value="Hitung" onclick="hitung()">
                    <input type="button" class="btn-secondary" value="Reset" onclick="reset()">
                    <br>
                    <br>
                    <label>Luas: </label><input type="number" class="form-input-disabled" id="luas" name="luas" disabled>
                    <br>
                    <label>Keliling: </label><input type="number" class="form-input-disabled" id="keliling" name="keliling" disabled>
                </form>
            </div>
        </div>
    </div>
</body>
</html>