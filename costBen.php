<?
include("includes/site-functions.php");

// get cost per day
$mysqlID=dbConnect();
$resultID=mysql_query("SELECT * FROM PFHUserInfo WHERE id=".$_SESSION["userID"],$mysqlID);
if ($resultID) {
    if (mysql_num_rows($resultID)>0) {
        $specs=mysql_fetch_array($resultID,MYSQL_ASSOC);
    }
}
dbClose();

// PRIZES ARRAY
$allPrizes=array(
    0=>array( // 8 HOURS
        0=>array(2,"buy a cup of coffee","8hr_2_coffee.jpg","The carbon monoxide level in your blood drops to normal. The oxygen level in your blood increases to normal."),
        1=>array(5,"rent a movie and buy a bag of popcorn","8hr_5_rentmovie.jpg"),
        2=>array(7,"read a new magazine or paperback","8hr_7_magazine.jpg"),
        3=>array(10,"buy a movie ticket","8hr_10_movieticket.jpg"),
        4=>array(12,"gorge on a large pizza","8hr_12_pizza.jpg"),
        5=>array(15,"groove to a new CD","8hr_15_musicCD.jpg"),
        6=>array(20,"buy a hardcover bestseller","8hr_20_book.jpg"),
        7=>array(25,"have lunch with a friend","8hr_25_lunchwfriend.jpg"),
        8=>array(999999,"buy your neighborhood a swimming pool","8hr_25plus_pool.jpg")),
    1=>array( // 24 HOURS
        0=>array(2,"buy a cup of coffee","8hr_2_coffee.jpg","Your chance of heart attack decreases."),
        1=>array(5,"rent a movie and buy a bag of popcorn","8hr_5_rentmovie.jpg"),
        2=>array(7,"read a new magazine or paperback","8hr_7_magazine.jpg"),
        3=>array(10,"pay for a movie ticket","8hr_10_movieticket.jpg"),
        4=>array(12,"gorge on a large pizza","8hr_12_pizza.jpg"),
        5=>array(15,"groove to a new CD","8hr_15_musicCD.jpg"),
        6=>array(20,"watch a new DVD","24hr_20_DVD.jpg"),
        7=>array(25,"buy two movie tickets and a bucket of popcorn","24hr_25_movie.jpg"),
        8=>array(30,"take a niece or nephew bowling","24hr_30_bowling.jpg"), 
        9=>array(999999,"film your own reality show","24hr_35plus_realityshow.jpg")),
    2=>array( // 48 HOURS
        0=>array(2,"buy a cup of coffee","8hr_2_coffee.jpg","Your nerve endings start regrowing. Your ability to smell and taste gets better."),
        1=>array(5,"rent a movie and buy a bag of popcorn","8hr_5_rentmovie.jpg"),
        2=>array(7,"read a new magazine or paperback","8hr_7_magazine.jpg"),
        3=>array(10,"pay for a movie ticket","8hr_10_movieticket.jpg"),
        4=>array(12,"gorge on a large pizza","8hr_12_pizza.jpg"),
        5=>array(15,"groove to a new CD","8hr_15_musicCD.jpg"),
        6=>array(20,"watch a new DVD","24hr_20_DVD.jpg"),
        7=>array(25,"get two movie tickets and a bucket of popcorn","24hr_25_movie.jpg"),
        8=>array(30,"take a niece or nephew bowling","24hr_30_bowling.jpg"),
        9=>array(35,"spring for lunch out for two","8hr_25_lunchwfriend.jpg"),
        10=>array(40,"sport a new shirt","48hr_40_shirt.jpg"),
        11=>array(45,"buy your favorite band's boxed set","48hr_45_boxset.jpg"),
        12=>array(50,"play a new video game","48hr_50_videogame.jpg"),
        13=>array(60,"spring for dinner and drinks for two","48hr_60_dinneranddrinks.jpg"),
        14=>array(999999,"own your city's ballpark","48hr_65plus_ballpark.jpg")),
    3=>array( // 1 MONTH
        0=>array(20,"watch a new DVD","24hr_20_DVD.jpg","Your circulation improves. Walking becomes easier. Your lung function increases as much as 30 percent."),
        1=>array(25,"buy two movie tickets and a bucket of popcorn","24hr_25_movie.jpg"),
        2=>array(30,"play two new CDs","8hr_15_musicCD.jpg"),
        3=>array(35,"spring for lunch out for two","8hr_25_lunchwfriend.jpg"),
        4=>array(40,"watch two new DVDs","24hr_20_DVD.jpg"),
        5=>array(45,"pay for a month of high-speed Internet","1mo_175_cableANDbroadband.jpg"),
        6=>array(50,"play a new video game","48hr_50_videogame.jpg"),
        7=>array(60,"spring for dinner and drinks for two","48hr_60_dinneranddrinks.jpg"),
        8=>array(70,"step out in new shoes or sneakers","1mo_70_shoesORsneakers.jpg"),
        9=>array(80,"spring for dinner and a movie for two","1mo_80_Dinnerandmovie.jpg"),
        10=>array(90,"score two tickets to a concert","1mo_90_concert.jpg"),
        11=>array(100,"buy a new DVD player","1mo_100_DVDplayer.jpg"),
        12=>array(125,"zone out for a month of cable TV with all the premium channels","1mo_125_cable.jpg"),
        13=>array(150,"get a fancy haircut","1mo_150_fancyhaircut.jpg"),
        14=>array(175,"enjoy a month of premium cable TV AND broadband internet","1mo_175_cableANDbroadband.jpg"),
        15=>array(200,"splurge on a new TiVo box","1mo_200_TiVo.jpg"),
        16=>array(250,"buy a DVD recorder","1mo_250_dvdrecorder.jpg"),
        17=>array(300,"get a new iPod","1mo_300_iPod.jpg"),
        18=>array(350,"pay for a round-trip plane ticket across the country","1mo_350_planeticket.jpg"),
        19=>array(400,"choose a new piece of furniture for your home or apartment","1mo_400_furniture.jpg"),
        20=>array(500,"bring home a purebred dog","1mo_500_purbredpuppy.jpg"),
        21=>array(600,"plop in front of a new TV","1mo_600_TV.jpg"),
        22=>array(700,"nap on a new couch","1mo_700_sofa.jpg"),
        23=>array(999999,"pilot your own blimp","1mo_700plus_blimp.jpg")),
    4=>array( // 6 MONTHS
        0=>array(75,"enjoy a bunch of new CDs or DVDs","6mo_125orless_bunchofCDs.jpg","Coughing, congestion, fatigue, and shortness of breath decrease. The cilia in your lungs regrows, which helps them handle mucus, stay clean, and reduce infection. Your energy level increases."),
        1=>array(125,"buy a new DVD player","1mo_100_DVDplayer.jpg"),
        2=>array(150,"dress yourself in new clothes","48hr_40_shirt.jpg"),
        3=>array(200,"receive a deluxe spa massage","5yrs_15000_pool.jpg"),
        4=>array(250,"buy a DVD recorder","1mo_250_dvdrecorder.jpg"),
        5=>array(300,"get a new iPod","1mo_300_iPod.jpg"),
        6=>array(350,"pay for a round-trip plane ticket across the country","1mo_350_planeticket.jpg"),
        7=>array(400,"choose a new piece of furniture for your home or apartment","1mo_400_furniture.jpg"),
        8=>array(500,"splurge on a TiVo box with lifetime TiVo service","1mo_200_TiVo.jpg"),
        9=>array(600,"plop in front of a new TV","1mo_600_TV.jpg"),
        10=>array(700,"buy a new computer","6mo_700_computer.jpg"),
        11=>array(800,"have some savings for your holiday shopping","6mo_800_holidayshopping.jpg"),
        12=>array(900,"replace that crummy old kitchen appliance","6mo_900_appliance.jpg"),
        13=>array(1000,"Get away! Hotel and airfare for a great escape.","6mo_1000_getaway.jpg"),
        14=>array(1250,"sit a new laptop computer on your knee","6mo_1250_laptop.jpg"),
        15=>array(1500,"glue your eyes to a new big-screen TV","6mo_1500_widescreenTV.jpg"),
        16=>array(2000,"entertain friends with a home theater system","6mo_2000_hometheater.jpg"),
        17=>array(2500,"head south for a tropical vacation for two","6mo_1000_getaway.jpg"),
        18=>array(3000,"lounge in a hot tub","6mo_3000_hottub.jpg"),
        19=>array(4000,"redecorate your home","6mo_4000_redecorate.jpg"),
        20=>array(999999,"shake, rattle, and roll with an Elvis Pinball machine","6mo_4000plus_pinball.jpg")),
    5=>array( // 1 YEAR
        0=>array(250,"buy a DVD recorder","1mo_250_dvdrecorder.jpg","Your excess risk of coronary heart disease is half that of a smoker."),
        1=>array(300,"get a new iPod","1mo_300_iPod.jpg"),
        2=>array(350,"pay for a round-trip plane ticket across the country","1mo_350_planeticket.jpg"),
        3=>array(400,"choose a new piece of furniture for your home","1mo_400_furniture.jpg"),
        4=>array(500,"splurge on a TiVo box with lifetime TiVO service","1mo_200_TiVo.jpg"),
        5=>array(600,"plop in front of a new TV","1mo_600_TV.jpg"),
        6=>array(700,"buy a new computer","6mo_700_computer.jpg"),
        7=>array(800,"define yourself with a new high-definition TV","1mo_600_TV.jpg"),
        8=>array(900,"replace that crummy old kitchen appliance","6mo_900_appliance.jpg"),
        9=>array(1000,"Get away! Hotel and airfare for a great escape","6mo_1000_getaway.jpg"),
        10=>array(1250,"sit a new laptop computer on your knee","6mo_1250_laptop.jpg"),
        11=>array(1500,"enjoy a new flat-screen TV","6mo_1500_widescreenTV.jpg"),
        12=>array(2000,"head south on a tropical vacation for two","6mo_1000_getaway.jpg"),
        13=>array(2500,"entertain friends with a home theater system","6mo_2000_hometheater.jpg"),
        14=>array(3000,"lounge in a hot tub","6mo_3000_hottub.jpg"),
        15=>array(4000,"redecorate your home","6mo_4000_redecorate.jpg"),
        16=>array(6000,"include everybody in an all-inclusive European vacation","1yr_6000_eurovaca.jpg"),
        17=>array(8000,"use cash for a used car","1yr_8000_usedcar.jpg"),
        18=>array(999999,"throw a party for all your friends in Vegas","1yr_8000plus_vegas.jpg")),
    6=>array( // 5 YEARS
        0=>array(1000,"Get away! Hotel and airfare for a great escape.","6mo_1000_getaway.jpg","Your risk of stroke is reduced to that of a nonsmoker within 5 to 15 years after quitting. Your risk of cancer of the mouth, throat, and esophagus is half that of a smoker."),
        1=>array(1250,"sit a new laptop computer on your knee","6mo_1250_laptop.jpg"),
        2=>array(1500,"enjoy a new flat-screen TV","6mo_1500_widescreenTV.jpg"),
        3=>array(2000,"head south for a tropical vacation for two","6mo_1000_getaway.jpg"),
        4=>array(2500,"entertain friends with a home theater system","6mo_2000_hometheater.jpg"),
        5=>array(3000,"lounge in a hot tub","6mo_3000_hottub.jpg"),
        6=>array(4000,"redecorate your home","6mo_4000_redecorate.jpg"),
        7=>array(6000,"hula on a top-notch Hawaiian vacation","6mo_1000_getaway.jpg"),
        8=>array(8000,"pay cash for a used car","1yr_8000_usedcar.jpg"),
        9=>array(10000,"make a generous donation to your favorite cause","5yrs_10000_donation.jpg"),
        10=>array(12500,"sport many carats","5yrs_12500_engagementring.jpg"),
        11=>array(15000,"dig an inground pool","5yrs_15000_pool.jpg"),
        12=>array(20000,"hit the road in a new car or truck","5yrs_20000_newcar.jpg"),
        13=>array(25000,"redo your kitchen","5yrs_25000_remodelkitchen.jpg"),
        14=>array(30000,"go back to school","5yrs_30000_backtoschool.jpg"),
        15=>array(35000,"buy a vacation bungalow","5yrs_35000_bungalow.jpg"),
        16=>array(40000,"pay cash for a luxury car or SUV","5yrs_40000_luxuryauto.jpg"),
        17=>array(999999,"buy that stable of ponies you've always wanted","5yrs_40000plus_stableofponi.jpg")),
    7=>array( // 10 YEARS
        0=>array(2000,"head south on a tropical vacation for two","6mo_1000_getaway.jpg","Precancerous cells are replaced. The risk of mouth, throat, esophagus, and abdominal cancers decreases. After 15 years, the risk of heart disease is equal to a nonsmoker's with a similar health history."),
        1=>array(2500,"entertain friends with a home theater system","6mo_2000_hometheater.jpg"),
        2=>array(3000,"lounge in a hot tub","6mo_3000_hottub.jpg"),
        3=>array(4000,"redecorate your home","6mo_4000_redecorate.jpg"),
        4=>array(6000,"set sail on a super-luxurious cruise","6mo_1000_getaway.jpg"),
        5=>array(8000,"use cash for a used car","1yr_8000_usedcar.jpg"),
        6=>array(10000,"buy something silver or gold","5yrs_12500_engagementring.jpg"),
        7=>array(12500,"pay down student loans","10yrs_70000_cashforretire.jpg"),
        8=>array(15000,"dig an in-ground pool","5yrs_15000_pool.jpg"),
        9=>array(20000,"put in a pool and redo your backyard","5yrs_15000_pool.jpg"),
        10=>array(25000,"redo your kitchen","5yrs_25000_remodelkitchen.jpg"),
        11=>array(30000,"go back to school","5yrs_30000_backtoschool.jpg"),
        12=>array(35000,"put an addition on your house","5yrs_35000_bungalow.jpg"),
        13=>array(40000,"pay cash for a luxury car or SUV","5yrs_40000_luxuryauto.jpg"),
        14=>array(50000,"have a downpayment on a condo","10yrs_50000_condo.jpg"),
        15=>array(60000,"put an addition on your house","10yrs_60000_additiononhouse.jpg"),
        16=>array(70000,"have over $85,000 for your retirement","10yrs_70000_cashforretire.jpg"),
        17=>array(80000,"buy a boat","10yrs_80000_boat.jpg"),
        18=>array(999999,"buy a helicopter","10yrs_80000plus_helicopter.jpg")));


// INITIALIZE VARIABLES
$smokingDollars=$specs["costPerDay"];
$multipliers=array(.333,1,2,30,182,365,1825,3650);

// WRITE VARIABLES
for ($j=0; $j<8; $j++) {
    $thisPrize=$allPrizes[$j][0][1];
    $thisImg=$allPrizes[$j][0][2];
    $thisHeal=$allPrizes[$j][0][3];
    $amtSaved=$smokingDollars*$multipliers[$j];
    reset($allPrizes[$j]);
    for ($i=0; $i<count($allPrizes[$j]); $i++) {
        if ($amtSaved>$allPrizes[$j][$i][0]) {
            $thisPrize=$allPrizes[$j][($i+1)][1];
            $thisImg=$allPrizes[$j][($i+1)][2];
        }
    }
    if ($amtSaved>100) $amtSaved=round($amtSaved);
    if (floor($amtSaved)==$amtSaved) {
        $amtSavedSTRING="$".sprintf("%u",$amtSaved)."!";
    } else {
        $amtSavedSTRING="$".sprintf("%01.2f",$amtSaved)."!";
    }
    $decPos=strpos($amtSavedSTRING,".");
    if (!$decPos) $decPos=strlen($amtSavedSTRING)-1;
    if ($decPos>4) $amtSavedSTRING=substr($amtSavedSTRING,0,($decPos-3)).",".substr($amtSavedSTRING,($decPos-3),strlen($amtSavedSTRING));
    echo "&amtSaved".($j+1)."=".urlencode($amtSavedSTRING)."&prize".($j+1)."=".urlencode($thisPrize)."&img".($j+1)."=".urlencode($thisImg)."&healthMsg".($j+1)."=".urlencode($thisHeal);
}
echo "&";

?>