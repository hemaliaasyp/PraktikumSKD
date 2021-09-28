<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Cipher</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <meta charset="utf-8">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition register-page">
  <div class="register-box" style="width:400px"> <!--menampilkan seberapa luas dari box-->
     <div class="register-logo">
      <a href=""><b> Affine Chiper</a> 
     </div>

    <div class="box box-info">
      <?php	
	if(isset($_POST['submit1'])){
            function Cipher($ch, $key)
            {
                if (!ctype_alpha($ch))
                        return $ch;

                $offset = ord(ctype_upper($ch) ? 'A' : 'a');
                return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
            }

            function Encipher($input, $key)
            {
                $output = "";

                $inputArr = str_split($input);
                foreach ($inputArr as $ch)
                        $output .= Cipher($ch, $key);

                return $output;
            }

            function Decipher($input, $key)
            {
                    return Encipher($input, 26 - $key);
            }
            
            
        }else if(isset($_POST['submit2'])){
            function Cipher($ch, $key)
            {
                if (!ctype_alpha($ch))
                        return $ch;

                $offset = ord(ctype_upper($ch) ? 'A' : 'a');
                return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
            }

            function Encipher($input, $key)
            {
                $output = "";

                $inputArr = str_split($input);
                foreach ($inputArr as $ch)
                        $output .= Cipher($ch, $key);

                return $output;
            }

            function Decipher($input, $key)
            {
                    return Encipher($input, 26 - $key);
            }
        }
        ?>
      
    <br>
    <p class="login-box-msg" style="font-size:20px !important"><b></b></p> <!--memiliki nama enkripsi dan method post-->
            <form name="enkripsi" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Isi Teks</label> <!--menampilkan label-->
                  <textarea name="plain" required="true" oninvalid="this.setCustomValidity('Tidak boleh kosong!')"
                               oninput="setCustomValidity('')" type="text" class="form-control" rows="2" placeholder="Isikan teks disini"></textarea>            
                </div>
                <!--diatas menjelaskan pada isi kunci tidak boleh kosong jika text kosong akan muncul isikan text disini-->
                <div class="form-group">
                  <label>Isi kunci</label><!--menampilkan label-->
                  <input title="Pilih Kunci." required="true" oninvalid="this.setCustomValidity('Tidak boleh kosong!')" 
                               oninput="setCustomValidity('')" type="number" class="form-control" name="metode" placeholder="Masukan kunci">
                </div>
                 <!--diatas menjelaskan pada isi kunci tidak boleh kosong jika kunci kosong akan muncul isikan kunci disini-->
                </div>
              
              <div class="box-footer">
                  <table class="table table-stripped">
                      <tr>
                          <td><input type="submit" name="submit1" value="Enkrip" style="width: 100%"></td>
                          <td><input type="submit" name="submit2" value="Dekrip" style="width: 100%"></td>
                      </tr>
                  </table>
              </div>
            </form>
              <div class="box-body">
                  <label>Hasil Enkripsi</label> <!--menampilkan hasil-->
                  <table class="table table-bordered">
                      <tr style="background-color:#6FACD5"> <!--menampilkan warna background-->
                          <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo Encipher($_POST['plain'], $_POST['metode']);} 
                          if (isset($_POST['submit2'])){ echo Decipher($_POST['plain'], $_POST['metode']);}?></b></td>
                      </tr>
                  </table>
                  <label>Key</label>
                  <table class="table table-bordered">
                      <tr style="background-color:#6FACD5">
                          <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo $_POST['metode'];} 
                          if (isset($_POST['submit2'])){ echo $_POST['metode'];}?></b></td>
                      </tr>
                  </table>
      <br>
      <br>
                </div>
        </div>
</div>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>
</body>
</html>



