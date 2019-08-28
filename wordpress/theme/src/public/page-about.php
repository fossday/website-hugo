<?php /* Template Name: About Page */ ?>
<!-- Get Header  -->
<?php get_header(); ?>

<!-- Init content -->
<main id="content" class="white-background" role="main">
    <div class="container container-masonry">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="inner">
            <div class="margin-4"></div>
            <div class="row">
                <?php the_content(); ?>
            </div>

            <div class="owl-carousel owl-services owl-red-dots">
                <div class="service-item">
                    <h6>Desenvolvimento web</h6>
                    <div class="sep red"></div>
                    <div class="margin-1"></div>
                    <p class="small">Criando experiências únicas entre homem e máquina. Tecnologias novas surgem a cada momento, juntamente de novos desafios.</p>
                    <div class="margin-5"></div>
                </div>
                <div class="service-item">
                    <h6>Design</h6>
                    <div class="sep red"></div>
                    <div class="margin-1"></div>
                    <p class="small">Forma de comunicar ideia ou conceito, usando formas, linhas, texturas e cores.</p>
                    <div class="margin-5"></div>
                </div>
                <div class="service-item">
                    <h6>Software Livre</h6>
                    <div class="sep red"></div>
                    <div class="margin-1"></div>
                    <p class="small">Muito mais que partilha de códigos, um meio democratizador e aberto à possibilidades infinitas.</p>
                    <div class="margin-5"></div>
                </div>
                <div class="service-item">
                    <h6>Fotografia</h6>
                    <div class="sep red"></div>
                    <div class="margin-1"></div>
                    <p class="small">Mais do que uma ferramenta científica, constitui-se como uma arte. Ela tem o poder artístico e documental de capturar todas as outras artes de forma lúcida.</p>
                    <div class="margin-5"></div>
                </div>
                <div class="service-item">
                    <h6>Vídeo</h6>
                    <div class="sep red"></div>
                    <div class="margin-1"></div>
                    <p class="small">Se destaca como uma das formas de comunicação mais poderosas, por apresentar o movimento e o discurso.</p>
                    <div class="margin-5"></div>
                </div>
                <div class="service-item">
                    <h6>Escrita/Tipografia/Texto:</h6>
                    <div class="sep red"></div>
                    <div class="margin-1"></div>
                    <p class="small">Por sua fragilidade comunicativa, é possível criar grandes obras de natureza subjetiva.</p>
                    <div class="margin-5"></div>
                </div>
                <div class="service-item">
                    <h6>Podcast</h6>
                    <div class="sep red"></div>
                    <div class="margin-1"></div>
                    <p class="small">Apresenta a forma da comunicação mais usada no dia a dia: a fala.<br> É possível consumir conteúdos de forma simples, enquanto vai para o trabalho ou faculdade.</p>
                    <div class="margin-5"></div>
                </div>
                <div class="service-item">
                    <h6>Cultura</h6>
                    <div class="sep red"></div>
                    <div class="margin-1"></div>
                    <p class="small">É a exclusividade dos animais racionais. Enquanto questionamos, refletimos e criamos, estamos fazendo ela.</p>
                    <div class="margin-5"></div>
                </div>
            </div>
            <div class="margin-3"></div>

            <div class="team-container">
                <div class="team-member team-info">
                    <h4>#Team Dose Extra</h4>
                    <p class="small">As pessoas que fazem a mágica acontecer!</p>
                    <p class="small no-bottom">Quer escrever no blog? <a href="{{ .Site.BaseURL }}/contato/">Clique aqui!</a></p>
                </div>
                <div class="team-member">
                    <a href="{{ .Site.BaseURL }}/author/regis/" class="team-photo">
                        <img src="{{ .Site.BaseURL }}/img/author/Chefe-Apache-768x768.jpg" width="640" height="640" alt="Régis Tomkiel">
                        <span class="info"><span class="text"><span class="name">Régis Tomkiel</span><span class="description">(Chefe Apache)</span></span></span>
                    </a>
                </div>
                <!--div class="team-member">
          <a href="{{ .Site.BaseURL }}/author/bruno-nascimento/" class="team-photo">
            <img src="{{ .Site.BaseURL }}/img/author/brunopb-768x768.jpg" width="640" height="640" alt="Bruno Nascimento">
            <span class="info"><span class="text"><span class="name">Bruno Nascimento</span><span class="description">(Gladiador Dourado)</span></span></span>
          </a>
        </div>
        <div class="team-member">
          <a href="#" class="team-photo">
            <img src="{{ .Site.BaseURL }}/img/author/italopb-768x768.jpg" width="640" height="640" alt="Ítalo Ávila">
            <span class="info"><span class="text"><span class="name">Ítalo Ávila</span><span class="description">(Menino Morcego)</span></span></span>
          </a>
        </div -->
        <!--div class="team-member">
            <a href="{{ .Site.BaseURL }}/author/michael/" class="team-photo">
                <img src="{{ .Site.BaseURL }}/img/author/Rapper-Cristao-768x768.jpg" width="640" height="640" alt="Michael Alessandro de Toni">
                <span class="info"><span class="text"><span class="name">Michael Alessandro de Toni</span><span class="description">(Rapper Cristão)</span></span></span>
            </a>
        </div-->
        <!--div class="team-member">
          <a href="#" class="team-photo">
            <img src="{{ .Site.BaseURL }}/img/author/phalopb-768x768.jpg" width="640" height="640" alt="Pachycephalosaurus">
            <span class="info"><span class="text"><span class="name">Phalo Saurus</span><span class="description">Mestre dos magos</span></span></span>
          </a>
        </div-->
                <div class="clear"></div>
            </div>
            <div class="sep margin-2"></div>
        </div>
        <div class="margin-5"></div>

        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <h4>O que dizem sobre a Dose Extra?</h4>
                <h4>Leia alguns depoimentos de quem fez parte da nossa história...</h4>
                <!--a href="#" class="button filled">Vamos lá!</a-->
                <div class="margin-2"></div>
            </div>
            <div class="col-sm-5">
                <div class="red-border testimonials-vertical-offset">
                    <div class="owl-carousel owl-testimonials2 owl-red-dots">
                        <div class="testimonial-item">
                            <p>O Dose foi por muito tempo meu cantinho de paz para desabafar. Era nosso meio de compartilhar conhecimento e debater sobre as tretas da vida. Tenho muito orgulho de ter participado. Sucesso é uma palavra muito pequena para desejar a vocês.</p>
                            <em class="name">- <a href="https://www.facebook.com/andri.lima29">Andri Lima</a></em>
                        </div>
                        <div class="testimonial-item">
                            <p>Minha passagem pelo Dose Extra foi longa e muito produtiva. Foi o primeiro lugar onde publiquei um texto meu, gerarando histórias de que tenho muito orgulho. Estou ansioso pra acompanhar os novos trabalhos dessa equipe que só não tenho saudade porque me nego a me afastar.</p>
                            <em class="name">- <a href="https://www.facebook.com/lucas2vezes">Lucas de Lucca</a></em>
                        </div>
                        <div class="testimonial-item">
                            <p>A impressão que sempre tive do Dose é que era o espaço democrático onde algumas pessoas especiais - que constituíam uma turbulenta e divertida família - podiam se expressar sobre arte, política e conflitos pessoais. É um lar do qual fiz parte, onde cada um deixou um pedaço seu e que agora se expande rumo a um novo horizonte.</p>
                            <em class="name">- <a href="https://www.facebook.com/guilherme.krema">Guilherme Krema</a></em>
                        </div>
                    </div>
                </div>
                <div class="margin-3"></div>
            </div>
        </div>
        <img src="" width="1200" height="505" alt="">
        <div class="margin-5"></div>
        <?php endwhile;
        else : ?>
        <div class="artigo">
            <h2>Nada Encontrado</h2>
            <p>Erro 404</p>
            <p>Lamentamos mas não foram encontrados artigos.</p>
        </div>
        <?php endif; ?>
    </div>
</main>
<!-- end of content area -->

<!-- Get Footer -->
<?php get_footer(); ?>