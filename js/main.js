// Cursor glow
const glow = document.getElementById('cursorGlow');
document.addEventListener('mousemove', e => { if(glow){glow.style.left=e.clientX+'px';glow.style.top=e.clientY+'px';} });

// Hero particles
const pc = document.getElementById('heroParticles');
if(pc){for(let i=0;i<20;i++){const p=document.createElement('div');p.className='hero-particle';const s=Math.random()*6+2;p.style.cssText=`width:${s}px;height:${s}px;left:${Math.random()*100}%;animation-duration:${Math.random()*15+10}s;animation-delay:${Math.random()*8}s;`;pc.appendChild(p);}}

// Page loader
window.addEventListener('load',()=>{const l=document.getElementById('pageLoader');if(l)setTimeout(()=>l.classList.add('hidden'),1600);});

// Navbar scroll
const navbar=document.getElementById('navbar'),btt=document.getElementById('backToTop');
window.addEventListener('scroll',()=>{const s=window.scrollY;if(navbar)navbar.classList.toggle('scrolled',s>50);if(btt)btt.classList.toggle('visible',s>500);});
if(btt)btt.addEventListener('click',()=>window.scrollTo({top:0,behavior:'smooth'}));

// Mobile nav
const nt=document.getElementById('navToggle'),nl=document.getElementById('navLinks');
if(nt)nt.addEventListener('click',()=>{nl.classList.toggle('open');});
document.querySelectorAll('.nav-links a').forEach(a=>a.addEventListener('click',()=>{if(nl)nl.classList.remove('open');}));

// Search
const st=document.getElementById('searchToggle'),sb=document.getElementById('searchBar'),sc=document.getElementById('searchClose'),si=document.getElementById('searchInput'),sr=document.getElementById('searchResults');
if(st)st.addEventListener('click',()=>{sb.classList.toggle('open');if(sb.classList.contains('open'))si.focus();});
if(sc)sc.addEventListener('click',()=>{sb.classList.remove('open');sr.innerHTML='';si.value='';});
if(si)si.addEventListener('input',()=>{
    const q=si.value.toLowerCase().trim();
    if(!q){sr.innerHTML='';return;}
    const matches=recipes.filter(r=>r.name.toLowerCase().includes(q)||r.country.toLowerCase().includes(q)||r.desc.toLowerCase().includes(q)).slice(0,5);
    sr.innerHTML=matches.map(r=>`<a href="recipes/${r.id}.html" class="search-result-item"><img src="${r.image}" alt="${r.name}"><div><div class="search-result-name">${r.emoji} ${r.name}</div><div class="search-result-country">${r.country} · ${r.difficulty}</div></div></a>`).join('');
});

// Scroll reveal
const revealEls=document.querySelectorAll('.reveal');
const ro=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting)e.target.classList.add('active');}),{threshold:.15});
revealEls.forEach(el=>ro.observe(el));

// Counter animation
const counters=document.querySelectorAll('.stat-num[data-target]');
const co=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting&&!e.target.dataset.counted){e.target.dataset.counted='true';const t=+e.target.dataset.target;const s=performance.now();const a=n=>{const p=Math.min((n-s)/2000,1);e.target.textContent=Math.floor((1-Math.pow(1-p,3))*t);if(p<1)requestAnimationFrame(a);else e.target.textContent=t;};requestAnimationFrame(a);}}),{threshold:.5});
counters.forEach(el=>co.observe(el));

// Render popular section (top 6)
const ps=document.getElementById('popularScroll');
if(ps&&typeof recipes!=='undefined'){
    const popular=recipes.slice(0,8);
    ps.innerHTML=popular.map(r=>`<a href="recipes/${r.id}.html" class="popular-card"><img src="${r.image}" alt="${r.name}"><div class="popular-card-body"><div class="popular-card-emoji">${r.emoji}</div><h3>${r.name}</h3><p>${r.desc}</p><div class="popular-card-meta"><span>⏱ ${r.time}</span><span>👨‍🍳 ${r.difficulty}</span><span>📍 ${r.country}</span></div></div></a>`).join('');
}

// Render recipe grid
const rg=document.getElementById('recipeGrid');
let displayCount=24;
function renderGrid(filter='all'){
    if(!rg||typeof recipes==='undefined')return;
    const filtered=filter==='all'?recipes:recipes.filter(r=>r.region===filter);
    const toShow=filtered.slice(0,displayCount);
    rg.innerHTML=toShow.map(r=>`<a href="recipes/${r.id}.html" class="recipe-card" data-region="${r.region}"><img src="${r.image}" alt="${r.name}"><div class="recipe-card-body"><div class="recipe-card-emoji">${r.emoji}</div><h3>${r.name}</h3><p>${r.desc}</p><div class="recipe-card-meta"><span>⏱ ${r.time}</span><span>👨‍🍳 ${r.difficulty}</span><span>📍 ${r.country}</span></div></div></a>`).join('');
    const btn=document.getElementById('loadMoreBtn');
    if(btn)btn.style.display=displayCount>=filtered.length?'none':'inline-flex';
}
if(rg)renderGrid();

function filterRecipes(region){
    displayCount=24;
    document.querySelectorAll('.filter-btn').forEach(b=>b.classList.toggle('active',b.dataset.filter===region));
    renderGrid(region);
}

function loadMore(){
    displayCount+=24;
    const active=document.querySelector('.filter-btn.active');
    renderGrid(active?active.dataset.filter:'all');
}

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(a=>a.addEventListener('click',function(e){e.preventDefault();const t=document.querySelector(this.getAttribute('href'));if(t)window.scrollTo({top:t.offsetTop-80,behavior:'smooth'});}));
