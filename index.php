<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Polymathism</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>
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
              <a class="nav-link active" data-toggle="tab" href="#polymathism" role="tab">Polymathism</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#news" role="tab">News</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="polymathism" role="tabpanel">polymathism content here</div>
            <div class="tab-pane" id="news" role="tabpanel">news content here</div>
          </div>
          
        </div>
      </div>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
    <script>
      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        e.target // newly activated tab
        //start playing content
        
        //change url and title
        var newTitle = $(e.target).text();
        var newURL   = $(e.target).text().toLowerCase();
        history.pushState('', newTitle, newURL);
        $(document).prop('title', newTitle);
        
        
        e.relatedTarget // previous active tab
        //stop any playing content
      })
    </script>
    
  </body>
</html>
