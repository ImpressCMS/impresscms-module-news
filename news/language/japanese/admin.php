<?php
// $Id: admin.php,v 1.49 2005/03/13 12:59:35 hthouzard Exp $
//%%%%%%	Admin Module Name  Articles 	%%%%%
define("_AM_DBUPDATED","�ǡ����١����򹹿����ޤ���");
define("_AM_CONFIG","�˥塼�� ����");
define("_AM_AUTOARTICLES","�Ǻ�ͽ��ε���");
define("_AM_STORYID","�˥塼������ID");
define("_AM_TITLE","ɽ��");
define("_AM_TOPIC","�ȥԥå�");
define("_AM_POSTER","��Ƽ�");
define("_AM_PROGRAMMED","�Ǻ�ͽ������");
define("_AM_ACTION","����");
define("_AM_EDIT","�Խ�");
define("_AM_DELETE","���");
define("_AM_LAST10ARTS","�ǿ� %d �˥塼������");
define("_AM_PUBLISHED","�Ǻ�����"); // Published Date
define("_AM_GO","����");
define("_AM_EDITARTICLE","�˥塼���������Խ�");
define("_AM_POSTNEWARTICLE","�����˥塼����������");
define("_AM_ARTPUBLISHED","�˥塼���������Ǻܤ���ޤ���");
define("_AM_HELLO","%s���󡢤���ˤ���");
define("_AM_YOURARTPUB","���ʤ�����Ƥ����˥塼�����������������Ȥˤ������Ǻܤ���ޤ�����");
define("_AM_TITLEC","ɽ�ꡧ");
define("_AM_URLC","URL��");
define("_AM_PUBLISHEDC","�Ǻ�������");
define("_AM_RUSUREDEL","���Υ˥塼����������ӵ������Ф��륳���Ȥ����ƺ�����Ƥ⤤���Ǥ�����");
define("_AM_YES","�Ϥ�");
define("_AM_NO","������");
define("_AM_INTROTEXT","��ʸ");
define("_AM_EXTEXT","��ʸ��");
define("_AM_ALLOWEDHTML","���Ѳ�ǽ��HTML������");
define("_AM_DISAMILEY","�饢�������̵���ˤ���");
define("_AM_DISHTML","HTML������̵���ˤ���");
define("_AM_APPROVE","��ǧ");
define("_AM_MOVETOTOP","���ε�����ȥåץڡ����Ǿ����˰�ư����");
define("_AM_CHANGEDATETIME","�Ǻ��������ѹ�����");
define("_AM_NOWSETTIME","���ߤηǺ�ͽ�������� %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","���߻��֡� %s");  // %s is the current datetime
define("_AM_SETDATETIME","�Ǻ����������ꤹ��");
define("_AM_MONTHC","�");
define("_AM_DAYC","����");
define("_AM_YEARC","ǯ��");
define("_AM_TIMEC","���֡�");
define("_AM_PREVIEW","�ץ�ӥ塼");
define("_AM_SAVE","��¸");
define("_AM_PUBINHOME","�ȥåץڡ����˷Ǻܤ���");
define("_AM_ADD","�ɲ�");

//%%%%%%	Admin Module Name  Topics 	%%%%%

define("_AM_ADDMTOPIC","�ᥤ��ȥԥå��κ���");
define("_AM_TOPICNAME","�ȥԥå�̾");
// Warning, changed from 40 to 255 characters.
define("_AM_MAX40CHAR","�ʺ���255ʸ����Ⱦ�ѡˡ�");
define("_AM_TOPICIMG","�ȥԥå�����");
define("_AM_IMGNAEXLOC","%s ���ˤ�������ե�����̾");
define("_AM_FEXAMPLE","�㡧 games.gif");
define("_AM_ADDSUBTOPIC","���֥ȥԥå��κ���");
define("_AM_IN","�ƥȥԥå���");
define("_AM_MODIFYTOPIC","�ȥԥå����Խ�");
define("_AM_MODIFY","����");
define("_AM_PARENTTOPIC","�ƥȥԥå�");
define("_AM_SAVECHANGE","�ѹ�����¸");
define("_AM_DEL","���");
define("_AM_CANCEL","����󥻥�");
define("_AM_WAYSYWTDTTAL","���Υȥԥå�����Ӥ��Υȥԥå�������ƤΥ˥塼����������ӥ����Ȥ������Ƥ⤤���Ǥ�����");


// Added in Beta6
define("_AM_TOPICSMNGR","�ȥԥå�������˥塼");
define("_AM_PEARTICLES","�˥塼����������ơ��Խ�");
define("_AM_NEWSUB","������ƥ˥塼��");
define("_AM_POSTED","�������");
define("_AM_GENERALCONF","��������");

// Added in RC2
define("_AM_TOPICDISPLAY","�ȥԥå�������ɽ��");
define("_AM_TOPICALIGN","����");
define("_AM_RIGHT","��¦");
define("_AM_LEFT","��¦");

define("_AM_EXPARTS","�����ڤ쵭��");
define("_AM_EXPIRED","�����ڤ�");
define("_AM_CHANGEEXPDATETIME","ͭ�����¤��ѹ�����");
define("_AM_SETEXPDATETIME","ͭ�����¤����ꤹ��");
define("_AM_NOWSETEXPTIME","�������ꤵ��Ƥ�����¡� %s");

// Added in RC3
define("_AM_ERRORTOPICNAME", "�ȥԥå�̾����������Ƥ��ޤ���");
define("_AM_EMPTYNODELETE", "����Ǥ��ޤ���");

// Added 240304 (Mithrandir)
define('_AM_GROUPPERM', '��ơ���ǧ�����Ȥθ���');
define('_AM_SELFILE','���åץ��ɥե����������');

// Added by Herv����
define('_AM_UPLOAD_DBERROR_SAVE','�˥塼�������˥ե������ź�դ���Τ˥��顼��ȯ�����ޤ�����');
define('_AM_UPLOAD_ERROR','�ե����빹���˥��顼��ȯ�����ޤ�����');
define('_AM_UPLOAD_ATTACHFILE','ź�եե�����');
define('_AM_APPROVEFORM', '��ǧ�θ���');
define('_AM_SUBMITFORM', '��Ƥθ���');
define('_AM_VIEWFORM', '�����θ���');
define('_AM_APPROVEFORM_DESC', '��ǧ�Ԥ�����');
define('_AM_SUBMITFORM_DESC', '��ƼԤ�����');
define('_AM_VIEWFORM_DESC', '�����Ԥ�����');
define('_AM_DELETE_SELFILES', '���򤷤��ե�����κ��');
define('_AM_TOPIC_PICTURE', '�����Υ��åץ���');
define('_AM_UPLOAD_WARNING', '<B>�ٹ�:, �ʲ��Υե���������Ф��륢����������ɬ�����ꤷ�Ƥ���������: %s</B>');

define('_AM_NEWS_UPGRADECOMPLETE', '���åץ��졼�ɤ���λ���ޤ�����');
define('_AM_NEWS_UPDATEMODULE', '�⥸�塼��ȥƥ�ץ졼�ȤΥ��åץǡ���');
define('_AM_NEWS_UPGRADEFAILED', '���åץ��졼�ɼ��ԡ���');
define('_AM_NEWS_UPGRADE', '���åץ��졼��');
define('_AM_ADD_TOPIC','�ȥԥå��ɲ�');
define('_AM_ADD_TOPIC_ERROR','���顼:�ȥԥå�������¸�ߤ��ޤ�');
define('_AM_ADD_TOPIC_ERROR1','���顼:���Υȥԥå��Ͽƥȥԥå��Ȥ�������Ǥ��ޤ���');
define('_AM_SUB_MENU','���Υȥԥå��򥵥֥�˥塼�Ȥ��Ƹ�������');
define('_AM_SUB_MENU_YESNO','���֥�˥塼�Ǥ���?');
define('_AM_HITS', '�ҥåȿ�');
define('_AM_CREATED', '�����Ѥ�');

define('_AM_TOPIC_DESCR', "�ȥԥå��γ���");
define('_AM_USERS_LIST', "�桼�����ꥹ��");
define('_AM_PUBLISH_FRONTPAGE', "�ե��ȥڡ����˸������ޤ�����?");
define('_AM_NEWS_UPGRADEFAILED1', 'stories_files�ơ��֥�κ�������');
define('_AM_NEWS_UPGRADEFAILED2', "�ȥԥå������ȥ�Ĺ���ѹ�����");
define('_AM_NEWS_UPGRADEFAILED21', "topics�ơ��֥�ؤο����ե�������ɲü���");
define('_AM_NEWS_UPGRADEFAILED3', 'stories_votedata�ơ��֥�κ�������');
define('_AM_NEWS_UPGRADEFAILED4', "story�ơ��֥�ؤ�'rating'��'votes'�ե�������ɲü���");
define('_AM_NEWS_UPGRADEFAILED0', "��å���������դ��ơ��˥塼���⥸�塼���'sql'�ե�����������Ѳ�ǽ��sql����ե�����˴ؤ��������phpMyadmin�ǽ�������褦�ˤ��Ƥ���������");
define('_AM_NEWS_UPGR_ACCESS_ERROR',"���顼: ���Υ⥸�塼��δ������¤��ʤ��Ȥ��Υ�����ץȤ����ѽ���ޤ���");
define('_AM_NEWS_PRUNE_BEFORE',"�����������줿�˥塼������������");
define('_AM_NEWS_PRUNE_EXPIREDONLY',"��λ�����˥塼�������Τߤ������");
define('_AM_NEWS_PRUNE_CONFIRM',"�ٹ�: %s�����˸������줿�˥塼�������ʵפ˼��������Ȥ��Ƥޤ���(���Υ��������ϼ��ä��ޤ���)%s ���ȡ��꡼�򼨤��Ƥޤ���<br />�����ˤ��ޤ��� ?");
define('_AM_NEWS_PRUNE_TOPICS',"�ʲ��Υȥԥå���������");
define('_AM_NEWS_PRUNENEWS', '�˥塼���������');
define('_AM_NEWS_EXPORT_NEWS', '�˥塼���򥨥����ݡ���');
define('_AM_NEWS_EXPORT_NOTHING', "�������ݡ��Ȥ����Τ�����ޤ��� ���ˤĤ��ƳΤ���Ƥ���������");
define('_AM_NEWS_PRUNE_DELETED', '%d �ĤΥ˥塼�����������ޤ���');
define('_AM_NEWS_PERM_WARNING', '<h2>�ٹ�: 3�ĤΥե����ब����Τǡ�3�Ĥ������ܥ��󤬤���ޤ���</h2>');
define('_AM_NEWS_EXPORT_BETWEEN', '�˥塼�������աʸ������աˤ����');
define('_AM_NEWS_EXPORT_AND', ' �ڤ� ');
define('_AM_NEWS_EXPORT_PRUNE_DSC', "�����å������ȥԥå��Τߤ����Ѥ���ޤ���<br/>��������å����ʤ��Ȥ��٤ƤΥȥԥå��������Ѥ���ޤ���");
define('_AM_NEWS_EXPORT_INCTOPICS', '�ȥԥå������������ߤޤ�����');
define('_AM_NEWS_EXPORT_ERROR', '�ե����� %s �κ��������˥��顼��ȯ�����ޤ����� ������ߤ���ޤ�����');
define('_AM_NEWS_EXPORT_READY', "XML �������ݡ��ȥե�����ν���������ޤ����� <br /><a href='%s'>�����򥯥�å����ƥ�������ɤ��Ƥ���������</a><br />��������ɤ���������<a href='%s'>�������</a>�Τ�˺��ʤ��Ǥ���������");
define('_AM_NEWS_RSS_URL', "RSS������URL");
define('_AM_NEWS_NEWSLETTER', "�˥塼���쥿��");
define('_AM_NEWS_NEWSLETTER_BETWEEN', '�˥塼�������աʸ������աˤ����');
define('_AM_NEWS_NEWSLETTER_READY', "�˥塼���쥿���ե�����ν���������ޤ����� <br /><a href='%s'>�����򥯥�å����ƥ�������ɤ��Ƥ���������</a>.<br />��������ɤ���������<a href='%s'>�������</a>�Τ�˺��ʤ��Ǥ���������");
define('_AM_NEWS_DELETED_OK','�ե�����κ�����������ޤ���');
define('_AM_NEWS_DELETED_PB','���Υե��������������ȯ��');
define('_AM_NEWS_STATS0','�ȥԥå���������');
define('_AM_NEWS_STATS','����');
define('_AM_NEWS_STATS1','��Ƽ�');
define('_AM_NEWS_STATS2','���');
define('_AM_NEWS_STATS3','����������');
define('_AM_NEWS_STATS4','��äȤ��ɤޤ줿����');
define('_AM_NEWS_STATS5','��äȤ��ɤޤ�ʤ��ä�����');
define('_AM_NEWS_STATS6','��äȤ�ɾ���ι⤤����');
define('_AM_NEWS_STATS7','��äȤ��ɤޤ줿��Ƽ�');
define('_AM_NEWS_STATS8','��äȤ�ɾ���ι⤤��Ƽ�');
define('_AM_NEWS_STATS9','��äȤ�׸����礭����Ƽ�');
define('_AM_NEWS_STATS10','��ƼԤ�����');
define('_AM_NEWS_STATS11','������');
define('_AM_NEWS_HELP','�إ��');
define('_AM_NEWS_MODULEADMIN','�⥸�塼�����');
define('_AM_NEWS_GENERALSET', "�⥸�塼������" );
define('_AM_NEWS_GOTOMOD','�⥸�塼���');
define('_AM_NEWS_NOTHING',"��������ɤ����Τ�����ޤ��� ���ˤĤ��ƳΤ���Ƥ���������");
define('_AM_NEWS_NOTHING_PRUNE',"�������˥塼��������ޤ��� ���ˤĤ��ƳΤ���Ƥ���������");
define('_AM_NEWS_TOPIC_COLOR','�ȥԥå����ο�');
define('_AM_NEWS_COLOR','��');
define('_AM_NEWS_REMOVE_BR',"&lt;br&gt; ��������Ԥ��Ѵ����ޤ�����?");
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE',"<a href='upgrade.php'><font color='#FF0000'>�⥸�塼��Υ��åץ��졼�ɽ����򤷤Ƥ�������!</font></a>");
?>