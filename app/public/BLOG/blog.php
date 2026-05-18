<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Pixel Grind: From Mobile to Open Worlds</title>
    <link rel="stylesheet" href="blog.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header class="nav">
        <div class="wrap">
            <a class="logo" href="/">Pixel Grind</a>
            <nav class="categories">
                <a href="#featured">Featured</a>
                <a href="#categories">Genres</a>
                <a href="#trending">Trending</a>
                <a href="#analysis">UI Analysis</a>
                <a href="#about">About</a>
            </nav>
        </div>
    </header>

    <section class="hero" id="home">
        <div class="hero-inner">
            <div class="hero-copy">
                <h1>Pixel Grind</h1>
                <p class="tagline">From ranked battles to open-world exploration — real gameplay, real reviews, and UI insights.</p>
                <a class="cta" href="#featured">Explore Games</a>
            </div>
        </div>
    </section>

    <main class="wrap main">
        <section id="featured" class="featured">
            <h2>Featured Posts</h2>
            <div class="grid">
                <article class="card">
                    <img src="/images/ml.jpg" alt="Why Mobile Legends Still Dominates">
                    <div class="meta"><span class="tag">MOBA</span></div>
                    <h3>Why Mobile Legends: Bang Bang Still Dominates Mobile MOBA</h3>
                </article>

                <article class="card">
                    <img src="/images/wuwa.jpg" alt="Wuthering Waves impressions">
                    <div class="meta"><span class="tag">RPG</span></div>
                    <h3>First Impressions of Wuthering Waves</h3>
                </article>

                <article class="card">
                    <img src="/images/lol.jpg" alt="LoL vs ML ranked">
                    <div class="meta"><span class="tag">Opinion</span></div>
                    <h3>Ranked Experience in League of Legends vs ML</h3>
                </article>
            </div>
        </section>

        <section class="trending-section">
            <h2>Trending Games</h2>
            <div class="trending-strip">
                <div class="trend-card"><img src="/images/Screenshot (749).png" alt="Zenless"><span>Zenless Zone Zero</span></div>
                <div class="trend-card"><img src="/images/wuwa.jpg" alt="Wuthering Waves"><span>Wuthering Waves</span></div>
                <div class="trend-card"><img src="/images/Showcase.png" alt="Clash" onerror="this.src='/images/capstone.png'"><span>Clash of Clans</span></div>
                <div class="trend-card"><img src="/images/Screenshot (752).png" alt="Pokemon GO"><span>Pokémon GO</span></div>
                <div class="trend-card"><img src="/images/lol.jpg" alt="LoL"><span>League of Legends</span></div>
            </div>
        </section>

        <section id="categories" class="categories">
            <h2>Game Categories</h2>
            <div class="category-grid">
                <div class="category-card"><img src="/images/ml.jpg" alt="MOBA"><h4>MOBA</h4><p>Fast-paced team battles and ranked play.</p></div>
                <div class="category-card"><img src="/images/wuwa.jpg" alt="Gacha"><h4>Gacha</h4><p>Collectible, gacha-driven RPGs and pulls.</p></div>
                <div class="category-card"><img src="/images/capstone.png" alt="RPG"><h4>RPG</h4><p>Open worlds, exploration, and story-led design.</p></div>
                <div class="category-card"><img src="/images/Screenshot (750).png" alt="Strategy"><h4>Strategy</h4><p>Base-building and tactical play.</p></div>
                <div class="category-card"><img src="/images/Screenshot (751).png" alt="Card"><h4>Card Games</h4><p>Deck builders and competitive card play.</p></div>
                <div class="category-card"><img src="/images/loL.jpg" alt="Board" onerror="this.src='/images/capstone.png'"><h4>Board Games</h4><p>Digital board and casual multiplayer.</p></div>
                <div class="category-card"><img src="/images/lol.jpg" alt="Mobile"><h4>Mobile Games</h4><p>Play anywhere: MLBB, Pokémon GO, Clash.</p></div>
                <div class="category-card"><img src="/images/Showcase.png" alt="Competitive" onerror="this.src='/images/lol.jpg'"><h4>Competitive</h4><p>Ranked, esports, and tactical competition.</p></div>
            </div>
        </section>

        <section class="featured-posts">
            <h2>Featured Posts</h2>
            <div class="featured-grid">
                <!-- reuse existing small cards -->
                <div class="post-card"><img src="/images/wuwa.jpg" alt="Wuthering Waves"><h4>Why Wuthering Waves' Combat Feels So Satisfying</h4></div>
                <div class="post-card"><img src="/images/ml.jpg" alt="ML"> <h4>Clash of Clans: Best Base Layouts</h4></div>
                <div class="post-card"><img src="/images/Screenshot (752).png" alt="Pokemon GO"><h4>Pokémon GO in 2025: Is It Still Worth Playing?</h4></div>
            </div>
        </section>

        <section class="quick-reviews">
            <h2>Quick Reviews</h2>
            <div class="reviews-grid">
                <div class="review-card"><h5>Genshin Impact</h5><div class="rating">4.2</div><p>Open-world RPG with strong visuals — slightly repetitive endgame.</p></div>
                <div class="review-card"><h5>Honkai: Star Rail</h5><div class="rating">4.3</div><p>Great story and visuals; solid gacha pacing.</p></div>
                <div class="review-card"><h5>Clash Royale</h5><div class="rating">4.0</div><p>Quick matches, deep strategy in short sessions.</p></div>
                <div class="review-card"><h5>Pokémon GO</h5><div class="rating">3.8</div><p>Still great for outdoor play; events need freshness.</p></div>
            </div>
        </section>

        <section class="ui-analysis">
            <h2>UI Analysis</h2>
            <div class="analysis-grid">
                <div class="analysis-card"><img src="/images/Screenshot (752).png" alt="UI"><h5>Best Inventory Systems</h5></div>
                <div class="analysis-card"><img src="/images/wuwa.jpg" alt="UI"><h5>Gacha UI: Clarity vs Flair</h5></div>
                <div class="analysis-card"><img src="/images/ml.jpg" alt="UI"><h5>Ranking Systems Compared</h5></div>
            </div>
        </section>

        <section class="currently-grinding">
            <h2>Currently Grinding</h2>
            <div class="grind-list">
                <div class="grind-item"><img src="/images/wuwa.jpg" alt="Wuwa"><div class="meta"><strong>Wuthering Waves</strong><small>120h played</small></div><div class="progress"><div style="width:68%"></div></div></div>
                <div class="grind-item"><img src="/images/Screenshot (752).png" alt="Pokemon"><div class="meta"><strong>Pokémon GO</strong><small>80h played</small></div><div class="progress"><div style="width:55%"></div></div></div>
                <div class="grind-item"><img src="/images/ml.jpg" alt="Clash"><div class="meta"><strong>Clash of Clans</strong><small>150h played</small></div><div class="progress"><div style="width:72%"></div></div></div>
            </div>
        </section>

        <section class="top-games">
            <h2>Top Games This Month</h2>
            <table>
                <thead><tr><th>Rank</th><th>Game</th><th>Genre</th></tr></thead>
                <tbody>
                    <tr><td>1</td><td>Wuthering Waves</td><td>Gacha RPG</td></tr>
                    <tr><td>2</td><td>Pokémon GO</td><td>AR Mobile</td></tr>
                    <tr><td>3</td><td>Clash of Clans</td><td>Strategy</td></tr>
                    <tr><td>4</td><td>TFT</td><td>Auto Chess</td></tr>
                </tbody>
            </table>
        </section>

        <section id="categories" class="categories">
            <h2>Game Categories</h2>
            <div class="chips">
                <button class="chip">MOBA</button>
                <button class="chip">Open-World / RPG</button>
                <button class="chip">AR / Casual</button>
                <button class="chip">Strategy</button>
                <button class="chip">Indie</button>
            </div>
        </section>

        <section id="trending" class="trending">
            <h2>Trending</h2>
            <div class="horizontal">
                <div class="trend">Wuthering Waves vs Genshin</div>
                <div class="trend">ML vs LoL: Skill vs Accessibility</div>
                <div class="trend">Best Pokémon GO Spots</div>
            </div>
        </section>

        <section id="analysis" class="analysis">
            <h2>Game UI & Design Analysis</h2>
            <p>As someone studying Web Systems Technology, I look beyond gameplay. In Wuthering Waves the UI feels minimal and modern—clean spacing, soft animations, and good readability. Genshin leans into artistic immersion with layered menus and ornate icons. These are two design philosophies: usability vs immersion.</p>
        </section>

        <section id="about" class="about">
            <h2>About Me</h2>
            <p>Hi, I’m <strong>Alric Sean Macalinao</strong>, a BSIT student specializing in Web Systems Technology. I play across genres—from MOBA to open-world RPGs—and I work in graphic design and editing. This blog combines gaming, design, and tech insights.</p>
        </section>
    </main>

    <footer class="footer">
        <div class="wrap">
            <div>© Pixel Grind — Alric Sean Macalinao</div>
            <div class="small">Design system: Neon blue #00D4FF • Violet #7C3AED</div>
        </div>
    </footer>
</body>
</html>
