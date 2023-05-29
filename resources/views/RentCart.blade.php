<!DOCTYPE html>
<html>

<head>
   <title>Shopping Cart</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" />
   <link href="RentCart.css" rel="stylesheet">
</head>

<body>

   <section>
      <div class="container">
         <h2>Rent Cart</h2>
         <div class="cart">
            <div class="col-md-12 col-lg-10 mx-auto">
                <div class="cart-item"style="border-radius: 8px;">
                    <div class="row justify-content-start">
                      <div class="col-md-6">
                        <div class="pt-1 pb-1 text-left"> <!-- Menambahkan kelas text-left untuk membuat tulisan rata kiri -->
                          <div class="d-flex justify-content-start align-items-center"> <!-- Mengubah nilai justify-content menjadi flex-start -->
                            <h5 class="mr-3 d-inline-block" style="margin-right: 150px;">Product</h5> <!-- Menambahkan properti margin-right -->
                            <h5 class="mr-3 d-inline-block" style="margin-right: 60px;">Duration(Month)</h5> <!-- Menambahkan properti margin-right -->
                            <h5 class="d-inline-block">Price</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

               <div class="cart-item">
                  <div class="row">
                     <div class="col-md-7 center-item">
                        <img src="babyw.webp" alt="">
                        <div class="barang" style="margin-right: 40px;">
                        <h5>Baby Walker</h5>
                        <h6>Kalimantan Barat</h6>
                        </div>
                        <h5>$ <span id="phone-total">1219</span> </h5>
                     </div>

                     <div class="col-md-5 center-item">

                        <div class="input-group number-spinner">
                           <button id="phone-minus" class="btn btn-default"><i class="fas fa-minus"></i></button>
                           <input id="phone-number" type="number" min="0" class="form-control text-center" value="1">
                           <button id="phone-plus" class="btn btn-default"><i class="fas fa-plus"></i></button>

                        </div>
                        </div>

                        </div>
                  </div>


               <div class="cart-item">
                  <div class="row">
                     <div class="col-md-7 center-item ">
                        <img src="bathub.jpg" alt="">
                        <div class="barang" style="margin-right: 40px;">
                        <h5>Baby Walker</h5>
                        <h6>Kalimantan Barat</h6>
                        </div>
                        <h5>$ <span id="case-total">59</span> </h5>
                     </div>
                     <div class="col-md-5 center-item">

                        <div class="input-group number-spinner">
                           <button id="case-minus" class="btn btn-default"><i class="fas fa-minus"></i></button>
                           <input id="case-number" type="number" min="0" class="form-control text-center" value="1">
                           <button  id="case-plus" class="btn btn-default"><i class="fas fa-plus"></i></button>
                        </div>
                        </div>
                        <img src="images/remove.png" alt="" class="remove-item">
                     </div>
                  </div>


               <div class="cart-item">
                <div class="row justify-content-end">
                  <div class="col-md-6">
                    <div class="pt-1 pb-1">
                      <div class="d-flex justify-content-end align-items-center"> <!-- Menggunakan flexbox untuk menempatkan elemen secara sejajar -->
                        <h5 class="mr-3">Total: $<span id="sub-total">1,278</span></h5> <!-- Memberikan margin kanan agar ada jarak antara elemen -->
                        <button type="button" class="btn btn-success check-out"style="color: #000;">Rent</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
         </div>
      </div>
   </section>
   <script src="RentCart.js"></script>
</body>
</html>
