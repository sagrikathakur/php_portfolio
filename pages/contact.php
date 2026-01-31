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
          <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <rect x="2" y="4" width="20" height="16" rx="2" />
            <path d="m22 7-10 5L2 7" />
          </svg>
        </div>
        <h3>Email Me</h3>
        <p>Drop me an email and I'll get back to you within 24 hours.</p>
        <!-- Email is encoded to prevent bot scraping -->
        <a href="<?php echo $mailto_encoded; ?>" class="btn btn-primary">
          <?php echo $email_encoded; ?>
        </a>
      </div>

      <div class="contact-card">
        <div class="contact-card-icon">
          <svg width="32" height="32" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
          </svg>
        </div>
        <h3>LinkedIn</h3>
        <p>Let's connect professionally and grow our network together.</p>
        <!-- rel="noopener noreferrer" prevents security vulnerabilities -->
        <a href="https://www.linkedin.com/in/sagrikathakur/" target="_blank" rel="noopener noreferrer"
          class="btn btn-outline">View Profile</a>
      </div>

      <div class="contact-card">
        <div class="contact-card-icon">
          <svg width="32" height="32" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
          </svg>
        </div>
        <h3>GitHub</h3>
        <p>Check out my projects and contributions on GitHub.</p>
        <a href="https://github.com/sagrikathakur" target="_blank" rel="noopener noreferrer"
          class="btn btn-outline">View GitHub</a>
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