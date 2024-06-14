<?php
require_once('./config.php');

// Define the redirect function
if (isset($_POST['explore_features'])) {
    redirect('../admin');
}
?>

 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $_settings->info('title') != false ? $_settings->info('title').' | ' : '' ?><?php echo $_settings->info('name') ?></title>
    <link rel="icon" href="<?php echo validate_image($_settings->info('logo')) ?>" />  <!-- Iconscout cdn -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <!-- google fonts montserrat -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap" rel="stylesheet">
  <!-- swiper js -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./CSS/style.css">
</head>
<style>
  * {
    margin: 0%;
    padding: 0%;
    border: 0;
    outline: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;

}

:root {
    --color-primary: #6c63ff;
    --color-success: #00bf8e;
    --color-warning: #f7c94b;
    --color-danger: #f75842;
    --color-danger-varient: rgba(247, 88, 66, 0.4);
    --color-white: #fff;
    --color-light: rgba(255, 255, 255, 0.7);
    --color-black: #000;
    --color-bg: #1f2641;
    --color-bg1: #2e3267;
    --color-bg2: #424890;

    --container-width-lg: 76%;
    --container-width-md: 90%;
    --container-width-sm: 94%;

    --transition: all 400ms ease;
}

body {
    font-family: 'Montserrat', sans-serif;
    line-height: 1.7;
    color: var(--color-white);
    background: var(--color-bg);
}

.container {
    width: var(--container-width-lg);
    margin: 0 auto;

}

section {
    padding: 6rem 0;
}

section h2 {
    text-align: center;
    margin-bottom: 4rem;
}

h1,
h2,
h3,
h4,
h5 {
    line-height: 1.2;
}

h1 {
    font-size: 2.4rem;
}

h2 {
    font-size: 2rem;
}

h3 {
    font-size: 1.6rem;
}

h4 {
    font-size: 1.3rem;
}

a {
    color: var(--color-white);
}

img {
    width: 100%;
    display: block;
    object-fit: cover;
}

.btn {
    display: inline-block;
    background: var(--color-white);
    color: var(--color-black);
    padding: 1rem 2rem;
    border: 1px solid transparent;
    font-weight: 500;
    transition: var(--transition);

}

.btn:hover {
    background: transparent;
    color: var(--color-white);
    border-color: var(--color-white);

}

.btn-primary {
    background: var(--color-danger);
    color: var(--color-white);
}

nav {
    background: transparent;
    width: 100%;
    height: 80px;
    position: fixed;
    top: 0%;
    z-index: 11;
}


.window-scroll {
    background: var(--color-primary);
    box-shadow: 0 0.2rem rgba(0, 0, 0, 0.3)
}

.nav_container {
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav button {
    display: none;
}

.nav_menu {
    display: flex;
    align-items: center;
    gap: 4rem;
}

.nav_menu a {
    font-size: 0.9rem;
    transition: var(--transition);
}

.nav_menu a:hover {
    color: var(--color-bg2);

}

/*             <!-- ===============__________-----------header===============__________----------- -->
 */
header {
    position: relative;
    top: 5rem;
    overflow: hidden;
    height: 70vh;
    margin-bottom: 5rem;
}

.header_container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 5rem;
    height: 100%;
}

.header_left p {
    margin: 1rem 0 2.4rem;
}

/* header end */
.categories {
    background: var(--color-bg1);
    height: 29rem;

}

.categories h1 {
    line-height: 1;
    margin-bottom: 3rem;
}

.categories_container {
    display: grid;
    grid-template-columns: 40% 70%;
}

.categories_left {
    margin-right: 4rem;
}

.categories_left p {
    margin: 1rem 0 3rem;
}

.categories_right {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.2rem;
}

.category {
    background: var(--color-bg2);
    padding: 2rem;
    border-radius: 2rem;
    transition: var(--transition);
}

.category:hover {
    box-shadow: 0 3rem 3rem rgba(0, 0, 0, 0.3);
    z-index: 1;
}

.category:nth-child(2) .category_icon {
    background: var(--color-danger);

}

.category:nth-child(4) .category_icon {
    background: var(--color-warning);

}

.category:nth-child(5) .category_icon {
    background: var(--color-success);

}

.category:nth-child(3) .category_icon {
    background: var(--color-success);

}

.category_icon {
    background: var(--color-primary);
    padding: 0.7rem;
    border-radius: 0.9rem;
}

.category h5 {
    margin: 2rem 0 1rem;
}

.category p {   
    font-size: 0.85rem;
}




/* courses section*/
.course {
    margin-top: 7rem;

}

.courses_container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;

}

.course {
    background: var(--color-bg1);
    text-align: center;
    border: 1px solid transparent;
    transition: var(--transition);

}

.course:hover {
    background: transparent;
    border-color: var(--color-primary);
}   

.course_info {
    padding: 2rem;

}

.course_info p {
    margin: 1.2rem 0 2rem;
    font-size: 0.9rem;
}

/*FAQs*/

.faqs {
    background-color: var(--color-bg1);
    box-shadow: inset 0 0 3rem rgba(0, 0, 0, 0.5);


}

.faqs_container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.faq {
padding-top: 2px;
    padding: 2rem;
    display: flex;
    height: fit-content;
    gap: 1.4rem;
    align-items: center;
    background: var(--color-primary);
    cursor: pointer;

}

.faq h4 {
    font-size: 1rem;
    line-height: 2.2;
}

.faq_icon {
    align-self: flex-start;
    font-size: 1.2rem;
}

.faq p {
    margin-top: 0.8rem;
    display: none;
}

.faq.open p {
    display: block;
}

/* student review*/
.testimonial_container {
    overflow-x: hidden;
    position: relative;
    margin-bottom: 5rem;

}

.testimonial {
    padding-top: 2rem;

}

.avatar {
    width: 6rem;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto 1rem;
    border: 1re m solid var(--color-bg1);
}

.testimonial_info {
    text-align: center;
}

.testimonial_body {
    background: var(--color-primary);
    padding: 2rem;
    margin-top: 3rem;
    position: relative;
}
 
.testimonial_body::before {
    content: "";
    display: block;
    background: linear-gradient(
        135deg ,transparent, var(--color-primary), var(--color-primary),var(--color-primary));
    width: 3rem;
    height: 3rem;
    position: absolute;
    left: 50%;
    top: -1.5rem;
    transform: rotate(45deg);
}
</style>
<body>
  <!-- Navigation Section -->
  <nav>
    <div class="container nav_container">
      <a href="index.html">
        <h4>DataQuantum CRM</h4>
      </a>
      <ul class="nav_menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="#testimonial">About</a></li>
        <li><a href="#categories">Features</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <button id="open.menu.btn"><i class="uil uil-bars"></i></button>
      <button id="close.menu.btn"><i class="uil uil-multiply"></i></button>
    </div>
  </nav>

  <!-- Header Section -->
  <header>
    <div class="container header_container">
      <div class="header_left">
        <h1>Streamline Your Business Operations with our CRM System</h1>
        <p>Manage sales, track daily activities, generate leads, and oversee projects seamlessly with our powerful CRM solution.</p>
        <a href="../DQ/admin/" class="btn" name="explore_features">Try free</a>
      </div>
      <div class="header_right">
        <div class="header__right image">
          <img src="./header.svg" alt="CRM Header Image">
        </div>
      </div>
    </div>
  </header>

  <!-- Categories Section -->
  <section class="categories" id="categories">
    <div class="container categories_container">
      <div class="categories_left">
        <h1>Key Features</h1>
        <p>Discover the features that make our CRM system stand out and empower your business.</p>
        <a href="features.html" class="btn">Learn More</a>
      </div>
      <div class="categories_right">
        <!-- Update categories based on CRM features -->
        <article class="category">
          <span class="category_icon"><i class="uil uil-chart-line"></i></span>
          <h5>Sales Management</h5>
          <p>Efficiently manage your sales pipeline and close deals faster.</p>
        </article>
        <article class="category">
          <span class="category_icon"><i class="uil uil-briefcase"></i></span>
          <h5>Project Management</h5>
          <p>Streamline project workflows and ensure timely delivery.</p>
        </article>
        <!-- Add more categories as needed -->
        <!-- Update categories based on CRM features -->
<article class="category">
  <span class="category_icon"><i class="uil uil-users-alt"></i></span>
  <h5>Customer Segmentation</h5>
  <p>Create targeted marketing campaigns by segmenting your customers based on their preferences, behavior, and demographics.</p>
</article>

<article class="category">
  <span class="category_icon"><i class="uil uil-envelope-open"></i></span>
  <h5>Email Integration</h5>
  <p>Integrate your email communication seamlessly within the CRM, allowing you to track interactions, send personalized emails, and manage contacts efficiently.</p>
</article>

<article class="category">
  <span class="category_icon"><i class="uil uil-clock"></i></span>
  <h5>Task Automation</h5>
  <p>Automate repetitive tasks and workflows to save time and ensure consistency in your business processes, enhancing overall productivity.</p>
</article>

<article class="category">
  <span class="category_icon"><i class="uil uil-dollar-sign"></i></span>
  <h5>Revenue Forecasting</h5>
  <p>Gain insights into future revenue streams by utilizing advanced analytics and forecasting tools integrated into the CRM system.</p>
</article>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="container testimonial_container" id="testimonial" style="padding-top: 350px;">
    <h2>What Our Clients Say</h2>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <!-- Testimonial 1 -->
        <article class="testimonial swiper-slide">
          <div class="avatar">
            <img src="./avatar1.jpg" alt="Client 1">
          </div>
          <div class="testimonial_info">
            <h5>John Doe</h5>
            <small>CEO, XYZ Company</small>
          </div>
          <div class="testimonial_body">
            <p>"We've been using the CRM system for a year now, and it has significantly boosted our sales efficiency. The intuitive interface and powerful features make it a must-have for any business."</p>
          </div>
        </article>

        <!-- Testimonial 2 -->
        <article class="testimonial swiper-slide">
          <div class="avatar">
            <img src="./avatar2.jpg" alt="Client 2">
          </div>
          <div class="testimonial_info">
            <h5>Jane Smith</h5>
            <small>COO, ABC Corporation</small>
          </div>
          <div class="testimonial_body">
            <p>"The CRM system has transformed how we manage projects. It provides real-time insights, 
                helping us make data-driven decisions and deliver projects on time. Highly recommended!"</p>
          </div>
        </article>
      </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    
  </section>

  <!-- FAQ Section -->
  <section class="faqs">
    <h2>Frequently Asked Questions</h2>
    <div class="container faqs_container">
      <!-- FAQ 1 -->
      <article class="faq">
        <div class="faq_icon"><i class="uil uil-question-circle"></i></div>
        <div class="quetion_answer">
          <h4>How can I integrate the CRM system with other tools?</h4>
          <p>"Our CRM system offers seamless integration with popular tools such as Google Workspace, Microsoft 365, and more. Our support team is ready to assist you in the integration process."</p>
        </div>
      </article>

      <!-- FAQ 2 -->
      <article class="faq">
        <div class="faq_icon"><i class="uil uil-question-circle"></i></div>
        <div class="quetion_answer">
          <h4>Is customer support included with the CRM subscription?</h4>
          <p>"Yes, our CRM subscription includes 24/7 customer support. Our dedicated support team is here to assist you with any questions or issues you may encounter."</p>
        </div>
      </article>

      <!-- FAQ 3 -->
      <article class="faq">
        <div class="faq_icon"><i class="uil uil-question-circle"></i></div>
        <div class="quetion_answer">
          <h4>Can I customize the CRM system to fit my business needs?</h4>
          <p>"Absolutely! Our CRM system is highly customizable. You can tailor it to your specific business processes and requirements, ensuring a perfect fit for your organization."</p>
        </div>
      </article>

      <!-- FAQ 4 -->
      <article class="faq">
        <div class="faq_icon"><i class="uil uil-question-circle"></i></div>
        <div class="quetion_answer">
          <h4>What security measures are in place to protect my data?</h4>
          <p>"We prioritize the security of your data. Our CRM system employs robust encryption, regular backups, and strict access controls to ensure the confidentiality and integrity of your information."</p>
        </div>
      </article>
<!-- FAQ 5 -->
<article class="faq">
  <div class="faq_icon"><i class="uil uil-question-circle"></i></div>
  <div class="quetion_answer">
    <h4>Can I access the CRM system from mobile devices?</h4>
    <p>"Yes, our CRM system is designed to be mobile-responsive. You can access it from your smartphone or tablet, allowing you to manage your business on the go."</p>
  </div>
</article>

<!-- FAQ 6 -->
<article class="faq">
  <div class="faq_icon"><i class="uil uil-question-circle"></i></div>
  <div class="quetion_answer">
    <h4>What reporting and analytics features are available?</h4>
    <p>"Our CRM system offers robust reporting and analytics tools. You can generate custom reports, track key performance indicators, and gain valuable insights into your business operations."</p>
  </div>
</article>

<!-- FAQ 7 -->
<article class="faq">
  <div class="faq_icon"><i class="uil uil-question-circle"></i></div>
  <div class="quetion_answer">
    <h4>Is training provided for using the CRM system?</h4>
    <p>"Yes, we provide comprehensive training resources and support to help you and your team get started with the CRM system. Additionally, our customer success team is available for any assistance you may need."</p>
  </div>
</article>

<!-- FAQ 8 -->
<article class="faq">
  <div class="faq_icon"><i class="uil uil-question-circle"></i></div>
  <div class="quetion_answer">
    <h4>Can I import existing data into the CRM system?</h4>
    <p>"Certainly! Our CRM system allows you to import existing data such as contacts, leads, and opportunities. This ensures a smooth transition and continuity of your business processes."</p>
  </div>
</article>
      <!-- Add more FAQs as needed -->

    </div>
  </section>

  <!-- Include the necessary scripts at the end of the body -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="./main.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var mySwiper = new Swiper('.swiper-container', {
        // Optional: Set the direction of the slider (horizontal by default)
        direction: 'horizontal',
  
        // Optional: Set the loop mode to enable continuous sliding
        loop: true,
  
        // Optional: Set the navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
  
        // Optional: Set the pagination dots
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });
    });
    //change navbar style to scroll

window.addEventListener("scroll", () => {
  document
    .querySelector("nav")
    .classList.toggle("window-scroll", window.scrollY > 10);
});


///for show/hide faq answer

const faqs= document.querySelectorAll('.faq');
faqs.forEach(faq =>{
    faq.addEventListener('click',()=>{
        faq.classList.toggle('open');

        //change icon
        const icon = faq.querySelector('.faq_icon i');
        if(icon.className === 'uil uil-plus'){
            icon.className="uil uil-minus"
        }else{
            icon.className="uil uil-plus"
        }
    })
})
  </script>
  <footer style="background-color: #2e3267; color: #fff; padding: 2px; text-align: center;" id="contact">
    <div class="container">
      <p>&copy; 2023 DataQuantum. All rights reserved.</p>
      <div style="text:blue">
  <b><?php echo $_settings->info('short_name') ?> (by: <a href="mailto:pixeldeveloper15@gmail.com" target="blank"><span style="color: blue;">pixeldeveloper</span></a> )</b>
</div>

      </div>
  </footer>
</body>

</html>
