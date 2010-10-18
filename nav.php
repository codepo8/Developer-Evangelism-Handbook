<?php
  if(!isset($all)){
   $all = $_GET['list']; 
  }
  if(!isset($nodonate)){?>
<div class="yui-g"><div class="yui-u first">
<?php }?>
<ul id="menu">
  <?php if(isset($all)){?>
  <?php }else{ ?>
    <li><h2>Chapter Contents:</h2></li>
  <?php } ?>

  <?php if(preg_match('/handbook.php/',$me) or isset($all)){?>

  <li><a href="handbook.php">The developer evangelism handbook</a></li>
  <li><a href="handbook.php#defining">Defining developer evangelism</a></li>
  <li><a href="handbook.php#mindset">Start with the right mindset</a></li>
  <li><a href="handbook.php#role">Find your role and play to your strengths</a></li>

<?php } ?>
<?php if(preg_match('/brand-and-competition.php/',$me) or isset($all)){?>

  <li><a href="brand-and-competition.php">Remove the brand</a></li>
  <li><a href="brand-and-competition.php#competiton">Work with the competition</a>
    <?php if(!isset($nonest)){?>
    <ul>
      <li><a href="brand-and-competition.php#respect">Show respect to the competition</a></li>
      <li><a href="brand-and-competition.php#acknowledge">Acknowledge when the competition is better</a></li>
      <li><a href="brand-and-competition.php#know">Know about the competition</a></li>
      <li><a href="brand-and-competition.php#mashup">Build mashups using competitive products</a></li>
    </ul>
    <?php }?>
  </li>
  <?php } ?>
  
  <?php if(preg_match('/internal.php/',$me) or isset($all)){?>
  <li><a href="internal.php">Work with your own company</a>
    <?php if(!isset($nonest)){?>
    <ul>
      <li><a href="internal.php#prandmarketing">Work with PR and marketing</a></li>
      <li><a href="internal.php#prejudice">Prepare for prejudice</a></li>
      <li><a href="internal.php#companychanges">Deal with company changes</a></li>
      <li><a href="internal.php#internaldevelopers">Be there for internal developers</a></li>
      <li><a href="internal.php#outwardchannel">Be known as an outward channel</a></li>
      <li><a href="internal.php#trainpeople">Train other evangelists and developers</a></li>
      <li><a href="internal.php#sharetech">Share useful technology</a></li>
    </ul>
    <?php } ?>
  </li>
  <?php } ?>

  <?php if(preg_match('/outreach.php/',$me) or isset($all)){?>
  <li><a href="outreach.php">Prepare for outreach</a>
    <?php if(!isset($nonest)){?>
    <ul>
      <li><a href="outreach.php#facts">Get your facts right</a></li>
      <li><a href="outreach.php#audience">Know the audience and their needs</a></li>
      <li><a href="outreach.php#experts">Have expert backup</a></li>
      <li><a href="outreach.php#medium">Choose the right medium</a></li>
      <li><a href="outreach.php#fail">Plan for failure</a></li>
    </ul>
    <?php } ?>
  </li>
  <?php } ?>

  <?php if(preg_match('/speaking-opportunities.php/',$me) or isset($all)){?>
  <li><a href="speaking-opportunities.php">Get speaking opportunities</a>
    <?php if(!isset($nonest)){?>
    <ul>
      <li><a href="speaking-opportunities.php#barcamps">Go to Barcamps</a></li>
      <li><a href="speaking-opportunities.php#meetups">Go to Meetups</a></li>
      <li><a href="speaking-opportunities.php#writearticles">Write articles</a></li>
      <li><a href="speaking-opportunities.php#brownbags">Offer brownbags</a></li>
      <li><a href="speaking-opportunities.php#askquestions">Ask questions at conferences</a></li>
    </ul>
    <?php } ?>
  </li>
  <?php } ?>

  <?php if(preg_match('/delivery.php/',$me) or isset($all)){?>
  <li><a href="delivery.php">Deliver a talk or workshop</a>
    <?php if(!isset($nonest)){?>
    <ul>
      <li><a href="delivery.php#beyourself">Be yourself</a></li>
      <li><a href="delivery.php#invitecommunication">Invite communication</a></li>
      <li><a href="delivery.php#takeaways">Prepare takeaways</a></li>
      <li><a href="delivery.php#qanda">Plan time for and own the questions and answers</a></li> 
      <li><a href="delivery.php#honesty">Be honest and real</a></li> 
      <li><a href="delivery.php#followup">Follow up communication</a></li> 
    </ul>
    <?php } ?>
  </li>
  <?php } ?>
  
  <?php if(preg_match('/writing.php/',$me) or isset($all)){?>
  <li><a href="writing.php">Write great posts and articles</a>
    <?php if(!isset($nonest)){?>
    <ul>
      <li><a href="writing.php#simple">Simple is not stupid</a></li>
      <li><a href="writing.php#sayingwhatitis">Say what it is - don’t sugar-coat it</a></li>
      <li><a href="writing.php#size">Size matters</a></li>
      <li><a href="writing.php#addingmedia">Add media</a></li>
      <li><a href="writing.php#structure">Structure your content</a></li>
      <li><a href="writing.php#dating">Time-stamp your content</a></li>
      <li><a href="writing.php#citing">Cite to prove</a></li>
    </ul>
    <?php } ?>
  </li>
  <?php } ?>
  <?php if(preg_match('/code.php/',$me) or isset($all)){?>
  <li><a href="code.php">Write excellent code examples</a>
    <?php if(!isset($nonest)){?>
    <ul>
      <li><a href="code.php#solvingproblems">Solve a problem with your example</a></li>
      <li><a href="code.php#workingexample">Show a working example</a></li>
      <li><a href="code.php#environment">Explain the necessary environment</a></li>
      <li><a href="code.php#functionalcopyandpaste">Write working copy and paste code</a></li>
      <li><a href="code.php#downloads">Have the example as a download</a></li>
      <li><a href="code.php#cleancode">Write clean and clever examples</a></li>
      <li><a href="code.php#generators">Build code generators</a></li>
    </ul>
    <?php } ?>
  </li>
  <?php } ?>
  
  
  <?php if(preg_match('/slides.php/',$me) or isset($all)){?>
  <li><a href="slides.php">Prepare great slide decks for presentations <span>New!</span></a>
    <?php if(!isset($nonest)){?>
  <ul>
    <li><a href="slides.php#stuff">Know your stuff</a></li>
    <li><a href="slides.php#contentnotslides">Start with the content &#8211; not the slides!</a></li>
    <li><a href="slides.php#portableformat">Start with a highly portable format &#8211; HTML</a></li>
    <li><a href="slides.php#presentationtool">Pick a presentation tool that helps you present</a></li>
    <li><a href="slides.php#illustrate">Illustrate, don't transcribe</a></li>
    <li><a href="slides.php#images">Use and find images</a></li>
    <li><a href="slides.php#embeddedcode">About code examples</a></li>
    <li><a href="slides.php#multimedia">About sound and videos</a></li>
    <li><a href="slides.php#nobling">Don't bling it up</a></li>
    <li><a href="slides.php#keepingitbrief">Keep it brief</a></li>
    <li><a href="slides.php#consideringtheaudience">Consider the audience</a></li>
    <li><a href="slides.php#corporatetemplates">Corporate and conference templates</a></li>
    <li><a href="slides.php#reuseinverbatim">Don't reuse without personalising</a></li>
    <li><a href="slides.php#sharing">Share and enjoy</a></li>
    </ul>
    <?php } ?>
  </li>
  <?php } ?>

  
  <?php if(preg_match('/record.php/',$me) or isset($all)){?>
  <li><a href="record.php">Record your output</a>
    <?php if(!isset($nonest)){?>
    <ul>
      <li><a href="record.php#audio">Record the audio of your talks</a></li>
      <li><a href="record.php#videos">Shoot video</a></li>
      <li><a href="record.php#screencast">Screencasts and screenshots</a></li>
      <li><a href="record.php#linkcollections">Link collections</a></li>
    </ul>
    <?php } ?>
  </li>
  <?php } ?>
  <?php if(preg_match('/web.php/',$me) or isset($all)){?>
  <li><a href="web.php">Know and use the (social) web</a>
    <?php if(!isset($nonest)){?>
    <ul>
      <li><a href="web.php#findcontent">Find great web content</a></li>
      <li><a href="web.php#redistribute">Redistribute web content</a></li>
      <li><a href="web.php#beknown">Be known on the web</a></li>
      <li><a href="web.php#powerfulwebsites">Use powerful social web sites and products</a></li>
      <li><a href="web.php#usingtheweb">Use the web for storage, distribution and cross-promotion</a></li>
      <li><a href="web.php#teasing">Hint, tease and preview</a></li>
      <li><a href="web.php#tracking">Track your impact</a></li>
      <li><a href="web.php#network">Build a network</a></li>
    </ul>
    <?php } ?>
  </li>
  <?php } ?>
  <?php if(preg_match('/conferences.php/',$me) or isset($all)){?>
  <li><a href="conferences.php">Work with the conference buzz</a>
    <?php if(!isset($nonest)){?>
    <ul>
      <li><a href="conferences.php#bepart">Be a part of the conference you talk at</a></li>
      <li><a href="conferences.php#releaseimmediately">Release immediately</a></li>
      <li><a href="conferences.php#coverage">Write about the conferences</a></li>
    </ul>
    <?php } ?>
  </li>
  <?php } ?>
  <?php if(preg_match('/tips.php/',$me) or isset($all)){?>
  <li><a href="tips.php">Additional presentation tips</a>
    <?php if(!isset($nonest)){?>
    <ul>
      <li><a href="tips.php#introduce">Introduce yourself</a></li>
      <li><a href="tips.php#humour">Use humour</a></li>
      <li><a href="tips.php#bridges">Build bridges to the real world</a></li>
      <li><a href="tips.php#pacing">Pace yourself</a></li>
      <li><a href="tips.php#helloworld">Avoid “hello world”</a></li>
      <li><a href="tips.php#fresh">Be fresh</a></li>
    </ul>
    <?php } ?>
  </li>
  <?php } ?>
  <?php if(preg_match('/thanks.php/',$me) or isset($all)){?>
  <li><a href="thanks.php">Thanks!</a></li>
  <?php } ?>
</ul>

<?php
  if(!isset($nodonate)){?>
</div><div class="yui-u">
<?php  include('donate.php');?>
</div></div>

<?php  }
?>
