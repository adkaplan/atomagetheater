<?php
$request = $_REQUEST['id'];
echo $request;
if ($request == "blog") {
    $rss = new DOMDocument();
    $rss->load("http://aatheater.wordpress.com/feed/");
    $feed = array();
    foreach ($rss->getElementsByTagName('item') as $node) {
    $item = array (
    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
    'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
    'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
    );
    array_push($feed, $item);
    }
    if (count($feed)> 5) {
        $limit = 5;
    } else {$limit = count($feed);}
    for($x=0;$x<$limit;$x++) {
    $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
    $link = $feed[$x]['link'];
    $description = $feed[$x]['desc'];
    $date = date('l F d, Y', strtotime($feed[$x]['date']));
    echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
    echo '<small><em>Posted on '.$date.'</em></small></p>';
    echo '<p>'.$description.'</p>';
    }
} else if ($request == "tix") {

     #Form (Autofilling based on variables)
    $showdates = ["Jan 5, 5:30PM","Jan 6, 7:30PM"];
    echo "<center><img class='banner' src='http://i.imgur.com/AxQZOnS.png'/></center>";
    include '../txt/'.$_REQUEST['id'].'.txt';
     // $file = '../txt/'.$_REQUEST['id'].'.txt';
    $season = file_get_contents('../txt/season.txt');
} else {
    $file = '../txt/'.$_REQUEST['id'].'.txt';
    if (file_exists($file)) {
    	readfile($file);
    } else {
    	echo "404";
    }
}
?>