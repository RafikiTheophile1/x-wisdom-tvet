<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>X-Wisdom TVET</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>
  <style>
* {
  scroll-behavior: smooth;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', sans-serif;
  background-color: #0b2238;
  color: #f8f9fa;
  margin: 0;
  padding: 0;
  line-height: 1.6;
}

/* Navbar */
.navbar {
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}
.nav-link,
.navbar-brand {
  font-weight: 500;
}
.nav-link button {
  background: tomato;
  color: white;
  font-weight: bold;
  border: none;
  border-radius: 20px;
  padding: 0.5rem 1rem;
  transition: background 0.3s;
}
.nav-link button:hover {
  background: #ff6347cc;
}

/* Header */
header {
  background-color: #111;
  padding: 3rem 0 1.5rem;
  text-align: center;
}
header h1 {
  font-size: 3rem;
  margin-bottom: 0.5rem;
}
header p {
  color: #ccc;
  font-size: 1.25rem;
}

/* Hero */
.hero {
  background: url('/images/X-wisdomtvet2.png') center/cover no-repeat;
  height: 400px;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}
.hero::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.5);
}
.hero h2 {
  position: relative;
  color: white;
  font-size: 2.5rem;
  margin-top: -10rem;
  padding: 1rem 2rem;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 10px;
}

/* Sections */
.section-title {
  font-size: 2rem;
  margin-bottom: 1.5rem;
  border-bottom: 3px solid #0d6efd;
  display: inline-block;
  padding-bottom: 0.5rem;
}

/* Image overlay */
.image-overlay-container {
  position: relative;
  overflow: hidden;
  border-radius: 12px;
}
.image-overlay-container img {
  width: 100%;
  height: 260px;
  object-fit: cover;
  display: block;
}
.overlay-text {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.6);
  color: #fff;
  padding: 1rem;
  font-size: 1rem;
  text-align: center;
  font-weight: 500;
}

/* Cards (Teachers) */
.card {
  border: none;
  background-color: #f8f9fa;
}
.card-body {
  color: #333;
}
.card-title {
  font-weight: bold;
  font-size: 1.25rem;
}
.card-img-top {
  height: 220px;
  object-fit: cover;
  border-radius: 10px 10px 0 0;
}

/* Footer */
footer {
  background-color: #111;
  color: white;
  padding: 2rem 0;
  margin-top: 4rem;
  
}
footer form label {
  font-weight: bold;
}
footer input,
footer textarea {
  background-color: #e9ecef;
  border: 1px solid #ccc;
}
footer input:focus,
footer textarea:focus {
  border-color: #0d6efd;
  box-shadow: none;
}

/* Responsive Enhancements */
@media (max-width: 768px) {
  header h1 {
    font-size: 2rem;
  }
  .hero {
    height: 200px;
  }
  .hero h2 {
    font-size: 1.5rem;
    padding: 0.8rem 1.2rem;
  }
  .overlay-text {
    font-size: 0.95rem;
  }
  .nav-link button {
    margin: 0.5rem 0;
    width: 100%;
  }
  .image-overlay-container img {
    height: 200px;
  }
  .card-img-top {
    height: 180px;
  }
}

@media (max-width: 576px) {
  .section-title {
    font-size: 1.5rem;
  }
  .hero {
    height: 180px;
  }
  .hero h2 {
    font-size: 1.2rem;
  }
  .overlay-text {
    font-size: 0.9rem;
    padding: 0.5rem;
  }
  .image-overlay-container img {
    height: 180px;
  }
  .card-img-top {
    height: 160px;
  }
}
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#home" style=" font-size:1.2REM;COLOR:rgb(255, 103, 2);">X-W</span> <span style=" font-size:; color:rgb(139, 58, 3);">isdom TVET</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#programs">Programs</a></li>
          <li class="nav-item"><a class="nav-link" href="#departments">Departments</a></li>
          <li class="nav-item"><a class="nav-link" href="#news">News & Events</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#teachers">Teachers</a></li>
          <li class="nav-item"><a class="nav-link" href="#students">Students</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="{{Route('login')}}"><button>Login</button></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="text-center">
    <div class="container">
      <h1>X-Wisdom TVET</h1>
      <p>Empowering Youth Through Technical Skills</p>
    </div>
  </header>

  <section id="home" class="hero">
    <h2>Welcome to X-Wisdom TVET</h2>
  </section>

  <div class="container mt-5">
   
    <section id="programs" class="text-center mb-5">
      <h2 class="section-title" style="color: #fff;">Courses / Programs</h2>
      <div class="image-overlay-container">
        <img src="/images/X-wisdomtvet2.png" class="img-fluid" alt="Programs at X-Wisdom" />
        <div class="overlay-text">Explore Our Courses
          <ul class="text-start mx-auto" style="max-width: 600px;">
            <li><strong>ICT:</strong> 2 years - Computer Applications, Networking, Web Development</li>
            <li><strong>Construction:</strong> 2 years - Masonry, Plumbing, Site Supervision</li>
            <li><strong>Culinary Arts:</strong> 1.5 years - Food Preparation, Baking, Hotel Services</li>
          </ul>
        </div>
      </div>
    </section>

    <section id="departments" class="text-center mb-5">
      <h2 class="section-title" style="color: #fff;">Departments</h2>
      <div class="image-overlay-container">
        <img src="/images/X-wisdomtvet.png" class="img-fluid" alt="Departments" />
        <div class="overlay-text">Our Academic Divisions
          <ul class="list-unstyled">
            <li><a href="#" class="text-decoration-none text-primary">ICT Department</a></li>
            <li><a href="#" class="text-decoration-none text-primary">Construction Department</a></li>
            <li><a href="#" class="text-decoration-none text-primary">Culinary Arts Department</a></li>
          </ul>
        </div>
      </div>
    </section>

    <section id="news" class="text-center mb-5">
      <h2 class="section-title" style="color: #fff;">News & Events</h2>
      <div class="image-overlay-container">
        <img src="/images/coking styles (1).jfif" class="img-fluid" alt="Events" style="max-height: 300px; object-fit: cover; width: 100%;" />
        <div class="overlay-text">Stay Updated
          <ul class="text-start mx-auto" style="max-width: 600px;">
            <li><strong>June 10:</strong> Cooking Compatition</li>
            <li><strong>July 5:</strong> Independence Day Holiday</li>
            <li><strong>August 15:</strong> Annual Sports Day</li>
          </ul>
        </div>
      </div>
    </section>
     <section id="about" class="text-center mb-5">
      <h2 class="section-title" style="color: #fff;">About Us</h2>
      <div class="image-overlay-container">
        <img src="/images/X-wisdomtvet2.png" class="img-fluid" alt="About X-Wisdom" />
        <div class="overlay-text">Who We Are
          <p><strong>History:</strong> Established in 2010 to provide high-quality technical education.</p>
          <p><strong>Mission:</strong> To nurture skilled professionals ready for the job market.</p>
          <p><strong>Vision:</strong> To become a leading center of technical excellence in the region.</p>
          <p><strong>Principal's Message:</strong> We believe in hands-on training, discipline, and innovation. Welcome to a new journey of practical learning!</p>
        </div>
      </div>
    </section>

    <section id="teachers" class="text-center mb-5">
      <h2 class="section-title" style="color: #fff;">Our Teachers</h2>
      <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="card shadow-sm h-100">
            <img src="/images/ICT teacher.jfif" class="card-img-top img-fluid" alt="Teacher 1">
            <div class="card-body">
              <h5 class="card-title">Mr. Jean Bosco</h5>
              <p class="card-text"><strong>Department:</strong> ICT</p>
              <p class="card-text"><strong>Email:</strong> jean.bosco@xwisdomtvet.rw</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="card shadow-sm h-100">
            <img src="/images/coking styles (2).jfif" class="card-img-top img-fluid" alt="Teacher 2">
            <div class="card-body">
              <h5 class="card-title">Ms. Alice Uwimana</h5>
              <p class="card-text"><strong>Department:</strong> Culinary Arts</p>
              <p class="card-text"><strong>Email:</strong> alice.uwimana@xwisdomtvet.rw</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="card shadow-sm h-100">
            <img src="/images/construction teacher 1.jfif" class="card-img-top img-fluid" alt="Teacher 2">
            <div class="card-body">
              <h5 class="card-title">Mr. Jeanpier Luka</h5>
              <p class="card-text"><strong>Department:</strong> Construction</p>
              <p class="card-text"><strong>Email:</strong> pier.luka@xwisdomtvet.rw</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="students" class="text-center mb-5">
      <h2 class="section-title">Our Students</h2>
      <div class="p-4 bg-light rounded shadow-sm mx-auto" style="max-width: 600px;">
        <h3 class="text-success">🎓 Total Students: 500+</h3>
        <p class="mt-3">Our students come from all over the region, eager to gain practical skills and contribute to society. We focus on hands-on learning, discipline, and creativity.</p>
      </div>
    </section>
  </div>

  <footer class="text-center">
    <section id="contact" class="text-center">
      <h2 class="section-title" style="color: #fff;">Contact Us</h2>
      <p><strong>Address:</strong> KG 123 Street, Kigali, Rwanda</p>
      <p><strong>Phone:</strong> +250 789 000 111</p>
      <p><strong>Email:</strong> info@xwisdomtvet.rw</p>
      <form class="mt-4 text-start mx-auto" style="max-width: 600px;">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" required />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" required />
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Send Message</button>
      </form>
    </section>
    <p class="mt-4">&copy; 2025 X-Wisdom TVET. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
