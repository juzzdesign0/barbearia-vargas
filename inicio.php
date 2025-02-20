<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SevenMoto - Moto-fretes em alguns cliques</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Cabeçalho */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: black;
            color: white;
            padding: 20px 50px;
        }

        header .logo img {
            height: 50px; /* Ajuste do tamanho da logo */
        }

        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Seção Hero */
        .hero {
            background-color: #f4f4f4;
            height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: black;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin: 0;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.2rem;
            margin: 20px 0;
            color: #333;
        }

        .hero .cta-buttons {
            margin-top: 20px;
        }

        .hero .cta-buttons a {
            background-color: #333;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin: 0 10px;
            display: inline-block;
        }

        .hero .cta-buttons a:hover {
            background-color: #555;
        }

        .hero .highlight-text {
            font-size: 1.1rem;
            color: #5a2bbd;
            border: 1px solid #5a2bbd;
            padding: 5px;
            display: inline-block;
        }

        footer {
            background-color: black;
            color: white;
            padding: 20px;
            text-align: center;
        }

        @media (max-width: 768px) {
            header {
                padding: 10px 20px;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .hero .cta-buttons a {
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>

<!-- Cabeçalho -->
<header>
    <div class="logo">
    <h1>SevenMoto</h1>
    </div>
    <nav>
        <ul>
            <li><a href="#help">ajuda</a></li>
            <li><a href="#login">login</a></li>
            <li><a href="#signup">cadastre-se</a></li>
        </ul>
    </nav>
</header>

<!-- Seção Hero (Imagem de Fundo e CTA) -->
<section class="hero">
    <h1>Moto-fretes em alguns cliques.</h1>
    <p class="text">Enviar ou receber? Você deseja...</p>
    <div class="cta-buttons">
        <a href="#delivery">Realizar entregas</a>
        <a href="#hire">Contratar motofretista</a>
    </div>
</section>
<!-- Seção de Informações -->
<section class="info-section">
    <h2>Como funciona a SevenMoto</h2>
    <p>Seja você um motofretista ou alguém precisando de um, nós te ajudamos a completar sua missão .</p>
</section>

<!-- Rodapé -->
<footer>
    <p>&copy; 2024 SevenMoto. Todos os direitos reservados.</p>
</footer>

</body>
</html>
