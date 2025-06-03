<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Blog</title>

  <style>
    <?php
      // Load CSS langsung dari string biar jadi satu file PHP
      echo <<<CSS
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body, html {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f9f9f9;
  color: #504b4b;
  scroll-behavior: smooth;
}

.navbar {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 10%;
  z-index: 1000;
  background-color: #ffffff;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.logo {
  font-size: 1.5em;
  font-weight: 600;
  color: #000000;
}

.nav-links {
  list-style: none;
  display: flex;
  gap: 20px;
}

.nav-links li a {
  color: #000000;
  text-decoration: none;
  padding: 8px 12px;
  border-radius: 4px;
  transition: background 0.3s;
}

.nav-links li a:hover,
.nav-links li a.active {
  background-color: #979899;
}

.page-header {
  margin-top: 120px;
  text-align: center;
}

.page-header h1 {
  font-size: 2.8em;
  color: #222;
  margin-bottom: 10px;
}

.page-header p {
  font-size: 1.1em;
  color: #555;
}

.search-container {
  display: flex;
  justify-content: center;
  margin: 30px auto 10px auto;
}

.search-container input {
  padding: 12px 20px;
  width: 60%;
  max-width: 500px;
  font-size: 1em;
  border: 2px solid #ccc;
  border-radius: 8px;
}

.blog-section {
  padding: 40px 10%;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
}

.blog-section article {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  overflow: hidden;
  transition: transform 0.3s ease, opacity 1s ease;
  opacity: 0;
  transform: translateY(20px);
}

.blog-section article:hover {
  transform: scale(1.03);
  box-shadow: 0 8px 16px rgba(0,0,0,0.2);
}

.blog-section article.show {
  opacity: 1;
  transform: translateY(0);
}

.blog-section img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.blog-section h2 {
  font-size: 1.4em;
  margin: 15px 20px 10px 20px;
  color: #222;
}

.blog-section p {
  font-size: 1em;
  color: #333;
  line-height: 1.6;
  margin: 0 20px 10px 20px;
}

.blog-section a {
  display: block;
  margin: 0 20px 20px 20px;
  color: #1161d7;
  font-weight: bold;
  text-decoration: none;
}

footer {
  padding: 20px;
  text-align: center;
  background-color: #222;
  color: #ddd;
  margin-top: 60px;
}

.hidden {
  display: none;
}

.highlight {
  background-color: yellow;
}

#scrollTopBtn {
  position: fixed;
  bottom: 30px;
  right: 30px;
  padding: 12px 16px;
  font-size: 20px;
  border: none;
  border-radius: 50%;
  background-color: #3b82f6;
  color: white;
  cursor: pointer;
  box-shadow: 0 4px 8px rgba(0,0,0,0.3);
  display: none;
  z-index: 1000;
}

.typing {
  display: inline-block;
  border-right: 2px solid #3b82f6;
  white-space: nowrap;
  overflow: hidden;
}
CSS;
    ?>
  </style>
</head>
<body>

  <!-- Navigation -->
  <header>
    <nav class="navbar">
      <div class="logo">Personal Web</div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="blog.php" class="active">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <!-- Page Header -->
  <section class="page-header">
    <h1><span class="typing" id="typingHeader"></span></h1>
    <p>Artikel menarik mengenai hal favorit saya di sepakbola</p>
  </section>

  <!-- Search Bar -->
  <div class="search-container">
    <input type="text" id="searchInput" placeholder="Cari artikel...">
  </div>

  <!-- Blog Content -->
  <section class="blog-section" id="blogSection">
    <?php
      $blogs = [
        [
          "img" => "images/Manchester-United.webp",
          "title" => "Manchester United",
          "desc" => "Manchester United Football Club adalah salah satu klub sepak bola paling terkenal dan sukses di dunia, berbasis di Old Trafford, Manchester, Inggris."
        ],
        [
          "img" => "https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_England.svg",
          "title" => "England",
          "desc" => "Tim Nasional Sepak Bola Inggris pernah menjuarai Piala Dunia FIFA 1966 dan menjadi finalis Euro 2020, menunjukkan kiprah kuat dalam sejarah sepak bola."
        ],
        [
          "img" => "images/photo3.jpg",
          "title" => "Cristiano Ronaldo",
          "desc" => "Cristiano Ronaldo adalah legenda sepak bola Portugal yang dikenal karena rekor gol luar biasa dan keberhasilannya di Manchester United, Real Madrid, dan lainnya."
        ]
      ];

      foreach ($blogs as $blog) {
        echo "<article>";
        echo "<img src='{$blog['img']}' alt='{$blog['title']}'>";
        echo "<h2>{$blog['title']}</h2>";
        echo "<p>{$blog['desc']}</p>";
        echo "<a href='#'>Read More</a>";
        echo "</article>";
      }
    ?>
  </section>

  <!-- Scroll to Top Button -->
  <button id="scrollTopBtn">&#8679;</button>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 MyWeb. All rights reserved.</p>
  </footer>

  <!-- JavaScript -->
  <script>
    const typingText = "Blog";
    const typingEl = document.getElementById("typingHeader");
    let charIndex = 0;

    function typeHeader() {
      if (charIndex < typingText.length) {
        typingEl.innerHTML += typingText.charAt(charIndex);
        charIndex++;
        setTimeout(typeHeader, 150);
      }
    }

    const articles = document.querySelectorAll(".blog-section article");
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
        }
      });
    }, { threshold: 0.1 });

    articles.forEach(article => observer.observe(article));

    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('keyup', () => {
      const value = searchInput.value.toLowerCase();
      articles.forEach(article => {
        const titleEl = article.querySelector("h2");
        const contentEl = article.querySelector("p");

        const titleText = titleEl.textContent;
        const contentText = contentEl.textContent;

        const titleMatch = titleText.toLowerCase().includes(value);
        const contentMatch = contentText.toLowerCase().includes(value);

        if (titleMatch || contentMatch) {
          article.classList.remove('hidden');
          titleEl.innerHTML = highlightMatch(titleText, value);
          contentEl.innerHTML = highlightMatch(contentText, value);
        } else {
          article.classList.add('hidden');
        }
      });
    });

    function highlightMatch(text, match) {
      if (!match) return text;
      const regex = new RegExp(`(${match})`, 'gi');
      return text.replace(regex, '<span class="highlight">$1</span>');
    }

    const scrollBtn = document.getElementById("scrollTopBtn");
    window.addEventListener("scroll", () => {
      if (window.scrollY > 200) {
        scrollBtn.style.display = "block";
      } else {
        scrollBtn.style.display = "none";
      }
    });

    scrollBtn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });

    window.onload = () => {
      typeHeader();
    };
  </script>

</body>
</html>
