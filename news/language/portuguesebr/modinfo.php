<?php
// $Id: modinfo.php,v 1.21 2004/09/01 17:48:07 hthouzard Exp $
// Module Info

// The name of this module
define('_MI_NEWS_NAME','Not�cias');

// A brief description of this module
define('_MI_NEWS_DESC',"Criar se��o de not�cias tipo 'Slashdot', onde os usu�rios possam enviar not�cias/coment�rios.");

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1','T�picos de Not�cias');
define('_MI_NEWS_BNAME3','Grande Hist�ria');
define('_MI_NEWS_BNAME4','Mais Lidas');
define('_MI_NEWS_BNAME5','Not�cias Recentes');
define('_MI_NEWS_BNAME6','Moderar Not�cias');
define('_MI_NEWS_BNAME7','Navegar pelos T�picos');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1','Enviar Not�cia');
define('_MI_NEWS_SMNAME2','Arquivo');

// Names of admin menu items
define('_MI_NEWS_ADMENU2', 'Gerenciador de T�picos');
define('_MI_NEWS_ADMENU3', 'Publicar/Editar Not�cias');
define('_MI_NEWS_GROUPPERMS', 'Permiss�es');
// Added by Herv� for prune option
define('_MI_NEWS_PRUNENEWS', 'Expurgar Not�cia');
// Added by Herv�
define('_MI_NEWS_EXPORT', 'Exportar Not�cia');

// Title of config items
define('_MI_STORYHOME', 'Selecione o n�mero de not�cias a exibir no topo da p�gina');
define('_MI_NOTIFYSUBMIT', 'Selecione sim para enviar uma mensagem de notifica��o para o webmaster a cada not�cia enviada');
define('_MI_DISPLAYNAV', 'Selecione sim para mostrar a caixa de navega��o no topo de cada p�gina de not�cias');
define('_MI_AUTOAPPROVE','Aprovar automaticamente as not�cias sem necessidade de interven��o do administrador?');
define("_MI_ALLOWEDSUBMITGROUPS", "Grupos que podem enviar not�cias");
define("_MI_ALLOWEDAPPROVEGROUPS", "Grupos que podem aprovar not�cias enviadas");
define("_MI_NEWSDISPLAY", "Modo de exibi��o das not�cias");
define("_MI_NAMEDISPLAY","Nome do Autor");
define("_MI_COLUMNMODE","Colunas");
define("_MI_STORYCOUNTADMIN","N�mero de artigos novos a exibir na �rea de administra��o (esta op��o tamb�m ser� usada para limitar o n�mero de t�picos mostrados na �rea de administra��o e isto ser� usado nas estat�sticas) : ");
define('_MI_UPLOADFILESIZE', 'Tamanho m�ximo do arquivo a ser enviado (KB) 1048576 = 1 MB');
define("_MI_UPLOADGROUPS","Grupos autorizados a enviar arquivos");


// Description of each config items
define('_MI_STORYHOMEDSC', '');
define('_MI_NOTIFYSUBMITDSC', '');
define('_MI_DISPLAYNAVDSC', '');
define('_MI_AUTOAPPROVEDSC', '');
define("_MI_ALLOWEDSUBMITGROUPSDESC", "Os grupos selecionados ter�o permiss�o para eviar not�cias");
define("_MI_ALLOWEDAPPROVEGROUPSDESC", "Os grupos selecionados ter�o permiss�o para aprovar not�cias");
define("_MI_NEWSDISPLAYDESC", "Cl�ssico mostra todas as not�cias ordenadas por data de publica��o. Not�cias por t�pico agrupar� as not�cias por t�pico, exibindo a �ltima not�cia por completo e apenas o t�tulo das demais");
define('_MI_ADISPLAYNAMEDSC', 'Selecione como exibir o nome do autor');
define("_MI_COLUMNMODE_DESC","Voc� pode definir o n�mero de colunas para exibir a lista de artigos");
define("_MI_STORYCOUNTADMIN_DESC","");
define("_MI_UPLOADFILESIZE_DESC","");
define("_MI_UPLOADGROUPS_DESC","Selecione os grupos que podem enviar arquivos para o servidor");

// Name of config item values
define("_MI_NEWSCLASSIC", "Cl�ssico");
define("_MI_NEWSBYTOPIC", "Por T�pico");
define("_MI_DISPLAYNAME1", "Nome de Usu�rio");
define("_MI_DISPLAYNAME2", "Nome Real");
define("_MI_DISPLAYNAME3", "Ocultar Autor");
define("_MI_UPLOAD_GROUP1","Remetentes e Aprovadores");
define("_MI_UPLOAD_GROUP2","Apenas aprovadores");
define("_MI_UPLOAD_GROUP3","Desativar envio de arquivos");

// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY', 'Global');
define('_MI_NEWS_GLOBAL_NOTIFYDSC', 'Op��es Globais de notifica��o.');

define('_MI_NEWS_STORY_NOTIFY', 'Hist�ria');
define('_MI_NEWS_STORY_NOTIFYDSC', 'Op��o de notifica��o que se aplica � hist�ria atual.');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY', 'Novo t�pico');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notificar-me quando um novo t�pico for criado.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Receber notifica��o quando um novo t�pico for criado.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Novo t�pico de not�cas');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY', 'Nova hist�ria enviada');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP', 'Notificar-me quando uma nova hist�ria for enviada (aguardando aprova��o).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC', 'Receber notifica��o quando uma nova hist�ria for enviada (aguardando aprova��o).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova hist�ria enviada');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY', 'Nova hist�ria');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP', 'Notificar-me quando uma nova hist�ria for publicada.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC', 'Receber notifica��o quando uma nova hist�ria for publicada.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova hist�ria publicada');

define('_MI_NEWS_STORY_APPROVE_NOTIFY', 'Hist�ria aprovada');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP', 'Notificar-me quando esta hist�ria for aprovada.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC', 'Receber notifica��o quando esta hist�ria for aprovada.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Hist�ria aprovada');

define('_MI_RESTRICTINDEX', 'T�picos restritos na p�gina inicial?');
define('_MI_RESTRICTINDEXDSC', 'Se configurado para sim, os usu�rios ver�o apenas os itens de not�cias listados na p�gina inicial dos t�picos aos quais eles t�m acesso, conforme configurado nas permiss�es das not�cias');

define('_MI_NEWSBYTHISAUTHOR', 'Not�cias do mesmo autor');
define('_MI_NEWSBYTHISAUTHORDSC', 'Se voc� marcar sim, ent�o um link \'Artigos deste autor\' estar� vis�vel');

define('_MI_NEWS_PREVNEX_LINK','Mostrar link Anterior e Pr�ximo?');
define('_MI_NEWS_PREVNEX_LINK_DESC','Quando esta opc��o estiver marcada como \'Sim\', dois novos links estar�o vis�veis ao final de cada artigo. Estes links s�o usados para ir para o artigo anterior ou para o pr�ximo artigo, de acordo com a data de publica��o');
define('_MI_NEWS_SUMMARY_SHOW','Mostrar tabela de sum�rio?');
define('_MI_NEWS_SUMMARY_SHOW_DESC','Quando voc� ativa esta op��o, um sum�rio contendo links para todos os artigos publicados mais recentemente estar� vis�vel ao final de cada artigo');
define('_MI_NEWS_AUTHOR_EDIT','Permitir que os autores editem seus coment�rios?');
define('_MI_NEWS_AUTHOR_EDIT_DESC','Com esta op��o ativada, os usu�rios ter�o permiss�o de editar seus coment�rios.');
define('_MI_NEWS_RATE_NEWS','permitir que os usu�rios classifiquem as not�cias?');
define('_MI_NEWS_TOPICS_RSS','Ativar RSS por t�picos?');
define('_MI_NEWS_TOPICS_RSS_DESC',"Se voc� configurar esta op��o para 'Sim', o conte�do dos t�picos estar� dispon�vel como fonte RSS");
define('_MI_NEWS_DATEFORMAT', "Formato de data");
define('_MI_NEWS_DATEFORMAT_DESC',"Por favor, consulte a documenta��o do PHP (http://fr.php.net/manual/en/function.date.php) para mais informa��es sobre como selecionar o formato. Note que se voc� n�o digitar nada, o formato padr�o ser� usado");
define('_MI_NEWS_META_DATA', "Ativar meta dados para Palavras-chave e Descri��o?");
define('_MI_NEWS_META_DATA_DESC', "Se voc� configurar esta op��o como 'sim' ent�o os aprovadors ser�o capazes de informar os seguintes meta dados: keywords e description");
define('_MI_NEWS_BNAME8','Not�cias aleat�rias');
define('_MI_NEWS_NEWSLETTER',"Folheto Informativo");
define('_MI_NEWS_STATS','Estat�sticas');
define("_MI_NEWS_FORM_OPTIONS","Op��es do Formul�rio");
define("_MI_NEWS_FORM_COMPACT","Compacto");
define("_MI_NEWS_FORM_DHTML","DHTML");
define("_MI_NEWS_FORM_SPAW","Editor Spaw");
define("_MI_NEWS_FORM_HTMLAREA","Editor HtmlArea");
define("_MI_NEWS_FORM_FCK","Editor FCK");
define("_MI_NEWS_FORM_KOIVI","Editor Koivi");
define("_MI_NEWS_FORM_OPTIONS_DESC","Selecione o editor a ser usado. Se voc� tem uma instala��o 'simples' (por exemplo, se voc� usa apenas o editor fornecido com o pacote padr�o de instala��o do Xoops), ent�o voc� deve selecionar apenas DHTML e Compacto");
define("_MI_NEWS_KEYWORDS_HIGH","Destacar palavras-chave?");
define("_MI_NEWS_KEYWORDS_HIGH_DESC","Se voc� usar esta op��o, as palavras-chave informadas na busca ser�o destacadas nos artigos");
define("_MI_NEWS_HIGH_COLOR","Cor a ser usada para destacar as palavras-chave?");
define("_MI_NEWS_HIGH_COLOR_DES","Utilize esta op��o apenas se voc� escolheu 'sim' para a op��o anterior");
define("_MI_NEWS_INFOTIPS","Tamanho da Janela de Dicas");
define("_MI_NEWS_INFOTIPS_DES","Se voc� usar esta op��o os links relacionados �s not�cias ter�o os primeiros (n) caracteres do artigo. Se voc� definir este valor como 0 as janelas de dicas ficar�o vazias");
define("_MI_NEWS_SITE_NAVBAR","Usar a barra de navega��o de sites do Mozilla e do Opera?");
define("_MI_NEWS_SITE_NAVBAR_DESC","Se voc� configurar esta op��o como sim, os visitantes do seu s�tio ser�o capazes de utiluzar a barra de navega��o de sites para navegar pelos artigos.");
define("_MI_NEWS_TABS_SKIN","Selecione a pele a ser usada nas abas");
define("_MI_NEWS_TABS_SKIN_DESC","Esta pele ser� usada por todos os blocos que usam abas");
define("_MI_NEWS_SKIN_1","Estilo da Barra");
define("_MI_NEWS_SKIN_2","Chanfrada");
define("_MI_NEWS_SKIN_3","Cl�ssica");
define("_MI_NEWS_SKIN_4","Pastas");
define("_MI_NEWS_SKIN_5","MacOs");
define("_MI_NEWS_SKIN_6","Plana");
define("_MI_NEWS_SKIN_7","Arredondada");
define("_MI_NEWS_SKIN_8","Estilo ZDnet");

// Added in version 1.50
define('_MI_NEWS_BNAME9','Arquivos');
define("_MI_NEWS_FORM_TINYEDITOR","Editor Compacto");
define("_MI_NEWS_FOOTNOTES","Mostrar links nas vers�es para impress�o dos artigos?");
define("_MI_NEWS_DUBLINCORE","Ativar Metadados 'Dublin Core'?");
define("_MI_NEWS_DUBLINCORE_DSC","Para mais informa��es, clique <a href='http://dublincore.org/'>aqui</a>");
define("_MI_NEWS_BOOKMARK_ME","Mostrar bloco 'Marcar este artigo como favorito'?");
define("_MI_NEWS_BOOKMARK_ME_DSC","Este bloco estar� vis�vel na p�gina de artigos");
define("_MI_NEWS_FF_MICROFORMAT","Ativar Micro Sum�rios do Firefox 2?");
define("_MI_NEWS_FF_MICROFORMAT_DSC","Para mais informa��es, clique <a href='http://wiki.mozilla.org/Microsummaries' target='_blank'>aqui</a>");
define("_MI_NEWS_WHOS_WHO","Quem � quem");
define("_MI_NEWS_METAGEN","Gerador de Metatags");
define("_MI_NEWS_TOPICS_DIRECTORY","Listar T�picos");
define("_MI_NEWS_ADVERTISEMENT","An�ncio");
define("_MI_NEWS_ADV_DESCR","Entre um texto ou um c�digo javascript para mostrar nos artigos");
define("_MI_NEWS_MIME_TYPES","Informe os tipos de arquivos permitidos para envio (separe os tipos em uma nova linha)");
define("_MI_NEWS_ENHANCED_PAGENAV","Usar navegador de p�ginas avan�ado?");
define("_MI_NEWS_ENHANCED_PAGENAV_DSC","Com esta op��o, voc� pode separar suas p�ginas utilizando: [pagebreak:T�tulo da P�gina], os links para as p�ginas ser�o substitu�dos por uma caixa de sele��o e voc� pode usar [sumary] para criar um sum�rio autom�tico das p�ginas");
// Added in version 1.54
define('_MI_NEWS_CATEGORY_NOTIFY','Categoria');
define('_MI_NEWS_CATEGORY_NOTIFYDSC','Op��es de notifica��o que aplicam � categoria atual');

define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFY', 'Nova not�cia enviada');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYCAP', 'Notifique quando qualquer nova not�ca � enviada para esta categoria.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYDSC', 'Receber notifica��o quando qualquer nova not�cia � enviada para esta categoria.');
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Not�cia nova');
?>