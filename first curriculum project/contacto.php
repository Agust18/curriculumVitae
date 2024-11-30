<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
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