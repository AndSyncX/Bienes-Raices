<?php
    require 'includes/funciones.php';
    incluirTemplates('header'); 
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur impedit eligendi ratione, 
                    atque repudiandae molestias nobis eos ullam veritatis suscipit, officiis possimus neque nostrum 
                    minima modi nihil. Suscipit, quidem maxime.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Aspernatur impedit eligendi ratione, ullam veritatis suscipit, officiis possimus
                    atque repudiandae molestias nobis eos ullam veritatis suscipit, officiis possimus neque nostrum 
                    minima modi nihil. Suscipit, quidem maxime.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Aspernatur impedit eligendi ratione, ullam veritatis suscipit, officiis possimus
                    atque repudiandae molestias nobis eos ullam veritatis suscipit, officiis possimus neque nostrum 
                    minima modi nihil. Suscipit, quidem maxime.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                </p>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur impedit eligendi ratione, 
                    atque repudiandae molestias nobis eos ullam veritatis suscipit, officiis possimus neque nostrum 
                    minima modi nihil. Suscipit, quidem maxime.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Aspernatur impedit eligendi ratione.
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotos</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, 
                    ad! Voluptatum eveniet inventore aliquid itaque est adipisci voluptate, 
                    nemo laudantium quis in eos quae sequi sapiente expedita fugiat dolore voluptates.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, 
                    ad! Voluptatum eveniet inventore aliquid itaque est adipisci voluptate, 
                    nemo laudantium quis in eos quae sequi sapiente expedita fugiat dolore voluptates.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono seuridad" loading="lazy">
                <h3>A tiempo</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, 
                    ad! Voluptatum eveniet inventore aliquid itaque est adipisci voluptate, 
                    nemo laudantium quis in eos quae sequi sapiente expedita fugiat dolore voluptates.
                </p>
            </div>
        </div>
    </section>

<?php incluirTemplates('footer'); ?>