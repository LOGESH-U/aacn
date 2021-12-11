 <?php 
    
    error_reporting(0);
    $name=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phoneNumber'];
    $message=$_POST['message'];
    require_once('php_files/databaseConnection.php');

    $contactUsInsertQuery="insert into contact_us(user_name,email_id,phone_no,message) values('$name','$email',$phone,'$message')";
    $outPut=mysqli_query($connection,$contactUsInsertQuery);
    
?>



<section id="contactInfo">
      <div class="contactUs">
        <p>contact us</p>
        <p>You can also request more information with this form</p>
        <div class="form">
          <form action="contact_us.php" method="post">
            <input
              type="text"
              name="username"
              id="username"
              placeholder="Name"
              class="userName"
              required
            />
            <div class="inputCenter">
              <input
                type="email"
                name="email"
                id="email"
                placeholder="Email"
                class="email"
                required
              />

              <input
                type="tel"
                name="phoneNumber"
                id="phoneNumber"
                pattern="[0-9]{10}" 
                required
                placeholder="Phone Number"
                class="phoneNumber"
              />
            </div>
            <textarea name="message" class="message" id="message" cols="30" rows="10" required placeholder="your message here"></textarea>
            <button name="submit">submit now</button>
          </form>
        </div>
      </div>
      <div class="contactInfo">
        <p>contact info</p>
        <p class="location">
          <i class="fas fa-map-marked-alt"> </i>
          Tamilnadu State Mental Health Authority</br>
          Institute of mental health campus</br> 
          Medavakkam Tank Road,</br> 
          Kilpauk,<br />
          Chennai-600 010
        </p>
        <p class="phone">
          <i class="fas fa-phone-volume"></i>
          <a href=""
            ><span>telephone</span><br />
            044 26420965</a
          >
        </p>
        <p class="mail">
          <i class="fas fa-envelope"></i>
          <a href="">
            <span> mail us</span> <br />
            tnsmha@gmail.Com</a
          >
        </p>
      </div>
  </section>

  