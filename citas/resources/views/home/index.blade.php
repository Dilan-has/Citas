<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    @extends('layouts.app-master')
    @section('content')
        @auth
            <div class="total container">
                <div class="cf container text-center">
                    <h1>Agenda tu Cita con Nosotros</h1>

                    <p>Bienvenido al SAC {{ auth()->user()->name }} </p>

                    <h2>¿Cómo Funciona?</h2>
                    <p>Explora nuestros servicios y selecciona el que necesitas. A continuación, elige una fecha y hora
                        conveniente.
                        ¡Es
                        así de simple!</p>
                </div>

                <div class="formulario">
                    <form method="POST" action="/guardar-cita">
                        @csrf

                        <input type="text" id="id_usuario" name="id_usuario" value="{{ auth()->user()->id }}"
                            style="display: none;">

                        <div class="inpt mb-2 text-center">
                            <label for="nombre" class="form-label">Nombre</label>
                            <div>
                                <input type="text" class="" id="nombre" name="nombre"
                                    value="{{ auth()->user()->name }}" readonly>
                            </div>
                        </div>

                        <div class="mb-3 text-center">
                            <label for="dependencia">Dependencia:</label>
                            <div>
                                <select id="dependencia" name="dependencia">
                                    <option value="almacen_municipal">Almacén Municipal</option>
                                    <option value="archivo_municipal">Archivo Municipal</option>
                                    <option value="biblioteca_municipal">Biblioteca Municipal</option>
                                    <option value="comisaria_familia">Comisaria de Familia</option>
                                    <option value="direccion_gestion_riesgo">Dirección de Gestión del Riesgo y Desastre</option>
                                    <option value="gobierno_digital">Gobierno Digital</option>
                                    <option value="inspeccion_policia">Inspección de Policía</option>
                                    <option value="ludoteca_municipal">Ludoteca Municipal</option>
                                    <option value="oficina_asesora_juridica">Oficina Asesora Jurídica</option>
                                    <option value="oficina_banco_proyectos">Oficina Banco de Proyectos</option>
                                    <option value="oficina_contratacion">Oficina de Contratación</option>
                                    <option value="oficina_control_interno">Oficina de Control Interno</option>
                                    <option value="oficina_cultura">Oficina de Cultura</option>
                                    <option value="oficina_despacho_municipal">Oficina de Despacho Municipal</option>
                                    <option value="oficina_familias_accion">Oficina de Familias en Acción</option>
                                    <option value="oficina_programas_sociales">Oficina de Programas Sociales</option>
                                    <option value="oficina_salud_publica">Oficina de Salud Pública</option>
                                    <option value="oficina_servicios_publicos">Oficina de Servicios Públicos</option>
                                    <option value="oficina_sisben">Oficina de SISBEN</option>
                                    <option value="oficina_turismo">Oficina de Turismo</option>
                                    <option value="oficina_deporte">Oficina del Deporte</option>
                                    <option value="oficina_enlace_victimas">Oficina Enlace de Víctimas</option>
                                    <option value="oficina_seguridad_salud_trabajo">Oficina Seguridad y Salud en el Trabajo
                                    </option>
                                    <option value="oficina_umata">Oficina UMATA</option>
                                    <option value="secretaria_hacienda">Secretaría de Hacienda</option>
                                    <option value="secretaria_planeacion_obras_publicas">Secretaría de Planeación y Obras
                                        Públicas
                                    </option>
                                    <option value="secretaria_general_gobierno">Secretaría General y de Gobierno</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 text-center">
                            <label for="fecha">Fecha de la Cita:</label>
                            <div>
                                <input type="datetime-local" id="fecha" name="fecha" required>
                            </div>
                        </div>

                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Guardar Cita</button>
                        </div>
                    </form>
                </div>
                <div class="container text-center">
                    <h4>¡Listo para Agendar tu Cita?</h4>
                    <p>Explora nuestros servicios y comienza a disfrutar de la conveniencia de agendar tus citas en línea.
                    </p>
                </div>
            </div>
        @endauth

        @guest
            <div class="total container">
                <div class="jumbotron text-center">
                    <h1 class="display-4">Bienvenido al Sistema de Agendamiento de Citas de la Alcaldía</h1>
                    <p class="lead">¡Gracias por visitarnos! En nuestra plataforma de agendamiento de citas, facilitamos el
                        proceso de programar
                        reuniones y citas con los diversos departamentos y servicios de la alcaldía. Nuestro objetivo es brindar
                        un
                        servicio eficiente y conveniente para satisfacer tus necesidades. Para agendar tus citas <a
                            href="/login">Inicia sesión</a></p>
                </div>

                <div class="servicios row mt-5">
                    <div class="col-md-6">
                        <h2>Explora Nuestros Servicios</h2>
                        <p>Descubre los diferentes departamentos y servicios disponibles para agendamiento. Desde servicios
                            administrativos hasta consultas con expertos, tenemos lo que necesitas.</p>
                        <h2>Selecciona un Servicio:</h2>
                        <p>Escoge el servicio específico para el cual deseas agendar una cita. Proporciona información básica
                            para
                            ayudarnos a dirigirte al departamento adecuado.</p>
                    </div>

                    <div class="col-md-6">
                        <h2>Elige una Fecha y Hora:</h2>
                        <p>Selecciona la fecha y hora que mejor se adapten a tu agenda. Nos esforzamos por ofrecer opciones
                            flexibles
                            para tu comodidad.</p>
                        <h2>Confirma tu Cita:</h2>
                        <p>Revisa los detalles de tu cita y confirma la reserva. Recibirás notificaciones para recordarte sobre
                            tu cita.
                        </p>
                    </div>
                </div>

                <div class="mt-5">
                    <h3 class="text-center">Ventajas del Agendamiento en Línea:</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <h4>Ahorra tiempo</h4>
                            <p>Evita largas esperas y agenda tus citas desde la comodidad de tu hogar.</p>
                        </div>
                        <div class="col-md-3">
                            <h4>Flexibilidad</h4>
                            <p>Accede a la plataforma las 24 horas del día, los 7 días de la semana, y elige el horario que
                                mejor te
                                convenga.</p>
                        </div>
                        <div class="col-md-3">
                            <h4>Notificaciones</h4>
                            <p>Recibe recordatorios automáticos para que nunca olvides tus citas programadas.</p>
                        </div>
                        <div class="col-md-3">
                            <h4>Atencion personalizada</h4>
                            <p>Tendras la opcion de obtener atencion personalizada gracias a este sistema.</p>
                        </div>
                    </div>
                    <h4 class="mt-4">¡Comienza Ahora!</h4>
                    <p>Explora nuestros servicios y descubre la conveniencia de agendar tus citas en línea. Estamos aquí para
                        hacer
                        tu experiencia con la alcaldía lo más eficiente y sencilla posible.
                        <br><br>¡Bienvenido a un nuevo nivel de agendamiento con la alcaldía!
                    </p>
                </div>
            </div>
        @endguest

        <footer>
            <p>© 2023 Registro de citas. Todos los derechos reservados.</p>
        </footer>
    @endsection


</body>

</html>
