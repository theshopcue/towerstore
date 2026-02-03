<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TowerStore – Girls Fashion Boutique</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box}
body{
  font-family:'Poppins',sans-serif;
  background:#fff5f8;
  color:#333;
}

/* COLORS */
:root{
  --pink:#ff4d88;
  --dark:#222;
  --light:#fff;
}

/* HEADER */
header{
  position:fixed;
  top:0;
  width:100%;
  background:white;
  padding:25px 10px;
  text-align:center;
  box-shadow:0 4px 12px rgba(0,0,0,0.08);
  z-index:1000;
}
header h1{
  font-family:'Playfair Display',serif;
  color:var(--pink);
  font-size:32px;
}
nav{margin-top:10px}
nav a{
  color:var(--dark);
  margin:0 15px;
  text-decoration:none;
  font-weight:500;
  cursor:pointer;
}
nav a:hover{color:var(--pink)}

/* LAYOUT */
.container{
  max-width:1200px;
  margin:auto;
  padding:170px 20px 60px;
}
section{margin-bottom:100px}
h2{
  font-family:'Playfair Display',serif;
  color:var(--pink);
  margin-bottom:20px;
  text-align:center;
}

/* HERO */
.hero{
  background:url('https://images.unsplash.com/photo-1520975928316-1d7f6f50d1a8?auto=format&fit=crop&w=1500&q=80') center/cover;
  padding:150px 20px;
  border-radius:12px;
  text-align:center;
  color:white;
}
.hero h2{font-size:44px}
.hero p{max-width:700px;margin:20px auto;font-size:18px}
.btn{
  background:var(--pink);
  color:white;
  padding:12px 28px;
  border:none;
  border-radius:25px;
  cursor:pointer;
  font-weight:bold;
}
.btn:hover{background:#e6005c}

/* PRODUCT GRID */
.grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
  gap:25px;
}
.card{
  background:white;
  border-radius:12px;
  box-shadow:0 6px 15px rgba(0,0,0,0.08);
  overflow:hidden;
  transition:.3s;
}
.card:hover{transform:translateY(-8px)}
.card img{width:100%;height:260px;object-fit:cover}
.card-content{padding:15px;text-align:center}
.price{color:var(--pink);font-weight:bold;margin:10px 0}

/* ABOUT */
.box{
  background:white;
  padding:40px;
  border-radius:12px;
  line-height:1.8;
  box-shadow:0 6px 15px rgba(0,0,0,0.08);
}

/* FOOTER */
footer{
  background:var(--dark);
  color:white;
  padding:60px 20px;
}
.footer-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:40px;
}
footer h3{margin-bottom:15px;color:var(--pink)}
footer a{color:#ddd;text-decoration:none;display:block;margin-bottom:8px}
footer a:hover{color:var(--pink)}
</style>

<script>
function go(id){document.getElementById(id).scrollIntoView({behavior:'smooth'})}
</script>
</head>
<body>

<header>
  <h1>TowerStore</h1>
  <nav>
    <a onclick="go('home')">Home</a>
    <a onclick="go('collection')">Collection</a>
    <a onclick="go('about')">About</a>
    <a onclick="go('contact')">Contact</a>
  </nav>
</header>

<div class="container">

<section id="home" class="hero">
  <h2>Style That Shines</h2>
  <p>Discover the latest trends in girls fashion — from casual chic to elegant party outfits, TowerStore brings confidence and charm to every wardrobe.</p>
  <button class="btn" onclick="go('collection')">Shop Collection</button>
</section>

<section id="collection">
  <h2>Trending Styles</h2>
  <div class="grid">
    <div class="card">
      <img src="https://images.unsplash.com/photo-1503342217505-b0a15cf70489?auto=format&fit=crop&w=800&q=80">
      <div class="card-content"><h3>Floral Summer Dress</h3><div class="price">$49</div></div>
    </div>
    <div class="card">
      <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38?auto=format&fit=crop&w=800&q=80">
      <div class="card-content"><h3>Casual Pink Hoodie</h3><div class="price">$39</div></div>
    </div>
    <div class="card">
      <img src="https://images.unsplash.com/photo-1495121605193-b116b5b09a96?auto=format&fit=crop&w=800&q=80">
      <div class="card-content"><h3>Denim Skirt</h3><div class="price">$35</div></div>
    </div>
    <div class="card">
      <img src="https://images.unsplash.com/photo-1520975902394-4c8d1f1a9e4a?auto=format&fit=crop&w=800&q=80">
      <div class="card-content"><h3>Elegant Party Gown</h3><div class="price">$89</div></div>
    </div>
  </div>
</section>

<section id="about">
  <h2>About TowerStore</h2>
  <div class="box">
    TowerStore is a fashion destination created especially for girls who love to express themselves through style. Our collections are designed to blend comfort, elegance, and trend-forward fashion. From everyday outfits to statement pieces, we ensure each design captures confidence and individuality. Our fashion experts carefully curate each collection to match seasonal trends and timeless elegance.
  </div>
</section>

<section id="contact">
  <h2>Contact Us</h2>
  <div class="box">
    Email: support@towerstore.com<br>
    Phone: +1 800 555 7788<br>
    Address: Fashion Avenue, Style City
  </div>
</section>

</div>

<footer>
  <div class="footer-grid">
    <div>
      <h3>TowerStore</h3>
      <p>Your go-to boutique for trendy and elegant girls fashion.</p>
    </div>
    <div>
      <h3>Quick Links</h3>
      <a href="#">Home</a>
      <a href="#">Collection</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
    </div>
  </div>
  <p style="text-align:center;margin-top:40px;">© <?php echo date("Y"); ?> TowerStore. All rights reserved.</p>
</footer>

</body>
</html>
