// ** I18N

// Calendar SK language
// Author: Jan Michalicka <webdev@jimi.sk>
// Encoding: any
// Distributed under the same terms as the calendar itself.

// For translators: please use UTF-8 if possible.  We strongly believe that
// Unicode is the answer to a real internationalized world.  Also please
// include your contact information in the header, as can be seen above.

// full day names
Calendar._DN = new Array
("Nedeľa",
 "Pondelok",
 "Utorok",
 "Streda",
 "Štvrtok",
 "Piatok",
 "Sobota",
 "Nedeľa");

// Please note that the following array of short day names (and the same goes
// for short month names, _SMN) isn't absolutely necessary.  We give it here
// for exemplification on how one can customize the short day names, but if
// they are simply the first N letters of the full name you can simply say:
//
//   Calendar._SDN_len = N; // short day name length
//   Calendar._SMN_len = N; // short month name length
//
// If N = 3 then this is not needed either since we assume a value of 3 if not
// present, to be compatible with translation files that were written before
// this feature.

// short day names
Calendar._SDN = new Array
("Ne",
 "Po",
 "Ut",
 "St",
 "Št",
 "Pi",
 "So",
 "Ne");

// First day of the week. "0" means display Sunday first, "1" means display
// Monday first, etc.
Calendar._FD = 1;

// full month names
Calendar._MN = new Array
("Január",
 "Február",
 "Marec",
 "Apríl",
 "Máj",
 "Jún",
 "Júl",
 "August",
 "September",
 "Október",
 "November",
 "December");

// short month names
Calendar._SMN = new Array
("Jan",
 "Feb",
 "Mar",
 "Apr",
 "Máj",
 "Jún",
 "Júl",
 "Aug",
 "Sep",
 "Okt",
 "Nov",
 "Dec");

// tooltips
Calendar._TT = {};
Calendar._TT["INFO"] = "O kalendári";

Calendar._TT["ABOUT"] =
"DHTML Date/Time Selector\n" +
"(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" + // don't translate this this ;-)
"For latest version visit: http://www.dynarch.com/projects/calendar/\n" +
"Distributed under GNU LGPL.  See http://gnu.org/licenses/lgpl.html for details." +
"\n\n" +
"Date selection:\n" +
"- Use the \xab, \xbb buttons to select year\n" +
"- Use the " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " buttons to select month\n" +
"- Hold mouse button on any of the above buttons for faster selection.";
Calendar._TT["ABOUT_TIME"] = "\n\n" +
"Time selection:\n" +
"- Click on any of the time parts to increase it\n" +
"- or Shift-click to decrease it\n" +
"- or click and drag for faster selection.";

Calendar._TT["PREV_YEAR"] = "Predchádzajúci rok (podrž pre menu)";
Calendar._TT["PREV_MONTH"] = "Predchádzajúci mesiac (podrž pre menu)";
Calendar._TT["GO_TODAY"] = "Dnes";
Calendar._TT["NEXT_MONTH"] = "Nasledujúci mesiac (podrž pre menu)";
Calendar._TT["NEXT_YEAR"] = "Nasledújúci rok (podrž pre menu)";
Calendar._TT["SEL_DATE"] = "Vyber dátum";
Calendar._TT["DRAG_TO_MOVE"] = "Ťahaj pre presun";
Calendar._TT["PART_TODAY"] = " (dnes)";

// the following is to inform that "%s" is to be the first day of week
// %s will be replaced with the day name.
Calendar._TT["DAY_FIRST"] = "Zobraz %s ako prvý";

// This may be locale-dependent.  It specifies the week-end days, as an array
// of comma-separated numbers.  The numbers are from 0 to 6: 0 means Sunday, 1
// means Monday, etc.
Calendar._TT["WEEKEND"] = "0,6";

Calendar._TT["CLOSE"] = "Zavrieť";
Calendar._TT["TODAY"] = "Dnes";
Calendar._TT["TIME_PART"] = "(Shift-)klikni alebo potiahni pre zmenu hodnoty";

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "%d. %m %Y";
Calendar._TT["TT_DATE_FORMAT"] = "%A %e. %B %Y";

Calendar._TT["WK"] = "wk";
Calendar._TT["TIME"] = "Čas:";
