<?php
/*
Template Name: Homepage Custom
*/

//the content of page.php and now you can do what you want.
?>

<?php get_header(); ?>

<section id="top-header" data-aos="fade-up">
    <div class="container">
        <div class="row">

            <img src="<?php echo get_template_directory_uri(); ?>/img/foto-mobile.jpg" class="foto-mobile" alt="">

            <div class="col col-1">                
                <div class="carrossel-top">
                    <div class="item">
                        <h2>Bilinguismo<br/>para Famílias</h2>
                        <p>Dou orientação e apoio a famílias de todo o mundo que criam filhos bilíngues, fornecendo ideias práticas e inspiração para ajudar a enfrentar esse desafio com maior sucesso - e sentir alegria ao longo do caminho.</p>
                        <p>
                            <a href="#experiencia" class="btn anchor">Saiba Mais</a>
                        </p>
                    </div>
                    <div class="item">
                    <h3>“Aprender outro idioma não é apenas aprender palavras diferentes para as mesmas coisas, mas aprender outra maneira de pensar sobre as coisas”</h3>
                            <p><strong>Flora Lewis</strong></p>
                            <p>
                                <a href="#experiencia" class="btn anchor">Learn More</a>
                            </p>
                    </div>
                </div>
            </div>
            <div class="col col-2">
                
            </div>     

        </div>
    </div>
</section>

<div id="principal">

    <section id="experiencia">
        <div class="container">
            <div class="row">
                <div class="col col-1" data-aos="fade-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/foto-1.jpg" alt="">
                </div>
                <div class="col col-2" data-aos="fade-left">
                    <h3>Aprenda inglês em Família!</h3>                                        
                    <p>Você quer o melhor para seus filhos ... você quer dar a eles as oportunidades que você nunca teve! E olhando para o futuro, fica cada vez mais claro que o Inglês é uma das MELHORES oportunidades que você pode proporcionar para o futuro deles!</p>
                    <p>A Welcome English orienta e dá apoio a famílias de todo o mundo na criação de filhos bilíngues, fornecendo ideias práticas e inspiração para ajudar a enfrentar esse desafio, obtendo sucesso e recebendo motivação ao longo do caminho. E o melhor: todos aprendendo juntos!!</p>
                    <p>
                        <a href="#contato" class="btn anchor">Entre em contato!</a>
                    </p>
                </div>
            </div>            
        </div>
    </section>

    <section id="courses">
        <div class="container">
            <div class="course video" data-aos="fade-up">
                <h3>Curso para Família<br/>em Português</h3>    
                <h4>Falando Inglês da gestação aos 4/5 anos de idade</h4>                
                <!--p>Para pessoas que têm convívio com crianças e querem ensinar inglês na rotina diária, como pais, avós, tios, babás, etc.</p>
                <p>Este curso, pois foi desenvolvido com o objetivo de todos aprenderem! Então, vamos começar? </p-->
                <a href="https://www.udemy.com/course/bilinguismo-em-familia/" class="btn" target="_blank">Matricule-se já!</a>
            </div>
            <div class="course video" data-aos="fade-up">
                <h3>Bilinguismo<br/>em Família</h3>    
                <h4>Tudo o que vocÊ precisa saber para criar crianças bilíngues.</h4>
                <!--p>With this course, aimed at helping parents just like you bring English into your family, you'll know how to start, get tons of resources that can help you on your journey, and more than that - a guide who has not only created her own bilingual family, but helped numerous other families do EXACTLY what you are trying to do!</p-->
                <a href="https://englishanywherede.teachable.com/p/fabi-bilingualism-for-families" class="btn" target="_blank">Matricule-se já!</a>
            </div>
            <div class="course video" data-aos="fade-up">
                <h3>Welcome English na sua Família</h3>    
                <h4>Aprenda inglês em família!</h4>                
                <!--p>Private English classes are expensive... even for children! And online courses can sometimes lead to more questions, with no one to help you. </p>
                <p>You need an inexpensive program, to learn the steps for bilingualism in the family... all with an expert teacher to guide you.</p--> 
                <a href="https://englishanywherede.teachable.com/p/welcome-english" class="btn" target="_blank">Matricule-se já!</a>
            </div>
            <div id="ebook" class="course ebook" data-aos="fade-up">
                <h4>eBook</h4>
                <h3>Músicas para Crianças em Inglês</h3>                    
                <!--p>“My First Activity Ebook”is the perfect introduction to the English language, that will make learning English fun for your child. Work through the activities together, by singing songs and nursery rhymes, while learning new vocabulary and helpful phrases!</p>
                <p>This ebook blends the tried-and-tested methods of language learning, with modern technology to be truly one-of-a-kind!</p-->
                <a href="https://welcomeenglish.online/br/produto/ebook-musicas-para-criancas-em-ingles/" class="btn">Compre agora</a>
            </div>
            <div class="course ebook" data-aos="fade-up">
                <h4>eBook</h4>
                <h3>Músicas para Jovens e Adultos em Inglês</h3>                    
                <!--p>Este curso tem como propósito ensinar inglês para crianças desde a gestação até os 4/5 anos de idade através de técnicas e atividades explicadas nas aulas.</p>
                <p>É um curso destinado para pessoas que têm convívio com crianças e querem ensinar inglês na rotina diária, como pais, avós, tios, babás, funcionários do lar, professores, etc.</p-->                
                <a href="https://welcomeenglish.online/br/produto/ebook-songs-for-teenagers-and-adults-in-english/" class="btn">Compre agora</a>
            </div>
            <div class="course video" data-aos="fade-up">
                <h4>Aulas Particulares</h4>
                <h3>Inglês para Todas as Idades e Níveis</h3>    
                <!--p>Este curso tem como propósito ensinar inglês para crianças desde a gestação até os 4/5 anos de idade através de técnicas e atividades explicadas nas aulas.</p>
                <p>É um curso destinado para pessoas que têm convívio com crianças e querem ensinar inglês na rotina diária, como pais, avós, tios, babás, funcionários do lar, professores, etc.</p-->                
                <a href="https://welcomeenglish.online/br/produto/aulas-particulares-ingles-para-todas-as-idades-e-niveis/" class="btn">Saiba mais</a>
            </div>
        </div>
    </section>
    
    <section id="metodo">
        <div class="container">
        <h3>O melhor para os seus filhos</h3>                    
            <div class="row">
                <div class="col col-1" data-aos="fade-right">
                    <p>Ser bilíngue significa entender e se expressar em duas línguas, e se capaz de transmitir seus pensamentos em ambas.</p>                   
                    <p>Não é só aprender outro idioma, mas vai muito além disso! Ao se tornar fluente em Inglês, você poderá aproveitar os inúmeros benefícios cognitivos, acadêmicos e sociais de conhecer este idioma, que é a língua oficial em 67 países ao redor do mundo.</p>
                    <p>Sendo que há uma grande quantidade de pessoas que falam inglês, este é a escolha mais comum para uma segunda língua. Esta é inegavelmente uma ferramenta útil que está sempre presente no mundo dos negócios, entretenimento, ciência e muitas outras áreas.</p>
                </div>
                <div class="col col-2" data-aos="fade-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/foto-2.jpg" alt="">
                </div>

            </div>
            
        </div>
    </section>
    
    <section id="professora">
        <div class="container">
            <div class="row">
                <div class="col-1" data-aos="fade-right">
                <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Fwelcomeenglish.class%2Fvideos%2F134952131950016%2F&show_text=false&width=380&t=0" width="380" height="460" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                </div>
                <div class="col-2" data-aos="fade-left">
                    <h3>A Professora</h3>
                    <p>Estou aqui para você e sua família </p>                    
                    <p>Fale sobre você! </p>
                    <p>Sinta-se à vontade para usar o formulário abaixo e falar sobre você e sua família; seus objetivos de vida que deseja alcançar e os obstáculos que encontra em seu caminho. Podemos conversar sobre maneiras para você superar estes obstáculos e chegar onde deseja.</p>
                    <p>Fabi x</p>                    
                </div>
            </div>
            
                
        </div>
    </section>
    
    <section id="depoimentos" data-aos="fade-up">
        <div class="container">            
            <div class="carrossel">
                <div class="item">
                    <div class="foto">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/aluna-3.jpg" alt="">
                    </div>
                    <div class="depoimento">
                        <p>Não conheço professora mais trabalhadora, atenciosa e preocupada do que ela. Obrigado por todas as lições e carinho que você tem com minha filha.</p>
                        <p>
                            <strong>Liana Soifer (mãe)</strong>                            
                            <span>Nina Zambon (6 anos - minha aluna há 15 meses)</span>
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="foto">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/aluna-1.jpg" alt="">
                    </div>
                    <div class="depoimento">
                        <p>A nossa filha já teve outras experiências de aulas particulares, pelo que podemos afirmar com naturalidade e comparativamente que a Fabi é uma excelente professora!</p>
                        <p>
                            <strong>Melina Girardi Fachin (mãe)</strong>                            
                            <span>Flor Gonçalves Fachin (6 anos - minha aluna há 15 meses)</span>
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="foto">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/aluna-2.jpg" alt="">
                    </div>
                    <div class="depoimento">
                        <p>O Welcome English trouxe uma leveza no ensino que às vezes me pego tocando com eles em canções em inglês, cantando no banho, é demais!</p>
                        <p>
                            <strong>Alessandra Abraão (mãe)</strong>                            
                            <span>Rafaela Abraão (8 anos - minha aluna há 15 meses)</span>
                        </p>
                    </div>
                </div>
            </div>
    
        </div>
    </section>

</div>


<?php get_footer(); ?>
