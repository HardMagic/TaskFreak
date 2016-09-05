/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

function edit(id,value,own) {
	e = gE('pos-'+id);
	pos = e.innerHTML;
	
	e1 = document.createElement('select');
	e1.name = 'position-'+id;
	
	e.removeChild(e.lastChild);
	e.appendChild(e1);
	
	len = arrPositions.length-1;
	
	for (i=0; i<=len ; i++) {
		if (own >= i+1) {
			e1.appendChild(opto(i+1,arrPositions[i]));
		}
	}
	
	e1.selectedIndex = value-1;
	
	e = gE('but-'+id);
	
	e1 = document.createElement('input');
	e1.type='submit';
	e1.value='Change';
	
	for(i=0;i<4;i++) {
		e.removeChild(e.lastChild);
	}
	
	e.appendChild(e1);
}
