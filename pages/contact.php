<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';

// Email obfuscation - encode email to prevent bot scraping
$email_user = 'sagrika';
$email_domain = 'gmail.com';
$email_encoded = htmlentities($email_user) . '&#64;' . htmlentities($email_domain);
$mailto_encoded = 'mailto:' . $email_user . '@' . $email_domain;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Say Hello — Sagrika</title>
  <meta name="description" content="Let's connect! Reach out for collaborations, freelance work, or just to say hi.">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <div class="blob-bg"></div>
  <div class="blob-bg-2"></div>

  <header class="main-header">
    <nav class="navbar">
      <div class="logo">
        <a href="../index.php">sagrika<span>.</span></a>
      </div>
      <ul class="nav-links">
        <li><a href="../index.php">Home</a></li>
        <li><a href="about.php">My Story</a></li>
        <li><a href="contact.php" class="active">Say Hello</a></li>
      </ul>
    </nav>
  </header>

  <main class="container">
    <section class="about-hero">
      <h1>Let's <em>connect</em></h1>
      <p>Have a project in mind? Want to collaborate? Or just want to chat about code? I'd love to hear from you.</p>
    </section>

    <section class="contact-simple">
      <div class="contact-card">
        <div class="contact-card-icon">
          <svg width="32" height="32" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
          </svg>
        </div>
        <h3>LinkedIn</h3>
        <p>Let's connect professionally and grow our network together.</p>
        <a href="https://www.linkedin.com/in/sagrikathakur/" target="_blank" rel="noopener noreferrer"
          class="btn btn-primary">Connect on LinkedIn</a>
      </div>
    </section>

    <section class="cta-section">
      <h2>Open to Opportunities</h2>
      <p>I'm currently looking for freelance projects and full-time roles.</p>
    </section>
  </main>

  <footer class="main-footer">
    <div class="footer-content">
      <div class="footer-links">
        <a href="../index.php">Home</a>
        <a href="about.php">My Story</a>
        <a href="contact.php">Contact</a>
      </div>
      <p>© <?php echo date('Y'); ?> Sagrika</p>
    </div>
  </footer>

  <script src="../assets/js/main.js"></script>
</body>

</html>