<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color : coral;
}
div {
  float: center;
  padding: 10px;
  background-color: white;
}

.div1 {
  background: #333;
  text-align : center;
  font-family : "MV Boli";
  color : white;
}

.div2 {
  background: white;
  text-align : center;
  font-family : "MV Boli";
  color : white;
}


input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.button {
  background-color: #333;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border-radius: 15px;
  cursor: pointer;

}

.button:hover {
  background-color: #444;
}

#merek {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  height : 80 px;
  text-align: left;
}

#merek td, #merek th {
  border: 0px solid #ddd;
  padding: 8px;
}

#merek th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: white;
  color: black;
}

</style>
</head>


<body>

<div>
<div class="div1">Lud'z Shoes</div>
<div class="div2"></div>

<form action="<?= base_url('tokosepatu/cetak'); ?>" method="post">
    <label for="">Nama Pembeli:</label> <br>
    <?= $np; ?>
    
    <div class="div2"></div>

    <label for="">Nomor Hp</label> <br>
    <?= $nohp; ?>
    <div class="div2"></div>

    <label for="">Merk Sepatu</label> <br>
    <?= $sepatu; ?>
    <div class="div2"></div>

    <label for="">Ukuran</label><br>
    <?= $uk; ?>
    <div class="div2"></div>

    <label for="">Harga</label><br>
    <?= $harga; ?>
    <div class="div2"></div>

    <a href=<?php echo base_url().'Tokosepatu' ?> class="button">back</a>
  </form>


</div>

</body>
</html>
