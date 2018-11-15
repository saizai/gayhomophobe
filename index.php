<html xmlns:fb="http://www.facebook.com/2008/fbml">
	<head>
		<link rel="alternate" type="application/rss+xml" title="Gay Homophobe (RSS)" href="http://feeds.feedburner.com/GayHomophobe" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<title>Gay Homophobe</title>
		<style type="text/css">
			body{background-color:#fff;color:#333;font-family:Arial,Verdana,sans-serif;text-align:center;}
			a,a:visited,a:active{color:#0080ff;text-decoration:underline;}
			a:hover{text-decoration:none;}
			#container{margin:5% 5% 0 5%;}
			.footer{clear:both;  margin:auto; }
			#current{font-size: 2em;}
			#current #days {font-size: 3em; font-weight: bold;}
			#comments{font-size: 0.6em;}
			#donation{font-size: 1em;}
			#quotes{margin-top: 1em;}
			/* .timeline { font-size: 0.8em;  } */
			/* #previous{font-size: 0.7em;} */
			.col2 { margin: auto; }
			.col2 > span {text-align: left; float: left; width:45%; padding: 0 1%; max-width: 45%;}
			.col2:after {
			    content: ".";
			    display: block;
			    height: 0;
			    clear: both;
			    visibility: hidden;
			}

            .at_flat_counter { max-height: 32px; }

			table {
				margin: auto;
			/*	width: 480px;
				border-collapse: collapse; */
				text-align: center;
			}
			th {
				font-weight: normal;
				padding: 10px 8px;
				border-bottom: 2px solid #6678b1;
			}
			td { padding: 9px 8px 0px 8px; }
			td img { height: 50px; width: auto; }
			th.reason, td.reason { width: 300px; }
			th.reason img, td.reason img { height: auto; }
			img { vertical-align: middle; }

			ul { list-style: none; margin: 0 0 1ex 0; padding: 0; }
			ul li { list-style: none; margin: 0 0 0.5ex; padding: 0; }

            #links {position: absolute; right: 10px; top: 10px; margin-right: 10px;}
            /* https://gist.github.com/thebigreason/1296097 */
            /* This gets Google to fall into place */
            .social {
            	font-size: 1px;
            }

            /* This gets Facebook to fall into place */
            .social iframe {
            	vertical-align: middle;
            }

            /* Set an optional width for your button wrappers */
            .social span {
            	display: inline-block;
            	width: 110px;
            }

            /* Adjust the widths individually if you like */
            .social .google {
            	width: 75px;
            }

            .clear {
                clear: both;
                height: 0;
                overflow: hidden;
            }
		</style>
		<script type="text/javascript">
            window.google_analytics_uacct = "UA-386408-11";
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-386408-11', 'gayhomophobe.com');
            ga('require', 'linkid', 'linkid.js');
            ga('send', 'pageview');

            var addthis_config = {
                ui_508_compliant: true,
                "data_track_clickback": true,
                data_ga_tracker: pageTracker,
                services_exclude: 'print'
            };

            var addthis_share =
            {
                url: "http://gayhomophobe.com",
                title: "@gayhomophobe - # days since the last prominent homophobe was caught in a gay sex scandal"  // came out pro-gay
            }
		</script>
	</head>
	<body>
        <div>
            <div class="addthis_responsive_sharing"></div>
            <div class="addthis_sharing_toolbox"></div>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js" async="async"></script>
        </div><!-- links -->

        <div class="clear"></div>

		<div id="container">
			<div id="current">
                <?php
                    $cur = floor((time() - mktime(0,0,0, 2, 11, 2018)) / (60*60*24));
                    $days = array($cur, 238, 358, 52, 39, 369, 166, 143, 57, 60, 107, 188, 12, 23, 43, 1, 60, 65, 26, 4, 13, 17, 133, 191, 26, 113, 56, 534, 317, 10, 94, 46, 220, 35, 509, 223, 25);
                    $avg = floor(array_sum($days) / count($days));
                ?>
				<p>
				  # days since the last prominent homophobe <!-- came out pro-gay: --> was caught in a gay sex scandal:
				  <div id="days"><?= $cur ?></div>
				</p>
				<p>Latest winner:
                    <img src="norman_goldwasser.jpg" />
					Dr. <a href="https://truthwinsout.org/news/2018/11/41044/">Norman Goldwasser</a>, Nov. 2, 2018
				</p>
				<p>
                   "Gay conversion" <a href="https://about.me/normangoldwasser">therapist</a>, <a href="https://www.nbcnews.com/feature/nbc-out/ex-gay-therapist-allegedly-found-soliciting-hookups-gay-dating-apps-n931726">"unable to help [him]self"</a> from Manhunt hookups.
				</p>
            </div><!-- current -->

    		<div id="previous">
    			<h2>36 previous winners <span style="font-size: 0.8em;">(avg days held: <?= $avg ?>)</span></h2>
    			<table>
    				<thead>
    					<tr>
    						<th scope="col">Pic</th>
    						<th scope="col">Name</th>
    						<th scope="col">Date</th>
    						<th scope="col">Days held:</th>
    						<th scope="col" class="reason">Reaction to outing</th>
    					</tr>
    				</thead>
    				<tbody>

        				<tr>
                            <td><!-- no photo available --></td>
                            <td>Dr. <a href="https://www.thestar.com/news/gta/2018/03/09/psychiatrist-who-treated-patients-for-their-homosexuality-had-sex-with-male-patients-in-his-office.html">Melvyn Iscove</a></td>
                            <td>March 9, 2018</td>
                            <td>238</td>
                            <td>"Gay conversion" therapist <a href="http://www.cpso.on.ca/DoctorDetails/Melvyn-Lawrence-Iscove/0020779-25567">suspended</a> (pending penalty hearing) for <a href="melvyn_iscove_finding.pdf">sexually abusing his patients</a>. Denies charges through lawyer.</td>
        				</tr>
                        <tr>
                            <td><img src="ralph_shortey.png" /></td>
                            <td>OK. Sen. <a href="http://kfor.com/2017/03/16/oklahoma-state-senator-ralph-shortey-turns-himself-in-after-being-charged-with-engaging-in-child-prostitution/">Ralph Shortey</a> (<a href="https://en.wikipedia.org/wiki/Oklahoma_Republican_Party">R</a>)</td>
                            <td>March 16, 2017</td>
                            <td>358</td>
                            <td>Charged with three <a href="https://localtvkfor.files.wordpress.com/2017/03/17-08441-redacted-report.pdf">felonies</a> for soliciting a teenaged male prostitute, <a href="http://newsok.com/article/5572707">pled guilty</a> to child sex trafficking to get child porn charges dropped; <a href="http://newsok.com/article/5542642">resigned</a> after being <a href="http://webserver1.lsb.state.ok.us/cf_pdf/2017-18%20INT/SRES/SR7%20INT.PDF">suspended</a>; <a href="https://www.youtube.com/watch?v=25-m_mktoBM">body cam</a> &amp; <a href="https://www.youtube.com/watch?v=WJQ6_khlxnc">interrogation</a> video released</td>
                        </tr>
					    <tr>
                            <td><img src="kevin_kanouse.png" /></td>
							<td>Bp. <a href="http://www.huffingtonpost.com/entry/lutheran-bishop-comes-out-as-gay-after_55b6637ce4b0074ba5a54ac5">Kevin Kanouse</a> (<a href="http://www.elca.org/">ELCA</a>)</td>
                            <td>July 27, 2015</td>
                            <td>598</td>
                            <td class="reason"><a href="#stars"><img src="rainbow_star.jpg" /></a><a href="https://ntnl.org/bp-kanouses-letter-from-july-18-2015/">came out</a> voluntarily to <a href="https://ntnl.org/why-now-why-the-youth-gathering/">Evangelical Youth Gathering</a></td>
                        </tr>
                        <tr>
                            <td><img src="dennis_hastert.jpg" /></td>
                            <td>Rep. <a href="https://gma.yahoo.com/exclusive-alleged-dennis-hastert-sex-abuse-victim-named-104016079--abc-news-topstories.html">Dennis Hastert</a> (<a href="https://secure.wikimedia.org/wikipedia/en/wiki/Republican_Party_(United_States)">R</a>)</td>
                            <td>June 5, 2015</td>
                            <td>52</td>
                            <td class="reason"><a href="http://www.wsj.com/public/resources/documents/hastert052815.pdf">indicted</a> (and <a href="http://www.nytimes.com/2016/04/28/us/dennis-hastert-sentencing.html?_r=1">convicted in part</a>) for felony bank fraud related to hush money to former male high school student, <a href="https://gma.yahoo.com/exclusive-alleged-dennis-hastert-sex-abuse-victim-named-104016079--abc-news-topstories.html">accused by sister of 2nd victim</a></td>
                        </tr>
                        <tr>
                            <td><img src="randy_boehning.jpg" /></td>
                            <td>N.D. Rep. <a href="http://www.inforum.com/news/3732441-fargo-lawmaker-sent-explicit-photo-claims-disclosure-was-payback-vote-gay-rights-bill/">Randy Boehning</a> (<a href="https://en.wikipedia.org/wiki/North_Dakota_Republican_Party">R</a>)</td>
                            <td>April 27, 2015</td>
                            <td>39</td>
                            <td class="reason"><a href="#stars"><img src="half_star.png" /></a> outed on Grindr after voting against anti-discrimination bill; acknowledged it was him</td>
                        </tr>
                        <tr>
                            <td><img src="frazier_cross.jpg" /></td>
                            <td><a href="http://abcnews.go.com/blogs/headlines/2014/04/accused-kansas-shooter-was-protected-federal-witness-but-hateful-ways-continued/">Frazier Glenn Cross</a> (<a href="http://en.wikipedia.org/wiki/White_Patriot_Party">KKK/WPP</a>)</td>
                            <td>April 24, 2014</td>
                            <td>368</td>
                            <td class="reason">arrested for <a href="http://en.wikipedia.org/wiki/Frazier_Glenn_Miller,_Jr.#Shooting">JCC shootings</a>, unrelated to reported rape of male prostitute</td>
                        </tr>
    					<tr>
    						<td><img src="javier_suarez.jpg" /></td>
    						<td><a href="http://blabbeando.blogspot.com.au/2013/11/a-leading-opponent-of-same-sex-marriage.html">Javier Suárez Pascagaza</a></td>
    						<td>November 10, 2013</td>
    						<td>166</td>
    						<td class="reason">leading Columbian gay marriage opponent outed, doesn't deny when <a href="http://www.wradio.com.co/escucha/archivo_de_audio/javier-suarez-de-la-fundacion-marido-y-mujer-explica-oposicion-al-matrimonio-igualitario/20131111/oir/2012799.aspx">asked</a></td>
    					</tr>
    					<tr>
    						<td><img src="alan_chambers.jpg"/></td>
    						<td><a href="http://exodusinternational.org/2013/06/i-am-sorry/">Alan Chambers</a> (<a href="http://exodusinternational.org/">EI</a>)</td>
    						<td>June 20, 2013</td>
    						<td>143</td>
    						<td class="reason"><a href="#stars"><img src="rainbow_star.jpg" /></a> "ex-gay" ministry leader <a href="http://exodusinternational.org/2013/06/watch-alan-manning-chambers-opening-address-at-the-38th-annual-exodus-freedom-conference/">formally apologized</a> for damage done by Exodus</td>
    					</tr>
    					<tr>
    						<td><img src="john_paulk.jpg"/></td>
    						<td><a href="http://www.advocate.com/print/politics/religion/2013/04/24/john-paulk-formally-renounces-apologizes-harmful-ex-gay-movement">John Paulk</a> (ex <a href="http://en.wikipedia.org/wiki/Love_Won_Out">LWO</a>)</td>
    						<td>April 24, 2013</td>
    						<td>57</td>
    						<td class="reason"><a href="#stars"><img src="rainbow_star.jpg" style="float:left;" /></a>
    							former "ex-gay" spokesman came out against "ex-gay movement"
    						</td>
                        </tr>
    					<tr>
    						<td><img src="keith_obrien.jpg"/></td>
    						<td>Cardinal <a href="http://www.guardian.co.uk/world/2013/feb/23/cardinal-keith-o-brien-accused-inappropriate">Keith O'Brien</a> (<a href="https://en.wikipedia.org/wiki/Roman_Catholic">RC</a>)</td>
    						<td>Feb 23, 2013</td>
    						<td>60</td>
    						<td class="reason"><a href="http://www.telegraph.co.uk/comment/9121424/We-cannot-afford-to-indulge-this-madness.html">anti-gay</a> cardinal "used night prayers as an excuse for inappropriate contact" with subordinates; forced to <a href="http://www.guardian.co.uk/world/2013/feb/25/cardinal-obrien-resigns-full-statements">resign</a> by retiring pope, initial denials followed by <a href="http://www.scmo.org/articles/statement-from-cardinal-obrien.html">confession</a></td>
    					</tr>
    					<tr>
    						<td><img src="ryan_muehlhauser.jpg"/></td>
    						<td><a href="http://www.startribune.com/local/177906901.html">Ryan J. Muehlhauser</a></td>
    						<td>Nov 8, 2012</td>
    						<td>107</td>
    						<td class="reason"><a href="http://www.outpostministries.org/home.htm">"ex-gay" counseling</a> pastor charged with sexually assaulting clients</td>
    					</tr>
    					<tr>
    						<td><img src="zach_wyatt.jpg"/></td>
    						<td>MO. Rep. <a href="http://thenewcivilrightsmovement.com/gop-lawmaker-comes-out-as-gay-then-comes-out-against-dont-say-gay-bill/politics/2012/05/02/38922">Zach Wyatt</a> (<a href="https://secure.wikimedia.org/wikipedia/en/wiki/Republican_Party_(United_States)">R</a>)</td>
    						<td>May 2, 2012</td>
    						<td>188</td>
    						<td class="reason"><a href="#stars"><img src="rainbow_star.jpg" style="float:left;"/></a>
    							<a href="http://www.youtube.com/watch?v=k4koieDcoXE">came out</a> voluntarily to <a href="http://www.progressmissouri.org/rep-zach-wyatt-r-kirksville-hb2051">oppose</a> "Don't Say Gay" bill; in office until 2013, withdrew from re-election to study marine biology</td>
    					</tr>
    					<tr>
    						<td><img src="jeremy_marks.jpg"/></td>
    						<td><a href="http://www.guardian.co.uk/lifeandstyle/2012/apr/20/i-tried-to-cure-gay-people">Jeremy Marks</a> (<a href="https://secure.wikimedia.org/wikipedia/en/wiki/Courage_UK">C UK</a>)</td>
    						<td>April 20, 2012</td>
    						<td>12</td>
    						<td class="reason"><a href="#stars"><img src="rainbow_star.jpg" style="float:left;"/></a>
    						came out voluntarily, now advocating ex-ex-gay</td>
    					</tr>
    					<tr>
    						<td><img src="kathryn_lehman.jpg"/></td>
    						<td><a href="http://www.huffingtonpost.com/2012/03/28/kathryn-lehman-doma_n_1341775.html">Kathryn Lehman</a> (<a href="https://secure.wikimedia.org/wikipedia/en/wiki/Republican_Party_(United_States)">R</a>)</td>
    						<td>March 28th, 2012</td>
    						<td>23</td>
    						<td class="reason"><a href="#stars"><img src="rainbow_star.jpg" style="float:left;"/></a>
    						came out voluntarily, now advocating repeal of anti-gay law she helped write</td>
    					</tr>
    					<tr>
    						<td><img src="paul_babeu.jpg"/></td>
    						<td>Sheriff <a href="http://slog.thestranger.com/slog/archives/2012/02/18/conservative-gop-arizona-sheriffand-mitt-romney-az-campaign-co-chairpledges-to-deport-illegal-immigrants">Paul Babeu</a> (<a href="https://secure.wikimedia.org/wikipedia/en/wiki/Republican_Party_(United_States)">R</a>)</td>
    						<td>February 16, 2012</td>
    						<td>43</td>
    						<td class="reason"><a href="#stars"><img src="rainbow_star.jpg" style="float:left;"/></a> <a href="http://tpmmuckraker.talkingpointsmemo.com/2012/02/arizona_sheriff_paul_babeu_angrily_denies_ex-boyfr.php">came out</a> and <a href="http://www.towleroad.com/2012/02/babeublitzer.html">spoke in favor</a> of same-sex marriage after <a href="http://www.phoenixnewtimes.com/2012-02-16/news/paul-babeu-s-mexican-ex-lover-says-sheriff-s-attorney-threatened-him-with-deportation/">threatened ex-boyfriend</a> got a lawyer</td>
    					</tr>
    					<tr>
    						<td><img src="michael_berry.jpg"/></td>
    						<td><a href="http://www.towleroad.com/2012/02/conservative-talk-radio-host-michael-berry-was-definitely-at-that-gay-bar-in-houston-.html">Michael Berry</a></td>
    						<td>February 15, 2012</td>
    						<td>1</td>
    						<td class="reason">deleted Twitter &amp; Facebook accounts</td>
    					</tr>
    					<tr>
    						<td><img src="greg_davis.jpg" /></td>
    						<td>Mayor <a href="http://www.commercialappeal.com/news/2011/dec/16/davis-receipts-prompt-frank-talk/">Greg Davis</a> (<a href="http://en.wikipedia.org/wiki/Republican_Party_(United_States)">R</a>)</td>
    						<td>December 16, 2011</td>
    						<td>60</td>
    						<td class="reason"><a href="#stars"><img src="half_star.png" style="float: left;"/></a> came out after <a href="http://www.youtube.com/watch?feature=player_detailpage&v=LwXK2XC9B6w#t=33s">ironic</a> audit showed city paid for gay sex shop purchase</td>
    					</tr>
    					<tr>
    						<td><img src="john_smid.jpg" /></td>
    						<td><a href="http://thinkprogress.org/lgbt/2011/10/11/340335/former-ex-gay-ministry-leader-comes-out-recants-previous-teachings/">John Smid</a> (ex <a href="https://secure.wikimedia.org/wikipedia/en/wiki/Love_In_Action">LIA</a>)</td>
    						<td>October 11, 2011</td>
    						<td>65</td>
    						<td class="reason"><a href="#stars"><img src="rainbow_star.jpg" style="float: left;"/></a> <a href="http://www.gracerivers.com/gays-repent/">came out</a> voluntarily, now advocating ex-ex-gay</td>
    					</tr>
    					<tr>
    						<td><img src="ian_dempsey.jpg"/></td>
    						<td>Msgr. <a href="http://www.smh.com.au/national/priest-takes-a-holiday-after-rape-claim-story-breaks-20110914-1k9re.html">Ian Dempsey</a> (<a href="https://secure.wikimedia.org/wikipedia/en/wiki/Roman_Catholic_Archdiocese_of_Adelaide">RC</a>)</td>
    						<td>Sept. 15, 2011</td>
    						<td>26</td>
    						<td class="reason">denied wrongdoing, victim under <a href="http://www.theaustralian.com.au/news/abused-bishop-ready-to-forgive/story-e6frg6n6-1226133531732">confessional gag order</a></td>
    					</tr>
    					<tr>
    						<td><img src="markku_koivisto.jpg"/></td>
    						<td>Rev. <a href="http://translate.google.com/translate?hl=en&sl=fi&u=http://fi.wikipedia.org/wiki/Markku_Koivisto&ei=TUFyTtPhOsr40gG8xLT8CQ&sa=X&oi=translate">Markku Koivisto</a> (<a href="http://en.wikipedia.org/wiki/Lutheran">Lu</a>)</td>
    						<td>Sept. 11, 2011</td>
    						<td>4</td>
    						<td class="reason"><img src="half_star.png" style="float: left;"/> resigned, admitted homosexual infidelity</td>
    					</tr>
    					<tr>
    						<td><img src="roberto_arango.jpg"/></td>
    						<td>Sen. <a href="http://en.wikipedia.org/wiki/Roberto_Arango#Nude_pictures_scandal">Roberto Arango</a> (<a href="http://en.wikipedia.org/wiki/Puerto_Rican_Republican_Party">R</a> / <a href="http://en.wikipedia.org/wiki/New_Progressive_Party_of_Puerto_Rico">NPP</a>)</td>
    						<td>Aug. 29, 2011</td>
    						<td>13</td>
    						<td class="reason"><img src="half_star.png" style="float: left;"/> resigned, denial: "documenting weight loss"; <a href="http://www.elnuevodia.com/admitesuhomosexualidadrobertoarango-1726756.html">came out</a> 2.5 years later</td>
    					</tr>
    					<tr>
    						<td><img src="philip_hinkle.jpg"/></td>
    						<td>Rep. <a href="http://en.wikipedia.org/wiki/Phillip_Hinkle#Hotel_encounter">Philip Hinkle</a> (<a href="http://en.wikipedia.org/wiki/Republican_Party_(United_States)">R</a>)</td>
    						<td>Aug. 12, 2011</td>
    						<td>17</td>
    						<td class="reason">stayed in office 1 year; didn't run for reelection</td>
    					</tr>
    					<tr>
    						<td><img src="albert_odulele.jpg"/></td>
    						<td>Rev. <a href="http://www.independent.co.uk/news/uk/crime/pastor-jailed-for-fondling-boy-2258568.html">Albert Odulele</a> (GHIP)</td>
    						<td>March 31, 2011</td>
    						<td>133</td>
    						<td class="reason"><img src="half_star.png" style="float: left;"/> religously conflicted, pled guilty, served 4 months in prison</td>
    					</tr>
    					<tr>
    						<td><img src="eddie_long.jpg"/></td>
    						<td>Rev. <a href="http://en.wikipedia.org/wiki/Eddie_Long#Allegations_of_sexual_impropriety_and_lawsuits">Eddie Long</a> (<a href="http://en.wikipedia.org/wiki/New_Birth_Missionary_Baptist_Church">NBMBC</a>)</td>
    						<td>Sept. 21, 2010</td>
    						<td>191</td>
    						<td class="reason">denial</td>
    					</tr>
    					<tr>
    						<td><img src="ken_mehlman.jpg"/></td>
    						<td>Chm. <a href="http://en.wikipedia.org/wiki/Ken_Mehlman#Coming_out">Ken Mehlman</a>  (<a href="http://en.wikipedia.org/wiki/Republican_Party_(United_States)">R</a>)</td>
    						<td>Aug. 26, 2010</td>
    						<td>26</td>
    						<td class="reason"><a href="#stars"><img src="rainbow_star.jpg" style="float: left;"/><img src="rainbow_star.jpg" style="float: left;"/></a> came out voluntarily, resigned, now <a href="http://www.projectrightside.com/">advocating for gay rights</a></td>
    					</tr>
    					<tr>
    						<td><img src="george_rekers.jpg"/></td>
    						<td>Rev. <a href="http://en.wikipedia.org/wiki/George_Rekers#.22Rent_boy.22_allegations">George Rekers</a> (<a href="http://en.wikipedia.org/wiki/Southern_Baptist">SBC</a>)</td>
    						<td>May 4, 2010</td>
    						<td>113</td>
    						<td class="reason">resigned, <a href="http://www.youtube.com/watch?v=IlnQZVTAcRc">denial</a>: "lifting luggage"</td>
    					</tr>
    					<tr>
    						<td><img src="roy_ashburn.jpg"/></td>
    						<td>Sen. <a href="http://en.wikipedia.org/wiki/Roy_Ashburn">Roy Ashburn</a> (<a href="http://en.wikipedia.org/wiki/Republican_Party_(United_States)">R</a>)</td>
    						<td>March 9, 2010</td>
    						<td>56</td>
    						<td class="reason"><a href="#stars"><img src="rainbow_star.jpg" style="float: left;"/></a> came out voluntarily, now advocating for gay rights</td>
    					</tr>
    					<tr>
    						<td><img src="mark_buse.jpg"/></td>
    						<td>CoS <a href="http://joemygod.blogspot.com/2008/09/outed-mccain-chief-of-staff-mark-buse.html">Mark Buse</a> (<a href="http://en.wikipedia.org/wiki/Republican_Party_(United_States)">R</a>)</td>
    						<td>Sept. 22, 2008</td>
    						<td>534</td>
    						<td class="reason">no response to outing; worked for anti-gay McCain until 2012</td>
    					</tr>
    					<tr>
    						<td><img src="glenn_murphy_jr.jpg"/></td>
    						<td><a href="http://newsandtribune.com/clarkcounty/x519371512/Glenn-Murphy-Jr-charged-with-class-B-felony">Glenn Murphy, Jr.</a> (<a href="http://en.wikipedia.org/wiki/Republican_Party_(United_States)">R</a>)</td>
    						<td>Nov. 9, 2007</td>
    						<td>317</td>
    						<td class="reason">resigned for "business opportunity"</td>
    					</tr>
    					<tr>
    						<td><img src="richard_curtis.jpg"></td>
    						<td>Rep. <a href="http://en.wikipedia.org/wiki/Richard_Curtis_(politician)">Richard Curtis</a> (<a href="http://en.wikipedia.org/wiki/Republican_Party_(United_States)">R</a>)</td>
    						<td>Oct. 30, 2007</td>
    						<td>10</td>
    						<td class="reason">resigned, filed extortion charges</td>
    					</tr>
    					<tr>
    						<td><img src="bob_allen.jpg"/></td>
    						<td>Rep. <a href="http://en.wikipedia.org/wiki/Bob_Allen">Bob Allen</a> (<a href="http://en.wikipedia.org/wiki/Republican_Party_(United_States)">R</a>)</td>
    						<td>July 27, 2007</td>
    						<td>94</td>
    						<td class="reason">resigned, denial: "scared into paying $20 to give fellatio"</td>
    					</tr>
    					<tr>
    						<td><img src="larry_craig.jpg"/></td>
    						<td>Sen. <a href="http://en.wikipedia.org/wiki/Larry_Craig#2007_arrest_and_consequences">Larry Craig</a> (<a href="http://en.wikipedia.org/wiki/Republican_Party_(United_States)">R</a>)</td>
    						<td>June 11, 2007</td>
    						<td>46</td>
    						<td class="reason"><a href="http://www.youtube.com/watch?v=GIsLFjWCTsk">denial</a>: "wide stance"; 2015: <a href="http://www.wvgazette.com/article/20150517/GZ05/150519640/1116">named as frequent employer of male sex workers</a></td>
    					</tr>
    					<tr>
    						<td><img src="ted_haggard.jpg"/></td>
    						<td>Rev. <a href="http://en.wikipedia.org/wiki/Ted_Haggard#Scandal_and_removal_from_job">Ted Haggard</a> (<a href="http://en.wikipedia.org/wiki/National_Association_of_Evangelicals">NAE</a>)</td>
    						<td>Nov. 3, 2006</td>
    						<td>220</td>
    						<td class="reason">resigned, <a href="http://www.youtube.com/watch?v=HZmHC75FDqQ">denial</a>: "just buying meth"</td>
    					</tr>
    					<tr>
    						<td><img src="mark_foley.jpg"/></td>
    						<td>Rep. <a href="http://en.wikipedia.org/wiki/Mark_Foley#Resignation_from_the_U.S._Congress">Mark Foley</a> (<a href="http://en.wikipedia.org/wiki/Republican_Party_(United_States)">R</a>)</td>
    						<td>Sept. 28, 2006</td>
    						<td>35</td>
    						<td class="reason"><img src="half_star.png" style="float: left;"/> resigned, admitted via lawyer</td>
    					</tr>
    					<tr>
    						<td><img src="james_e_west.jpg"/></td>
    						<td>Hon. <a href="http://en.wikipedia.org/wiki/James_E._West_(politician)#Investigation">James E. West</a> (<a href="http://en.wikipedia.org/wiki/Republican_Party_(United_States)">R</a>)</td>
    						<td>May 5, 2005</td>
    						<td>509</td>
    						<td class="reason"><img src="half_star.png" style="float: left;"/> removed from office, partially admitted</td>
    					</tr>
    					<tr>
    						<td><img src="david_dreier.jpg"/></td>
    						<td>Rep. <a href="http://en.wikipedia.org/wiki/David_Dreier#Sexual_orientation">David Dreier</a> (<a href="http://en.wikipedia.org/wiki/Republican_Party_(United_States)">R</a>)</td>
    						<td>Sept. 24, 2004</td>
    						<td>223</td>
    						<td class="reason">in office until 2013, mixed voting record after outing</td>
    					</tr>
    					<tr>
    						<td><img src="ed_schrock.jpg"/></td>
    						<td>Rep. <a href="http://en.wikipedia.org/wiki/Ed_Schrock">Ed Schrock</a> (<a href="http://en.wikipedia.org/wiki/Republican_Party_(United_States)">R</a>)</td>
    						<td>Aug. 30, 2004</td>
    						<td>25</td>
    						<td class="reason">ended reelection campaign</td>
    					</tr>
    				</tbody>
    			</table>
    		</div><!-- previous -->
    		<div id="stars">
    			<p><img src="half_star.png"/> at least admitted it, or came out voluntarily</p>
    			<p><img src="rainbow_star.jpg"/> did a 180° change and started supporting gay rights after coming out</p>
    			<p>Why do I list people who now support gay rights? Because they <i>used</i> to be gay homophobes.<br/>
                    It's important to show both that another anti-gay person in power was hypocritical, <em>and</em> that people can change.</p>
                <div class="col2">
                    <span>
                        <p>Inclusion criteria:
                            <ol>
                                <li>had power (political, religious, or social),</li>
                                <li>used that power anti-LGBT, and</li>
                                <li>turned out to be a closet case.</li>
                            </ol>
                        </p>
                        <span class="font-size: 0.8em;">
            				<p>Political/religious affiliation is <em>not</em> a factor.</p>
                            <p>Being a closet case who's <em>not</em> actively anti-gay is just sad, not hypocritical, so doesn't count.</p>
                            <p>Pedophilia isn't homosexuality, so that doesn't either.</p>
                        </span>
                    </span>
                    <span>
        				<p><a href="http://www.truthwinsout.org/donate"><img src="truthwinsout.gif" alt="Truth Wins Out" height="32"/></a> is an organization fighting the ex-gay bullshit espoused by so many homophobic closet cases in power.</p>
        				<p>You should consider <a href="http://www.truthwinsout.org/donate">giving them a donation</a>.</p>
                    </span>
    		</div><!-- stars -->

		</div><!-- main body container -->
        <hr/>
		<div class="footer col2">
			<span>
                <p>
                    <ul>
                        <li><a href="http://www.youtube.com/watch?v=1CQg9f7z9eg&list=UUsy6TmwyoWVlkV1nb9dMlKg&index=1&feature=plcp">Probably Gay</a> by <a href="http://www.katiegoodman.com/">Katie Goodman</a></li>
                        <li><a href="http://www.youtube.com/watch?v=JIDrqA87fpw">Gay Homophobe</a> by <a href="http://www.jonathanmann.net/">Jonathan Mann</a></li>
                        <li><a href="http://gocomics.typepad.com/tomthedancingbugblog/">Ruben Bolling</a>'s <a href="http://www.gocomics.com/tomthedancingbug/2007/10/27">prophetic 2007 comic</a></li>
                        <li><a href="http://www.youtube.com/watch?v=HZmHC75FDqQ">Ted Haggard</a>, <a href="http://www.youtube.com/watch?v=IlnQZVTAcRc">George Rekers</a>, and <a href="http://www.youtube.com/watch?v=GIsLFjWCTsk">Larry Craig</a> by <a href="http://royzimmerman.com/">Roy Zimmerman</a></li>
                        <li><a href="http://www.sharingmachine.com/about.php">Drew and Natalie Dee</a>'s <a href="http://www.marriedtothesea.com/090507/">"homophobic senator" viral image</a></li>
                        <li><a href="http://www.thestranger.com/seattle/SavageLove">Dan Savage</a>'s <a href="http://www.thestranger.com/SavageLovePodcast/archives/2011/09/06/savage-love-episode-255">podcast</a> re. Sen. Arango</li>
                    </ul>
                </p>
			</span>
			<span>
				<p>Yes, most of them are probably bi, not gay, but "biorgaypeoplewhosupportrevocationofgayrights.com" isn't quite as quippy. ;-)</p>

				<p>We <a href="http://www.truthwinsout.org/news/2011/10/19404/">donated about $1900 to TWO</a>, from ad revenue. (Thanks, <a href="https://plus.google.com/114958356461289458353/about">Lee</a>, for your help!) Ads have since been removed.</p>

    			<p><a rel="license" href="http://creativecommons.org/publicdomain/zero/1.0/"><img alt="CC0 - no rights reserved" style="border-width:0" src="/cc-0.png" /></a>
    			Site maintained by <a href="http://twitter.com/gayhomophobe">@gayhomophobe</a>; please contact with info if an update is needed.</p>
			</span>
		</div><!-- footer -->
        <hr/>
        <div class="footer col2"><!-- quotes -->
            <span>
        		<ul>
        			<li>"There are few things more satisfying in life than seeing hypocrites exposed, so it is with great joy that I award my inaugural (and, probably, only) Website of the Week award to the magnificent gayhomophobe.com." — Tom Chivers, <a href="https://tommychivers.wordpress.com/2011/09/09/anti-gay-activists-involved-in-gay-scandals-all-the-funniest-on-one-website/">The Telegraph</a> [<a href="http://blogs.telegraph.co.uk/news/tomchiversscience/100103755/anti-gay-activists-involved-in-gay-scandals-all-the-funniest-on-one-website/">moved</a>]</li>
        			<li>"In the next few years I assume I'll be able to Google "homophobe's name" + "scandal" and end up with some story about a cruising park or a bathroom stall. Thanks to Gay Homophobe, the news comes to you." — Kristen, <a href="http://www.autostraddle.com/gay-homophobe-hypocrisy-is-trackable-149458/">Autostraddle</a></li>
                </ul>
            </span>
            <span>
                <ul>
        			<li>"So. Much. WIN!" - <a href="https://twitter.com/lohphat/status/306279473878286336">@lohphat</a></li>
        			<li>"I am happysad this site exists." — <a href="https://twitter.com/#!/TalesofthePack/status/149304309069258753">@TalesofthePack</a></li>
        			<li>"Back in the day, I thought <a href="http://www.penny-arcade.com/comic/2008/03/19">Penny Arcade - "Bedrock Concepts"</a> was funny. But no. This -- gayhomophobe.com -- this is much funnier." — <a href="https://twitter.com/#!/mnoel2/status/149200621684273152">@mnoel2</a></li>
        			<li>"XD this made my morning :3" — <a href="https://twitter.com/#!/F3nixwolf/status/149179922689175553">@F3nixwolf</a></li>
        			<li>"This is why we have the internet" — <a href="https://twitter.com/#!/dobes/status/155162258199158784">@dobes</a></li>
        		</ul>
            </span>
        </div><!-- quotes -->

<br/><br/>
<h4>Some comments…</h4>
		<div id="comments">
			<div class="col2">
				<span><!-- col 1 -->
					<p>Mar 7: August 2011 winner Roberto Arango <a href="http://www.elnuevodia.com/admitesuhomosexualidadrobertoarango-1726756.html">finally came out</a>.</p>
					<p>Feb 28: Rainbow star winner Ken Mehlman's <a href="http://www.projectrightside.com/">pro-gay conservative lobby</a> has <a href="http://www.scribd.com/doc/127834199/Perry-Amicus-Brief-of-Mehlman-et-al">submitted an amicus brief in the Prop 8 case</a>, signed by almost 100 prominent Republicans. He now gets <b>two</b> rainbow stars for his outstanding work.</p>
					<p>Feb 24: How sadly ironic that a cardinal who claimed that "civil partnerships … are harmful to the physical, mental and spiritual wellbeing of those involved" would cause the same to those in his care. Ah, the closet.</p>
					<p>Nov 21: Ken Mehlman, rainbow star winner, has a <a href="http://online.wsj.com/article/SB10001424127887323353204578128912554107172.html">new</a>, <a href="http://www.projectrightside.com/">pro-gay conservative political organization</a>.</p>
					<p>Nov 9: Coming-out trend couldn't last forever. Back to schadenfreude it is.</p>
					<p>Jul 28: Yes, I heard about <a href="http://www.advocate.com/society/coming-out/2012/07/27/prominent-antigay-evangelical-blogger-outed-gay">Jonathan Merritt</a>. However, I'm going to have to disagree with the characterization there. First, I don't think he's really "in power"; he's a mid-level blogger with no authority over anyone. Although some of his writing supports an anti-gay agenda (e.g. a prohibition on same-sex marriage), the Chick-Fil-A piece that most people refer to doesn't really; it's more an argument for separating economic from moral decisions. Yes, he's clearly closeted and deeply conflicted about it; that's a very sad thing. I acknowledge that this is a borderline case, but I'm not comfortable promoting him to winner status for it. Thanks for the tips, regardless.</p>
					<p>Jun 9: I saw the <a href="http://www.huffingtonpost.com/2012/06/08/charlie-crist-gay-affair-_n_1582591.html?ref=email_share">HuffPo story</a> on Crist, but I don't think the source is reliable. Please email me if you find confirmation from someone other than a political opponent's lawyer. Also, LMK if you find any anti-gay policy statements on TN Comm. <a href="http://www.democraticunderground.com/1002766898">Ownby</a> — I don't list people merely because they're Republican.</p>
				</span><!-- col 1 -->
				<span><!-- col 2 -->
					<p>May 30: A journalist named <a href="https://es.wikipedia.org/wiki/Jos%C3%A9_Mar%C3%ADa_Calleja">José María Fernández Calleja</a> <A href="http://www.dosmanzanas.com/2012/05/outing-a-carlos-divar-presidente-del-consejo-general-del-poder-judicial-de-ideologia-conservadora-en-onda-cero.html">claimed</a> that <a href="https://es.wikipedia.org/wiki/Carlos_D%C3%ADvar">Carlos Dívar</a>, anti-gay head judge of the Spanish supreme court, was using government money to pay for luxury hotel visits with his boyfriend. If you can find a substantiation of this accusation (and/or response from Dívar), please email me.</p>
					<p>May 17: Yes, I saw the Paul Cameron <A href="http://www.youtube.com/watch?v=5wCY6XIbtLU">interview</a>. He's against gay actions, which he's probably not doing, and not gay orientation, which he probably has. He's a bigoted fuckwit who lies about the facts, but he's not <i>hypocritical</i>. Sorry.</p>
					<p>May 2: Trend it is: four in a row. Welcome out, Zach!</p>
					<p>Apr 20: In honor of <i>three</i> successive rainbow stars, I've rewritten the heading. I hope it's a trend.</p>
					<p>If you're a closeted conservative gay man or woman, there are basically two stories you can be in.</p>
					<p>The old story: you live a life of suppressed desperation. When you get outed — and you will get outed — it's a big scandal that ruins your life. Arango, Rekers, Curtis, Allen, Craig, Haggard.</p>
					<p>The new story: you come out voluntarily and support gay rights while retaining essentially all of your other conservative and religious beliefs. You retain support from all your existing conservative friends (except the guys who are forcing you into the closet, who aren't your friends anyway), and you gain a whole new base too. Marks, Lehman, Babeu, Smid, Mehlman, Ashburn.</p>
					<p>Your choice.</p>
    		<!--
    				<p>Why the 3 day delay getting this up?</p>
    				<div class="col2">
    					<span>
    						<p>I heard about it hours after the story broke (thanks, tippers!). But I actually do fact-check before posting. I've declined to post multiple stories that didn't fulfill all three of my criteria (in power, promoting anti-gay agenda, closeted). I don't post someone who's merely a closeted Republican politician. That's sad, but it's not <i>hypocritical</i> unless they're also actually anti-gay in policy.</p>
    						<p>I reviewed Davis' <a href="http://mayorgregdavis.com">mayoral</a> and <a href="http://web.archive.org/web/20081029223131/http://www.gregdavisforcongress.com/index.php?option=com_weblinks&view=category&id=42&Itemid=64">congressional</a> campaign literature / <a href="http://www.youtube.com/user/mayorgregdavisdotcom">videos</a>. There was stuff about abortion and other conservative issues, i.e. normal Republican "family values" platform, but really nothing about gays. (The <a href="http://www.youtube.com/watch?feature=player_detailpage&v=LwXK2XC9B6w#t=33s">video</a> about how he is accountable through auditing, the exact way he got busted, is a lovely bit of irony.)</p>
    					</span>
    					<span>
    						<p>Yesterday, Sana (<a href="http://twitter.com/bigshika">@bigshika</a>) emailed me, and subsequently managed to find <a href="https://www.commercialappeal.com/news/2008/nov/02/election-1st-congressional-district-d233j224-vu/">this article</a> quoting his stance against gay marriage and pro DADT (for firefighters too [WTF?]). That was the first I saw from him on relevant policy issues, and made him finally qualify as our newest winner. (Thanks, Sana!)</p>

    						<p>This morning I called up the Mayor's office to verify that the '08 quote is accurate of his current position (and to ask whether he, as mayor with authority to do such things, has a DADT policy for the city's firefighters), but so far they've been unavailable.</p>

    						<p>This site is of course intended to be virally lulzy, but it's also a serious political statement. I don't want to list someone unless they deserve it. ;-)</p>
    					</span>
    				</div>
    		-->
				</span><!-- col 2 -->
			</div>
		</div><!-- comments -->

	</body>
</html>
