/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

function check_search(ff) {
	e = gE('flulab_error');
	if (!ff.keyword.value && !ff.country.selectedIndex && !ff.stateCode.selectedIndex) {
		e.innerHTML = 'Please use at least one of the search filters';
		sD(e);
		return false;
	} else {
		b= gE('flulab_submit1');
		b.disabled = true;
		b.value = 'Searching...';
		hD(e);
		return true;
	}
}
