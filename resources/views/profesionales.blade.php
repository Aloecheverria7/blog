@extends('layouts.app')

@yield('title')

@section('content')
<div id="heading-breadcrumbs">
       <div class="container">
         <div class="row d-flex align-items-center flex-wrap">
           <div class="col-md-7">
             <h1 class="h2">Mi cuenta</h1>
           </div>
           <div class="col-md-5">
             <ul class="breadcrumb d-flex justify-content-end">
               <li class="breadcrumb-item"><a href="index.html">Home</a></li>
               <li class="breadcrumb-item active">My Account</li>
             </ul>
           </div>
         </div>
       </div>
     </div>
     <div id="content">
       <div class="container">
         <div class="row bar">
           <div id="customer-account" class="col-lg-9 clearfix">
               <div class="box mt-5">
               <div>
                 <h1 class="ti">Registrarse</h3>
               </div>
             </div>
             <div class="bo3">
               <div class="heading">
                 <h3 class="text-uppercase">Datos Personales</h3>
               </div>
               <form>
                 <div class="row">
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="firstname">Nombres</label>
                       <input id="firstname" type="text" class="form-control">
                     </div>
                   </div>
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="lastname">Apellidos</label>
                       <input id="lastname" type="text" class="form-control">
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="dni">DNI/NIE</label>
                       <input id="dni" type="text" class="form-control">
                     </div>
                   </div>
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="movil">Teléfono Móvil</label>
                       <input id="movil" type="text" class="form-control">
                     </div>
                   </div>
                 </div>
                 <div class="row">
                   <div class="col-md-6 col-lg-3">
                     <div class="form-group">
                       <label for="empresa">Empresa</label>
                       <input id="empresa" type="text" class="form-control">
                     </div>
                   </div>
                   <div class="col-md-6 col-lg-3">
                     <div class="form-group">
                       <label for="zip">Cod. Postal</label>
                       <input id="zip" type="text" class="form-control">
                     </div>
                   </div>
                   <div class="col-md-6 col-lg-3">
                     <div class="form-group">
                       <label for="País">Pais</label>
                       <select id="País" class="form-control">
                        <option value="España">España</option>
                       </select>
                     </div>
                   </div>
                   <div class="col-md-6 col-lg-3">
                     <div class="form-group">
                       <label for="Provincia">Provincia</label>
                       <select id="Provincia" class="form-control">
                         <option value="alava">---Seleccionar ---</option>
                         <option value="alava">Álava</option>
                         <option value="albacete">Albacete</option>
                         <option value="alicante">Alicante</option>
                         <option value="almeria">Almería</option>
                         <option value="asturias">Asturias</option>
                         <option value="avila">Ávila</option>
                         <option value="badajos">Badajoz</option>
                         <option value="barcelona">Barcelona</option>
                         <option value="belares">Belares</option>
                         <option value="burgos">Burgos</option>
                         <option value="caceres">Cáceres</option>
                         <option value="cadiz">Cádiz</option>
                         <option value="audi">Cantabria</option>
                         <option value="saab">Castellon</option>
                         <option value="mercedes">Ciudad Real</option>
                         <option value="audi">Córdoba</option>
                         <option value="saab">La coruña</option>
                         <option value="mercedes">Cuenca</option>
                         <option value="audi">Gerona</option>
                         <option value="saab">Granada</option>
                         <option value="mercedes">Guadalajara</option>
                         <option value="audi">Guipúzcoa</option>
                         <option value="saab">Huelva</option>
                         <option value="mercedes">Huesca</option>
                         <option value="saab">Jaén</option>
                         <option value="mercedes">León</option>
                         <option value="audi">Lérida</option>
                         <option value="saab">Lugo</option>
                         <option value="mercedes">Madrid</option>
                         <option value="audi">Málaga</option>
                         <option value="saab">Murcia</option>
                         <option value="mercedes">Navara</option>
                         <option value="audi">Orence</option>
                         <option value="saab">Palencia</option>
                         <option value="mercedes">Las Palmas</option>
                         <option value="audi">Ponteverdra</option>
                         <option value="saab">La Rioja</option>
                         <option value="mercedes">Salamanca</option>
                         <option value="audi">Segovia</option>
                         <option value="saab">Sevilla</option>
                         <option value="mercedes">Soria</option>
                         <option value="audi">Tarragona</option>
                         <option value="saab">Santa Cruz de Tenerife</option>
                         <option value="mercedes">Barcelona</option>
                         <option value="audi">Teruel</option>
                         <option value="audi">Toledo</option>
                         <option value="saab">Valencia</option>
                         <option value="mercedes">Valladolid</option>
                         <option value="audi">Vizcaya</option>
                         <option value="saab">Zamora</option>
                         <option value="mercedes">Zaragoza</option>
                       </select>
                     </div> 
                   </div>
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="phone">Especialidad</label>
                       <select id="phone" type="text" class="form-control">
                       <option value="0" selected="selected">---Seleccionar ---</option>
                           <option value="ANTENISTA">ANTENISTA</option>
                           <option value="CARPINTERO">CARPINTERO</option>
                           <option value="CERRAJERO">CERRAJERO</option>
                           <option value="CLIMATIZACION">CLIMATIZACION</option>
                           <option value="CRISTALEROS">CRISTALEROS</option>
                           <option value="DECORADORES">DECORADORES</option>
                           <option value="DESATRANCOS">DESATRANCOS</option>
                           <option value="DESINFECTACION">DESINFECTACION</option>
                           <option value="ELECTRICISTAS">ELECTRICISTAS</option>
                           <option value="ELLECTRODOMESTICOS">ELLECTRODOMESTICOS</option>
                           <option value="FONTANEROS">FONTANEROS</option>
                           <option value="GUARDAMUEBLES">GUARDAMUEBLES</option>
                           <option value="INFORMATICOS">INFORMATICOS</option>
                           <option value="LIMPIEZA ">LIMPIEZA </option>
                           <option value="MUDANZAS">MUDANZAS</option>
                           <option value="PINTORES">PINTORES</option>
                           <option value="PERSIANISTAS">PERSIANISTAS</option>
                           <option value="REFORMAS">REFORMAS</option>
                           <option value="TEJADOS Y FACHADAS">TEJADOS Y FACHADAS</option>
                           <option value="TOLDOS">TOLDOS</option>
                           <option value="OTROS">OTROS</option>
                     </select>
                     </div>
                   </div>
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="email_account">Correo electronico</label>
                       <input id="email_account" type="text" class="form-control">
                     </div>
                   </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="password_1">Contraseña</label>
                             <input id="password_1" type="password" class="form-control">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label for="password_2">Repite la contraseña</label>
                             <input id="password_2" type="password" class="form-control">
                         </div>
                     </div>
                   <div class="col-md-12 text-center">
                     <button type="submit" class="btn btn-lg-template-outlined-white"><i class="fa fa-save"></i> Save changes</button>
                   </div>
                 </div>
               </form>
             </div>
           </div>
           <div class="col-lg-3 mt-4 mt-lg-0">
             <!-- CUSTOMER MENU -->
             <!--div class="panel panel-default sidebar-menu">
               <div class="panel-heading">
                 <h3 class="h4 panel-title">Customer section</h3>
               </div>
               <div class="panel-body">
                 <ul class="nav nav-pills flex-column text-sm">
                   <li class="nav-item"><a href="customer-orders.html" class="nav-link active"><i class="fa fa-list"></i> My orders</a></li>
                   <li class="nav-item"><a href="customer-wishlist.html" class="nav-link"><i class="fa fa-heart"></i> My wishlist</a></li>
                   <li class="nav-item"><a href="customer-account.html" class="nav-link"><i class="fa fa-user"></i> My account</a></li>
                   <li class="nav-item"><a href="index.html" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a></li>
                 </ul>
               </div>
             </div-->
           </div>
         </div>
       </div>
     </div>
@stop
