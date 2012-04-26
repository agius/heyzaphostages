An Office Prank
===============

So, last weekend most of our leadership ran off to [Coachella](http://www.coachella.com). They took off Friday and Monday to enjoy the show and get a much-needed break. The rest of us proceeded to work on schedule since Heyzap is Serious Business (tm), but I couldn't resist the opportunity for a little prank.

Heyzap has a number of stuffed animals about the office. They make great items to twirl while you're thinking about massive problems, or nice little guys to cuddle while you're taking a power nap. Also, I'd been playing a lot of [Batman: Arkham City](http://community.batmanarkhamcity.com/) lately, and this guy kinda stuck with me:

<iframe width="560" height="315" src="http://www.youtube.com/embed/3WOovQFNWc4" frameborder="0" allowfullscreen="true">Loading Video...</iframe>

Somehow, the two clicked in my head, and I decided to set up my own convoluted set of riddles and take my own set of hostages. This began the adventure!

The Setup
=========

I knew I wanted something you could call in to. Sure, you could leave text clues around the office, or have a web site you go to or something, but there's something old-school about a voice on the phone taunting you. It's in so many movies. And having a scrambled, spooky, hostage-taker voice is way more engaging than plain text clues. It's the kind of gag that brings it from frustrating mini-game to fun adventure. So, how do we set up that kind of thing? I used [Twilio](http://www.twilio.com).

I bought a phone number from them, which you can do for $1 / month using their [API Explorer Tool](https://www.twilio.com/user/account/developer-tools/api-explorer), then set up an application on my existing (shared, php) web hosting. I set up a quick git repo and Capistrano deploy script, and I was ready to go! The php application is insanely simple - basically a copy of their [Hello Monkey](http://www.twilio.com/docs/quickstart/php/twiml/play-mp3-for-caller) tutorial. The whole source code for my app is [on my github](https://github.com/agius/heyzaphostages) if you're interested, but here's the relevant part:

    <Response>
      <?php if(file_exists($_SERVER{'DOCUMENT_ROOT'} . "/assets/". $_REQUEST['Digits'] . ".mp3")) { ?>
        <Play><?php echo "http://judeprank.atevans.com/assets/". $_REQUEST['Digits'] . ".mp3?version=3" ?></Play>
      <?php } else { ?>
        <Play>http://judeprank.atevans.com/assets/99999999.mp3</Play>
      <?php } ?>
    </Response>

Maybe not super secure, since you can find out if hidden files exist, but I don't have anything I'm worried about on this server.

Anyway, that done, I popped open IRB and used this function `(rand * 100000000).to_i` to generate a bunch of random 8-digit codes. I didn't want them to be able to figure out the file names from clues or anything else, so I figured 8 digits of entropy on a phone number was good enough to prevent brute-forcing attacks.

Finally, I came up with a bunch of clues and recorded them using GarageBand. I made up a set of Voice distortions so the bosses wouldn't know it was me, and the voice would sound suitably serious. [You can download the GarageBand file here](http://judeprank.atevans.com/assets/voice.tar.gz).

So, once I had some codes and some clues, I just had to print out some paper (gasp!) with the codes on it and distribute it around the office. Here's the guided tour.

Clues
=====
0. A note left on the desk -- 99999999  
   `Welcome to my game. if you win, you will get a reward. if not, the hostages will die. To begin, enter the code 98314335` [Voice Link](http://judeprank.atevans.com/assets/99999999.mp3)  
   ![hostage-taken](/images/hostages/hostages-taken.jpg)

1. From the phone call -- 98314335  
   `The rest of the codes are hidden in the office. Here's your clue for the first one. We see awesomeness every monday. But what's BEHIND the awesomeness?` [Voice Link](http://judeprank.atevans.com/assets/98314335.mp3)  
   _This is a reference to our weekly monday meetings, which always begin with a slide entitled "Heyzap Awesomeness"_
   
2. Behind TV in conference room -- 61034608  
   `Good guess, but the real secret is what's on the inside. Something... alcoholic.` [Voice Link](http://judeprank.atevans.com/assets/61034608.mp3)  
   ![first clue](/images/hostages/IMG_1951-hostages.jpg)
   
3. Taped inside kegganator door -- 97372993  
   `Now you're getting it. Your next clue is behind the least-used computer in the office.` [Voice Link](http://judeprank.atevans.com/assets/97372993.mp3)  
   ![second clue](/images/hostages/IMG_1952-hostages.jpg)

4. Behind computer in bike room -- 56303035  
   `The next clue requires a green thumb, and a power cord.` [Voice Link](http://judeprank.atevans.com/assets/56303035.mp3)  
   ![third clue](/images/hostages/IMG_1953-hostages.jpg)
   
5. In the cell phone garden -- 49076981  
   `You'd better hurry, or i will kill one of the hostages.  
   The paperless office is a universal dream. Your next clue is a nightmare.` [Voice Link](http://judeprank.atevans.com/assets/49076981.mp3)  
   _We only have one filing cabinet in the office. I also left a threatening note with this one for effect. Yes, that is a nerf gun._  
   ![fourth clue](/images/hostages/IMG_1954-hostages.jpg)  
   ![threatening picture](/images/hostages/hostages-threatened.jpg)

6. Behind the filing cabinet -- 29175769  
   `You're doing well. The clues will get harder from here.  
   You may need to use some collective intelligence to find the next one.` [Voice Link](http://judeprank.atevans.com/assets/29175769.mp3)  
   ![fourth clue](/images/hostages/IMG_1955-hostages.jpg)

7. Inside collective intelligence book -- 73433093  
   `The next clue is a hairy one - red and hairy.` [Voice Link](http://judeprank.atevans.com/assets/73433093.mp3)  
   _We have a red-colored wig in our cupboards that's supposed to look like our President's hair. Don't ask._  
   ![fourth clue](/images/hostages/IMG_1956-hostages.jpg)

8. Under the Jude wig on the shelves -- 76145273  
   `Remember when you could find a toy in your box of cheerios?` [Voice Link](http://judeprank.atevans.com/assets/76145273.mp3)  
   ![fourth clue](/images/hostages/IMG_1957-hostages.jpg)

9. Behind the cheerios in the kitchen -- 19626037  
   `From here you can see dinosaurs, plumbers, and how you're a pawn in my little game. I am underneath.` [Voice Link](http://judeprank.atevans.com/assets/19626037.mp3)  
   ![fourth clue](/images/hostages/IMG_1959-hostages.jpg)

10. Under the orange couch in the game room -- 28836890  
    `Almost there.  
    Your last clue is in cryostasis.` [Voice Link](http://judeprank.atevans.com/assets/28836890.mp3)  
    ![fourth clue](/images/hostages/IMG_1960-hostages.jpg)

11. In the bottom drawer of the freezer -- 13143233  
    `Congratulations! The countdown timer has five minutes left.  
    The best view isn't in the office, it's up the corporate ladder.` [Voice Link](http://judeprank.atevans.com/assets/13143233.mp3)  
    ![fourth clue](/images/hostages/IMG_1961-hostages.jpg)

12. The hostages are on the roof.  
    With a few toys for the hunters.  
    ![fourth clue](/images/hostages/IMG_1962-hostages.jpg)

Results
=======
Well, to be honest, this didn't go as well as I'd hoped.

Our company president got the message shortly after he got in on Tuesday. I noticed him showing our CTO, but I didn't say anything - the whole point of this was to be anonymous, right?

Well, then he just kinda sat at his computer doing work. Darn. We had our regular meetings and such, and got right back to business. I figured maybe he intended to check it out after work, so I stayed a bit late. Then our CTO realized that the whole Coachella crew was also booked to go see Rusko after work, around 8pm or so, later that night. Well.

The next day, Jude and crew were at work as normal, and there was no sign of disruption in the office whatsoever. Jude came over once to ask me if the code wasn't working (I presume our office admin - my co-conspirator - ratted me out), then proceeded to dial in, enter a code, then say "Oh wait, I hear a clue!" then dash off. Hmmmmm.

By 7pm on the third day, it started raining. I had placed a tarp over the office animals in case it rained on them Monday night, but I didn't think it would go on quite that long. I went ahead an rescued the animals myself and took down all the clues. I guess I miscalculated on Jude's busy-ness, his interest in adventure pranks, or maybe the Twilio app wasn't working on our office Cisco phones for some reason. 

Regardless, I guess unlike the Riddler, I totally won this round. The great Jude Gomila was no match for the intellect of Captain Conundrum! A little disappointing, but perhaps life isn't like in the comic books.

Anyway, next time I'm **changing Jude's computer password** and hiding that.

Hopefully someone else finds this collection of shenanigans useful. If you want some help organizing a prank, hit me up on [twitter](http://twitter.com/agius), [facebook](http://facebook.com/atevans), or via [email](andrew@atevans.com) -- I love this kinda stuff.