@extends('template.layout')
@section('tituloSeccion')
  <h3 class="section-title">Proyectos Desarrollados</h3>
@endsection
@section('contenido')
    En esta seccion se muestran los proyectos que he realizado a lo largo de mi desarrollo como profesional. tanto en ramas de programacion como en el desarrollo de software.
    <br>
    Por el momento solo se muestra un solo proyecto, pero en el futuro se mostraran mas.
@endsection
@section('tituloSegundo')
    First 8244 DelfinesCBTech
@endsection
@section('points')
    <p class="section-description">En mi ultimo año de educacion de media superior, en mi escuela se lanzo por primera vez la convocatoria para formar parte de los primeros integrantes de un equipo de robotica.</p>
    <br>
    <p class="section-description">Este equipo participaria en la competenca FRC de First; una competencia internacional de robotica para estudiantes de 15 a 17 años.</p>
    <br>
    <p class="section-description">Fui el capitan del area de Programación y Electronica, quienes nos encargamos del desarrollo total del programa para realizar todas las funciones del robot, asi como de la parte Electronica</p>
@endsection



@section('portfolio')
<section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Galeria</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Acontinuacion se mostrarán algunas imagenes en donde se muestra las actividades que se desarrollaban.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/programming.jpg);" >
            <div class="details">
              <h4>Programando</h4>
              <span>{{$info->Programando()}}</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/program.png);" >
            <div class="details">
              <h4>Programa desarrollado</h4>
              <span>{{$info->Desarrollo()}}</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/program2.png);" >
            <div class="details">
              <h4>Programa desarrollado</h4>
              <span>{{$info->Desarrollo2()}}</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(img/electronic.jpg);" >
            <div class="details">
              <h4>Electronica</h4>
              <span>{{$info->Electronica()}}</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection