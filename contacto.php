<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet"/>
    <title>contacto</title>
</head>
<body>
<header>
    <p class="nombre-educacion">Contacto</p>
    <nav class="nav-links">
        <ul class="nav-links">
            <li><a href="index.php">Sobre mi</a></li>
            <li><a href="educacion.php">Educacion</a></li>
            <li><a href="capacidades.php">Capacidades</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>
</header>

<div class="contenedor">
  <a href="https://github.com/Agust18" target="_blank" class="icon github">
    <i class="fab fa-github"></i> Github
  </a>
  <a
    href="https://www.instagram.com/agusstincamera_/?hl=es-la%3F%2F"
    target="_blank"
    class="icon instagram"
  >
    <i class="fab fa-instagram"></i> Instagram
  </a>
  <a href="https://x.com/AgustinCamera2" target="_blank" class="icon twitter">
    <i class="fab fa-twitter"></i> Twitter-X
  </a>
  <a
    href="https://www.linkedin.com/in/agustin-camera-a0258221a/"
    target="_blank"
    class="icon linkedin"
  >
    <i class="fab fa-linkedin"></i> LinkedIn
  </a>
</div>






<div class="formu">
    
    <form action="https://formspree.io/f/xwpkwapn" method="POST" >
        <label>
            Your name:
            <input type="text" name="name">
        </label>
        <label>
            Your last name:
            <input type="text" name="last-name">
        </label>
        <label>
            Your number:
            <input type="number" name="number">
        </label>
        <label>
            Your email:
            <input type="email" name="email">
        </label>
        <label>
            Your message:
            <textarea name="message"></textarea>
        </label>
        <!-- your other form fields go here -->
        <button type="submit">Send</button>
    </form>
</div>





<script>
    const form = document.getElementById('contact-form');
    form.addEventListener('submit', (e) => {
      // Enviar mensaje a WhatsApp
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const message = document.getElementById('message').value;

      const phoneNumber = '1234567890'; // Número de WhatsApp
      const whatsappMessage = `Hola, soy ${name}. Mi correo es ${email}. Mensaje: ${message}`;
      const whatsappLink = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(whatsappMessage)}`;
      window.open(whatsappLink, '_blank'); // Abre WhatsApp en una nueva pestaña
    });
</script>

    
</body>
</html>