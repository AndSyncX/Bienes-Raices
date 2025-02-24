<?php
    require 'includes/funciones.php';
    incluirTemplates('header'); 
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.webp" type="image/webp">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>4</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>2</p>
                </li>
            </ul>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem assumenda minus doloribus nesciunt maiores dolor, amet accusantium et alias, nulla animi, error repudiandae id non eos doloremque ad molestias.Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem assumenda minus doloribus nesciunt maiores dolor, amet accusantium et alias, nulla animi, error repudiandae id non eos doloremque ad molestias.Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem assumenda minus doloribus nesciunt maiores dolor, amet accusantium et alias, nulla animi, error repudiandae id non eos doloremque ad molestias.Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem assumenda minus doloribus nesciunt maiores dolor, amet accusantium et alias, nulla animi, error repudiandae id non eos doloremque ad molestias.Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem assumenda minus doloribus nesciunt maiores dolor, amet accusantium et alias, nulla animi, error repudiandae id non eos doloremque ad molestias.</p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem assumenda minus doloribus nesciunt maiores dolor, amet accusantium et alias, nulla animi, error repudiandae id non eos doloremque ad molestias.Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem assumenda minus doloribus nesciunt maiores dolor, amet accusantium et alias, nulla animi, error repudiandae id non eos doloremque ad molestias.Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem assumenda minus doloribus nesciunt maiores dolor, amet accusantium et alias, nulla animi, error repudiandae id non eos doloremque ad molestias.
            </p>
        </div>
    </main>

<?php incluirTemplates('footer'); ?>