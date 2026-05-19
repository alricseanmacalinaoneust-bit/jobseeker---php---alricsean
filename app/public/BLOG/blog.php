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
            <a class="logo" href="/BLOG/blog.php">Pixel Grind</a>
            <div class="nav-right">
                <nav class="categories">
                    <a href="#featured">Featured</a>
                    <a href="#categories">Genres</a>
                    <a href="#trending">Trending</a>
                    <a href="#analysis">UI Analysis</a>
                </nav>
                <a class="author-btn" href="/BLOG/alric-review.php">My Profile</a>
            </div>
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
                    <img src="/images/league.jpg" alt="LoL vs ML ranked">
                    <div class="meta"><span class="tag">Opinion</span></div>
                    <h3>Ranked Experience in League of Legends vs ML</h3>
                </article>
            </div>
        </section>

        <section class="trending-section">
            <h2>Trending Games</h2>
                <div class="trending-strip">
                <div class="trend-card"><img src="/images/zenless.jpg" alt="Zenless"><span>Zenless Zone Zero</span></div>
                <div class="trend-card"><img src="/images/wuwa.jpg" alt="Wuthering Waves"><span>Wuthering Waves</span></div>
                <div class="trend-card"><img src="/images/clash of clans.png" alt="Clash" onerror="this.src='/images/capstone.png'"><span>Clash of Clans</span></div>
                <div class="trend-card"><img src="/images/pokemon go.png" alt="Pokemon GO"><span>Pokémon GO</span></div>
                <div class="trend-card"><img src="/images/league.jpg" alt="LoL"><span>League of Legends</span></div>
            </div>
        </section>

        <section id="categories" class="categories">
            <h2>Game Categories</h2>
            <div class="category-grid">
                <div class="category-card"><img src="/images/ml.jpg" alt="MOBA"><h4>MOBA</h4><p>Fast-paced team battles and ranked play.</p></div>
                <div class="category-card"><img src="/images/wuwa.jpg" alt="Gacha"><h4>Gacha</h4><p>Collectible, gacha-driven RPGs and pulls.</p></div>
                <div class="category-card"><img src="/images/rpg.jpg" alt="RPG"><h4>RPG</h4><p>Open worlds, exploration, and story-led design.</p></div>
                <div class="category-card"><img src="/images/strategy.jpg" alt="Strategy"><h4>Strategy</h4><p>Base-building and tactical play.</p></div>
                <div class="category-card"><img src="/images/card.jpg" alt="Card"><h4>Card Games</h4><p>Deck builders and competitive card play.</p></div>
                <div class="category-card"><img src="/images/baord.jpg" alt="Board" onerror="this.src='/images/capstone.png'"><h4>Board Games</h4><p>Digital board and casual multiplayer.</p></div>
                <div class="category-card"><img src="/images/mobile.jpg" alt="Mobile"><h4>Mobile Games</h4><p>Play anywhere: MLBB, Pokémon GO, Clash.</p></div>
                <div class="category-card"><img src="/images/compet.jpg" alt="Competitive" onerror="this.src='/images/league.jpg'"><h4>Competitive</h4><p>Ranked, esports, and tactical competition.</p></div>
            </div>
        </section>

        <section class="featured-posts">
            <h2>Featured Posts</h2>
                <div class="featured-grid">
                <!-- reuse existing small cards -->
                <div class="post-card"><a href="alric-review.php"><img src="/images/wuwa.jpg" alt="Wuthering Waves"><h4>From the Author — Why Pixel Grind Exists</h4></a></div>
                <div class="post-card"><img src="/images/ml.jpg" alt="ML"> <h4>Clash of Clans: Best Base Layouts</h4></div>
                <div class="post-card"><img src="/images/pokemon go.png" alt="Pokemon GO"><h4>Pokémon GO in 2025: Is It Still Worth Playing?</h4></div>
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
                <div class="analysis-card"><img src="/images/pokemon go.png" alt="UI"><h5>Best Inventory Systems</h5></div>
                <div class="analysis-card"><img src="/images/wuwa.jpg" alt="UI"><h5>Gacha UI: Clarity vs Flair</h5></div>
                <div class="analysis-card"><img src="/images/ml.jpg" alt="UI"><h5>Ranking Systems Compared</h5></div>
            </div>
        </section>

        <section class="currently-grinding">
            <h2>Currently Grinding</h2>
            <div class="grind-list">
                <div class="grind-item"><img src="/images/wuwa.jpg" alt="Wuwa"><div class="meta"><strong>Wuthering Waves</strong><small>120h played</small></div><div class="progress"><div style="width:68%"></div></div></div>
                <div class="grind-item"><img src="/images/pokemon go.png" alt="Pokemon"><div class="meta"><strong>Pokémon GO</strong><small>80h played</small></div><div class="progress"><div style="width:55%"></div></div></div>
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
            <p>As someone studying Web Systems Technology, I look beyond gameplay to how a title communicates with players. Different games teach different UI lessons: Wuthering Waves favors a minimal, modern HUD with clean spacing and soft animations that prioritize readability, while Genshin pursues artistic immersion with layered menus and ornate icons that reward exploration.</p>

            <p>Competitive titles like League of Legends pack dense information into compact, glanceable panels for high-skill play. Mobile experiences such as Mobile Legends and Pokémon GO prioritize accessibility and simplicity—larger touch targets, streamlined flows, or location-driven interfaces that surface only the essentials. Strategy games such as Clash of Clans emphasize clear management screens and progression affordances.</p>

            <p>Together these approaches form a spectrum from usability to immersion. Good UI chooses the right trade-offs for the player's goals, prioritizing clarity, feedback, and the moments that bring players back.</p>
        </section>
        
    </main>

    <footer class="footer">
        <div class="wrap">
            <div>© Pixel Grind — Alric Sean Macalinao</div>
            <div class="small">ITWS-03</div>
        </div>
    </footer>
    <button id="toTop" class="back-to-top" aria-label="Back to top">↑</button>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const header = document.querySelector('.nav');
            const headerHeight = header ? header.offsetHeight : 0;

            // Smooth scroll for in-page anchors (with header offset)
            document.querySelectorAll('a[href^="#"]').forEach(function(anchor){
                anchor.addEventListener('click', function(e){
                    const hash = this.getAttribute('href');
                    if (!hash || hash === '#') return;
                    const target = document.querySelector(hash);
                    if (!target) return;

                    e.preventDefault();
                    const targetY = Math.max(0, target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 12);
                    window.scrollTo({ top: targetY, behavior: 'smooth' });

                    // update URL without jumping
                    try { history.pushState(null, '', hash); } catch(e) {}
                });
            });

            // Drag-to-scroll for horizontal trending strip (mouse + touch)
            (function(){
                const strip = document.querySelector('.trending-strip');
                if (!strip) return;

                let isDown = false;
                let startX;
                let scrollLeft;

                strip.addEventListener('mousedown', (e) => {
                    isDown = true;
                    strip.classList.add('grabbing');
                    startX = e.pageX - strip.offsetLeft;
                    scrollLeft = strip.scrollLeft;
                    e.preventDefault();
                });

                strip.addEventListener('mouseleave', () => {
                    isDown = false;
                    strip.classList.remove('grabbing');
                });

                strip.addEventListener('mouseup', () => {
                    isDown = false;
                    strip.classList.remove('grabbing');
                });

                strip.addEventListener('mousemove', (e) => {
                    if(!isDown) return;
                    const x = e.pageX - strip.offsetLeft;
                    const walk = (x - startX) * 1.5; // scroll-fast
                    strip.scrollLeft = scrollLeft - walk;
                });

                // Touch support
                strip.addEventListener('touchstart', (e) => {
                    startX = e.touches[0].pageX - strip.offsetLeft;
                    scrollLeft = strip.scrollLeft;
                }, { passive: true });

                strip.addEventListener('touchmove', (e) => {
                    const x = e.touches[0].pageX - strip.offsetLeft;
                    const walk = (x - startX) * 1.5;
                    strip.scrollLeft = scrollLeft - walk;
                }, { passive: true });
            })();

            // Back to top button
            const toTop = document.getElementById('toTop');
            toTop.addEventListener('click', function(){ window.scrollTo({ top: 0, behavior: 'smooth' }); });

            function toggleToTop(){
                if (window.pageYOffset > 320) toTop.classList.add('visible'); else toTop.classList.remove('visible');
            }

            window.addEventListener('scroll', toggleToTop, { passive: true });
            toggleToTop();

            const profileBtn = document.querySelector('.author-btn');
            if (profileBtn && window.location.pathname.includes('/BLOG/alric-review.php')) {
                profileBtn.classList.add('is-current');
            }
        });
    </script>
</body>
</html>
