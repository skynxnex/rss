<?php  
  
function getFeed($feed_url) {  
  
    $content = file_get_contents($feed_url);  
    $x = new SimpleXmlElement($content);  
  
    echo "<ul data-role='listview' data-inset='true'>";  
  	
  	$i = 0;
    foreach($x->channel->item as $entry) {  
    	if($i % 2) {
        	echo "<li data-theme='c'><a href='$entry->link' title='$entry->title'>" .$entry->title . "</a></li>";  
    	} else {
    		echo "<li data-theme='e'><a href='$entry->link' title='$entry->title'>" .$entry->title . "</a></li>";
    	}

        $i++;
    }  
    echo "</ul>";  
}  
?>