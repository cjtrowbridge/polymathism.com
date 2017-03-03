<?php
if(isset($_GET['feed'])){
 switch($_GET['feed']){
   case 'npr-podcast':
     FetchFeed('https://www.npr.org/rss/podcast.php?id=500005');
   case 'cbc-podcast':
     FetchFeed('http://www.cbc.ca/podcasting/includes/hourlynews.xml');
   case 'dw-podcast':
     FetchFeed('http://rss.dw.com/xml/podcast_news');
   default:
     die('Unknown Feed');
 }
}
function FetchFeed($url){
  header("Content-type: text/xml");
  echo file_get_contents($url);
  exit;
}

?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Polymathism</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta property="og:title" content="Polymathism">
    <meta property="og:type" content="website">
    <meta property="og:description" content="" />
    <meta property="og:url" content="https://polymathism.com">
    <meta property="og:image" content="">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style>
      body{
        padding-top: 1rem;
      }
    </style>
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col">
          
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#polymathism" role="tab" >Polymathism</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#news" role="tab">News</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            
            <div class="tab-pane active" id="polymathism" role="tabpanel">polymathism content here</div>
            
            <div class="tab-pane" id="news" role="tabpanel">
              <div class="podcastContainer" data-feed="/?feed=npr-podcast">
                <img src="https://media.npr.org/images/podcasts/2013/primary/hourly_news_summary-c464279737c989a5fbf3049bc229152af3c36b9d.png?s=1400">
                <h4>NPR: Hourly World News</h4>
                <div class="player"></div>
                <div class="clearer"></div>
              </div>
              <div class="podcastContainer" data-feed="/?feed=cbc-podcast">
                <img src="http://www.cbc.ca/podcasting/images/promo-hourlies.jpg">
                <h4>CBC: Hourly World News</h4>
                <div class="player"></div>
                <div class="clearer"></div>
              </div>
              <div class="podcastContainer" data-feed="/?feed=dw-podcast">
                <img src="http://www.dw.com/image/2135752_7.jpg">
                <h4>Deutsche Welle: Hourly World News</h4>
                <div class="player"></div>
                <div class="clearer"></div>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
    <script src="/js/podcastLoader.js"></script>
    <script>
      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        e.target // newly activated tab
        //start playing content
        
        ////change url and title
        //var newTitle = $(e.target).text();
        //var newURL   = $(e.target).text().toLowerCase();
        //if(newURL=='polymathism'){newURL='';}
        //history.pushState('', newTitle, newURL);
        //$(document).prop('title', newTitle);
        
        
        e.relatedTarget // previous active tab
        //stop any playing content
      })
    </script>
    
  </body>
</html>
