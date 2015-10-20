<?php /* Smarty version 3.1.27, created on 2015-10-20 20:41:02
         compiled from "C:\xampp\htdocs\Integrador\views\registro\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1745356268abe0303a8_93557529%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4625eaea00b39931608d25e4de16d7cdd93a6b9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Integrador\\views\\registro\\index.tpl',
      1 => 1445366402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1745356268abe0303a8_93557529',
  'variables' => 
  array (
    'datos' => 0,
    'i' => 0,
    'educa' => 0,
    'preferencias' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56268abe2e2707_79594964',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56268abe2e2707_79594964')) {
function content_56268abe2e2707_79594964 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\Integrador\\libs\\smarty\\libs\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '1745356268abe0303a8_93557529';
?>
<form name="form1" method="post" action="">
    <div id="reg_principal">
        <fieldset class="field_reg" id="info_personal">
            <legend><h1>Información Personal</h1></legend>
            <div class="form-group">
                <label>Nombre:</label>
                <input class="form-control" type="text" name="nombre" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
if ($_smarty_tpl->tpl_vars['datos']->value['nombre'] != '') {?>value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
"  <?php }
}?> placeholder="Nombres"/>
            </div>
            <div class="form-group">
                <label>Apellido:</label>
                <input class="form-control" type="text" name="apellido" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
if ($_smarty_tpl->tpl_vars['datos']->value['apellido'] != '') {?>value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['apellido'];?>
"  <?php }
}?> placeholder="Apellidos" />
            </div>
            <div class="form-group">
                <label>Fecha de Nacimiento:</label>
                <input type="date" class="form-control" name="fecha_nac" min="1900-12-31" max="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {?> value="<?php if ($_smarty_tpl->tpl_vars['datos']->value['fecha_nac'] != '') {
echo $_smarty_tpl->tpl_vars['datos']->value['fecha_nac'];
} else {
echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
"<?php }
}?>/>
            </div>
            <div class="form-group">
                <label>E-mail:</label>
                <input class="form-control" type="text" name="email" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
if ($_smarty_tpl->tpl_vars['datos']->value['email'] != '') {?>value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['email'];?>
"  <?php }
}?> placeholder="Correo electronico" />
            </div>
            <div class="form-group">
                <label>Nombre de usuario:</label>
                <input class="form-control" type="text" name="nomb_usuario" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
if ($_smarty_tpl->tpl_vars['datos']->value['nomb_usuario'] != '') {?>value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nomb_usuario'];?>
"  <?php }
}?> placeholder="Nombre de usuario unico" />
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input class="form-control" type="password" name="pass" placeholder="Contraseña" />
            </div>
            <div class="form-group">
                <label>Confirmar Password:</label>
                <input class="form-control" type="password" name="confirmar" placeholder="Reescribe la contraseña" />
            </div>
            <div class="form-group">
                <label>Rol</label>
                <input type="checkbox" name="rol[]" value="2">Estudiante<br>
                <input type="checkbox" name="rol[]" value="3">Profesor<br>
            </div>
        </fieldset>
        </div>
        <input type="submit" onclick="this.form.action = '?form=1'" class="tests_reg" value="Guardar Información"/>
        <!--<fieldset class="field_reg" id="info_educativa">
            <legend><h1>Información Educativa</h1></legend>
            <div class="form-group">
                <label>Nivel Educativo:</label>
                <select class="form-control" name="nivel_ed" >
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (0) : 0-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <option name="level[]" value="<?php echo $_smarty_tpl->tpl_vars['educa']->value[$_smarty_tpl->tpl_vars['i']->value]['use_id_level'];?>
"><?php echo $_smarty_tpl->tpl_vars['educa']->value[$_smarty_tpl->tpl_vars['i']->value]['use_level'];?>
</option>
                    <?php }} ?>
                </select>
            </div>
            <div class="form-group">
                <label>Preferencias</label>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (0) : 0-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                    <input type="checkbox" name="pref[]" value="<?php echo $_smarty_tpl->tpl_vars['preferencias']->value[$_smarty_tpl->tpl_vars['i']->value]['use_pre_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['preferencias']->value[$_smarty_tpl->tpl_vars['i']->value]['use_pre_preferencia'];?>
<br>
                <?php }} ?>
            </div>
            <div class="form-group">
                <label>¿Presenta algún tipo de necesidad especial?</label>
                <input type="radio" class="ver_need" name="need" value="Si" />Si
                <input type="radio" class="ver_need" name="need" value="No" />No
                <input type="button" class="tests_reg" id="test_need" value="Realizar Test NEED"/>
            </div>
            <div class="form-group">
                <label>Estilo de Aprendizaje</label>
                <div id="est_test">
                    <div class="lado">
                        Realice este test para conocer su estilo de aprendizaje.
                        Puede desarrollarlo ahora mismo o en el momento que usted lo requiera.
                    </div>
                    <div class="lado" id="d_spc">
                        <input type="button" class="tests_reg" id="test_ls" value="Realizar Test"/>
                    </div>
                </div>
            </div>
        </fieldset>
        <input type="submit" onclick="this.form.action = '?form=1'" class="tests_reg" value="Guardar Información"/>
    </div>
    <div id="reg_need">
        <fieldset class="field_reg">
            <legend>Test para Personas con Necesidades Especiales</legend>
            <p>
                Con el fin de ofrecer Objetos de Aprendizaje más acorde a sus necesidades, 
                se aconseja realizar el siguiente test. Se recomienda contar con el apoyo de un acompañante
            </p>
            <div class="form-group">
                <label>¿Qué tipo de necesidad especial presenta?</label>
                <input type="checkbox" id="tipo_v" name="tipo_need[]" value="1">Visual<br>
                <input type="checkbox" id="tipo_a" name="tipo_need[]" value="2">Auditivo<br>
                <input type="checkbox" id="tipo_m" name="tipo_need[]" value="3">Motriz<br>
                <input type="checkbox" id="tipo_c" name="tipo_need[]" value="4">Cognitiva<br>
            </div>
            <div class="form-group" id="form_visual">
                Preguntas Visual
            </div>
            <div class="form-group" id="form_auditivo">
                Preguntas Auditivo
            </div>
            <div class="form-group" id="form_motriz">
                Preguntas Motriz
            </div>
            <div class="form-group" id="form_cognitiva">
                Preguntas Cognitiva
            </div>
        </fieldset>
    </div>
    <div id="reg_test">
            <fieldset class="field_reg">
                <legend>Test de Estilos de Aprendizaje</legend>
                <p>
                    Este cuestionario tiene como propósito saber algo acerca de sus preferencias sobre cómo 
                    trabaja con información. Usted tendrá un estilo de aprendizaje preferido y una parte de ese 
                    Estilo de Aprendizaje es su preferencia para capturar, procesar y entregar ideas e información. 
                    Escoja las respuestas que mejor explican su preferencia. Seleccione mas de una respuesta si 
                    una respuesta simple no encaja con su percepción (Preguntas de la 1 a la 13). De la pregunta 
                    14 a la pregunta 24 seleccione una sola respuesta. Deje en blanco toda pregunta que no se aplique.
                </p>
                <table>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    1. Usted está por darle instrucciones a una persona que está junto a usted, esa persona es 
                                    de fuera, no conoce la ciudad, esta alojada en un hotel y quedan en encontrarse en otro lugar 
                                    más tarde. Usted que haría?
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="1" value="V"/> Dibujo un mapa de papel.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="1" value="A"/> Le digo cómo llegar.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="1" value="R"/> Le escribo las instrucciones (sin dibujar un mapa).</td>
                        </tr>
                        <tr>                        
                            <td><input type="radio" name="1" value="K"/> La busco y recojo en el hotel.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    2. Usted no está seguro como se deletrea la palabra tracendente o trascendente. Que haría usted.
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="2" value="R"/>Busco la palabra en un diccionario.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="2" value="V"/>Veo la palabra en mi mente y escojo según como la veo.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="2" value="A"/>La repito en mi mente.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="2" value="K"/>Escribo ambas versiones en un papel y escojo una.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    3. Usted acaba de recibir una copia de un itinerario para 
                                    un viaje mundial. Esto le interesa a un/a amigo/o. Usted que haría?
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="3" value="A"/>Hablarle por teléfono inmediatamente y contarle del viaje.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="3" value="R"/>Enviarle una copia del itinerario impreso.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="3" value="V"/>Mostrarle un mapa del mundo.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="3" value="K"/>Compartir que planea hacer en cada lugar que visite.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    4. Usted esta por cocinar algo muy especial para su familia. Usted.
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="4" value="K"/>Cocina algo familiar que no necesite receta o instrucciones.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="4" value="V"/>Da una vista a través de un recetario por ideas de las fotos.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="4" value="R"/>Busca un libro de recetas especifico donde hay una buena receta.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    5. Un grupo de turistas le han sido asignados para que 
                                    usted les explique del Area Nacional Protegida. Usted,
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="5" value="K"/>Organiza un viaje por el lugar.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="5" value="V"/>Les muestra fotos y transparencias.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="5" value="R"/>Les da un folleto o libro sobre las Areas Nacionales Protegidas.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="5" value="A"/>Les da una platica sobre las Areas Nacionales Protegidas.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    6. Usted está por comprarse un nuevo estéreo. Que otro 
                                    factor, además del precio, influirá su decisión
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="6" value="A"/>El vendedor le dice lo que usted quiere saber.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="6" value="R"/>Leyendo los detalles sobre el estéreo.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="6" value="K"/>Jugando con los controles y escuchándolo.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="6" value="V"/>Luce muy bueno y a la moda (padre, cool, chido).</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    7. Recuerde un momento en su vida en que usted aprendió a hacer 
                                    algo como a jugar un nuevo juego de cartas. Trate de evitar escoger 
                                    una destreza física, como andar en bicicleta. Cómo aprendió usted mejor?
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="7" value="V"/>Pistas visuales—fotos, diagramas, cuadros...</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="7" value="R"/>Instrucciones escritas</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="7" value="A"/>Escuchando a alguien que se lo explicaba.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="7" value="K"/>Haciéndolo o probándolo.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    8. Si usted tiene un problema en un ojo, usted prefiere que el doctor
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="8" value="A"/>Le diga que anda mal.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="8" value="V"/>Le muestre un diagrama de que está mal.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="8" value="R"/>Use un modelo para enseñarle qué está mal.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    9. Usted está apunto de aprender un nuevo programa en la computadora. Usted,
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="9" value="K"/>Se sienta frente al teclado y empieza a experimentar con el programa.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="9" value="R"/>Lee el manual que viene con el programa.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="9" value="A"/>Telefonea a un amigo y le hace preguntas sobre el programa.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    10. Usted va en su coche, a otra ciudad, en donde tiene amigos 
                                    que quiere visitar. Usted quisiera que ellos:
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="10" value="V"/>Le dibujen un mapa en un papel.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="10" value="A"/>Le den las instrucciones para llegar.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="10" value="R"/>Escriban las instrucciones (sin el mapa)</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="10" value="K"/>Lo esperen a usted en la gasolinera de la entrada a la ciudad.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    11. Aparte del precio, que influirá más su decisión de compra de un libro de texto particular?
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="11" value="K"/>Usted ha usado una copia antes.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="11" value="A"/>Un amigo le ha platicado acerca del libro.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="11" value="R"/>Una lectura rápida de algunas partes del libro.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="11" value="V"/>El diseño de la pasta del libro es atractiva.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    12. Una nueva película ha llegado a los cines de la ciudad. Que influirá 
                                    mas en la decisión de ir al cine o no—asumiendo que tiene el dinero para los boletos
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="12" value="A"/>Usted oyó en el radio acerca de la película.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="12" value="R"/>Usted Leyó una reseña de la película.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="12" value="V"/>Usted vió una reseña en la televisión o en el cine.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    13. Usted prefiere que un profesor/maestro o conferencista use:
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="13" value="R"/>Un libro de texto, copias, lecturas.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="13" value="V"/>Un diagrama de flujo, cuadros, gráficos, dispositivas.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="13" value=">K"/>Sesiones prácticas, laboratorio, visitas, viajes de campo.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="13" value="A"/>Preguntas y respuestas, charlas, grupos de discusión u oradores invitados</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    14. Tengo tendencia a:
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="49" value="S"/>Entender los detalles de un tema pero no ver claramente su estructura completa.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="49" value="G"/>Entender la estructura completa pero no ver claramente los detalles.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    15. Una vez que entiendo:
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="50" value="G"/>Todas las partes, entiendo el total.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="50" value="S"/>El total de algo, entiendo como encajan sus partes.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    16. Cuando resuelvo problemas de matemáticas:
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="51" value="S"/>Generalmente trabajo sobre las soluciones con un paso a la vez.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="51" value="G"/>Frecuentemente sé cuales son las soluciones, pero luego tengo dificultad  para imaginarme los pasos para llegar a ellas.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    17. Cuando estoy analizando un cuento o una novela:
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="52" value="G"/>Pienso en los incidentes y trato de acomodarlos para configurar los temas.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="52" value="S"/>Me doy cuenta de cuales son los temas cuando termino de leer y luego tengo que regresar y encontrar los incidentes que los demuestran.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    18. Es más importante para mí que un profesor:
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="53" value="S"/>Exponga el material en pasos secuenciales claros.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="53" value="G"/>Me dé un panorama general y relacione el material con otros temas.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    19. Aprendo:
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="54" value="S"/>A un paso constante. Si estudio con ahínco consigo lo que deseo.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="54" value="G"/>En inicios y pausas. Me llego a confundir y súbitamente lo entiendo.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    20. Cuando me enfrento a un cuerpo de información:
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="55" value="S"/> Me concentro en los detalles y pierdo de vista el total de la misma.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="55" value="G"/>Trato de entender el todo antes de ir a los detalles.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    21. Cuando escribo un trabajo, es más probable que:
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="56" value="G"/>Lo haga (piense o escriba) desde el principio y avance.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="56" value="S"/>Lo haga (piense o escriba) en diferentes partes y luego las ordene.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    22. Cuando estoy aprendiendo un tema, prefiero:
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="57" value="S"/>Mantenerme concentrado en ese tema, aprendiendo lo más que pueda de él.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="57" value="G"/>Hacer conexiones entre ese tema y temas relacionados.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    23. Algunos profesores inician sus clases haciendo un 
                                    bosquejo de lo que enseñarán. Esos bosquejos son:
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="58" value="S"/>Algo útiles para mí.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="58" value="G"/>Muy útiles para mí.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                    <div class="form-group">
                        <tr>
                            <td>
                                <label>
                                    24. Cuando resuelvo problemas en grupo, es más probable que yo:
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="59" value="S"/>Piense en los pasos para la solución de los problemas.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="59" value="G"/>Piense en las posibles consecuencias o aplicaciones de la solución en un amplio rango de campos.</td>
                        </tr>
                    </div>
                    <tr><td>&nbsp;</td></tr>
                </table>
            </fieldset>
            <input type="submit" onclick="this.form.action = '?form=2'" class="tests_reg" value="Guardar"/>
    </div>-->
            <div id="hh"></div>
            <?php echo '<script'; ?>
 type="text/javascript">
                <?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {?>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 59+1 - (1) : 1-(59)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (array_key_exists($_smarty_tpl->tpl_vars['i']->value,$_smarty_tpl->tpl_vars['datos']->value)) {?>
                            var preg = document.getElementsByName(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
);
                            for(var j=0; j<preg.length; j++){
                                if(preg[j].value == "<?php echo $_smarty_tpl->tpl_vars['datos']->value[$_smarty_tpl->tpl_vars['i']->value];?>
"){
                                    preg[j].checked = true;
                                    //alert(preg[j].value);
                                }
                            }
                        <?php }?>
                    <?php }} ?>
                <?php }?>
            <?php echo '</script'; ?>
>
</form>
    <!--<input type="button" class="tests_reg" id="cancelar" value="Cancelar" />--><?php }
}
?>