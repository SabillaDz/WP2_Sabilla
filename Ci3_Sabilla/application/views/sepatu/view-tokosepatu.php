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

input[type=submit] {
  width: 100px;
  height : 50px;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 15px;
  cursor: pointer;
}

input[type=reset] {
  width: 100px;
  height : 50px;
  background-color: #333;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 15px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

input[type=reset]:hover {
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

<form action="<?= base_url('Tokosepatu/cetak'); ?>" method="post">

    <label for="">Nama Pembeli</label>
    <input type="text" id="np" name="np" placeholder="Masukkan Nama Anda">
    <?= form_error('np', '<span style="color:red;">', '</span>'); ?>
    <div class="div2"></div>

    <label for="">Nomor Handphone</label>
    <input type="text" id="nohp" name="nohp" placeholder="Masukkan No Hp">
    <?= form_error('nohp', '<br><span style="color:red;">', '</span>'); ?>
    <div class="div2"></div>

    <label for="">Merk Sepatu</label>
    <select name="sepatu" id="sepatu">
      <option value=""> --PILIH SEPATU-- </option>
      <option value="Nike">Nike</option>
      <option value="Adidas">Adidas</option>
      <option value="Kickers">Kickers</option>
      <option value="Eiger">Eiger</option>
      <option value="Bucherri">Bucherri</option>
    </select>
    <div class="div2"></div>
  
    <label for="">Ukuran Sepatu</label>
    <select name="uk" id="uk">
    <option value="">--PILIH UKURAN--</option>
      <option value="32">32</option>
      <option value="33">33</option>
      <option value="34">34</option>
      <option value="35">35</option>
      <option value="36">36</option>
      <option value="37">37</option>
      <option value="38">38</option>
      <option value="39">39</option>
      <option value="40">40</option>
      <option value="41">41</option>
      <option value="42">42</option>

    <input type="submit" value="Submit">
    <input type="reset" value="reset">
  </form>

  <h1>Harga Sepatu</h1>

<table id="merek">
  <tr>
    <th>Merk Sepatu</th>
    <th>Harga</th>
  </tr>
  
  <tr>
    <td>Nike</td>
    <td>375000</td>
  </tr>
  <tr>
    <td>Adidas</td>
    <td>300000</td>
  </tr>
  <tr>
    <td>Kickers</td>
    <td>250000</td>
  </tr>
  <tr>
    <td>Eiger</td>
    <td>275000</td>
  </tr>
  <tr>
    <td>Bucherri</td>
    <td>400000</td>
</table>

</div>

</form>

</body>
</html>
