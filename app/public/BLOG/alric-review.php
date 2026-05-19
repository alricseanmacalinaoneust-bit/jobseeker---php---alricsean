<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>From the Author — Why Pixel Grind Exists</title>
  <link rel="stylesheet" href="blog.css">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="profile-page">
  <header class="nav">
    <div class="wrap">
      <a class="logo" href="/BLOG/blog.php">Pixel Grind</a>
      <div class="nav-right">
        <a class="author-btn is-current" href="/BLOG/alric-review.php">My Profile</a>
      </div>
    </div>
  </header>

  <main class="wrap main">
    <article style="margin:10px 0 80px;background:transparent;color:#EAF6FF">
      <h1>From the Author — Why Pixel Grind Exists</h1>
      <p style="color:var(--muted);margin-top:8px;">By <strong>Alric Sean Macalinao</strong> — Published May 19, 2026</p>

      <section style="margin-top:22px;color:var(--muted);font-size:16px;line-height:1.7">
        <p>This site is my workspace. I built Pixel Grind because I want a place to write about games the way I think about them — design-first, player-first, and with a focus on UI and systems rather than marketing copy. Everything here is my voice: the picks, the frustrations, and the little things that make a game feel polished.</p>

        <h2 style="margin-top:18px;color:#fff">My Review Style</h2>
        <p style="margin-top:8px">I don't just look at how a game plays for a few minutes — I pay attention to the menus, the flow between screens, the readability, and how the game makes me feel after a longer session. I like reviews that sound like a real player wrote them, not a trailer script. That means I focus on the good, the bad, and the stuff that slowly becomes annoying or enjoyable over time.</p>

        <h3 style="margin-top:14px;color:#fff">What I Loved</h3>
        <ul style="color:var(--muted);line-height:1.6">
          <li>Games that keep the HUD simple and let the action breathe.</li>
          <li>Menus that are easy to understand without checking a guide.</li>
          <li>Visual designs that feel polished and consistent from start to finish.</li>
          <li>Progress systems that make grinding feel rewarding instead of tiring.</li>
        </ul>

        <h3 style="margin-top:14px;color:#fff">What Could Be Better</h3>
        <ul style="color:var(--muted);line-height:1.6">
          <li>Some games hide important information too deep in the menus.</li>
          <li>Extra clicks and long loading between screens can break the flow.</li>
          <li>Games sometimes look great at first but get repetitive once the novelty wears off.</li>
        </ul>

        <h3 style="margin-top:14px;color:#fff">More Opinions I Keep in Mind</h3>
        <p style="color:var(--muted)">I also pay attention to how a game treats new players, how fair the early progression feels, and whether the game respects the time I spend on it. A good game doesn't need to be perfect — it just needs to feel worth coming back to. That is why my reviews usually sound personal, honest, and a little picky.</p>

        <p style="margin-top:18px;color:var(--muted)">Current perspective: <strong style="color:#EAF6FF">4.1 / 5</strong> — I like strong combat systems, clean UI, and good progression design, but I also notice when a game starts repeating itself too much.</p>

        <h2 style="margin-top:20px;color:#fff">Why I Write</h2>
        <p style="color:var(--muted)">I write because games are more interesting when you explain what they actually do to you as a player. A score alone does not show the full picture, so I try to explain why something feels fun, why something feels annoying, and why a game stays in your mind after you close it. These comments are my way of recording how I see games — as a player, a designer, and someone who notices the little details.</p>

        <p style="color:var(--muted)">I also write to build my own voice. I want this blog to feel like my space, with my opinions, my favorite genres, and my own way of saying what works and what doesn't. If a game has great combat but weak menus, I want to say that. If a game is visually strong but feels repetitive, I want that in the review too. That honesty is what makes Pixel Grind feel like mine.</p>

        <p style="color:var(--muted)">When I keep writing, I get better at noticing patterns in game design, UI, and progression. That helps me compare games more fairly and explain them more clearly. So the goal is not just to rate games — it's to understand them, and to let other people see the game through my point of view.</p>

        <h2 style="margin-top:20px;color:#fff">Profile</h2>
        <p style="color:var(--muted)">I’m <strong>Alric Sean Macalinao</strong>, a BSIT student specializing in Web Systems Technology. I play across genres—from MOBA to open-world RPGs—and I work in graphic design and editing. This blog combines gaming, design, and tech insights.</p>

        <p style="margin-top:18px;color:var(--muted)">— Alric</p>
      </section>
    </article>

    <a href="/BLOG/blog.php" style="display:inline-block;margin-bottom:60px;color:var(--accent1)">← Back to Pixel Grind</a>
  </main>

  <footer class="footer">
    <div class="wrap">
      <div>© Pixel Grind — Alric Sean Macalinao</div>
      <div class="small">Design system: Neon blue #00D4FF • Violet #7C3AED</div>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function(){
      const profileBtn = document.querySelector('.author-btn');
      if (profileBtn && window.location.pathname.includes('/BLOG/alric-review.php')) {
        profileBtn.classList.add('is-current');
      }
    });
  </script>
</body>
</html>