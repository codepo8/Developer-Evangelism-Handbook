<?php 
$all = $_GET['all'];
$me = $_SERVER['PHP_SELF'];
if(preg_match('/internal.php/',$me)){
  $title = 'Developer Evangelist Handbook - Work with your own company';
  $heading = 'Work with your own company';
}
if(preg_match('/about.php/',$me)){
  $title = 'Developer Evangelist Handbook - About the book and the author';
  $heading = 'About the book and the author';
}
if(preg_match('/speaking-opportunities.php/',$me)){
  $title = 'Developer Evangelist Handbook - Get speaking opportunities';
  $heading = 'Get speaking opportunities';
}
if(preg_match('/toc.php/',$me)){
  $title = 'Developer Evangelist Handbook - Table of Contents';
  $heading = 'Table of contents';
}
if(preg_match('/thanks.php/',$me)){
  $title = 'Developer Evangelist Handbook - Thanks';
  $heading = 'Thanks!';
}
if(preg_match('/handbook.php/',$me)){
  $title = 'Developer Evangelist Handbook';
  $heading = 'The Developer Evangelist Handbook';
}
if(preg_match('/brand-and-competition.php/',$me)){
  $title = 'Developer Evangelist Handbook - About brand and competition';
  $heading = 'About brand and competition';
}
if(preg_match('/outreach.php/',$me)){
  $title = 'Developer Evangelist Handbook - Planning outreach';
  $heading = 'Planning outreach';
}
if(preg_match('/delivery.php/',$me)){
  $title = 'Developer Evangelist Handbook - Delivering presentations';
  $heading = 'Delivering presentations';
}
if(preg_match('/writing.php/',$me)){
  $title = 'Developer Evangelist Handbook - Writing for the web';
  $heading = 'Writing for the web';
}
if(preg_match('/code.php/',$me)){
  $title = 'Developer Evangelist Handbook - Writing excellent code examples';
  $heading = 'Writing excellent code examples';
}
if(preg_match('/slides.php/',$me)){
  $title = 'Developer Evangelist Handbook - Prepare great slide decks for presentations';
  $heading = 'Prepare great slide decks for presentations';
}
if(preg_match('/record.php/',$me)){
  $title = 'Developer Evangelist Handbook - Recording your talks';
  $heading = 'Recording your talks';
}
if(preg_match('/web.php/',$me)){
  $title = 'Developer Evangelist Handbook - Using the (social) web';
  $heading = 'Using the (social) web';
}
if(preg_match('/conferences.php/',$me)){
  $title = 'Developer Evangelist Handbook - Using the conference buzz';
  $heading = 'Using the conference buzz';
}
if(preg_match('/tips.php/',$me)){
  $title = 'Developer Evangelist Handbook - Presentation tips';
  $heading = 'Using the conference buzz';
}?>