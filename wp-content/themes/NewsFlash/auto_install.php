<?php
set_time_limit(0);
global  $wpdb;
//require_once (TEMPLATEPATH . '/delete_data.php');
$dummy_image_path = get_template_directory_uri().'/images/dummy/';

/*echo "<pre>";
print_r(get_option('sidebars_widgets'));
print_r(get_option('widget_advtwidget'));
exit;*/

//$post_loan_id = $wpdb->get_var("SELECT guid FROM $wpdb->posts where post_title like 'Loan' and post_type='page'");
//====================================================================================//
/////////////// TERMS START ///////////////
require_once(ABSPATH.'wp-admin/includes/taxonomy.php');
$category_array = array(array('Articles','Sub Category 1','Sub Category 2'),'Entertainment','Sports','Featured','Music','Videos');
insert_category($category_array);
function insert_category($category_array)
{
	for($i=0;$i<count($category_array);$i++)
	{
		$parent_catid = 0;
		if(is_array($category_array[$i]))
		{
			$cat_name_arr = $category_array[$i];
			for($j=0;$j<count($cat_name_arr);$j++)
			{
				$catname = $cat_name_arr[$j];
				$last_catid = wp_create_category( $catname, $parent_catid);
				if($j==0)
				{
					$parent_catid = $last_catid;
				}
			}
			
		}else
		{
			$catname = $category_array[$i];
			wp_create_category( $catname, $parent_catid);
		}
	}
}
/////////////// TERMS END ///////////////
//====================================================================================//
$post_info = array();
////post start 1///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/a1.jpg";
$image_array[] = "dummy/a2.jpg";
$image_array[] = "dummy/a3.jpg";
$image_array[] = "dummy/a4.jpg";
$image_array[] = "dummy/a5.jpg";
$image_array[] = "dummy/a6.jpg";
$image_array[] = "dummy/a7.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Stevens Real Legacy',
					"post_content"	=>	'Within two minutes, or even less, he had forgotten all his troubles. Not because his troubles were one whit less heavy and bitter to him than a man are to a man, but because a new and powerful interest bore them down and drove them out of his mind for the time–just as men misfortunes are forgotten in the excitement of new enterprises. This new interest was a valued novelty in whistling, which he had just acquired from a negro, and he was suffering to practise it undisturbed. It consisted in a peculiar bird-like turn, a sort of liquid warble, produced by touching the tongue to the roof of the mouth at short intervals in the midst of the music–the reader probably remembers how to do it, if he has ever been a boy. Diligence and attention soon gave him the knack of it, and he strode down the street with his mouth full of harmony and his soul full of gratitude. He felt much as an astronomer feels who has discovered a new planet–no doubt, as far as strong, deep, unalloyed pleasure is concerned, the advantage was with the boy, not the astronomer

The summer evenings were long. It was not dark, yet. Presently Tomchecked his whistle. A stranger was before him–a boy a shade larger than himself. A new-comer of any age or either sex was an impressive curiosity in the poor little shabby village of St. Petersburg. This boy was well dressed, too–well dressed on a week-day. This was simply astounding. His cap was a dainty thing, his close-buttoned blue cloth roundabout was new and natty, and so were his pantaloons. He had shoes on–and it was only Friday. He even wore a necktie, a bright bit of ribbon. He had a citified air about him that ate into Tom vitals. The more Tom stared at the splendid marvel, the higher he turned up his nose at his finery and the shabbier and shabbier his own outfit seemed to him to grow. Neither boy spoke. If one moved, the other moved–but only sidewise, in a circle; they kept face to face and eye to eye all the time. Finally Tom said:',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Articles','Featured'),
					"post_tags"		=>	array('Tags','Sample Tags')
					);
////post end///
////post start 2 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/a2.jpg";
$image_array[] = "dummy/a3.jpg";
$image_array[] = "dummy/a4.jpg";
$image_array[] = "dummy/a5.jpg";
$image_array[] = "dummy/a6.jpg";
$image_array[] = "dummy/a7.jpg";
$image_array[] = "dummy/a8.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Immigration law supporters rally in Arizona',
					"post_content"	=>	'PHOENIX -- Hundreds of people supporting Arizonas new law cracking down on illegal immigration gathered near the state Capitol on Saturday as soaring temperatures were expected to hit 107 degrees. The Pennsylvania-based group Voice of the People USA organized the demonstration, which it touts as a grass-roots effort. Attendees came from every region of the U.S., Voice of the People President Daniel Smeriglio said. The rally turnout fell far short of the march organized by opponents of the law last weekend, when an estimated 20,000 people gathered.The immigration law requires that police conducting traffic stops or questioning people about possible legal violations ask them about their immigration status if there is "reasonable suspicion" that theyre in the country illegally. Reasonable suspicion is not defined. The law also makes it a state crime to be in the country illegally or to impede traffic while hiring day laborers, regardless of the workers immigration status. It would become a crime for illegal immigrants to solicit work. The law takes effect July 29 unless blocked by a court as requested under pending legal challenges. Hundreds of motorcycle riders kicked off the rally by riding in a procession around the Capitol.The rally at a park in downtown Phoenix follows dueling events last weekend that drew thousands of opponents and supporters of the law to the area.',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Articles','Featured'),
					"post_tags"		=>	array('New','Popular')
					);
////post end///
////post start 3 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/a3.jpg";
$image_array[] = "dummy/a4.jpg";
$image_array[] = "dummy/a5.jpg";
$image_array[] = "dummy/a6.jpg";
$image_array[] = "dummy/a7.jpg";
$image_array[] = "dummy/a8.jpg";
$image_array[] = "dummy/a9.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Lakers looking to get the low-down again in Game 3 against Celtics',
					"post_content"	=>	'The Lakers went away from their strength, 7-footers Pau Gasol and Andrew Bynum, in the fourth quarter of Game 2 loss. They say they intend to go back to trying to exploit their size advantage in the low post Tuesday in Boston.
	Reporting from Boston The Lakers were dominant down low, the Boston Celtics unable to stop Pau Gasol and Andrew Bynum, when good fortune smiled on the Celtics as a most unusual event took place, something called the start of the fourth quarter.

Gasol had one shot, Bynum had two over the final 12 minutes and the Celtics evened up the NBA Finals with a 103-94 victory in Game 2 on Sunday.

Gasol had 25 points in the game, only one in the fourth quarter, and Bynum had 21 in the game, four in the fourth quarter, part of the reason the Lakers headed to Boston in a deadlocked series that resumes Tuesday with Game 3 at certain-to-be-raucous TD Garden.Neither Garnett (six points) nor Paul Pierce (10 points) were problems for the Lakers in Game 2, though Pierce could be heard proclaiming, "Aint coming back to L.A.," after helping up Kendrick Perkins near the baseline on a play late in the game.

The Lakers issues, more specifically, were Ray Allen hitting from the outside, which is never a shocker, and Rajon Rondo also shooting well from the perimeter, somewhat surprising for the 24-year-old who drives and rebounds as well as any guard in the league but isnt known for his steady shotThe Lakers are looking internally, however, at getting more touches for their big men.

Gasol made seven of 10 shots and Bynum made six of 10, but should Ron Artest really have taken 10 shots, especially since he made only one?

Our big guys played great, Bynum and Paul Lakers Coach Phil Jackson said. We didnt get the ball often enough to them.

Both post players took the diplomatic approach, presumably because the series is so young.

Obviously, we can get more touches Bynum said. But thats still not going to help us beat this team because you cant beat them one on one.

Gasol, to his credit, said the work he and Bynum did down low was not wasted.

I think our effort was a positive thing, Gasol said. And its going to have to be even better, greater in Boston, because its going to be tougher to play there.

The Lakers were also dominant defensively in the paint.',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Articles','Featured'),
					"post_tags"		=>	array('Sample Tag')
					);
////post end///
////post start 4 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/a4.jpg";
$image_array[] = "dummy/a5.jpg";
$image_array[] = "dummy/a6.jpg";
$image_array[] = "dummy/a7.jpg";
$image_array[] = "dummy/a8.jpg";
$image_array[] = "dummy/a9.jpg";
$image_array[] = "dummy/a10.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Critics Notebook: Glee sings to a forgotten generation',
					"post_content"	=>	'Journey, Young MC and Cyndi Lauper. The show grooves to the 80s while turning stereotypes on their head. Finally, the music of tail-end boomers is heard.
still till she asked who did the mischief; and then he would tell, and there would be nothing so good in the world as to see that pet model catch it. Glees first season has included such musical blasts from the past as Aerosmiths Dream On, performed by series lead Matthew Morrison, left, and guest star Neil Patrick Harris. Glee allows this particular sliver of between-generations a nostalgia that is, for once, neither borrowed nor assigned.Foxs musical comedy hit Glee has revolutionized TV in many ways (including the fact that TV critics can now write the term musical comedy hit, and who thought that would ever happen?). But watching the recent Safety Dance episode, it all came together: Here is a show celebrating popular music and there isnt even a whiff of boomage.

Those of us who had the misfortune to be born in the first half of the 1960s are truly a lost generation. Not quite boomers, not quite Gen X, we came of age as the Carter White House succumbed to the Reagan years, when women rediscovered shoulder pads and men wore penny loafers with no socks, when everyone found the conceits of Bosom Buddies and Threes Company racy and hilarious. Our musical taste, as I remember it, was eclectic - yes, there was Bruce Springsteen, Aerosmith and Genesis, but there was also Duran Duran, the Go-Gos, Stray Cats, Wham and Men Without Hats.',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Articles','Featured'),
					"post_tags"		=>	array('Tag 1')
					);
////post end///
////post start 5 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/a5.jpg";
$image_array[] = "dummy/a6.jpg";
$image_array[] = "dummy/a7.jpg";
$image_array[] = "dummy/a8.jpg";
$image_array[] = "dummy/a9.jpg";
$image_array[] = "dummy/a10.jpg";
$image_array[] = "dummy/a1.jpg";
$image_array[] = "dummy/a2.jpg";
$image_array[] = "dummy/a3.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Apple announces new iPhone 4: the Steve Jobs keynote',
					"post_content"	=>	'Steve Jobs took the stage at Apple Incs Worldwide Developers Conference to announce new features and products from the company.

The chief executive began by giving an update on the iPad. The tablet computing device sold 2 million units in the first two months since its debut and has 8,500 apps on Apples online store. So far, 35 million apps have been downloaded, he said, which breaks down to 17 apps per iPad.In an update on the iPads built-in book software, Jobs said the iBookstore platform had sold more than 5 million books in the first 65 days -- or about 2.5 books per iPad.Further, Jobs said that for five of the six largest publishers, about 22% of e-book purchases are being sold through the iPads bookstore.In an addition to the iBook reading apps functionality, the app will allow users to do inline note-taking.Jobs also invited Netflix CEO Reed Hastings to the stage to announce a new, free Netflix application for the iPhone. Hastings said the Netflix app for iPad has been among the most popular apps in Apples App Store, and No. 1 in the entertainment category.

Its been a tremendous success for us, Hastings said. Its our fastest growing platform.The Netflix iPhone app will be available starting this summer. Marc Pincus, the CEO of Zynga, came to the stage to announce an iPad version of Farmville, which is played by 35 million people every day, largely on Facebook. Jobs said the company crossed 5 billion downloads. He followed that comment with what he called his favorite stat of the whole show, which is that Apple has paid out $1 billion to its app developers. We were thrilled about it, he said. Jobs announces the iPhone 4. Stop me if you have already seen this, he said, referring to the leak of the phone by Gizmodo. But believe me, you aint seen it. Its one of the most beautiful designs you have ever seen. Its beyond a doubt the most precise things and one of the most beautiful things we have ever made. Jobs shows photos of the phone, familiar from the leak. He calls it the thinnest smart phone on the planet, noting that the iPhone 4 is 24% thinner than its predecessor.',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Articles','Featured'),
					"post_tags"		=>	array('Apple')
					);
////post end///
////post start 6///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/a6.jpg";
$image_array[] = "dummy/a7.jpg";
$image_array[] = "dummy/a8.jpg";
$image_array[] = "dummy/a9.jpg";
$image_array[] = "dummy/a10.jpg";
$image_array[] = "dummy/a1.jpg";
$image_array[] = "dummy/a2.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Vehicles travel during rush hour on Interstates',
					"post_content"	=>	'Within two minutes, or even less, he had forgotten all his troubles. Not because his troubles were one whit less heavy and bitter to him than a man are to a man, but because a new and powerful interest bore them down and drove them out of his mind for the time–just as men misfortunes are forgotten in the excitement of new enterprises. This new interest was a valued novelty in whistling, which he had just acquired from a negro, and he was suffering to practise it undisturbed. It consisted in a peculiar bird-like turn, a sort of liquid warble, produced by touching the tongue to the roof of the mouth at short intervals in the midst of the music–the reader probably remembers how to do it, if he has ever been a boy. Diligence and attention soon gave him the knack of it, and he strode down the street with his mouth full of harmony and his soul full of gratitude. He felt much as an astronomer feels who has discovered a new planet–no doubt, as far as strong, deep, unalloyed pleasure is concerned, the advantage was with the boy, not the astronomer.

The summer evenings were long. It was not dark, yet. Presently Tomchecked his whistle. A stranger was before him–a boy a shade larger than himself. A new-comer of any age or either sex was an impressive curiosity in the poor little shabby village of St. Petersburg. This boy was well dressed, too–well dressed on a week-day. This was simply astounding. His cap was a dainty thing, his close-buttoned blue cloth roundabout was new and natty, and so were his pantaloons. He had shoes on–and it was only Friday. He even wore a necktie, a bright bit of ribbon. He had a citified air about him that ate into Tom vitals. The more Tom stared at the splendid marvel, the higher he turned up his nose at his finery and the shabbier and shabbier his own outfit seemed to him to grow. Neither boy spoke. If one moved, the other moved–but only sidewise, in a circle; they kept face to face and eye to eye all the time. Finally Tom said:',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Articles','Featured'),
					"post_tags"		=>	array('Tags','Sample Tags')
					);
////post end///
////post start 7 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/a7.jpg";
$image_array[] = "dummy/a8.jpg";
$image_array[] = "dummy/a9.jpg";
$image_array[] = "dummy/a10.jpg";
$image_array[] = "dummy/a1.jpg";
$image_array[] = "dummy/a2.jpg";
$image_array[] = "dummy/a3.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Today Is the Best Tax Day of Your Life',
					"post_content"	=>	'SATURDAY morning was come, and all the summer world was bright and fresh, and brimming with life. There was a song in every heart; and if the heart was young the music issued at the lips. There was cheer in every face and a spring in every step. The locust-trees were in bloom and the fragrance of the blossoms filled the air. Cardiff Hill, beyond the village and above it, was green with vegetation and it lay just far enough away to seem a Delectable Land, dreamy, reposeful, and inviting.

Tom appeared on the sidewalk with a bucket of whitewash and a long-handled brush. He surveyed the fence, and all gladness left him and a deep melancholy settled down upon his spirit. Thirty yards of board fence nine feet high. Life to him seemed hollow, and existence but a burden. Sighing, he dipped his brush and passed it along the topmost plank; repeated the operation; did it again; compared the insignificant whitewashed streak with the far-reaching continent of unwhitewashed fence, and sat down on a tree-box discouraged. Jim came skipping out at the gate with a tin pail, and singing Buffalo Gals. Bringing water from the town pump had always been hateful work in Tom eyes, before, but now it did not strike him so. He remembered that there was company at the pump. White, mulatto, and negro boys and girls were always there waiting their turns, resting, trading playthings, quarrelling, fighting, skylarking.',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Articles','Featured'),
					"post_tags"		=>	array('Business')
					);
////post end///
////post start 8 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/a8.jpg";
$image_array[] = "dummy/a9.jpg";
$image_array[] = "dummy/a10.jpg";
$image_array[] = "dummy/a1.jpg";
$image_array[] = "dummy/a2.jpg";
$image_array[] = "dummy/a3.jpg";
$image_array[] = "dummy/a4.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'The Job Hunt',
					"post_content"	=>	' The raft drew beyond the middle of the river; the boys pointed her head right, and then lay on their oars.

	<blockquote> The river was not high, so there was not more than a two or three mile current. Hardly a word was
said during the next three-quarters of an hour. Now the raft was passing before the distant town. Two or three glimmering lights showed where it lay, peacefully sleeping, beyond the vague vast sweep of star-gemmed water, unconscious of the tremendous event that was happening. </blockquote>
	<ul>
     <li>The Black Avenger stood still with folded arms, &quot;looking his last&quot; upon </li>
    <li>the scene of his former joys and his later sufferings, and wishing</li>
     <li>&quot;she&quot; could see him now, abroad on the wild sea, facing peril and death with dauntless heart, going to his doom with a grim smile on his lips. It was but a small strain on his imagination to remove Jackson Island</li>
     <li>beyond eyeshot of the village, and so he "looked his last" with a</li>
     <li> broken and satisfied heart. The other pirates were looking their last </li>
     <li> too; and they all looked so long that they came near letting the</li>
	 </ul>

current drift them out of the range of the island. But they discovered the danger in time, and made shift to avert it. About two oclock in the morning the raft grounded on the bar two hundred yards above the head of the island, and they waded back and forth until they had landed their freight.

Part of the little raft belongings consisted of an old sail, and this they spread over a nook in the bushes for a tent to shelter their provisions; but they themselves would sleep in the open air in good weather, as became outlaws.

<ol>
   <li> They built a fire against the side of a great log twenty or thirty</li>
   <li> steps within the sombre depths of the forest, and then cooked some</li>
   <li> bacon in the frying-pan for supper, and used up half of the corn &quot;pone&quot;</li>
   <li>  stock they had brought. It seemed glorious sport to be feasting in that</li>
   <li> wild, free way in the virgin forest of an unexplored and uninhabited</li>
   <li> island, far from the haunts of men, and they said they never would</li>
   <li> return to civilization. The climbing fire lit up their faces and threw</li>
   <li> its ruddy glare upon the pillared tree-trunks of their forest temple,</li>
   <li> and upon the varnished foliage and festooning vines.</li>
 </ol>

When the last crisp slice of bacon was gone, and the last allowance of corn pone devoured, the boys stretched themselves out on the grass, filled with contentment. They could have found a cooler place, but they would not deny themselves such a romantic feature as the roasting camp-fire.',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Articles','Featured'),
					"post_tags"		=>	array('Science')
					);
////post end///
////post start 9 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/a9.jpg";
$image_array[] = "dummy/a10.jpg";
$image_array[] = "dummy/a1.jpg";
$image_array[] = "dummy/a2.jpg";
$image_array[] = "dummy/a3.jpg";
$image_array[] = "dummy/a4.jpg";
$image_array[] = "dummy/a5.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'The Shape of Things to Come',
					"post_content"	=>	'Presently she stepped into the kitchen, and Sid, happy in his immunity, reached for the sugar-bowl–a sort of glorying over Tom which
was wellnigh unbearable. But Sid fingers slipped and the bowl dropped and broke. Tom was in ecstasies. In such ecstasies that he even controlled his tongue and was silent. He said to himself that he would not speak a word, even when his aunt came in, but would sit perfectly
still till she asked who did the mischief; and then he would tell, and there would be nothing so good in the world as to see that pet model catch it. He was so brimful of exultation that he could hardly hold himself when the old lady came back and stood above the wreck discharging lightnings of wrath from over her spectacles. He said to himself, "Now it coming!" And the next instant he was sprawling on the floor! The potent palm was uplifted to strike again when Tom cried out',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Articles','Featured'),
					"post_tags"		=>	array('Health')
					);
////post end///
////post start 10 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/a10.jpg";
$image_array[] = "dummy/a1.jpg";
$image_array[] = "dummy/a2.jpg";
$image_array[] = "dummy/a3.jpg";
$image_array[] = "dummy/a4.jpg";
$image_array[] = "dummy/a5.jpg";
$image_array[] = "dummy/a6.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'The Comeback Country',
					"post_content"	=>	'
					The river was not high, so there was not more than a two or three mile current. Hardly a word was
said during the next three-quarters of an hour. Now the raft was passing before the distant town. Two or three glimmering lights showed where it lay, peacefully sleeping, beyond the vague vast sweep of star-gemmed water, unconscious of the tremendous event that was happening. 

					<blockquote> The river was not high, so there was not more than a two or three mile current. Hardly a word was
said during the next three-quarters of an hour. Now the raft was passing before the distant town. Two or three glimmering lights showed where it lay, peacefully sleeping, beyond the vague vast sweep of star-gemmed water, unconscious of the tremendous event that was happening. </blockquote>
	<ul>
     <li>The Black Avenger stood still with folded arms, &quot;looking his last&quot; upon </li>
    <li>the scene of his former joys and his later sufferings, and wishing</li>
     <li>&quot;she&quot; could see him now, abroad on the wild sea, facing peril and death with dauntless heart, going to his doom with a grim smile on his lips. It was but a small strain on his imagination to remove Jackson Island</li>
     <li>beyond eyeshot of the village, and so he "looked his last" with a</li>
     <li> broken and satisfied heart. The other pirates were looking their last </li>
     <li> too; and they all looked so long that they came near letting the</li>
	 </ul>

current drift them out of the range of the island. But they discovered the danger in time, and made shift to avert it. About two oclock in the morning the raft grounded on the bar two hundred yards above the head of the island, and they waded back and forth until they had landed their freight.
',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Articles','Featured'),
					"post_tags"		=>	array('Tag 2')
					);
////post end///
//=====================================================================================//
////post start 1 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/s1.jpg";
$image_array[] = "dummy/s2.jpg";
$image_array[] = "dummy/s3.jpg";
$image_array[] = "dummy/s4.jpg";
$image_array[] = "dummy/s5.jpg";
$image_array[] = "dummy/s6.jpg";
$image_array[] = "dummy/s7.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Crystal Palace granted reprieve after principle agreement over sale of club and ground',
					"post_content"	=>	'Crystal Palace were granted a dramatic reprieve yesterday when an intense afternoon of negotiations ended with an agreement in principle for the sale of both the club and the Selhurst Park ground. Crystal Palace administrator Brendan Guilfoyle had set a deadline of 3pm on Tuesday for the resolution of the stand-off between CPFC 2010 - the prospective new owners - and Bank of Scotland, but was satisfied when both parties confirmed their agreement shortly after 4pm. Had there been no progress on Tuesday, the process of selling players and liquidating the club would have begun. As it is, CPFC 2010, who are fronted by local businessmen Steve Parish and Martin Long, were on Tuesday night finalising the detail of a deal with PricewaterhouseCoopers LLP, who are the administrators for the stadium. 

					The main difficulty had surrounded the terms of a future sell-on clause for Selhurst Park with Bank of Scotland, who are the main creditors for the ground. CPFC 2010 have already reached agreement with the P&A Partnership - the club&acute;s administrators - and must now hope that they can avoid administration through a Company Voluntary Arrangement. The takeover is dependent on concluding a deal both with the administrators for the club and the stadium. Throughout what has been a complex administration, we had remained hopeful that we could conclude a deal with a purchaser whose vision for the ground matched that of the community, the football club and its supporters, said Barry Gilbertson, a partner at PricewaterhouseCoopers LLP. Earlier in the day, hundreds of fearful Palace fans had gathered outside the London headquarters of Lloyds Banking Group, the parent company for Bank of Scotland, and at Selhurst Park in protest at the apparent deadlock. Yet having warned on Monday that the club was facing the prospect of liquidation, CPFC 2010 emerged with optimism after Tuesday&acute;s developments. While it is not 100 per cent done we are confident that all the main barriers have been removed,&quot; said a statement. Guilfoyle was forced to make 29 staff redundant on Friday and was unable to fund the monthly wage bill.',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Sports','Sub Category 1'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 2 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/s2.jpg";
$image_array[] = "dummy/s3.jpg";
$image_array[] = "dummy/s4.jpg";
$image_array[] = "dummy/s5.jpg";
$image_array[] = "dummy/s6.jpg";
$image_array[] = "dummy/s7.jpg";
$image_array[] = "dummy/s8.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'British No 2 Alex Bogdanovic faces anxious wait at Queens',
					"post_content"	=>	'For the past eight years, a first-round defeat for Alex Bogdanovic at Wimbledon has been as much a part of the summer season as Royal Ascot or Henley, yet when the All England Club announced their first batch of wild cards for this summers Championships, the highest ranked Briton after Andy Murray was not on the list. Bogdanovic, who is ranked 166 in the world, has had eight wild cards in the past, and every time he has been unable to make the second round. The only other man to have registered eight defeats from eight appearances at the grass-court slam is Patricio Cornejo, a Chilean who played in the 1960s and 1970s.Five of the eight wild cards for the main draw of the men&acute;s tournament were announced on Monday. Jamie Baker, the British No 3, has been given one, as have Russians Teimuraz Gabashvili and Andrey Kuznetsov, Nicholas Kiefer, of Germany, and Japan&acute;s Kei Nishikori. If Bogdanovic does not receive one of the remaining three, he will have to enter the qualifying competition if he is to make a ninth attempt at winning at Wimbledon. If Bogdanovic was also feeling a bit unloved at Queen&acute;s, you could hardly blame him, as he did not receive a wild card into the pre-Wimbledon AEGON Championships.

			To make the main draw, Bogdanovic had come through three rounds of the qualifying competition. His opponent, Grigor Dimitrov, meanwhile, was given a wild card. By taking the first set 6-4 against the Bulgarian teenager and a former junior Wimbledon champion, Bogdanovic had already performed better than the two British players who had been given a wild card at Queen&acute;s, as Baker lost 6-1, 6-4 to Uzbekistan&acute;s Denis Istomin and James Ward was beaten 6-3, 7-5 by Robby Ginepri, of the United States. Rain forced the suspension of play with the scores 6-4, 3-6 and with British No 2 Bogdanovic 2-1 ahead in the third set which had gone with service. If he loses that third set against Dimitrov, Murray will be the only British player left in the singles tournament.',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Sports','Featured'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 3 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/s3.jpg";
$image_array[] = "dummy/s4.jpg";
$image_array[] = "dummy/s5.jpg";
$image_array[] = "dummy/s6.jpg";
$image_array[] = "dummy/s7.jpg";
$image_array[] = "dummy/s8.jpg";
$image_array[] = "dummy/s9.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'World Cup 2010: Portugal wing Nani ruled out of tournament with collar bone injury',
					"post_content"	=>	'Portugal have suffered a major injury blow following news that winger Nani will play no part in the World Cup after damaging his collar bone. The Manchester United player is thought to have suffered the injury in World Cup training on Friday and will be replaced in the squad by Benfica midfielder Ruben Amorim.Nanis absence will disrupt the plans of Portugal coach Carlos Queiroz, who was counting on the 23-year-old following an impressive season at Old Trafford. A statement on the Portuguese Football Federations official website read: "Following the injury to the left clavicle suffered by Nani, a daily assessment of the damage and the completion of medical tests, we have concluded he is unable to be competitive.The medical file will now be presented to the medical department of Manchester United. In light of the report, the Portuguese Football Federation, taking into account the Fifa regulations for the 2010 World Cup, will call-up Ruben Amorim as a replacement. Nani had struggled to hold down a regular first-team place at United following his switch to the Premier League from Sporting Lisbon in 2007. But he emerged from the shadow of Cristiano Ronaldo following his compatriots move to Real Madrid last summer and became an integral part of Sir Alex Fergusons side as they narrowly lost out in the title race to Chelsea last term. Amorim made 24 appearances for Benfica last season as they won the league for the first time in five years.',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Sports','Sub Category 1'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 4 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/s4.jpg";
$image_array[] = "dummy/s5.jpg";
$image_array[] = "dummy/s6.jpg";
$image_array[] = "dummy/s7.jpg";
$image_array[] = "dummy/s8.jpg";
$image_array[] = "dummy/s9.jpg";
$image_array[] = "dummy/s10.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'England v Bangladesh: Paul Collingwoods earned his rest, but hell be badly missed ',
					"post_content"	=>	'Watching England warm up today, there was a overriding feeling that something was missing.

It was an eager Labrador of a player, whose spindly legs invariably protrude from a pair of shorts as he bats, bowls and fields with the sprightliness of someone 10 years younger, encourages players in his Geordie twang and makes the odd self-deprecating remark to a passing hack. I am talking of course of Paul Collingwood.Collingwood is the heart and soul of the England team, someone for whom nothing is too much trouble, who will stoically bowl in the nets when all the other players have dragged their enormous kit bags back to the dressing room, and linger afterwards for extra slip catching practice to the slow bowlers or a bit of throwing at a stump. He is never knowingly underprepared.

That is why it is right to give him a rest for this match and presumably series. He has nothing to prove and quite a lot to lose. His body is willing but his mind will be running on empty. After the exertions of the last 12 months, he will have been existing on adrenalin during the world T20. Now back in the real world he will need the nourishment of a bit of time off to rejuvenate his cricketing appetite.

There will be those who say that a month of his exertion was spent in sole self-advancement at the IPL. But his time in India wasn&acute;t without benefit for England. He spoke before he went of the positive influences and sharing of ideas that involvement in the IPL brings, and the development of a different mindset it imbues. In short it banishes fearlessness, which, in a T20 match, translates as not worrying about losing your wicket. It was the hallmark of England&acute;s approach and the reason they won their first world title. Keeping the scoreboard moving was more important than keeping your wicket intact. It&acute;s a big step for naturally cautious, technique-obsessed English players to take. As a result of Collingwood, and Andy Flower&acute;s input, they took it and it paid off. Even Kevin Pietersen reaped the benefit.',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Sports','Featured'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 5 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/s5.jpg";
$image_array[] = "dummy/s6.jpg";
$image_array[] = "dummy/s7.jpg";
$image_array[] = "dummy/s8.jpg";
$image_array[] = "dummy/s9.jpg";
$image_array[] = "dummy/s10.jpg";
$image_array[] = "dummy/s1.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'England v Bangladesh: Paul Collingwoods earned his rest, but hell be badly missed ',
					"post_content"	=>	'Watching England warm up today, there was a overriding feeling that something was missing.

It was an eager Labrador of a player, whose spindly legs invariably protrude from a pair of shorts as he bats, bowls and fields with the sprightliness of someone 10 years younger, encourages players in his Geordie twang and makes the odd self-deprecating remark to a passing hack. I am talking of course of Paul Collingwood.Collingwood is the heart and soul of the England team, someone for whom nothing is too much trouble, who will stoically bowl in the nets when all the other players have dragged their enormous kit bags back to the dressing room, and linger afterwards for extra slip catching practice to the slow bowlers or a bit of throwing at a stump. He is never knowingly underprepared.

That is why it is right to give him a rest for this match and presumably series. He has nothing to prove and quite a lot to lose. His body is willing but his mind will be running on empty. After the exertions of the last 12 months, he will have been existing on adrenalin during the world T20. Now back in the real world he will need the nourishment of a bit of time off to rejuvenate his cricketing appetite.

There will be those who say that a month of his exertion was spent in sole self-advancement at the IPL. But his time in India wasn&acute;t without benefit for England. He spoke before he went of the positive influences and sharing of ideas that involvement in the IPL brings, and the development of a different mindset it imbues. In short it banishes fearlessness, which, in a T20 match, translates as not worrying about losing your wicket. It was the hallmark of England&acute;s approach and the reason they won their first world title. Keeping the scoreboard moving was more important than keeping your wicket intact. It&acute;s a big step for naturally cautious, technique-obsessed English players to take. As a result of Collingwood, and Andy Flower&acute;s input, they took it and it paid off. Even Kevin Pietersen reaped the benefit.',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Sports','Sub Category 1'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 6 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/s6.jpg";
$image_array[] = "dummy/s7.jpg";
$image_array[] = "dummy/s8.jpg";
$image_array[] = "dummy/s9.jpg";
$image_array[] = "dummy/s10.jpg";
$image_array[] = "dummy/s1.jpg";
$image_array[] = "dummy/s2.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'The worlds largest super-ferry',
					"post_content"	=>	'Watching England warm up today, there was a overriding feeling that something was missing.

It was an eager Labrador of a player, whose spindly legs invariably protrude from a pair of shorts as he bats, bowls and fields with the sprightliness of someone 10 years younger, encourages players in his Geordie twang and makes the odd self-deprecating remark to a passing hack. I am talking of course of Paul Collingwood.Collingwood is the heart and soul of the England team, someone for whom nothing is too much trouble, who will stoically bowl in the nets when all the other players have dragged their enormous kit bags back to the dressing room, and linger afterwards for extra slip catching practice to the slow bowlers or a bit of throwing at a stump. He is never knowingly underprepared.

That is why it is right to give him a rest for this match and presumably series. He has nothing to prove and quite a lot to lose. His body is willing but his mind will be running on empty. After the exertions of the last 12 months, he will have been existing on adrenalin during the world T20. Now back in the real world he will need the nourishment of a bit of time off to rejuvenate his cricketing appetite.

There will be those who say that a month of his exertion was spent in sole self-advancement at the IPL. But his time in India wasn&acute;t without benefit for England. He spoke before he went of the positive influences and sharing of ideas that involvement in the IPL brings, and the development of a different mindset it imbues. In short it banishes fearlessness, which, in a T20 match, translates as not worrying about losing your wicket. It was the hallmark of England&acute;s approach and the reason they won their first world title. Keeping the scoreboard moving was more important than keeping your wicket intact. It&acute;s a big step for naturally cautious, technique-obsessed English players to take. As a result of Collingwood, and Andy Flower&acute;s input, they took it and it paid off. Even Kevin Pietersen reaped the benefit.',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Sports','Sub Category 1'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 7 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/s7.jpg";
$image_array[] = "dummy/s8.jpg";
$image_array[] = "dummy/s9.jpg";
$image_array[] = "dummy/s10.jpg";
$image_array[] = "dummy/s1.jpg";
$image_array[] = "dummy/s2.jpg";
$image_array[] = "dummy/s3.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Bench Lifts Celtics to Tie Series',
					"post_content"	=>	'BOSTON - The fashionable &quot;Beat L.A.&quot; chants had all but faded from TD Garden, the oxygen bled from the building by Ray Allen&acute;s misfires, Kobe Bryant&acute;s impossible jumpers and Derek Fisher&acute;s intensity. An anxious air hung over the Boston Celtics on Thursday as they teetered on the edge of a heavy series deficit. 

Then Glen Davis rumbled and shimmied, Nate Robinson bounced and bellowed and belief was restored. The crowd thundered anew - &quot;Beat L.A.!&quot; - and the Celtics bullied their way to a 96-89 victory over the Lakers, tying the N.B.A. finals at 2-2.

It was an unusual victory, built on the backs of the Celtics reserves, most prominently Davis, the hefty center, and Robinson, the diminutive guard. They suffocated the Lakers with boundless energy, combining for 15 points in the fourth quarter and propelling the Celtics to a permanent lead.

&quot;I do not think that what we did today was really in the scouting report,&quot; Davis said. &quot;A lot of things that we did was just will and determination and seizing the moment.&quot;

And a lot of things were just plain unusual, such as Davis doing a little shimmy after a big free throw, or celebrating a play so enthusiastically that drool spilled from his mouth. The image was captured by the network cameras, to the great amusement of his teammates.

&quot;When you&acute;re in the moment, you&acute;re in the moment,&quot; the playful Davis said. &quot;If I slobber, snot, spit, please excuse me. Kids, don&acute;t do that. Have manners and things like that. Sorry about that. Did I catch you with some?&quot;

Davis was free to roam the paint in part because Andrew Bynum, the Lakers&acute; long-limbed center, was forced out by a nagging knee injury. He played just 12 minutes, raising doubts about his availability.

Bynum&acute;s absence &quot;bothered us in the second half,&quot; Coach Phil Jackson said, but the Lakers are hopeful that he can return on Sunday for Game 5, after a two-day break. The series will return to Los Angeles for Game 6 and a possible Game 7.

The Celtics&acute; Rasheed Wallace left the game late in the fourth quarter after aggravating a back injury. He also picked up his sixth technical foul of the postseason, one shy of the limit. Another technical foul would trigger an automatic suspension. The Celtics&acute; Kendrick Perkins is in the same predicament.

On a difficult night for the Celtics&acute; starters, Coach Doc Rivers turned to Davis, Robinson, Wallace and Tony Allen, who joined Ray Allen to open the fourth quarter. They promptly turned a 2-point deficit into a 9-point lead.

Paul Pierce, who had been quiet for much of the night, secured the victory with 7 points in the final 2 minutes 17 seconds and finished with 19.

The Lakers, looking exhausted and frazzled, could not keep pace. Bryant, finding scant help, kept launching difficult jumpers, going 10 for 22 from the field, finishing with 33 points. He had to do most of his work on the perimeter, going 6 for 11 from the 3-point arc. He also had 7 turnovers.

&quot;He was tired,&quot; Jackson said. &quot;Physically, I thought he had to work too hard in the course of the game, and he couldn&acute;t finish it out the way he wanted to finish it out.&quot;

The Lakers pulled within 6 points four times down the stretch, mostly on Bryant&acute;s efforts, but Pierce responded each time. They finally got within 5 points on a meaningless Bryant 3-pointer with 11 seconds left.

Derek Fisher, the Lakers&acute; savior in Game 3, spent much of Thursday night on the bench with foul trouble.

The Celtics thoroughly dominated the boards, 41-34, and pulled down 16 offensive rebounds, leading to 20 second-chance points. Davis powered through repeatedly for putbacks and layups.

Emotions flared in the fourth quarter. After Lamar Odom knocked Robinson to the floor with a hard foul, Robinson leaped up and went nose to chest with Odom, drawing a technical. Wallace, who had drawn a technical foul a minute earlier, started berating the officials, and Rivers quickly called a timeout to calm everyone&acute;s nerves.

&quot;Somehow, we&acute;re going to have to keep our composure,&quot; Rivers said.

Robinson played the first 9:09 of the fourth quarter, in place of the ineffective Rajon Rondo (10 points), and made several big plays, including a runner in the lane that gave the Celtics an 83-74 lead. Davis hit a pair of free throws to make it an 11-point lead.

Ray Allen, who missed all 13 of his shots in Game 3 bounced back slightly with 12 points. After going four days and nearly 61 minutes of basketball between field goals, Allen finally found the net, converting a fast-break layup a minute after tipoff. That ended an 0-for-16 streak that began in the fourth quarter of Game 2. When he landed, Allen clenched both fists in quiet celebration.

Allen missed his next five shots, starting with an errant a 3-pointer that had 18,624 people exclaiming &quot;awwww&quot; in unison. That left him 1 for his last 21. He did not make another field goal until late in the third quarter, hitting a 20-footer that drew the loudest ovation of the night and tied the score at 56-56.

Davis and Allen provided all the points in a 17-8 run that bridged the third and fourth quarters and wiped out the Lakers&acute; lead for good.

Then the celebrations began, with Davis whooping and the 5-foot 9-inch Robinson at one point leaping onto his broad back.

&quot;You were on my back?&quot; Davis said to Robinson, as they sat side by side on the interview podium.

&quot;You didn&acute;t even notice,&quot; Robinson said. &quot;We are like Shrek and Donkey. You can&acute;t separate us.&quot;

Everyone laughed and Davis concluded, &quot;You should not have let us two get up here.&quot;

On this night, there was no containing either one.',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Sports','Featured'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 8 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/s8.jpg";
$image_array[] = "dummy/s9.jpg";
$image_array[] = "dummy/s10.jpg";
$image_array[] = "dummy/s1.jpg";
$image_array[] = "dummy/s2.jpg";
$image_array[] = "dummy/s3.jpg";
$image_array[] = "dummy/s4.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Rousting Africa&acute;s Sleeping Giant',
					"post_content"	=>	'South Africa Coach Carlos Alberto Parreira stood outside the auditorium at Soccer City Stadium on Thursday being interviewed by a television crew when word came that Mexico&acute;s coach, Javier Aguirre, was arriving for his session.

An innocent enough encounter, one that coaches in the United States negotiate all the time. Their paths accidentally cross, they smile and shake hands, and then they go their separate ways.

But not here. Not at South Africa&acute;s World Cup.

The South African delegation wanted to stop the interview on the spot and usher Parreira away from Aguirre so the two coaches would not meet face to face with their teams&acute; game a day away.

In his remarks, though, Parreira hardly seemed like the kind of person about to be intimidated by the presence of the opposing coach. &quot;Playing in the opening match of the World Cup is special,&quot; he said. &quot;But out there on Friday against Mexico it will be a battle - no, make that a war. And we are ready for it.&quot;

So this is Parreira - Bafana Bafana&acute;s Brazilian-born, well-traveled mentor, whose task was to transplant his country&acute;s soccer swagger to South Africa&acute;s team.

So far, it has worked. Regardless of the results of Friday&acute;s game, there has been a meaningful transition in the way the South African team conducts itself.

Yes, there have been technical improvements - better conditioning, a greater focus on playing with an accelerated pace and more efficiency.

But what Parreira has really delivered to his players is confidence, which is something that cannot be defended by the opponent. Under his guidance, Bafana Bafana has gone from losing and feeling it would continue to lose, to winning and feeling it will continue to do so. But what exactly did Parreira do to turn things around? Was it something physical, mental?

&quot;Everything,&quot; midfielder Lance Davids said. &quot;We improved mentally, physically, technically, everything that a football team can do.&quot;

On Thursday, during his news conference, Parreira spoke easily; joked with reporters; answered questions; and displayed his versatility with the languages of the World Cup.

He used English with English-speaking reporters, Spanish with Spanish ones, Portuguese with Portuguese ones. At one point, Parreira even broke in and answered a question meant for Aaron Mokoena, the team captain. Mokoena said that since Parreira took over last year, he had infused South African players with a sense of joy, a trait one normally associates with the Brazilian game that Parreira knows so well.

&quot;We are more relaxed, much fitter and hungrier,&quot; Mokoena said. &quot;This is a big game for our country. We know we have to go out there and get a result. But the coach has made it easy for us by keeping the pressure off us and keeping us relaxed. He has had experience of being in this position a number of times, and that experience has been a great help to us.&quot;

Parreira coached Brazil to victory in the 1994 World Cup, made subsequent detours to such places as Saudi Arabia and New Jersey, where he coached the MetroStars of Major League Soccer, and then became coach of Brazil again, although that team only made it to the quarterfinals at the 2006 World Cup in Germany.

In the aftermath of that failure, Parreira soon resigned. He became coach of the South African team the next year, stepped down in April 2008, but then was brought back in October 2009.

None of this is that unusual in the transient world of elite soccer coaches. Meanwhile, for all the success he enjoyed at times as Brazil&acute;s coach, Parreira has now been overwhelmed by the outpouring of love and good will that has been showered on his South African players.

&quot;In this country, soccer has been sleeping for many years now,&quot; he said Thursday. &quot;And then suddenly, there was a ray of hope. This team has a face, this team has an identity, this team has confidence.&quot;

South African soccer had suffered from a lack of esteem that stemmed from decades of failure. It was undervalued, underestimated and marginalized.

When he took over in South Africa, Parreira instructed his players to put aside the overseas leagues that many of them played in.

&quot;We are now World Cup players,&quot; he said he told them. &quot;We are talking about a high level, where the demand is very high technically, tactically, physically and especially mentally.&quot;

As South Africa prepares for its debut as the home team in Africa&acute;s first World Cup, Parreira has walked a razor-thin line between instilling confidence and selling false hope. A victory over Mexico on Friday would be spectacular - it would create great harmony and confidence, Parreira said, for his team and for the country.

If the South Africans don&acute;t win, they aren&acute;t done. But the mountain will get a little steeper for a Brazilian coach who has been in so many places in his long career, but perhaps never in a situation as significant as this one. ',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Sports','Sub Category 1'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 1 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/e1.jpg";
$image_array[] = "dummy/e2.jpg";
$image_array[] = "dummy/e3.jpg";
$image_array[] = "dummy/e4.jpg";
$image_array[] = "dummy/e5.jpg";
$image_array[] = "dummy/e6.jpg";
$image_array[] = "dummy/e7.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Children Of All Ages Delighted By Enslavement Of Topsy The Elephant',
					"post_content"	=>	'TUCSON, AZ-Cheers, laughter, and applause filled the big top tent at the Ringling Bros. Circus Saturday as children of all ages were captivated by the savage enslavement of Topsy the elephant. Whether young or just young at heart, thrilled audience members watched with glee as a circus trainer forced the frightened Topsy to perform tricks by brutally poking and prodding the traumatized 4-year-old pachyderm.He is such a funny happy elephant, said 8-year-old Madison Helms, referring to the abused creature that spends the majority of his time chained up in a cramped, feces-covered enclosure. He loves being in the circus!
The crowd reportedly let out loud gasps and vigorously clapped when Topsy stood up on his hind legs, an unnatural and excruciatingly painful movement that stresses and permanently damages the 8,000-pound elephants joints.Topsy also delighted the audience after the trainer repeatedly thrust a hooked rod into his skin, causing the miserable animal to lift one leg and his trunk to simulate waving.',

					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Entertainment','Sub Category 2'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 2 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/e2.jpg";
$image_array[] = "dummy/e3.jpg";
$image_array[] = "dummy/e4.jpg";
$image_array[] = "dummy/e5.jpg";
$image_array[] = "dummy/e6.jpg";
$image_array[] = "dummy/e7.jpg";
$image_array[] = "dummy/e8.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Massive Flow Of Bullshit Continues To Gush From BP Headquarters.',
					"post_content"	=>	'LONDON-As the crisis in the Gulf of Mexico entered its eighth week Wednesday, fears continued to grow that the massive flow of bullshit still gushing from the headquarters of oil giant BP could prove catastrophic if nothing is done to contain it. The toxic bullshit, which began to spew from the mouths of BP executives shortly after the explosion of the Deepwater Horizon oil rig in April, has completely devastated the Gulf region, delaying cleanup efforts, affecting thousands of jobs, and endangering the lives of all nearby wildlife.

Everything we can see at the moment suggests that the overall environmental impact of this will be very, very modest, said BP CEO Tony Hayward, letting loose a colossal stream of undiluted bullshit. The Gulf of Mexico is a very big ocean, and the volume of oil we are putting into it is tiny in relation to the total volume of water. According to sources, the sheer quantity of bullshit pouring out of Hayward is unprecedented, and it has thoroughly drenched the coastlines of Louisiana, Mississippi, Alabama, and Florida, with no end in sight. Though no one knows exactly how much of the dangerous bullshit is currently gushing from BP headquarters, estimates put the number at somewhere between 25,000 and 70,000 words a day.',

					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Entertainment','Sub Category 2'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 3 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/e3.jpg";
$image_array[] = "dummy/e4.jpg";
$image_array[] = "dummy/e5.jpg";
$image_array[] = "dummy/e6.jpg";
$image_array[] = "dummy/e7.jpg";
$image_array[] = "dummy/e8.jpg";
$image_array[] = "dummy/e9.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Actress, Musician To Wed.',
					"post_content"	=>	'HOLLYWOOD, CA-The actress from the big hit movie and the musician from the popular band who have been photographed many times together out on the town are getting married, entertainment industry sources reported Monday.

I love him, the actress, who has been seen sporting a huge diamond engagement ring recently, told reporters while walking down the red carpet. He is definitely the one. The wedding, which will take place this summer, is expected to be attended by many equally famous celebrities, and will be photographed by many paparazzi, via helicopter if necessary. Insiders expect the guest list to be a veritable who is who of the rich and famous, including the Hollywood director, the reclusive former star who rarely makes public appearances, and the very handsome actor who used to be on television but is now in movies. According to sources, the wedding between the actress and the musician will be the most important social event of the season.

	Its going to take place on a tropical island owned by the couples super-rich friend, said the blonde entertainment reporter. And her dress will be created by the fashion designer who did all those Oscar gowns.',

					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Entertainment','Featured'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 4 ///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/e4.jpg";
$image_array[] = "dummy/e5.jpg";
$image_array[] = "dummy/e6.jpg";
$image_array[] = "dummy/e7.jpg";
$image_array[] = "dummy/e8.jpg";
$image_array[] = "dummy/e9.jpg";
$image_array[] = "dummy/e10.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Few Hometown Heroes at a Hip-Hop Showcase',
					"post_content"	=>	'EAST RUTHERFORD, N.J. - As hip-hop rites of passage go, the annual Summer Jam, hosted by the New York radio station Hot 97, is ostensibly an event of genre-wide significance, but really its an opportunity for local boosterism. Summer Jam is supposed to be a reminder not just of the importance of New York hip-hop but also of New York as vital turf where outsiders come to prove themselves.
	Its going to take place on a tropical island owned by the couples super-rich friend, said the blonde entertainment reporter. And her dress will be created by the fashion designer who did all those Oscar gowns. The scrum that took over the New Meadowlands Stadium stage here toward the end of this five-hour show on Sunday night was vintage Summer Jam in attitude and structure. There were easily 100 people muscling for space - some of them rappers, most hangers-on - and the performance not so artfully but thrillingly crashed together a fistful of recent hits. The ringleaders of this barely controlled explosion were the screech-voiced DJ Khaled and the casually sharp rapper Rick Ross',

					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Entertainment','Sub Category 1'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 5///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/e5.jpg";
$image_array[] = "dummy/e6.jpg";
$image_array[] = "dummy/e7.jpg";
$image_array[] = "dummy/e8.jpg";
$image_array[] = "dummy/e9.jpg";
$image_array[] = "dummy/e10.jpg";
$image_array[] = "dummy/e1.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Obama To Make Reassuring Eye Contact With Every Last American',
					"post_content"	=>	'ROCKLAND, ME-In an attempt to convince an anxious populace that his legislative agenda is working and that everything is going to be all right, President Barack Obama embarked on a 50-state, 30,000-town tour Monday during which he plans to gaze assuredly into the eyes of each American citizen, one at a time.

I know a lot of people out there are nervous. They are worried about unemployment, the oil spill in the Gulf, and whether or not I am making the right choices in Washington, Obama said during a rally at Rockland District High School. "To those Americans, I offer you this inspiring, confident gaze.

Obama then stepped down from his podium, walked into the 2,000-person audience, and peered comfortingly into each persons eyes. After taking 45 minutes to methodically work his way from the front row all the way to the balcony, and punctuating each look with a gentle pat on the shoulder, Obama returned to the stage, collected himself, and addressed the silent group before him.
There, he said.All better.

In their announcement of the "2010 Eye-to-Eye Tour," White House officials said that Obama will first spend two weeks making eye contact with the 55 million residents of the densely populated Northeastern states, looking into their eyes and, if necessary, offering them an encouraging head nod. Obama will then continue down the East Coast before taking on the tours biggest challenge: gazing with confidence into the eyes of a hostile Southern electorate that largely rejects his policies.',

					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Entertainment','Sub Category 2'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 6//
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/e6.jpg";
$image_array[] = "dummy/e7.jpg";
$image_array[] = "dummy/e8.jpg";
$image_array[] = "dummy/e9.jpg";
$image_array[] = "dummy/e10.jpg";
$image_array[] = "dummy/e1.jpg";
$image_array[] = "dummy/e2.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Tom Cruises Career Reboot: Mission Possible?',
					"post_content"	=>	'ROCKLAND, ME-In an attempt to convince an anxious populace that his legislative agenda is working and that everything is going to be all right, President Barack Obama embarked on a 50-state, 30,000-town tour Monday during which he plans to gaze assuredly into the eyes of each American citizen, one at a time.

It was hilarious. And for the first time in a long time, it got people talking not about his beliefs, not about his behavior, but about him.

This the summer of Tom Cruise.

The 47-year-old actor is attempting to reestablish himself as a box office behemoth and remind audiences that hey, he is not just the weirdo who jumped on Oprah Winfrey  couch, told Matt Lauer You dont know the history of psychiatry, I do" and claimed Scientology cured his dyslexia. He is dancing with J. Lo at the MTV Movie Awards . He is riding motorcycles and shooting guns with Cameron Diaz. He is a movie star, really! 

In their announcement of the "2010 Eye-to-Eye Tour," White House officials said that Obama will first spend two weeks making eye contact with the 55 million residents of the densely populated Northeastern states, looking into their eyes and, if necessary, offering them an encouraging head nod. Obama will then continue down the East Coast before taking on the tours biggest challenge: gazing with confidence into the eyes of a hostile Southern electorate that largely rejects his policies.',

					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Entertainment','Sub Category 2'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 7//
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/e7.jpg";
$image_array[] = "dummy/e8.jpg";
$image_array[] = "dummy/e9.jpg";
$image_array[] = "dummy/e10.jpg";
$image_array[] = "dummy/e1.jpg";
$image_array[] = "dummy/e2.jpg";
$image_array[] = "dummy/e3.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Brad Pitts Psychic Speaks',
					"post_content"	=>	'Brad Pitt may have no use for religion, but his psychic tells Life & Style he is very spiritual and often seeks divine advice.

Life & Styles press release follows:

    When super dad Brad Pitt has tough decisions to make, he turns to a surprising source--his psychic! Life & Style has learned that psychic Ron Bard has helped Brad through many important moments in his life. "Yes, Brad has come to me for a reading," Bard tells Life & Style exclusively. "I know him both personally and through my business. He is very, very spiritual."

    Brad first visited Bard while married to Jen and filming Mr. & Mrs. Smith with Angelina. While he is keeping his visions of Brads future to himself, Bard tells Life & Style, "I meet a lot of celebrities in this business, and he is truly one of the nicest people. He is gracious and generous, just such a great person."

    Brads psychic describes himself as "an adviser to some of the richest and most powerful people around the world...from powerful CEOs of American and Japanese conglomerates to Hollywood celebrities.Earlier this year, he founded a paranormal social networking site, of all things, with his friend, Frasier star Kelsey Grammer.',

					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Entertainment','Sub Category 2'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 8//
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/e8.jpg";
$image_array[] = "dummy/e9.jpg";
$image_array[] = "dummy/e10.jpg";
$image_array[] = "dummy/e1.jpg";
$image_array[] = "dummy/e2.jpg";
$image_array[] = "dummy/e3.jpg";
$image_array[] = "dummy/e4.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'january jones and the walk of shame',
					"post_content"	=>	'Mad Men star and internet favorite January Jones is about to become even favoritor because this morning at 10:30am she came crawling back home in the same dress she wore last night to the Oceana World Oceans Day Party. Does this mean she hooked up with some random guy or girl and had a night of deviant sex? Yes, yes it does. It&acute;s undeniable proof. Throw an Ocean Day party and watch the panties start droppin, apparently. It sure as hell got January all worked up. I&acute;m gonna go to her house dressed as Poseidon, see if I can get anal. ',

					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Entertainment','Featured'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 1///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/m1.jpg";
$image_array[] = "dummy/m2.jpg";
$image_array[] = "dummy/m3.jpg";
$image_array[] = "dummy/m4.jpg";
$image_array[] = "dummy/m5.jpg";
$image_array[] = "dummy/m6.jpg";
$image_array[] = "dummy/m7.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Lady Madonna? Gaga Channels Madge in Video',
					"post_content"	=>	'Is Lady Gagas Alejandro Video a Rip-Off or Homage to Madonna? 
Gagas most-recent single, Alejandro,premiered, fans and music writers have been divided over whether Gaga was trying to flatter the Material Girl or rip-off her best-known videos.Madge has yet to weigh in on the debate. Her rep did not respond to ABCNews.com request for comment. But if her remarks at last Sundays MTV Movie Awards in which she called Gaga beautiful are any indication, then Madonna is most likely flattered.The nearly nine-minute video in which Gaga pays homage to Madonnas Like a Prayer and Vogue videos, has been drawing controversy for other reasons, too. Gaga swallows rosary beads while dressed as a nun in red latex, and simulates having sex while in the presence of a crucifix.',

					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Music','Sub Category 2'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 2///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/m2.jpg";
$image_array[] = "dummy/m3.jpg";
$image_array[] = "dummy/m4.jpg";
$image_array[] = "dummy/m5.jpg";
$image_array[] = "dummy/m6.jpg";
$image_array[] = "dummy/m7.jpg";
$image_array[] = "dummy/m8.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'On the Horns of Abundance: Jazz Festivals Resound',
					"post_content"	=>	'N extraordinary amount of jazz hits New York over the next two weeks: four festivals, about 150 sets, and much of it extracurricular to the usual riches at the clubs. It&acute;s a time of marathons and breadth and goes in heavy for the new: not just youth, but also new aesthetic combinations, new attitudes toward repertory, new influences and paradigms, new clubs and theaters. Unlike some past jazz festival seasons, with more brand-polishing and sentimental favorites, this one - in the aggregate - can really show you where both the music and the culture of jazz in New York have gotten to. The news releases plonked into e-mailboxes throughout the spring. First to announce a schedule was the old-school jazz promoter George Wein. After the exit of JVC as his regular sponsor, he returns this year with the first annual CareFusion Jazz Festival, named after the medical technology company that is writing its checks. It&acute;s a mixture: typical JVC-esque big-hall bookings (Herbie Hancock, Keith Jarrett, Joao Gilberto); carefully chosen smaller shows with some of the best younger bandleaders, including Ambrose Akinmusire and Darcy James Argue; and a few gigs for early and swing-era jazz fans.Next, the 15th Vision Festival, an event planned and run community-style, with minimum sponsorship and maximum input from musicians, by Patricia Parker; it&acute;s built around the lineage of free improvisation and jazz&acute;s nonmainstream. This year&acute;s festival is half again as big as last year&acute;s. It contains an evening devoted to the Chicago pianist Muhal Richard Abrams and his circle and gigs by the local scene&acute;s veterans, including the saxophonists Charles Gayle and David S. Ware, as well as the improvising singer Fay Victor, the scholarly and freewheeling Chicago-based quintet People, Places & Things and the rock band Akron/Family. The shows spread through the Lower East Side: clubs, cultural centers, even the playground of the Campos Plaza housing development on East 13th Street. Then came news of the first Undead Jazzfest, two nights of hear-a-thons in clubs on a stretch of Bleecker and Sullivan Streets, this Saturday and Sunday. It occupies, roughly, the middle path between Vision Festival and CareFusion: heavy on neither free improvisation nor the mainstream-jazz continuum.

Its the sound of the adventurous present, including the drummer and composer John Hollenbeck, the saxophonist Steve Coleman, and Fight the Big Bull, a roustabout little big band from Richmond, Va. It&acute;s produced by Brice Rosenbloom and Adam Schatz, who are doing much to expand, diversify and generally excite the New York jazz audience through their annual Winter Jazzfest. ',

					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Music','Featured'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 3///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/m3.jpg";
$image_array[] = "dummy/m4.jpg";
$image_array[] = "dummy/m5.jpg";
$image_array[] = "dummy/m6.jpg";
$image_array[] = "dummy/m7.jpg";
$image_array[] = "dummy/m8.jpg";
$image_array[] = "dummy/m9.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Tapping the Roots of American Music',
					"post_content"	=>	'The closing concert of the enterprising Riverside Symphony&acute;s 29th season, on Wednesday evening at Alice Tully Hall, was a thematic program that pulled together 20th-century works with roots in American vernacular music. It was, in a way, the perfect program for our eclectic, genre-hopping time, not only because it illustrated the porousness between formal and popular styles, but it also showed that this supposedly trendy approach is really nothing new. The two works on the first half of the program, after all, were composed in the 1920s.

Copland&acute;s &quot;Music for the Theater&quot; (1925) was not composed for theatrical use at all, but for the concert hall; the Boston Symphony, under Serge Koussevitzky, gave the piece its premiere. But the work is steeped in the pop conventions of its time. The fast movements, especially, draw on jazz moves, and are meant to swing - as they did in this performance, led by George Rothman; the slow movements, with their prominent trumpet and English horn solos, evoke crooning vocalists and slow dances. You even hear a hint of Gershwin&acute;s &quot;Rhapsody in Blue,&quot; a predecessor (by a year) in the world of symphonic jazz crossovers.

Weill&acute;s &quot;Threepenny Opera&quot; (1928) has tendrils that reach toward American jazz too. But its allusions are more oblique - a matter of rhythm and spirit rather than harmony or melody - and its more dominant accent is that of the German cabaret. In a tight, vigorous performance of a suite from that work, the orchestra&acute;s woodwinds, brasses and percussion (with guitar, banjo and piano) thoroughly captured the music&acute;s essence and conveyed a palpable sense of its dark atmosphere and pervasive restlessness.  ',

					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Music'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 4///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/m9.jpg";
$image_array[] = "dummy/m10.jpg";
$image_array[] = "dummy/m1.jpg";
$image_array[] = "dummy/m2.jpg";
$image_array[] = "dummy/m3.jpg";
$image_array[] = "dummy/m4.jpg";
$image_array[] = "dummy/m5.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Songs That Rock the Boat, With Heart and Soul, Too',
					"post_content"	=>	'On the face of it, Frank Loesser, one of Broadway&acute;s all-time great wielders of urban slang, and Karen Oberlin, a demure pop-jazz singer who radiates a subdued glamour, are not a natural fit. Had he lived in a later time, Loesser, who died in 1969, might have turned a Martin Scorsese movie like &quot;Raging Bull&quot; into a hard-boiled pop opera. Nothing about Ms. Oberlin, whose tribute to Loesser, &quot;Heart and Soul: A Centenary Celebration of Frank Loesser,&quot; is playing at the Oak Room of the Algonquin Hotel, could be described as hard-boiled. She is no smoldering Vikki LaMotta. Nor could I imagine her in &quot;Guys and Dolls,&quot; playing Miss Adelaide, whose comic signature song, &quot;Adelaide&acute;s Lament,&quot; is conspicuously missing from this show. (Sarah Brown, yes.)

But there are other aspects to Loesser besides the wisecracking pre-Beat poet of &quot;Guys and Dolls.&quot; And in &quot;Heart and Soul&quot; Ms. Oberlin concentrates on Loesser&acute;s softer-edged zaniness and on his unjustly neglected romantic side. Several of Loesser&acute;s great ballads - notably, &quot;I&acute;ve  Never Been in Love Before,&quot; &quot;I Wish I Didn&acute;t Love You So&quot; and &quot;Spring Will Be a Little Late This Year&quot; - were given careful, contemplative readings in Wednesday&acute;s show.

Beyond having a pretty voice, poise and interpretive insight, Ms. Oberlin is a thorough researcher who placed many of the songs in a historical or personal context. The frisky &quot;Bloop, Bleep!&quot; and the galloping boogie-woogie &quot;Rumble, Rumble, Rumble,&quot; she explained, described Loesser&acute;s nocturnal frustration at the sounds of dripping faucets and an upstairs piano player.

Her interpretation of &quot;Love Isnt Born (Its Made),&quot; a song with music by Arthur Schwartz that Ann Sheridan introduced in the 1943 movie &quot;Thank Your Lucky Stars,&quot; emphasized its message as a hard-headed advice song to women to be more sexually aggressive. &quot;Here is a fact to face:/A man wont take a taxi just to get no place,&quot; it declares.

Ms. Oberlin brought enough sass to &quot;Hamlet,&quot; Loesser&acute;s riotously funny translation of Shakespeare into gangsterese (&quot;He bumped off his uncle/and he Mickey Finned his mother&quot;) to make the song register.

Throughout the smart, polished show, she maintained a comfortable rapport with her musicians, the fleet, airy jazz pianist Jon Weber, who took a couple of impressive solos, and the bassist Sean Smith.

Karen Oberlin continues through June 19 at the Oak Room of the Algonquin Hotel, 59 West 44th Street, Manhattan; (212) 419-9331.',

					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Music'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 5///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/m5.jpg";
$image_array[] = "dummy/m6.jpg";
$image_array[] = "dummy/m7.jpg";
$image_array[] = "dummy/m8.jpg";
$image_array[] = "dummy/m9.jpg";
$image_array[] = "dummy/m10.jpg";
$image_array[] = "dummy/m1.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Jazz, Featuring Chopin and Bach dolor site amet dolor',
					"post_content"	=>	'You might not think of Le Poisson Rouge as the ideal place for an organ recital: for one thing, it lacks an organ. But an organist can bring a portable one, and that is what Cameron Carpenter did on Tuesday evening, though not without some backstage drama.Mr. Carpenters original plan was to use his own practice organ and celebrate the release of his new compact disc and DVD, &quot;Cameron Live!&quot; (Telarc), by performing works of Bach, Shostakovich, Liszt, Chopin  and Moszkowski. But a few days before the performance he decided that his instrument was not flexible enough for recital use.

His solution was odd. He rented a Hammond B3: an organ favored by jazz musicians (and some 1960s rock bands) but not ideal, in timbre and range, for classical works. So out went the classics, for the most part. Instead Mr. Carpenter brought along a drummer, Marion Felder, a recent Juilliard graduate who performs with the Count Basie Orchestra, and played a freewheeling, virtuosic jazz set.

That the concert now had little to do with the recording it was meant to promote seemed not to matter to anyone, least of all Mr. Carpenter, who spent the hour before the performance milling through the crowd, stopping at every table in the club to introduce himself (&quot;Hi, I am Cameron,&quot; he said, holding out a hand) and chat. This was his party, and he was determined to enjoy every minute it. You almost had the feeling that he would have brought you a beer on request. At curtain time he threw a jacket studded with small mirrors over his black T-shirt and took to the keys.

It was clear in Mr. Carpenters opening selection, a rhythmically supple account of Coltranes &quot;Moments Notice,&quot; that he had a feeling for this music. That should not be surprising: organists, unlike most classical instrumentalists, are schooled in improvisation, and Mr. Carpenter has an extroverted performing style well suited to the business of finding the possibilities in a chord progression or a melody.

Most of his set was devoted to Gershwin songs, starting with &quot;Love Is Here to Stay,&quot; in which he augmented the Hammond sound with the varied timbres of a Yamaha synthesizer, and &quot;I Got Rhythm,&quot; which he played as a widely ranging set of variations (including one for pedals only). &quot;Do It Again,&quot; &quot;The Man I Love,&quot; &quot;Fascinatin&acute; Rhythm&quot; and &quot;Nice Work if You Can Get It,&quot; and Henry Mancini&acute;s &quot;Whistling Away the Dark,&quot; were also dissected and reassembled with unpredictable metrical and coloristic twists.

Mr. Carpenter&acute;s single straightforward classical performance, late in the set, helped to explain his decision to play jazz. His reading of Bach chorale prelude &quot;Nun Komm, der Heiden Heiland&quot; had the right impulses, but the organs tone did not suit the piece. In any case, Mr. Carpenter had a more interesting approach to the classics up his sleeve. In a pair of Bach &quot;Well-Tempered Clavier&quot; preludes and fugues, and in Chopins C sharp minor Etude , he moved back and forth between straightforward readings and, with Mr. Felders support, vital, spirited, inventively reharmonized elaborations.

Was this a crossover concert? Maybe. But Mr. Carpenters jazz performances do not require special pleading. Move over, Renee Fleming.',

					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Music','Featured'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 6///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/m6.jpg";
$image_array[] = "dummy/m7.jpg";
$image_array[] = "dummy/m8.jpg";
$image_array[] = "dummy/m9.jpg";
$image_array[] = "dummy/m10.jpg";
$image_array[] = "dummy/m1.jpg";
$image_array[] = "dummy/m2.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'A Debut, an Anniversary and a Springboard',
					"post_content"	=>	'An exuberant cacophony greeted audience members entering Riverside Church before a concert by the St. Louis Symphony Youth Orchestra on Tuesday evening, as ensemble members sat onstage energetically rehearsing. Significant collective and individual preparation had clearly gone into their terrific concert, the orchestra&acute;s New York debut appearance, celebrating the 40th anniversary of its founding by Leonard Slatkin, the former music director and now conductor laureate of the St. Louis Symphony Orchestra. 

music director of the youth ensemble (comprising musicians ages 12 to 22) and resident conductor of the St. Louis Symphony, has trained his charges exceptionally well. The string, woodwind, brass and percussion sections also received coaching from members of the New York Philharmonic before the concert, which was a benefit for the Riverside Food Pantry.

Mr. Stare inspired the musicians to impressive heights here, opening with a polished and suitably spirited rendition of Brahms&acute;s &quot;Academic Festival Overture.&quot; Brahms described the work - written to thank the University of Breslau, then part of the German Empire, for giving him an honorary doctorate - as &quot;a very boisterous potpourri of student songs.&quot;

The brass section, often the weakest link in a professional orchestra, shone in the first movement of Mendelssohn&acute;s &quot;Reformation&quot; Symphony and throughout the evening. Mr. Stare also coaxed elegant phrasing and nuanced dynamic contrasts from the string players in the symphony, composed in 1830 for celebrations of the 300th anniversary of the Augsburg Confession, a cornerstone of the Lutheran faith. (For various reasons that work was not presented during the festivities.) The woodwind players also performed well, with all sections meshing into a vigorous and expressive whole.

After intermission came Vaughan Williams &quot;Fantasia on a Theme by Thomas Tallis,&quot; with elegantly rendered solos by Jecoliah Wang, the concertmaster, and Emma Kinsley, a violist. The second half also included a technically proficient and lively rendition of the Overture to Bernstein&acute;s &quot;Candide&quot; and concluded with a vivacious interpretation of Rimsky-Korsakov&acute;s colorful &quot;Russian Easter Festival.&quot; ',

					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Music'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 7///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/m7.jpg";
$image_array[] = "dummy/m8.jpg";
$image_array[] = "dummy/m9.jpg";
$image_array[] = "dummy/m10.jpg";
$image_array[] = "dummy/m1.jpg";
$image_array[] = "dummy/m2.jpg";
$image_array[] = "dummy/m3.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'The Sounds and Songs of Stanley Cup Rivals',
					"post_content"	=>	'Here at the Wachovia Center, &quot;God Bless America&quot; is performed live by Lauren Hart or with her accompanying a videotape by Kate Smith, who died in 1986.

&quot;It&acute;s just so much fun for me,&quot; Hart, wearing her lucky outfit - a black leather jacket, a Flyers T-shirt from 1974, their first Stanley Cup year, and other items - said before Game 6 on Wednesday. &quot;Although when we were in Chicago the other day, someone said, &acute;You should go down to the ice and elbow the guy.&acute; &quot;

&quot;The guy&quot; is Jim Cornelison, who sings &quot;The Star-Spangled Banner&quot; before Blackhawks games at the United Center. Blackhawks fans are known for their nonstop cheering during the anthem - not that anyone can hear it. Readings on a monitor placed in a penalty box by the N.H.L. during the Cup finals measured 122 decibels - a level that can cause damage to hearing at three to four minutes of sustained exposure.

The sound levels for &quot;God Bless America&quot; at the Wachovia Center do not quite reach that plateau - 114 decibels was the N.H.L.&acute;s highest measurement for Games 3 and 4 - but the performance has been inspiring for the Flyers.

The Flyers went into Game 6 with a record of 88-22-4 in games at which Smith sang, either live or on a recording, including 9-1 this postseason.

Smith&acute;s performance of the 1918 Irving Berlin song has been a Flyers talisman since the team played it for the first time in December 1969, the second season of its existence. Smith herself showed up to sing it live at the Flyers&acute; 1973 home opener.

She also sang it live before the 1974 game against the Boston Bruins in which the Flyers won their first Stanley Cup, and again before Game 7 of the 1975 semifinals, after the Islanders had rallied from a three-games-to-none deficit. The Islanders&acute; captain, Eddie Westfall, tried to trump Smith&acute;s mojo by presenting her with a bouquet, but it didn&acute;t work.

The Flyers won their second Cup after &quot;God Bless America&quot; was played later that postseason, at the last home game of the finals series against the Buffalo Sabres. That performance gave them a 44-3-1 record with Smith singing. They have not fallen off too much in the intervening Cup-less years. They were 44-19-3 going into Wednesday.

Hart, 41, is the daughter of Gene Hart, the play-by-play announcer on Flyers radio broadcasts from their inception in 1967 until 1995. Gene Hart, who died in 1999, called both Cup victories.

Lauren Hart is a professional singer and the Flyers&acute; full-time anthem singer since 1998. She has been voted the N.H.L.&acute;s best anthem performer.

Hart said that having grown up with the Flyers and watching Smith&acute;s performances, it was not difficult to synch with the videotape, even the first time she tried.

&quot;It was very comfortable,&quot; Hart said. &quot;We did it a half-hour before the doors opened. For me, before they even told me what to sing, it was just instinctive which part would be mine, how we would come together. I just felt it - I rehearsed it once, and that was it.&quot;

Hart pointed out her lucky psychedelic paisley socks, which stay hidden beneath her pantsuit. &quot;These are my lucky socks that no one ever sees,&quot; she said. &quot;I have all my little necklaces and bracelets. Nothing changes, everything stays on the same hand.

&quot;This is a great tradition unique to hockey, the anthems in both cities, and also to honor Kate Smith this way. We take great pride in that, and I&acute;m so lucky that it turned out to be me. Because when I was a kid, I watched many games thinking, I wish I could do that.&quot;',

					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Music'),
					"post_tags"		=>	array('')
					);
////post end///
////post start 8///
$image_array = array();
$post_meta = array();
$image_array[] = "dummy/m8.jpg";
$image_array[] = "dummy/m9.jpg";
$image_array[] = "dummy/m10.jpg";
$image_array[] = "dummy/m1.jpg";
$image_array[] = "dummy/m2.jpg";
$image_array[] = "dummy/m3.jpg";
$image_array[] = "dummy/m4.jpg";
$post_meta = array(
				   "video"	=> '',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Where Bands Jam, but Traffic Flows',
					"post_content"	=>	'MANCHESTER, Tenn. - In a warehouse next to his home, David Pennington, the mayor of Coffee County, stores enough pop-culture memorabilia to make a lesser collector gasp. There are entire walls of Gene Autry items, faded Coca-Cola signs hanging from the ceilings and rare baseball cards in a glass display case. Stashed throughout are reams of posters, tickets and magazine clippings for the Bonnaroo Music & Arts Festival, which begins its ninth season on Thursday and is the pride of this bucolic small city in central Tennessee. 
Especially dear to his heart is an unused ticket to Woodstock in 1969. Mr. Pennington, 60, keeps it to commemorate the trip he canceled to take care of his young family. But it also represents Bonnaroo&acute;s dual ambitions: to be a cultural touchstone known around the world, yet - unlike Woodstock - to be efficiently run, with smoothly flowing Interstate traffic. The festival found fame at the start, but after a traffic-clogged first couple of years, many people here say the goal of efficiency has largely been achieved.

&quot;They&acute;ve got it down to a science,&quot; said Mr. Pennington, who also owns a restaurant offering a rather more congestive Bonnaroo Burger, topped with an egg and two slices of bacon. &quot;They&acute;ve got a traffic person that knows just what they&acute;re doing. They get those people in, and everybody around here just operates as usual. You don&acute;t even know they&acute;re out there. You&acute;ll see.&quot;

This year Bonnaroo will feature more than 100 acts through Sunday, among them the Dave Matthews Band, Stevie Wonder, Jay-Z, Norah Jones and Kings of Leon. Past Bonnaroos have attracted up to 90,000 fans; although it has not yet sold out this year, more than 75,000 people are expected, according to Ashley Capps, one of the promoters. Tickets for the full weekend are $250. From Friday to Sunday both YouTube and the NPR Music Web site will be streaming performances.

Such big numbers usually lead to traffic nightmares, which is just what happened in Bonnaroo&acute;s first year, 2002. Festival organizers warned officials about a tide of tens of thousands of cars. But since a previous festival, Itchycoo Park, had been a flop, and Bonnaroo&acute;s marketing and ticket sales had all been online, with no traditional advertising, no one in town took its claims seriously. &quot;Bonnaroo gave us fair warning, and we just laughed at them,&quot; Mr. Pennington said.

Since then the festival has worked out an extensive traffic plan with the state and local police, involving a temporary exit and dedicated festival lanes on Interstate 24, as well as a helicopter to guide the parking staff on the ground. &quot;We got it down,&quot; said Steve Graves, the sheriff of Coffee County, which includes Manchester and has a population of about 52,000.

A 2005 study by two professors at the Middle Tennessee State University found that Bonnaroo contributed about $18 million to the local economy, and Mr. Pennington estimates that since then it has grown to more than $20 million. Signs welcoming Bonnaroo fans hang in stores throughout Manchester, and tie-dyed Bonnaroo T-shirts can be spotted underneath waitresses&acute; aprons and Wal-Mart clerks&acute; uniforms.

Three years ago Bonnaroo&acute;s promoters bought most of the land on the site, a former farm, and they plan to stage more events there during the 361 non-Bonnaroo days of the year. Mr. Pennington said he hopes they will serve as an anchor to attract more music-related businesses to the area.

&quot;I see the music industry as something we can tap into here in Manchester,&quot; he said. &quot;The recording artists, the recording studios, the songwriters. Not as big as Nashville, obviously, but that&acute;s the new industry that we want here. And with Bonnaroo here, that makes a difference.&quot;

Mr. Capps, the promoter, said that Bonnaroo&acute;s biggest challenge is maintaining a strong identity in the face of competition from other festivals around the country, like Lollapalooza in Chicago and Coachella in Southern California. They, as well as many other smaller but still significant events, are all bidding for the same acts and trying to attract out-of-town fans.

&quot;It&acute;s something that we&acute;re conscious of every year,&quot; Mr. Capps said. &quot;How do we maintain the thread and be true to the core of what the Bonnaroo experience is without repeating ourselves year after year after year?&quot;

Bonnaroo&acute;s core might have as much to do with its audience as the music. The festival grew out of the post-hippie jam-band scene, which has traditionally been an open-minded, loyal and not terribly fickle audience: an ideal constituency for an annual festival that relies on repeat customers. Over the years Bonnaroo has served as a kind of training ground for bands to return again and again, to ever bigger crowds. Kings of Leon, for example, has played there three times before.

By Tuesday evening the pilgrims had begun to arrive in Manchester, with drum circles forming in the Wal-Mart parking lot and teams of dreadlocked, flip-flop-wearing fans taking turns going in the store to stock up on beer, comfort food and rubber boots. (The weather forecast called for plenty of rain.)

Steve Willis, a 59-year-old mail carrier from Manchester, shopping at the Wal-Mart, praised the festival and local authorities for keeping the traffic flowing as well as can be done. The roads, although slow at the beginning and end of the festival, are navigable. &quot;It&acute;s kind of hard to get around some times,&quot; he said. &quot;It&acute;s a little bit of a hindrance, but it&acute;s not a big deal.&quot;

His wife, Donna, 54, looked out over the Wal-Mart parking lot as the sun went down.

&quot;I think it&acute;s wonderful,&quot; she said.

This article has been revised to reflect the following correction:

Correction: June 11, 2010

Because of an editing error, the byline for an article on Thursday about the Bonnaroo Music & Arts Festival was omitted. The article was by Ben Sisario. ',

					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Music','Featured'),
					"post_tags"		=>	array('')
					);
////post end///
//====================================================================================//
////post start 1///
$image_array = array();
$post_meta = array();
$post_meta = array(
				   "video"	=> '<object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/WK3eH8kZQVQ&hl=en_GB&fs=1&"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/WK3eH8kZQVQ&hl=en_GB&fs=1&" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'BP debt rating is cut as gulf oil leak costs mount',
					"post_content"	=>	'Moodys Investors Service and Fitch Ratings reduce their credit ratings for the oil giant, which estimates the cleanup and containment could cost it $3 billion.Some oil industry analysts say BP might have to sell assets to pay for efforts to stop the Gulf of Mexico oil leak, including the drilling of a relief well, above, and clean up the mess. Others say the company has enough cash to foot the bill. BP is becoming the new pariah of the oil industry and faces the possibility of having to sell assets if it cant show some success in the coming weeks at stemming the flow of crude into the Gulf of Mexico, Wall Street analysts and energy experts say.

The fallout from the deadly Deepwater Horizon drilling rig explosion in April continued Thursday, when credit rating firms Moodys Investors Service and Fitch Ratings reduced their assessments of BPs long-term debt.Fitch cut the oil giant to AA from AA-plus, citing the potential for civil and criminal charges and saying &quot;risks to both BPs business and financial profile continue to increase.Fitch estimated that the company could spend as much as $3 billion on cleanup and containment this year. The federal government Thursday sent BP its first bill covering oil-spill response costs so far, totaling $69 million.

Moodys lowered BP to AA2 from AA1 and put it on review, which might lead to another downgrade. Moodys said costs related to the protracted oil leak will &quot;weigh significantly&quot; on BPs cash and &quot;constrain its ability to focus on other key areas of the company business. ',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Videos'),
					"post_tags"		=>	array('Tags','Sample Tags')
					);
////post end///
////post start 2 ///
$image_array = array();
$post_meta = array();
$post_meta = array(
				   "video"	=> '<object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/zUM-mR_VbBA&hl=en_GB&fs=1&"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/zUM-mR_VbBA&hl=en_GB&fs=1&" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Chasing musical legends in Joshua Tree National Park',
					"post_content"	=>	'The wide opens spaces, accommodating inns and restaurants, and the echoes of Gram Parsons draw them to the desert each year. But during this visit, a lively 3-year-old is in the mix.

Reporting from Twentynine Palms - Typically, we go to the desert at least once a year. We love the expansive space, several of the inns and restaurants and, of course, the otherworldly foliage of Joshua Tree National Park. We also enjoy the musical legacy of Gram Parsons, the former Byrd who overdosed in Joshua Tree in 1973, at age 26, after virtually inventing the alt-country movement that would blossom two decades later. We feel these echoes and others - the twangy music, the lands natural contours, the local cuisine - when were there.
But this year, my wife, Sara - a former music journalist - and I had one complication: our eager but mischievous son. Ian is no more difficult than the typical 3-year-old boy, but he loves life so unambiguously that he can be hard to corral. Traveling with a toddler is a whole different ballgame: We figured some things would be better, some things worse, but we did know quite how it would all work out.',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Videos','Featured'),
					"post_tags"		=>	array('New','Popular')
					);
////post end///
////post start 3 ///
$image_array = array();
$post_meta = array();
$post_meta = array(
				   "video"	=> '<object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/tBb4cjjj1gI&hl=en_GB&fs=1&"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/tBb4cjjj1gI&hl=en_GB&fs=1&" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Auto-Tune the News',
					"post_content"	=>	' The raft drew beyond the middle of the river; the boys pointed her head right, and then lay on their oars.

	<blockquote> The river was not high, so there was not more than a two or three mile current. Hardly a word was
said during the next three-quarters of an hour. Now the raft was passing before the distant town. Two or three glimmering lights showed where it lay, peacefully sleeping, beyond the vague vast sweep of star-gemmed water, unconscious of the tremendous event that was happening. </blockquote>
	<ul>
     <li>The Black Avenger stood still with folded arms, &quot;looking his last&quot; upon </li>
    <li>the scene of his former joys and his later sufferings, and wishing</li>
     <li>&quot;she&quot; could see him now, abroad on the wild sea, facing peril and death with dauntless heart, going to his doom with a grim smile on his lips. It was but a small strain on his imagination to remove Jackson Island</li>
     <li>beyond eyeshot of the village, and so he "looked his last" with a</li>
     <li> broken and satisfied heart. The other pirates were looking their last </li>
     <li> too; and they all looked so long that they came near letting the</li>
	 </ul>

current drift them out of the range of the island. But they discovered the danger in time, and made shift to avert it. About two oclock in the morning the raft grounded on the bar two hundred yards above the head of the island, and they waded back and forth until they had landed their freight.

Part of the little raft belongings consisted of an old sail, and this they spread over a nook in the bushes for a tent to shelter their provisions; but they themselves would sleep in the open air in good weather, as became outlaws.

<ol>
   <li> They built a fire against the side of a great log twenty or thirty</li>
   <li> steps within the sombre depths of the forest, and then cooked some</li>
   <li> bacon in the frying-pan for supper, and used up half of the corn &quot;pone&quot;</li>
   <li>  stock they had brought. It seemed glorious sport to be feasting in that</li>
   <li> wild, free way in the virgin forest of an unexplored and uninhabited</li>
   <li> island, far from the haunts of men, and they said they never would</li>
   <li> return to civilization. The climbing fire lit up their faces and threw</li>
   <li> its ruddy glare upon the pillared tree-trunks of their forest temple,</li>
   <li> and upon the varnished foliage and festooning vines.</li>
 </ol>

When the last crisp slice of bacon was gone, and the last allowance of corn pone devoured, the boys stretched themselves out on the grass, filled with contentment. They could have found a cooler place, but they would not deny themselves such a romantic Featured as the roasting camp-fire.',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Videos'),
					"post_tags"		=>	array('Sample Tag')
					);
////post end///
////post start 4 ///
$image_array = array();
$post_meta = array();
$post_meta = array(
				   "video"	=> '<object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/i_f3SkxTWxc&hl=en_GB&fs=1&"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/i_f3SkxTWxc&hl=en_GB&fs=1&" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	' Top 10 quirky science tricks for parties',
					"post_content"	=>	'Presently she stepped into the kitchen, and Sid, happy in his immunity, reached for the sugar-bowl–a sort of glorying over Tom which
was wellnigh unbearable. But Sid fingers slipped and the bowl dropped and broke. Tom was in ecstasies. In such ecstasies that he even controlled his tongue and was silent. He said to himself that he would not speak a word, even when his aunt came in, but would sit perfectly
still till she asked who did the mischief; and then he would tell, and there would be nothing so good in the world as to see that pet model &quot;catch it.&quot; He was so brimful of exultation that he could hardly hold himself when the old lady came back and stood above the wreck discharging lightnings of wrath from over her spectacles. He said to himself Now it coming  And the next instant he was sprawling on the floor! The potent palm was uplifted to strike again when Tom cried out',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Videos'),
					"post_tags"		=>	array('Tag 1')
					);
////post end///
////post start 5 ///
$image_array = array();
$post_meta = array();
$post_meta = array(
				   "video"	=> '<object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/X4zd4Qpsbs8&hl=en_GB&fs=1&"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/X4zd4Qpsbs8&hl=en_GB&fs=1&" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'The river was not high',
					"post_content"	=>	'
					The river was not high, so there was not more than a two or three mile current. Hardly a word was
said during the next three-quarters of an hour. Now the raft was passing before the distant town. Two or three glimmering lights showed where it lay, peacefully sleeping, beyond the vague vast sweep of star-gemmed water, unconscious of the tremendous event that was happening. 

					<blockquote> The river was not high, so there was not more than a two or three mile current. Hardly a word was
said during the next three-quarters of an hour. Now the raft was passing before the distant town. Two or three glimmering lights showed where it lay, peacefully sleeping, beyond the vague vast sweep of star-gemmed water, unconscious of the tremendous event that was happening. </blockquote>
	<ul>
     <li>The Black Avenger stood still with folded arms, &quot;looking his last&quot; upon </li>
    <li>the scene of his former joys and his later sufferings, and wishing</li>
     <li>&quot;she&quot; could see him now, abroad on the wild sea, facing peril and death with dauntless heart, going to his doom with a grim smile on his lips. It was but a small strain on his imagination to remove Jackson Island</li>
     <li>beyond eyeshot of the village, and so he "looked his last" with a</li>
     <li> broken and satisfied heart. The other pirates were looking their last </li>
     <li> too; and they all looked so long that they came near letting the</li>
	 </ul>

current drift them out of the range of the island. But they discovered the danger in time, and made shift to avert it. About two oclock in the morning the raft grounded on the bar two hundred yards above the head of the island, and they waded back and forth until they had landed their freight.
',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Videos','Featured'),
					"post_tags"		=>	array('Beauty')
					);
////post end///
////post start 6 ///
$image_array = array();
$post_meta = array();
$post_meta = array(
				   "video"	=> '<object height="319" width="480" type="application/x-shockwave-flash" data="http://c.brightcove.com/services/viewer/federated_f9?&amp;width=480&amp;height=319&amp;flashID=bc_player&amp;bgcolor=%23FFFFFF&amp;publisherID=1749339200&amp;isVid=true&amp;wmode=transparent&amp;playerID=53548472001&amp;%40videoPlayer=ref%3A1247468020452&amp;autoStart=" id="bc_player" class="BrightcoveExperience"><param name="allowScriptAccess" value="always"><param name="allowFullScreen" value="true"><param name="seamlessTabbing" value="false"><param name="swliveconnect" value="true"><param name="wmode" value="transparent"><param name="quality" value="high"><param name="bgcolor" value="#FFFFFF"></object>',
					"tl_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'New Video Shows Haiti Earthquake',
					"post_content"	=>	'
					The river was not high, so there was not more than a two or three mile current. Hardly a word was
said during the next three-quarters of an hour. Now the raft was passing before the distant town. Two or three glimmering lights showed where it lay, peacefully sleeping, beyond the vague vast sweep of star-gemmed water, unconscious of the tremendous event that was happening. 

					<blockquote> The river was not high, so there was not more than a two or three mile current. Hardly a word was
said during the next three-quarters of an hour. Now the raft was passing before the distant town. Two or three glimmering lights showed where it lay, peacefully sleeping, beyond the vague vast sweep of star-gemmed water, unconscious of the tremendous event that was happening. </blockquote>
	<ul>
     <li>The Black Avenger stood still with folded arms, &quot;looking his last&quot; upon </li>
    <li>the scene of his former joys and his later sufferings, and wishing</li>
     <li>&quot;she&quot; could see him now, abroad on the wild sea, facing peril and death with dauntless heart, going to his doom with a grim smile on his lips. It was but a small strain on his imagination to remove Jackson Island</li>
     <li>beyond eyeshot of the village, and so he &quot;looked his last&quot; with a</li>
     <li> broken and satisfied heart. The other pirates were looking their last </li>
     <li> too; and they all looked so long that they came near letting the</li>
	 </ul>

current drift them out of the range of the island. But they discovered the danger in time, and made shift to avert it. About two oclock in the morning the raft grounded on the bar two hundred yards above the head of the island, and they waded back and forth until they had landed their freight.
',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('Videos'),
					"post_tags"		=>	array('Beauty')
					);
////post end///
insert_posts($post_info);
function insert_posts($post_info)
{
	global $wpdb,$current_user;
	for($i=0;$i<count($post_info);$i++)
	{
		$post_title = $post_info[$i]['post_title'];
		$post_count = $wpdb->get_var("SELECT count(ID) FROM $wpdb->posts where post_title like \"$post_title\" and post_type='post' and post_status in ('publish','draft')");
		if(!$post_count)
		{
			$post_info_arr = array();
			$catids_arr = array();
			$my_post = array();
			$post_info_arr = $post_info[$i];
			if($post_info_arr['post_category'])
			{
				for($c=0;$c<count($post_info_arr['post_category']);$c++)
				{
					$catids_arr[] = get_cat_ID($post_info_arr['post_category'][$c]);
				}
			}else
			{
				$catids_arr[] = 1;
			}
			$my_post['post_title'] = $post_info_arr['post_title'];
			$my_post['post_content'] = $post_info_arr['post_content'];
			if($post_info_arr['post_author'])
			{
				$my_post['post_author'] = $post_info_arr['post_author'];
			}else
			{
				$my_post['post_author'] = 1;
			}
			$my_post['post_status'] = 'publish';
			$my_post['post_category'] = $catids_arr;
			$my_post['tags_input'] = $post_info_arr['post_tags'];
			$last_postid = wp_insert_post( $my_post );
			$post_meta = $post_info_arr['post_meta'];
			if($post_meta)
			{
				foreach($post_meta as $mkey=>$mval)
				{
					update_post_meta($last_postid, $mkey, $mval);
				}
			}
			
			$post_image = $post_info_arr['post_image'];
			if($post_image)
			{
				for($m=0;$m<count($post_image);$m++)
				{
					$menu_order = $m+1;
					$image_name_arr = explode('/',$post_image[$m]);
					$img_name = $image_name_arr[count($image_name_arr)-1];
					$img_name_arr = explode('.',$img_name);
					$post_img = array();
					$post_img['post_title'] = $img_name_arr[0];
					$post_img['post_status'] = 'attachment';
					$post_img['post_parent'] = $last_postid;
					$post_img['post_type'] = 'attachment';
					$post_img['post_mime_type'] = 'image/jpeg';
					$post_img['menu_order'] = $menu_order;
					$last_postimage_id = wp_insert_post( $post_img );
					update_post_meta($last_postimage_id, '_wp_attached_file', $post_image[$m]);					
					$post_attach_arr = array(
										"width"	=>	580,
										"height" =>	480,
										"hwstring_small"=> "height='150' width='150'",
										"file"	=> $post_image[$m],
										//"sizes"=> $sizes_info_array,
										);
					wp_update_attachment_metadata( $last_postimage_id, $post_attach_arr );
				}
			}
		}
	}
}
//====================================================================================//
/////////////////////////////////////////////////

$pages_array = array(array('About','Sub Page 1','Sub Page 2'),'Advertise','FAQs','Terms','Press','Privacy Policy',array('Archive Pages','Sub Page in 1','Sub Page in 2','Site Map'));
$page_info_arr = array();
$page_info_arr['About'] = '
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero.</p>
<p>Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero.</p>
';
$page_info_arr['Sub Page 1'] = '
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero.</p>
<p>Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero.</p>
<p>Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero.</p>
';
$page_info_arr['Sub Page 2'] = '
<pLorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero. </p>

<P>Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero. </p>

<p>Justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero.</p>

<p>Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero. </p>
';
$page_info_arr['Advertise'] = '
<pLorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero. </p>

<P>Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero. </p>

<p>Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero. </p>
';
$page_info_arr['FAQs'] = '
<pLorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero. </p>

<P>Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero. </p>

<p>Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero. </p>
';
$page_info_arr['Terms'] = '
<blockquote>The raft drew beyond the middle of the river; the boys pointed her head right, and then lay on their oars.</blockquote>

The river was not high, so there was not more <a href="http://skeevisarts.com">than a two or three mile current</a>. Hardly a word was
said<strong> during the next three-quarters of</strong> an hour. Now the raft was passing before the distant town. Two or three glimmering lights showed where it lay, peacefully sleeping, beyond the <em>vague vast sweep</em> of star-gemmed water, unconscious of the <span style="text-decoration: underline;">tremendous</span> event that was happening.
<ul>
	<li>The <strong>Black Avenger</strong> stood still with folded arms, &quot;looking his last&quot; upon</li>
	<li>the scene of his former joys and his later sufferings, and wishing</li>
	<li>&quot;she&quot; <em>could see him now</em>, abroad on the wild sea, facing peril and death with dauntless heart, going to his doom with a grim smile on his lips. It was but a small strain on his imagination to remove Jacksons Island</li>
	<li>beyond eyeshot of the village, and so he &quot;looked his last&quot; with a</li>
	<li>broken and satisfied heart. <span style="text-decoration: underline;">The other pirates</span> were looking their last,</li>
	<li>too; and they all <a href="#">looked</a> so long that they came near letting the</li>
</ul> 

current drift them out of the range of the island. But they discovered the danger in time, and made shift to avert it. About two oclock in the morning the raft grounded on the bar two hundred yards above the head of the island, and they waded back and forth until they had landed their freight.
<p style="text-align: center;">Part of the little rafts belongings consisted of an old sail, and this they spread over a nook in the bushes for a tent to shelter their provisions; but they themselves would sleep in the open air in good weather, as became outlaws.
<ol>
	<li>They built a fire against the side of a great log twenty or thirty</li>
	<li>steps within the sombre depths of the forest, and then cooked some</li>
	<li>bacon in the frying-pan for supper, and used up half of the corn &quot;pone&quot;</li>
	<li>stock they had brought. It seemed glorious sport to be feasting in that</li>
	<li>wild, free way in the virgin forest of an unexplored and uninhabited</li>
	<li>island, far from the haunts of men, and they said they never would</li>
	<li>return to civilization. The climbing fire lit up their faces and threw</li>
	<li>its ruddy glare upon the pillared tree-trunks of their forest temple,</li>
	<li>and upon the varnished foliage and festooning vines.</li>
</ol>
When the last crisp slice of bacon was gone, and the last allowance of corn pone devoured, the boys stretched themselves out on the grass, filled with contentment. They could have found a cooler place, but they would not deny themselves such a romantic feature as the roasting camp-fire.
';
$page_info_arr['Archive Pages'] = '
<blockquote>The raft drew beyond the middle of the river; the boys pointed her head right, and then lay on their oars.</blockquote>

<ul>
	<li>The <strong>Black Avenger</strong> stood still with folded arms, &quot;looking his last&quot; upon</li>
	<li>the scene of his former joys and his later sufferings, and wishing</li>
	<li>&quot;she&quot; <em>could see him now</em>, abroad on the wild sea, facing peril and death with dauntless heart, going to his doom with a grim smile on his lips. It was but a small strain on his imagination to remove Jackson&acute;s Island</li>
	<li>beyond eyeshot of the village, and so he &quot;looked his last&quot; with a</li>
	<li>broken and satisfied heart. <span style="text-decoration: underline;">The other pirates</span> were looking their last,</li>
	<li>too; and they all <a href="#">looked</a> so long that they came near letting the</li>
</ul> 

<ol>
	<li>They built a fire against the side of a great log twenty or thirty</li>
	<li>steps within the sombre depths of the forest, and then cooked some</li>
	<li>bacon in the frying-pan for supper, and used up half of the corn &quot;pone&quot;</li>
	<li>stock they had brought. It seemed glorious sport to be feasting in that</li>
	<li>wild, free way in the virgin forest of an unexplored and uninhabited</li>
	<li>island, far from the haunts of men, and they said they never would</li>
	<li>return to civilization. The climbing fire lit up their faces and threw</li>
	<li>its ruddy glare upon the pillared tree-trunks of their forest temple,</li>
	<li>and upon the varnished foliage and festooning vines.</li>
</ol>
';
$page_info_arr['Sub Page in 1'] = '
<blockquote>The raft drew beyond the middle of the river; the boys pointed her head right, and then lay on their oars.</blockquote>

current drift them out of the range of the island. But they discovered the danger in time, and made shift to avert it. About two o&acute;clock in the morning the raft grounded on the bar two hundred yards above the head of the island, and they waded back and forth until they had landed their freight.
<p style="text-align: center;">Part of the little raft&acute;s belongings consisted of an old sail, and this they spread over a nook in the bushes for a tent to shelter their provisions; but they themselves would sleep in the open air in good weather, as became outlaws.
<ol>
	<li>They built a fire against the side of a great log twenty or thirty</li>
	<li>steps within the sombre depths of the forest, and then cooked some</li>
	<li>bacon in the frying-pan for supper, and used up half of the corn &quot;pone&quot;</li>
	<li>stock they had brought. It seemed glorious sport to be feasting in that</li>
	<li>wild, free way in the virgin forest of an unexplored and uninhabited</li>
	<li>island, far from the haunts of men, and they said they never would</li>
	<li>return to civilization. The climbing fire lit up their faces and threw</li>
	<li>its ruddy glare upon the pillared tree-trunks of their forest temple,</li>
	<li>and upon the varnished foliage and festooning vines.</li>
</ol>
When the last crisp slice of bacon was gone, and the last allowance of corn pone devoured, the boys stretched themselves out on the grass, filled with contentment. They could have found a cooler place, but they would not deny themselves such a romantic feature as the roasting camp-fire.
';
$page_info_arr['Sub Page in 2'] = '
<blockquote>The raft drew beyond the middle of the river; the boys pointed her head right, and then lay on their oars.</blockquote>

The river was not high, so there was not more <a href="http://skeevisarts.com">than a two or three mile current</a>. Hardly a word was
said<strong> during the next three-quarters of</strong> an hour. Now the raft was passing before the distant town. Two or three glimmering lights showed where it lay, peacefully sleeping, beyond the <em>vague vast sweep</em> of star-gemmed water, unconscious of the <span style="text-decoration: underline;">tremendous</span> event that was happening.
<ol>
	<li>They built a fire against the side of a great log twenty or thirty</li>
	<li>steps within the sombre depths of the forest, and then cooked some</li>
	<li>bacon in the frying-pan for supper, and used up half of the corn &quot;pone&quot;</li>
	<li>stock they had brought. It seemed glorious sport to be feasting in that</li>
	<li>wild, free way in the virgin forest of an unexplored and uninhabited</li>
	<li>island, far from the haunts of men, and they said they never would</li>
	<li>return to civilization. The climbing fire lit up their faces and threw</li>
	<li>its ruddy glare upon the pillared tree-trunks of their forest temple,</li>
	<li>and upon the varnished foliage and festooning vines.</li>
</ol>
When the last crisp slice of bacon was gone, and the last allowance of corn pone devoured, the boys stretched themselves out on the grass, filled with contentment. They could have found a cooler place, but they would not deny themselves such a romantic feature as the roasting camp-fire.
';
$page_info_arr['Press'] =  '
<blockquote>The raft drew beyond the middle of the river; the boys pointed her head right, and then lay on their oars.</blockquote>

The river was not high, so there was not more <a href="http://skeevisarts.com">than a two or three mile current</a>. Hardly a word was
said<strong> during the next three-quarters of</strong> an hour. Now the raft was passing before the distant town. Two or three glimmering lights showed where it lay, peacefully sleeping, beyond the <em>vague vast sweep</em> of star-gemmed water, unconscious of the <span style="text-decoration: underline;">tremendous</span> event that was happening.
<ul>
	<li>The <strong>Black Avenger</strong> stood still with folded arms, &quot;looking his last&quot; upon</li>
	<li>the scene of his former joys and his later sufferings, and wishing</li>
	<li>&quot;she&quot; <em>could see him now</em>, abroad on the wild sea, facing peril and death with dauntless heart, going to his doom with a grim smile on his lips. It was but a small strain on his imagination to remove Jackson&acute;s Island</li>
	<li>beyond eyeshot of the village, and so he "looked his last" with a</li>
	<li>broken and satisfied heart. <span style="text-decoration: underline;">The other pirates</span> were looking their last,</li>
	<li>too; and they all <a href="#">looked</a> so long that they came near letting the</li>
</ul> 
When the last crisp slice of bacon was gone, and the last allowance of corn pone devoured, the boys stretched themselves out on the grass, filled with contentment. They could have found a cooler place, but they would not deny themselves such a romantic feature as the roasting camp-fire.
';
$page_info_arr['Site Map'] =  '
<blockquote>The raft drew beyond the middle of the river; the boys pointed her head right, and then lay on their oars.</blockquote>

The river was not high, so there was not more <a href="http://skeevisarts.com">than a two or three mile current</a>. Hardly a word was
said<strong> during the next three-quarters of</strong> an hour. Now the raft was passing before the distant town. Two or three glimmering lights showed where it lay, peacefully sleeping, beyond the <em>vague vast sweep</em> of star-gemmed water, unconscious of the <span style="text-decoration: underline;">tremendous</span> event that was happening.
<ul>
	<li>The <strong>Black Avenger</strong> stood still with folded arms, &quot;looking his last&quot; upon</li>
	<li>the scene of his former joys and his later sufferings, and wishing</li>
	<li>&quot;she&quot; <em>could see him now</em>, abroad on the wild sea, facing peril and death with dauntless heart, going to his doom with a grim smile on his lips. It was but a small strain on his imagination to remove Jackson&acute;s Island</li>
	<li>beyond eyeshot of the village, and so he "looked his last" with a</li>
	<li>broken and satisfied heart. <span style="text-decoration: underline;">The other pirates</span> were looking their last,</li>
	<li>too; and they all <a href="#">looked</a> so long that they came near letting the</li>
</ul> 
When the last crisp slice of bacon was gone, and the last allowance of corn pone devoured, the boys stretched themselves out on the grass, filled with contentment. They could have found a cooler place, but they would not deny themselves such a romantic feature as the roasting camp-fire.
';
$page_info_arr['Privacy Policy'] =  '
<blockquote>The raft drew beyond the middle of the river; the boys pointed her head right, and then lay on their oars.</blockquote>

The river was not high, so there was not more <a href="http://skeevisarts.com">than a two or three mile current</a>. Hardly a word was
said<strong> during the next three-quarters of</strong> an hour. Now the raft was passing before the distant town. Two or three glimmering lights showed where it lay, peacefully sleeping, beyond the <em>vague vast sweep</em> of star-gemmed water, unconscious of the <span style="text-decoration: underline;">tremendous</span> event that was happening.
<ul>
	<li>The <strong>Black Avenger</strong> stood still with folded arms, &quot;looking his last&quot; upon</li>
	<li>the scene of his former joys and his later sufferings, and wishing</li>
	<li>&quot;she&quot; <em>could see him now</em>, abroad on the wild sea, facing peril and death with dauntless heart, going to his doom with a grim smile on his lips. It was but a small strain on his imagination to remove Jackson&acute;s Island</li>
	<li>beyond eyeshot of the village, and so he "looked his last" with a</li>
	<li>broken and satisfied heart. <span style="text-decoration: underline;">The other pirates</span> were looking their last,</li>
	<li>too; and they all <a href="#">looked</a> so long that they came near letting the</li>
</ul> 
When the last crisp slice of bacon was gone, and the last allowance of corn pone devoured, the boys stretched themselves out on the grass, filled with contentment. They could have found a cooler place, but they would not deny themselves such a romantic feature as the roasting camp-fire.
';


set_page_info_autorun($pages_array,$page_info_arr);
function set_page_info_autorun($pages_array,$page_info_arr_arg)
{
	global $post_author,$wpdb;
	$last_tt_id = 1;
	if(count($pages_array)>0)
	{
		$page_info_arr = array();
		for($p=0;$p<count($pages_array);$p++)
		{
			if(is_array($pages_array[$p]))
			{
				for($i=0;$i<count($pages_array[$p]);$i++)
				{
					$page_info_arr1 = array();
					$page_info_arr1['post_title'] = $pages_array[$p][$i];
					$page_info_arr1['post_content'] = $page_info_arr_arg[$pages_array[$p][$i]];
					$page_info_arr1['post_parent'] = $pages_array[$p][0];
					$page_info_arr[] = $page_info_arr1;
				}
			}
			else
			{
				$page_info_arr1 = array();
				$page_info_arr1['post_title'] = $pages_array[$p];
				$page_info_arr1['post_content'] = $page_info_arr_arg[$pages_array[$p]];
				$page_info_arr1['post_parent'] = '';
				$page_info_arr[] = $page_info_arr1;
			}
		}

		if($page_info_arr)
		{
			for($j=0;$j<count($page_info_arr);$j++)
			{
				$post_title = $page_info_arr[$j]['post_title'];
				$post_content = addslashes($page_info_arr[$j]['post_content']);
				$post_parent = $page_info_arr[$j]['post_parent'];
				if($post_parent!='')
				{
					$post_parent_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title like \"$post_parent\" and post_type='page'");
				}else
				{
					$post_parent_id = 0;
				}
				$post_date = date('Y-m-d H:s:i');
				$post_name = strtolower(str_replace(array("'",'"',"?",".","!","@","#","$","%","^","&","*","(",")","-","+","+"," "),array('-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-'),$post_title));
				$post_name_count = $wpdb->get_var("SELECT count(ID) FROM $wpdb->posts where post_title like \"$post_title\" and post_type='page'");
				if($post_name_count>0)
				{
					echo '';
				}else
				{
					$post_sql = "insert into $wpdb->posts (post_author,post_date,post_date_gmt,post_title,post_content,post_name,post_parent,post_type) values (\"$post_author\", \"$post_date\", \"$post_date\",  \"$post_title\", \"$post_content\", \"$post_name\",\"$post_parent_id\",'page')";
					$wpdb->query($post_sql);
					$last_post_id = $wpdb->get_var("SELECT max(ID) FROM $wpdb->posts");
					$guid = get_option('siteurl')."/?p=$last_post_id";
					$guid_sql = "update $wpdb->posts set guid=\"$guid\" where ID=\"$last_post_id\"";
					$wpdb->query($guid_sql);
					$ter_relation_sql = "insert into $wpdb->term_relationships (object_id,term_taxonomy_id) values (\"$last_post_id\",\"$last_tt_id\")";
					$wpdb->query($ter_relation_sql);
					update_post_meta( $last_post_id, 'pt_dummy_content', 1 );
				}
			}
		}
	}
}


//=====================================================================
$photo_page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title like 'Archive Pages' and post_type='page'");
update_post_meta( $photo_page_id, '_wp_page_template', 'page-archives.php' );

$photo_page_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title like 'Site Map' and post_type='page'");
update_post_meta( $photo_page_id, '_wp_page_template', 'page-sitemap.php' );
global $upload_folder_path;
$folderpath = $upload_folder_path."dummy/";
full_copy( TEMPLATEPATH."/images/dummy/", ABSPATH . $folderpath );
function full_copy( $source, $target ) 
{
	global $upload_folder_path;
	$imagepatharr = explode('/',$upload_folder_path."dummy");
	for($i=0;$i<count($imagepatharr);$i++)
	{
	  if($imagepatharr[$i])
	  {
		  $year_path = ABSPATH.$imagepatharr[$i]."/";
		  if (!file_exists($year_path)){
			  mkdir($year_path, 0777);
		  }     
		}
	}
	if ( is_dir( $source ) ) {
		mkdir( $target );
		$d = dir( $source );
		while ( FALSE !== ( $entry = $d->read() ) ) {
			if ( $entry == '.' || $entry == '..' ) {
				continue;
			}
			$Entry = $source . '/' . $entry; 
			if ( is_dir( $Entry ) ) {
				full_copy( $Entry, $target . '/' . $entry );
				continue;
			}
			copy( $Entry, $target . '/' . $entry );
		}
	
		$d->close();
	}else {
		copy( $source, $target );
	}
}
//=====================================================================
/////////////// Design Settings START ///////////////
update_option("ptthemes_alt_stylesheet",'1-default.css');
update_option("ptthemes_feedburner_url",'http://feeds2.feedburner.com/templatic');
update_option("ptthemes_feedburner_id",'templatic/eKPs');
update_option("ptthemes_twitter_id",'http://twitter.com/templatic');
update_option("ptthemes_facebook_id",'http://facebook.com/templatic');
update_option("ptthemes_breadcrumbs",'true');
$cat_ids = $wpdb->get_var("SELECT group_concat(term_id) FROM $wpdb->terms where name in ('Articles','Sub Category 1','Sub Category 2','Entertainment','Featured','Music','Sports','Videos')");
update_option("ptthemes_categories_id",$cat_ids);
$page_ids = $wpdb->get_var("SELECT group_concat(ID) FROM $wpdb->posts where post_title in ('Privacy Policy','Terms','Site Map') and post_type='page'");
$page_ids_arr = explode(',',$page_ids);
for($i=0;$i<count($page_ids_arr);$i++)
{
	update_option("pag_exclude_".$page_ids_arr[$i],true);
}
update_option("ptthemes_home_name",'Home');
update_option("ptthemes_search_name",'Search');
update_option("ptthemes_search_nothing_found",'Nothing found, please search again.');
update_option("ptthemes_general_tags_name",'Tags');
update_option("ptthemes_pages_name",'Pages');
update_option("ptthemes_last_posts",'Last 60 Blog Posts');
update_option("ptthemes_monthly_archives",'Monthly Archives');
update_option("ptthemes_categories_name",'Categories');
update_option("ptthemes_rssfeeds_name",'Available RSS Feeds');
update_option("ptthemes_404error_name",'Error 404 | Nothing found!');
update_option("ptthemes_404solution_name",'Sorry, but you are looking for something that is not here.');
update_option("ptthemes_password_protected_name",'This post is password protected. Enter the password to view comments.');
update_option("ptthemes_comment_responsesa_name",'No Comments');
update_option("ptthemes_comment_responsesb_name",'One Comment');
update_option("ptthemes_comment_responsesc_name",'% Comments');
update_option("ptthemes_comment_trackbacks_name",'Trackbacks For This Post');
update_option("ptthemes_comment_moderation_name",'Your comment is awaiting moderation.');
update_option("ptthemes_comment_conversation_name",'Be the first to start a conversation');
update_option("ptthemes_comment_closed_name",'Comments are closed.');
update_option("ptthemes_comment_off_name",'Comments are off for this post');
update_option("ptthemes_comment_reply_name",'Leave a Reply');
update_option("ptthemes_comment_mustbe_name",'You must be');
update_option("ptthemes_comment_loggedin_name",'logged in');
update_option("ptthemes_comment_postcomment_name",'to post a comment.');
update_option("ptthemes_comment_name_name",'Name');
update_option("ptthemes_comment_mail_name",'Mail');
update_option("ptthemes_comment_website_name",'Website');
update_option("ptthemes_comment_addcomment_name",'Add Comment');
update_option("ptthemes_comment_justreply_name",'Reply');
update_option("ptthemes_comment_edit_name",'Edit');
update_option("ptthemes_comment_delete_name",'Delete');
update_option("ptthemes_comment_spam_name",'Spam');
update_option("ptthemes_pagination_first_name",'First');
update_option("ptthemes_pagination_last_name",'Last');
/////////////// Design Settings END ///////////////
//====================================================================================//

///////////////////////////////////////////////////////////////////////////////////
//====================================================================================//
/////////////// WIDGET SETTINGS START ///////////////
$sidebars_widgets = get_option('sidebars_widgets');  //collect widget informations

$spotlight = array();
$cat_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms where name like 'Featured'");
$spotlight[1] = array(
					"title"			=>	'Featured News',
					"category"		=>	$cat_id,
					"post_number"	=>	'5',
					"post_link"		=>	'',
					);
$spotlight['_multiwidget'] = '1';
update_option('widget_widget_posts1',$spotlight);
$spotlight = get_option('widget_widget_posts1');
krsort($spotlight);
foreach($spotlight as $key1=>$val1)
{
	$spotlight_key = $key1;
	if(is_int($spotlight_key))
	{
		break;
	}
}
$sidebars_widgets["sidebar-1"] = array("widget_posts1-$spotlight_key");

//===============================================================================
$spotlight = array();
$cat_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms where name like 'Music'");
$spotlight[1] = array(
					"title"			=>	'Music',
					"category"		=>	$cat_id,
					"post_number"	=>	'3',
					"post_link"		=>	'',
					);
$spotlight['_multiwidget'] = '1';
update_option('widget_news2columns',$spotlight);
$spotlight = get_option('widget_news2columns');
krsort($spotlight);
foreach($spotlight as $key1=>$val1)
{
	$spotlight_key = $key1;
	if(is_int($spotlight_key))
	{
		break;
	}
}
$sidebars_widgets["sidebar-2"] = array("news2columns-$spotlight_key");
//===============================================================================
$spotlight = array();
$cat_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms where name like 'Articles'");
$spotlight = get_option('widget_news2columns');
$spotlight[] = array(
					"title"			=>	'Articles',
					"category"		=>	$cat_id,
					"post_number"	=>	'3',
					"post_link"		=>	'',
					);
$spotlight['_multiwidget'] = '1';
update_option('widget_news2columns',$spotlight);
$spotlight = get_option('widget_news2columns');
krsort($spotlight);
foreach($spotlight as $key1=>$val1)
{
	$spotlight_key = $key1;
	if(is_int($spotlight_key))
	{
		break;
	}
}
$sidebars_widgets["sidebar-3"] = array("news2columns-$spotlight_key");
//===============================================================================
$spotlight = array();
$cat_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms where name like 'Sports'");
$spotlight = get_option('widget_news1columns');
$spotlight[1] = array(
					"title"			=>	'Sports',
					"category"		=>	$cat_id,
					"post_number"	=>	'5',
					"post_link"		=>	'',
					);
$spotlight['_multiwidget'] = '1';
update_option('widget_news1columns',$spotlight);
$spotlight = get_option('widget_news1columns');
krsort($spotlight);
foreach($spotlight as $key1=>$val1)
{
	$spotlight_key = $key1;
	if(is_int($spotlight_key))
	{
		break;
	}
}

$spotlight1 = array();
$cat_id = $wpdb->get_var("SELECT term_id FROM $wpdb->terms where name like 'Entertainment'");
$spotlight1 = get_option('widget_news1columns');
$spotlight1[] = array(
					"title"			=>	'Entertainment',
					"category"		=>	$cat_id,
					"post_number"	=>	'5',
					"post_link"		=>	'',
					);
$spotlight1['_multiwidget'] = '1';
update_option('widget_news1columns',$spotlight1);
$spotlight1 = get_option('widget_news1columns');
krsort($spotlight1);
foreach($spotlight1 as $key1=>$val1)
{
	$spotlight1_key1 = $key1;
	if(is_int($spotlight1_key1))
	{
		break;
	}
}
$sidebars_widgets["sidebar-4"] = array("news1columns-$spotlight_key","news1columns-$spotlight1_key1");
//===============================================================================
$popular = array();
$popular = array(
					"name"			=>	'Popular Post',
					"number"		=>	'5',
					);
update_option('widget_popularposts',$popular);

$socialmedia = array();
$socialmedia[1] = array(
					"title"			=>	'',
					"desc1"			=>	'',
					);
$socialmedia['_multiwidget'] = '1';
update_option('widget_widget_socialmedia',$socialmedia);
$socialmedia = get_option('widget_widget_socialmedia');
krsort($socialmedia);
foreach($socialmedia as $key1=>$val1)
{
	$socialmedia_key = $key1;
	if(is_int($socialmedia_key))
	{
		break;
	}
}

$sidebaradvtwidget = array();
$sidebaradvtwidget[1] = array(
					"title"			=>	'',
					"advt1"			=>	$dummy_image_path.'advt1.png',
					"link1"			=>	'#',
					"advt2"			=>	$dummy_image_path.'advt2.png',
					"link2"			=>	'#',
					"advt3"			=>	$dummy_image_path.'advt2.png',
					"link3"			=>	'#',
					"advt4"			=>	$dummy_image_path.'advt1.png',
					"link4"			=>	'#',
					);
$sidebaradvtwidget['_multiwidget'] = '1';
update_option('widget_widget_sidebaradvtwidget',$sidebaradvtwidget);
$sidebaradvtwidget = get_option('widget_widget_sidebaradvtwidget');
krsort($sidebaradvtwidget);
foreach($sidebaradvtwidget as $key1=>$val1)
{
	$sidebaradvtwidget_key = $key1;
	if(is_int($sidebaradvtwidget_key))
	{
		break;
	}
}

$sidebars_widgets["sidebar-5"] = array("widget_socialmedia-$socialmedia_key","pt-popular-posts","widget_sidebaradvtwidget-$sidebaradvtwidget_key");
//===============================================================================
$archives = array();
$archives[1] = array(
					"title"			=>	'Archive',
					"count"			=>	'0',
					"dropdown"		=>	'0',
					);
$archives['_multiwidget'] = '1';
update_option('widget_archives',$archives);
$archives = get_option('widget_archives');
krsort($archives);
foreach($archives as $key1=>$val1)
{
	$archives_key = $key1;
	if(is_int($archives_key))
	{
		break;
	}
}
$comments = array();
$comments[1] = array(
					"title"			=>	'Recent Comments',
					"number"		=>	'9',
					);
$comments['_multiwidget'] = '1';
update_option('widget_recent-comments',$comments);
$comments = get_option('widget_recent-comments');
krsort($comments);
foreach($comments as $key1=>$val1)
{
	$comments_key = $key1;
	if(is_int($comments_key))
	{
		break;
	}
}

$sidebars_widgets["sidebar-6"] = array("archives-$archives_key","recent-comments-$comments_key");
//===============================================================================
$categories = array();
$categories[1] = array(
					"title"			=>	'Categories',
					"count"			=>	'0',
					"hierarchical"	=>	'0',
					"dropdown"		=>	'0',
					);
$categories['_multiwidget'] = '1';
update_option('widget_categories',$categories);
$categories = get_option('widget_categories');
krsort($categories);
foreach($categories as $key1=>$val1)
{
	$categories_key = $key1;
	if(is_int($categories_key))
	{
		break;
	}
}
$text = array();
$text[1] = array(
					"title"			=>	'Sponsored Links',
					"desc1"			=>	'<a href="#" ><img src="'.$dummy_image_path.'google_ads.png" alt="" /> </a>',
					);
$text['_multiwidget'] = '1';
update_option('widget_widget_text',$text);
$text = get_option('widget_widget_text');
krsort($text);
foreach($text as $key1=>$val1)
{
	$text_key = $key1;
	if(is_int($text_key))
	{
		break;
	}
}

$sidebars_widgets["sidebar-7"] = array("categories-$categories_key","widget_text-$text_key");
//===============================================================================
$advtwidget = array();
$advtwidget[1] = array(
					"title"			=>	'',
					"category"		=>	'',
					"post_number"	=>	'',
					"desc1"		=>	'<a href="#" ><img src="'.$dummy_image_path.'advt3.png" alt="" /> </a>',
					);
$advtwidget['_multiwidget'] = '1';
update_option('widget_advtwidget',$advtwidget);
$advtwidget = get_option('widget_advtwidget');
krsort($advtwidget);
foreach($advtwidget as $key1=>$val1)
{
	$advtwidget_key = $key1;
	if(is_int($advtwidget_key))
	{
		break;
	}
}

$sidebars_widgets["sidebar-8"] = array("advtwidget-$advtwidget_key");
//===============================================================================

//////////////////////////////////////////////////////
update_option('sidebars_widgets',$sidebars_widgets);  //save widget iformations
/////////////// WIDGET SETTINGS END ///////////////

?>