/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

function gE(id) {
	return document.getElementById(id);
}
function isE(e) {
	return (e.style.display == 'inline');
}
function sE(e) {
	if (e) {
		e.style.display = 'inline';
	}
}
function hE(e) {
	if (e) {
		e.style.display = 'none';
	}
}
function tE(e) {
	if (e) {
		if (isE(e)) {
			hE(e);
		} else {
			sE(e);
		}
	}
}
function isD(e) {
	if (e) {
		return (e.style.display == 'block');
	} else {
		return false;
	}
}
function sD(e) {
	if (e) {
		e.style.display = 'block';
	}
}
function hD(e) {
	if (e) {
		e.style.display = 'none';
	}
}
function tD(e) {
	if (e) {
		if (isD(e)) {
			hD(e);
		} else {
			sD(e);
		}
	}
}

function wE(e,s) {
	if (e) {
		e.innerHTML = s;
	}
}

function opto(value,label) {
	e = document.createElement('option');
	e.value=value;
	e.appendChild(document.createTextNode(label));
	return e;
}

function freak_label() {
	s_2 = document.getElementsByTagName('LABEL');
	for (i=0; i<s_2.length; i++) {
		s_1 = s_2[i];
		s_1.onclick = function() {
			s_3 = this.parentNode;
			for (j=0; j<s_3.childNodes.length; j++) {
				if (s_3.childNodes[j].tagName == 'INPUT') {
					s_3.childNodes[j].click();
				}
			}
		}
	}
}
