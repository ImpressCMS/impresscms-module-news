<?php
// $Id: admin.php,v 1.8 2003/04/01 09:07:28 mvandam Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","Databasen er oppdatert!");
define("_AM_CONFIG","Nyhetsinnstillinger");
define("_AM_AUTOARTICLES","Automatiserte artikler");
define("_AM_STORYID","Historie ID");
define("_AM_TITLE","Tittel");
define("_AM_TOPIC","Emne");
define("_AM_POSTER","Forfatter");
define("_AM_PROGRAMMED","Programmert dato/tid");
define("_AM_ACTION","Handling");
define("_AM_EDIT","Redigere");
define("_AM_DELETE","Slette");
define("_AM_LAST10ARTS","Siste 10 artikler");
define("_AM_PUBLISHED","Utgitt"); // Published Date
define("_AM_GO","Aktiver!");
define("_AM_EDITARTICLE","Rediger artikkel");
define("_AM_POSTNEWARTICLE","Send ny artikkel");
define("_AM_ARTPUBLISHED","Artikkelen er publisert!");
define("_AM_HELLO","Hei %s,");
define("_AM_YOURARTPUB","Artikkelen din er n� publisert.");
define("_AM_TITLEC","Tittel: ");
define("_AM_URLC","URL: ");
define("_AM_PUBLISHEDC","Publisert: ");
define("_AM_RUSUREDEL","Er du sikker p� at du vil slette denne kommentaren og alle underkommentarer?");
define("_AM_YES","Ja");
define("_AM_NO","Nei");
define("_AM_INTROTEXT","Ingress");
define("_AM_EXTEXT","Utvidet tekst");
define("_AM_ALLOWEDHTML","Tillat HTML:");
define("_AM_DISAMILEY","Sl� av smiley");
define("_AM_DISHTML","Sl� av HTML");
define("_AM_APPROVE","Godkjenn");
define("_AM_MOVETOTOP","Flytt denne historien til toppen");
define("_AM_CHANGEDATETIME","Forandre dato/tid p� publikasjonen");
define("_AM_NOWSETTIME","Den er n� satt til: %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","Aktuell tid er: %s");  // %s is the current datetime
define("_AM_SETDATETIME","Sett dato/tid p� publikasjonen");
define("_AM_MONTHC","M�ned:");
define("_AM_DAYC","Dag:");
define("_AM_YEARC","�r:");
define("_AM_TIMEC","Tid:");
define("_AM_PREVIEW","Forh�ndsvisning");
define("_AM_SAVE","Lagre");
define("_AM_PUBINHOME","Publisert p� forsiden?");
define("_AM_ADD","Legg til");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","Legg til et hovedemne");
define("_AM_TOPICNAME","Navn p� emne");
// Warning, changed from 40 to 255 characters.
define("_AM_MAX40CHAR","(maks: 255 tegn)");
define("_AM_TOPICIMG","Emne p� bilde");
define("_AM_IMGNAEXLOC","bildenavn + adressen til den katalogen bildet har i %s");
define("_AM_FEXAMPLE","for eksempel: mittBilde.gif");
define("_AM_ADDSUBTOPIC","Legg til et underemne");
define("_AM_IN","i");
define("_AM_MODIFYTOPIC","Endre emne");
define("_AM_MODIFY","Endre");
define("_AM_PARENTTOPIC","Toppemne");
define("_AM_SAVECHANGE","Lagre endringer");
define("_AM_DEL","Slett");
define("_AM_CANCEL","Avbryt");
define("_AM_WAYSYWTDTTAL","ADVARSEL: Er du sikker p� at du vil slette dette emnet og ALLE artikkler og kommentarer som h�rer til?");


// Added in Beta6
define("_AM_TOPICSMNGR","Administrasjon av emner");
define("_AM_PEARTICLES","Send/redigere artikkel");
define("_AM_NEWSUB","Nye artikler");
define("_AM_POSTED","Sendt");
define("_AM_GENERALCONF","Hovedinnstillinger");

// Added in RC2
define("_AM_TOPICDISPLAY","Vis bilde?");
define("_AM_TOPICALIGN","Posisjon");
define("_AM_RIGHT","H�yre");
define("_AM_LEFT","Venstre");

define("_AM_EXPARTS","Utl�pt artikkel");
define("_AM_EXPIRED","Utl�pt");
define("_AM_CHANGEEXPDATETIME","Endre dato/tid for utl��");
define("_AM_SETEXPDATETIME","Sett dato/tid for utl�p");
define("_AM_NOWSETEXPTIME","Den er n� satt til: %s");

// Added in RC3
define("_AM_ERRORTOPICNAME", "Du m� skrive et emnenavn!");
define("_AM_EMPTYNODELETE", "Ingenting � slette!");

// Added 240304 (Mithrandir)
define('_AM_GROUPPERM', 'Send/Godkjenn/Se rettigheter');
define('_AM_SELFILE','Velg fil for opplasting');

// Added by Herv�
define('_AM_UPLOAD_DBERROR_SAVE','En feil oppsto under montering av filvedlegg');
define('_AM_UPLOAD_ERROR','En feil oppsto under opplasting av filen');
define('_AM_UPLOAD_ATTACHFILE','Vedlagte fil(er)');
define('_AM_APPROVEFORM', 'Godkjenn rettigheter');
define('_AM_SUBMITFORM', 'Send rettigheter');
define('_AM_VIEWFORM', 'Se rettigheter');
define('_AM_APPROVEFORM_DESC', 'Velg hvem som kan godkjenne nyheter');
define('_AM_SUBMITFORM_DESC', 'Velg hvem som kan sende inn nyheter');
define('_AM_VIEWFORM_DESC', 'Velg hvem som kan se hvilke emner');
define('_AM_DELETE_SELFILES', 'Slett valgte filer');
define('_AM_TOPIC_PICTURE', 'Last opp bilde');
define('_AM_UPLOAD_WARNING', '<B>Advarsel, husk � sl� av skrivebeskyttelse p� f�lgende mapper : %s</B>');

define('_AM_NEWS_UPGRADECOMPLETE', 'Oppgraderingen er komplett');
define('_AM_NEWS_UPDATEMODULE', 'Oppdat�r modulens maler og blokker');
define('_AM_NEWS_UPGRADEFAILED', 'Oppgraderingen mislykkes');
define('_AM_NEWS_UPGRADE', 'Oppgrad�r');
define('_AM_ADD_TOPIC','Legg til et emne');
define('_AM_ADD_TOPIC_ERROR','Feil, emnet finnes allerede!');
define('_AM_ADD_TOPIC_ERROR1','FEIL: Kan ikke velge dette emnet som overemne!');
define('_AM_SUB_MENU','Utgi dette emnet som en undermeny');
define('_AM_SUB_MENU_YESNO','Undermeny?');
define('_AM_HITS', 'Treff');
define('_AM_CREATED', 'Opprettet');

define('_AM_TOPIC_DESCR', "Emnebeskrivelse");
define('_AM_USERS_LIST', "Brukerliste");
define('_AM_PUBLISH_FRONTPAGE', "Utgi p� forsiden ?");
define('_AM_NEWS_UPGRADEFAILED1', 'Umulig � opprette tabellen stories_files');
define('_AM_NEWS_UPGRADEFAILED2', "Umulig � endre emnetittelens lengde");
define('_AM_NEWS_UPGRADEFAILED21', "Umulig � opprette nye felter i emnets tabell");
define('_AM_NEWS_UPGRADEFAILED3', 'Umulig � opprette tabellen stories_votedata');
define('_AM_NEWS_UPGRADEFAILED4', "Kunne ikke opprette de to feltene 'rating' og 'votes' for 'story'-tabellen");
define('_AM_NEWS_UPGRADEFAILED0', "Vennligst les meldingene og pr�v � rette p� problemene med phpMyadmin og sql-definitionfilen som du finner i 'sql'-mappen til newsmodulen");
define('_AM_NEWS_UPGR_ACCESS_ERROR',"Feil, for � oppgradere skriptet m� du v�re admin for denne modulen");
define('_AM_NEWS_PRUNE_BEFORE',"Beskj�r saker som har v�rt utgitt f�r");
define('_AM_NEWS_PRUNE_EXPIREDONLY',"Slett bare saker som er utg�tt");
define('_AM_NEWS_PRUNE_CONFIRM',"Advarsel, du er i ferd med � foreta en permanent sletting av saker som ble utgitt f�r  %s (denne handlingen kan ikke angres). Det er snakk om %s saker.<br />Vil du fortsette ?");
define('_AM_NEWS_PRUNE_TOPICS',"Begrens til f�lgende saker");
define('_AM_NEWS_PRUNENEWS', 'Beskj�r nyheter');
define('_AM_NEWS_EXPORT_NEWS', 'Nyhetseksportering');
define('_AM_NEWS_EXPORT_NOTHING', "Beklager, det er ingenting � eksportere, vennligst g� over dine kriterier");
define('_AM_NEWS_PRUNE_DELETED', '%d nyheter ble slettet');
define('_AM_NEWS_PERM_WARNING', '<h2>Advarsel, du har 3 skjemaer, og dermed 3 send-knapper</h2>');
define('_AM_NEWS_EXPORT_BETWEEN', 'Eksport�r nyheter publisert mellom');
define('_AM_NEWS_EXPORT_AND', ' og ');
define('_AM_NEWS_EXPORT_PRUNE_DSC', "Hvis du ikke velger noe s� vil alle emnene bli brukt<br/> ellers vil bare valgte emner bli brukt.");
define('_AM_NEWS_EXPORT_INCTOPICS', 'Inklud�r emnedefinisjoner ?');
define('_AM_NEWS_EXPORT_ERROR', 'Feil under oppretting av filen %s. Handlingen ble stoppet.');
define('_AM_NEWS_EXPORT_READY', "Din xml exportfil er klar for nedlasting. <br /><a href='%s'>Klikk p� denne lenken for � hente den</a>.<br />Ikke glem <a href='%s'>� fjerne den</a> n�r du er ferdig.");
define('_AM_NEWS_RSS_URL', "RSS-feedens URL");
define('_AM_NEWS_NEWSLETTER', "Nyhetsbrev");
define('_AM_NEWS_NEWSLETTER_BETWEEN', 'Velg nyheter utgitt mellom');
define('_AM_NEWS_NEWSLETTER_READY', "Ditt nyhetsbrev er klart for nedlasting. <br /><a href='%s'>Klikk p� denne lenken for � hente det</a>.<br />Ikke glem � <a href='%s'>slette det</a> n�r du er ferdig.");
define('_AM_NEWS_DELETED_OK',"Filen ble slettet");
define('_AM_NEWS_DELETED_PB',"Det oppsto et problem under sletting av filen");
define('_AM_NEWS_STATS0','Emnestatistikk');
define('_AM_NEWS_STATS','Statistikk');
define('_AM_NEWS_STATS1','Unike bidragsytere');
define('_AM_NEWS_STATS2','Sammendrag');
define('_AM_NEWS_STATS3','Artikkelstatistikk');
define('_AM_NEWS_STATS4','Mest leste artikler');
define('_AM_NEWS_STATS5','Minst leste artikler');
define('_AM_NEWS_STATS6','Best rangerte artikler');
define('_AM_NEWS_STATS7','Mest leste bidragsytere');
define('_AM_NEWS_STATS8','Best rangerte bidragsytere');
define('_AM_NEWS_STATS9','St�rste bidragsytere');
define('_AM_NEWS_STATS10','Bidragdyterstatistikk');
define('_AM_NEWS_STATS11',"Antall artikler");
define('_AM_NEWS_HELP',"Hjelp");
define("_AM_NEWS_MODULEADMIN","Modulbehandling");
define("_AM_NEWS_GENERALSET", "Modulinnstillinger" );
define('_AM_NEWS_GOTOMOD','G� til modul');
define('_AM_NEWS_NOTHING',"Beklager, det er ingenting � laste ned. Vennligst g� over dine kriterier !");
define('_AM_NEWS_NOTHING_PRUNE',"Beklager, det er ingenting � beskj�re. Vennligst g� over dine kriterier !");
define('_AM_NEWS_TOPIC_COLOR',"Emnets farge");
define('_AM_NEWS_COLOR',"Farge");
define('_AM_NEWS_REMOVE_BR',"Konverter html-taggen &lt;br&gt; til linjeskift ?");
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE',"<a href='upgrade.php'><font color='#FF0000'>Vennligst oppgrad�r modulen !</font></a>");
?>