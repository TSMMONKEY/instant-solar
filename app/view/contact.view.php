<?php
require 'head.php';

use App\Model\Contact;
?>
<main>

<header class = 'site-header contact-header'>
<div class = 'section-overlay'></div>

<div class = 'container'>
<div class = 'row'>

<div class = 'col-lg-12 col-12 text-center'>
<h1 class = 'text-white'>Get in touch</h1>

<nav aria-label = 'breadcrumb'>
<ol class = 'breadcrumb justify-content-center'>
<li class = 'breadcrumb-item'><a href = '/'>Home</a></li>

<li class = 'breadcrumb-item active' aria-current = 'page'>Contact</li>
</ol>
</nav>
</div>

</div>
</div>
</header>

<section class = 'contact-section section-padding'>
<div class = 'container'>
<div class = 'row justify-content-center'>

<div class = 'col-lg-6 col-12 mb-lg-5 mb-3'>
<iframe src = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4575.452865978059!2d28.125876976296638!3d-26.01191937719562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e956de3ecc00001%3A0x5c2587b481fba0ee!2sDiduspace%20Chemicals!5e1!3m2!1sen!2sza!4v1686883172597!5m2!1sen!2sza' max-width = '600' width = '100%' height = '450' style = 'border:0; border-radius:8px' allowfullscreen = '' referrerpolicy = 'no-referrer-when-downgrade'></iframe>
</div>

<div class = 'col-lg-5 col-12 mb-3 mx-auto'>
<div class = 'contact-info-wrap'>
<div class = 'contact-info d-flex align-items-center mb-3'>
<i class = 'custom-icon bi-building'></i>

<p class = 'mb-0'>
<span class = 'contact-info-small-title'>Office</span>

Unit 1, Acacia Park, 88 Cranberry Crescent, Capital Hill. Midrand
</p>
</div>

<div class = 'contact-info d-flex align-items-center'>
<i class = 'custom-icon bi-globe'></i>

<p class = 'mb-0'>
<span class = 'contact-info-small-title'>Website</span>

<a href = '#' class = 'site-footer-link'>
www.instantsolar.co.za
</a>
</p>
</div>

<div class = 'contact-info d-flex align-items-center'>
<i class = 'custom-icon bi-telephone'></i>

<p class = 'mb-0'>
<span class = 'contact-info-small-title'>Phone</span>

<a href = 'tel: 305-240-9671' class = 'site-footer-link'>
305-240-9671
</a>
</p>
</div>

<div class = 'contact-info d-flex align-items-center'>
<i class = 'custom-icon bi-envelope'></i>

<p class = 'mb-0'>
<span class = 'contact-info-small-title'>Email</span>

<a href = 'mailto:info@instantsolar.co.za' class = 'site-footer-link'>
info@instantsolar.co.za
</a>
</p>
</div>
</div>
</div>

<div class = 'col-lg-8 col-12 mx-auto'>
<form class = 'custom-form contact-form' action = '#' method = 'POST' role = 'form'>
<h2 class = 'text-center mb-4'>Let's Talk</h2>

<div class = 'row'>
<div class = 'col-lg-6 col-md-6 col-12'>
<label for = 'first-name'>First Name</label>

<input type = 'text' name = 'full-name' id = 'full-name' class = 'form-control' placeholder = 'First Name' required>
</div>
<div class = 'col-lg-6 col-md-6 col-12'>
<label for = 'Last-name'>Last Name</label>

<input type = 'text' name = 'last-name' id = 'full-name' class = 'form-control' placeholder = 'Last Name' required>
</div>

<div class = 'col-lg-6 col-md-6 col-12'>
<label for = 'email'>Email Address</label>

<input type = 'email' name = 'email' id = 'email' pattern = '[^ @]*@[^ @]*' class = 'form-control' placeholder = 'example@gmail.com' required>
</div>

<div class = 'col-lg-6 col-md-6 col-12'>
<label for = 'phone'>Phone Number</label>
<input type = 'tel' name = 'phone' id = 'phone' class = 'form-control' placeholder = '(+27) 78 915 7595' required>
</div>

<div class = 'col-lg-12 col-12'>
<label for = 'message'>Message</label>

<textarea name = 'message' rows = '6' class = 'form-control' id = 'message' placeholder = 'What can we help you with?'></textarea>
</div>

<div class = 'col-lg-4 col-md-4 col-6 mx-auto'>
<button type = 'submit' name = 'submit' class = 'form-control'>Send Message</button>
</div>
</div>
</form>
</div>

</div>
</div>
</section>

<?php require 'footer.php';
?>
