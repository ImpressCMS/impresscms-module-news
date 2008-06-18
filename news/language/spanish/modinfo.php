<?php
// $Id: modinfo.php,v 1.21 2004/09/01 17:48:07 hthouzard Exp $
// Module Info

// The name of this module
define('_MI_NEWS_NAME','Art�culos');

// A brief description of this module
define('_MI_NEWS_DESC','Crear una secci�n de art�culos, donde los usuarios puedan enviar los suyos propios y comentarlos.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1','Temas');
define('_MI_NEWS_BNAME3','Art�culo del d�a');
define('_MI_NEWS_BNAME4','Art�culos populares');
define('_MI_NEWS_BNAME5','Art�culos recientes');
define('_MI_NEWS_BNAME6','Moderar art�culos');
define('_MI_NEWS_BNAME7','Navegar por los temas');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1','Enviar art�culo');
define('_MI_NEWS_SMNAME2','Historial');

// Names of admin menu items
define('_MI_NEWS_ADMENU2','Gestionar temas');
define('_MI_NEWS_ADMENU3','Enviar/Editar art�culos');
define('_MI_NEWS_GROUPPERMS', 'Administrar permisos');
// Added by Herv� for prune option
define('_MI_NEWS_PRUNENEWS', 'Purgar art�culos');
// Added by Herv�
define('_MI_NEWS_EXPORT', 'Exportar art�culos');

// Title of config items
define('_MI_STORYHOME', 'Seleccione el n�mero de art�culos a mostrar en la p�gina principal');
define('_MI_NOTIFYSUBMIT', 'Seleccione SI para enviar un mensaje de notificaci�n al administrador acerca de nuevos env�os');
define('_MI_DISPLAYNAV', 'Seleccione SI para mostrar la barra de navegaci�n al tope de cada p�gina de art�culos');
define('_MI_AUTOAPPROVE','Auto aprobar los nuevos art�culos sin la intervenci�n del administrador');
define("_MI_ALLOWEDSUBMITGROUPS", "Grupos que pueden enviar noticias");
define("_MI_ALLOWEDAPPROVEGROUPS", "Grupos que pueden aprobar noticias");
define("_MI_NEWSDISPLAY", "Aspecto de las noticias");
define("_MI_NAMEDISPLAY","Nombre del autor");
define("_MI_COLUMNMODE","Columnas");
define("_MI_STORYCOUNTADMIN","N�mero de art�culos nuevos que se mostrar�n en el �rea de administraci�n: ");
define('_MI_UPLOADFILESIZE', 'T�ma�o m�ximo permitido del contenido a subir(en KB) 1048576 = 1 Meg');
define("_MI_UPLOADGROUPS","Grupos autorizados para subir archivos");


// Description of each config items
define('_MI_STORYHOMEDSC', '');
define('_MI_NOTIFYSUBMITDSC', '');
define('_MI_DISPLAYNAVDSC', '');
define('_MI_AUTOAPPROVEDSC', '');
define("_MI_ALLOWEDSUBMITGROUPSDESC", "Los grupos seleccionados podr�n enviar art�culos.");
define("_MI_ALLOWEDAPPROVEGROUPSDESC", "Los grupos seleccionados podr�n aprobar art�culos.");
define("_MI_NEWSDISPLAYDESC", "El modo cl�sico mostrar� los documentos ordenados por fecha de publicaci�n. Las noticias por tema ser�n agrupadas por tema con la �ltima noticia completa y las otras como art�culos.");
define('_MI_ADISPLAYNAMEDSC', 'Elija c�mo mostrar el nombre del redactor');
define("_MI_COLUMNMODE_DESC","Puede elegir qu� n�mero de columnas habr� en la lista de art�culos mostrada.");
define("_MI_STORYCOUNTADMIN_DESC","");
define("_MI_UPLOADFILESIZE_DESC","");
define("_MI_UPLOADGROUPS_DESC","Elija qu� grupos ser�n autorizados para subir archivos al servidor.");

// Name of config item values
define("_MI_NEWSCLASSIC", "Cl�sico");
define("_MI_NEWSBYTOPIC", "Por tema");
define("_MI_DISPLAYNAME1", "Apodo");
define("_MI_DISPLAYNAME2", "Nombre real");
define("_MI_DISPLAYNAME3", "No mostrar redactor");
define("_MI_UPLOAD_GROUP1","Quienes env�an y aprueban");
define("_MI_UPLOAD_GROUP2","S�lo los que aprueban");
define("_MI_UPLOAD_GROUP3","Deshabilitar la subida de archivos");

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY', 'Global');
define('_MI_NEWS_GLOBAL_NOTIFYDSC', 'Opciones globales de notificaci�n.');

define('_MI_NEWS_STORY_NOTIFY', 'Art�culo');
define('_MI_NEWS_STORY_NOTIFYDSC', 'Opciones de notificaci�n que se aplican al art�culo actual.');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nuevo tema');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notificarme cuando un nuevo tema es creado.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Recibir notificaci�n cuando un nuevo tema es creado.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo tema.');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY', 'Nuevo art�culo enviado');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP', 'Notificarme cuando cualquier nuevo art�culo es enviado (aguardando aprobaci�n).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC', 'Recibir una notificaci�n cuando cualquier nuevo art�culo es enviado  (aguardando aprobaci�n).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo art�culo enviado.');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY', 'Nuevo art�culo');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP', 'Notificarme cuando cualquier nuevo art�culo es publicado.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC', 'Recibir una notificaci�n cuando cualquier nuevo art�culo es publicado.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo art�culo publicado.');

define('_MI_NEWS_STORY_APPROVE_NOTIFY', 'Art�culo aprobado');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP', 'Notificarme cuando este art�culo sea aprobado.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC', 'Recibir una notificaci�n cuando este art�culo sea aprobado.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Art�culo aprobado.');

define('_MI_RESTRICTINDEX', 'Restringir los temas a la p�gina de Inicio');
define('_MI_RESTRICTINDEXDSC', 'Si es activado, los usuarios s�lo podr�n ver el contenido de las noticias listado en los temas.');

define('_MI_NEWSBYTHISAUTHOR', 'Art�culos del mismo redactor');
define('_MI_NEWSBYTHISAUTHORDSC', 'Si se selecciona, un enlace ser� mostrado para ver los dem�s art�culos publicados por el redactor.');

define('_MI_NEWS_PREVNEX_LINK','Mostrar enlaces de navegaci�n entre art�culo anterior y siguiente');
define('_MI_NEWS_PREVNEX_LINK_DESC','Si es activada esta opci�n, se mostrar� al final de cada art�culo unos enlaces de navegaci�n \'Art�culo anterior\' y \'Art�culo siguiente\', el criterio usado para el orden es la fecha de publicaci�n.');
define('_MI_NEWS_SUMMARY_SHOW','Mostrar tabla de sumario');
define('_MI_NEWS_SUMMARY_SHOW_DESC','Si es activada esta opci�n, se mostrar� al final de cada art�culo, una tabla con una serie de enlaces a los art�culos m�s recientes.');
define('_MI_NEWS_AUTHOR_EDIT','Permitir a los redactores editar sus env�os');
define('_MI_NEWS_AUTHOR_EDIT_DESC','Mediante esta opci�n, se autoriza a los redactores para que puedan editar sus propios art�culos.');
define('_MI_NEWS_RATE_NEWS','Permitir a los usuarios valorar art�culos');
define('_MI_NEWS_TOPICS_RSS','Habilitar RSS en los temas');
define('_MI_NEWS_TOPICS_RSS_DESC',"Si es activada esta opci�n, los contenidos de los temas ser�n accesibles por RSS.");
define('_MI_NEWS_DATEFORMAT', "Formato de la fecha");
define('_MI_NEWS_DATEFORMAT_DESC',"Por favor consulte la <a href='http://fr.php.net/manual/es/function.date.php' target='_blank'>documentaci�n Php</a>, para obtener m�s informaci�n sobre como configurar el formato de fecha y hora.<br /> Nota: Si no define ning�n formato, se usar� el formato por defecto.");
define('_MI_NEWS_META_DATA', "Habilitar inclusi�n de meta datos");
define('_MI_NEWS_META_DATA_DESC', "Si es activada esta opci�n, lso usuarios con permisos para enviar art�culos podr�n incluir datos en la etiqueta Meta, estos son: metakeywords y metadescription");
define('_MI_NEWS_BNAME8','Art�culos aleatorios');
define('_MI_NEWS_NEWSLETTER','Bolet�n de art�culos');
define('_MI_NEWS_STATS','Estad�sticas');
define("_MI_NEWS_FORM_OPTIONS","Tipo de editor");
define("_MI_NEWS_FORM_COMPACT","Compacto");
define("_MI_NEWS_FORM_DHTML","DHTML");
define("_MI_NEWS_FORM_SPAW","Editor Spaw");
define("_MI_NEWS_FORM_HTMLAREA","Editor HtmlArea");
define("_MI_NEWS_FORM_FCK","Editor FCK");
define("_MI_NEWS_FORM_KOIVI","Editor Koivi");
define("_MI_NEWS_FORM_OPTIONS_DESC","Seleccione el editor que desea usar. Para una instalaci�n simple o si no ha instalado ning�n editor opcional, solo funcionar� el DHTML o el Compacto.");
define("_MI_NEWS_KEYWORDS_HIGH","Usar resaltado de texto");
define("_MI_NEWS_KEYWORDS_HIGH_DESC","Si es activada esta opci�n, el texto que ha sido buscado en la b�squeda global de la p�gina saldr� resaltado en los art�culos al consultar los resultados.");
define("_MI_NEWS_HIGH_COLOR","Color del resaltado");
define("_MI_NEWS_HIGH_COLOR_DES","Solo ser� usado si ha seleccionado usar el resaltado de texto.");
define("_MI_NEWS_INFOTIPS","Longitud de las vi�etas de informaci�n");
define("_MI_NEWS_INFOTIPS_DES","Si es activada esta opci�n, los enlaces relativos a los art�culos mostrar�n, al poner el rat�n encima, los primeros n caracteres del art�culo en una vi�eta. Si pone 0 como valor, las vi�etas de informaci�n no mostrar�n nada.");
define("_MI_NEWS_SITE_NAVBAR","Usar barra de navegaci�n del sitio para Mozilla y Opera");
define("_MI_NEWS_SITE_NAVBAR_DESC","Si es activada esta opci�n, los visitantes de su sitio podr�n usar la barra de navegaci�n de sitios que poseen estos navegadores.");
define("_MI_NEWS_TABS_SKIN","Selecione el aspecto de las pesta�as");
define("_MI_NEWS_TABS_SKIN_DESC","Permite seleccionar el aspecto de las pesta�as en los bloques que las usan");
define("_MI_NEWS_SKIN_1","Estilo barra");
define("_MI_NEWS_SKIN_2","Estilo biselado");
define("_MI_NEWS_SKIN_3","Estilo cl�sico");
define("_MI_NEWS_SKIN_4","Estilo carpetas");
define("_MI_NEWS_SKIN_5","Estilo MacOs");
define("_MI_NEWS_SKIN_6","Estilo plano");
define("_MI_NEWS_SKIN_7","Estilo redondeado");
define("_MI_NEWS_SKIN_8","Estilo ZDnet");

// Added in version 1.50
define('_MI_NEWS_BNAME9','Archivos');
define("_MI_NEWS_FORM_TINYEDITOR","TinyEditor");
define("_MI_NEWS_FOOTNOTES","� Mostrar enlaces en la p�gina de impresi�n de los art�culos ?");
define("_MI_NEWS_DUBLINCORE","� Activar Dublin Core Metadata ?");
define("_MI_NEWS_DUBLINCORE_DSC","Para m�s informaci�n, <a hreh='http://dublincore.org/'>visite este enlace</a>");
define("_MI_NEWS_BOOKMARK_ME","� Mostrar el bloque 'Agregue este art�culo a favoritos' ?");
define("_MI_NEWS_BOOKMARK_ME_DSC","Este bloque se mantendr� visible en la p�gina del art�culo");
define("_MI_NEWS_FF_MICROFORMAT","�Activar Firefox 2 Micro Summaries ?");
define("_MI_NEWS_FF_MICROFORMAT_DSC","Para m�s informaci�n, visiste <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>esta p�gina</a>");
define("_MI_NEWS_WHOS_WHO","Qui�n es qui�n");
define("_MI_NEWS_METAGEN","Metagen");
define("_MI_NEWS_TOPICS_DIRECTORY","Directorio de Temas");
define("_MI_NEWS_ADVERTISEMENT","Publicidad");
define("_MI_NEWS_ADV_DESCR","Inserte el texto o c�digo javascript a mostrar en sus art�culos");
define("_MI_NEWS_MIME_TYPES","Introduzca los Mime Types permitidos para subir/upload (separados por l�neas)");
define("_MI_NEWS_ENHANCED_PAGENAV","� Utilizar el navegador mejorado de p�ginas ?");
define("_MI_NEWS_ENHANCED_PAGENAV_DSC","Con esta opci�n podr� separar las p�ginas con algo as� como : [pagrebreak:Page Title], los enlaces a las p�ginas son reemplazados por un men� desplegalbe. Tambi�n podr� usar [sumary] para crear un sumario autom�tico de las p�ginas");

// Added in version 1.54
define('_MI_NEWS_CATEGORY_NOTIFY','Categor�a');
define('_MI_NEWS_CATEGORY_NOTIFYDSC','Opciones de notificaci�n que se aplicar�n a la categor�a actual');

define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFY', 'Nuevo Art�culo enviado');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYCAP', 'Recibir notificaci�n sobre los futuros contenidos de la categor�a.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYDSC', 'Recibir notificaci�n sobre la publicaci�n de nuevos contenidos en esta categor�a.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo contenido a�adido');
?>