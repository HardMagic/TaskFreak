/****************************************************************************\
* TaskFreak!                                                                 *
* multi user                                                                 *
******************************************************************************
* Version: 0.6.3                                                             *
* Authors: Stan Ozier <taskfreak@gmail.com>                                  *
* License:  http://www.gnu.org/licenses/gpl.txt (GPL)                        *
\****************************************************************************/

var ff = '';
var arrTr;

function freak_start() {
	clk_date = new Date();
	clk_start = clk_date.getTime();
	gE('frk_status').src=frk_loading.src;
}

function freak_stop() {
	gE('frk_status').src=frk_refresh.src;
}

function reconfirm(message) {
	if (confirm(message)) {
		return confirm("Are you sure?\nThis is, like, serious, you know!");
	} else {
		return false;
	}
}

function freak_pop_url(name,url,x,y) {
	return window.open(url,name,'toolbar=0,location=0,directories=0,menuBar=0,scrollbars=1,resizable=0,status=1,alwaysRaised=0,width='+x+',height='+y)
}

function freak_pop(name, x, y) {
   return freak_pop_url(name,'',x,y);
}

function freak_sav() {
	ff.mode.value = 'save';
	if (!ff.title.value) {
		alert('please enter title!');
		return false;
	} else {
		freak_start();
		xajax_task_update_full(xajax.getFormValues("zappa"));
		freak_edit(0);
		return false;
	}
}
function freak_clean() {
	ff.elements['id'].value='';
	e = gE('fviewcontent');
	sD(gE('fviewload'));
	hD(e);
	/*
	ff.priority.value = '3';
	ff.deadlineDate.value = '';
	ff.title.value='';
	if (ff.sProject.value > 0) {
		for(i=0;i<ff.project.options.length;i++) {
			if (ff.project.options[i].value == ff.sProject.value) {
				ff.project.selectedIndex = i;
				break;
			}
		}
	} else {
		ff.project.selectedIndex = 0;
	}
	g = gE('project_txt');
	if (isD(g))	{
		ff.project2.value='';
		hD(g);
		sD(gE('project_sel'));
	}
	if (ff.user) {
		ff.user.selectedIndex = 0;
		for (i=0; i<ff.user.length; i++) {
			if (ff.user.options[i].value == frk_user) {
				ff.user.selectedIndex = i;
				break;
			}
		}
	}
	if (ff.description)	{
		ff.description.value='';
	}
	if (ff.status) {
		ff.status.selectedIndex = 0;
	}
	frk_prio = frk_priority;
	if (ff.showPrivate.length < 2 && frk_prio == 2)
	{
		frk_prio--;
	}
	ff.showPrivate[frk_prio].click();
	*/
	//freak_more('desc');
}
function freak_rld() {
	freak_clean();
	ff.mode.value = '';
	ff.method = 'GET';
	ff.submit();
}
function freak_print() {
	if (ff.mode) {
		ff.mode.value = '';
		ff.method = 'GET';
		ff.action = 'print_list.php';
		ff.submit();
		ff.method= 'POST';
		ff.action = 'index.php';
	} else {
		window.location.reload(true);
	}
}
function freak_new() {
	e = document.getElementById('fview');
	if (e) {
		sD(e);
		freak_clean();
		freak_start();
		xajax_task_load_edit(0);
	} else {
		e = gE('lnkRefresh');
		window.location.href=e.href;
	}
}
function freak_sort(column) {
	if (ff.sort.value == column) {
		ff.dir.value = -ff.dir.value;
	} else {
		ff.sort.value=column;
		ff.dir.value = 1;
	}
	ff.mode.value='';
	ff.submit();
}

function freak_sts(id,status) {
	q = true;
	if (frk_status_close && status == frk_status) {
		q = confirm(frk_status_close);
	}
	if (q == true) {
	   freak_start();
	   xajax_task_update_status(id,status);
	}
}

function freak_del(id) {
	freak_start();
	freak_view(0);
	xajax_task_delete(id);	
}
function freak_del_remove(id) {
	e = gE('taskSheet');
	rs = e.rows;
	for(i=0;i<rs.length;i++) {
		if (rs[i].id == id) {
			e.deleteRow(i);
			break;
		}
	}
}
function freak_adj(idx) {
	vn = 'status'+idx;
	if (!ff.elements[vn].checked) {
		idx--;
	}
	for (i=1; i<=idx; i++) {
		vn = 'status'+i;
		ff.elements[vn].checked = true;
	}
	for (i=idx+1; i<6; i++) {
		vn = 'status'+i;
		ff.elements[vn].checked = false;
	}
}
function freak_calc(sts) {
	f = document.getElementById('vsts');
	f.innerHTML = (Math.round((sts * 100) / frk_status))+'% completed';
}
function freak_view(id,tab) {
	freak_clean();
	e = gE('fview');
	if (id == 0) {
		hD(e);
		freak_message();
	} else {
		freak_start();
		sD(e);
		if (tab) {
			xajax_task_load_view(id,tab);
		} else {
			xajax_task_load_view(id);
		}
	}
}
function stripHtml(str) { 
	re = /<\S[^>]*>/g; 
	str = str.replace(re,""); 
	re = /&gt;/g; 
	str = str.replace(re,">"); 
	re = /&lt;/g; 
	str = str.replace(re,"<"); 
	re = /&amp;/g; 
	if (str == '-') { str=''; }
	return str.replace(re,"&"); 
}
function freak_switch(field) {
	g = gE(field+'_sel');
	if (isD(g))	{
		hD(g);
		ff.elements[field].selectedIndex = 0;
		sD(gE(field+'_txt'));
	} else {
		ff.elements[field+'2'].value = '';
		hD(gE(field+'_txt'));
		sD(g);
	}
}
function freak_switch_protxt() {
	freak_switch('project');
	freak_mp(0);
	try {
		document.forms[0].project2.focus();
	} catch (e) { }
}
function freak_switch_prosel() {
	freak_switch('project');
	try {
		document.forms[0].project.focus();
	} catch (e) { }
}
function freak_tab(tab) {
	freak_body_edit();
	if (gE('vmore')) {
		arr = new Array('desc','comm','hist');
		for (i=0;i<arr.length;i++) {
			if (arr[i] != tab) {
				e=gE('t'+arr[i]);
				e.className='';
			} else {
				e=gE('t'+arr[i]);
				e.className='active';
			}
		}
	}
}
function freak_more(tab) {
	freak_tab(tab);
	if (id = ff.elements['id'].value) {
		freak_start();
		xajax_task_load_more(id,tab);
	}
}
function freak_more_scroll() {
	e = gE('vmore');
	if (isD(e)) {
		e.scrollTop = e.scrollHeight;
	}
}
function freak_body_edit(id,body) {
	e = gE('veditbody');
	if (id) {
		if (typeof(id) != 'boolean') {
			ff.elements['veditid'].value = id;
		}
		if (body) {
			e.value = body;
		}
		ff.onsubmit = freak_body_submit;
		hD(gE('vmore'));
		sD(gE('vedit'));
	} else {
		if (e) {
			e.value = '';
			ff.elements['veditid'].value = '';
		}
		ff.onsubmit = function() { return true; };
		hD(gE('vedit'));
		sD(gE('vmore'));
	}
	try { e.focus(); } catch(e) { ; }
}
function freak_comment_reply(id) {
	if (ff.elements['id'].value) {
		freak_body_edit(true);
	}
}
function freak_comment_edit(id) {
	if (ff.elements['id'].value) {
		freak_start();
		xajax_task_comment_edit(id);
	}
}
function freak_comment_delete(id) {
	if (ff.elements['id'].value) {
		freak_start();
		xajax_task_comment_delete(id);
	}
}
function freak_body_submit() {
	//alert('submiting taskId='+ff.elements['id'].value+' comment='+ff.elements['veditid'].value);
	freak_start();
	xajax_task_update_comment(ff.elements['id'].value, ff.elements['veditid'].value, ff.elements['veditbody'].value);
	return false;
}
function freak_edit(id) {
	freak_clean();
	e = gE('fview');
	if (id == 0) {
		hD(e);
	} else {
		freak_start();
		sD(e);
		xajax_task_load_edit(id);
	}
};


function freak_edit_text(field,value) {
	if (ff.elements[field]) {
		ff.elements[field].value = value;
	}
}

function freak_edit_select(field,value) {
	sel=ff.elements[field];
	for (i=0;i<sel.options.length;i++) {
		if (sel.options[i].value == value) {
			sel.selectedIndex = i;
			break;
		}
	}
}

function freak_edit_privacy(value) {
	if (ff.showPrivate.length == 2 && value == 2) {
		value = 1;
	}
	ff.showPrivate[value].click();
}

function freak_edit_status(value) {
	for (i=1; i<=5; i++) {
		if (value >= i) {
			ff.elements['status'+i].checked = true;
		} else {
			ff.elements['status'+i].checked = false;
		}
	}
}

function freak_edit_add_project_link(type,label,link) {
	// does not work, can't figure it out
	e0 = document.createElement('li');
	e1 = document.createElement('a');
	e1.href=link+'&show='+type;
	e1.appendChild(document.createTextNode(label));
	e0.appendChild(e1);
	return e0;
}

function freak_edit_add_project(id,name,link,future,past,all) {
	ff.project.appendChild(opto(id,name));
	e = document.createElement('li');
	e.className = 'more';
	e0 = document.createElement('a');
	e0.href=link+'&show=today';
	e0.appendChild(document.createTextNode(name));
	e.appendChild(e0);
	e1 = document.createElement('ul');
	// e1_1 = freak_edit_add_project_link('future',future,link);
	e1_1 = document.createElement('li');
	e1_1_1 = document.createElement('a');
	e1_1_1.href=link+'&show=future';
	e1_1_1.appendChild(document.createTextNode(future));
	e1_1.appendChild(e1_1_1);
	e1.appendChild(e1_1);
	// e1_2 = freak_edit_add_project_link('past',past,link);
	e1_2 = document.createElement('li');
	e1_2_1 = document.createElement('a');
	e1_2_1.href=link+'&show=past';
	e1_2_1.appendChild(document.createTextNode(past));
	e1_2.appendChild(e1_2_1);
	e1.appendChild(e1_2);
	//e1.appendChild(freak_edit_add_project_link('all',all,link));
	e1_3 = document.createElement('li');
	e1_3_1 = document.createElement('a');
	e1_3_1.href=link+'&show=all';
	e1_3_1.appendChild(document.createTextNode(all));
	e1_3.appendChild(e1_3_1);
	e1.appendChild(e1_3);
	e.appendChild(e1);
	document.getElementById('nav_projects').appendChild(e);
}

function freak_mp_reset() {
	for (i=ff.user.length-1; i>0; i--) {
		ff.user.removeChild(ff.user.lastChild);
	}
}

function freak_mp(sel) {
	freak_start();
	ff.user.disabled=true;
	if (sel) {
		sel = sel.options[sel.selectedIndex].value;
	}
	xajax_task_load_users(sel);
}

function freak_mp_add(value,label) {
	ff.user.appendChild(opto(value,label));
}

function freak_mp_default(value) {
	if (!value)	{
		value = frk_user;
	}
	for (i=0; i < ff.user.length; i++) {
		if (ff.user.options[i].value == value) {
			ff.user.selectedIndex=i;
			break;
		}
	}
	ff.user.disabled=false;
}

function freak_message(str) {
	e = gE('message');
	if (!str) {
		hD(e);
	} else {
		if (!e) {
			e = document.createElement('div');
			e.id = 'message';
			e.className = '';
			wE(e,str);
			gE('header').appendChild(e);
		} else {
			e.className = '';
			wE(e,str);
			sD(e);
		}
		window.setTimeout('freak_message()',2000);
	}
}

function freak_error(str) {
	e = gE('message');
	if (!str) {
		hD(e);
	} else {
		if (!e) {
			e = document.createElement('div');
			e.id = 'message';
			e.className = 'error';
			wE(e,str);
			gE('header').appendChild(e);
		} else {
			e.className = 'error';
			wE(e,str);
			sD(e);
		}
		window.setTimeout('freak_message()',2500);
	}
}

/* rows highlight on mouse over and click */

function startList() {
	if (document.all&&document.getElementById) {
		elems = document.getElementsByTagName("ul");
		for(var i = 0; i < elems.length; i++)
		{
			elem = elems[i];
			id = elem.id;
			cls = elem.className;
			if (id == 'nav' || cls == 'level1' || cls =='level2') {
				for (m=0; m<elem.childNodes.length; m++) {
					node = elem.childNodes[m];
					if (node.nodeName=="LI") {
						node.onmouseover=function() {
							this.className+=" over";
						}
						node.onmouseout=function() {
							this.className=this.className.replace(" over", "");
						}
					}
				}
			}
		}
	}
}

function listenClick(e) {
	// this function makes clicking area bigger on drop down menu
	var targ;
	if (!e) var e = window.event;
	if (e.target) targ = e.target;
	else if (e.srcElement) targ = e.srcElement;
	if (targ.nodeType == 3) // defeat Safari bug
		targ = targ.parentNode;
	if (targ.tagName == 'TD' && !targ.onclick) {
		var str = targ.parentNode;
		if (!isNaN(str.id) && (str.id > 0)) {
			freak_view(str.id);
		}
	}
}

function freak_highlist() {
	ff = document.zappa;
	arrTr = document.getElementsByTagName("tr");
	for (i=0, j=arrTr.length; i < j; i++) {
		if (arrTr[i].className != 'nothanks')
		{
			/* arrTr[i].onclick = function() {
				if (this.className == 'high') {
					this.className = '';
				} else {
					this.className = 'high';
				}
			} */
			arrTr[i].onmouseover = function() {
				if (this.className != 'high') {
					this.className = 'hover';
				}
			}
			arrTr[i].onmouseout = function() {
				if (this.className != 'high') {
					this.className = '';
				}
			}
		}
	}
}

/* clock */
var clk_date = new Date();
var clk_start = 0;

function show_date() {
	clk_date = new Date();
	if (clk_date.getSeconds() == 0) { // every minute
		clk_intvl = clk_date.getTime() - clk_start;
		if (frk_reload && (clk_intvl > (frk_reload * 60000)) && (!document.forms[0].elements['id'].value)) {
			try {
				freak_rld();
			} catch (e) {}
		}
	}
	str = clk_date.toLocaleString();
	wE(gE('userdate'),str);
	setTimeout("show_date()",1000);
}

function keep_alive() {
	freak_start();
	xajax_staying_alive();
}

function start_clock() {
	clk_date = new Date();
	clk_start = clk_date.getTime();
	show_date();
	setTimeout("show_date()",1000);
}

/* init */
function freak_init() {
	if (fm = document.getElementById("message")) {
		self.setTimeout("fm.style.display='none'",2000); // 2 secs
	}
	startList();
	freak_stop();
	if (frk_stay_alive) {
		self.setTimeout('keep_alive()',300000); // 5 minutes
	}
}
