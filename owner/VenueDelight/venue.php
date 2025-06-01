<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Venue Details</title>
      <link rel="stylesheet" href="venue1.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="container">
      <div class="text">VENUE DETAILS</div>
      <form name="form" action="addvenue.php" method="post">
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="hallname" required>
               <div class="underline"></div>
               <label for="">Hall Name</label>
            </div>
            <div class="input-data">
               <input type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="contactnumber" required>
               <div class="underline"></div>
               <label for="">Contact Number</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="email" name="email" required>
               <div class="underline"></div>
               <label for="">Email Address</label>
            </div>
            <div class="input-data">
               <input type="text" name="cost" required>
               <div class="underline"></div>
               <label for="">Cost</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="number" name="hallcapacity" required>
               <div class="underline"></div>
               <label for="">Hall Capacity</label>
            </div>
            <div class="input-data">
               <input type="text" name="facilityavailable" required>
               <div class="underline"></div>
               <label for="">Facility Available</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="address" required>
               <div class="underline"></div>
               <label for="">Address</label>
            </div>
            <div class="input-data">
               <input type="text" name="description" required>
               <div class="underline"></div>
               <label for="">Description</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               Image1<input type="file" name="brows" required>
               <div class="underline"></div>
              <!--  <label for="">Image</label> -->
            </div>
            <div class="input-data">
              Image2<input type="file" name="brows1"required>
               <div class="underline"></div>
              <!--  <label for="">Image</label> -->
            </div>
         </div>
          <div class="form-row">
            <div class="input-data">
               Image3<input type="file" name="brows2" required>
               <div class="underline"></div>
           <!--     <label for="">Image</label> -->
            </div>
            <div class="input-data">
              Image4<input type="file" name="brows3" required>
               <div class="underline"></div>
              <!--  <label for="">Image</label> -->
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               License<input type="file" name="brows4" required>
               <div class="underline"></div>
           <!--     <label for="">Image</label> -->
            </div>
            <div class="input-data">
              Aadhar Card<input type="file" name="brows5" required>
               <div class="underline"></div>
              <!--  <label for="">Image</label> -->
            </div>
         </div>
        <!--  <div class="form-row">
         <div class="input-data textarea">
            <textarea rows="8" cols="80" required></textarea>
            <br />
            <div class="underline"></div>
            <label for="">Write your message</label>
            <br /> -->
           <!--  <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" value="submit">
               </div>
            </div> -->
          <!--   <button name="sub" style="background: linear-gradient(-135deg, #8f1537, #c7004c ,#e37070);color: #fff;height: 5%;
                   width: 60%;border-radius: 25px; font-size: 20px;border:none;margin-left: 20%;">ADD</button> -->
                   <input type="submit" name="sub" value="ADD" style="background: linear-gradient(-135deg, #8f1537, #c7004c ,#e37070);color: #fff;height: 5%;
                   width: 60%;border-radius: 25px; font-size: 20px;border:none;margin-left: 20%;">
      </form>
      </div>
   </div>
</form>
</div>
</body>
</html>