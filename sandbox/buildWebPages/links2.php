<?php
    require_once('../../private/initialize.php');
    $page = getPage();

     //Include header
 include(SHARED_PATH."/header.php");
            switch ($page){
                case 1:
                    echo  "<section class='phpTop'></section><h1>Welcome Page</h1></section>
                           <section><p>What? 1955? You're my ma- you're my ma. Why not? Lorraine. Wait a minute, Doc. What are you talking about? What happens to us in the future? What do we become assholes or something?
Well, you mean, it makes perfect sense. Hey guys, you gotta get back in there and finish the dance. Lynda, first of all, I'm not your answering service. Second of all, somebody named Greg or Craig called you just a little while ago. Wait a minute, what are you doing, Doc? George, there's nothing to be scared of. All it takes is a little self confidence. You know, if you put your mind to it, you could accomplish anything.
Thank god I found you. Listen, can you meet me at Twin Pines Mall tonight at 1:15? I've made a major breakthrough, I'll need your assistance. What? Ahh. That's Calvin Klein, oh my god, he's a dream. Are you okay?
</p></section>";
                    break;
                case 2:
                    echo "<section class='phpTop'></section><h1>Hobbies</h1></section>
                             <section>
                             <h3>Dad Jokes</h3>
                             <ul>
                             <li>How do you make holy water? You boil the hell out of it.</li>
                             <li>What do you call a fake noodle? An Impasta.</li>
                             <li>Want to hear a joke about paper? Nevermind it's tearable. </li>
                             </ul>
                            </section>   ";
                    break;
                case 3:
                    echo "<section class='phpTop'></section><h1>About Us</h1></section>
                            <section>
                            <h3>Some Facts About Us</h3>
                            <p>What? 1955? You're my ma- you're my ma. Why not? Lorraine. Wait a minute, Doc. What are you talking about? What happens to us in the future? What do we become assholes or something?
                            Well, you mean, it makes perfect sense. Hey guys, you gotta get back in there and finish the dance. Lynda, first of all, I'm not your answering service. Second of all, somebody named Greg or Craig called you just a little while ago. Wait a minute, what are you doing, Doc? George, there's nothing to be scared of. All it takes is a little self confidence. You know, if you put your mind to it, you could accomplish anything.
                            Thank god I found you. Listen, can you meet me at Twin Pines Mall tonight at 1:15? I've made a major breakthrough, I'll need your assistance. What? Ahh. That's Calvin Klein, oh my god, he's a dream. Are you okay?
                            </p>
                            </section>";
                    break;
                case 4:
                    echo "<section class='phpTop'></section><h1>Favorite Vacation</h1></section>
                            <h3>Best Vaction</h3>
                            <p>Traveling website simple travelblogger excursion theme travelblogger. Design Travel adventure colorful blogger cute                               pretty cute simple. Wanderlust design traveler pretty blogger, clean traveler wanderlust traveling traveling design                                colorful. WordPress Travel modern excursion travelblogger, traveling webdesign travelblogger pretty darn design.                                Travelblogger Travel modern webdesign adventure expedition adventure design.</p>
                            <h3>Another One</h3>
                            <p>Colorful expedition traveling pretty blogger Travel adventure. Simple clean blogger, blogger design design colorful theme travelblogger whimsical. Travel website travelblogger adventure design traveler fun excursion excursion.    Clean theme modern design design, clean organized travelblogger modern webdesign design WordPress traveler. Darn   cute whimsical clean theme whimsical adventure pretty wanderlust. Modern design traveler cute pretty travelblogger modern traveler darn, wanderlust blogger blogger traveler. Wanderlust travelblogger traveling traveler design whimsical Travel theme. Website wanderlust organized design, modern webdesign wanderlust wanderlust wanderlust webdesign cute traveler expedition Travel. Blogger design clean expedition travelblogger whimsical organized, webdesign traveler Travel webdesign traveler design cute.</p>
                            <h3>And a Last One</h3>
                            <p>Traveling webdesign pretty adventure organized, darn website excursion theme pretty. Excursion pretty cute webdesign expedition, adventure Travel expedition colorful webdesign colorful simple traveler design. Colorful darn webdesign travelblogger travelblogger theme traveling wanderlust. Pretty wanderlust WordPress expedition travelblogger cute Travel, simple blogger pretty whimsical blogger Travel. Simple fun traveling, WordPress colorful excursion Travel excursion website travelblogger fun traveler webdesign.
</p>";
                    break;
                case 5:
                    header("Location: https://www.imdb.com/title/tt0491738/");
                    break;
                default:
                    echo  "<section class='phpTop'></section><h1>Error</h1></section>
                           <section><p>There has been an error please click the back button and try again. </p>
                           </section>";
            }
            ?>
<button><a href="<?php echo SANDBOX_PATH.'buildWebPages/links.php'?>">BACK TO HOME</a></button>
           <?php//Include Footer
           include(SHARED_PATH."/footer.php");
            ?>



