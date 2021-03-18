<!-- //offer code// -->
	<?php
		//ftch end date into database
	include("dbconnect.php");
		$select="select * from tbl_offer";
		$query=mysqli_query($conn,$select);
		$row=mysqli_fetch_assoc($query);
		?>		
<!-- //offer code// -->
<div class="sale-offer">
		 
		<?php
		//fetch end date into database
		$select="select * from tbl_offer";
	    $query=mysqli_query($conn,$select);
	    $row=mysqli_fetch_assoc($query);
	    $date=$row['offer_enddate'];
	    $hours=$row['hours'];
	    $minutes=$row['minutes'];
	    $seconds=$row['seconds'];
	    $date=$date." ".$hours.':'.$minutes.':'.$seconds;
	    $d=strtotime($date);

	   //calling date function
	    $date=date("Y-m-d G:i:s", $d);

        $date_start=date("d");//current date
        $date_end=date("d",$d);//database date i.e Offer end date
        $month_start=date("M");//current month
        $month_end=date("M",$d);//database ned i.e offer end month
       $image=$row['offer_image'];

        // check wheather offer active or not i.e offer status is 1
	   if($row['offer_check']==1){
         ?>
         
 <script>
// Set the date we're counting down to2018-10-24 10:30:00
//var countDownDate = ;
   var countDownDate=new Date("<?php echo $date;?>").getTime(); 
    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element 
     document.getElementById("offer_ends").innerHTML = "Offer Ends on";
      document.getElementById("offer").innerHTML = days + "d " + hours + "h "
       + minutes + "m " + seconds + "s ";
     /* document.getElementById("offer_date").innerHTML = "<?php //echo $date_start."<sup>th</sup>".$month_start."-".$date_end."<sup>th</sup>".$month_end;?>";
    */
      

   var el = document.getElementById("yabanner");
   el.innerHTML="<a href='https://www.coepd.us/campaign.php?eid=14'><img src='offersimg/<?php echo $image;?>'></a>";// Banner redirect url included 

    
     // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
       
        document.getElementById("offer").innerHTML = '<span style="display:none;"></span>'; 
         document.getElementById("yabanner").innerHTML = '<span style="display:none;"></span>'; 
        document.getElementById("offer_date").innerHTML = '<span style="display:none;"></span>';    }
       }, 1000);
</script>

         <div id="yabanner"></div>

         <!-- banner redirection url-->
         <a href="https://www.coepd.us/campaign.php?eid=14"><p id="offer_ends"></p></a>
         <a href="https://www.coepd.us/campaign.php?eid=14"><p id="offer"></p></a>  <!-- Send id to the javascript  -->
         <!-- <p id ="offer_date"></p>  -->
         <!-- Send id to the javascript  -->
        <?php 
         } //end if
          
          // offer status is 0
       else{
    	echo "<p style='display:none;'></p>";
          }//end else

        ?><!-- //end php -->
    
    </div>

      
      