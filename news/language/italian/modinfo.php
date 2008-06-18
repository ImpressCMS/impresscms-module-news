<?php
// $Id: modinfo.php,v 1.6 2003/03/26 03:33:17 w4z004 Exp $

// ------------------------------------------------------------------------- //
//       Italian Translation by Marco Ragogna (m.ragogna@xoopsit.net)        //
//                and Andrea Bandino (a.bandino@xoopsit.net)                 //
//        webmasters of XOOPS :: Italian Corner  (www.xoopsit.net)           //
//              the XOOPS Official Italian Site                              //
//			and Alessandro Ricci (aricci@armordolls.it)						 //
// ------------------------------------------------------------------------- //

// Module Info

// The name of this module
define('_MI_NEWS_NAME','Notizie');

// A brief description of this module
define('_MI_NEWS_DESC','Crea una sezione di notizie in cui gli utenti possono inviare e commentare notizie.');

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1','Argomenti delle notizie');
define('_MI_NEWS_BNAME3','Notizia del giorno');
define('_MI_NEWS_BNAME4','Notizie pi� lette');
define('_MI_NEWS_BNAME5','Notizie recenti');
define('_MI_NEWS_BNAME6','Modera Notizie');
define('_MI_NEWS_BNAME7','Naviga tra gli Argomenti');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1','Scrivi una notizia');
define('_MI_NEWS_SMNAME2','Archivio');

// Names of admin menu items
define('_MI_NEWS_ADMENU2', 'Amministra Argomenti');
define('_MI_NEWS_ADMENU3', 'Invia/Modifica Notizia');
define('_MI_NEWS_GROUPPERMS', 'Permessi');
// Added by Herv� for prune option
define('_MI_NEWS_PRUNENEWS', 'Elimina Notizie');
// Added by Herv�
define('_MI_NEWS_EXPORT', 'Esporta Notizie');

// Title of config items
define('_MI_STORYHOME', 'Quante notizie sulla pagina principale?');
define('_MI_NOTIFYSUBMIT', 'Notifica via email ogni nuova notizia inviata?');
define('_MI_DISPLAYNAV', 'Mostra il box di navigazione?');
define('_MI_AUTOAPPROVE','Approva automaticamente le nuove notizie senza l\'intervento dell\'amministratore?');
define("_MI_ALLOWEDSUBMITGROUPS", "Gruppi che possono inviare notizie");
define("_MI_ALLOWEDAPPROVEGROUPS", "Gruppi che possono approvare notizie");
define("_MI_NEWSDISPLAY", "Layout di visualizzazione notizie");
define("_MI_NAMEDISPLAY","Nome dell'Autore");
define("_MI_COLUMNMODE","Colonne");
define("_MI_STORYCOUNTADMIN","Numero di nuovi articoli da visualizzare nell'area admin (usata anche per limitare il numero di topic mostrati nell'area admin e nelle statistiche): ");
define('_MI_UPLOADFILESIZE', 'MAX Dimensione file per caricamento (KB) 1048576 = 1 Meg');
define("_MI_UPLOADGROUPS","Gruppi autorizzati a caricare file");

// Description of each config items
define('_MI_STORYHOMEDSC', 'Seleziona il numero di notizie da visualizzare sulla pagina principale.');
define('_MI_NOTIFYSUBMITDSC', 'Scegli S� per inviare un messaggio di notifica al webmaster per ogni nuova notizia inviata.');
define('_MI_DISPLAYNAVDSC', 'Scegli S� per mostrare il box di navigazione in cima a ogni pagina di notizie.');
define('_MI_AUTOAPPROVEDSC', '');
define("_MI_ALLOWEDSUBMITGROUPSDESC", "I gruppi selezionati saranno autorizzati a inviare nuove notizie");
define("_MI_ALLOWEDAPPROVEGROUPSDESC", "I gruppi selezionati saranno autorizzati ad approvare le notizie inserite");
define("_MI_NEWSDISPLAYDESC", "Classico mostra tutte le news ordinate per data di pubblicazione. Per Argomento raggruppa le notizie per argomento, con la prima completa e delle altre solo il titolo");
define('_MI_ADISPLAYNAMEDSC', "Scegli come visualizzare il nome dell'autore");
define("_MI_COLUMNMODE_DESC","You can choose the number of columns to display articles list");
define("_MI_STORYCOUNTADMIN_DESC","");
define("_MI_UPLOADFILESIZE_DESC","");
define("_MI_UPLOADGROUPS_DESC","Seleziona i gruppi che possono caricare sul server");

// Name of config item values
define("_MI_NEWSCLASSIC", "Classico");
define("_MI_NEWSBYTOPIC", "Per Argomento");
define("_MI_DISPLAYNAME1", "Nome Utente");
define("_MI_DISPLAYNAME2", "Vero Nome");
define("_MI_DISPLAYNAME3", "Non mostrare autore");
define("_MI_UPLOAD_GROUP1","Chi invia e chi pu� approvare");
define("_MI_UPLOAD_GROUP2","Solo chi pu� approvare");
define("_MI_UPLOAD_GROUP3","Caricamento disabilitato");

// Text for notifications
define('_MI_NEWS_GLOBAL_NOTIFY', 'Globale');
define('_MI_NEWS_GLOBAL_NOTIFYDSC', 'Opzioni globali di notifica delle news.');

define('_MI_NEWS_STORY_NOTIFY', 'Articolo');
define('_MI_NEWS_STORY_NOTIFYDSC', 'Opzioni di notifica applicati a questo articolo');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nuovo argomento');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notificami per ogni nuovo argomento creato.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Ricevi una notifica quando un nuovo argomento viene creato.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica : Nuovo argomento delle news');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY', 'Nuovo articolo inviato');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP', 'Notificami per ogni nuovo articolo inviato (in attesa di approvazione).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC', 'Ricevi una notifica quando un nuovo articolo viene inviato (in attesa di approvazione).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica : Nuovo articolo inviato');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY', 'Nuovo articolo');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP', 'Notificami per ogni nuovo articolo inviato.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC', 'Ricevi una notifica quando un nuovo articolo viene inviato.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica : Nuovo articolo');

define('_MI_NEWS_STORY_APPROVE_NOTIFY', 'Articolo approvato');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP', 'Notificami quando questo articolo viene approvato.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC', 'Ricevi una notifica quando questo articolo viene approvato.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notifica automatica : Articolo approvato');


define('_MI_RESTRICTINDEX', 'Limita gli argomenti sulla pagina Indice?');
define('_MI_RESTRICTINDEXDSC', "Se impostato a s�, gli utenti potranno vedere nell'indice solo le notizie a cui hanno access, come settato in Permessi");

define('_MI_NEWSBYTHISAUTHOR', 'Notizie dello stesso Autore');
define('_MI_NEWSBYTHISAUTHORDSC', "Se impostato a s�, comparir� un link 'Articoli di questo autore'.");

define('_MI_NEWS_PREVNEX_LINK','Mostra link Precedente e Successivo?');
define('_MI_NEWS_PREVNEX_LINK_DESC',"Quando quest'opzione � impostata a 's�', due nuovi link sono visibili alla fine di ogni articolo. Questi link sono utilizzati per navigare verso l'articolo precedente o successivo in ordine di data");
define('_MI_NEWS_SUMMARY_SHOW','Mostra tabella sommario?');
define('_MI_NEWS_SUMMARY_SHOW_DESC',"Quando usi questa opzione, un sommario contenente link a tutti gli articoli recentemente pubblicati � visibile alla fine di ogni articolo");
define('_MI_NEWS_AUTHOR_EDIT','Permetti agli autori di modificare i loro invii?');
define('_MI_NEWS_AUTHOR_EDIT_DESC','Con questa opzione, gli autori possono modificare le loro notizie.');
define('_MI_NEWS_RATE_NEWS','Permetti agli utenti di votare le notizie ?');
define('_MI_NEWS_TOPICS_RSS',"Permetti RSS Feed dell'argomento?");
define('_MI_NEWS_TOPICS_RSS_DESC', "Se imposti questa opzione a 's�', il contenuto dell'argomento sar� disponibile come RSS Feed");
define('_MI_NEWS_DATEFORMAT', "Formato Data");
define('_MI_NEWS_DATEFORMAT_DESC',"Riferisciti alla documentazione PHP per maggiorin informazioni su come selezionare il formato. Se non inserisci nulla il formato di default sar� utilizzato.");
define('_MI_NEWS_META_DATA', "Permetti di inserire meta data (keywords e description)?");
define('_MI_NEWS_META_DATA_DESC', "Se imposti questa opzione a 's�', chi approva una notizia potr� inserire i meta dati keyword e description");
define('_MI_NEWS_BNAME8','Notizie Casuali');
define('_MI_NEWS_NEWSLETTER','Newsletter');
define('_MI_NEWS_STATS','Statistiche');
define("_MI_NEWS_FORM_OPTIONS","Opzioni Form");
define("_MI_NEWS_FORM_COMPACT","Compact");
define("_MI_NEWS_FORM_DHTML","DHTML");
define("_MI_NEWS_FORM_SPAW","Editor Spaw");
define("_MI_NEWS_FORM_HTMLAREA","Editor HtmlArea");
define("_MI_NEWS_FORM_FCK","Editor FCK");
define("_MI_NEWS_FORM_KOIVI","Editor Koivi");
define("_MI_NEWS_FORM_OPTIONS_DESC", "Scegli l'editor da utilizzare. Se hai una installazione 'semplice' (usi solo le classi editor di core contenute nel package standard di xoops), puoi scegliere tra DHTML e Compact");
define("_MI_NEWS_KEYWORDS_HIGH","Evidenzia parole chiave?");
define("_MI_NEWS_KEYWORDS_HIGH_DESC","Se usi questa opzione, le parole chiave inserite nella ricerca verranno evidenziate negli articoli");
define("_MI_NEWS_HIGH_COLOR","Colore utilizzato per evidenzare le parole chiave?");
define("_MI_NEWS_HIGH_COLOR_DES","Usa questa opzione solo se hai scelto 's�' per la precedente.");
define("_MI_NEWS_INFOTIPS","Lunghezza Tooltips");
define("_MI_NEWS_INFOTIPS_DES","Se usi questa opzione, i link relativi alle notizie conterranno i primi (n) caratteri dell'articolo. Se imposti questo valore a 0, gli infotips saranno vuoti.");
define("_MI_NEWS_SITE_NAVBAR","Usa la barra di navigazione di Mozilla e Opera?");
define("_MI_NEWS_SITE_NAVBAR_DESC","Se imposti questa opzione a 's�' i visitatori del tuo sito potranno utilizzare la barra di navigazione per muoversi tra i tuoi articoli.");
define("_MI_NEWS_TABS_SKIN","Scegli la skin da utilizzare nelle cartelle");
define("_MI_NEWS_TABS_SKIN_DESC","Questa skin verr� utilizzata in ogni blocco che usa le cartelle");
define("_MI_NEWS_SKIN_1","Bar Style");
define("_MI_NEWS_SKIN_2","Beveled");
define("_MI_NEWS_SKIN_3","Classic");
define("_MI_NEWS_SKIN_4","Folders");
define("_MI_NEWS_SKIN_5","MacOs");
define("_MI_NEWS_SKIN_6","Plain");
define("_MI_NEWS_SKIN_7","Rounded");
define("_MI_NEWS_SKIN_8","ZDnet style");

// Added in version 1.50
define('_MI_NEWS_BNAME9','Archivi');
define("_MI_NEWS_FORM_TINYEDITOR","TinyEditor");
define("_MI_NEWS_FOOTNOTES","Visualizza i links degli articoli in versione stampabile?");
define("_MI_NEWS_DUBLINCORE","Attiva Dublin Core Metadata ?");
define("_MI_NEWS_DUBLINCORE_DSC","Per maggiori informazioni, <a hreh='http://dublincore.org/'>visit this link</a>");
define("_MI_NEWS_BOOKMARK_ME","Visualizza un 'Segnalibro di questo articolo in questo blocco' ?");
define("_MI_NEWS_BOOKMARK_ME_DSC","Questo blocco sar� visibile nella pagina dell'articolo");
define("_MI_NEWS_FF_MICROFORMAT","Attiva Firefox 2 Micro Summaries ?");
define("_MI_NEWS_FF_MICROFORMAT_DSC","Per maggiori informazioni vai su <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>questa pagina</a>");
define("_MI_NEWS_WHOS_WHO","Chi di Chi");
define("_MI_NEWS_METAGEN","Metagen");
define("_MI_NEWS_TOPICS_DIRECTORY","Lista degli argomenti");
define("_MI_NEWS_ADVERTISEMENT","Pubblicit�");
define("_MI_NEWS_ADV_DESCR","Inserisci testo o javascript code da visualizzare nei tuoi articoli");
define("_MI_NEWS_MIME_TYPES","Inserisci Mime Types per l'upload autorizzato (uno per ogni riga)");
define("_MI_NEWS_ENHANCED_PAGENAV","Usa il blocco di navigazione?");
define("_MI_NEWS_ENHANCED_PAGENAV_DSC","Con questa opzione puoi separare le tue pagine con qualcosa tipo questo  : [pagrebreak:Page Title], i links alle pagine verrano sovrascritte da una lista a discesa e potrai usare [summary] per creare un sommario per le pagine automatico");
?>