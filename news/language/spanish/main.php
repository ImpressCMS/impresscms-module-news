<?php
// $Id: main.php,v 1.9 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%		File Name index.php 		%%%%%
define("_NW_PRINTER","Versi�n imprimible");
define("_NW_SENDSTORY","Enviar a un amigo");
define("_NW_READMORE","Leer m�s...");
define("_NW_COMMENTS","Enviar comentario");
define("_NW_ONECOMMENT","1 comentario");
define("_NW_BYTESMORE","%s bytes m�s");
define("_NW_NUMCOMMENTS","%s comentarios");
define("_NW_MORERELEASES", "M�s documentos en ");


//%%%%%%		File Name submit.php		%%%%%
define("_NW_SUBMITNEWS","Enviar art�culo");
define("_NW_TITLE","T�tulo");
define("_NW_TOPIC","Tema");
define("_NW_THESCOOP","Introducci�n");
define("_NW_NOTIFYPUBLISH","Notif�carme de su publicaci�n");
define("_NW_POST","Enviar");
define("_NW_GO","OK");
define("_NW_THANKS","Gracias por su env�o."); //submission of news article

define("_NW_NOTIFYSBJCT","Art�culos de mi sitio"); // Notification mail subject
define("_NW_NOTIFYMSG","Saludos. Tiene un nuevo art�culo en su sitio."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_NW_NEWSARCHIVES","Archivo");
define("_NW_ARTICLES","Art�culos");
define("_NW_VIEWS","Visto");
define("_NW_DATE","Fecha");
define("_NW_ACTIONS","Acciones");
define("_NW_PRINTERFRIENDLY","Versi�n imprimible");

define("_NW_THEREAREINTOTAL","Hay un total de %s art�tulo(s) disponibles");

// %s is your site name
define("_NW_INTARTICLE","Art�culo interesante en %s");
define("_NW_INTARTFOUND","En %s est� disponible un art�culo interesante");

define("_NW_TOPICC","Tema:");
define("_NW_URL","URL:");
define("_NW_NOSTORY","Lo lamento, el documento seleccionado no existe.");

//%%%%%%	File Name print.php 	%%%%%

define("_NW_URLFORSTORY","La direcci�n de este documento es:");

// %s represents your site name
define("_NW_THISCOMESFROM","Documento disponible en %s");

// Added by Herv�
define("_NW_ATTACHEDFILES","Archivo adjunto:");
define("_NW_ATTACHEDLIB","Este art�culo contiene archivos adjuntos");
define("_NW_NEWSSAMEAUTHORLINK","Art�culos del mismo redactor");
define("_NW_NEWS_NO_TOPICS","Lo siento pero actualmente no hay ning�n tema, necesita crear un tema antes de enviar un art�culo.");
define("_NW_PREVIOUS_ARTICLE","Art�culo anterior");
define("_NW_NEXT_ARTICLE","Art�culo siguiente");
define("_NW_OTHER_ARTICLES","Otros art�culos");

// Added by Herv� in version 1.3 for rating
define("_NW_RATETHISNEWS","Valorar art�culo");
define("_NW_RATEIT","Valorar");
define("_NW_TOTALRATE","Total valoraciones");
define("_NW_RATINGLTOH","Valoraci�n de menor a mayor");
define("_NW_RATINGHTOL","Valoraci�n de mayor a menor");
define("_NW_RATINGC","Valoraci�n: ");
define("_NW_RATINGSCALE","La escala es de 1 a 10, siendo 1 muy pobre y 10 excelente.");
define("_NW_BEOBJECTIVE","Por favor sea objetivo, si todos los art�culos reciben 1 o 10, la valoraci�n no servir� de mucho.");
define("_NW_DONOTVOTE","Sea honesto, por favor no valore sus propios art�culos.");
define("_NW_RATING","Valoraci�n");
define("_NW_VOTE","Valorar");
define("_NW_NORATING","No ha seleccionado la puntuaci�n.");
define("_NW_USERAVG","Porcentaje de valoraci�n");
define("_NW_DLRATINGS","Valoraci�n del art�culo (votos totales: %s)");
define("_NW_ONEVOTE","1 voto");
define("_NW_NUMVOTES","%u votos");		// Warning
define("_NW_CANTVOTEOWN","No puede valorar un art�culo que usted mismo ha redactado.<br />Todas las valoraciones son registradas y revisadas.");
define("_NW_VOTEDELETED","Datos de valoraci�n eliminados.");
define("_NW_VOTEONCE","Por favor no valore el mismo art�culo m�s de una vez.");
define("_NW_VOTEAPPRE","Su valoraci�n es apreciada.");
define("_NW_THANKYOU","Gracias por tomarse el tiempo necesario para valorar este art�culo en %s"); // %s is your site name
define("_NW_RSSFEED","RSS de los art�culos");	// Warning, this text is included insided an Alt attribut (for a picture), so take care to the quotes
define("_NW_AUTHOR","Redactor");
define("_NW_META_DESCRIPTION","Descripci�n de Meta description");
define("_NW_META_KEYWORDS","Palabras de Meta keywords");
define("_NW_MAKEPDF","Crea un documento PDF con el art�culo");
define('_MD_POSTEDON',"Publicado el : ");
define("_NW_AUTHOR_ID","ID del redactor");
define("_NW_POST_SORRY","Lo siento pero no existe el tema o no tiene los permisos para enviar un art�culo en este tema.");

// Added in v 1.50
define("_NW_LINKS","Enlaces");
define("_NW_PAGE","P�gina");
define("_NW_BOOKMARK_ME","Marcar este art�culo en estos sitios");
define('_AM_NEWS_TOTAL',"Un total de %u art�culos");
define('_AM_NEWS_WHOS_WHO',"Qui�n es qui�n");
define('_NW_NEWS_LIST_OF_AUTHORS',"Lista de autores de esta suite. Haga clic sobre los nombres para consultar sus art�culos");
define('_AM_NEWS_TOPICS_DIRECTORY',"Directorio de Temas");
define("_NW_PAGE_AUTO_SUMMARY","P�gina %d : %s");

// Added in version 1.51
define("_NW_BOOKMARK_TO_BLINKLIST","Guardar en Blinklist");
define("_NW_BOOKMARK_TO_DELICIOUS","Guardar en del.icio.us");
define("_NW_BOOKMARK_TO_DIGG","Guardar en Digg");
define("_NW_BOOKMARK_TO_FARK","Guardar en Fark");
define("_NW_BOOKMARK_TO_FURL","Guardar en Furl");
define("_NW_BOOKMARK_TO_NEWSVINE","Guardar en Newsvine");
define("_NW_BOOKMARK_TO_REDDIT","Guardar en Reddit");
define("_NW_BOOKMARK_TO_SIMPY","Guardar en Simpy");
define("_NW_BOOKMARK_TO_SPURL","Guardar en Spurl");
define("_NW_BOOKMARK_TO_YAHOO","Guardar en Yahoo");
?>