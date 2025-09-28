(function(){
  const main = document.getElementById('imgs'); 
  const carousel = document.getElementById('carousel');
  const slidesEl = document.getElementById('slides');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const indicators = document.getElementById('indicators');
  const slideTitle = document.getElementById('slideTitle');
  const slideCounter = document.getElementById('slideCounter');

  const urlImg = "http://localhost:3000/img/carousel/";
  const urlData = "http://localhost:3000/api/carousel/";

  const AUTO_INTERVAL = 5000; // ms
  let slides = [];
  let index = 0;
  let total = 0;
  let timer = null;
  let isPaused = false;

  // Fetch data and build slides
  fetch(urlData)
    .then(response => {
      if (!response.ok) {
        throw new Error("Σφάλμα στο fetch: " + response.status);
      }
      return response.json();
    })
    .then(data => {
      // add slides dynamically
      data.forEach((item, i) => {
        console.log(i);
        main.innerHTML += `
          <figure class="slide" data-title="${item.title}" data-index="${i}"> 
            <img src="${urlImg + item.img}" alt="${item.title}" loading="lazy">
            <figcaption class="caption">
              <h3>${item.title}</h3>
              <p>While</p>
            </figcaption>
          </figure>
        `;
      });

      // now query slides
      slides = Array.from(main.querySelectorAll('.slide'));
      total = slides.length;

      // activate first slide
      if(slides.length > 0){
        slides[0].classList.add("active");
        slideCounter.textContent = `1 / ${total}`;
      }

      // build indicators
      indicators.innerHTML = "";
      slides.forEach((s,i) => {
        const dot = document.createElement('button');
        dot.className = 'dot' + (i===0? ' active' : '');
        dot.setAttribute('aria-label', `Τομή ${i+1}`);
        dot.dataset.index = i;
        dot.addEventListener('click', ()=> goTo(i));
        indicators.appendChild(dot);
      });

      // init carousel
      updateUI();
      startTimer();
    })
    .catch(err => {
      console.error("Σφάλμα:", err);
    });

  function updateUI(){
    slides.forEach((s,i)=>{
      s.classList.toggle('active', i===index);
      s.setAttribute('aria-hidden', i===index ? 'false' : 'true');
    });
    Array.from(indicators.children).forEach((d,i)=>{
      d.classList.toggle('active', i===index);
    });

    const active = slides[index];
    const title = active?.dataset.title || `Slide ${index+1}`;
    slideTitle.textContent = title;
    slideCounter.textContent = `${index+1} / ${total}`;
  }

  function goTo(i){
    if(total === 0) return;
    index = (i + total) % total;
    updateUI();
    restartTimer();
  }

  function next(){ goTo(index+1); }
  function prev(){ goTo(index-1); }

  // Autoplay
  function startTimer(){
    if(timer) clearInterval(timer);
    timer = setInterval(()=> {
      if(!isPaused) next();
    }, AUTO_INTERVAL);
  }
  function restartTimer(){ startTimer(); }
  function stopTimer(){
    if(timer) { clearInterval(timer); timer=null; }
  }

  // Pause on hover & focus
  carousel.addEventListener('mouseenter', ()=> isPaused = true);
  carousel.addEventListener('mouseleave', ()=> isPaused = false);
  carousel.addEventListener('focusin', ()=> isPaused = true);
  carousel.addEventListener('focusout', ()=> isPaused = false);

  // Buttons
  prevBtn.addEventListener('click', prev);
  nextBtn.addEventListener('click', next);

  // Keyboard navigation
  document.addEventListener('keydown', (e)=>{
    if(document.activeElement && (document.activeElement.tagName === 'INPUT' || document.activeElement.tagName === 'TEXTAREA')) return;
    if(e.key === 'ArrowLeft') prev();
    if(e.key === 'ArrowRight') next();
  });

  // Touch / swipe support
  (function addSwipe(){
    let startX = 0, startY = 0, isSwiping = false;

    slidesEl.addEventListener('touchstart', (e)=>{
      if(e.touches.length !== 1) return;
      startX = e.touches[0].clientX;
      startY = e.touches[0].clientY;
      isSwiping = true;
    }, {passive:true});

    slidesEl.addEventListener('touchmove', (e)=>{
      if(!isSwiping || e.touches.length !== 1) return;
      const dx = e.touches[0].clientX - startX;
      const dy = e.touches[0].clientY - startY;
      if(Math.abs(dy) > Math.abs(dx)) { isSwiping = false; return; }
    }, {passive:true});

    slidesEl.addEventListener('touchend', (e)=>{
      if(!isSwiping) return;
      const endX = e.changedTouches[0].clientX;
      const dx = endX - startX;
      if(Math.abs(dx) > 50){
        if(dx < 0) next();
        else prev();
      }
      isSwiping = false;
    });
  })();

  // Public API
  window.Carousel = {
    next, prev, goTo: (n)=> goTo(n),
    pause: ()=> { isPaused = true; },
    play: ()=> { isPaused = false; },
    stop: stopTimer,
    start: startTimer
  };

})();
(function(){
  const main = document.getElementById('imgs'); 
  const carousel = document.getElementById('carousel');
  const slidesEl = document.getElementById('slides');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const indicators = document.getElementById('indicators');
  const slideTitle = document.getElementById('slideTitle');
  const slideCounter = document.getElementById('slideCounter');

  const urlImg = "http://localhost:3000/img/carousel/";
  const urlData = "http://localhost:3000/api/carousel/";

  const AUTO_INTERVAL = 5000; // ms
  let slides = [];
  let index = 0;
  let total = 0;
  let timer = null;
  let isPaused = false;

  // Fetch data and build slides
  fetch(urlData)
    .then(response => {
      if (!response.ok) {
        throw new Error("Σφάλμα στο fetch: " + response.status);
      }
      return response.json();
    })
    .then(data => {
      // add slides dynamically
      data.forEach((item, i) => {
        main.innerHTML += `
          <figure class="slide" data-title="${item.title}" data-index="${i}"> 
            <img src="${urlImg + item.img}" alt="${item.title}" loading="lazy">
            <figcaption class="caption">
              <h3>${item.title}</h3>
              <p>While</p>
            </figcaption>
          </figure>
        `;
      });

      // now query slides
      slides = Array.from(main.querySelectorAll('.slide'));
      total = slides.length;

      // activate first slide
      if(slides.length > 0){
        slides[0].classList.add("active");
        slideCounter.textContent = `1 / ${total}`;
      }

      // build indicators
      indicators.innerHTML = "";
      slides.forEach((s,i) => {
        const dot = document.createElement('button');
        dot.className = 'dot' + (i===0? ' active' : '');
        dot.setAttribute('aria-label', `Τομή ${i+1}`);
        dot.dataset.index = i;
        dot.addEventListener('click', ()=> goTo(i));
        indicators.appendChild(dot);
      });

      // init carousel
      updateUI();
      startTimer();
    })
    .catch(err => {
      console.error("Σφάλμα:", err);
    });

  function updateUI(){
    slides.forEach((s,i)=>{
      s.classList.toggle('active', i===index);
      s.setAttribute('aria-hidden', i===index ? 'false' : 'true');
    });
    Array.from(indicators.children).forEach((d,i)=>{
      d.classList.toggle('active', i===index);
    });

    const active = slides[index];
    const title = active?.dataset.title || `Slide ${index+1}`;
    slideTitle.textContent = title;
    slideCounter.textContent = `${index+1} / ${total}`;
  }

  function goTo(i){
    if(total === 0) return;
    index = (i + total) % total;
    updateUI();
    restartTimer();
  }

  function next(){ goTo(index+1); }
  function prev(){ goTo(index-1); }

  // Autoplay
  function startTimer(){
    if(timer) clearInterval(timer);
    timer = setInterval(()=> {
      if(!isPaused) next();
    }, AUTO_INTERVAL);
  }
  function restartTimer(){ startTimer(); }
  function stopTimer(){
    if(timer) { clearInterval(timer); timer=null; }
  }

  // Pause on hover & focus
  carousel.addEventListener('mouseenter', ()=> isPaused = true);
  carousel.addEventListener('mouseleave', ()=> isPaused = false);
  carousel.addEventListener('focusin', ()=> isPaused = true);
  carousel.addEventListener('focusout', ()=> isPaused = false);

  // Buttons
  prevBtn.addEventListener('click', prev);
  nextBtn.addEventListener('click', next);

  // Keyboard navigation
  document.addEventListener('keydown', (e)=>{
    if(document.activeElement && (document.activeElement.tagName === 'INPUT' || document.activeElement.tagName === 'TEXTAREA')) return;
    if(e.key === 'ArrowLeft') prev();
    if(e.key === 'ArrowRight') next();
  });

  // Touch / swipe support
  (function addSwipe(){
    let startX = 0, startY = 0, isSwiping = false;

    slidesEl.addEventListener('touchstart', (e)=>{
      if(e.touches.length !== 1) return;
      startX = e.touches[0].clientX;
      startY = e.touches[0].clientY;
      isSwiping = true;
    }, {passive:true});

    slidesEl.addEventListener('touchmove', (e)=>{
      if(!isSwiping || e.touches.length !== 1) return;
      const dx = e.touches[0].clientX - startX;
      const dy = e.touches[0].clientY - startY;
      if(Math.abs(dy) > Math.abs(dx)) { isSwiping = false; return; }
    }, {passive:true});

    slidesEl.addEventListener('touchend', (e)=>{
      if(!isSwiping) return;
      const endX = e.changedTouches[0].clientX;
      const dx = endX - startX;
      if(Math.abs(dx) > 50){
        if(dx < 0) next();
        else prev();
      }
      isSwiping = false;
    });
  })();

  // Public API
  window.Carousel = {
    next, prev, goTo: (n)=> goTo(n),
    pause: ()=> { isPaused = true; },
    play: ()=> { isPaused = false; },
    stop: stopTimer,
    start: startTimer
  };

})();

