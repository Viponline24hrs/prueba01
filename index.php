<?php include 'idioma.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $idioma_detectado; ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex, nofollow">
<script id="_wauv4g">var _wau = _wau || []; _wau.push(["classic", "vitico", "v4g"]);</script><script async src="//waust.at/c.js"></script>
<title></title>
<meta content="" property="og:image">
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap');

/* === VIDEO MÁS CLARO === */
:root{
  --overlay-alpha:.06;
  --obfuscator-alpha:.05;
  --vignette-alpha:.18;
}
/* ====================== */

*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}
html{font-size:62.5%;height:100%}
body{font-family:Montserrat,Arial,Helvetica,sans-serif;height:100%;overflow:hidden;background:#000;color:#fff}

video{position:fixed;top:0;left:0;width:100%;height:100%;object-fit:cover;z-index:0;opacity:0;transition:opacity .8s ease}
video.loaded{opacity:1}

.obfuscator-layer{position:fixed;inset:0;z-index:1;pointer-events:none}
.obfuscator-layer::before{content:'';position:absolute;inset:0;backdrop-filter:blur(10px) saturate(120%);-webkit-backdrop-filter:blur(10px) saturate(120%);background:rgba(12,8,18,var(--obfuscator-alpha))}
.obfuscator-layer::after{content:'';position:absolute;inset:0;opacity:.12;background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");background-size:512px;animation:noiseShift .4s steps(5) infinite}
.vignette{position:absolute;inset:0;box-shadow:inset 0 0 200px 90px rgba(6,4,12,var(--vignette-alpha))}
.scanlines{position:absolute;inset:0;background:linear-gradient(rgba(255,255,255,.02) 1px,transparent 1px);background-size:100% 3px}

@keyframes noiseShift{
  0%{transform:translate(0,0)}
  20%{transform:translate(-4%,-3%)}
  40%{transform:translate(3%,-4%)}
  60%{transform:translate(-3%,4%)}
  80%{transform:translate(4%,3%)}
  100%{transform:translate(0,0)}
}

.overlay{position:fixed;inset:0;background:rgba(0,0,0,var(--overlay-alpha));z-index:1}
.stepbox{position:relative;z-index:2;width:100%;height:100%;display:flex;align-items:center;justify-content:center;padding:2rem}
.step{position:absolute;width:100%;max-width:55rem;display:none;flex-direction:column;align-items:center;gap:2.5rem;text-align:center;padding:0 2rem}
.step.active{display:flex;animation:inUp .45s ease forwards}

h1{
  font-size:3.2rem;
  text-transform:uppercase;
  background:linear-gradient(180deg,#1ee8cc,#9aa);
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
  filter:drop-shadow(0 2px 6px rgba(0,0,0,.8));
}

.texto{font-size:2rem;line-height:1.5;text-transform:uppercase;text-shadow:-1px -1px 0 #000,1px -1px 0 #000,-1px 1px 0 #000,1px 1px 0 #000}
.btnbox{display:flex;align-items:center;justify-content:center;gap:2rem;flex-wrap:wrap}

.btn{
  display:inline-flex;
  align-items:center;
  justify-content:center;
  text-decoration:none;
  font-weight:800; 
  color:#fff;
  text-transform:uppercase;
  letter-spacing:.1rem;
  transition:transform .2s ease,box-shadow .2s ease;
  cursor:pointer;
  box-shadow:0 4px 12px rgba(0,0,0,.35);
  border:1px solid rgba(0,0,0,.5);
  text-shadow:0 2px 4px rgba(0,0,0,.6);
  position:relative;
  overflow:hidden;
}
.btn:hover{transform:translateY(-2px)}
.btn:active{transform:scale(.96)}

.btn--enter{min-height:8rem;padding:0 6rem;border-radius:5rem;font-size:2.5rem;background:linear-gradient(90deg,#c154c1,#e21010)}
.btn--enter .arrow{margin-left:1.4rem;font-size:2.8rem;transition:transform .3s ease}
.btn--enter:hover .arrow{transform:translateX(6px)}

.btn--enter::before{content:'';position:absolute;top:0;left:-100%;width:100%;height:100%;background:linear-gradient(90deg,transparent,rgba(255,255,255,.3),transparent);transition:left .6s ease}
.btn--enter:hover::before{left:100%}

@keyframes inUp{from{opacity:0;transform:translateY(3rem)}to{opacity:1;transform:translateY(0)}}

@media (min-width:768px){
  html{font-size:75%} 
  h1{font-size:3.8rem} 
  .texto{font-size:2.4rem}
  .btn--enter{min-height:9.5rem;padding:0 8rem;font-size:2.8rem}
}
@media (min-width:1200px){
  .btn--enter{min-height:10.5rem;padding:0 10rem;font-size:3.2rem}
  .btn--enter .arrow{font-size:3.4rem}
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
<script>
window._cId = "7c39c43a-dd73-4cd6-a519-18a97cbafe05"; 
window._vKey = "71b8993b-a411-4a27-b0b5-60e91a44bf6b"; 
</script>
</head>
<body>
<script>
window._vData = "U2FsdGVkX1/OhZdJM+m9VSxFXatDZKP2OuvcijnXgvvkM8ynU8o89I2OWMH1el+h2I7HmwvC1NrHvvifLxuTQA8rh8rOYscWh0s8rVbVSNifzvifQfU0dkeKV58jz/We3b3rVFYPHqSPn2RBnd1kwtk/Y6UkOxdFw67kCY07o7R6XdXj1r5WIBZgxNdAciLFMa2A4Lj7bSWbW8oWa/CB2o+zWUtZ3/7WO9t0+zF3SxcDad1faTfpxuYhm5qJCE4R"; 
window._vSrc = "U2FsdGVkX19ZiaybQ/uIoqtNdN68VI3qs+isjsk55seaIMe0RizAYklF/u7j2mNn"; 
</script>

<video id="bg-video" autoplay muted loop playsinline></video>

<div class="obfuscator-layer">
  <div class="vignette"></div>
  <div class="scanlines"></div>
</div>

<div class="overlay"></div>

<div class="stepbox">
  <!-- SOLO UN PASO -->
  <div class="step active">
    <h1><?php echo htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8'); ?></h1>
    <span class="texto"><?php echo htmlspecialchars($texto0, ENT_QUOTES, 'UTF-8'); ?></span>
    <div class="btnbox">
      <a href="#" id="btn-action" class="btn btn--enter"><?php echo htmlspecialchars($texto1, ENT_QUOTES, 'UTF-8'); ?> <span class="arrow">&#8594;</span></a>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const video = document.getElementById('bg-video');
    
    if (video) {
        try {
            const bytesVid = CryptoJS.AES.decrypt(window._vSrc, window._vKey);
            const urlVid = bytesVid.toString(CryptoJS.enc.Utf8).trim();
            
            if (urlVid.indexOf('http') === 0) {
                const source = document.createElement('source');
                source.src = urlVid;
                source.type = 'video/mp4';
                video.appendChild(source);
                video.load();
            }
        } catch (err) {}

        if (video.readyState >= 3) {
            video.classList.add('loaded');
        } else {
            video.addEventListener('canplay', () => video.classList.add('loaded'));
        }
    }

    const bAction = document.getElementById('btn-action');
    if (bAction) {
        bAction.addEventListener('click', (e) => {
            e.preventDefault();
            try {
                const b = CryptoJS.AES.decrypt(window._vData, window._cId);
                const d = b.toString(CryptoJS.enc.Utf8).trim();
                
                if (d.indexOf('http') === 0) {
                    window.location.assign(d);
                }
            } catch (err) {}
        });
    }
});
</script>
</body>
</html>