<head>
  <script src="http://d3js.org/d3.v4.min.js"></script>
  <script src="http://dimplejs.org/dist/dimple.v2.3.0.min.js"></script>
    
</head>
<body>
    <?php
require_once('TwitterAPIExchange.php');
    
    date_default_timezone_set('Australia/Sydney');
    
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
'oauth_access_token' => "18300340-0rnAoYwifi2FneD2oZIn62M7TSkm3aQUyWOrZ1j42",
'oauth_access_token_secret' => "dkTGLnvNdfLE5SkIj9QxqM2yZNxtg4s6zSrV7WKbk4akD",
'consumer_key' => "aH0ZpSTLfzqmXJTbsqbXoqxrM",
'consumer_secret' => "YwfSYdBwHmQ22j7adRSZBzbKJwdMWe5QyFegQbHjZIszFMsbjW"
);
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
if (isset($_GET['user']))  {$user = $_GET['user'];}  else {$user  = "bbcdoctorwho";}
if (isset($_GET['count'])) {$count = $_GET['count'];} else {$count = 500;}
    
    
$getfield = "?screen_name=$user&count=$count";
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);
//if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
    
    echo "<h2>Tweets by ".$user."</h2>";
    
foreach($string as $items)
    
    {
        $time_created = strtotime($items['created_at']);
        //echo "Time and Date of Tweet: ".$items['created_at']."<br />";
        //echo "Tweet: ". $items['text']."<br />";
        $formatted_date = date('H', $time_created);
        //echo "Hour Tweeted: ". $formatted_date."<br /><hr />";
        switch ($formatted_date) {
            case '00':
                $array1[] = $formatted_date;
                break;
                
            case '01':
                $array2[] = $formatted_date;
                break;
                
            case '02':
                $array3[] = $formatted_date;
                break;
                
            case '03':
                $array4[] = $formatted_date;
                break;
                
            case '04':
                $array5[] = $formatted_date;
                break;
                
            case '05':
                $array6[] = $formatted_date;
                break;
                
            case '06':
                $array7[] = $formatted_date;
                break;
                
            case '07':
                $array8[] = $formatted_date;
                break;
                
            case '08':
                $array9[] = $formatted_date;
                break;
                
            case '09':
                $array10[] = $formatted_date;
                break;
                
            case '10':
                $array11[] = $formatted_date;
                break;
                
            case '11':
                $array12[] = $formatted_date;
                break;
                
            case '12':
                $array13[] = $formatted_date;
                break;
                
            case '13':
                $array14[] = $formatted_date;
                break;
                
            case '14':
                $array15[] = $formatted_date;
                break;
                
            case '15':
                $array162[] = $formatted_date;
                break;
                
            case '16':
                $array17[] = $formatted_date;
                break;
                
            case '17':
                $array18[] = $formatted_date;
                break;
                
            case '18':
                $array19[] = $formatted_date;
                break;
                
            case '19':
                $array20[] = $formatted_date;
                break;
                
            case '20':
                $array21[] = $formatted_date;
                break;
                
            case '21':
                $array22[] = $formatted_date;
                break;
                
            case '22':
                $array23[] = $formatted_date;
                break;
                
            case '23':
                $array24[] = $formatted_date;
                break;
        }
    }
    
    
    
    if (empty($array1)) {
        $result1 = '0';
    } else {
        $result1 = count($array1);
    }
    
    if (empty($array2)) {
        $result2 = '0';
    } else {
        $result2 = count($array2);
    }
    
    if (empty($array3)) {
        $result3 = '0';
    } else {
        $result3 = count($array3);
    }
    
    if (empty($array4)) {
        $result4 = '0';
    } else {
        $result4 = count($array4);
    }
    
    if (empty($array5)) {
        $result5 = '0';
    } else {
        $result5 = count($array5);
    }
    
    if (empty($array6)) {
        $result6 = '0';
    } else {
        $result6 = count($array6);
    }
    
    if (empty($array7)) {
        $result7 = '0';
    } else {
        $result7 = count($array7);
    }
    
    if (empty($array8)) {
        $result8 = '0';
    } else {
        $result8 = count($array8);
    }
    
    if (empty($array9)) {
        $result9 = '0';
    } else {
        $result9 = count($array9);
    }
    
    if (empty($array10)) {
        $result10 = '0';
    } else {
        $result10 = count($array10);
    }
    
    if (empty($array11)) {
        $result11 = '0';
    } else {
        $result11 = count($array11);
    }
    
    if (empty($array12)) {
        $result12 = '0';
    } else {
        $result12 = count($array12);
    }
    
    if (empty($array13)) {
        $result13 = '0';
    } else {
        $result13 = count($array13);
    }
    
    if (empty($array14)) {
        $result14 = '0';
    } else {
        $result14 = count($array14);
    }
    
    if (empty($array15)) {
        $result15 = '0';
    } else {
        $result15 = count($array15);
    }
    
    if (empty($array16)) {
        $result16 = '0';
    } else {
        $result16 = count($array16);
    }
    
    if (empty($array17)) {
        $result17 = '0';
    } else {
        $result17 = count($array17);
    }
    
    if (empty($array18)) {
        $result18 = '0';
    } else {
        $result18 = count($array18);
    }
    
    if (empty($array19)) {
        $result19 = '0';
    } else {
        $result19 = count($array19);
    }
    
    if (empty($array20)) {
        $result20 = '0';
    } else {
        $result20 = count($array20);
    }
    
    if (empty($array21)) {
        $result21 = '0';
    } else {
        $result21 = count($array21);
    }
    
    if (empty($array22)) {
        $result22 = '0';
    } else {
        $result22 = count($array22);
    }
    
    if (empty($array23)) {
        $result23 = '0';
    } else {
        $result23 = count($array23);
    }
    
    if (empty($array24)) {
        $result24 = '0';
    } else {
        $result24 = count($array24);
    }
    
    
    
    
?>
    
    
  <script type="text/javascript">
    var svg = dimple.newSvg("body", 800, 600);
    var data = [
        { "Time":"12 am", "Tweets":<?php echo $result1 ?> },
        { "Time":"1 am", "Tweets":<?php echo $result2;?> },
        { "Time":"2 am", "Tweets":<?php echo $result3; ?> },
        { "Time":"3 am", "Tweets":<?php echo $result4; ?> },
        { "Time":"4 am", "Tweets":<?php echo $result5; ?> },
        { "Time":"5 am", "Tweets":<?php echo $result6; ?> },
        { "Time":"6 am", "Tweets":<?php echo $result7; ?> },
        { "Time":"7 am", "Tweets":<?php echo $result8; ?> },
        { "Time":"8 am", "Tweets":<?php echo $result9; ?> },
        { "Time":"9 am", "Tweets":<?php echo $result10; ?> },
        { "Time":"10 am", "Tweets":<?php echo $result11; ?> },
        { "Time":"11 am", "Tweets":<?php echo $result12; ?>},
        { "Time":"12 pm", "Tweets":<?php echo $result13; ?> },
        { "Time":"1 pm", "Tweets":<?php echo $result14; ?> },
        { "Time":"2 pm", "Tweets":<?php echo $result15; ?> },
        { "Time":"3 pm", "Tweets":<?php echo $result16; ?> },
        { "Time":"4 pm", "Tweets":<?php echo $result17; ?> },
        { "Time":"5 pm", "Tweets":<?php echo $result18; ?> },
        { "Time":"6 pm", "Tweets":<?php echo $result19; ?> },
        { "Time":"7 pm", "Tweets":<?php echo $result20; ?> },
        { "Time":"8 pm", "Tweets":<?php echo $result21; ?> },
        { "Time":"9 pm", "Tweets":<?php echo $result11; ?> },
        { "Time":"10 pm", "Tweets":<?php echo $result23; ?> },
        { "Time":"11 pm", "Tweets":<?php echo $result24; ?> }
    ];
    var chart = new dimple.chart(svg, data);
    chart.addCategoryAxis("x", "Time");
    chart.addMeasureAxis("y", "Tweets");
    chart.addSeries(null, dimple.plot.bar);
    chart.draw();
  </script>
    
    
    
</body>