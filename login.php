<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>People Care PCVS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style media="screen">
  body {
    background-image: url(img/back4.png);
    background-repeat: no-repeat;
    background-size: cover;
  }

  #backlogin {
    background: white;
    width: 35%;
    height: 350px;
    border: 1px solid #d2d2d2;
    border-radius: 5px;
    margin-top: 150px;
  }

  @font-face {
    src: url('font/Product Sans Regular.ttf');
    font-family: Product Sans;
  }

  @font-face {
    src: url('font/OpenSans-Light.ttf');
    font-family: OpenSans-Light;
  }

  #backlogin form {
    margin-top: 15px;
    float: left;
    padding: 5px;
  }

  #backlogin .inputa {
    width: 90%;
    margin-top: 1px;
    height: 50px;
    border: 0px;
    border-bottom: 1px solid #002afb;
    font-size: 16px;
    font-family: OpenSans-Light;
    background: transparent;
  }

  #backlogin .wed {
    margin-top: 40px;
    width: 45%;
    height: 40px;
    background: #4c00ff;
    border: none;
    color: white;
    font-family: product sans;
    font-size: 20px;
    border-radius: 5px;
  }

  #backlogin h1 {
    text-align: center;
    padding: 5px;
    color: #4400ff;
    font-family: Product Sans;
  }

  #backlogin hr {
    width: 50%;
    height: 4px;
    border: none;
    background: #001eff;
  }
</style>

<body>
  <center>
    <div id="backlogin">
      <h1>People Care PCVS</h1>
      <hr>
      <form id="login" method="post"> 
        <input type="text" class="inputa" name="fusername" value="" placeholder="Masukan Username">
        <input type="password" class="inputa" name="fpassword" value="" placeholder="Masukan password"> 
        <input type="submit" class="wed" name="fmasuk" value="Login"> 
        <input type="submit" class="wed" name="fdaftar" value="Sign Up"> 
      </form>

      <?php
        if (isset($_POST['fmasuk'])){
            $username = $_POST['fusername'];
            $password = $_POST['fpassword'];
            $sql = "SELECT * FROM tab_login WHERE username = '$username' AND password =  '$password'";
            $qry = mysqli_query($koneksi,$sql);
            $check = mysqli_fetch_assoc($qry);
            
            if($cek['username'] = $username && $cek['password'] =$password){
                echo "Login success!";
                $_SESSION['userweb']=$username;
                header("location:admin.php");
                exit;
            }
            else{
                echo"Sorry user name and password is wrong";
            }
        }
           
    ?>
    </div>
  </center>
</body>

</html>