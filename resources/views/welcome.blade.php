<head>
      <meta charset="utf-8">
      <title>Pesan Aja</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="center">
         <input type="checkbox" id="show">
         <label for="show" class="show-btn">Pesan Disini</label>
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
               Pesan Aja
            </div> <br>
            <form action="#">
            <h4>Kota Asal</h4>
                  <select class="form-select" aria-label="Default select example">
                  <option selected>Malang</option>
                  <option value="1">Pasuruan</option>
                  <option value="2">Surabaya</option>
                  <option value="3">solo</option>
                  <option value="4">Jogja</option>
                  <option value="5">Bandung</option>
                  <option value="6">Jakarta</option>
                  </select>
                  <h4>Kota Tujuan</h4>
                  <select class="form-select" aria-label="Default select example">
                  <option selected>Malang</option>
                  <option value="1">Pasuruan</option>
                  <option value="2">Surabaya</option>
                  <option value="3">solo</option>
                  <option value="4">Jogja</option>
                  <option value="5">Bandung</option>
                  <option value="6">Jakarta</option>
                  </select> 
                  
                <div> <h4>Kelas</h4>
                     <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                     <label class="form-check-label" for="flexRadioDefault1">
                        Premium
                     </label>
                     
                     <div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                     <label class="form-check-label" for="flexRadioDefault2">
                        Eksekutif
                     </label>
                    
                     <div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                     <label class="form-check-label" for="flexRadioDefault3">
                        Bisnis
                     </label>
                     
                     <div class="form-check">
                     <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                     <label class="form-check-label" for="flexRadioDefault4">
                        Ekonomi
                     </label>
                  </div>
                     <br>
                    
                     <input type="date">
                   
                     <input type="date">
                     </div>
               
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">Pesan</button>
               </div>
               
            </form>
         </div>
      </div>
   </body>