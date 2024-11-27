<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço Catani - Beleza e Estilo</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Inclusão do Bootstrap Icons para os ícones -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


</head>
<body>

    <section class="bg-new">
        <div class="container">
        <?php include_once "assets/includes/header.php" ?>
        </div>
    </section>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

    <div class="container">
<!-- Seção Sobre -->
<section id="about" class="section py-5 ">
    <div class="container">
        <div class="row align-items-center">
            <!-- Coluna para Texto -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="display-4 fw-bold text-primary">Sobre Nós</h2>
                <p class="lead text-muted">
                    O Espaço Catani é um lugar dedicado ao bem-estar e à beleza. Nossa missão é realçar a beleza de cada cliente com atendimento personalizado e serviços de alta qualidade.
                </p>
                <p class="text-muted mb-4">
                    Com uma equipe experiente e apaixonada, buscamos sempre oferecer os melhores tratamentos de beleza para nossos clientes, criando experiências únicas e transformadoras.
                </p>
                
                <!-- Lista de Serviços -->
                <h4 class="fw-bold mb-3">Nossos Serviços</h4>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center mb-2">
                        <i class="bi bi-check-circle text-success me-2"></i>
                        <span>Tratamentos de Pele</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <i class="bi bi-check-circle text-success me-2"></i>
                        <span>Cabelos e Cortes Personalizados</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <i class="bi bi-check-circle text-success me-2"></i>
                        <span>Massagens e Relaxamento</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <i class="bi bi-check-circle text-success me-2"></i>
                        <span>Maquiagem Profissional</span>
                    </li>
                </ul>
                
                <!-- Botão de Chamada para Ação -->
                <a href="#contact" class="btn btn-custom btn-lg mt-4">Entre em Contato</a>
            </div>
            
            <!-- Coluna para Imagem -->
            <div class="col-lg-6 text-center">
                <img src="https://via.placeholder.com/500" alt="Imagem do Espaço Catani" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>


    <!-- Seção de Serviços -->
    <section id="services" class="section">
        <h2>Serviços</h2>
        <div class="row">


            <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                <h3>Cílios e Sobrancelhas</h3>
                <p>Realce o olhar com técnicas avançadas para cílios e sobrancelhas que valorizam seu rosto.</p>
                </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card">
            <div class="card-body">
                <h3>Manicure e Pedicure</h3>
                <p>Cuide das suas mãos e pés com nossos serviços especializados em manicure e pedicure.</p>
            </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header">
                <h3 class="fw-bold">Spa dos Pés</h3>
                </div>
                <div class="card-body">
                <p>Relaxe e recupere o bem-estar com um tratamento completo para os pés.</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-dark w-100">VER MAIS</button>
                </div>
            </div>
            </div>

            
        </div>
    </section>

<!-- Seção de Depoimentos -->
<section id="testimonials" class="section py-5">
    <div class="container">
        <h2 class="text-center mb-4">O que Nossos Clientes Dizem</h2>
        
        <!-- Carrossel de Depoimentos -->
        <div id="carouselTestimonials" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Card 1 -->
                <div class="carousel-item active">
                    <div class="card mx-auto" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text">"O Espaço Catani fez maravilhas para a minha pele e cabelo! Atendimento excelente e super recomendo."</p>
                            <h5 class="card-title"><strong>– Ana Costa</strong></h5>
                        </div>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="carousel-item">
                    <div class="card mx-auto" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text">"Fui ao Espaço Catani para um tratamento e saí encantada com os resultados. Super recomendo, tudo impecável!"</p>
                            <h5 class="card-title"><strong>– João Silva</strong></h5>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="carousel-item">
                    <div class="card mx-auto" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text">"Ambiente maravilhoso e profissionais super capacitados! Me senti em casa durante todo o processo."</p>
                            <h5 class="card-title"><strong>– Mariana Alves</strong></h5>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="carousel-item">
                    <div class="card mx-auto" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text">"Atendimento top e resultados surpreendentes! O Espaço Catani conquistou meu coração!"</p>
                            <h5 class="card-title"><strong>– Pedro Lima</strong></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controles do Carrossel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </div>
</section>


    </div>

    <section class="bg-new">
        <div class="container">
        <?php include_once "assets/includes/footer.php" ?>
        </div>
    </section>


    <script>
        // Animação de entrada das seções
        const sections = document.querySelectorAll('.section');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        }, {
            threshold: 0.5
        });

        sections.forEach(section => {
            observer.observe(section);
        });
    </script>

<!-- Inclusão do Bootstrap JS (necessário para o carrossel funcionar) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
