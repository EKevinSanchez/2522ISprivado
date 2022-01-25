@extends('template.layout')

@section('banner')
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <h1>BIENVENIDO A MI PORTAFOLIO</h1>
        <h2>Eric Kevin Sanchez Garrido</h2>
        <div class="actions">
          <a href="#about" class="btn-get-started">Comenzemos</a>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('tituloSeccion')
  <h3 class="section-title">Introduccion</h3>
@endsection
@section('contenido')
  Soy Eric Kevin Sanchez Garrido, un estudiante de la Universidad Politecnica de Tecamac, en esta pagina se muestran mi formacion academica y experiencia laboral, asi como algunas de mis habilidades y conocimientos.
@endsection
@section('tituloSegundo')
  Aptitudes y Habilidades
@endsection
@section('points')
  <div class="col-md-4 service-item">
    <div class="service-icon"><i class="fa fa-server"></i></div>
      <h4 class="service-title">Conocimientos de servidores FTP</h4>
  </div>
  <div class="col-md-4 service-item">
    <div class="service-icon"><i class="fa fa-briefcase"></i></div>
      <h4 class="service-title">Conocimientos avanzados de MS Office Suite</h4>
  </div>
  <div class="col-md-4 service-item">
    <div class="service-icon"><i class="fa fa-globe"></i></div>
      <h4 class="service-title">Conocimientos sobre redes y camaras IP</h4>
  </div>
  <div class="col-md-4 service-item">
    <div class="service-icon"><i class="fa fa-user"></i></div>
      <h4 class="service-title">Capacidad de adaptación y respuesta</h4>
  </div>
  <div class="col-md-4 service-item">
    <div class="service-icon"><i class="fa fa-user"></i></div>
      <h4 class="service-title">Aptitudes de memorizacion</h4>
  </div>

@endsection




