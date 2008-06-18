<?php
// $Id: admin.php,v 1.18 2004/07/26 17:51:25 hthouzard Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","Base de Dados atualizada com sucesso!");
define("_AM_CONFIG","Configura��o de not�cias");
define("_AM_AUTOARTICLES","Artigos automatizados");
define("_AM_STORYID","ID da hist�ria");
define("_AM_TITLE","T�tulo");
define("_AM_TOPIC","T�pico");
define("_AM_POSTER","Remetente");
define("_AM_PROGRAMMED","Data/Hora programada");
define("_AM_ACTION","A��o");
define("_AM_EDIT","Editar");
define("_AM_DELETE","Apagar");
define("_AM_LAST10ARTS","�ltimos %d Artigos");
define("_AM_PUBLISHED","Publicado"); // Published Date
define("_AM_GO","Ir!");
define("_AM_EDITARTICLE","Editar Artigo");
define("_AM_POSTNEWARTICLE","Publicar Novo Artigo");
define("_AM_ARTPUBLISHED","Seu artigo foi publicado!");
define("_AM_HELLO","Ol� %s,");
define("_AM_YOURARTPUB","O artigo que voc� enviou para nosso site acaba de ser publicado.");
define("_AM_TITLEC","T�tulo: ");
define("_AM_URLC","Endere�o: ");
define("_AM_PUBLISHEDC","Publicado: ");
define("_AM_RUSUREDEL","Tem certeza de que deseja apagar este artigo e todos os seus coment�rios?");
define("_AM_YES","Sim");
define("_AM_NO","N�o");
define("_AM_INTROTEXT","Texto de Introdu��o");
define("_AM_EXTEXT","Texto Complementar");
define("_AM_ALLOWEDHTML","Permitir HTML:");
define("_AM_DISAMILEY","Desativar carinhas");
define("_AM_DISHTML","Desativar HTML");
define("_AM_APPROVE","Aprovar");
define("_AM_MOVETOTOP","Mover esta hist�ria para o topo");
define("_AM_CHANGEDATETIME","Alterar a data/hora da publica��o");
define("_AM_NOWSETTIME","Data/Hora da publica��o: %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","Hora atual is: %s");  // %s is the current datetime
define("_AM_SETDATETIME","Definir Data/Hora da publica��o");
define("_AM_MONTHC","M�s:");
define("_AM_DAYC","Dia:");
define("_AM_YEARC","Ano:");
define("_AM_TIMEC","Hora:");
define("_AM_PREVIEW","Visualizar");
define("_AM_SAVE","Salvar");
define("_AM_PUBINHOME","Publicar na P�gina inicial?");
define("_AM_ADD","Adicionar");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","Adicionar um T�pico Principal");
define("_AM_TOPICNAME","Nome do T�pico");
// Warning, changed from 40 to 255 characters.
define("_AM_MAX40CHAR","(M�x: 255 caracteres)");
define("_AM_TOPICIMG","Imagem do T�pico");
define("_AM_IMGNAEXLOC","nome da imagem + extens�o localizada em %s");
define("_AM_FEXAMPLE","por exemplo: jogos.gif");
define("_AM_ADDSUBTOPIC","Adicionar um SUB-t�pico");
define("_AM_IN","em");
define("_AM_MODIFYTOPIC","Modificar T�pico");
define("_AM_MODIFY","Modificar");
define("_AM_PARENTTOPIC","T�pico relacionado");
define("_AM_SAVECHANGE","Salvar altera��es");
define("_AM_DEL","Apagar");
define("_AM_CANCEL","Cancelar");
define("_AM_WAYSYWTDTTAL","ATAEN��O: Voc� tem certeza que deseja apagar este T�pico e TODAS as Hist�rias e Coment�rios relacionados??");


// Added in Beta6
define("_AM_TOPICSMNGR","Gerenciador de T�picos");
define("_AM_PEARTICLES","Publicar/Editar Artigos");
define("_AM_NEWSUB","Novos envios");
define("_AM_POSTED","Publicado");
define("_AM_GENERALCONF","Configura��o Geral");

// Added in RC2
define("_AM_TOPICDISPLAY","Mostrar imagem do T�pico?");
define("_AM_TOPICALIGN","Posi��o");
define("_AM_RIGHT","Direita");
define("_AM_LEFT","Esquerda");

define("_AM_EXPARTS","Artigos Expirados");
define("_AM_EXPIRED","Expirado");
define("_AM_CHANGEEXPDATETIME","Alterar a data/hora de expira��o");
define("_AM_SETEXPDATETIME","Definir data/hora de expira��o");
define("_AM_NOWSETEXPTIME","Data/Hora atual para expira��o: %s");

// Added in RC3
define("_AM_ERRORTOPICNAME", "Voc� precisa informar um nome para o T�pico!");
define("_AM_EMPTYNODELETE", "N�o existe nada par apagar!");

// Added 240304 (Mithrandir)
define('_AM_GROUPPERM', 'Permiss�es de Envio/Aprova��o/Visualiza��o');
define('_AM_SELFILE','Selecione um arquivo para enviar');

// Added by Herv�
define('_AM_UPLOAD_DBERROR_SAVE','Erro ao anexar arquivo � hist�ria');
define('_AM_UPLOAD_ERROR','Erro ao enviar arquvio');
define('_AM_UPLOAD_ATTACHFILE','Arquivo(s) Anexado(s)');
define('_AM_APPROVEFORM', 'Permiss�es de Aprova��o');
define('_AM_SUBMITFORM', 'Permiss�es de Envio');
define('_AM_VIEWFORM', 'Permiss�es de Visualiza��o');
define('_AM_APPROVEFORM_DESC', 'Selecione quem pode Aprovar not�cias');
define('_AM_SUBMITFORM_DESC', 'Selecione quem pode enviar not�cias');
define('_AM_VIEWFORM_DESC', 'Selecione quem pode ver quais t�picos');
define('_AM_DELETE_SELFILES', 'Apagar arquivos selecionados');
define('_AM_TOPIC_PICTURE', 'Enviar imagem');
define('_AM_UPLOAD_WARNING', '<B>Aten��o, n�o esque�a de aplicar permiss�es de escrita para o seguinte diret�rio: %s</B>');

define('_AM_NEWS_UPGRADECOMPLETE', 'Atualiza��o completa');
define('_AM_NEWS_UPDATEMODULE', 'Atualizar modelos de m�dulos e blocos');
define('_AM_NEWS_UPGRADEFAILED', 'Falha ao atualizar');
define('_AM_NEWS_UPGRADE', 'Atualizar');
define('_AM_ADD_TOPIC','Adicionar um t�pico');
define('_AM_ADD_TOPIC_ERROR','Erro, o t�pico j� existe!');
define('_AM_ADD_TOPIC_ERROR1','ERRO: N�o foi poss�vel selecionar este t�pico para um t�pico relacionado!');
define('_AM_SUB_MENU','Publicar este t�pico como um submenu');
define('_AM_SUB_MENU_YESNO','Submenu?');
define('_AM_HITS', 'Cliques');
define('_AM_CREATED', 'Criado');

define('_AM_TOPIC_DESCR', "Descri��o do T�pico");
define('_AM_USERS_LIST', "Lista de Usu�rios");
define('_AM_PUBLISH_FRONTPAGE', "Publicar na p�gina inicial?");
define('_AM_NEWS_UPGRADEFAILED1', 'Imposs�vel criar a tabela stories_files');
define('_AM_NEWS_UPGRADEFAILED2', "Imposs�vel alterar o tamanho do t�tulo do t�pico");
define('_AM_NEWS_UPGRADEFAILED21', "Imposs�vel adicionar novos campos � tabela de t�picos");
define('_AM_NEWS_UPGRADEFAILED3', 'Imposs�vel criar a tabela stories_votedata');
define('_AM_NEWS_UPGRADEFAILED4', "Imposs�vel criar os campos 'rating' e 'votes' na tabela 'story'");
define('_AM_NEWS_UPGRADEFAILED0', "Por favor, anote essas mensagens e tente corrigir esses problemas usanfo o phpMyadmin e o arquivo de defini��es sql dispon�vel na pasta do m�dulo NEWS");
define('_AM_NEWS_UPGR_ACCESS_ERROR',"Erro, para usar o script de atualiza��o, voc� precisa ser administrador neste m�dulo");
define('_AM_NEWS_PRUNE_BEFORE',"Expurgar hist�rias publicadas anteriormente");
define('_AM_NEWS_PRUNE_EXPIREDONLY',"Remover apenas as hist�rias expiradas");
define('_AM_NEWS_PRUNE_CONFIRM',"ATEN��O, voc� est� prestes a remover permanentemente as hist�rias que foram publicadas antes %s (esta a��o n�o poder� ser desfeita). Isto representa um total de %s Hist�rias.<br />Tem certeza que deseja continuar?");
define('_AM_NEWS_PRUNE_TOPICS',"Limite para os seguintes t�picos");
define('_AM_NEWS_PRUNENEWS', 'Expurgar not�cias');
define('_AM_NEWS_EXPORT_NEWS', 'Exportar not�cias (em XML)');
define('_AM_NEWS_EXPORT_NOTHING', "Desculpe, mas n�o h� nada a ser exportado. Por favor, verifique os crit�rios utilizados");
define('_AM_NEWS_PRUNE_DELETED', '%d not�cias foram apagadas');
define('_AM_NEWS_PERM_WARNING', '<h2>ATEN��O, voc� tem tr�s formul�rios e, portanto, tr�s bot�es de envio</h2>');
define('_AM_NEWS_EXPORT_BETWEEN', 'Exportar not�cias publicadas entre');
define('_AM_NEWS_EXPORT_AND', ' e ');
define('_AM_NEWS_EXPORT_PRUNE_DSC', "Se voc� n�o marcar nada, todos os t�picos ser�o usados, caso contr�rio, apenas os t�picos selecionados ser�o usados");
define('_AM_NEWS_EXPORT_INCTOPICS', 'Incluir defini��es dos t�picos?');
define('_AM_NEWS_EXPORT_ERROR', 'Erro ao tentar criar o arquivo %s. Opera��o interrompida.');
define('_AM_NEWS_EXPORT_READY', "Seu arquivo xml exportado est� pronto para descarga. <br /><a href='%s'>Clique aqui para baix�-lo</a>.<br />N�o esque�a de <a href='%s'>remov�-lo</a> ap�s terminar.");
define('_AM_NEWS_RSS_URL', "Endere�o para RSS");
define('_AM_NEWS_NEWSLETTER', "Folheto Informativo");
define('_AM_NEWS_NEWSLETTER_BETWEEN', 'Selecionar not�cias publicadas entre');
define('_AM_NEWS_NEWSLETTER_READY', "Seu folheto informativo est� pronto para descarga. <br /><a href='%s'>Clique aquipara baix�-lo</a>.<br />N�o esque�a de <a href='%s'>remov�-lo</a> ap�s terminar.");
define('_AM_NEWS_DELETED_OK',"Arquivo apagado com sucesso");
define('_AM_NEWS_DELETED_PB',"Ocorreu um problema ao apagar o arquivo");
define('_AM_NEWS_STATS0','Estat�sticas dos T�picos');
define('_AM_NEWS_STATS','Estat�sticas');
define('_AM_NEWS_STATS1','Autores Exclusivos');
define('_AM_NEWS_STATS2','Totais');
define('_AM_NEWS_STATS3','Estat�sticas de Artigos');
define('_AM_NEWS_STATS4','Artigos mais lidos');
define('_AM_NEWS_STATS5','Artigos menos lidos');
define('_AM_NEWS_STATS6','Artigos mais classificados');
define('_AM_NEWS_STATS7','Autores mais lidos');
define('_AM_NEWS_STATS8','Autores mais classificados');
define('_AM_NEWS_STATS9','Maiores Contribuintes');
define('_AM_NEWS_STATS10','Estat�sticas dos Autores');
define('_AM_NEWS_STATS11',"Contagem de Artigos");
define('_AM_NEWS_HELP',"Ajuda");
define("_AM_NEWS_MODULEADMIN","Administra��o do M�dulo");
define("_AM_NEWS_GENERALSET", "Configura��es do M�dulo" );
define('_AM_NEWS_GOTOMOD','Ir para o m�dulo');
define('_AM_NEWS_NOTHING',"Desculpe mas n�o h� nada para baixar, verifique os crit�rios usados!");
define('_AM_NEWS_NOTHING_PRUNE',"Desculpe mas n�o h� nada a expurgar, verifique os crit�rios usados!");
define('_AM_NEWS_TOPIC_COLOR',"Cor dos t�picos");
define('_AM_NEWS_COLOR',"Cor");
define('_AM_NEWS_REMOVE_BR',"Converter o c�digo html &lt;br&gt; para uma nova linha?");
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE',"<a href='upgrade.php'><font color='#FF0000'>Por favor, atualize o m�dulo!</font></a>");

// Added in verisn 1.50
define('_AM_NEWS_NEWSLETTER_HEADER', "Cabe�alho");
define('_AM_NEWS_NEWSLETTER_FOOTER', "Rodap�");
define('_AM_NEWS_NEWSLETTER_HTML_TAGS', "Remover c�digos html?");
define('_AM_NEWS_VERIFY_TABLES','Manter tabelas');
define('_AM_NEWS_METAGEN',"Metadados");
define('_AM_NEWS_METAGEN_DESC',"Metadados � um sistema que pode ajud�-lo a indexar melhor sua p�gina nos mecanismos de busca.<br />Se voc� n�o digitar os Metadados para palavras-chave e Descri��o por voc� mesmo, o m�dulo ir� cri�-los automaticamente.");
define('_AM_NEWS_BLACKLIST',"Lista negra");
define('_AM_NEWS_BLACKLIST_DESC',"As palavras nesta lista n�o ser�o usadas para a cria��o dos Metadados de Palavras-chave");
define('_AM_NEWS_BLACKLIST_ADD',"Adicionar");
define('_AM_NEWS_BLACKLIST_ADD_DSC',"Informe as palavras para adicionar � lista<br />(uma palavra por linha)");
define('_AM_NEWS_META_KEYWORDS_CNT',"Contagem m�xima de palavras-chave para gera��o autom�tica");
define('_AM_NEWS_META_KEYWORDS_ORDER',"Ordem das Palavras-chave");
define('_AM_NEWS_META_KEYWORDS_INTEXT',"Cri�-las na mesma ordem em que aparecem no texto");
define('_AM_NEWS_META_KEYWORDS_FREQ1',"Ordem crescente por frequ�ncia das palavras");
define('_AM_NEWS_META_KEYWORDS_FREQ2',"Ordem decrescente por frequ�ncia das palavras");
?>