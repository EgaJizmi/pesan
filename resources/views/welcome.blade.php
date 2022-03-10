<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
     <link rel="stylesheet" href="/css/style.css">
      <meta charset="utf-8">
      <title>Pesan Aja</title>
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               pesan tiket
            </div>
           
         </div>
         <div class="form-container">
       <label for="login" class="slide login">Data diri</label>
            </div>
            <div class="form-inner">
               <form action="#" class="login">
                  <div class="field">
                     <input type="text" placeholder="Nama" required>
                  </div>
                  <div class="field">
                     <input type="email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                  <input type="tel" placeholder="Contact" pattern="[0-9]{4}-[0-9]-[0-9]-{4}" required >
                  </div>
               
                  &ensp; 
                  <div>
                   </style>  mau kemana? 
                  </div>
               
                     <div class="field">
                     <input type="text" placeholder="tujuan" required>
                  </div>
                  <div class="field">
                     <input type="text" placeholder="asal" required>
                  </div>
                  <div class="field">
                     <input type="date" placeholder="pilih kelas" required>
                  </div>
                  <div class="field">
                     <input type="date"  required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Pesan">
                  </div>
            
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");

           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
           return false;
         });
      </script>
   </body>
</html>