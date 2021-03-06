<?
// Enter your personal details here to build your online resume.

// Let's start with some basic info.  You must include your full name, but if you don't want to include your phone number or email address you can just delete those lines entirely.
$personal['first_name']= 'Alejandro';
$personal['last_name'] = 'Acosta-Rubio';
$personal['phone_number'] = '305-798-3616';
$personal['email_address'] = 'aacostarubio@gmail.com';

// Now let's add any social media pages you've created and want to share.  You can add whatever you want by following the format below.  The first item you add is the name of the social media site, and the second item you add is the URL to your page.
$social_media[] = array('Facebook', 'http://facebook.com/aacostarubio');
$social_media[] = array('Twitter', 'http://twitter.com/aacostarubio');
$social_media[] = array('Github', 'http://github.com/aacostarubio');
$social_media[] = array('Tumblr', 'http://alittlesomething.me');

// Cool.  With that stuff out of the way, let's input your work history.  This part requires a bit more information but it's similar to adding a social media page like you did above but with more information.  The first item you enter is last year you worked at the job (or the range of time, if you prefer).  The second item is your job title, the third is the company you worked for, and the fourth is a description of the work you did there.  The description can get a little long, but that's okay.  Just be sure not to use any single quotes ('') or things will break!  You can add as many jobs as you like and the script will adapt.
$work_history[] = array('2012',
						'Student',
						'Starter League',
						'Web Development (Ruby, Rails, jQuery), HTML/CSS, UX Design');
$work_history[] = array('2012',
						'Chief Back-End Development',
						'Surfeit.me',
						'Ruby, Rails, UX',
						'www.surfeit.me');
$work_history[] = array('2013',
						'Software Apprentice',
						'8th Light, inc',
						'Ruby, Java, Javascript, Rails, Clojure',
						'www.8thlight.com');

// Phew!  That was the hard part.  Now we need to enter in some other important information about you.  Let's start with your education.  You only need to enter two things: your school and a description of your degree.  If you went to Brown University you'd enter that for your school, then put your year and graduation date as the description (e.g. "BA in Social Sciences, Class of 2002").
$education[] = array('University of Miami', 'Current Undergraduate in Biomedical Engineering');

// Presumably you learned something in school and developed a few skills over the course of your lifetime.  Let's add them here.  
$skills[] = array('Software', 'Programming learning junkie in Ruby, Rails, HTML5/CSS3, Java, Clojure. TDD advocate.');
$skills[] = array('Languages', 'Spanish (native), English (fluent)');
$skills[] = array('Racquetball', 'I prove my skills in the court. You can challenge me at any time.');

// Finally, let's list any awards or honors you've received so you can show off your accomplishments.  To add an award, just use the format below.  (I'm sure you have the hang of this by now, but we're going to go over it anyway.)  The first item you enter is the name of the award/honor (e.g. "Advertising Gold Award" or "Published in the New Yorker") and the second item is the description of the award/honor (e.g. "2010 TV Ads Under $50,000" or "Short story about the trials of Orthodox Jews in Arkansas, May 2016").
$awards[] = array('2nd Place', '14 & Under Category 2005 Junior Racquetball World Championship');
$awards[] = array('Top 16', '16 & Under Category 2006 Junior Racquetball World Cahmpionships');
$awards[] = array('3rd Place', '16 & Under 2009 Junior Racquetball World Championship');

// Want to turn off any of the sections on your resume?  You can do that in the settings.  Just change any section from true to false and it'll disappear.  (Note: You can't turn off your work history--that's sort of important!)
$settings['social_media'] = true;
$settings['education'] = true;
$settings['skills'] = true;
$settings['awards'] = true;

// There are also a few other settings you can toggle on and off, such as offering a printable version of your resume and whether to use a dark or light style (set style to "dark" or "light" to choose).
$settings['printable'] = true;
$settings['style'] = "dark";
$settings['lang'] = "en";
?>

