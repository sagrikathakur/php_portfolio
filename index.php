<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sagrika — Web Developer</title>
  <meta name="description"
    content="Former UPSC aspirant turned web developer. Bringing discipline and analytical thinking to every line of code.">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="blob-bg"></div>
  <div class="blob-bg-2"></div>

  <header class="main-header">
    <nav class="navbar">
      <div class="logo">
        <a href="index.php">sagrika<span>.</span></a>
      </div>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="pages/about.php">My Story</a></li>
        <li><a href="pages/contact.php">Say Hello</a></li>
      </ul>
    </nav>
  </header>

  <main class="container">
    <section class="hero">
      <div class="hero-content">
        <p class="overline">Hello, I'm Sagrika</p>
        <h1>From UPSC prep to<br>
          <span class="text-rotator">
            <span class="rotating-text">clean code</span>
            <span class="rotating-text">web design</span>
            <span class="rotating-text">problem solving</span>
          </span>
        </h1>
        <p>Former UPSC aspirant who found a new calling in tech. I bring the same discipline, focus, and analytical
          mindset to every project I build.</p>
        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
          <a href="pages/about.php" class="btn btn-primary">Read My Story</a>
          <a href="pages/contact.php" class="btn btn-outline">Get in Touch</a>
        </div>
      </div>
      <div class="hero-visual">
        <div class="hero-image-container">
          <img src="assets/images/hero-portrait.png" alt="Sagrika - Web Developer" class="hero-image">
        </div>
      </div>
    </section>

    <section class="features">
      <div class="section-header">
        <p class="overline">What I Work With</p>
        <h2>Skills & Technologies</h2>
      </div>
      <div class="feature-grid">
        <div class="feature-card">
          <div class="feature-icon"><span class="icon-text">UI</span></div>
          <h3>Frontend</h3>
          <p>HTML, CSS, JavaScript, React crafting responsive, beautiful user interfaces.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><span class="icon-text">{ }</span></div>
          <h3>Backend</h3>
          <p>PHP, Node.js, Express building robust server-side applications.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><span class="icon-text">DB</span></div>
          <h3>Database</h3>
          <p>MySQL, MongoDB designing efficient data structures and queries.</p>
        </div>
      </div>
    </section>

    <section class="cta-section">
      <h2>Interested in working together?</h2>
      <p>I'm currently open to freelance projects and full-time opportunities.</p>
      <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="pages/about.php" class="btn btn-primary">Learn More About Me</a>
        <a href="pages/contact.php" class="btn btn-outline">Get in Touch</a>
      </div>
    </section>
  </main>

  <footer class="main-footer">
    <div class="footer-content">
      <div class="footer-links">
        <a href="index.php">Home</a>
        <a href="pages/about.php">My Story</a>
        <a href="pages/contact.php">Contact</a>
      </div>
      <p>© <?php echo date('Y'); ?> Sagrika</p>
    </div>
  </footer>

  <script src="assets/js/main.js"></script>
</body>

</html>