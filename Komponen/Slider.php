<body>
  <div class="wrap">
    <h1>Promo Top Up</h1>
    <p class="lead">Slider kartu promosi untuk website top up game — tema gelap, responsive, autoplay, dan navigasi keyboard.</p>

    <div class="slider" id="slider">
      <div class="controls" aria-hidden="false">
        <button class="control" id="prev" title="Prev" aria-label="Previous slide">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M15 18l-6-6 6-6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <button class="control" id="next" title="Next" aria-label="Next slide">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
      </div>

      <div class="track" id="track" role="list">
        <!-- Card 1 -->
        <article class="card" role="listitem">
          <div class="thumb">
            <span class="badge">Hot</span>
            <img data-src="https://images.unsplash.com/photo-1605902711622-cfb43c44367e?q=80&w=1400&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" alt="Game 1" loading="lazy" />
          </div>
          <div class="card-body">
            <div>
              <div class="title">Diamond Bundle — Valorant</div>
              <div class="meta">Top-up resmi | Proses instan</div>
            </div>
            <div class="row">
              <div class="price">Rp 45.000 <small>/ paket</small></div>
              <div style="display:flex;gap:8px">
                <button class="btn">Beli</button>
                <button class="btn ghost">Detail</button>
              </div>
            </div>
          </div>
        </article>

        <!-- Card 2 -->
        <article class="card" role="listitem">
          <div class="thumb">
            <span class="badge">Baru</span>
            <img data-src="https://images.unsplash.com/photo-1604382354936-5e3650b0ea8a?q=80&w=1400&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" alt="Game 2" loading="lazy" />
          </div>
          <div class="card-body">
            <div>
              <div class="title">UC — Free Fire</div>
              <div class="meta">Diskon khusus member</div>
            </div>
            <div class="row">
              <div class="price">Rp 22.500 <small>/ 100 UC</small></div>
              <div style="display:flex;gap:8px">
                <button class="btn">Beli</button>
                <button class="btn ghost">Detail</button>
              </div>
            </div>
          </div>
        </article>

        <!-- Card 3 -->
        <article class="card" role="listitem">
          <div class="thumb">
            <span class="badge">Limited</span>
            <img data-src="https://images.unsplash.com/photo-1558980664-10f16d7f9b8b?q=80&w=1400&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" alt="Game 3" loading="lazy" />
          </div>
          <div class="card-body">
            <div>
              <div class="title">V-Bucks — Fortnite</div>
              <div class="meta">Pembayaran cepat | Aman</div>
            </div>
            <div class="row">
              <div class="price">Rp 120.000 <small>/ 1000 V-Bucks</small></div>
              <div style="display:flex;gap:8px">
                <button class="btn">Beli</button>
                <button class="btn ghost">Detail</button>
              </div>
            </div>
          </div>
        </article>

        <!-- Duplicate slides to create loop illusion -->
        <article class="card" role="listitem">
          <div class="thumb">
            <span class="badge">Hot</span>
            <img data-src="https://images.unsplash.com/photo-1605902711622-cfb43c44367e?q=80&w=1400&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" alt="Game 1 duplicate" loading="lazy" />
          </div>
          <div class="card-body">
            <div>
              <div class="title">Diamond Bundle — Valorant</div>
              <div class="meta">Top-up resmi | Proses instan</div>
            </div>
            <div class="row">
              <div class="price">Rp 45.000 <small>/ paket</small></div>
              <div style="display:flex;gap:8px">
                <button class="btn">Beli</button>
                <button class="btn ghost">Detail</button>
              </div>
            </div>
          </div>
        </article>

      </div>

      <div class="dots" id="dots" aria-hidden="false"></div>
    </div>
  </div>

  <script>
    // Simple slider logic (no dependencies)
    (function(){
      const track = document.getElementById('track');
      const slider = document.getElementById('slider');
      const prev = document.getElementById('prev');
      const next = document.getElementById('next');
      const dotsWrap = document.getElementById('dots');
      const cards = Array.from(track.children);

      // lazy-load images
      function lazyLoad(){
        cards.forEach(c=>{
          const img = c.querySelector('img');
          if(img && img.dataset.src && !img.src){
            img.src = img.dataset.src;
          }
        });
      }
      lazyLoad();

      let perView = calculatePerView();
      let index = 0; // active slide (first card index)
      let autoplay = true;
      let autoplayInterval = 3500;
      let timer = null;

      function calculatePerView(){
        const w = window.innerWidth;
        if(w >= 1200) return 3;
        if(w >= 900) return 2;
        return 1;
      }

      function update(){
        perView = calculatePerView();
        // clamp index so there's always perView items visible
        if(index < 0) index = cards.length - perView;
        if(index > cards.length - perView) index = 0;
        const cardWidth = cards[0].getBoundingClientRect().width + parseInt(getComputedStyle(track).gap || 18);
        const offset = -(cardWidth * index);
        track.style.transform = `translateX(${offset}px)`;
        renderDots();
      }

      function renderDots(){
        const pages = Math.max(1, Math.ceil((cards.length - (perView-1))));
        dotsWrap.innerHTML = '';
        for(let i=0;i<pages;i++){
          const d = document.createElement('button');
          d.className = 'dot';
          d.setAttribute('aria-label', 'Goto slide '+(i+1));
          if(i===index) d.classList.add('active');
          d.addEventListener('click',()=>{ index = i; update(); resetTimer(); });
          dotsWrap.appendChild(d);
        }
      }

      function nextSlide(){ index++; update(); }
      function prevSlide(){ index--; update(); }

      prev.addEventListener('click', ()=>{ prevSlide(); resetTimer(); });
      next.addEventListener('click', ()=>{ nextSlide(); resetTimer(); });

      // autoplay
      function startTimer(){ if(!autoplay) return; timer = setInterval(()=>{ nextSlide(); }, autoplayInterval); }
      function stopTimer(){ if(timer) clearInterval(timer); timer = null; }
      function resetTimer(){ stopTimer(); startTimer(); }

      slider.addEventListener('mouseover', ()=>{ stopTimer(); });
      slider.addEventListener('focusin', ()=>{ stopTimer(); });
      slider.addEventListener('mouseleave', ()=>{ startTimer(); });

      // touch support
      let startX=null, currentTranslate=0;
      track.addEventListener('touchstart', (e)=>{ startX = e.touches[0].clientX; stopTimer(); }, {passive:true});
      track.addEventListener('touchmove', (e)=>{
        if(startX===null) return;
        const dx = e.touches[0].clientX - startX;
        track.style.transform = `translateX(${currentTranslate + dx}px)`;
      }, {passive:true});
      track.addEventListener('touchend', (e)=>{
        if(startX===null) return;
        const endX = e.changedTouches[0].clientX;
        const diff = endX - startX;
        if(Math.abs(diff) > 40){ if(diff < 0) nextSlide(); else prevSlide(); }
        startX = null; currentTranslate = parseFloat(track.style.transform.replace('translateX(','').replace('px)','')) || 0;
        resetTimer();
      });

      // keyboard
      document.addEventListener('keydown', (e)=>{
        if(e.key === 'ArrowRight') { nextSlide(); resetTimer(); }
        if(e.key === 'ArrowLeft') { prevSlide(); resetTimer(); }
      });

      // resize
      let resizeTimeout;
      window.addEventListener('resize', ()=>{ clearTimeout(resizeTimeout); resizeTimeout = setTimeout(()=>{ update(); },120); });

      // init
      update(); startTimer();

      // expose for debugging (optional)
      window._promoSlider = {next:nextSlide, prev:prevSlide, goTo:i=>{index=i;update();}};
    })();
  </script>
</body>

