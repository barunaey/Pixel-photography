<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Styled Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
 /* General Styles */
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}
/* Fixed Navigation Bar */
nav {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background: #ff7b00; /* Use your accent color */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  z-index: 1000;
  transition: background 0.3s ease;
}

nav:hover {
  background: #e06e00; /* A slightly darker shade on hover, optional */
}

/* Navigation List Styles */
nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Navigation Items */
nav ul li {
  margin: 0 20px;
}

/* Navigation Links */
nav ul li a {
  text-decoration: none;
  color: #fff;
  font-weight: 600;
  font-size: 1.1rem;
  padding: 20px 0;
  display: block;
  transition: color 0.3s ease;
}

nav ul li a:hover {
  color: #333;
}

/* Add top padding to main content to prevent it from being hidden behind the fixed nav */
main {
  padding-top: 80px; /* Adjust this value if your nav's height changes */
}


/* ABOUT US SECTION (Hero-Style) */
#about {
  /* Use your desired background image */
  background: url('images/your-background.jpg') center/cover no-repeat;
  position: relative;
  color: #fff;
  padding: 150px 0; /* Adjust for desired height */
  text-align: center;
}

/* Optional dark overlay for better text contrast */
#about .overlay {
  content: "";
  position: absolute;
  top: 0; 
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.5); /* Dark overlay */
  z-index: 1;
}

#about .content {
  position: relative;
  z-index: 2; /* Ensure text sits above overlay */
  max-width: 800px;
  margin: 0 auto;
  padding: 0 20px;
}

#about h2 {
  font-size: 3rem;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 1.5px;
}

#about p {
  font-size: 1.2rem;
  line-height: 1.6;
  margin-bottom: 40px;
}

#about .btn-container .btn {
  display: inline-block;
  padding: 14px 26px;
  background: #ff7b00;
  color: #fff;
  text-decoration: none;
  border-radius: 8px;
  margin: 0 10px;
  transition: all 0.3s ease;
  font-weight: 600;
}

#about .btn-container .btn:hover {
  background: #fff;
  color: #ff7b00;
}

/* SERVICES SECTION */
#services {
  background-color: #f4f4f4;
  padding: 80px 20px;
  text-align: center;
}

#services h2 {
  font-size: 2.5rem;
  margin-bottom: 40px;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.service-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 30px;
  max-width: 1200px;
  margin: 0 auto;
}

.service-card {
  background: #fff;
  border-radius: 15px;
  padding: 30px;
  text-align: center;
  flex: 1 1 300px; /* Adjust min width as needed */
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

.service-card h3 {
  margin-bottom: 15px;
  font-size: 1.4rem;
  color: #222;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.service-card p {
  font-size: 1rem;
  color: #555;
  line-height: 1.6;
}

/* Portfolio Section */
#portfolio {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('background.jpg') center/cover no-repeat;
    padding: 100px 0;
    text-align: center;
    color: #fff;
}

.divider {
    width: 60px;
    height: 4px;
    background: #ff7b00;
    margin: 10px auto 25px auto;
    border-radius: 2px;
}

/* Gallery Menu */
.gallery-menu {
    text-align: center;
    margin-bottom: 35px;
}

.gallery-menu .btn {
    padding: 14px 20px;
    border: none;
    margin: 10px;
    background: #ff7b00;
    color: #fff;
    border-radius: 25px;
    cursor: pointer;
    font-size: 1.1rem;
    font-weight: 600;
    transition: all 0.3s ease-in-out;
}

.gallery-menu .btn:hover,
.gallery-menu .btn.active {
    background: #fff;
    color: #ff7b00;
    transform: scale(1.08);
}

/* Gallery Content */
.gallery-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    justify-content: center;
    padding-top: 30px;
}

.image-container {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s;
}

.image-container img {
    width: 100%;
    height: auto;
    transition: transform 0.4s ease-in-out;
    border-radius: 15px;
}

.image-container:hover img {
    transform: scale(1.1);
    filter: brightness(85%);
}

.image-container:hover {
    transform: translateY(-8px);
}

/* Contact Section */
#contact {
    background: #222;
    padding: 100px 0;
    text-align: center;
    color: #fff;
}

#contact form {
    width: 100%;
    max-width: 600px;
    margin: auto;
    background: #333;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

#contact input,
#contact textarea {
    width: 100%;
    padding: 14px;
    margin: 14px 0;
    border: 1px solid #555;
    border-radius: 8px;
    font-size: 1rem;
    background: #444;
    color: #fff;
}

#contact button {
    padding: 14px 26px;
    background: #ff7b00;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1.1rem;
    font-weight: bold;
    transition: all 0.3s;
}

#contact button:hover {
    background: #fff;
    color: #ff7b00;
    transform: scale(1.1);
}


</style>
<body>
    <header>
        <h1>Welcome to Our Website</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Gallery</a></li>
            <li><a href="#contact,php">Contact</a></li>
        </ul>
    </nav>
    <main>
<!-- ABOUT US SECTION -->
<section id="about">
  <!-- Dark overlay (optional) -->
  <div class="overlay"></div>
  
  <div class="content">
    <h2>About Us</h2>
    <p>
    <?php
                    include 'connection.php';
                    $query = "SELECT Description FROM home";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $description = $row['Description'];
                    } else {
                        $description = "Default description"; // Provide a default if no description is found
                    }
                    mysqli_close($conn);
                    echo $description;
                    ?>
    </p>
    <div class="btn-container">
      <a href="#" class="btn">Choose Demo</a>
      <a href="#" class="btn">View More Themes</a>
    </div>
  </div>
</section>

<!-- SERVICES SECTION -->
<section id="services">
  <h2>Our Services</h2>
  <div class="service-container">
    <div class="service-card">
      <h3>Web Development</h3>
      <p>We build responsive and modern websites.</p>
    </div>
    <div class="service-card">
      <h3>SEO Optimization</h3>
      <p>Boost your website's ranking with our strategies.</p>
    </div>
    <div class="service-card">
      <h3>Digital Marketing</h3>
      <p>Grow your online presence with our marketing solutions.</p>
    </div>
  </div>
</section>

        
        <!-- Begin Portfolio Section -->
        <section id="portfolio" class="page bg-style1">
            <div class="container">
                <div class="page-header text-center">
                    <h2>Gallery</h2>
                    <div class="divider"></div>
                    <p class="subtitle">Some of our latest works</p>
                </div>
                <div class="gallery">
                    <form method="GET" class="gallery-menu">
                        <button type="submit" name="category" value="All" class="btn">All</button>
                        <button type="submit" name="category" value="Portrait" class="btn">Portrait</button>
                        <button type="submit" name="category" value="Nature" class="btn">Nature</button>
                        <button type="submit" name="category" value="Product" class="btn">Product</button>
                        <button type="submit" name="category" value="Wedding" class="btn">Wedding</button>
                    </form>
                    <div class="gallery-content">
                        <?php
                        include 'connection.php';
                        $category = isset($_GET['category']) ? $_GET['category'] : 'All';
                        $query = ($category === 'All') ? "SELECT img_name, category FROM image" : "SELECT img_name, category FROM image WHERE category = ?";
                        if ($stmt = mysqli_prepare($conn, $query)) {
                            if ($category !== 'All') {
                                mysqli_stmt_bind_param($stmt, "s", $category);
                            }
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<div class="image-container">';
                                    echo '<img src="images/' . htmlspecialchars($row['img_name']) . '" alt="Image">';
                                    echo '</div>';
                                }
                            } else {
                                echo '<p>No images found in the database.</p>';
                            }
                        } else {
                            echo '<p>Database query failed.</p>';
                        }
                        mysqli_stmt_close($stmt);
                        mysqli_close($conn);
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->
        
        <section id="contact">
            <h2>Contact Us</h2>
            <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connect.php';
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    // Check if any field is empty
    if (empty($first_name) || empty($last_name) || empty($email) || empty($comments)) {
        echo "Error: All fields are required.";
    } else {
        $query = "INSERT INTO contact (First_name, Last_name, Email, Comments) VALUES ('$first_name', '$last_name', '$email', '$comments')";
        if (mysqli_query($conn, $query)) {
            echo "Thank you for contacting us.";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
             <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connect.php';
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    $query = "INSERT INTO contact (First_name, Last_name, Email, Comments) VALUES ('$first_name', '$last_name', '$email', '$comments')";
    if (mysqli_query($conn, $query)) {
        echo "Thank you for contacting us.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    // Close connection
    mysqli_close($conn);
}
?>
<form action="#" method="post">
<h3 class="contact-heading">Get in touch</h3>
    <div class="form-floating my-3">
        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First name" aria-label="First name" />
        <label for="first_name">First name</label>
    </div>
    <div class="form-floating my-3">
        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last name" aria-label="Last name" />
        <label for="last_name">Last name</label>
    </div>
    <div class="form-floating my-3">
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" />
        <label for="email">Email address</label>
    </div>
    <div class="form-floating my-3">
        <textarea class="form-control" id="comments" name="comments" placeholder="Comments" rows="3"></textarea>
        <label for="comments">Comments</label>
    </div>
    <br />
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Our Website. All rights reserved.</p>
    </footer>
</body>
</html>