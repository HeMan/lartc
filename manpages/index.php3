<html>
<head><title>Linux Advanced Routing &amp; Traffic Control Manpages</title></head>
<body bgcolor=#ffffff>

<table width=100%><tr>
<td><H1>Linux Advanced Routing &amp; Traffic Control</H1></td>
<td valign=top align=right><a href=http://www.powerdns.com><img src=http://ds9a.nl/pub/pdns88x33c.gif></a><p></td>
<tr>
<td><a href="http://ds9a.nl/">bert hubert</a> (<a href=http://www.powerdns.com>PowerDNS.COM BV</a>)
<a href=mailto:bert.hubert@netherlabs.nl>&lt;bert.hubert@netherlabs.nl&gt;</a>,<br>
<a href="http://lartc.org/#mailinglist">lartc@vger.kernel.org</a>
(<small>mailing list, the <strong>only</strong> place to send questions!)<br>
<a href="http://vger.kernel.org/vger-lists.html#lartc">archive of the new mailing list</a>
<a href="http://mailman.ds9a.nl/pipermail/lartc/">archive of the old mailing list</a><br>
(<font color=#ff0000><a href=#mailinglist>subscribe</a> before posting!</font>)<br></small>
</td><td valign=bottom align=right><table border=1>
<tr><td>
<a href="http://lartc.org/#news">News</a> </td>
<td><a href="http://lartc.org/#mailinglist">Mailinglist</a> </td>
<td><a href="http://lartc.org/#jobs">Jobs</a> </td>
<td><a href="http://lartc.org/#bazaar">Bazaar</a></td>
<td><a href="#sponsor">Sponsor</a>
</td></tr>
</table></td>
</table>
<center>
Massive thanks to:<br>
<small>
<?
readfile("../contriblist");
?>
</small></center>
<p>
<H2>Manpages</H2>
I'm attempting, with your help, to write manpages for tc. These pages will
complement the <a href=http://lartc.org/>HOWTO</a> and are intented to be
donated to Alexey, the tc author, for inclusion in the distribution.
<p>
HTML output is somewhat shoddy in places, but looks nice:
<table border=1>
<?
function manpage($name,$desc="",$there=0)
{
	print("<tr><td><td>$name</td><td>$desc</td>");
	if($there) {
		print("<td><a href=$name.txt>txt</a></td>");
		print("<td><a href=$name.html>html</a></td>");
		print("<td><a href=$name.8>man</a></td>");
		print("<td><a href=$name.pdf>pdf</a></td>");
		print("<td><a href=$name.ps>ps</a>/<a href=$name.ps.gz>ps.gz</a></td>");
		print("<td><a href=$name.dvi>dvi</a></td>");
	}
	else print("<td colspan=6 align=center><font color=#999999>forthcoming</font></td>");
	print("</tr>");
}
manpage("tc","The main command",1);
manpage("ip","The main command",1);
manpage("tc-bfifo","Byte limited First In First Out (redirect to pbfifo)",0);
manpage("tc-filter","tc filters in depth",0);
manpage("tc-cbq","The Class Based Queueing qdisc",1);
manpage("tc-cbq-details","The Class Based Queueing qdisc in gory detail",0);
manpage("tc-dsmark","The DiffServ qdisc");
manpage("tc-htb","The Hierarchy Token Bucket qdisc",1);
manpage("tc-pbfifo","Packet &amp; byte limited First In First Out",1);
manpage("tc-pfifo","Packet limited First In First Out (redirect to pbfifo)",0);
manpage("tc-pfifo_fast","Default three-band scheduler",1);
manpage("tc-prio","N-band classful scheduler",1);
manpage("tc-red","Random Early Detection",1);
manpage("tc-sfq","Stochastic Fairness Queueing",1);
manpage("tc-tbf","Token Bucket Filter",1);
?>
</table>

<H2>Sponsor</h2>
<a href=http://www.powerdns.com>
This site made possible by PowerDNS, for all your domain needs and
nameserver software.
</a>
<br>
<a href=http://ds9a.nl/>Other ds9a.nl projects.</a>
<!-- Search Google -->
<center>
<FORM method=GET action="http://www.google.com/search">
<TABLE bgcolor="#FFFFFF"><tr><td>
<A HREF="http://www.google.com/">
<IMG SRC="http://www.google.com/logos/Logo_40wht.gif" border="0"
ALT="Google" align="absmiddle"></A>
<INPUT TYPE=text name=q size=31 maxlength=255 value="">
<INPUT type=submit name=sa VALUE="Google Search">
</td></tr></TABLE>
</FORM>
</center>
<!-- Search Google -->
<center>
<small>
$Id$

</small>
</center>
</body>
</html>
