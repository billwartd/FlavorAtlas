<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlavorAtlas — World's Largest Recipe Collection</title>
    <meta name="description" content="Discover 100+ authentic recipes from every corner of the world. From Japanese ramen to Italian pasta, Mexican tacos to Indian curry — your global kitchen awaits.">
    <meta name="keywords" content="recipes, world cuisine, cooking, food, international recipes, global kitchen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;900&family=Inter:wght@300;400;500;600;700;800&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="cursor-glow" id="cursorGlow"></div>
    <div class="page-loader" id="pageLoader">
        <div class="loader-content">
            <div class="loader-icon">🌍</div>
            <div class="loader-text">FlavorAtlas</div>
            <div class="loader-bar"><div class="loader-fill"></div></div>
        </div>
    </div>

    <nav class="nav" id="navbar">
        <div class="nav-inner">
            <a href="index.html" class="logo">
                <span class="logo-icon">🌍</span>
                <span class="logo-text">Flavor<span class="logo-accent">Atlas</span></span>
            </a>
            <div class="nav-links" id="navLinks">
                <a href="#home">Home</a>
                <a href="#regions">Regions</a>
                <a href="#popular">Popular</a>
                <a href="#recipes">All Recipes</a>
                <a href="#about">About</a>
            </div>
            <div class="nav-actions">
                <button class="search-toggle" id="searchToggle" aria-label="Search">🔍</button>
                <button class="nav-toggle" id="navToggle" aria-label="Menu"><span></span><span></span><span></span></button>
            </div>
        </div>
        <div class="search-bar" id="searchBar">
            <div class="search-inner">
                <span class="search-icon">🔍</span>
                <input type="text" id="searchInput" placeholder="Search recipes from around the world..." autocomplete="off">
                <button class="search-close" id="searchClose">✕</button>
            </div>
            <div class="search-results" id="searchResults"></div>
        </div>
    </nav>

    <section class="hero" id="home">
        <div class="hero-bg">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=1920&q=80" alt="World cuisine" class="hero-bg-img">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-particles" id="heroParticles"></div>
        <div class="hero-content">
            <div class="hero-badge">🔥 100+ Authentic Recipes</div>
            <h1 class="hero-title">
                <span class="title-line">Every Flavor,</span>
                <span class="title-line script">Every Corner</span>
                <span class="title-line">of the World.</span>
            </h1>
            <p class="hero-sub">From the bustling streets of Bangkok to the quiet kitchens of Tuscany — discover recipes that have been passed down through generations, now brought to your table.</p>
            <div class="hero-cta">
                <a href="#recipes" class="btn btn-primary">Explore Recipes</a>
                <a href="#regions" class="btn btn-outline">By Region</a>
            </div>
            <div class="hero-stats">
                <div class="stat"><span class="stat-num" data-target="100">0</span><span class="stat-label">Recipes</span></div>
                <div class="stat"><span class="stat-num" data-target="7">0</span><span class="stat-label">Continents</span></div>
                <div class="stat"><span class="stat-num" data-target="45">0</span><span class="stat-label">Countries</span></div>
            </div>
        </div>
        <div class="scroll-hint">
            <div class="mouse"><div class="wheel"></div></div>
            <span>Scroll to explore</span>
        </div>
    </section>

    <section class="regions" id="regions">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Explore by Region</span>
                <h2 class="section-title">Taste the <span class="accent">World</span></h2>
                <p class="section-desc">Click on a region to discover its unique culinary traditions and authentic recipes.</p>
            </div>
            <div class="region-grid">
                <a href="#recipes" class="region-card" data-region="asia" onclick="filterRecipes('asia')">
                    <img src="https://images.unsplash.com/photo-1562564055-71e051d33c19?w=600&q=80" alt="Asia">
                    <div class="region-overlay"></div>
                    <div class="region-content"><span class="region-emoji">🥢</span><h3>Asia</h3><p>28 recipes</p></div>
                </a>
                <a href="#recipes" class="region-card" data-region="europe" onclick="filterRecipes('europe')">
                    <img src="https://images.unsplash.com/photo-1498579150354-977475b7ea0b?w=600&q=80" alt="Europe">
                    <div class="region-overlay"></div>
                    <div class="region-content"><span class="region-emoji">🍷</span><h3>Europe</h3><p>24 recipes</p></div>
                </a>
                <a href="#recipes" class="region-card" data-region="americas" onclick="filterRecipes('americas')">
                    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600&q=80" alt="Americas">
                    <div class="region-overlay"></div>
                    <div class="region-content"><span class="region-emoji">🌮</span><h3>Americas</h3><p>20 recipes</p></div>
                </a>
                <a href="#recipes" class="region-card" data-region="africa" onclick="filterRecipes('africa')">
                    <img src="https://images.unsplash.com/photo-1604329760661-e71dc83f8f26?w=600&q=80" alt="Africa">
                    <div class="region-overlay"></div>
                    <div class="region-content"><span class="region-emoji">🌍</span><h3>Africa</h3><p>12 recipes</p></div>
                </a>
                <a href="#recipes" class="region-card" data-region="middle-east" onclick="filterRecipes('middle-east')">
                    <img src="https://images.unsplash.com/photo-1511690743698-d9d18f7e20f1?w=600&q=80" alt="Middle East">
                    <div class="region-overlay"></div>
                    <div class="region-content"><span class="region-emoji">🫒</span><h3>Middle East</h3><p>10 recipes</p></div>
                </a>
                <a href="#recipes" class="region-card" data-region="oceania" onclick="filterRecipes('oceania')">
                    <img src="https://images.unsplash.com/photo-1544025162-d76694265947?w=600&q=80" alt="Oceania">
                    <div class="region-overlay"></div>
                    <div class="region-content"><span class="region-emoji">🦐</span><h3>Oceania</h3><p>6 recipes</p></div>
                </a>
            </div>
        </div>
    </section>

    <section class="popular" id="popular">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Chef's Picks</span>
                <h2 class="section-title">Most <span class="accent">Popular</span></h2>
                <p class="section-desc">The recipes our community can't stop cooking.</p>
            </div>
            <div class="popular-scroll" id="popularScroll"></div>
        </div>
    </section>

    <section class="all-recipes" id="recipes">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Full Collection</span>
                <h2 class="section-title">All <span class="accent">100 Recipes</span></h2>
                <p class="section-desc">Every recipe, from every corner of the globe. Filter by region or difficulty.</p>
            </div>
            <div class="filter-bar">
                <button class="filter-btn active" data-filter="all" onclick="filterRecipes('all')">All</button>
                <button class="filter-btn" data-filter="asia" onclick="filterRecipes('asia')">🥢 Asia</button>
                <button class="filter-btn" data-filter="europe" onclick="filterRecipes('europe')">🍷 Europe</button>
                <button class="filter-btn" data-filter="americas" onclick="filterRecipes('americas')">🌮 Americas</button>
                <button class="filter-btn" data-filter="africa" onclick="filterRecipes('africa')">🌍 Africa</button>
                <button class="filter-btn" data-filter="middle-east" onclick="filterRecipes('middle-east')">🫒 Middle East</button>
                <button class="filter-btn" data-filter="oceania" onclick="filterRecipes('oceania')">🦐 Oceania</button>
            </div>
            <div class="recipe-grid" id="recipeGrid"></div>
            <div class="load-more-wrap">
                <button class="btn btn-outline" id="loadMoreBtn" onclick="loadMore()">Load More Recipes</button>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="cta-bg"><img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?w=1920&q=80" alt="Cooking"></div>
        <div class="container">
            <h2>Ready to Cook <span class="script">Something Amazing</span>?</h2>
            <p>Join millions of home cooks exploring world cuisine every day.</p>
            <a href="#recipes" class="btn btn-primary btn-lg">Start Cooking</a>
        </div>
    </section>

    <section class="about-section" id="about">
        <div class="container">
            <div class="about-grid">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=800&q=80" alt="Kitchen">
                </div>
                <div class="about-content">
                    <span class="section-tag">Our Story</span>
                    <h2>Recipes That <span class="accent">Transcend</span> Borders</h2>
                    <p>FlavorAtlas was born from a simple belief: that food is the most powerful connector of cultures. Every recipe on this site has been researched, tested, and written with deep respect for its origins. We don't just share ingredients — we share stories, traditions, and the soul of each dish.</p>
                    <div class="about-features">
                        <div class="about-feat"><span>✦</span> Authentically sourced from local cooks</div>
                        <div class="about-feat"><span>✦</span> Tested in our kitchen 3× before publishing</div>
                        <div class="about-feat"><span>✦</span> Cultural context with every recipe</div>
                        <div class="about-feat"><span>✦</span> Step-by-step photos for guidance</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <div class="logo"><span class="logo-icon">🌍</span><span class="logo-text">Flavor<span class="logo-accent">Atlas</span></span></div>
                    <p>The world's largest collection of authentic recipes from every corner of the globe.</p>
                    <div class="footer-social"><a href="#">𝕏</a><a href="#">IG</a><a href="#">YT</a><a href="#">TT</a></div>
                </div>
                <div class="footer-col"><h4>Regions</h4><a href="#">Asia</a><a href="#">Europe</a><a href="#">Americas</a><a href="#">Africa</a><a href="#">Middle East</a><a href="#">Oceania</a></div>
                <div class="footer-col"><h4>Explore</h4><a href="#">Popular</a><a href="#">Quick & Easy</a><a href="#">Vegetarian</a><a href="#">Desserts</a><a href="#">Street Food</a></div>
                <div class="footer-col"><h4>Company</h4><a href="#">About</a><a href="#">Contact</a><a href="#">Privacy</a><a href="#">Terms</a></div>
            </div>
            <div class="footer-bottom"><p>© 2025-2026 FlavorAtlas. All rights reserved.</p></div>
        </div>
    </footer>

    <button class="back-to-top" id="backToTop">↑</button>
    <script src="js/recipes-data.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
