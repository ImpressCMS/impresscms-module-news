<?php
/**
* who is who information
*
* @copyright	The ImpressCMS Project http://www.impresscms.org/
* @copyright	Instant-Zero http://www.instant-zero.com/
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @package		Modules (news)
* @version		2.00
* @author		Sina Asghari (aka stranger) <pesian_stranger@users.sourceforge.net>
* @author		Herve Thouzard (Instant Zero) <http://xoops.instant-zero.com>
* @version		$Id$
*/

include_once '../../mainfile.php';
include_once XOOPS_ROOT_PATH.'/modules/news/class/class.newsstory.php';
include_once XOOPS_ROOT_PATH.'/modules/news/class/class.newstopic.php';
include_once XOOPS_ROOT_PATH.'/modules/news/class/class.sfiles.php';
include_once XOOPS_ROOT_PATH.'/modules/news/include/functions.php';

if(!news_getmoduleoption('newsbythisauthor')) {
    redirect_header('index.php',2,_ERRORS);
    exit();
}

$xoopsOption['template_main'] = 'news_whos_who.html';
include_once XOOPS_ROOT_PATH.'/header.php';

$option = news_getmoduleoption('displayname');
$article = new NewsStory();
$uid_ids = array();
$uid_ids = $article->getWhosWho(news_getmoduleoption('restrictindex'));
if(count($uid_ids) > 0) {
	$lst_uid = implode(',', $uid_ids);
	$member_handler =& xoops_gethandler('member');
	$critere = new Criteria('uid', '('.$lst_uid.')', 'IN');
	$tbl_users = $member_handler->getUsers($critere);
	foreach($tbl_users as $one_user) {
		$uname = '';
		switch($option) {
			case 1:		// Username
				$uname = $one_user->getVar('uname');
				break;

			case 2:		// Display full name (if it is not empty)
				if(xoops_trim($one_user->getVar('name')) != '') {
					$uname = $one_user->getVar('name');
				} else {
					$uname = $one_user->getVar('uname');
				}
				break;
		}
		$xoopsTpl->append('whoswho', array('uid' => $one_user->getVar('uid'), 'name' => $uname, 'user_avatarurl' => XOOPS_URL.'/uploads/'.$one_user->getVar('user_avatar')));
	}
}

$xoopsTpl->assign('advertisement', news_getmoduleoption('advertisement'));

/**
 * Manage all the meta datas
 */
news_CreateMetaDatas($article);

$xoopsTpl->assign('xoops_pagetitle', _AM_NEWS_WHOS_WHO);
$myts =& MyTextSanitizer::getInstance();
$meta_description = _AM_NEWS_WHOS_WHO . ' - '.$myts->htmlSpecialChars($xoopsModule->name());
if(isset($xoTheme) && is_object($xoTheme)) {
	$xoTheme->addMeta( 'meta', 'description', $meta_description);
} else {	// Compatibility for old Xoops versions
	$xoopsTpl->assign('xoops_meta_description', $meta_description);
}

include_once XOOPS_ROOT_PATH.'/footer.php';
?>
