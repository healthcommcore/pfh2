<?
// FUNCTION: EMAIL MSG
function emailMSG($weekNum,$stageID,$quitDate,$numPosts) {


// Day before Quit Date email message
if (((intval(date("z",$quitDate))-intval(date("z",time())))==1) || ((intval(date("z",$quitDate))==0) && (intval(date("z",time()))==365))) {
//[for everyone]
    $lastMSG="We know you can do it, and PFH is here for you. Good luck!";
    return "Tomorrow is the big day! To help you get ready, here are a few reminders:<ul><li>Before you go to bed, make sure you've thrown away all your cigarettes - in your house, in your car, or in any pockets of your clothes. Toss lighters, matches, and ashtrays. Get rid of all temptation!</li><li>Go over your plans for tomorrow and the days ahead. How will you make sure you don't light up? Who can you call for support during the next few days? Is there someone you can spend tomorrow with - someone who can help you get through cravings without smoking?</li></ul>".$lastMSG;

// [for people using NRT] 
// Remember, start using the patch tomorrow. You cannot smoke while you are using the patch. It's not safe for you to have the nicotine from cigarettes and the nicotine from the patch in your body at the same time.
}

// The Day After
if (((intval(date("z",time()))-intval(date("z",$quitDate)))==1) || ((intval(date("z",time()))==0) && (intval(date("z",$quitDate))==365))) {
    return "So, the big day has come and gone. I hope it was a success, but I know it can be difficult. It's different for everybody. So how did it go? Did you smoke?<br><br><b>If yes:</b><blockquote>Well, don't be too hard on yourself. You've come this far, and that's an achievement in itself. The important thing is to not be discouraged. Quitting smoking is worth as many tries as it takes!<br><br>Keep asking for help from those who support you and keep working on your plan to become smoke-free. Look at your benefits-of-quitting worksheet again and remind yourself of all the important reasons why you're doing this. Maybe you'll even think of more. Also, it might help to work through your thoughts in your PFH journal, or discuss them in the forum with other members. You have a lot of people in your corner.<br><br>You can do it. There's always next time. So start planning your next quit date!</blockquote><br><b>If no:</b><blockquote>Congratulations! The first day is the hardest, and you should be very proud of yourself for making it through successfully. But the effects are different for everyone. So if you had any withdrawal symptoms, remember they're normal and they only last a short time.<br><br>Some people have a big emotional reaction to quitting, either good or bad, and others don't. No matter what your experience is, you can always use your PFH journal to sort though your feelings. And don't forget to share your news with everybody on the forum - your success will be sure to inspire other people who are working toward the same goal.</blockquote>";
}



    // WEEK 1
    if ($weekNum==1) {
        $tagTXT="";
        return "It's time to get started with <i>Partnership for Health!</i> This is a one-of-a-kind Web site, created just for childhood cancer survivors. It has great health tips, resources, quizzes, and more. You'll also get access to the PFH forum, a unique community of other survivors of childhood cancer. Help and support with smoking issues are all just a click away, and there is even more to explore!<br><br>We have assigned you a temporary username and password for the site. The name and password are the same:<br><br><b>Name:</b> PFH1322<br><b>Password:</b> PFH1322<br><br>Your first step in using the PFH Web site will be to change your username a password to things that are more meaningful to you.<br><br>So check out <a href=\"http://www.pfhonline.org/logonFirst.php?userID=14\">Partnership for Health</a>!<br><br>".$tagTXT;
    }


    // WEEK 2
    if ($weekNum==2) {
        // no visit
//        return "Don't forget to check out <i>Partnership for Health</i>! It's your chance to get important health information created just for survivors of childhood cancer or a similar illness. There's a whole community of other survivors like you who are already taking steps toward a healthier future on the site, and you can be a part of it! Information about things you can do to stay healthy, and help and support with smoking issues are all a click away. Visit <a href=\"http://www.pfhonline.org\">Partnership for Health</a> - you'll be glad you did!";

        // non-smoking, contemplation
        if ($stageID<3) {
            $tagTXT="";
            if ($stageID==2) $tagTXT="<br><br><b>Things to check out this week:</b><br><br>While you're on the site, be sure to visit our interactive tool to see how much money you could save if you quit smoking!<br><a href=\"http://www.pfhonline.org/news_cost-benefits.php\">http://www.pfhonline.org/news_cost-benefits.php</a><br><br>Take our quick quiz to learn what things might be keeping you from quitting, and how to overcome them.<br><a href=\"http://www.pfhonline.org/health_manual-2f2.php\">http://www.pfhonline.org/health_manual-2f2.php</a><br><br>";
            return "<i>Partnership for Health</i> has more for you, with all-new, updated content!<br><br>Have questions for other survivors about health issues you're experiencing? Check out the forum! Want to read up on the latest news about treatments and help available for the late effects of your childhood cancer? Want to learn about fitness or how to handle stress? It's all a click away at <a href=\"http://www.pfhonline.org\">Partnership for Health</a>!".$tagTXT;
        } else {
            // set quit date, preparation
            $tagTXT="<br><br><b>Things to check out this week:</b><br><br>The Guide to Getting Ready, for PFH members who are ready to take the first steps to becoming non-smokers!<br><a href=\"http://www.pfhonline.org/health_manual-3a.php\">http://www.pfhonline.org/health_manual-3a.php</a><br><br>";
            return "<i>Partnership for Health</i> has more for you, with all-new, updated content! Check the forum to read what other survivors have to say, and post your own questions and insights. Read the articles to find out the best ways to live a healthy life.<br><br>Also, now that you're ready to try to quit smoking, we have all the information about the ways that your health, your wallet, and your family and friends will benefit from this decision! Setting a Quit Date is a key step, and we'll be with you every step of the way as it gets nearer. <a href=\"http://www.pfhonline.org\">Let's get started</a>!".$tagTXT;
        }
    }


    // WEEK 3
    if ($weekNum==3) {
        $pluralPosts="";
        if ($numPosts>1) $pluralPosts="s";
        if ($stageID<3) {
            if ($numPosts>0) {
                $tagTXT="<br><br><b>Things to check out this week:</b><br><br>Visit the PFH forum to see what people had to say to your post".$pluralPosts.".<br><a href=\"http://www.pfhonline.org/forum/viewforum.php?f=1\">http://www.pfhonline.org/forum/viewforum.php?f=1</a><br><br>";
                return "Thanks for posting in the <i>Partnership for Health</i> forum. It's a great way for you to connect to other PFH members, offer support, and learn who had the same kinds of experiences. People have responded to your post".$pluralPosts."!".$tagTXT;
            } else {
                $tagTXT="<br><br><b>Things to check out this week:</b><br><br>Stop in and spend some time in the forum. Check out who's written, reply to posts, or just read.<br><a href=\"http://www.pfhonline.org/forum/viewforum.php?f=1\">http://www.pfhonline.org/forum/viewforum.php?f=1</a><br><br>How do you spell success? Read these other survivors' success stories, and add your own.<br><a href=\"http://www.pfhonline.org/community_success.php\">http://www.pfhonline.org/community_success.php</a><br><br>";
                return "Don't forget, <i>Partnership for Health</i> is <b>the</b> place to connect with other childhood cancer survivors. Read what others have to say about their experiences, and share your own. Respond to people in the PFH forum, or start your own topic. There's a whole community of PFH survivors out there, and you can be a part of it. So make a visit to the <a href=\"http://www.pfhonline.org/forum/viewforum.php?f=1\">PFH forum</a> today!".$tagTXT;
            }
        }
        if ($stageID==3) {
            if ($numPosts>0) {
                $tagTXT="<br><br><b>Things to check out this week:</b><br><br>Visit the PFH forum to see what people had to say to your post".$pluralPosts.", and talk about your upcoming Quit Date.<br><a href=\"http://www.pfhonline.org/forum/viewforum.php?f=1\">http://www.pfhonline.org/forum/viewforum.php?f=1</a><br><br>";
                return "Thanks for posting in the <i>Partnership for Health</i> forum. It's a great way for you to connect to other PFH members, offer support, and learn who had the same kinds of experiences. People have responded to your post".$pluralPosts."!<br><br>Plus, your Quit Date is coming soon! Are you ready? Partnership for Health and Katie are here to help you get prepared for the big day, but don't forget about the other members of the Partnership for Health community who are readying for their Quit Dates. Share your thoughts with them in the forum!".$tagTXT;
            } else {
                $tagTXT="<br><br><b>Things to check out this week:</b><br><br>Stop in and spend some time in the forum. Check out who's written, reply to posts, talk about your upcoming Quit Date, or just read others' comments.<br><a href=\"http://www.pfhonline.org/forum/viewforum.php?f=1\">http://www.pfhonline.org/forum/viewforum.php?f=1</a><br><br>";
                return "Don't forget, <i>Partnership for Health</i> is <b>the</b> place to connect with other childhood cancer survivors. Read what others have to say about their experiences, and share your own. Respond to people in the PFH forum, or start your own topic. There's a whole community of PFH survivors out there, and you can be a part of it.<br><br>Plus, your Quit Date is coming soon! Are you ready? Partnership for Health and Katie are here to help you get prepared for the big day, but don't forget about the other members of the Partnership for Health community who are readying for their Quit Dates. Share your thoughts with them in the forum!".$tagTXT;
            }
        }
        if ($stageID==4) {
            if ($numPosts>0) {
                $tagTXT="<br><br><b>Things to check out this week:</b><br><br>Visit the PFH forum to see what people had to say to your post".$pluralPosts.", and talk about how you're doing with quitting.<br><a href=\"http://www.pfhonline.org/forum/viewforum.php?f=1\">http://www.pfhonline.org/forum/viewforum.php?f=1</a><br><br>";
                return "Thanks for posting in the <i>Partnership for Health</i> forum. It's a great way for you to connect to other PFH members, offer support, and learn who had the same kinds of experiences. People have responded to your post".$pluralPosts."!<br><br>Plus, you're on the way to becoming a non-smoker! How's it going? Partnership for Health and Katie are here to help you become smoke-free, but don't forget about the other members of the Partnership for Health community who are quitting, too. Share your thoughts with them in the forum!".$tagTXT;
            } else {
                $tagTXT="<br><br><b>Things to check out this week:</b><br><br>Stop in and spend some time in the forum. Check out who's written, reply to posts, talk about how you're doing with quitting, or just read others' comments.<br><a href=\"http://www.pfhonline.org/forum/viewforum.php?f=1\">http://www.pfhonline.org/forum/viewforum.php?f=1</a><br><br>";
                return "Don't forget, <i>Partnership for Health</i> is <b>the</b> place to connect with other childhood cancer survivors. Read what others have to say about their experiences, and share your own. Respond to people in the PFH forum, or start your own topic. There's a whole community of PFH survivors out there, and you can be a part of it.<br><br>Plus, you're on the way to becoming a non-smoker! How's it going? Partnership for Health and Katie are here to help you become smoke-free, but don't forget about the other members of the Partnership for Health community who are quitting, too. Share your thoughts with them in the forum!".$tagTXT;
            }
        }
    }


    // WEEK 4
    if ($weekNum==4) {
        // precontemplation
        if ($stageID==1) {
            return "We know you're not ready to quit smoking, but we sure hope you're ready to come back to <i>Partnership for Health</i>! We'll help you look back at other goals that you've reached in the past, and give you the boost you need to achieve any new health goals you want to set in the future. Plus, there's all the health information and support you need. So come on back to <a href=\"http://www.pfhonline.org\">Partnership for Health</a>. We're ready for you!<br><br><b>Things to check out this week:</b><br><br>Any health changes you've ever thought about trying? Use this online activity to get ideas and set some goals.<br><a href=\"http://www.pfhonline.org/health_manual-1g.php\">http://www.pfhonline.org/health_manual-1g.php</a><br><br>Everyone on the PFH site has overcome incredible challenges. If you have some you'd like to share with the Partnership for Health community, take a visit to the forum and add your story.<br><a href=\"http://www.pfhonline.org/forum/viewtopic.php?t=5\">http://www.pfhonline.org/forum/viewtopic.php?t=5</a><br><br>";
        }

        // contemplation
        if ($stageID==2) {
            return "It looks like you're thinking about quitting smoking. <i>Partnership for Health</i> has everything you need to keep you thinking about it! We can help you list good reasons to quit, suggest some small steps to practice reaching that goal, and more. Come on back to <a href=\"http://www.pfhonline.org\">Partnership for Health</a> to see it all!<br><br><b>Things to check out this week:</b><br><br>Sometimes when you start thinking about all the reasons to quit, giving up cigarettes sounds like a better and better idea. Check out our list of things you could look forward to if you were a non-smoker, and add your own.<br><a href=\"http://www.pfhonline.org/health_manual-2g.php\">http://www.pfhonline.org/health_manual-2g.php</a><br><br>Ever wonder what it would be like to be a non-smoker? Experiment with these small steps.<br><a href=\"http://www.pfhonline.org/health_manual-2i.php\">http://www.pfhonline.org/health_manual-2i.php</a><br><br>";
        }

        // preparation
        if ($stageID==3) {
//            if ($quitDate>0) {
//                $quitDateSOON=0;
//                if ((($quitDate-time())>0) && (($quitDate-time())<(86400*7))) $quitDateSOON=1;
//                if ($quitDateSOON>0) return "Your Quit Date is getting close! From that day onward, you'll feel benefits that will last the rest of your life. But we want to make sure you're ready for it, and that you have all the support you need. Come back to see us and we'll help you prepare to deal with cravings, remind yourself of all the benefits you'll experience, and more. We're waiting for you at <a href=\"http://www.pfhonline.org\">Partnership for Health</a>!";
//                if ($quitDateSOON<1) return "<i>Partnership for Health</i> has more information for you. Want to think more about your reasons for quitting smoking, and all the benefits you'll enjoy as a nonsmoker? Need help figuring out how to deal with the situations and habits that cause you to smoke? Want to make sure you can get the support you need from your family and friends? We'll tell you how. Get what you need from <a href=\"http://www.pfhonline.org\">Partnership for Health</a>.";
//            } else {
                return "<i>Partnership for Health</i> is back, with even more helpful information for you! Now that you're getting ready to quit, you may have some questions. Do you need help figuring out how you'll deal with the people and places that make you want to smoke? Want to make sure you'll know what to do if those cigarette cravings hit hard? Partnership for Health has the answers!<br><br><b>Things to check out this week:</b><br><br>The Guide to Getting Ready, for PFH members who are ready to take the first steps to becoming non-smokers!<br><a href=\"http://www.pfhonline.org/health_manual-3a.php\">http://www.pfhonline.org/health_manual-3a.php</a><br><br>If you've got concerns about quitting, don't keep them to yourself. Visit the PFH Forum, share your questions, and look for answers.<br><a href=\"http://www.pfhonline.org/forum/viewforum.php?f=1\">http://www.pfhonline.org/forum/viewforum.php?f=1</a><br><br>";
//            }
        }

        // action
        if ($stageID==4) {
//            if ($quitDate>0) {
//                $quitDateSOON=0;
//                if ((($quitDate-time())>0) && (($quitDate-time())<(86400*7))) $quitDateSOON=1;
//                if ($quitDateSOON>0) return "Your Quit Date is getting close! From that day forward, you'll feel benefits that will last the rest of your life. But we want to make sure you're ready for it, and that you have all the support you need. Come back to see us and we'll help you prepare to deal with cravings, remind yourself of all the benefits you'll experience, and more. We're waiting for you at <a href=\"http://www.pfhonline.org\">Partnership for Health</a>!";
//                if ($quitDateSOON<1) return "<i>Partnership for Health</i> has more information for you. Want to think more about your reasons for quitting smoking, and all the benefits you'll enjoy as a nonsmoker? Need help figuring out how to deal with the situations and habits that cause you to smoke? Want to make sure you can get the support you need from your family and friends as your Quit Date approaches? <a href=\"http://www.pfhonline.org\">We'll tell you how</a>!";
//            } else {
                return "<i>Partnership for Health</i> is back, with great information for you as you begin your life as a non-smoker! Congratulations on reaching this goal. You'll feel the benefits starting right now!<br><br>You may discover some challenges that lie ahead: things like how to handle people smoking around you, what to eat to avoid weight gain, and what to do if you slip up and smoke. No worries &#150; it's all here on the Partnership for Health Web site!<br><br><b>Things to check out this week:</b><br><br>Got co-workers who light up? Friends who always smoke at the bar? Take our quick quiz to learn how to deal with temptations like these.<br><a href=\"http://www.pfhonline.org/health_manual-4b2.php\">http://www.pfhonline.org/health_manual-4b2.php</a><br><br>Don't fear the snack attacks that might come with quitting. We've got good suggestions for all things chewy, chunky, crunchy, and munchy.<br><a href=\"http://www.pfhonline.org/health_manual-4d.php\">http://www.pfhonline.org/health_manual-4d.php</a><br><br>";
//            }
        }
    }



    // WEEK 5
    if ($weekNum==5) {
        // precontemplation
        if ($stageID==1) {
            if ($numPosts>0) return "Thanks for joining the <i>Partnership for Health</i> community. It looks like other PFH members are happy to have you here &#150; you've got answers to your posts! We've also got lots of great content developed just for survivors, with everything you could want for mind and body. Take a visit to the site today!<br><br><b>Things to check out this week:</b><br><br>See who's responded to your posts!<br><a href=\"http://www.pfhonline.org/forum/viewforum.php?f=1\">http://www.pfhonline.org/forum/viewforum.php?f=1</a><br><br>Take a deep breath &#133; and relax. We've got tips for even the tensest.<br><a href=\"http://www.pfhonline.org/health_tips-relaxation.php\">http://www.pfhonline.org/health_tips-relaxation.php</a><br><br>";
            if ($numPosts<1) return "We hope you're enjoying your visits to the <i>Partnership for Health</i> Web site. Be sure to check out everything we have to offer childhood cancer survivors. We've got a forum, information about nutrition and exercise, quizzes, resources, and much more!<br><br><b>Things to check out this week:</b><br><br>Take a deep breath &#133; and relax. We've got tips for even the tensest.<br><a href=\"http://www.pfhonline.org/health_tips-relaxation.php\">http://www.pfhonline.org/health_tips-relaxation.php</a><br><br>";
        }

        // contemplation
        if ($stageID==2) {
            if ($numPosts>0) return "Thanks for joining the <i>Partnership for Health</i> community. It looks like other PFH members are happy to have you here &#150; you've got answers to your posts! We've also got lots of great content developed just for survivors, with everything you could want for mind and body. Take a visit to the site today!<br><br><b>Things to check out this week:</b><br><br>See who's responded to your posts!<br><a href=\"http://www.pfhonline.org/forum/viewforum.php?f=1\">http://www.pfhonline.org/forum/viewforum.php?f=1</a><br><br>Take a deep breath &#133; and relax. We've got tips for even the tensest.<br><a href=\"http://www.pfhonline.org/health_tips-relaxation.php\">http://www.pfhonline.org/health_tips-relaxation.php</a><br><br>";
            if ($numPosts<1) return "We hope you're enjoying your visits to the <i>Partnership for Health</i> Web site. Be sure to check out everything we have to offer childhood cancer survivors. We've got a forum, information about nutrition and exercise, quizzes, resources, and much more!<br><br><b>Things to check out this week:</b><br><br>Take a deep breath &#133; and relax. We've got tips for even the tensest.<br><a href=\"http://www.pfhonline.org/health_tips-relaxation.php\">http://www.pfhonline.org/health_tips-relaxation.php</a><br><br>";
        }

        // preparation
        if ($stageID==3) {
            if ($numPosts>0) return "Thanks for joining the <i>Partnership for Health</i> community. It looks like other PFH members are happy to have you here &#150; you've got answers to your posts! We've also got lots of great content developed just for survivors, with everything you could want for mind and body. Take a visit to the site today!<br><br><b>Things to check out this week:</b><br><br>See who's responded to your posts!<br><a href=\"http://www.pfhonline.org/forum/viewforum.php?f=1\">http://www.pfhonline.org/forum/viewforum.php?f=1</a><br><br>You're getting ready to quit smoking! So take a deep breath &#133; and relax. We've got tips for even the tensest moments of your Quit Date.<br><a href=\"http://www.pfhonline.org/health_tips-relaxation.php\">http://www.pfhonline.org/health_tips-relaxation.php</a><br><br>";
            if ($numPosts<1) return "We hope you're enjoying your visits to the <i>Partnership for Health</i> Web site. Be sure to check out everything we have to offer childhood cancer survivors who are getting ready to quit! There are quizzes, tips on how to manage stress and cravings on your Quit Date, and much more.<br><br><b>Things to check out this week:</b><br><br>Take a deep breath &#133; and relax. We've got tips for even the tensest.<br><a href=\"http://www.pfhonline.org/health_tips-relaxation.php\">http://www.pfhonline.org/health_tips-relaxation.php</a><br><br>";
        }

        // action
        if ($stageID==4) {
            if ($numPosts>0) return "Thanks for joining the <i>Partnership for Health</i> community. It looks like other PFH members are happy to have you here &#150; you've got answers to your posts! We've also got lots of great content developed just for survivors, with everything you could want for mind and body. Take a visit to the site today!<br><br><b>Things to check out this week:</b><br><br>See who's responded to your posts!<br><a href=\"http://www.pfhonline.org/forum/viewforum.php?f=1\">http://www.pfhonline.org/forum/viewforum.php?f=1</a><br><br>A lot of smokers worry that they'll gain weight when they quit. But it doesn't have to be that way. Read how PFH weighs in on ways to keep those pounds off.<br><a href=\"http://www.pfhonline.org/health_manual-4c.php\">http://www.pfhonline.org/forum/viewforum.php?f=1</a><br><br>";
            if ($numPosts<1) return "We hope you're enjoying your visits to the <i>Partnership for Health</i> Web site. Be sure to check out everything we have for childhood cancer survivors who are quitting smoking! We're here and ready to offer help with taming cravings, using the power of exercise, celebrating the new you, and more.<br><br><b>Things to check out this week:</b><br><br>Visit the Guide to Action, the PFH guide created just for childhood cancer survivors who are becoming non-smokers!<br><a href=\"http://www.pfhonline.org/health_manual-4a.php\">http://www.pfhonline.org/health_manual-4a.php</a><br><br>";
        }
    }



    // QUIT DATE APPROACHING
    // Week before quit date
    if ($weekNum==201) {
        $addOn="";
        if ($numPosts>0) $addOn="<hr>How are you doing with cutting back on your cigarettes? <a href=\"http://www.pfhonline.org/health_manual-3d2.php\">Come back and track</a> how close you are to your goals.<hr><br>";
        return "Hope you're getting excited, because you're only one week away from being a non-smoker! Now is the time to make sure everything is in place.<br><br>As you get ready for your Quit Date, be sure to <a href=\"http://www.pfhonline.org/health_manual-2g.php\">read over</a> your reasons for quitting smoking. This will help keep you motivated next week! Think about risky situations that might come up and how to deal with them, and be sure to figure out how <a href=\"http://www.pfhonline.org/health_manual-3i.php\">friends and family</a> can help. Who can you call if you need support? And most importantly, what will you do if you feel the urge to smoke?<br><br><b>We know you can do it, and PFH is here for you. Good luck!</b><br><br>".$addOn."<i>If you need to pick a new Quit Date, please <a href=\"mailto:pfh@hcc-web.org\">email Katie</a> and she'll reset your Quit Date page.</i><br>";
    }

    // 2 weeks before quit date
    if ($weekNum==202) {
        $addOn="";
        if ($numPosts>0) $addOn="<hr>How are you doing with cutting back on your cigarettes? <a href=\"http://www.pfhonline.org/health_manual-3d2.php\">Come back and track</a> how close you are to your goals.<hr><br>";
        return "Two weeks to go! Only 14 days until you become a non-smoker. Now's the time to think about what you'll do at work, in restaurants, and in bars when everyone else is lighting up. Take our <a href=\"http://www.pfhonline.org/health_manual-4b2.php\">People and Places Quiz</a> now! And while you're thinking about that, spend some time figuring out the <a href=\"http://www.pfhonline.org/health_manual-2e.php\">whens, wheres, and whys</a> of your smoking, to help you get ready.<br><br>Are you starting to wonder how you're going to <a href=\"http://www.pfhonline.org/health_tips-stress.php\">manage stress</a>, keep from <a href=\"http://www.pfhonline.org/health_tips-weight.php\">putting on pounds</a>, and get <a href=\"http://www.pfhonline.org/health_tips-activity.php\">exercise</a> while you're quitting? We've got healthy tips to get you over the rough spots.<br><br><b>Are you going to be using Zyban to quit smoking?</b> If so, you should start taking Zyban between today and the next four days. It's very important for you to have enough in your system when your Quit Date arrives!<br><br>".$addOn."<i>If you need to pick a new Quit Date, please <a href=\"mailto:pfh@hcc-web.org\">email Katie</a> and she'll reset your Quit Date page.</i><br>";
    }

    // 3 weeks before quit date
    if ($weekNum==203) {
        $addOn="";
        if ($numPosts>0) $addOn="<hr>How are you doing with cutting back on your cigarettes? <a href=\"http://www.pfhonline.org/health_manual-3d2.php\">Come back and track</a> how close you are to your goals.<hr><br>";
        return "Your Quit Date is three weeks away. Are you getting ready? Now's the time to start looking at the best ways to <a href=\"http://www.pfhonline.org/health_tips-relaxation.php\">relax</a>. Because whether it's deep breathing, meditation, writing, or yoga, relaxation techniques are proven to help people deal with the stress that can come with quitting smoking.<br><br>If you're already <a href=\"http://www.pfhonline.org/health_manual-3d.php\">nicotine fading</a>, keep at it and switch to a lower-nicotine brand.<br><br>Have you thought about your <a href=\"http://www.pfhonline.org/health_manual-3g.php\">triggers</a> &#150; the kinds of things that make you want to smoke? Thinking about how to fight them <b>before</b> they hit is key.<br><br>".$addOn."<i>If you need to pick a new Quit Date, please <a href=\"mailto:pfh@hcc-web.org\">email Katie</a> and she'll reset your Quit Date page.</i><br>";
    }

    // 4 weeks before quit date
    if ($weekNum==204) {
        $addOn="";
        if ($numPosts>0) $addOn="<hr>How are you doing with cutting back on your cigarettes? <a href=\"http://www.pfhonline.org/health_manual-3d2.php\">Come back and track</a> how close you are to your goals.<hr><br>";
        return "Your Quit Date is a month away! Now's the time to start getting ready, both physically and mentally.<br><br>Make quitting easier on your body by starting nicotine fading. You can do this by cutting back on the number of cigarettes you smoke, changing your brand to one with less nicotine, or both. This lets your body slowly get used to having less nicotine. <a href=\"http://www.pfhonline.org/health_manual-3d.php\">Read more</a> about it now.<br><br>And be sure to get in the right frame of mind by thinking ahead of time about how to <a href=\"http://www.pfhonline.org/health_manual-3g.php\">tame your triggers</a>. What sorts of things make you want to smoke, and how can you head them off before you itch to light up? Knowing the answers to this question can make all the difference once your Quit Date arrives.<br><br>".$addOn."<i>If you need to pick a new Quit Date, please <a href=\"mailto:pfh@hcc-web.org\">email Katie</a> and she'll reset your Quit Date page.</i><br>";
    }



    // ANY WEEK - NEVER VISITED
    if ($weekNum==105) {
        return "We see that you've not been to visit the <i>Partnership for Health</i> site. We're hoping that you get a chance to check it out. It's a one-of-a-kind Web site for childhood cancer survivors, with great health information for mind and body.<br><br>If you're having difficulty getting to the site or finding your way around, please <a href=\"mailto:pfh@hcc-web.org\">send an email</a> to Katie, our PFH Peer Counselor. She'll help you troubleshoot, so you can explore everything the site has to offer.<br><br>Want to give Partnership for Health a try? Visit now!<br><a href=\"http://www.pfhonline.org\">http://www.pfhonline.org</a><br><br>";
    }





    // QUIT DATE ENCOURAGEMENT
    if ($weekNum==301) {
        return "It seems you're ready to quit smoking, but you haven't picked a Quit Date yet. Come visit the site, and we'll help you pick a date that feels right for you.<br><br>Do you have concerns about quitting? We have plenty of information to help you deal with any anxiety or worries you've got. And when your date arrives, we'll be here, cheering you on. So come back to <i>Partnership for Health</i>!<br><br><b>Set a Quit Date today!</b><br><a href=\"http://www.pfhonline.org/health_manual-3l.php\">http://www.pfhonline.org/health_manual-3l.php</a><br><br><b>And while you're there:</b><br><br>Start thinking about how you'll kick old habits that make you want to smoke.<br><a href=\"http://www.pfhonline.org/health_manual-3g.php\">http://www.pfhonline.org/health_manual-3g.php</a><br><br>";
    }
    if ($weekNum==302) {
        return "It looks like you're ready to give quitting a chance, but you haven't set a Quit Date.<br><br>Is there anything that would help you feel more prepared to quit? Remember, <i>Partnership for Health</i> has plenty of information about how to handle cravings, what to do when people and places make you want to smoke, and more. And you'll be able to talk about your challenges and accomplishments with other childhood cancer survivors in the forum!<br><br><b>If you feel ready, set a Quit Date today!</b><br><a href=\"http://www.pfhonline.org/health_manual-3l.php\">http://www.pfhonline.org/health_manual-3l.php</a><br><br><b>And why not visit the forum to see if others are feeling the same way you are.</b><br><a href=\"http://www.pfhonline.org/forum/viewforum.php?f=1\">http://www.pfhonline.org/forum/viewforum.php?f=1</a><br><br>";
    }
    if ($weekNum==303) {
        return "It looks like you're thinking a lot about quitting smoking, but you haven't decided to set a Quit Date yet. If you've been checking out the site, you've probably seen that <i>Partnership for Health</i> can get you quit-smoking medication at no charge. The site also has great interactive exercises and other tools to help you really prepare for a successful Quit Date. When you're ready to try, we're here to help!<br><br><b>If you feel ready, set a Quit Date today!</b><br><a href=\"http://www.pfhonline.org/health_manual-3l.php\">http://www.pfhonline.org/health_manual-3l.php</a><br><br><b>Learn more about quit-smoking medications.</b><br><a href=\"http://www.pfhonline.org/health_pharmo.php\">http://www.pfhonline.org/health_pharmo.php</a><br><br>";
    }



}
?>

