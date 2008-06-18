<?php
// $Id: admin.php,v 1.18 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","Base de datos actualizada satisfactoriamente!");
define("_AM_CONFIG","Configuraci�n de los art�culos");
define("_AM_AUTOARTICLES","Art�culos autom�ticos");
define("_AM_STORYID","ID del art�culo");
define("_AM_TITLE","T�tulo");
define("_AM_TOPIC","Tema");
define("_AM_POSTER","Envi�");
define("_AM_PROGRAMMED","Fecha/Hora programada");
define("_AM_ACTION","Acci�n");
define("_AM_EDIT","Editar");
define("_AM_DELETE","Eliminar");
define("_AM_LAST10ARTS","�ltimos 10 art�culos");
define("_AM_PUBLISHED","Publicado");
define("_AM_GO","Continuar");
define("_AM_EDITARTICLE","Editar art�culo");
define("_AM_POSTNEWARTICLE","Enviar art�culo");
define("_AM_ARTPUBLISHED","Su art�culo ha sido publicado");
define("_AM_HELLO","Hola %s,");
define("_AM_YOURARTPUB","El art�culo que redact� en nuestro sitio fu� publicado.");
define("_AM_TITLEC","T�tulo: ");
define("_AM_URLC","URL: ");
define("_AM_PUBLISHEDC","Publicado: ");
define("_AM_RUSUREDEL","�Est� seguro que quiere borrar este comentario y todos los relacionados?");
define("_AM_YES","Si");
define("_AM_NO","No");
define("_AM_INTROTEXT","Introducci�n");
define("_AM_EXTEXT","Texto extendido");
define("_AM_ALLOWEDHTML","HTML permitido:");
define("_AM_DISAMILEY","Desactivar caritas");
define("_AM_DISHTML","Desactivar HTML");
define("_AM_APPROVE","Aprobar");
define("_AM_MOVETOTOP","Mover esta historia al tope");
define("_AM_CHANGEDATETIME","Cambiar la Fecha/Hora de publicaci�n");
define("_AM_NOWSETTIME","Est� ahora fijada a: %s");
define("_AM_CURRENTTIME","Fecha actual: %s");
define("_AM_SETDATETIME","Fecha/Hora de publicaci�n");
define("_AM_MONTHC","Mes:");
define("_AM_DAYC","D�a:");
define("_AM_YEARC","A�o:");
define("_AM_TIMEC","Hora:");
define("_AM_PREVIEW","Previsualizar");
define("_AM_SAVE","Publicar");
define("_AM_PUBINHOME","Publicar en el inicio");
define("_AM_ADD","Agregar");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","Agregar un tema principal");
define("_AM_TOPICNAME","Nombre del tema");
// Warning, changed from 40 to 255 characters.
define("_AM_MAX40CHAR","(m�x: 255 caracteres)");
define("_AM_TOPICIMG","Imagen del tema");
define("_AM_IMGNAEXLOC","Nombre de la imagen + extensi�n localizada en %s");
define("_AM_FEXAMPLE","por ejemplo: juegos.gif");
define("_AM_ADDSUBTOPIC","Agregar un subtema");
define("_AM_IN","en");
define("_AM_MODIFYTOPIC","Modificar tema");
define("_AM_MODIFY","Modificar");
define("_AM_PARENTTOPIC","Tema raiz");
define("_AM_SAVECHANGE","Guardar cambios");
define("_AM_DEL","Borrar");
define("_AM_CANCEL","Cancelar");
define("_AM_WAYSYWTDTTAL","Advertencia: �Est� seguro que quiere borrar este tema y todas sus historias y comentarios?");


// Added in Beta6
define("_AM_TOPICSMNGR","Gestor de temas");
define("_AM_PEARTICLES","Enviar/Editar art�culos");
define("_AM_NEWSUB","Nuevos envios");
define("_AM_POSTED","Enviado");
define("_AM_GENERALCONF","Configuraci�n general");

// Added in RC2
define("_AM_TOPICDISPLAY","Mostrar imagen del tema");
define("_AM_TOPICALIGN","Posici�n");
define("_AM_RIGHT","Derecha");
define("_AM_LEFT","Izquierda");

define("_AM_EXPARTS","Articulos expirados");
define("_AM_EXPIRED","Expirado");
define("_AM_CHANGEEXPDATETIME","Cambiar la Fecha/Hora de expiraci�n");
define("_AM_SETEXPDATETIME","Fecha/Hora de expiraci�n");
define("_AM_NOWSETEXPTIME","Est� ahora fijada a: %s");

// Added in RC3
define("_AM_ERRORTOPICNAME", "Debe ingresar un nombre de tema.");
define("_AM_EMPTYNODELETE", "Nada que borrar.");

// Added 240304 (Mithrandir)
define('_AM_GROUPPERM', 'Administrar permisos');
define('_AM_SELFILE','Archivo adjunto');

// Added by Herv�
define('_AM_UPLOAD_DBERROR_SAVE','Error mientras se adjuntaba el archivo al documento.');
define('_AM_UPLOAD_ERROR','Error mientras se sub�a el archivo');
define('_AM_UPLOAD_ATTACHFILE','archivo(s) adjunto(s)');
define('_AM_APPROVEFORM', 'Permisos de aprobaci�n');
define('_AM_SUBMITFORM', 'Permisos de env�o');
define('_AM_VIEWFORM', 'Permisos de acceso');
define('_AM_APPROVEFORM_DESC', 'Seleccione cuales grupos podr�n aprobar art�culos.');
define('_AM_SUBMITFORM_DESC', 'Seleccione cuales grupos podr�n enviar art�culos.');
define('_AM_VIEWFORM_DESC', 'Seleccione cuales grupos podr�n ver art�culos.');
define('_AM_DELETE_SELFILES', 'Eliminar el archivo seleccionado');
define('_AM_TOPIC_PICTURE', 'Subir imagen');
define('_AM_UPLOAD_WARNING', '<b>Atenci�n, no olvide aplicar permiso de escritura al directorio : %s</b>');

define('_AM_NEWS_UPGRADECOMPLETE', 'Actualizaci�n completada.');
define('_AM_NEWS_UPDATEMODULE', 'Actualizar plantillas del m�dulo y bloques.');
define('_AM_NEWS_UPGRADE', 'Actualizar');
define('_AM_NEWS_UPGRADEFAILED', 'Fall� la actualizaci�n.');
define('_AM_ADD_TOPIC','Agregar un tema');
define('_AM_ADD_TOPIC_ERROR','Error, el tema ya existe.');
define('_AM_ADD_TOPIC_ERROR1','ERROR: No puede seleccionar este tema como tema raiz.');
define('_AM_SUB_MENU','Publicar este tema como un submen�');
define('_AM_SUB_MENU_YESNO','Submen�');
define('_AM_HITS', 'Clics');
define('_AM_CREATED', 'Creado');

define('_AM_TOPIC_DESCR', "Descripci�n del tema");
define('_AM_USERS_LIST', "Lista de usuarios");
define('_AM_PUBLISH_FRONTPAGE', "Publicar en la p�gina de inicio");
define('_AM_NEWS_UPGRADEFAILED1', 'Imposible crear la tabla stories_files.');
define('_AM_NEWS_UPGRADEFAILED2', "Imposible cambiar la longitud del t�tulo en el tema.");
define('_AM_NEWS_UPGRADEFAILED21', "Imposible agregar los nuevos campos a la tabla de temas.");
define('_AM_NEWS_UPGRADEFAILED3', 'Imposible crear la tabla stories_votedata.');
define('_AM_NEWS_UPGRADEFAILED4', "Imposible crear los campos 'rating' y 'votes' para la tabla 'story'.");
define('_AM_NEWS_UPGRADEFAILED0', "Por favor anote los mensajes y trate de corregir los errores con phpMyadmin y las definiciones sql disponibles en el directorio 'sql' del m�dulo news.");
define('_AM_NEWS_UPGR_ACCESS_ERROR',"Error, para lanzar el script de actualizaci�n, debe tener permisos de administrador en este m�dulo.");
define('_AM_NEWS_PRUNE_BEFORE',"Purgar art�culos publicados antes de");
define('_AM_NEWS_PRUNE_EXPIREDONLY',"Remover solo los art�culos expirados");
define('_AM_NEWS_PRUNE_CONFIRM',"Peligro, se dispone a eliminar permanentemente los art�culos publicados antes del %s .<br />Esta acci�n es irreversible y ser�n eliminados %s art�culos.<br />�Est� seguro de querer continuar?");
define('_AM_NEWS_PRUNE_TOPICS',"Limitar a los siguientes temas");
define('_AM_NEWS_PRUNENEWS', 'Purgar art�culos');
define('_AM_NEWS_EXPORT_NEWS', 'Exportar art�culos');
define('_AM_NEWS_EXPORT_NOTHING', "Lo siento pero no hay nada que exportar, por favor verifique los criterios.");
define('_AM_NEWS_PRUNE_DELETED', '%d art�culos han sido eliminados.');
define('_AM_NEWS_PERM_WARNING', '<h3><u>Atenci�n</u>:<br />El bot�n de env�o de cada formulario es independiente de los otros, por lo que necesitar� hacer un env�o de datos en cada uno de los 3 formularios y con su bot�n correspondiente.</h3>');
define('_AM_NEWS_EXPORT_BETWEEN', 'Exportar art�culos publicados entre');
define('_AM_NEWS_EXPORT_AND', ' y ');
define('_AM_NEWS_EXPORT_PRUNE_DSC', "Si no selecciona ninguno ser�n utilizados todos los temas<br/> por el contrario, solo los temas seleccionados ser�n usados.");
define('_AM_NEWS_EXPORT_INCTOPICS', 'Incluir definiciones de temas');
define('_AM_NEWS_EXPORT_ERROR', 'Error al intentar crear el archivo %s. Operaci�n detenida.');
define('_AM_NEWS_EXPORT_READY', "Su archivo de exportaci�n xml est� listo para ser descargado. <br /><a href='%s'>Haga clic en este enlace para descargarlo</a>.<br />No olvide <a href='%s'>eliminarlo</a> una vez descargado.");
define('_AM_NEWS_RSS_URL', "URL de la alimentaci�n RSS");
define('_AM_NEWS_NEWSLETTER', "Bolet�n de art�culos");
define('_AM_NEWS_NEWSLETTER_BETWEEN', 'Seleccionar art�culos publicados entre');
define('_AM_NEWS_NEWSLETTER_READY', "Su bolet�n de art�culos est� listo para ser descargado. <br /><a href='%s'>Haga clic en este enlace para descargarlo</a>.<br />No olvide <a href='%s'>eliminarlo</a> una vez descargado.");
define('_AM_NEWS_DELETED_OK',"Archivo eliminado satisfactoriamente.");
define('_AM_NEWS_DELETED_PB',"Un error ha ocurrido al intentar eliminar el archivo.");
define('_AM_NEWS_STATS0','Estad�sticas de los art�culos');
define('_AM_NEWS_STATS','Estad�sticas');
define('_AM_NEWS_STATS1','Redactores �nicos');
define('_AM_NEWS_STATS2','Totales');
define('_AM_NEWS_STATS3','Estad�sticas de los art�culos');
define('_AM_NEWS_STATS4','Art�culos m�s leidos');
define('_AM_NEWS_STATS5','Art�culos menos leidos');
define('_AM_NEWS_STATS6','Art�culos m�s valorados');
define('_AM_NEWS_STATS7','Redactores m�s leidos');
define('_AM_NEWS_STATS8','Redactores m�s valorados');
define('_AM_NEWS_STATS9','Mejores colaboradores');
define('_AM_NEWS_STATS10','Estad�sticas de los redactores');
define('_AM_NEWS_STATS11',"Total art�culos");
define('_AM_NEWS_HELP',"Ayuda");
define("_AM_NEWS_MODULEADMIN","Administraci�n del m�dulo");
define("_AM_NEWS_GENERALSET", "Ajustes generales" );
define('_AM_NEWS_GOTOMOD','Ir al m�dulo');
define('_AM_NEWS_NOTHING',"Lo siento pero no hay nada que descargar, revise los criterios.");
define('_AM_NEWS_NOTHING_PRUNE',"Lo siento pero no hay nada que purgar, revise los criterios.");
define('_AM_NEWS_TOPIC_COLOR',"Color del tema");
define('_AM_NEWS_COLOR',"Color");
define('_AM_NEWS_REMOVE_BR',"Convertir la etiqueta html &lt;br&gt; o &lt;br /&gt;, en una nueva l�nea");
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE',"<a href='upgrade.php'><font color='#FF0000'>Por favor, actualice el m�dulo.</font></a>");

// Added in verisn 1.50
define('_AM_NEWS_NEWSLETTER_HEADER', "Cabecera");
define('_AM_NEWS_NEWSLETTER_FOOTER', "Pie de Pag.");
define('_AM_NEWS_NEWSLETTER_HTML_TAGS', "�Eliminar etiquetas html?");
define('_AM_NEWS_VERIFY_TABLES','Mantenimiento de tablas');
define('_AM_NEWS_METAGEN',"Metagen");
define('_AM_NEWS_METAGEN_DESC',"Metagen es un sistema que le ayudar� a indexar su p�gina mejor en los buscadores.<br />Si no indica ninguno de los campos (palabras clave y descripci�n) el m�dulo los a�adir� autom�ticamente.");
define('_AM_NEWS_BLACKLIST',"Lista negra");
define('_AM_NEWS_BLACKLIST_DESC',"Las palabras que aparezcan en la lista no podr�n ser usadas como palabras clave (keywords)");
define('_AM_NEWS_BLACKLIST_ADD',"A�adir");
define('_AM_NEWS_BLACKLIST_ADD_DSC',"Indique las palabras que ser�n a�adidas a la lista<br />(una palabra por l�nea)");
define('_AM_NEWS_META_KEYWORDS_CNT',"N�mero m�ximo de palabras clave para la autogeneraci�n");
define('_AM_NEWS_META_KEYWORDS_ORDER',"Orden de las palabras clave");
define('_AM_NEWS_META_KEYWORDS_INTEXT',"Crearlas seg�n el orden en el que aparezcan en el texto");
define('_AM_NEWS_META_KEYWORDS_FREQ1',"Orden de frecuencia de las palabras");
define('_AM_NEWS_META_KEYWORDS_FREQ2',"Invertir el orden de la frecuencia de las palabras");
?>