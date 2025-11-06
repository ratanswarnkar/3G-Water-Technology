<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>3G Water Technology</title>
  <style>
    /* -------- RESET -------- */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
      scroll-behavior: smooth;
    }

    /* -------- BLUE BAR -------- */
    .top-bar {
      background: #456589;
      color: #fff;
      padding: 8px 0;
      font-size: 14px;
    }

    .top-bar .container {
      width: 90%;
      margin: 0 auto;
      display: flex;
      justify-content: flex-start;
      align-items: center;
    }

    /* -------- WHITE LOGO BAR -------- */
   .mid-bar {
  background: #fff;
  padding: 12px 0;
  border-bottom: 1px solid #ddd;
}
.mid-bar .container {
  width: 90%;
  margin: 0 auto;
}

.mid-bar-content {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.mid-logo {
  height: 70px; /* adjust as needed */
  margin-left: 30px; /* creates space on left */
}

.company-name {
  font-size: 2rem;
  color: #fff;
  font-weight: 700;
  margin-right: 40px;
  text-transform: uppercase;
  letter-spacing: 1px;
  background: linear-gradient(135deg, #0078d4, #00b4d8); /* attractive blue gradient */
  padding: 10px 25px;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.company-name:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 20px rgba(0,0,0,0.25);
}

@media (max-width: 768px) {
  .mid-bar-content {
    flex-direction: column;
    text-align: center;
  }

  .mid-logo {
    margin: 0 auto 10px;
    height: 60px;
  }


}


    .mid-bar img {
      height: 80px;
    }

    /* -------- BLACK NAV BAR -------- */
    .main-nav {
      background: #333;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .nav-list {
      list-style: none;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      padding: 0;
    }

    .nav-list li {
      position: relative;
    }

    .nav-list > li > a {
      color: #fff;
      text-decoration: none;
      padding: 15px 25px;
      display: block;
      font-weight: 500;
      transition: background 0.3s;
    }

    .nav-list > li > a:hover {
      background: #555;
    }

    /* -------- DROPDOWN -------- */
    .dropdown-menu {
      display: none;
      position: absolute;
      top: 48px;
      left: 0;
      background: #444;
      list-style: none;
      padding: 0;
      margin: 0;
      min-width: 180px;
      border-radius: 0 0 5px 5px;
      z-index: 999;
    }

    .dropdown-menu li a {
      color: #fff;
      padding: 12px 18px;
      display: block;
      text-decoration: none;
      transition: background 0.3s;
    }

    .dropdown-menu li a:hover {
      background: #666;
    }

    .dropdown:hover .dropdown-menu {
      display: block;
    }

    /* -------- RESPONSIVE -------- */
    @media (max-width: 768px) {
      .nav-list {
        flex-direction: column;
      }
      .nav-list > li > a {
        padding: 12px;
      }
      .dropdown-menu {
        position: static;
      }
    }

    /* -------- SECTION STYLING -------- */
    section {
      padding: 0;
      text-align: center;
    }

    section:nth-child(even) {
      background: #f5f5f5;
    }
/* -------- HERO SECTION -------- */
.hero {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.hero .slider {
  display: flex;
  transition: transform 0.8s ease-in-out;
}

.hero .slide {
  min-width: 100%;
  height: 80vh;
}

.hero .slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Navigation Buttons */
.hero button {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0,0,0,0.4);
  color: #fff;
  border: none;
  padding: 10px 18px;
  font-size: 24px;
  cursor: pointer;
  border-radius: 4px;
  transition: background 0.3s;
}

.hero button:hover {
  background: rgba(0,0,0,0.7);
}

.hero .prev {
  left: 15px;
}

.hero .next {
  right: 15px;
}

/* Responsive Heights */
@media (max-width: 1024px) {
  .hero .slide {
    height: 65vh;
  }
}

@media (max-width: 768px) {
  .hero .slide {
    height: 50vh;
  }
}

@media (max-width: 480px) {
  .hero .slide {
    height: auto;
  }

  .hero button {
    font-size: 18px;
    padding: 8px 12px;
  }
}
.hero .slide img {
  width: 100%;
  max-width: 100%;
  height: auto;
  object-fit: cover;
  display: block;
}

#about {
  margin-top: 40px; /* Adjust as needed */
}


@media (max-width: 768px) {
  .hero {
    margin-bottom: 24px;
  }
  /* or */
  #about {
    margin-top: 24px;
  }
}

 .product {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    margin-bottom: 20px;
    flex-wrap: wrap;
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.07);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .product:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  }

  .product.reverse {
    flex-direction: row-reverse;
  }

  .product .text {
    flex: 1 1 500px;
  }

  .product .text h3 {
    font-size: 1.5rem;
    color: #2563eb;
    margin-bottom: 15px;
  }

  .product .text p {
    font-size: 1rem;
    line-height: 1.7;
    color: #4a5568;
    margin-bottom: 12px;
  }

  .product .text ul {
    list-style: none;
    padding: 0;
    color: #2d3748;
  }

  .product .text ul li {
    margin-bottom: 6px;
  }

  .product .image {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
}


  .product .image img {
    width: 100%;
    max-width: 420px;
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    transition: transform 0.4s ease;
  }

  .product .image img:hover {
    transform: scale(1.05);
  }

.price-tag {
  position: static;
  margin-top: 10px;
  background: #2563eb;
  color: #fff;
  padding: 8px 20px;
  border-radius: 25px;
  font-weight: 600;
  font-size: 1rem;
  white-space: nowrap;
  box-shadow: 0 3px 10px rgba(0,0,0,0.2);
}

/* ✅ For Mobile View (bottom center, correct shape) */
@media (max-width: 992px) {
  .product .image {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .price-tag {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    right: auto;
    background: #2563eb;
    padding: 6px 14px;
    font-size: 0.95rem;
    border-radius: 25px;
    white-space: nowrap;
  }
}




  /* Responsive Design */
  @media (max-width: 992px) {
    .product {
      flex-direction: column;
      text-align: center;
    }

    .product.reverse {
      flex-direction: column;
    }

    .product .text, .product .image {
      flex: 1 1 100%;
    }

    .price-tag {
      top: 10px;
      right: 50%;
      transform: translateX(50%);
    }

    .product .image img {
      max-width: 90%;
    }
  }

  #contact form input,
  #contact form select,
  #contact form textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 16px;
    margin-bottom: 20px;
  }

  #contact form button {
    background: #0078d4;
    color: #fff;
    border: none;
    padding: 14px 25px;
    font-size: 16px;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease;
  }

  #contact form button:hover {
    background: #005fa3;
  }

  #successMessage {
    display: none;
    color: green;
    font-weight: 600;
    margin-top: 15px;
  }

  /* Grid layout for desktop */
  .form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
  }

  /* Responsive for mobile screens */
  @media (max-width: 768px) {
    .form-grid {
      grid-template-columns: 1fr;
    }

    #contact form {
      padding: 25px;
    }

    #contact h2 {
      font-size: 28px;
    }
  }
.whatsapp-float {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #25d366;
  color: white;
  border-radius: 50px;
  display: flex;
  align-items: center;
  padding: 10px 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
  text-decoration: none;
  font-family: "Poppins", sans-serif;
  transition: all 0.3s ease;
  z-index: 999;
}

.whatsapp-float:hover {
  background-color: #1ebe5d;
  transform: scale(1.05);
}

.whatsapp-float img {
  width: 35px;
  height: 35px;
  margin-right: 10px;
}

.whatsapp-float span {
  font-size: 16px;
  font-weight: 500;
}

  </style>
</head>
<body>
<a href="https://wa.me/9555872224" class="whatsapp-float" target="_blank">
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
  <span>We are here</span>
</a>

  <!-- BLUE BAR -->
  <div class="top-bar">
    <div class="container">
      <span>📞 9555872224</span>
    </div>
  </div>

  <!-- WHITE BAR -->
  <div class="mid-bar">
  <div class="container">
    <div class="mid-bar-content">
       <a href="#home">
      <img src="images/logo.png" alt="3G Water Technology Logo" class="mid-logo">
        </a>
      <h1 class="company-name">3G Water Technology</h1>
    </div>
  </div>
</div>


  <!-- BLACK NAVIGATION -->
  <nav class="main-nav">
    <ul class="nav-list">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About Us</a></li>

      <li class="dropdown">
        <a href="#solar">Solar Power Plant ▾</a>
        <ul class="dropdown-menu">
          <li><a href="#ongrid">On Grid</a></li>
          <li><a href="#offgrid">Off Grid</a></li>
          <li><a href="#hybrid">Hybrid</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#heatpump">Heat Pump ▾</a>
        <ul class="dropdown-menu">
          <li><a href="#domestic">Domestic</a></li>
          <li><a href="#commercial">Commercial</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#watertreatment">Water Treatment ▾</a>
        <ul class="dropdown-menu">
          <li><a href="#softener">Water Softener</a></li>
          <li><a href="#sandfilter">Sand Filter</a></li>
          <li><a href="#commercialro">Commercial R.O.</a></li>
        </ul>
      </li>
      <li><a href="#contact">Contact Us</a></li>
    </ul>
  </nav>

  <!-- SECTIONS -->

<!-- HERO SECTION -->
<section class="hero" id="home">
  <div class="slider">
    <div class="slide active">
      <img src="images/heat_pump.png" alt="Banner 1">
    </div>
    <div class="slide">
      <img src="images/heat_pump1.png" alt="Banner 2">
    </div>
    <div class="slide">
      <img src="images/heat_pump2.png" alt="Banner 3">
    </div>
  </div>
 
</section>


  <!-- ================= ABOUT SECTION ================= -->
<section id="about" style="padding: 80px 0; background: #f5f7fa;">
  <div style="max-width: 1000px; margin: 0 auto; text-align: center; padding: 0 20px;">
    
    <h2 style="font-size: 36px; color: #0078d4; margin-bottom: 20px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
      About Us
    </h2>

    <div style="width: 80px; height: 4px; background: #0078d4; margin: 10px auto 40px auto; border-radius: 2px;"></div>

    <p style="font-size: 18px; line-height: 1.8; color: #333; margin-bottom: 20px;">
      At <strong>3G Water Technologies</strong>, we are committed to delivering <strong>innovative</strong> and 
      <strong>sustainable solutions</strong> that transform the way the world uses energy and water. 
      Founded with a vision to combine <strong>cutting-edge technology</strong> with 
      <strong>environmental responsibility</strong>, we specialize in designing systems that are 
      efficient, reliable, and eco-friendly.
    </p>

    <p style="font-size: 18px; line-height: 1.8; color: #333; margin-bottom: 20px;">
      Our expertise covers a wide range of solutions — from 
      <strong>Solar Power Plants</strong> and <strong>Heat Pumps</strong> to 
      <strong>Water Treatment Systems</strong>. Each product reflects our mission to create 
      smarter, cleaner, and more sustainable technologies for a better future.
    </p>

    <p style="font-size: 18px; line-height: 1.8; color: #333;">
      <em>Empowering communities and industries through innovation, sustainability, and reliability — 
      that’s what drives 3G Water Technologies.</em>
    </p>
  </div>
</section>

<section id="solar" style="padding: px px; background: #f8fafc;">
  <h2 style="text-align: center; margin-bottom: 50px; font-size: 2rem; color: #1a365d;">Solar Power Plant</h2>

  <!-- Product 1 -->
  <div class="product" id="ongrid">
    <div class="text">
      <h3>On-Grid (Grid-Tied) Solar Power Plant</h3>
      <p>
        On-Grid systems connect directly to the electricity grid and help you save on electricity bills through net metering.
        They’re ideal for homes, offices, and factories that want to generate clean energy without needing batteries.
      </p>
      <ul>
        <li>✔ No batteries required (low maintenance)</li>
        <li>✔ Works with net metering system</li>
        <li>✔ Long lifespan and cost-effective</li>
      </ul>
    </div>
    <div class="image">
     
      <img src="images/ongrid.png" alt="On Grid Solar Power Plant">
    </div>
  </div>

  <!-- Product 2 -->
  <div class="product reverse" id="offgrid">
    <div class="text">
      <h3>Off-Grid Solar Power Plant</h3>
      <p>
        Off-Grid systems are perfect for areas without grid electricity. They store solar energy in batteries, providing
        continuous power day and night. Enjoy total energy independence.
      </p>
      <ul>
        <li>✔ Works without grid connection</li>
        <li>✔ Battery storage for night usage</li>
        <li>✔ Ideal for remote or rural areas</li>
      </ul>
    </div>
    <div class="image">
      
      <img src="images/offgrid.png" alt="Off Grid Solar Power Plant">
    </div>
  </div>

  <!-- Product 3 -->
  <div class="product" id="hybrid">
    <div class="text">
      <h3>Hybrid Solar Power Plant</h3>
      <p>
        Hybrid systems combine On-Grid and Off-Grid benefits. They store excess power in batteries and supply to the grid
        when possible — ensuring round-the-clock power and lower bills.
      </p>
      <ul>
        <li>✔ Dual power source (Grid + Battery)</li>
        <li>✔ Works during power cuts</li>
        <li>✔ Smart energy management</li>
      </ul>
    </div>
    <div class="image">
      
      <img src="images/hybrid.png" alt="Hybrid Solar Power Plant">
    </div>
  </div>
</section>

<section id="heatpump" style="padding: 60px 20px; background: #f8fafc;">
  <h2 style="text-align: center; margin-bottom: 50px; font-size: 2rem; color: #1a365d;">Heat Pumps</h2>

  <!-- Product 1 -->
  <div class="product" id="commercial">
    <div class="text">
     <h3>Commercial Heat Pump</h3>
<p>
  Commercial Heat Pumps provide energy-efficient heating and hot water solutions for offices, factories, hotels, and other commercial buildings. 
  They are designed to reduce energy costs while maintaining optimal performance throughout the year.
</p>
<ul>
  <li>✔ High efficiency and low operating costs</li>
  <li>✔ Suitable for large-scale commercial buildings</li>
  <li>✔ Reliable performance even in extreme temperatures</li>
</ul>
    </div>
    <div class="image">
      
      <img src="images/commercial_heat_pump.png" alt="On Grid Solar Power Plant">
    </div>
  </div>

  <!-- Product 2 -->
  <div class="product reverse" id="domestic">
    <div class="text">
      <h3>Domestic Heat Pump</h3>
<p>
  Domestic Heat Pumps are perfect for homes, apartments, and small buildings, providing energy-efficient heating and hot water for daily use. 
  They help reduce electricity bills while maintaining a comfortable indoor environment all year round.
</p>
<ul>
  <li>✔ Ideal for residential use (homes and apartments)</li>
  <li>✔ Low maintenance and energy-efficient</li>
  <li>✔ Reliable performance even in colder climates</li>
</ul>
    </div>
    <div class="image">
     
      <img src="images/domestic_heat_pump.png" alt="Off Grid Solar Power Plant">
    </div>
  </div>

  <!-- Product 3 -->
  
</section>

<section id="solar" style="padding: px px; background: #f8fafc;">
  <h2 style="text-align: center; margin-bottom: 50px; font-size: 2rem; color: #1a365d;">Water Treatment</h2>

  <!-- Product 1 -->
  <div class="product" id="softener">
    <div class="text">
    <h3>Water Softener</h3>
<p>
  Water Softeners are designed to remove hardness from water, preventing scale buildup in pipes and appliances. 
  They ensure cleaner, softer water for homes, offices, and commercial establishments, improving water quality and extending the life of plumbing systems.
</p>
<ul>
  <li>✔ Removes hardness, calcium, and magnesium</li>
  <li>✔ Protects appliances and plumbing from scale buildup</li>
  <li>✔ Provides soft, clean water for daily use</li>
</ul>

    </div>
    <div class="image">
      
      <img src="images/water_softner.png" alt="On Grid Solar Power Plant">
    </div>
  </div>

  <!-- Product 2 -->
  <div class="product reverse" id="sandfilter">
    <div class="text">
     <h3>Sand Filter</h3>
<p>
  Sand Filters are used to remove suspended particles, dirt, and impurities from water, ensuring clean and clear water for homes, offices, and industrial applications. 
  They are efficient, low-maintenance solutions for improving water quality.
</p>
<ul>
  <li>✔ Removes suspended solids and impurities</li>
  <li>✔ Provides clear and clean water</li>
  <li>✔ Durable and low-maintenance design</li>
</ul>

    </div>
    <div class="image">
      
      <img src="images/sand_filter.png" alt="Off Grid Solar Power Plant">
    </div>
  </div>

  <!-- Product 3 -->
  <div class="product" id="commercialro">
    <div class="text">
      <h3>Commercial R.O. (Reverse Osmosis)</h3>
<p>
  Commercial R.O. systems purify water by removing dissolved salts, chemicals, and impurities, providing safe and clean drinking water for offices, restaurants, hotels, and industrial applications. 
  They are designed for high-capacity water treatment with consistent performance.
</p>
<ul>
  <li>✔ Removes dissolved salts, chemicals, and impurities</li>
  <li>✔ Suitable for large-scale commercial use</li>
  <li>✔ Provides safe, clean, and great-tasting water</li>
</ul>

    </div>
    <div class="image">
      <!-- <div class="price-tag">₹ 1,75,000</div> -->
      <img src="images/commercial_ro.png" alt="Hybrid Solar Power Plant">
    </div>
  </div>
</section>
  

<section id="contact" style="padding: 80px 0; background: #f5f7fa;">
  <div class="container" style="max-width: 900px; margin: auto; text-align: center;">
    <h2 style="color: #0078d4; font-size: 32px; margin-bottom: 10px;">Contact Us</h2>
    <p style="color: #555; font-size: 18px; margin-bottom: 40px;">
      Have questions about our Solar Power Plant, Heat Pump, or Water Treatment solutions?<br>
      Get in touch — we’d love to help you.
    </p>

    <form id="contactForm" action="https://formspree.io/f/mgvnpykq" method="POST"
      style="background: #fff; padding: 40px; border-radius: 16px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
      
      <div class="form-grid">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="tel" name="phone" placeholder="Your Phone Number" required>
        <select name="product" required>
          <option value="">Select Product</option>
          <option value="Solar Power Plant">Solar Power Plant</option>
          <option value="Heat Pump">Heat Pump</option>
          <option value="Water Treatment">Water Treatment</option>
        </select>
      </div>

      <textarea name="message" rows="5" placeholder="Your Message..." required></textarea>
      
      <button type="submit">Send Message</button>

      <p id="successMessage">✅ Thank you! Your message has been sent successfully.</p>
    </form>
  </div>
</section>



<script>
  let currentIndex = 0;
  const slides = document.querySelectorAll(".hero .slide");
  const totalSlides = slides.length;

  function showSlide(index) {
    if (index < 0) index = totalSlides - 1;
    if (index >= totalSlides) index = 0;
    document.querySelector(".hero .slider").style.transform = `translateX(-${index * 100}%)`;
    currentIndex = index;
  }

  setInterval(function() {
    showSlide(currentIndex + 1);
  }, 3000); // Change every 3 seconds

  // Show the first slide initially
  showSlide(currentIndex);
</script>

<script>
  const contactForm = document.getElementById("contactForm");
  const successMessage = document.getElementById("successMessage");

  contactForm.addEventListener("submit", async function (event) {
    event.preventDefault();
    const formData = new FormData(contactForm);
    try {
      const response = await fetch(contactForm.action, {
        method: "POST",
        body: formData,
        headers: { 'Accept': 'application/json' }
      });
      if (response.ok) {
        successMessage.style.display = "block";
        contactForm.reset();
      } else {
        alert("Something went wrong. Please try again.");
      }
    } catch (error) {
      alert("Error: " + error.message);
    }
  });
</script>

</body>
</html>
