<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Story — Sagrika</title>
  <meta name="description"
    content="From UPSC aspirant to web developer — my journey of career transition and finding my passion in technology.">
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
        <li><a href="about.php" class="active">My Story</a></li>
        <li><a href="contact.php">Say Hello</a></li>
      </ul>
    </nav>
  </header>

  <main class="container">
    <section class="about-hero">
      <h1>The <em>unconventional</em> path</h1>
      <p>Not every journey to tech follows a straight line. Mine certainly didn't.</p>
    </section>

    <section class="about-content">
      <div class="about-text">
        <h2>The UPSC Chapter</h2>
        <p>Like many ambitious graduates in India, I set out to crack one of the toughest exams in the world — the UPSC
          Civil Services. For years, I immersed myself in books, current affairs, and answer writing practice.</p>
        <p>Those years weren't wasted. They taught me <strong>how to learn systematically</strong>, stay focused for 12+
          hours a day, manage stress, and keep going when results don't come easy.</p>
      </div>
      <div class="about-image">
        <img src="../assets/images/about-studying.png" alt="UPSC preparation journey" class="about-img">
      </div>
    </section>

    <section class="about-content" style="padding-top: 2rem;">
      <div class="about-image">
        <img src="../assets/images/about-coding.png" alt="Web development journey" class="about-img">
      </div>
      <div class="about-text">
        <h2>The Pivot to Tech</h2>
        <p>After much reflection during my career gap, I discovered something unexpected — I genuinely love building
          things with code. What started as curiosity turned into passion.</p>
        <p>I dove into HTML, CSS, JavaScript, PHP, and React. Every tutorial completed, every bug fixed, every project
          finished — it all reinforced that this is where I'm meant to be.</p>
        <a href="contact.php" class="btn btn-primary">Let's Connect</a>
      </div>
    </section>

    <section class="features" style="padding-top: 4rem;">
      <div class="section-header">
        <p class="overline">What UPSC Taught Me</p>
        <h2>Skills that transferred to tech</h2>
      </div>
      <div class="feature-grid">
        <div class="feature-card">
          <div class="feature-icon"><span class="icon-text">01</span></div>
          <h3>Discipline</h3>
          <p>Years of rigorous study built an unshakeable work ethic and consistency.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><span class="icon-text">02</span></div>
          <h3>Research Skills</h3>
          <p>Finding the right documentation, debugging issues, learning new frameworks — all second nature.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon"><span class="icon-text">03</span></div>
          <h3>Resilience</h3>
          <p>If you can handle UPSC rejection, you can handle any bug or project deadline.</p>
        </div>
      </div>
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