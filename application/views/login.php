<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- internal css -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
    
    :root
    {
      --merah : #FF0000;
      --putih : #FFFFFF;
    }

    .area-login {
      width: 30%;
      height: calc(100vh - 3vh);
      margin-left: 35%;
      margin-right: 35%;
    }

    .frame-login {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .bingkai-login {
      width: 100%;
      background-color: cadetblue;
      padding: 10px;
      border-radius: 20px;
    }

    .content-login {
      background-color: #fff;
      border-radius: 10px;
      padding: 10px;
    }

    .header-login {
      text-align: center;
      font: bold 25px 'Poppins', sans-serif;
      color: #555;
      padding-bottom: 20px;

    }

    .komponen-login {
      display: flex;
      flex-direction: column;
      width: 100%;

    }

    .text-login {
      height: 20px;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 15px;
      border: 1px solid #777;
      outline: none;
      transition: all 0.30s ease-in-out;
      font: 16px 'Poppins', sans-serif;
    }

    .text-login:focus {
      border: 1px solid #FF0000;
      box-shadow: 0 0px 10px rgba(255, 0, 0, 255);
    }

    .tombol-login {
      display: flex;
      width: 100%;
      margin-bottom: 10px;
    }

    .checkbox-login {
      display: flex;
      width: 100%;
      margin-bottom: 20px;
      font: 16px 'Poppins', sans-serif; 
      color: #333;     
    }

    .button-primary {
      height: 50px;
      background-color: #FF0000;
      outline: none;
      width: 49%;
      transition: all 0.30s ease-in-out;
      font: 20px 'Poppins', sans-serif;
      border: 1px solid #FF0000;
      border-radius: 25px;
      color: #fff;
      cursor: pointer;
    }

    .separate-login {
      width: 2%;
    }

    .button-secondary {
      height: 50px;
      background-color: #e3e3e3;
      outline: none;
      width: 49%;
      transition: all 0.30s ease-in-out;
      font: 20px 'Poppins', sans-serif;
      border: 1px solid #777;
      border-radius: 25px;
      color: #333;
      cursor: pointer;
    }

    .pesan_error
    {
      color: var(--merah); 
      font: 12px 'Poppins', sans-serif;
      margin-top: -10px;
      display: none;
    }
  </style>
</head>

<body>
  <section class="area-login">
    <div class="frame-login">
      <div class="bingkai-login">
        <div class="content-login">
          <div class="header-login">Login Aplikasi</div>
          <div class="komponen-login">
            <input type="text" id="txt_username" class="text-login" placeholder="Isi Username" />
            <!-- pesan error username -->
            <p class="pesan_error" id="err_username"></p>

            <!-- pesan error password -->
            <input type="text" id="txt_password" class="text-login" placeholder="Isi Password" />
            <p class="pesan_error" id="err_password"></p>
          </div>

          <div class="checkbox-login">
            <label>
              <input name="chk_ingat" id="chk_ingat" type="checkbox" value="1">Ingat Saya
            </label>
          </div>

          <div class="tombol-login">
            <button id="btn_login" class="button-primary">Login</button>
            <div class="separate-login"></div>
            <button id="btn_reset" class="button-secondary" onclick="return setRefresh()">Reset</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    //deklarasi id untuk "btn_login"
    let btn_login = document.getElementById("btn_login");
    let status_checkbox;
    
    //buat event untuk "btn_login"
    btn_login.addEventListener("click", setLogin);

    //buat fungsi setLogin()
    function setLogin()
    {
      // console.log(); = untuk menghilangkan jejak console

      //ambil parameter id masing-masing komponen
      let txt_username = document.getElementById("txt_username");
      let txt_password = document.getElementById("txt_password");
      let err_username = document.getElementById("err_username");

      let status_username;
      let status_password;
      

      // alert(x);
      // let x = 10;
      // alert(x);
      // var y = 5 ;

    //  y = 15;
    //   alert(y);
    //   var y = 5;
    //   alert(y);

      //cek apakah username sudah diisi/belum
      if(txt_username.value === "")
      {
        //manipulasi properties CSS di JS
        err_username.style.display = 'block';
        // err_username.style.fontSize = '30px';
        err_username.innerHTML = "Username Harus Diisi !";
        //isi nilai status username
        status_username = 0;
      }
      else
      {
        err_username.style.display = 'none';
        err_username.innerHTML = "";
        //isi nilai status username
        status_username = 1;
      }

      //cek apakah password sudah diisi/belum
      if(txt_password.value === "")
      {
        err_password.style.display = 'block';
        err_password.innerHTML = "Password Harus Diisi !";
        //isi nilai status password
        status_password = 0;
      }
      else
      {
        err_password.style.display = 'none';
        err_password.innerHTML = "";
        //isi nilai status password
        status_password = 1;
      }

      //cek kondisi apakah status username = 1 dan status password = 1
      if(status_username == 1 && status_password == 1)
      {
        // cek apakah username dan password benar
        if(txt_username.value === "KA" && txt_password.value === "FTIK")
        {
          //Cek variabel untuk checkbox
          let chk_ingat = document.getElementById("chk_ingat");

          //Jika chk_ingat dipilih
          // if(chk_ingat.checked === true)
          // {
          //   status_checkbox = 1;
          // }
          // //Jika chk_ingat tidak dipilih
          // else
          // {
          //   status_checkbox = 0;
          // }

          // let xyz
          //ternary operator
          const chk = (chk_ingat.checked === true)
          ?
          status_checkbox = 1
          // [status_checkbox = 1, xyz = "oke"]
          //lebih dari 1 pernyataan
          // [status_checkbox = 1,
          // argument 2, 
          // argument 3]
          :
          status_checkbox = 0
          // alert (chk);

          //alihkan ke halaman (controller) "Dashboard"
          //Panggil fungsi gotoDashboard
          gotoDashboard();
        }
        else
        {
          alert("Username / Password Salah !");
        }
      }
      
      // alert("Login");
    }

    
    const gotoDashboard = () =>
    {
      //Buat variabel untuk dijadikan session
      let data = {
        'username' : txt_username.value,
        'checkbox' : status_checkbox
      }

      fetch('<?php echo site_url("Dashboard/setSession"); ?>', {
        method: 'POST',
        headers: {
          'Content-type': 'application/json'
        },
        body: JSON.stringify(data)
      })

      //Respon json
      .then(function (response) {
        return response.json();
      })

      //Alihkan ke halaman dashboard
      .then(function (data){
        //Jika hasil = 1
        if(data.hasil === 1)
        {
          location.href='<?php echo base_url(); ?>'
        }
      })
    }

    //Buat fungsi untuk ke halaman Dashboard
    // function gotoDashboard()
    // {
      // //Buat variabel untuk dijadikan session
      // let data = {
      //   'username' : txt_username.value,
      //   'checkbox' : status_checkbox
      // }

      // fetch('<?php echo site_url("Dashboard/setSession"); ?>', {
      //   method: 'POST',
      //   headers: {
      //     'Content-type': 'application/json'
      //   },
      //   body: JSON.stringify(data)
      // })

      // //Respon json
      // .then(function (response) {
      //   return response.json();
      // })

      // //Alihkan ke halaman dashboard
      // .then(function (data){
      //   //Jika hasil = 1
      //   if(data.hasil === 1)
      //   {
      //     location.href='<?php echo base_url(); ?>'
      //   }
      // })
    // }

    //buat fungsi setRefresh()
    function setRefresh()
    {
      //reload halaman Login(controller)
      location.href='<?php echo site_url("Login"); ?>';
    }
  </script>
</body>

</html>