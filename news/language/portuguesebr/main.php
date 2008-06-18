<?php
// $Id: main.php,v 1.9 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%		File Name index.php 		%%%%%
define("_NW_PRINTER","P�gina de impress�o amig�vel");
define("_NW_SENDSTORY","Enviar esta hist�ria par aum amigo");
define("_NW_READMORE","Leia mais...");
define("_NW_COMMENTS","Coment�rios?");
define("_NW_ONECOMMENT","1 coment�rio");
define("_NW_BYTESMORE","Mais %s bytes");
define("_NW_NUMCOMMENTS","%s coment�rios");
define("_NW_MORERELEASES", "Mais lan�amentos em ");


//%%%%%%		File Name submit.php		%%%%%
define("_NW_SUBMITNEWS","Enviar not�cias");
define("_NW_TITLE","T�tulo");
define("_NW_TOPIC","T�pico");
define("_NW_THESCOOP","Texto Introdut�rio");
define("_NW_NOTIFYPUBLISH","Notificar por e-mail quando publicado");
define("_NW_POST","Publicar");
define("_NW_GO","Ir!");
define("_NW_THANKS","Obrigado por sua participa��o."); //submission of news article

define("_NW_NOTIFYSBJCT","NOT�CIAS do meu s�tio"); // Notification mail subject
define("_NW_NOTIFYMSG","Ol�! Voc� recebeu um novo envio em seu s�tio."); // Notification mail message

//%%%%%%		File Name archive.php		%%%%%
define("_NW_NEWSARCHIVES","Arquivos de Not�cias");
define("_NW_ARTICLES","Artigos");
define("_NW_VIEWS","Visualiza��es");
define("_NW_DATE","Data");
define("_NW_ACTIONS","A��es");
define("_NW_PRINTERFRIENDLY","P�gina de impress�o amig�vel");

define("_NW_THEREAREINTOTAL","Existem %s artigo(s) no total");

// %s is your site name
define("_NW_INTARTICLE","Artigo interessante em %s");
define("_NW_INTARTFOUND","Eu encontrei um artigo interessante em %s");

define("_NW_TOPICC","T�opico:");
define("_NW_URL","URL:");
define("_NW_NOSTORY","Desculpe, a hist�ria selecionada n�o existe.");

//%%%%%%	File Name print.php 	%%%%%

define("_NW_URLFORSTORY","O endere�o desta hist�ria �:");

// %s represents your site name
define("_NW_THISCOMESFROM","Este artigo veio de %s");

// Added by Herv�
define("_NW_ATTACHEDFILES","Arquivos anexados:");
define("_NW_ATTACHEDLIB","Este artigo possui anexos");
define("_NW_NEWSSAMEAUTHORLINK","Not�cias do mesmo autor");
define("_NW_NEWS_NO_TOPICS","Desculpe, mas n�o existe nenhum t�pico. Voc� deve criar um t�pico antes de enviar uma not�cia.");
define("_NW_PREVIOUS_ARTICLE","Artigo Anterior");
define("_NW_NEXT_ARTICLE","Pr�ximo Artigo");
define("_NW_OTHER_ARTICLES","Outros Artigos");

// Added by Herv� in version 1.3 for rating
define("_NW_RATETHISNEWS","Classifique esta not�cia");
define("_NW_RATEIT","Classificar!");
define("_NW_TOTALRATE","Total de Classifica��es");
define("_NW_RATINGLTOH","Classifica��o (do menor para o maior)");
define("_NW_RATINGHTOL","Classifica��o (do maior para o menor)");
define("_NW_RATINGC","Classifica��o: ");
define("_NW_RATINGSCALE","A escala � de 1 - 10, sendo 1 o pior e 10 o melhor.");
define("_NW_BEOBJECTIVE","Por favor, seja objetivo. Se todo mundo receber um 1 ou um 10, as classifica��es n�o ser�o muito �teis.");
define("_NW_DONOTVOTE","N�o voto no seu pr�prio artigo.");
define("_NW_RATING","Classifica��o");
define("_NW_VOTE","Votar");
define("_NW_NORATING","Nenhuma classifica��o selecionada.");
define("_NW_USERAVG","M;edia de Classifica��o dos usu�rios");
define("_NW_DLRATINGS","News Rating (total de votos: %s)");
define("_NW_ONEVOTE","1 voto");
define("_NW_NUMVOTES","%u votos");		// Warning
define("_NW_CANTVOTEOWN","Voc� n�o pode votar no seu pr�prio artigo.<br />Todos os votos s�o registrados e revisados.");
define("_NW_VOTEDELETED","Dados de vota��o apagados.");
define("_NW_VOTEONCE","Por favor, n�o vote no mesmo artigo mais de uma vez.");
define("_NW_VOTEAPPRE","Seu voto � importante.");
define("_NW_THANKYOU","Obrigado por sua participa��o no %s"); // %s is your site name
define("_NW_RSSFEED","RSS");	// Warning, this text is included insided an Alt attribut (for a picture), so take care to the quotes
define("_NW_AUTHOR","Autor");
define("_NW_META_DESCRIPTION","Descri��o 'Meta description'");
define("_NW_META_KEYWORDS","Palavras-chave 'Meta keywords'");
define("_NW_MAKEPDF","Criar um arquvo PDF do artigo");
define('_MD_POSTEDON',"Enviado em: ");
define("_NW_AUTHOR_ID","ID do autor");
define("_NW_POST_SORRY","Desculpe, mas ou n�o existem t�picos criados ou voc� n�o tem permiss�o para publicar not�cias em nenhum t�pico. Se voc� � o webmaster, v� at� a �rea de administra��o e defina as permiss�es de envio.");

// Added in v 1.50
define("_NW_LINKS","Links");
define("_NW_PAGE","P�gina");
define("_NW_BOOKMARK_ME","Marcar este artigo como favorito neste site");
define('_AM_NEWS_TOTAL',"Total de %u artigos");
define('_AM_NEWS_WHOS_WHO',"Quem � quem");
define('_NW_NEWS_LIST_OF_AUTHORS',"Aqui est� uma lista dos autores deste site, clique no nome para ver os arigos daquele autor");
define('_AM_NEWS_TOPICS_DIRECTORY',"Lista de T�picos");
define("_NW_PAGE_AUTO_SUMMARY","P�gina %d : %s");
// Added in version 1.51
define("_NW_BOOKMARK_TO_BLINKLIST","Bookmark to Blinklist");
define("_NW_BOOKMARK_TO_DELICIOUS","Bookmark to del.icio.us");
define("_NW_BOOKMARK_TO_DIGG","Bookmark to Digg");
define("_NW_BOOKMARK_TO_FARK","Bookmark to Fark");
define("_NW_BOOKMARK_TO_FURL","Bookmark to Furl");
define("_NW_BOOKMARK_TO_NEWSVINE","Bookmark to Newsvine");
define("_NW_BOOKMARK_TO_REDDIT","Bookmark to Reddit");
define("_NW_BOOKMARK_TO_SIMPY","Bookmark to Simpy");
define("_NW_BOOKMARK_TO_SPURL","Bookmark to Spurl");
define("_NW_BOOKMARK_TO_YAHOO","Bookmark to Yahoo");
// Added in version 1.56
define('_NW_NOTYETSTORY',"Desculpe, a not�cia selecionada ainda n�o foi publicada. Por favor volte posterior e tente novamente.");
?>