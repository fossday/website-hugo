# Site Foss Day

- [Sobre o projeto](#sobre-o-projeto)
- [Organização dos arquivos](#organizacao-dos-arquivos)
- [Arquivos de configuração](#arquivos)



<a name="sobre-o-projeto"></a>
## Sobre o projeto
O tema nomeado como **conference** é desenvolvido e mantido pelo grupo de entusiastas de tecnologias, ***Software Livre*** e ***Open Source***, [FossDay](https://fossday.org). Inicialmente baseado no template [Impression Lite](https://graygrids.com/item/impression-bootstrap-html5-event-conference-template/).
O site utiliza as tecnologias básicas para web, como HTML5, CCS3 e JavaScript. Algumas dependências adicionais, principalmente componentes JS são requeridos, como o [jQuery](https://jquery.com), [Bootstrap](https://getbootstrap.com/), [OWL Carousel](https://owlcarousel2.github.io/OwlCarousel2/), [jQuery Countdown](http://hilios.github.io/jQuery.countdown/) e outros. O Framework CSS utilizado é o [Bootstrap v3.3.7](https://getbootstrap.com/)
O site é mantido com o gerador de sites [Hugo](https://gohugo.io/) e hospedado no [GitHub Pages](https://pages.github.com/). Para saber mais, sobre o processo de "***geração***" do site, acesse [esse link](https://github.com/fossday/site/blob/develop/readme.md).

<a name="organizacao-dos-arquivos)"></a>  
## Organização dos arquivos   

O projeto utiliza a estrutura padrão de ***temas*** do [Hugo](), com pequenas adaptações.  
Veja:  

##### Raiz do projeto

    - /  
    	- docs
        - LICENSE.md
        - readme.md
        - release.md
        - runme.sh
        - site

##### Raiz do site

	- site  
    	- archetypes
        - config-docker.toml
        - config.toml
        - content
        - data
        - LICENSE.md
        - Readme.md
        - resources
        - static
        - themes

##### Archetypes  

    - archetypes
     	- default.md

##### Content

	- content
    	- eventos
		- paginas

##### Themes

	- themes
    	- conference
			- archetypes
				- default.md
            - layouts  
                - 404.html
                - _default
                - index.html
                - partials
            - LICENSE.md
            - static
            	- assets
            		- css  
                        - animate.css
                        - blogpage.css
                        - bootstrap.min.css
                        - carousel-slider.css
                        - colors
                        - color-switcher.css
                        - custom-components.css
                        - global.css
                        - main.css
                        - nav-menu.css
                        - nivo-lightbox.css
                        - owl.carousel.css
                        - presets.css
                        - responsive.css
                        - slicknav.css
                    - fonts
                    - img
                    - js  
                        - bootstrap.min.js
                        - color-switcher.js
                        - contact-form-script.js
                        - form-validator.min.js
                        - initializers.js
                        - jquery.countdown.min.js
                        - jquery.mapit.min.js
                        - jquery.min.js
                        - jquery.slicknav.js
                        - main.js
                        - nivo-lightbox.js
                        - nivo-lightbox.min.js
                        - owl.carousel.min.js
                        - smooth-scroll.js
                        - video.js
                        - wow.js
            - theme.toml



#### Conference