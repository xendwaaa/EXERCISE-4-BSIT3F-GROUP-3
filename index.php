<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Group 3 Profile</title>
  <link rel="shortcut icon" type="x-con" href="images/logo.jpg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<style>
  .getandpost {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: url("images/bg.jpg") #6771c7 no-repeat center;
    }
    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    label, input {
      display: block;
      margin-bottom: 10px;
      width: 100%;
    }
    input[type="submit"] {
      margin-top: 20px;
      background-color: #007bff;
      color: white;
      padding: 10px;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #0056b3;
    }
</style>

<section class="getandpost">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $position = $_POST['position'];
    
    $Name1 = "Xendra Catubigan";  
    $Position1 = "Assistant";

    $Name2 = "Joemel Bedeo";  
    $Position2 = "Leader";  

    $Name3 = "Son Mathew Reyes";  
    $Position3 = "Assistant";  

    $Name4 = "John Mark Octavio";  
    $Position4 = "Assistant";  

    $Name5 = "Andrian Bello";  
    $Position5 = "Sub.Leader";  

   if ($name == $Name1 && $position == $Position1) {
      header("Location: https://www.facebook.com/profile.php?id=100009397804282");
      exit();
   }
   else if ($name == $Name2 && $position == $Position2) {
    header("Location: https://www.facebook.com/Japrozx");
    exit();
   }
   else if ($name == $Name3 && $position == $Position3) {
    header("Location: https://www.facebook.com/mathew.reyes.9022");
    exit();
   }
   else if ($name == $Name4 && $position == $Position4) {
    header("Location: https://www.facebook.com/johnmark.octavio.50");
    exit();
   }
   else if ($name == $Name5 && $position == $Position5) {
    header("Location: https://www.facebook.com/adrianbello0112");
    exit();
   }
   else {
    echo "Name or position does not match.";
   }
}
?>

<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="position">Position:</label>
    <input type="text" id="position" name="position" required><br><br>
    
    <input type="submit" value="Submit">
</form>

</section>


<section id="group">
  <div class="container swiper">
    <div class="slider-wrapper">
      <div class="card-list swiper-wrapper">
        <?php
          $members = [
            ["name" => "Xendra Catubigan", "profession" => "Assistant", "image" => "images/nex.jpg", "link" => "https://www.facebook.com/profile.php?id=100009397804282"],
            ["name" => "Joemel Bedeo", "profession" => "Leader", "image" => "images/mel.jpg", "link" => "https://www.facebook.com/Japrozx"],
            ["name" => "Son Mathew Reyes", "profession" => "Assistant", "image" => "images/mat.jpg", "link" => "https://www.facebook.com/mathew.reyes.9022"],
            ["name" => "John Mark Octavio", "profession" => "Assistant", "image" => "images/jm.jpg", "link" => "https://www.facebook.com/johnmark.octavio.50"],
            ["name" => "Andrian Bello", "profession" => "Sub.Leader", "image" => "images/adi.jpg", "link" => "https://www.facebook.com/adrianbello0112"]
          ];
          

          foreach ($members as $member) {
            echo '<div class="card-item swiper-slide">';
            echo '<img src="' . $member["image"] . '" alt="User Image" class="user-image">';
            echo '<h2 class="user-name">' . $member["name"] . '</h2>';
            echo '<p class="user-profession">' . $member["profession"] . '</p>';
            echo '<a href="' . $member["link"] . '" class="message-button">Message</a>';
            echo '</div>';
          }
        ?>
        <div class="card-item swiper-slide">
          <img src="images/logo.jpg" alt="User Image" class="user-image">
        </div>
      </div>

      <div class="swiper-pagination"></div>
      <div class="swiper-slide-button swiper-button-prev"></div>
      <div class="swiper-slide-button swiper-button-next"></div>
    </div>
  </div>
        </section>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
 