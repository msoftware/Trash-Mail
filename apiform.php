<?
$form = "
	<center><div id='form' style='padding-right:100px; padding-left:100px;'>
	<br><table>
        <tr><td align=left valign=center >
		<b style='font-size:1.3em;'>Nutzung der Wegwerf E-Mail Adress API von " . $maildomain . "</b>
		<p style='color:#666666; text-align:justify;'>
			Dieses Informationen richten sich an die Entwickler von Anwendungen, die mit Hilfe der Wegwerf E-Mail Adress API von 
			" . $maildomain . " die Postfächer der Wegwerf E-Mail Adressen auslesen möchten. <br><br>Bei den Informationen handelt sich 
			um eine Beschreibung der API Schnittstelle auf Basis von <a href='http://de.wikipedia.org/wiki/Atom_(Format)'>Atom</a>.
			Es wird davon ausgegangen, dass Sie mit dem HTTP Protokoll und dem Atom Format vertraut sind und die allgemeinen 
			Grundprinzipien des plattformunabhängigen Austausch von Informationen vertraut sind.
		</p>
		<p style='color:#666666; text-align:justify;'>
			Hier erhalten Sie eine detailierte Einführung in die Nutzung der  Wegwerf E-Mail Adress API von " . $maildomain . ".<br>
			Diese Seite enthält alle Informationen, die Sie brauchen, um die Postfächer der Wegwerf E-Mail Adressen auszulesen und mit 
			einer Client-Bibliotheken in einer belibigen Programmiersprache zu nutzen. Detailierte Informationen zu Client-Bibliotheken 
			finden Sie unter <a href='#links'>Links</a>.
		</p>
		<h2><a name='links'>Feed-Typen</a></h2>
		<p style='color:#666666; text-align:justify;'>
			Das Wegwerf E-Mail Adress API stellt 2 unterschiedliche Feed-Typen bereit.<br>
			<ul>
				<li><b>Posteingangs Feed</b><br>
				Das Posteingangs-Feed ist ein Atom-Feed mit einer Liste von E-Mails aus dem Posteingang einer E-Mail Adresse.<br><br>
				Die vollständige GET-URI dieses Feeds lautet:<br>
				<form><input type='text' readonly value='http://" . $maildomain . "/inbox-api.php' size=80></form><br><br>
				Demo Feed:<br>
				<a href='http://" . $maildomain . "/inbox-api.php?name=max.mustermann'>
					http://" . $maildomain . "/inbox-api.php?name=max.mustermann</a><br><br><br>
				Unterstützte Abfrageparameter:<br>
				<ul>
					<b>name</b>: 
					<ul>Der Name des Postfachs für die sie die E-Mails abholen möchten.<br><br>
					<b>Hinweis:</b> Hier wird nur der Name <b>ohne die Endung @" . $maildomain . "</b> angegeben.<br><br></ul>
				</ul>
				Die Liste beginnt immer mit der jüngsten E-Mail aus dem Posteingang der Wegwerf E-Mail Adresse. Dann folgen die 
				älteren Einträge in chronologischer Reihenfolge.<br><br> 
				Folgendes Beispiel zeigt, wie der Wegberf-E-Mail Atom Feed aussehen könnte:<br><br>
				<ul style='font-family:courier-new; background-color:#FFFFFF; border:1px solid silver; padding:4px; margin:4px;'>
					&lt;?xml version='1.0' encoding='utf-8'?&gt;<br>
					&lt;feed xmlns=\"http://www.w3.org/2005/Atom\"&gt;<br>
					<ul style='font-family:courier-new'>
						&lt;author&gt; &lt;name&gt;max.mustermann&lt;/name&gt; &lt;/author&gt;<br>
						&lt;title&gt;Mails für max.mustermann@1pad.de&lt;/title&gt;<br>
						&lt;id&gt;urn:uuid:c0cfbe9e-bc42-45cf-928f-7521b8b482ee&lt;/id&gt;<br>
						&lt;updated&gt;2011-03-04T15:26:39+01:00&lt;/updated&gt;<br>
						&lt;entry&gt;<br>
						<ul style='font-family:courier-new'>
					&lt;title&gt;Test Mail 9 Timestamp: 1299248148&lt;/title&gt;<br>
					&lt;link href=\"http://1pad.de/details.php?search=max.mustermann&amp;nr=45\"/&gt;<br>
					<a name=mailid style='font-family:courier-new; font-weight:bold; color:#000000'>&lt;id&gt;45&lt;/id&gt;</a><br>
					&lt;updated&gt;Fri, 4 Mar 2011 15:15:48 +0100&lt;/updated&gt;<br>
					&lt;summary&gt;&lt;![CDATA[ subject =&gt; Test Mail 9 Timestamp: 1299248148<br>
					from =&gt; Tester &lt;webmaster@1pad.de&gt;<br>
					to =&gt; Max Mustermann &lt;max.mustermann@1pad.de&gt;<br>
					date =&gt; Fri, 4 Mar 2011 15:15:48 +0100<br>
					message_id =&gt; &lt;464e5e92b84d652a499b89a7dea49d48@1pad.de&gt;<br>
					size =&gt; 7919<br>
					uid =&gt; 46<br>
					msgno =&gt; 45<br>
					recent =&gt; 0<br>
					flagged =&gt; 0<br>
					answered =&gt; 0<br>
					deleted =&gt; 0<br>
					seen =&gt; 0<br>
					draft =&gt; 0<br>
					]]&gt;&lt;/summary&gt;<br>
					&lt;content&gt;&lt;![CDATA[ subject =&gt; Test Mail 9 Timestamp: 1299248148<br>
					from =&gt; Tester &lt;webmaster@1pad.de&gt;<br>
					to =&gt; Max Mustermann &lt;max.mustermann@1pad.de&gt;<br>
					date =&gt; Fri, 4 Mar 2011 15:15:48 +0100<br>
					message_id =&gt; &lt;464e5e92b84d652a499b89a7dea49d48@1pad.de&gt;<br>
					size =&gt; 7919<br>
					uid =&gt; 46<br>
					msgno =&gt; 45<br>
					recent =&gt; 0<br>
					flagged =&gt; 0<br>
					answered =&gt; 0<br>
					deleted =&gt; 0<br>
					seen =&lt; 0<br>
					draft =&gt; 0<br>
					]]&gt;&lt;/content&gt;<br>
					&lt;/entry&gt;<br>
						</ul>
					</ul>

					&lt;/feed&gt;<br>


				</ul>
				<br></li>
				<li><b>E-Mail Feed</b><br>
				Das E-Mail-Feed ist ein Atom-Feed mit allen Details einer E-Mail aus dem Posteingang einer Wegwerf E-Mail Adresse.<br><br>
				Die vollständige GET-URI dieses Feeds lautet:<br>
				<form><input type='text' readonly value='http://" . $maildomain . "/mail-api.php' size=80></form><br><br>
				Demo Feed:<br>
				<a href='http://" . $maildomain . "/mail-api.php?name=max.mustermann&id=40'>
					http://" . $maildomain . "/mail-api.php?name=max.mustermann&id=40</a><br><br><br>
				Unterstützte Abfrageparameter:<br>
				<ul>
					<b>name</b>: 
					<ul>Der Name des Postfachs für die sie die E-Mails abholen möchten.<br><br>
					<b>Hinweis:</b> Hier wird nur der Name <b>ohne die Endung @" . $maildomain . "</b> angegeben.<br><br></ul>
					<b>id</b>: 
					<ul>Die Id ist die Id Ihrer E-Mail. Die ID der E-Mail entspricht der Id aus dem 	
					<a href='#mailid'>inbox-api Feed.</a></ul>
					<br><br>
				</ul>
				Der Eintrag entspricht immer einer einzigen E-Mail im Posteingang der Wegwerf E-Mail Adresse. E-Mail Anhänge werden
				nicht in die XML Daten übernommen.
				Folgendes Beispiel zeigt, wie der Wegberf-E-Mail Atom Feed aussehen könnte:<br><br>
				<ul style='font-family:courier-new; background-color:#FFFFFF; border:1px solid silver; padding:4px; margin:4px;'>



					&lt;?xml version='1.0' encoding='utf-8'?&gt;<br>
					&lt;feed xmlns=\"http://www.w3.org/2005/Atom\"&gt;<br>
					<ul style='font-family:courier-new'>
					&lt;author&gt; 
					<ul style='font-family:courier-new'>
					&lt;name&gt;max.mustermann&lt;/name&gt;<br>
					</ul>
					&lt;/author&gt;<br>
					&lt;title&gt;Mail 40 an max.mustermann@1pad.de&lt;/title&gt;<br>
					&lt;id&gt;urn:uuid:c0cfbe9e-bc42-45cf-928f-7521b8b482ee&lt;/id&gt;<br>
					&lt;updated&gt;2011-03-07T15:36:28+01:00&lt;/updated&gt;<br>
					&lt;entry&gt;<br>
					<ul style='font-family:courier-new'>
						    &lt;title&gt;Test Mail 4 Timestamp: 1299248134&lt;/title&gt;<br>
						    &lt;link href=\"http://1pad.de/details.php?search=max.mustermann&amp;nr=40\"/&gt;<br>
						    &lt;id&gt;40&lt;/id&gt;<br>
						    &lt;updated&gt;Fri, 4 Mar 2011 15:15:34 +0100&lt;/updated&gt;<br>
						    &lt;summary&gt;&lt;![CDATA[ Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur ... ]]&gt;&lt;/summary&gt;<br>
							    &lt;content&gt;&lt;![CDATA[ Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur ...  ]]&gt;&lt;/content&gt;<br>
					</ul>
					&lt;/entry&gt;<br>
					</ul>
					&lt;/feed&gt;<br>



				</ul>
				<br></li>
			</ul>
		</p>
		<h2><a name='links'>Links</a></h2>
		<p style='color:#666666; text-align:justify;'>
		<ul>
			<li>PHP</li>
			<ul>
			<li><a href='http://simplepie.org/'>A super-fast, easy-to-use, RSS and Atom parser written in PHP</a></li>
			</ul><br>

			<li>Java</li>
			<ul>
			<li><a href='http://abdera.apache.org/'>Apache Abdera - High-performance implementation of the IETF Atom Syndication Format (RFC 4287)</a></li>
			</ul><br>

			<li>Perl</li>
			<ul>
			<li><a href='http://search.cpan.org/~miyagawa/XML-Atom/'>XML::Atom - Atom feed and API implementation</a></li>
			</ul><br>

			<li>Python</li>
			<ul>
			<li><a href='http://www.feedparser.org/'>Universal Feed Parser - Parse RSS and Atom feeds in Python.</a></li>
			</ul><br>
		</ul>
		</p>
	</td></tr>
	</table></form></div></center>";
?>
