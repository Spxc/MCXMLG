<?php
    header('Content-type: text/xml'); // Set view of page to correct format

    // Include php mysql config file for conn
    include 'conf/conf.php';
    
    if ($result=mysqli_query($con,$sql)) {
        // Fetch one and one row
        //$sep = "\t";
        /*$feedColumns = "id\t
                        title\t
                        description\t
                        price\t
                        condition\t
                        link\t
                        availability\t
                        image link";*/
        echo '<rss xmlns:g="http://base.google.com/ns/1.0" version="2.0">
                <channel>
                <title>Google Shopping</title>
                <link>https://instebo.one</link>
                <description>
                    Open source XML feed creator by: Stian Insteboe
                </description>';
        
        //echo $feedColumns."\n";
        
        while ($row=mysqli_fetch_row($result)) {
            //printf ("%s (%s)\n",$row[0],$row[1]);
            echo '<item>';
            echo '<g:id>'.$row['0'].'</g:id>';
            echo '<g:brand>'.$row['9'].'</g:brand>';
            echo '<g:condition>'.$row['4'].'</g:condition>';
            echo '<g:adult>no</g:adult>';
            echo '<g:is_bundle>no</g:is_bundle>';
            echo '<g:google_product_category>Arts</g:google_product_category>';
            echo '<g:title>' . $row['1'] . '</g:title>'; 
            echo '<g:description>' . $row['2'] . '</g:description>'; 
            echo '<g:link>'.$row['5'].'</g:link>';
            echo '<g:image_link>'. $row['7'] . '</g:image_link>';
            echo '<g:availability>'.$row['6'] . '</g:availability>';
            echo '<g:price>'.$row['3'] . '</g:price>';
            if ($row['8'] == "yes") {
                echo '<g:identifier_exists>'.$row['8'].'</g:identifier_exists>';
                if ($row['10'] == "") {
                    echo '<g:gtin>'.$row['11'].'</g:gtin>';
                } else {
                    echo '<g:mpn>'.$row['10'].'</g:mpn>';
                }
            } else {
                echo '<g:identifier_exists>'.$row['8'].'</g:identifier_exists>';
            }
            
            echo '</item>';
        }
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "no products found!";
    }
    echo '</channel>
            </rss>';
            
    mysqli_close($con);
?>